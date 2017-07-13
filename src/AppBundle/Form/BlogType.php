<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',textType::class,[
                'label' => 'Başlık',
                'attr' => [
                    'required' => 'required',
                    'class' => 'form-control'
                ]
            ]
        )
            ->add('content',textareaType::class,[
                'label' => 'İçerik',
                'attr' => [
                    'required' => 'required',
                    'class' => 'form-control',
                    'rows' => '20'
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label' => 'Gönder',
                'attr' => [

                    'class' => 'btn btn-block'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Blog']);
    }

    public function getName()
    {
        return 'blog';
    }
}
