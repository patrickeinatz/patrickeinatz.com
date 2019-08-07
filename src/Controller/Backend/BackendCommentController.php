<?php

namespace App\Controller\Backend;

use App\Repository\CommentRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommentAdminController
 * @package App\Controller*
 * @IsGranted("ROLE_ADMIN_COMMENT")
 */

class BackendCommentController extends AbstractController
{
    /**
     * @Route("/backend/comment", name="backend_comment")
     *
     */
    public function index(CommentRepository $repository, Request $request, PaginatorInterface $paginator)
    {


        $q = $request->query->get('q');

        $queryBuilder = $repository->getWithSearchQueryBuilder($q);

        $pagination = $paginator->paginate(
          $queryBuilder /* query NOT result*/,
          $request->query->getInt('page', 1) /* page number*/,
            10
        );

        return $this->render('backend/comment/backend_comment.html.twig', [
            'title' => 'Comment Manager',
            'pagination' => $pagination,
        ]);
    }
}
