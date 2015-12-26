<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Tag;
use AppBundle\Form\ArticleType;
use AppBundle\Security\ArticleVoter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Trascastro\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class ArticleController extends Controller
{
    /**
     * @Route("/", name="app_article_articles")
     * @Cache(smaxage=60)
     */
    public function articlesAction(Request $request)
    {
        $m = $this->getDoctrine()->getManager();
        $articleRepo = $m->getRepository('AppBundle:Article');

        // $articles = $articleRepo->findAll() ---> Does lazy loading and it produces extra queries from the templates

        $query = $articleRepo->queryAllArticles();

        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            Article::PAGINATION_ITEMS,
            [
                'wrap-queries' => true, // https://github.com/KnpLabs/knp-components/blob/master/doc/pager/config.md
            ]
        );

        $response = $this->render(':article:articles.html.twig', [
            'articles'  => $articles,
            'title'     => 'Articles'
        ]);

        //$response->setLastModified($articles[0]->getUpdatedAt());
        //$response->isNotModified($request); // Needed to generate a 304 (cache) response

        return $response;
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

                return $this->redirectToRoute('app_article_show', ['slug' => $a->getSlug()]);
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
     * @Route("edit/{slug}.html", name="app_article_edit")
     */
    public function editAction(Article $article, Request $request)
    {
        /*
         * Without voter
         */
        // if (!$this->isGranted('ROLE_ADMIN') and $article->getAuthor() != $this->getUser()) {
        //    throw $this->createAccessDeniedException('You cannot access this page');
        // }

        $this->denyAccessUnlessGranted(ArticleVoter::EDIT_ARTICLE, $article);

        $form = $this->createForm(ArticleType::class, $article, [
            'submit_label'  => 'Edit Article'
        ]);

        $now = new \DateTime();
        $sinceCreated = $now->diff($article->getCreatedAt());
        $minutes = $sinceCreated->days * 24 * 60 + $sinceCreated->h * 60 + $sinceCreated->i;

        if ($minutes > 4 and !$this->isGranted('ROLE_ADMIN')) {
            $form->remove('title');
        }

        if ($request->getMethod() == Request::METHOD_POST) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $m = $this->getDoctrine()->getManager();
                $tagRepo = $m->getRepository('AppBundle:Tag');
                $tagRepo->addTagsIfAreNew($article);

                $m->flush();

                return $this->redirectToRoute('app_article_show', ['slug' => $article->getSlug()]);
            }
        }

        return $this->render(':article:form.html.twig', [
            'form'  => $form->createView(),
            'title' => 'Edit Article',
        ]);
    }

    /**
     * @Route("/{slug}.html", name="app_article_show")
     */
    public function showAction(Article $article, Request $request)
    {
        $m = $this->getDoctrine()->getManager();
        $commentRepo = $m->getRepository('AppBundle:Comment');

        $query = $commentRepo->queryCommentsByArticle($article->getId());

        $paginator = $this->get('knp_paginator');
        $comments = $paginator->paginate($query, $request->query->getInt('page', 1), Comment::PAGINATION_ITEMS);

        return $this->render(':article:article.html.twig', [
            'article'   => $article,
            'comments'  => $comments,
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
        $articles = $paginator->paginate($query, $request->query->getInt('page', 1), Article::PAGINATION_ITEMS);

        return $this->render(':article:articles.html.twig', [
            'articles'  => $articles,
            'title'     => '#' . $tag->getName(),
        ]);
    }

    /**
     * @Route("/articles/user/{username}", name="app_articles_byUser")
     */
    public function articlesByUSerAction(User $user, Request $request)
    {
        $m = $this->getDoctrine()->getManager();
        $articleRepo = $m->getRepository('AppBundle:Article');

        $query = $articleRepo->queryArticlesByUserId($user->getId());

        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate($query, $request->query->getInt('page', 1), Article::PAGINATION_ITEMS);

        return $this->render(':article:articles.html.twig', [
            'articles'  => $articles,
            'title'     => '@' . $user->getUsername(),
        ]);
    }
}
