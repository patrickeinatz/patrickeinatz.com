<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news/{slug}", name="news")
     */
    public function news(Article $article)
    {
        return $this->render('news/news_article.html.twig', [
            'breadcrumb' => str_replace('-','_', $article->getSlug()),
            'article' => $article
        ]);
    }
}
