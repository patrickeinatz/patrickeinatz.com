<?php


namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'maxlength' => 255,
                    'onkeyup' => 'textCounter(this,"counter", 255)',
                ]
            ]);
        $builder
            ->add('isPublic', CheckboxType::class, [
                'label' => 'make this public',
                'required' => false,
                'attr' => [
                    'width' => 100
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class
        ]);
    }
}