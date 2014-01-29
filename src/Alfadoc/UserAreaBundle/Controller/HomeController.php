<?php

namespace Alfadoc\UserAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function indexAction()
	{
		$usr = $this->get('security.context')->getToken()->getUser();
		$username = $usr->getUsername();

		$userObject = $this->getDoctrine()
			->getRepository('AlfadocCoreBundle:User')
			->findOneByUsername("$username");

		if (!$userObject) {
			throw $this->createNotFoundException('No user found for username "'.$username.'"');
		}

		$phones = $userObject->getPhones();

		$phonesArray;
		if ($phones)
		{
			$i = 0;
			foreach ($phones as $phone)
			{
				$phonesArray[$i]['type'] = $phone->getType();
				$phonesArray[$i]['number'] = $phone->getNumber();

				$i++;
			}
		}


		return $this->render('AlfadocUserAreaBundle:Home:home.html.twig', array(
			'username' => $username,
			'firstName' => $userObject->getFirstName(),
			'middleName' => $userObject->getMiddleName(),
			'lastName' => $userObject->getLastName(),
			'balance' => $userObject->getBalance(),
			'credit' => $userObject->getCredit(),
			'postIndex' => $userObject->getPostIndex(),
			'country' => $userObject->getHouse()->getStreet()->getCity()->getState()->getCountry()->getCountry(),
			'state' => $userObject->getHouse()->getStreet()->getCity()->getState()->getState(),
			'city' => $userObject->getHouse()->getStreet()->getCity()->getCity(),
			'street' => $userObject->getHouse()->getStreet()->getStreet(),
			'house' => $userObject->getHouse()->getHouse(),
			'porch' => $userObject->getPorch(),
			'level' => $userObject->getLevel(),
			'flat' => $userObject->getFlat(),
			'phones' => $phonesArray)

		);
	}
}
