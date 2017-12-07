<?php

namespace Aston\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AstonAppBundle:Default:index.html.twig');
    }
}
