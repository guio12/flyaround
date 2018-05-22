<?php

namespace AppBundle\Form;

use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
            ->add('birthDate')
            ->add('creationDate', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('empty_data' => '', 'required' => false))
            ->add('note', \Symfony\Component\Form\Extension\Core\Type\IntegerType::class, array('empty_data' => '', 'required' => false))
            ->add('isACertifiedPilot');
    }/**
 * {@inheritdoc}
 */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user_registration';
    }


}