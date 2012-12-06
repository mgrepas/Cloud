<?php

namespace Frontend\AjustesGeneralesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\FormBuilder;

class CiudadType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('nombre')
                ->add('departamento');
    }
    
    public function getName(){
    return 'form_ciudad';
    }
}