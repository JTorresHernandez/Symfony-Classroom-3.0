<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
    public function showFormAction($id)
    {
        $c = new Comment();
        $form = $this->createForm(CommentType::class, $c, ['action' => $this->generateUrl('app_comment_new', ['id' => $id])]);

        return $this->render(':comment:show-form.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new/{id}", name="app_comment_new")
     * @Method(methods={"POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function submitCommentAction(Request $request, Article $article)
    {
        $c = new Comment();
        $form = $this->createForm(CommentType::class, $c, [
            'action' => $this->generateUrl('app_comment_new', ['id' => $article->getId()])
        ]);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $c->setAuthor($this->getUser());
            $c->setArticle($article);
            $m = $this->getDoctrine()->getManager();
            $m->persist($c);
            $m->flush();

            return $this->redirectToRoute('app_article_show', ['slug' => $article->getSlug()]);
        }

        return $this->forward('AppBundle:Comment:showForm', ['id' => $article->getId()]);
    }

    /**
     * @Route("/edit/{id}", name="app_comment_edit")
     */
    public function editAction(Comment $comment, Request $request)
    {
        if (!$this->isGranted('ROLE_ADMIN') and $this->getUser() != $comment->getAuthor()) {
            throw $this->createAccessDeniedException('You are not allowed to do this');
        }

        $form = $this->createForm(CommentType::class, $comment, ['submit_label' => 'Edit Comment']);

        if ($request->getMethod() == Request::METHOD_POST) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $m = $this->getDoctrine()->getManager();
                $m->flush();

                return $this->redirectToRoute('app_article_show', ['slug' => $comment->getArticle()->getSlug()]);
            }
        }

        return $this->render(':comment:show-form-edit-mode.html.twig', [
            'form'      => $form->createView(),
        ]);
    }
}
