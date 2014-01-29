<?php

namespace Alfadoc\CoreBundle\Controller;

use Alfadoc\CoreBundle\Entity\Phone;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TempController extends Controller
{
	function createAction()
	{
    $em = $this->getDoctrine()->getEntityManager();
    $phone = $em->getRepository('AlfadocCoreBundle:Phone')->find('3');

    if (!$phone) {
        throw $this->createNotFoundException('No product found for id '.$id);
    }

    $em = $this->getDoctrine()->getEntityManager();
    $product = $em->getRepository('AlfadocCoreBundle:User')->find('1');

    if (!$product) {
        throw $this->createNotFoundException('No product found for id '.$id);
    }

    $product->addPhone($phone);
    $em->flush();

    return new Response('Created product id '.$product->getId());

	}
}