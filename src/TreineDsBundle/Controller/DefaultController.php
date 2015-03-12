<?php

namespace TreineDsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TreineDsBundle:Default:index.html.twig', array('name' => $name));
    }
}
