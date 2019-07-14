<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\ActivityFormType;
use App\Repository\ActivityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class ActivityAdminController
 * @package App\Controller*
 */
class ActivityAdminController extends AbstractController
{
    /**
     * @Route("/backend/activity", name="be_activity")
     */
    public function index(ActivityRepository $activityRepository)
    {
        $activities = $activityRepository->findBy([
            'user' => $this->getUser()->getId()
        ]);

        return $this->render('activity/index.html.twig', [
            'title' => 'Activity Manager',
            'activities' => $activities
        ]);
    }

    /**
     * @Route("/backend/activity/new", name="be_activity_new")
     */
    public function newActivity(EntityManagerInterface $em, Request $request)
    {
        $form = $this->createForm(ActivityFormType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            /** @var Activity $activity */
            $activity = $form->getData();
            $activity->setUser($this->getUser());

            $em->persist($activity);
            $em->flush();

            $this->addFlash('success', 'Activity record added!');

            return $this->redirectToRoute('be_activity');
        }

        return $this->render('activity/new.html.twig', [
            'title' => 'New Activity Track',
            'activityForm' => $form->createView()
        ]);
    }
}
