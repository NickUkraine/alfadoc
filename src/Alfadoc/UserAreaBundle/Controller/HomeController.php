<?php

namespace Alfadoc\UserAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function indexAction()
	{
		$usr= $this->get('security.context')->getToken()->getUser();
		$username = $usr->getUsername();

		$userObject = $this->getDoctrine()
			->getRepository('AlfadocCoreBundle:User')
			->findOneByUsername("$username");

		if (!$userObject) {
			throw $this->createNotFoundException('No user found for username "'.$username.'"');
		}

		return $this->render('AlfadocUserAreaBundle:Home:home.html.twig', array(
			'username' => $username,
			'firstName' => $userObject->getFirstName(),
			'middleName' => $userObject->getMiddleName(),
			'lastName' => $userObject->getLastName(),
			'balance' => $userObject->getBalance(),
			'credit' => $userObject->getCredit(),
			'postIndex' => $userObject->getPostIndex(),
			'country' => $userObject->getCountry(),
			'state' => $userObject->getState(),
			'city' => $userObject->getCity(),
			'street' => $userObject->getStreet(),
			'house' => $userObject->getHouse(),
			'porch' => $userObject->getPorch(),
			'level' => $userObject->getLevel(),
			'flat' => $userObject->getFlat())
		);
	}
}
