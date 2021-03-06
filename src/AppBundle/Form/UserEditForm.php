<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserEditForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("name_surname", TextType::class, array(
            'label' => 'VardasPavardė'
        ))->add('email', EmailType::class, array(
            'label' => 'El.paštas'
        ))->add('old_password', PasswordType::class, array(
            'label' => 'Dabartinisslaptažodis',
        ))->add('new_password', RepeatedType::class, array(
            'type' => PasswordType::class,
            'label' => false,
            'first_name' => 'Naujasslaptazodis',
            'second_name' => 'Pakartokiteslaptazodi'
        ))->add('naujinti', SubmitType::class);
        //parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\UserEditVariables'
        ));
        //parent::configureOptions($resolver); // TODO: Change the autogenerated stub
    }

    public function getName(){

        return 'user_edit';

    }
}

/**
 * Created by PhpStorm.
 * User: Mariukas
 * Date: 2016.11.15
 * Time: 12:08
 */