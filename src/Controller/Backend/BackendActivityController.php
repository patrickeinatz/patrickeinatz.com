<?php

namespace App\Controller\Backend;

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
class BackendActivityController extends AbstractController
{
    /**
     * @Route("/backend/activity", name="backend_activity")
     */
    public function index(ActivityRepository $activityRepository)
    {
        $activities = $activityRepository->findBy(
            array('user' => $this->getUser()->getId()),
            array('date' => 'ASC')
        );

        return $this->render('backend/activity/backend_activity.html.twig', [
            'title' => 'Activity Manager',
            'activities' => $activities
        ]);
    }

    /**
     * @Route("/backend/activity/create", name="backend_activity_create")
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

            return $this->redirectToRoute('backend_activity');
        }

        return $this->render('backend/activity/backend_activity_create.html.twig', [
            'title' => 'New Activity Track',
            'activityForm' => $form->createView()
        ]);
    }


    /**
     * @param $a
     * @param $b
     * @return int
     */
    function cmp($a, $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
}
