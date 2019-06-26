<?php

namespace App\Controller;

use App\Entity\Article;
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
     * @Route("/backend/news", name="be_news")
     * @IsGranted("ROLE_ADMIN_NEWS")
     */
    public function index()
    {
        return $this->render('news_admin/index.html.twig',[
            'title' => 'News Manager'
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
