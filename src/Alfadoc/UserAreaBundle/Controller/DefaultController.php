<?php

namespace Alfadoc\UserAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlfadocUserAreaBundle:Default:index.html.twig', array('name' => $name));
    }
}
