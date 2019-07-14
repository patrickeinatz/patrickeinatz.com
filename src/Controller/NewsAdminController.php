<?php

namespace App\Controller;

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

class NewsAdminController extends AbstractController
{
    /**
     * @Route("/backend/news", name="be_news_manager")
     * @IsGranted("ROLE_ADMIN_NEWS")
     */
    public function index(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();

        return $this->render('news_admin/index.html.twig',[
            'title' => 'Log Manager',
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/backend/news/new", name="be_news_new")
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

            return $this->redirectToRoute('be_news_manager');
        }

        return $this->render('news_admin/new.html.twig',[
            'title' => 'Create new Log-Entry',
            'articleForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/backend/news/{id}/edit", name="be_news_edit")
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

            return $this->redirectToRoute('be_news_edit', [
                'id' => $article->getId(),
            ]);
        }

        return $this->render('news_admin/edit.html.twig',[
            'title' => 'Edit Log-Entry',
            'articleForm' => $form->createView(),
        ]);
    }
}
