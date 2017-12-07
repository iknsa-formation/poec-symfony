<?php

namespace Appli\VeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppliVeroBundle:Default:index.html.twig');
    }
}
