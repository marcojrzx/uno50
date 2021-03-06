<?php
// src/AppBundle/Form/RegistrationType.php

namespace ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre');
        $builder->add('ApellidoPaterno');
        $builder->add('ApellidoMaterno');
        $builder->add('nombreEmpresa');

        $builder->add('telefono');





    }
  public function getParent()
      {
          return 'FOS\UserBundle\Form\Type\ProfileFormType';

          // Or for Symfony < 2.8
          // return 'fos_user_registration';
      }

  public function getBlockPrefix()
         {
             return 'app_user_profile';
         }

  public function getName()
        {
          return $this->getBlockPrefix();
        }
}
