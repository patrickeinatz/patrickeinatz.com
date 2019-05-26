<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentAdminController extends AbstractController
{
    /**
     * @Route("/backend/comment", name="be_comment")
     */
    public function index()
    {
        return $this->render('comment_admin/index.html.twig', [
            'title' => 'Comment Manager',
        ]);
    }
}
