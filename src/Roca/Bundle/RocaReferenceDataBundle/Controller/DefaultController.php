<?php

namespace Roca\Bundle\RocaReferenceDataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RocaBundle:Default:index.html.twig');
    }
}
