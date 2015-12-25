<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TagController extends Controller
{
    /**
     * @Route("/", name="app_tags_tags")
     */
    public function tagsAction(Request $request)
    {
        $m = $this->getDoctrine()->getManager();

        $tagRepo = $m->getRepository('AppBundle:Tag');

        $tagsQuery = $tagRepo->queryFindAllTags();

        $tags = $this->get('knp_paginator')->paginate($tagsQuery, $request->query->getInt('page', 1), Tag::PAGINATION_ITEMS);

        return $this->render(':tag:tags.html.twig', [
            'tags' => $tags,
        ]);
    }
}
