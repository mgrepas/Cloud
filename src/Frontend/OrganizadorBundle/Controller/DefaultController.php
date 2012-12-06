<?php

namespace Frontend\OrganizadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OrganizadorBundle:Default:index.html.twig', array('name' => $name));
    }
}
