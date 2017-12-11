<?php

namespace Aston\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AstonBlogBundle:Default:index.html.twig');
    }
}
