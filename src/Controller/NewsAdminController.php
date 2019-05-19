<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsAdminController extends AbstractController
{
    /**
     * @Route("/backend/news/create", name="be_news_create")
     */
    public function createNewsArticle(EntityManagerInterface $em)
    {
        die('todo');

        return new Response(sprintf(
           'Hiya! New article id: #%d slug: %s',
           $article->getId(),
           $article->getSlug()
        ));
    }
}
