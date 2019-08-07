<?php

namespace App\Controller\Backend;

use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;

/**
 * Class AccountController
 * @package App\Controller
 * @IsGranted("ROLE_USER")
 */

class BackendAccountController extends BaseController
{
    /**
     * @Route("/backend/account", name="backend_account")
     */
    public function index(LoggerInterface $logger)
    {

        $logger->debug('Checking account page for '.$this->getUser()->getEmail());

        return $this->render('backend/account/backend_account.html.twig', [
            'title' => 'AccountController',
        ]);
    }

    /**
     * @Route("/api/account", name="api_account")
     */
    public function accountApi()
    {
        $user = $this->getUser();

        return $this->json($user, 200, [], [
            'groups' => ['main']
        ]);
    }
}
