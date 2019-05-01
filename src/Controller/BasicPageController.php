<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BasicPageController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('basic_page/index.html.twig', [
            'title' => 'Index'
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
    public function whosyourpaddy()
    {
        return $this->render('basic_page/archive.html.twig', [
            'title' => "Archive"
        ]);
    }
}
