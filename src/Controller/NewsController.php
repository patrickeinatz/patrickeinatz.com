<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news/{slug}", name="news")
     */
    public function news($slug)
    {

        return $this->render('news/news_article.html.twig', [
            'title' => str_replace('-',' ',$slug),
            'slug' => str_replace('-','_', $slug)
        ]);
    }
}
