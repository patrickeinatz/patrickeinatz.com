<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\LoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    /**
     * @Route("/lgn", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/login.html.twig', [
            'title' => 'Login',
            'last_usermail' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \Exception('will be intercepted before getting here');
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(
        Request $request,
        UserPasswordEncoderInterface $passwordEncoder,
        GuardAuthenticatorHandler $guardHandler,
        LoginFormAuthenticator $formAuthenticator
        )
    {
        // TODO - use symfony forms & validation

        if($request->isMethod(('POST'))){
            $user = new User();
            $user->setEmail($request->request->get('email'));
            $user->setFirstName('Mystery');
            $user->setPassword($passwordEncoder->encodePassword(
                $user,
                $request->request->get('password')
            ));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $formAuthenticator,
                'main'
            );
        }

        return $this->render('login/register.html.twig', [
            'title' => 'Registration'
        ]);
    }
}
