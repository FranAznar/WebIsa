<?php

namespace WebIsa\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendBundle:Default:index.html.twig');
    }

    public function portadaAction()
    {
        return $this->render('FrontendBundle:Default:index.html.twig');
    }
}
