<?php

namespace Backend\SuperAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SuperAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
