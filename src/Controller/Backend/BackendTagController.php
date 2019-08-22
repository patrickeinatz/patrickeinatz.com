<?php

namespace App\Controller\Backend;

use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;



class BackendTagController extends AbstractController
{
    /**
     * @Route("/backend/tags", name="backend_tags")
     * * @IsGranted("ROLE_ADMIN")
     */
    public function index(TagRepository $tagRepository)
    {
        $tags = $tagRepository->findAll();

        return $this->render('backend/tag/backend_tags.html.twig', [
            'title' => 'Tags Manager',
            'tags' => $tags,
        ]);
    }
}
