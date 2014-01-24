<?php

namespace Alfadoc\AdminAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlfadocAdminAreaBundle:Default:index.html.twig', array('name' => $name));
    }
}
