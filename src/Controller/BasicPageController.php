<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Services\SlackClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BasicPageController extends AbstractController
{
    private $imagesBlog = [];

    /**
     * @Route("/data", name="data")
     */
    public function data()
    {
        return $this->render('frontend/basic_page/data.html.twig', [
            'title' => 'Data'
        ]);
    }

    /**
     * @Route("/archive", name="archive")
     */
    public function archive(SlackClient $slackClient)
    {
        //$slackClient->sendNotification('patrickeinatz.com','Jemand sieht sich das Archive an!');

        return $this->render('frontend/basic_page/archive.html.twig', [
            'title' => 'Archive'
        ]);
    }

    /**
     * @Route("/extras/glueblis", name="extra_glueblis")
     */
    public function mons()
    {
        $dir = 'images/mons';
        $fulldir = "{$_SERVER['DOCUMENT_ROOT']}/$dir";
        $d = @dir($fulldir) or die('Failed opening directory for reading');
        while(false !== ($entry = @$d->read()))
        {
            array_push($this->imagesBlog, "/$dir/$entry");
        }
        $d->close();

        return $this->render('frontend/extras/mons.html.twig', [
            'title' => 'Glüblis',
            'monsCollection' => $this->imagesBlog,
        ]);
    }

}
