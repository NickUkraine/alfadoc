<?php

namespace Alfadoc\UserAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function indexAction()
	{
		return $this->render('AlfadocUserAreaBundle:Home:home.html.twig');
	}
}
