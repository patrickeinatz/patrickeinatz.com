<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Services\SlackClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BasicPageController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index(ArticleRepository $repository)
    {

        $articles = $repository->findAllPublishedOrderByNewest();

        return $this->render('basic_page/index.html.twig', [
            'title' => "Index",
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/data", name="data")
     */
    public function data()
    {
        return $this->render('basic_page/data.html.twig', [
            'title' => 'Data'
        ]);
    }

    /**
     * @Route("/archive", name="archive")
     */
    public function archive(SlackClient $slackClient)
    {
        $slackClient->sendNotification('patrickeinatz.com','Jemand sieht sich das Archive an!');

        return $this->render('basic_page/archive.html.twig', [
            'title' => "Archive"
        ]);
    }

}
