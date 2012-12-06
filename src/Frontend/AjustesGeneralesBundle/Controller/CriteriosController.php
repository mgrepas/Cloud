<?php

namespace Frontend\AjustesGeneralesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CriteriosController extends Controller
{
    public function indexAction()
    {
        return $this->render('AjustesGeneralesBundle:Criterios:index.html.twig', array());
    }
}
