<?php

namespace Frontend\AjustesGeneralesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AjustesEvaluacionController extends Controller
{
    public function indexAction()
    {
        return $this->render('AjustesGeneralesBundle:AjustesEvaluacion:index.html.twig', array());
    }
}
