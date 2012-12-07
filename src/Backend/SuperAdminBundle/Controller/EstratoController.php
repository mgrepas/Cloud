<?php

namespace Backend\SuperAdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Backend\SuperAdminBundle\Entity\Estrato;
use Backend\SuperAdminBundle\Form\EstratoType;

/**
 * Estrato controller.
 *
 * @Route("/dashboard/estrato")
 */
class EstratoController extends Controller
{
    /**
     * Lists all Estrato entities.
     *
     * @Route("/", name="dashboard_estrato")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SuperAdminBundle:Estrato')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Estrato entity.
     *
     * @Route("/{id}/show", name="dashboard_estrato_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Estrato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estrato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Estrato entity.
     *
     * @Route("/new", name="dashboard_estrato_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Estrato();
        $form   = $this->createForm(new EstratoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Estrato entity.
     *
     * @Route("/create", name="dashboard_estrato_create")
     * @Method("POST")
     * @Template("SuperAdminBundle:Estrato:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Estrato();
        $form = $this->createForm(new EstratoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dashboard_estrato_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Estrato entity.
     *
     * @Route("/{id}/edit", name="dashboard_estrato_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Estrato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estrato entity.');
        }

        $editForm = $this->createForm(new EstratoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Estrato entity.
     *
     * @Route("/{id}/update", name="dashboard_estrato_update")
     * @Method("POST")
     * @Template("SuperAdminBundle:Estrato:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Estrato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estrato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EstratoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dashboard_estrato_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Estrato entity.
     *
     * @Route("/{id}/delete", name="dashboard_estrato_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SuperAdminBundle:Estrato')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Estrato entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dashboard_estrato'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
