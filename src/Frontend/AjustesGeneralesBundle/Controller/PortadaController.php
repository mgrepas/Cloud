<?php

namespace Frontend\AjustesGeneralesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortadaController extends Controller
{
    public function indexAction(){
        return $this->render('AjustesGeneralesBundle:Portada:portada.html.twig', array());
    }
}
