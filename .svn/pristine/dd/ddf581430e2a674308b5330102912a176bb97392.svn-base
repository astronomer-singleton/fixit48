<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        $user = $this->getUser();
        $username = '';
        if (isset($user)) {
            $username = ' ['.$user->getEmail().'] ';
        }

        return $this->render('main/homepage.html.twig',[
            'username' => $username
        ]);
    }
}