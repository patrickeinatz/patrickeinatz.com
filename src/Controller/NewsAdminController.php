<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class NewsAdminController
 * @package App\Controller*
 * @IsGranted("ROLE_ADMIN_NEWS")
 */

class NewsAdminController extends AbstractController
{
    /**
     * @Route("/backend/news", name="be_news")
     */
    public function index()
    {
        return $this->render('news_admin/index.html.twig',[
            'title' => 'News Manager'
        ]);
    }
}
