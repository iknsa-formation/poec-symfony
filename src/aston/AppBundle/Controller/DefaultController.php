<?php

namespace aston\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('astonAppBundle:Default:index.html.twig');
    }
}
