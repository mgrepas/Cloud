<?php

namespace Frontend\ObservacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ObservacionesBundle:Default:index.html.twig', array('name' => $name));
    }
}
