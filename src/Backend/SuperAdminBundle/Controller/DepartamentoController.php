<?php

namespace Backend\SuperAdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Backend\SuperAdminBundle\Entity\Departamento;
use Backend\SuperAdminBundle\Form\DepartamentoType;

/**
 * Departamento controller.
 *
 * @Route("/dashboard/departamento")
 */
class DepartamentoController extends Controller
{
    /**
     * Lists all Departamento entities.
     *
     * @Route("/", name="dashboard_departamento")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SuperAdminBundle:Departamento')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Departamento entity.
     *
     * @Route("/{id}/show", name="dashboard_departamento_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Departamento entity.
     *
     * @Route("/new", name="dashboard_departamento_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Departamento();
        $form   = $this->createForm(new DepartamentoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Departamento entity.
     *
     * @Route("/create", name="dashboard_departamento_create")
     * @Method("POST")
     * @Template("SuperAdminBundle:Departamento:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Departamento();
        $form = $this->createForm(new DepartamentoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dashboard_departamento_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Departamento entity.
     *
     * @Route("/{id}/edit", name="dashboard_departamento_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $editForm = $this->createForm(new DepartamentoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Departamento entity.
     *
     * @Route("/{id}/update", name="dashboard_departamento_update")
     * @Method("POST")
     * @Template("SuperAdminBundle:Departamento:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DepartamentoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dashboard_departamento_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Departamento entity.
     *
     * @Route("/{id}/delete", name="dashboard_departamento_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SuperAdminBundle:Departamento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Departamento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dashboard_departamento'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
