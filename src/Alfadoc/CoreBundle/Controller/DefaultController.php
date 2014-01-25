<?php

namespace Alfadoc\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlfadocCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
