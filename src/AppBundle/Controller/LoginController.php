<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    public function IndexAction(Request $request, AuthenticationUtils $authUtils)    
    {
        // obtêm o erro de login se há algum
	    $error = $authUtils->getLastAuthenticationError();
    
        // último username digitado pelo usuário
        $lastUsername = $authUtils->getLastUsername();
       
        return $this->render('user/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'	        => $error,
        ));
    }
}