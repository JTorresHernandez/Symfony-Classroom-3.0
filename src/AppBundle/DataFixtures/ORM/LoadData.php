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

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Tag;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trascastro\UserBundle\Entity\User;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $m)
    {
        $user1 = new User();
        $user1
            ->setUsername('ismael')
            ->setPlainPassword('1234')
            ->setEmail('ismael@email.com')
            ->setRoles(['ROLE_USER'])
            ->setEnabled(true)
        ;
        $m->persist($user1);

        $user2 = new User();
        $user2
            ->setUsername('admin')
            ->setPlainPassword('1234')
            ->setEmail('admin@email.com')
            ->setRoles(['ROLE_ADMIN'])
            ->setEnabled(true)
        ;
        $m->persist($user2);

        $a0 = new Article();
        $a0->setTitle('PHP 7 is twice faster');
        $a0->setAuthor($user1);
        $a0->setIntro('
            Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it?
        ');
        $a0->setContent('
            Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb.
        ');
        $m->persist($a0);

        $a1 = new Article();
        $a1->setTitle('Boston Celtics NBA Champions');
        $a1->setAuthor($user1);
        $a1->setIntro('
            Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it?
        ');
        $a1->setContent('
            Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb.
        ');
        $m->persist($a1);

        $a2 = new Article();
        $a2->setTitle('Marcus Smart named player of the month');
        $a2->setAuthor($user2);
        $a2->setIntro('
            Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.
        ');
        $a2->setContent('
            Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they\'re actually proud of that shit.
        ');
        $m->persist($a2);

        $a3 = new Article();
        $a3->setTitle('Symfony 3 is here');
        $a3->setAuthor($user1);
        $a3->setIntro('
            ow that we know who you are, I know who I am. I\'m not a mistake! It all makes sense!
        ');
        $a3->setContent('
            In a comic, you know how you can tell who the arch-villain\'s going to be? He\'s the exact opposite of the hero. And most times they\'re friends, like you and me! I should\'ve known way back when... You know why, David? Because of the kids. They called me Mr Glass.
        ');
        $m->persist($a3);

        $a4 = new Article();
        $a4->setTitle('Functional Testing');
        $a4->setAuthor($user1);
        $a4->setIntro('
            Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it?
        ');
        $a4->setContent('
            Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb.
        ');
        $m->persist($a4);

        $t1 = new Tag();
        $t1->setName('Boston Celtics');

        $t2 = new Tag();
        $t2->setName('NBA');

        $t3 = new Tag();
        $t3->setName('Sports');

        $t4 = new Tag();
        $t4->setName('Symfony');

        $t5 = new Tag();
        $t5->setName('PHP');

        $t6 = new Tag();
        $t6->setName('Programming');

        $c0 = new Comment();
        $c0
            ->setArticle($a0)
            ->setAuthor($user1)
            ->setComment('Love this article')
        ;
        $m->persist($c0);

        $a0
            ->addTag($t5)
            ->addTag($t6)
        ;

        $a1
            ->addTag($t1)
            ->addTag($t2)
            ->addTag($t3)
        ;

        $a2
            ->addTag($t1)
            ->addTag($t2)
            ->addTag($t3)
        ;

        $a3
            ->addTag($t4)
            ->addTag($t5)
            ->addTag($t6)
        ;

        $a4
            ->addTag($t4)
            ->addTag($t5)
            ->addTag($t6)
        ;

        $m->flush();
    }

}