<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/lgn", name="login")
     */
    public function index()
    {
        return $this->render('login/login.html.twig', [
            'title' => 'Login',
        ]);
    }
}
