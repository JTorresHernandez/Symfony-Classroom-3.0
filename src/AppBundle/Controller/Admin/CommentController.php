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


use AppBundle\Entity\Comment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentController extends Controller
{
    /**
     * @Route("/remove/{id}", name="app_admin_comment_remove")
     */
    public function removeCommnentAction(Comment $comment)
    {
        $m = $this->getDoctrine()->getManager();
        $m->remove($comment);
        $m->flush();

        return $this->redirectToRoute('app_article_show', ['slug' => $comment->getArticle()->getSlug()]);
    }
}