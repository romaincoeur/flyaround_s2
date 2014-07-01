<?php

namespace Flyaround\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FlyaroundCoreBundle:Default:index.html.twig', array('name' => 'romain'));
    }
}
