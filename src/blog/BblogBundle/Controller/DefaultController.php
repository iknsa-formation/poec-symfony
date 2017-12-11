<?php

namespace blog\BblogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('blogBblogBundle:Default:index.html.twig');
    }
}
