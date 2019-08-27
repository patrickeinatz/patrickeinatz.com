<?php

namespace App\Form;

use App\Entity\Activity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivityFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('training', ChoiceType::class, [
                'choices' => [
                    'no training' => 0,
                    'a few excercises' => 1,
                    'medium workout' => 2,
                    'heavy training' => 3

                ],
                'placeholder' => 'Choose your workload!'
            ])
            ->add('no_alcohol', CheckboxType::class, [
                'label' => 'stayed sober',
                'required' => false
            ])
            ->add('no_candy', CheckboxType::class, [
                'label' => 'did not eat candy',
                'required' => false
            ])
            ->add('no_carbs', CheckboxType::class, [
                'label' => 'ate no carbs',
                'required' => false

            ])
            ->add('comment', TextType::class,[
                'help' => 'e.g. weight or belly circumference'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Activity::class,
        ]);
    }
}
