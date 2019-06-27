<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFromType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class NewsAdminController
 * @package App\Controller*
 */

class NewsAdminController extends AbstractController
{
    /**
     * @Route("/backend/news", name="be_news_manager")
     * @IsGranted("ROLE_ADMIN_NEWS")
     */
    public function index(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();

        return $this->render('news_admin/index.html.twig',[
            'title' => 'News Manager',
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/backend/news/new", name="be_news_new")
     * @IsGranted("ROLE_ADMIN_NEWS")
     */
    public function new(EntityManagerInterface $em, Request $request)
    {
        $form = $this->createForm(ArticleFromType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            /** @var Article $article */
            $article = $form->getData();

            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Artilce Created!');

            return $this->redirectToRoute('be_news_manager');
        }

        return $this->render('news_admin/new.tml.twig',[
            'title' => 'Create New News-Article',
            'articleForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/backend/news/{id}/edit")
     * @IsGranted("MANAGE", subject="article")
     */
    public function edit(Article $article)
    {
        dd($article);
    }
}
