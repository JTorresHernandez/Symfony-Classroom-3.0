<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Tag;
use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Trascastro\UserBundle\Entity\User;
use Trascastro\UserBundle\UserBundle;

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
            'articles'  => $articles,
            'title'     => 'Articles'
        ]);
    }

    /**
     * @Route("/new", name="app_article_new")
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction(Request $request)
    {
        $a = new Article();
        $form = $this->createForm(ArticleType::class, $a);

        if ($request->getMethod() == Request::METHOD_POST) {
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
        }

        return $this->render(':article:form.html.twig', [
            'form'  => $form->createView(),
            'title' => 'New Article',
        ]);
    }

    /**
     * http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html
     *
     * @Route("edit/{id}", name="app_article_edit")
     */
    public function editAction(Article $article, Request $request)
    {
        if (!$this->isGranted('ROLE_ADMIN') and $article->getAuthor() != $this->getUser()) {
            throw $this->createAccessDeniedException('You cannot access this page');
        }

        $form = $this->createForm(ArticleType::class, $article, [
            'submit_label'  => 'Edit Article'
        ]);

        if ($request->getMethod() == Request::METHOD_POST) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $m = $this->getDoctrine()->getManager();
                $tagRepo = $m->getRepository('AppBundle:Tag');
                $tagRepo->addTagsIfAreNew($article);

                $m->flush();

                return $this->redirectToRoute('app_article_articles');
            }
        }

        return $this->render(':article:form.html.twig', [
            'form'  => $form->createView(),
            'title' => 'Edit Article',
        ]);
    }

    /**
     * @Route("/show/{id}", name="app_article_show")
     */
    public function showAction(Article $article)
    {
        return $this->render(':article:article.html.twig', [
            'article' => $article
        ]);
    }

    /**
     * @Route("/articles/tag/{name}", name="app_articles_byTag")
     */
    public function articlesByTagAction(Tag $tag, Request $request)
    {
        $m = $this->getDoctrine()->getManager();
        $articleRepo = $m->getRepository('AppBundle:Article');

        $query = $articleRepo->queryArticlesByTagId($tag->getId());

        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate($query, $request->query->getInt('page', 1), 2);

        return $this->render(':article:articles.html.twig', [
            'articles'  => $articles,
            'title'     => '#' . $tag->getName(),
        ]);
    }

    /**
     * @Route("/articles/user/{username}", name="app_articles_byUser")
     */
    public function articlesByUSer(User $user, Request $request)
    {
        $m = $this->getDoctrine()->getManager();
        $articleRepo = $m->getRepository('AppBundle:Article');

        $query = $articleRepo->queryArticlesByUserId($user->getId());

        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate($query, $request->query->getInt('page', 1), 2);

        return $this->render(':article:articles.html.twig', [
            'articles'  => $articles,
            'title'     => '@' . $user->getUsername(),
        ]);
    }
}
