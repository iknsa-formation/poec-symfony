<?php

namespace ASTON\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASTONAppBundle:Default:index.html.twig');
    }
}
