<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExampleController extends Controller
{
    /**
     * http://symfony.com/doc/current/bundles/FOSUserBundle/user_manager.html
     *
     */
    public function indexAction()
    {
        /*
        $user_manager = $this->get('fos_user.user_manager');
        $users = $user_manager->findUsers();
        var_dump($users);die;
        */
        $m = $this->getDoctrine()->getManager();
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername('ismael');

        $user->setPlainPassword('1234');
        $userManager->updateUser($user, false);
        $m->flush();
        //var_dump($userRepository->myFindOneByUsernameOrEmail('i.trascastro@gmail.com'));
        return $this->render(':index:index.html.twig');
    }

    /**
     * @Route(
     *     path="/send-email",
     *     name="app_index_sendEmail"
     * )
     */
    public function sendEmailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('dsfs')
            ->setFrom('symfonyclassroom@gmail.com')
            ->setTo('i.trascastro@gmail.com')
            ->setBody('test');

        $mailer = $this->get('mailer');
        $mailer->send($message);

        return $this->render(':index:email.html.twig');
    }
}
