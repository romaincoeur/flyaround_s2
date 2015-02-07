<?php

namespace Flyaround\MapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Flyaround\MapBundle\Entity\Fly;
use Flyaround\MapBundle\Form\FlyType;

/**
 * Fly controller.
 *
 */
class FlyController extends Controller
{

    /**
     * Lists all Fly entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FlyaroundMapBundle:Fly')->findAll();

        return $this->render('FlyaroundMapBundle:Fly:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fly entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Fly();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fly_show', array('id' => $entity->getId())));
        }

        return $this->render('FlyaroundMapBundle:Fly:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Fly entity.
     *
     * @param Fly $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fly $entity)
    {
        $form = $this->createForm(new FlyType(), $entity, array(
            'action' => $this->generateUrl('fly_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Fly entity.
     *
     */
    public function newAction()
    {
        $entity = new Fly();
        $form   = $this->createCreateForm($entity);

        return $this->render('FlyaroundMapBundle:Fly:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fly entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlyaroundMapBundle:Fly')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fly entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FlyaroundMapBundle:Fly:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fly entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlyaroundMapBundle:Fly')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fly entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FlyaroundMapBundle:Fly:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fly entity.
    *
    * @param Fly $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fly $entity)
    {
        $form = $this->createForm(new FlyType(), $entity, array(
            'action' => $this->generateUrl('fly_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Fly entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlyaroundMapBundle:Fly')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fly entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fly_edit', array('id' => $id)));
        }

        return $this->render('FlyaroundMapBundle:Fly:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fly entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FlyaroundMapBundle:Fly')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fly entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fly'));
    }

    /**
     * Creates a form to delete a Fly entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fly_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
