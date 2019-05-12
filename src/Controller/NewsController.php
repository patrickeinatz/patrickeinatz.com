<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news/{slug}", name="news")
     */
    public function news($slug, EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Article::class);

        /** @var Article $article */
        $article = $repository->findOneBy(['slug' => $slug]);

        if(!$article){
            throw $this->createNotFoundException(sprintf('No article found for slug: "%s"',$slug));
        }

        return $this->render('news/news_article.html.twig', [
            'slug' => str_replace('-','_', $slug),
            'article' => $article
        ]);
    }
}
