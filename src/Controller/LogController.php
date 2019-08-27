<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\CommentFormType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LogController extends AbstractController
{
    /**
     * @Route("/", name="log")
     */
    public function index(ArticleRepository $repository)
    {

        $articles = $repository->findAllPublishedOrderByNewest();

        return $this->render('frontend/log/log.html.twig', [
            'title' => 'Log',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/log/{slug}", name="log_entry")
     */
    public function news(Article $article, EntityManagerInterface $em, Request $request, $slug)
    {
        $form = $this->createForm(CommentFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            /**@var Comment $comment**/
            $comment = $form->getData();
            $comment->setArticle($article);

            $em->persist($comment);
            $em->flush();

            $this->addFlash('success', 'Comment was send and will be checked!');

            return $this->redirect('/log/'.$slug);
        }


        return $this->render('frontend/log/log_entry.twig', [
            'breadcrumb' => str_replace('-','_', $article->getSlug()),
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/log/{slug}/lits", name="log_toggleLits")
     */
    public function toggleArticleLikes(Article $article, EntityManagerInterface $em)
    {

        $article->incrementLikes();
        $em->flush();

        return new JsonResponse(['likes' => $article->getLikes()]);
    }
}
