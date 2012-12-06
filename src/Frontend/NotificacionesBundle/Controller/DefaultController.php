<?php

namespace Frontend\NotificacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NotificacionesBundle:Default:index.html.twig', array('name' => $name));
    }
}
