<?php

namespace Backend\SuperAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstudianteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidos')
            ->add('lugNacimiento')
            ->add('fecNacimiento', 'date', array(    'widget' => 'single_text',    'format' => 'yyyy-MM-dd'))
            ->add('numero')
            ->add('expedidaEn')
            ->add('barrio')
            ->add('direccion')
            ->add('telefono')
            ->add('celular')
            ->add('email')
            ->add('salud')
            ->add('observacionesPer')
            ->add('colegioProcedencia')
            ->add('sede')
            ->add('observacionesAcad')
            ->add('numPersonas')
            ->add('casa')
            ->add('telefonoCasa')
            ->add('viveCon')
            ->add('numHermanos')
            ->add('celCasa')
            ->add('nomMadre')
            ->add('ccMadre')
            ->add('nomPadre')
            ->add('ccPadre')
            ->add('nomAcudiente')
            ->add('ccAcudiente')
            ->add('direccionCasa')
            ->add('ciudad')
            ->add('identificacion')
            ->add('estrato')
            ->add('sexo')
            ->add('nivel')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\SuperAdminBundle\Entity\Estudiante'
        ));
    }

    public function getName()
    {
        return 'backend_superadminbundle_estudiantetype';
    }
}
