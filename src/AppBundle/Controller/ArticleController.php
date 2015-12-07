<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
    /**
     * @Route("/", name="app_article_articles")
     */
    public function articlesAction(Request $request)
    {
        $m = $this->getDoctrine()->getManager();

        $articleRepo = $m->getRepository('AppBundle:Article');

        // $articles = $articleRepo->findAll() ---> Does lazy loading and it produces extra queries from the templates

        $query = $articleRepo->queryAllArticles();

        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate($query, $request->query->getInt('page', 1), 2);

        return $this->render(':article:articles.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/add-article", name="app_article_addArticle")
     */
    public function addArticleAction()
    {
        $a = new Article();
        $form = $this->createForm(ArticleType::class, $a, ['action' => $this->generateUrl('app_article_doAddArticle')]);

        return $this->render(':article:addArticle.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/do-add-article", name="app_article_doAddArticle")
     */
    public function doAddArticleAction(Request $request)
    {
        $a = new Article();
        $form = $this->createForm(ArticleType::class, $a);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $m = $this->getDoctrine()->getManager();
            $tagRepo = $m->getRepository('AppBundle:Tag');
            $tagRepo->addTagsIfAreNew($a);
            $a->setAuthor($this->getUser());
            $m->persist($a);
            $m->flush();

            return $this->redirectToRoute('app_article_articles');
        }

        return $this->render(':article:addArticle.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
