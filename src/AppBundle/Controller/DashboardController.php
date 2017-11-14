<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Document\User;

class DashboardController extends Controller
{
    public function IndexAction()
    {
        /*$User = new User();
        $User->setName('David');
    
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($User);
        $dm->flush();
    
        return new Response('Created product id '.$User->getId());
        */
        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig');
    }
}
