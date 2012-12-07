<?php

namespace Frontend\AjustesGeneralesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortadaController extends Controller
{
    public function portadaAction(){
        return $this->render('AjustesGeneralesBundle:Portada:portada.html.twig', array());
    }
    public function menulateralAction(){
        return $this->render('AjustesGeneralesBundle:Portada:menu_Lateral.html.twig', array());
    }
    public function menucoloresAction(){
        return $this->render("AjustesGeneralesBundle:Portada:menuColores.html.twig", array());
    }
    
}
