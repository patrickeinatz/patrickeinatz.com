<?php

namespace App\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;



class BackendTagController extends AbstractController
{
    /**
     * @Route("/backend/tag", name="backend_tag")
     * * @IsGranted("ROLE_ADMIN")
     */
    public function index()
    {
        return $this->render('backend_tag/index.html.twig', [
            'controller_name' => 'BackendTagController',
        ]);
    }
}
