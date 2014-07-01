<?php

namespace Application\Sonata\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function viewModuleAction()
    {
        $user = $this->getUser();
        if ($user === null) {
            return $this->render('ApplicationSonataUserBundle:Default:notconnected.html.twig');
        } else {
            return $this->render('ApplicationSonataUserBundle:Default:connected.html.twig');
        }
    }
}