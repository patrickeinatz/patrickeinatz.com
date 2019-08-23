<?php


namespace App\Form;

use App\Entity\Article;
use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotNull;

class ArticleFormType extends AbstractType
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'help' => 'Choose something catchy',
                'label' => 'Title',
                'required' => true
            ]);

            $audioConstraints = new File([
                'maxSize' => '10M',
                'mimeTypes' => [
                    'audio/mpeg',
                    'audio/mpeg3',
                    'audio/x-mpeg-3',
                ],
                'mimeTypesMessage' => 'Please upload a valid MP3file',
            ]);

        $builder
            ->add('audio_file', FileType::class, [
                'label' => 'Audio File (MP3 file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // everytime you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => $audioConstraints
            ])
            ->add('content', TextareaType::class, [
                'attr' => ['class' => 'trumbowyg']
            ])
            ->add('excerpt', TextareaType::class, [
                'attr' => [
                    'maxlength' => 255,
                    'onkeyup' => 'textCounter(this,"counter", 255)',
                ]
            ])
            ->add('publishedAt', DateTimeType::class, [
                'widget' => 'single_text'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            ''
        ]);

    }


}