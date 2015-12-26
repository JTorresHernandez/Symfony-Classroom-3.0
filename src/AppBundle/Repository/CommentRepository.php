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

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{
    public function queryCommentsByArticle($id)
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.article', 'article')
            ->andWhere('article.id = :id')
            ->setParameter('id', $id)
            ->addOrderBy('c.createdAt', 'DESC')
            ->getQuery()
        ;
    }

    public function commentsByArticle($id)
    {
        return $this->queryCommentsByArticle($id)->execute();
    }

    public function removeCommentsByArticle($id)
    {
        $this->createQueryBuilder('c')
            ->delete()
            ->leftJoin('c.article', 'article')
            ->andWhere('article.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->execute()
        ;
    }

    public function lastComments()
    {
        return $this->createQueryBuilder('c')
            ->addOrderBy('c.createdAt', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->execute()
        ;
    }
}