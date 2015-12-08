<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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
     * @Route("edit/{id}", name="app_article_edit")
     */
    public function editAction($id, Request $request)
    {
        $m = $this->getDoctrine()->getManager();
        $articleRepo = $m->getRepository('AppBundle:Article');

        $a = $articleRepo->find($id);

        if ($a) {
            if (!$this->isGranted('ROLE_ADMIN') and $a->getAuthor() != $this->getUser()) {
                throw $this->createAccessDeniedException('You cannot access this page');
            }

            $form = $this->createForm(ArticleType::class, $a, [
                'submit_label'  => 'Edit Article'
            ]);

            if ($request->getMethod() == Request::METHOD_POST) {
                $form->handleRequest($request);

                if ($form->isValid()) {
                    $tagRepo = $m->getRepository('AppBundle:Tag');
                    $tagRepo->addTagsIfAreNew($a);

                    $m->flush();

                    return $this->redirectToRoute('app_article_articles');
                }
            }

            return $this->render(':article:form.html.twig', [
                'form'  => $form->createView(),
                'title' => 'Edit Article',
            ]);
        }

        return $this->redirectToRoute('app_index_index');
    }
}
