<?php

namespace App\Form;

use App\Entity\Products;



use Symfony\Component\Form\Extension\Core\Type\FloatType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name' , TextType::class, [
                'label'     => 'Nome',
                'attr'      => [
                    'class' => 'form-control'
                ],
                'row_attr'  => [
                    'class' => 'form-group col-md-12'
                ]
            ])
            ->add('length', TextType::class, [
                'label'     => 'Comprimento (cm)',
                'attr'      => [
                    'class' => 'form-control'
                ],
                'row_attr'  => [
                    'class' => 'form-group col-md-12'
                ]
            ])
            ->add('height', TextType::class, [
                'label'     => 'Altura (cm)',
                'attr'      => [
                    'class' => 'form-control'
                ],
                'row_attr'  => [
                    'class' => 'form-group col-md-12'
                ]
            ])
            ->add('width', TextType::class, [
                'label'     => 'Largura (cm)',
                'attr'      => [
                    'class' => 'form-control'
                ],
                'row_attr'  => [
                    'class' => 'form-group col-md-12'
                ]
            ])
            ->add('weight', TextType::class, [
                'label'     => 'Peso (Kg)',
                'attr'      => [
                    'class' => 'form-control'
                ],
                'row_attr'  => [
                    'class' => 'form-group col-md-12'
                ]
            ])
            ->add('salvar', SubmitType::class, [
                'attr'      => [
                    'class' => 'btn btn-success btn-right'
                ],
                'row_attr'  => [
                    'class' => 'form-group col-md-12'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
