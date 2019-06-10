<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsAdminController extends AbstractController
{
    /**
     * @Route("/backend/news", name="be_news")
     */
    public function index()
    {
        return $this->render('comment_admin/index.html.twig',[
            'title' => 'News Manager'
        ]);
    }
}
