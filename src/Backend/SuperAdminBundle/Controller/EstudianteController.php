<?php

namespace Backend\SuperAdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Backend\SuperAdminBundle\Entity\Estudiante;
use Backend\SuperAdminBundle\Form\EstudianteType;

use Backend\SuperAdminBundle\Entity\User;
 
/**
 * Estudiante controller.
 *
 * @Route("/dashboard/estudiante")
 */
class EstudianteController extends Controller
{
    /**
     * Lists all Estudiante entities.
     *
     * @Route("/", name="dashboard_estudiante")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SuperAdminBundle:Estudiante')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Estudiante entity.
     *
     * @Route("/{id}/show", name="dashboard_estudiante_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Estudiante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estudiante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Estudiante entity.
     *
     * @Route("/new", name="dashboard_estudiante_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Estudiante();
        $form   = $this->createForm(new EstudianteType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Estudiante entity.
     *
     * @Route("/create", name="dashboard_estudiante_create")
     * @Method("POST")
     * @Template("SuperAdminBundle:Estudiante:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Estudiante();
        $entity_user  = new User();
        $form = $this->createForm(new EstudianteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            $ti = $form->get('numero')->getData();
            $cod = array('A','M','D','O','J','C','E','L','F','B');
            $username = "";
            for ($i=0; $i < strlen($ti); $i++)  
                $username .= $cod[$ti[$i]];

            $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);

            $entity_user->setNombre($form->get('nombre')->getData());
            $entity_user->setApellido($form->get('apellido')->getData());
            $entity_user->setAvatarUrl("images.png");
            $entity_user->setUsername($username);
            $entity_user->setSalt(md5(time()));
            
            $password = $encoder->encodePassword($ti, $entity_user->getSalt());
            
            $entity_user->setPassword($password);
            $entity_role = $em->getRepository('SuperAdminBundle:Role')->find(1);
            $entity_user->addUserRole( $entity_role );
            $entity_user->setInstitucionId($em->getRepository('SuperAdminBundle:Institucion')->find(1));
            

            $em->persist($entity_user);
            $em->flush();

            $entity->setUserId($entity_user);

            $em->persist($entity);
            $em->flush();



            return $this->redirect($this->generateUrl('dashboard_estudiante_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Estudiante entity.
     *
     * @Route("/{id}/edit", name="dashboard_estudiante_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Estudiante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estudiante entity.');
        }

        $editForm = $this->createForm(new EstudianteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Estudiante entity.
     *
     * @Route("/{id}/update", name="dashboard_estudiante_update")
     * @Method("POST")
     * @Template("SuperAdminBundle:Estudiante:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperAdminBundle:Estudiante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estudiante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EstudianteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dashboard_estudiante_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Estudiante entity.
     *
     * @Route("/{id}/delete", name="dashboard_estudiante_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SuperAdminBundle:Estudiante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Estudiante entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dashboard_estudiante'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
