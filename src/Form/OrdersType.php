<?php

namespace App\Form;

use App\Entity\Orders;
use App\Entity\Products;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cep_origin', TextType::class, [
                'label'        => 'Cep Origem',
                'attr'         => [
                    'class'    => 'form-control'
                ],
                'row_attr'     => [
                    'class'    => 'form-group col-md-12'
                ]
            ])
            ->add('cep_destiny', TextType::class, [
                'label'        => 'Cep Destino',
                'attr'         => [
                    'class'    => 'form-control'
                ],
                'row_attr'     => [
                    'class'    => 'form-group col-md-12'
                ]
            ])
            ->add('products', EntityType::class, [
                'class'        => Products::class,
                'choice_label' => 'name',
                'label'        => 'Produto',
                'attr'         => [
                    'class'    => 'form-control'
                ],
                'row_attr'     => [
                    'class'    => 'form-group col-md-12'
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
            'data_class' => Orders::class,
        ]);
    }
}
