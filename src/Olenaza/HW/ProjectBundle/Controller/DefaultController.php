<?php

namespace Olenaza\HW\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OlenazaHWProjectBundle:Default:index.html.twig');
    }
}
