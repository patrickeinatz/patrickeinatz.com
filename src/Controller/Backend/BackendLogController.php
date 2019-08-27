<?php

namespace App\Controller\Backend;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class BackendLogController
 * @package App\Controller*
 */

class BackendLogController extends AbstractController
{
    /**
     * @Route("/backend/log", name="backend_log")
     * @IsGranted("ROLE_ADMIN_LOG")
     */
    public function index(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();

        return $this->render('backend/log/backend_log.html.twig',[
            'title' => 'Log Manager',
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/backend/log/create", name="backend_log_create")
     * @IsGranted("ROLE_ADMIN_LOG")
     */
    public function new(EntityManagerInterface $em, Request $request, FileUploader $fileUploader)
    {
        $form = $this->createForm(ArticleFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            /** @var Article $article */
            $article = $form->getData();
            $article->setAuthor($this->getUser());

            /** @var UploadedFile $audioFile */
            $audioFile = $form['audio_file']->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($audioFile) {
                $audioFileName = $fileUploader->upload($audioFile);
                $article->setAudioFile($audioFileName);
            }

            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Log-Entry Created!');

            return $this->redirectToRoute('backend_log');
        }

        return $this->render('backend/log/backend_log_create.html.twig',[
            'title' => 'Create new Log-Entry',
            'articleForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/backend/log/{id}/update", name="backend_log_update")
     * @IsGranted("MANAGE", subject="article")
     */
    public function edit(Article $article, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(ArticleFormType::class, $article);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            /** @var Article $article */
            $article = $form->getData();
            $article->setAuthor($this->getUser());

            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Log-Entry Updated!');

            return $this->redirectToRoute('backend_log_update', [
                'id' => $article->getId(),
            ]);
        }

        return $this->render('backend/log/backend_log_update.html.twig',[
            'title' => 'Edit Log-Entry',
            'articleForm' => $form->createView(),
        ]);
    }

    /**
     * @param $id
     * @param ArticleRepository $articleRepository
     * @param EntityManagerInterface $em
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @Route("/backend/log/{id}/delete", name="backend_log_delete")
     * @IsGranted("ROLE_ADMIN_LOG")
     *
     */
    public function delete($id, ArticleRepository $articleRepository, CommentRepository $commentRepository, EntityManagerInterface $em)
    {
        $article = $articleRepository->find($id);

        if (!$article) {
            $this->addFlash('error', 'Log-Entry not found!');
            return $this->redirectToRoute('backend_log');
        }

        $comments = $commentRepository->findBy(['article' => $article]);

        foreach($comments as $comment){
            $em->remove($comment);
            $em->flush();
        }

        $em->remove($article);
        $em->flush();

        $this->addFlash('success', sprintf('Log-Entry and %d corrensponding comments deleted!', sizeof($comments)));
        return $this->redirectToRoute('backend_log');
    }
}
