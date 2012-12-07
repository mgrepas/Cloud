<?php

namespace Frontend\NotificacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificacionesController extends Controller
{
    public function notificacionesAction()
    {
        return $this->render('NotificacionesBundle:Notificaciones:vista_notificaciones.html.twig', array());
    }
}
