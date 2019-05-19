<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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

    /**
     * @Route("/news/{slug}/like", name="news_toggleLikes")
     */
    public function toggleArticleLikes(Article $article, EntityManagerInterface $em)
    {
        $article->incrementLikes();
        $em->flush();

        return new JsonResponse(['likes' => $article->getLikes()]);
    }
}
