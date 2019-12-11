<?php


namespace AppBundle\Form\Type;


use AppBundle\Entity\City;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CityType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('id',null,[
            'label'=>'Nombre ciudad'
            ])
        ->add('personas',null,[
            'label'=>'Población'
        ]);
}
public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class'=>City::class
    ]);
}
}