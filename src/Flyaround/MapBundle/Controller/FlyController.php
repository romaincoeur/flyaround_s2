<?php

namespace Flyaround\MapBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Controller\Annotations;
use Flyaround\MapBundle\Entity\Fly;
use FOS\RestBundle\Util\Codes;
use Flyaround\MapBundle\Form\Type\FlyType;
use FOS\RestBundle\View\RouteRedirectView;
use Symfony\Component\Form\FormTypeInterface;

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
     * @Annotations\View()
     *
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     * @param Array                 $fields       fields
     *
     * @return array
     */
    public function getFliesAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
        $flies = $this->getFlyRepository()->findAll();
        $view = $this->view($flies, 200);
        $view->setHeader('Access-Control-Allow-Origin', '*');
        return $this->handleView($view);
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
        $view->setHeader('Access-Control-Allow-Origin', '*');
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
     *   input = "Flyaround\MapBundle\Form\Type\FlyType",
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
            return new Response('{"id": '.$fly->getId().'}', 200, array('Access-Control-Allow-Origin' => '*'));
        }
        $view = new View(array('form' => $form));
        $view->setHeader('Access-Control-Allow-Origin', '*');
        $group = $this->container->get('security.context')->isGranted('ROLE_API') ? 'restapi' : 'standard';
        $view->getSerializationContext()->setGroups(array('Default', $group));
        return $view;
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
        $view = new View($form);
        $group = $this->container->get('security.context')->isGranted('ROLE_API') ? 'restapi' : 'standard';
        $view->getSerializationContext()->setGroups(array('Default', $group));
        return $view;
    }

    /**
     * Update existing fly from the submitted data or create a new fly at a specific location.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "Flyaround\MapBundle\Form\Type\FlyType",
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
