<?php

namespace Frontend\AjustesGeneralesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AjustesGeneralesController extends Controller
{
    public function sistemaAction()
    {
        return $this->render('AjustesGeneralesBundle:AjustesGenerales:ajustes1.html.twig', array());
    }
    public function infogeneralAction(){
        
    }
}
