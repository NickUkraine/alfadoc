<?php
namespace Alfadoc\AdminAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
	$usr= $this->get('security.context')->getToken()->getUser();
	$username = $usr->getUsername();

       return $this->render('AlfadocAdminAreaBundle:Home:index.html.twig', array('username' => $username));
    }
}
