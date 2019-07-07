<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontendExtraController extends AbstractController
{
    private $imagesBlog = [];
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

        return $this->render('frontend_extra/mons.html.twig', [
            'title' => 'Glüblis',
            'monsCollection' => $this->imagesBlog,
        ]);
    }
}
