<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LogController extends AbstractController
{
    /**
     * @Route("/", name="log")
     */
    public function index(ArticleRepository $repository)
    {

        $articles = $repository->findAllPublishedOrderByNewest();

        return $this->render('frontend/log/log.html.twig', [
            'title' => 'Log',
            'articles' => $articles
        ]);
    }


    /**
     * @Route("/log/{slug}", name="log_entry")
     */
    public function news(Article $article)
    {
        return $this->render('frontend/log/log_entry.twig', [
            'breadcrumb' => str_replace('-','_', $article->getSlug()),
            'article' => $article,
        ]);
    }

    /**
     * @Route("/log/{slug}/lits", name="log_toggleLits")
     */
    public function toggleArticleLikes(Article $article, EntityManagerInterface $em)
    {

        $article->incrementLikes();
        $em->flush();

        return new JsonResponse(['likes' => $article->getLikes()]);
    }
}
