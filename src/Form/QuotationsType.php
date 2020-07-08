<?php

namespace App\Form;

use App\Entity\Orders;
use App\Entity\Quotations;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuotationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('service_code', ChoiceType::class, [
                'choices'                    => [
                    '04510 (PAC)'            => '04510',
                    '04014 (SEDEX)'          => '04014',
                ],
                'label'                      => 'Código do Serviço',
                'attr'                       => [
                    'class'                  => 'form-control'
                ],
                'row_attr'                   => [
                    'class'                  => 'form-group col-md-12'
                ]
            ])
            ->add('orders', EntityType::class, [
                'class'        => Orders::class,
                'choice_label' => 'id',
                'label'        => 'Código do Pedido',
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
            'data_class' => Quotations::class,
        ]);
    }
}
