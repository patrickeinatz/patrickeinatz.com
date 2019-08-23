<?php

namespace App\Controller\Backend;

use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
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
            25
        );

        return $this->render('backend/comment/backend_comment.html.twig', [
            'title' => 'Comment Manager',
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("/backend/comment/{id}/delete", name="backend_comment_delete")
     *
     * @IsGranted("ROLE_ADMIN_LOG")
     */
    public function delete($id, CommentRepository $commentRepository, EntityManagerInterface $em )
    {
        $comment = $commentRepository->find($id);

        if(!$comment){
            $this->addFlash('success', 'Comment not found!');
            return $this->redirectToRoute('backend_comment');
        }

        $em->remove($comment);
        $em->flush();

        $this->addFlash('success', 'Comment deleted successfully!');
        return $this->redirectToRoute('backend_comment');
    }

    /**
     * @Route("/backend/comment/{id}/toggle", name="backend_comment_toggle")
     *
     * @IsGranted("ROLE_ADMIN_LOG")
     */
    public function toggle($id, CommentRepository $commentRepository, EntityManagerInterface $em)
    {
        $comment = $commentRepository->find($id);

        if(!$comment){
            $this->addFlash('success', 'Comment not found!');
            return $this->redirectToRoute('backend_comment');
        }

        if(!$comment->getIsApproved()) {
            $comment->setIsApproved(1);
        } else {
            $comment->setIsApproved(0);
        }

        $em->persist($comment);
        $em->flush();

        return $this->redirectToRoute('backend_comment');
    }
}
