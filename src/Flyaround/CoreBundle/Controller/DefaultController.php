<?php

namespace Flyaround\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if ($this->getUser())
        {
            return $this->redirect($this->generateUrl('flyaround_map_homepage'));
        }
        else {
            $registration_form = $this->container->get('fos_user.registration.form');

            $request = $this->container->get('request');
            $session = $request->getSession();
            $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);
            $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

            return $this->render('FlyaroundCoreBundle:Default:index.html.twig', array(
                'registration_form' => $registration_form->createView(),
                'csrf_token' => $csrfToken,
                'last_username' => $lastUsername
            ));
        }
    }
}
