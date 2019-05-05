<?php

namespace App\Controller;

use App\Services\MarkdownHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BasicPageController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(MarkdownHandler $markdownHandler)
    {
        $content = <<<EOF
Lorem ipsum **dolor** sit amet, **consetetur sadipscing** elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 

Duis autem vel eum [iriure dolor](https://baconipsum.com) in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 

Ut wisi enim ad minim veniam, quis **nostrud** exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
EOF;



    $content = $markdownHandler->parse($content);

        return $this->render('basic_page/index.html.twig', [
            'title' => 'Index',
            'content' => $content
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
