<?php

namespace Seguridad\SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SeguridadController extends Controller
{
	/**
     * @Route("/login", name="login")
     * 
     */
    public function indexAction()
    {
        return $this->render('SeguridadBundle:Login:login.html.twig', array());
    }
}
