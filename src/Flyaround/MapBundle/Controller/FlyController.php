<?php

namespace Flyaround\MapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Flyaround\MapBundle\Entity\Fly;
use Flyaround\MapBundle\Form\FlyType;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\RouteRedirectView;
use FOS\RestBundle\View\View;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Fly controller.
 *
 */
class FlyController extends FOSRestController
{

    /**
     * return Flyaround\MapBundle\Entity\FlyRepository
     */
    private function getFlyRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('FlyaroundMapBundle:Fly');
    }

    /**
     * List all flies.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing flies.")
     * @Annotations\QueryParam(name="limit", requirements="\d+", default="5", description="How many flies to return.")
     *
     * @Annotations\View()
     *
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return array
     */
    public function getFliesAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
        $flies = $this->getFlyRepository()->findAll();
        return $flies;
    }

    /**
     * Get a single fly.
     *
     * @ApiDoc(
     *   output = "Flyaround\MapBundle\Entity\Fly",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the fly is not found"
     *   }
     * )
     *
     * @Annotations\View(templateVar="fly")
     *
     * @param Request $request the request object
     * @param int     $id      the fly id
     *
     * @return array
     *
     * @throws NotFoundHttpException when fly not exist
     */
    public function getFlyAction(Request $request, $id)
    {
        $entity = $this->getFlyRepository()->find($id);
        if (false === $entity) {
            throw $this->createNotFoundException("Fly does not exist.");
        }
        $view = new View($entity);
        $group = $this->container->get('security.context')->isGranted('ROLE_API') ? 'restapi' : 'standard';
        $view->getSerializationContext()->setGroups(array('Default', $group));
        return $view;
    }

    /**
     * Presents the form to use to create a new fly.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\View()
     *
     * @return FormTypeInterface
     */
    public function newFlyAction()
    {
        return $this->createForm(new FlyType());
    }

    /**
     * Creates a new fly from the submitted data.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "Flyaround\MapBundle\Form\FlyType",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *
     * @Annotations\View(
     *   template = "FlyaroundMapBundle:Fly:newFly.html.twig",
     *   statusCode = Codes::HTTP_BAD_REQUEST
     * )
     *
     * @param Request $request the request object
     *
     * @return FormTypeInterface|RouteRedirectView
     */
    public function postFliesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $fly = new Fly();
        $form = $this->createForm(new FlyType(), $fly);
        $form->submit($request);
        if ($form->isValid()) {
            $em->persist($fly);
            $em->flush();
            return $this->routeRedirectView('get_fly', array('id' => $fly->getId()));
        }
        return array(
            'form' => $form
        );
    }

    /**
     * Presents the form to use to update an existing fly.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes={
     *     200 = "Returned when successful",
     *     404 = "Returned when the fly is not found"
     *   }
     * )
     *
     * @Annotations\View()
     *
     * @param Request $request the request object
     * @param int     $id      the fly id
     *
     * @return FormTypeInterface
     *
     * @throws NotFoundHttpException when fly not exist
     */
    public function editFliesAction(Request $request, $id)
    {
        $fly = $this->getFlyRepository()->find($id);
        if (false === $fly) {
            throw $this->createNotFoundException("Fly does not exist.");
        }
        $form = $this->createForm(new FlyType(), $fly);
        return $form;
    }

    /**
     * Update existing fly from the submitted data or create a new fly at a specific location.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "Flyaround\MapBundle\Form\FlyType",
     *   statusCodes = {
     *     201 = "Returned when a new resource is created",
     *     204 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *
     * @Annotations\View(
     *   template="FlyaroundMapBundle:Fly:editFly.html.twig",
     *   templateVar="form"
     * )
     *
     * @param Request $request the request object
     * @param int     $id      the fly id
     *
     * @return FormTypeInterface|RouteRedirectView
     *
     * @throws NotFoundHttpException when fly not exist
     */
    public function putFliesAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $fly = $this->getFlyRepository()->find($id);
        if (false === $fly) {
            $fly = new Fly();
            $statusCode = Codes::HTTP_CREATED;
        } else {
            $statusCode = Codes::HTTP_NO_CONTENT;
        }
        $form = $this->createForm(new FlyType(), $fly);
        $form->submit($request);
        if ($form->isValid()) {
            $em->persist($fly);
            $em->flush();
            return $this->routeRedirectView('get_fly', array('id' => $fly->getId()), $statusCode);
        }
        return $form;
    }

    /**
     * Removes a fly.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes={
     *     204="Returned when successful"
     *   }
     * )
     *
     * @param Request $request the request object
     * @param int     $id      the fly id
     *
     * @return RouteRedirectView
     */
    public function deleteFliesAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlyaroundMapBundle:Fly')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fly entity.');
        }
        $em->remove($entity);
        $em->flush();
        return $this->routeRedirectView('get_flies', array(), Codes::HTTP_NO_CONTENT);
    }

    /**
     * Removes a fly.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes={
     *     204="Returned when successful"
     *   }
     * )
     *
     * @param Request $request the request object
     * @param int     $id      the fly id
     *
     * @return RouteRedirectView
     */
    public function removeFliesAction(Request $request, $id)
    {
        return $this->deleteFliesAction($request, $id);
    }
}
