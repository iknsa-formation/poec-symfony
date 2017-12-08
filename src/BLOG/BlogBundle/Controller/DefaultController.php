<?php

namespace BLOG\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BLOGBlogBundle:Default:index.html.twig');
    }
}
