<?php

namespace App\Controller\Backend;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class NewsAdminController
 * @package App\Controller*
 */

class BackendLogController extends AbstractController
{
    /**
     * @Route("/backend/log", name="backend_log")
     * @IsGranted("ROLE_ADMIN_NEWS")
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
     * @IsGranted("ROLE_ADMIN_NEWS")
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
}
