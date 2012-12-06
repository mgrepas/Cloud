<?php

namespace Frontend\DocenteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DocenteBundle:Default:index.html.twig', array('name' => $name));
    }
}
