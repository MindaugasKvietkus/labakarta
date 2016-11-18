<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('password', RepeatedType::class, array(
            'type' => PasswordType::class,
            'label'=> 'Naujasslaptazodis',
            'first_name' => 'Naujasslaptazodis',
            'second_name' => 'Pakartokiteslaptazodi'
        ))->add('naujinti', SubmitType::class);
        //parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ResetVariables'
        ));
        //parent::configureOptions($resolver); // TODO: Change the autogenerated stub
    }

    public function getName(){

        return 'reset';

    }
}

/**
 * Created by PhpStorm.
 * User: Mariukas
 * Date: 2016.11.15
 * Time: 09:54
 */