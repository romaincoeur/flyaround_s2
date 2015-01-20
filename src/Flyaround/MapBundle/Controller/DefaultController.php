<?php

namespace Flyaround\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $latitude = $this->get('request')->get('lat');
        $longitude = $this->get('request')->get('lon');
        $zoom = $this->get('request')->get('zoom');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FlyaroundMapBundle:Fly')->findAll();
        return $this->render('FlyaroundMapBundle:Default:index.html.twig', array(
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
            'flies' => $entities
        ));
    }
}
