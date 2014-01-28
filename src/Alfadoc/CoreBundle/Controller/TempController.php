<?php

namespace Alfadoc\CoreBundle\Controller;

use Alfadoc\CoreBundle\Entity\Country;
use Alfadoc\CoreBundle\Entity\State;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TempController extends Controller
{
	public function createAction()
	{
	    $country = $this->getDoctrine()
	        ->getRepository('AlfadocCoreBundle:Country')
 	        ->find('1');

	    if (!$country) {
	        throw $this->createNotFoundException('No product found for id '.$id);
	    }

	    $product = new State();
	    $product->setState('Полтавская');
	    $product->setCountry($country);

	    $em = $this->getDoctrine()->getEntityManager();
	    $em->persist($product);
 	    $em->flush();

	    return new Response('Created product id '.$product->getId());
	}
}