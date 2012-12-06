<?php

namespace Frontend\AdministrativosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AdministrativosBundle:Default:index.html.twig', array('name' => $name));
    }
}
