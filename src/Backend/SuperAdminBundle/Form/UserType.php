<?php

namespace Backend\SuperAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password')
            ->add('nombre')
            ->add('apellido')
            ->add('avatar_url')
            ->add('user_roles')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\SuperAdminBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'backend_superadminbundle_usertype';
    }
}
