<?php

namespace Flyaround\MapBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Controller\Annotations;

/**
 * Terrain controller.
 *
 */
class TerrainController extends FOSRestController
{

    /**
     * List all terrains.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="lat1", description="Latitude of the top left corner")
     * @Annotations\QueryParam(name="lng1", description="Lontitude of the top left corner")
     * @Annotations\QueryParam(name="lat2", description="Latitude of the bottom right corner")
     * @Annotations\QueryParam(name="lng2", description="Longitude of the bottom right corner")
     *
     * @Annotations\View()
     *
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return array
     */
    public function getTerrainsAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
        $em = $this->getDoctrine()->getManager();
        $lat1 = $paramFetcher->get('lat1');
        $lat2 = $paramFetcher->get('lat2');
        $lng1 = $paramFetcher->get('lng1');
        $lng2 = $paramFetcher->get('lng2');

        if ($lat1 && $lat2 && $lng1 && $lng2)
            $entities = $em->getRepository('FlyaroundMapBundle:Terrain')->getZone($lat1, $lat2, $lng1, $lng2);
        else
            $entities = $em->getRepository('FlyaroundMapBundle:Terrain')->findAll();

        return $entities;
    }

    /**
     * Get a single terrain.
     *
     * @ApiDoc(
     *   output = "Flyaround\MapBundle\Entity\Terrain",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the note is not found"
     *   }
     * )
     *
     * @Annotations\View(templateVar="terrain")
     *
     * @param Request $request the request object
     * @param int     $id      the terrain id
     *
     * @return array
     *
     * @throws NotFoundHttpException when note not exist
     */
    public function getTerrainAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlyaroundMapBundle:Terrain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terrain entity.');
        }

        $view = new View($entity);
        $group = $this->container->get('security.context')->isGranted('ROLE_API') ? 'restapi' : 'standard';
        $view->getSerializationContext()->setGroups(array('Default', $group));
        return $view;
    }
}
