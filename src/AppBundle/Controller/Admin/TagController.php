<?php
/**
 * (c) Ismael Trascastro <i.trascastro@gmail.com>
 *
 * @link        http://www.ismaeltrascastro.com
 * @copyright   Copyright (c) Ismael Trascastro. (http://www.ismaeltrascastro.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagController extends Controller
{
    /**
     * @Route("/unused", name="app_admin_tag_unused")
     */
    public function showUnusedTagsAction()
    {
        $m = $this->getDoctrine()->getManager();
        $tagRepo = $m->getRepository('AppBundle:Tag');

        $tags = $tagRepo->getUnusedTags();
        // \Doctrine\Common\Util\Debug::dump($tags);

        return $this->render(':admin/tag:unused-tags.html.twig', [
            'tags' => $tags,
        ]);
    }

    /**
     * @Route("/remove/{id}", name="app_admin_tag_remove")
     */
    public function removeTagAction(Tag $tag)
    {
        $m = $this->getDoctrine()->getManager();
        $m->remove($tag);
        $m->flush();

        return $this->redirectToRoute('app_admin_tag_unused');
    }

    /**
     * @Route("/remove-all-unused-tags", name="app_admin_tag_removeAllUnusedTags")
     */
    public function removeAllUnusedTagsAction()
    {
        $m = $this->getDoctrine()->getManager();
        $tagRepo = $m->getRepository('AppBundle:Tag');

        $tags = $tagRepo->getUnusedTags();

        foreach ($tags as $tag) {
            $m->remove($tag);
        }

        $m->flush();

        return $this->redirectToRoute('app_admin_tag_unused');
    }
}