<?php

namespace Alfadoc\UserAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function indexAction()
	{
		$usr= $this->get('security.context')->getToken()->getUser();
		$username = $usr->getUsername();

		return $this->render('AlfadocUserAreaBundle:Home:home.html.twig', array('username' => $username));
	}
}
