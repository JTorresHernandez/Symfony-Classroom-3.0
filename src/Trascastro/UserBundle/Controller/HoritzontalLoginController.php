<?php

namespace Trascastro\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HoritzontalLoginController extends Controller
{
    public function horitzontalLoginAction()
    {
        $last_username = $this->get('security.authentication_utils')->getLastUsername();

        return $this->render('UserBundle:Security:horitzontal-login.html.twig', [
            'last_username' => $last_username,
        ]);
    }
}
