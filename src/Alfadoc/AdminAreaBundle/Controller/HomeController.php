<?php
namespace Alfadoc\AdminAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlfadocAdminAreaBundle:Home:index.html.twig');
    }
}
