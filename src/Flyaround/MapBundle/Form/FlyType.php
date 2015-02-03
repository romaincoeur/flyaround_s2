<?php

namespace Flyaround\MapBundle\Form;

use Flyaround\MapBundle\Entity\Fly;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FlyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('latitude')
            ->add('longitude')
            ->add('description')
            ->add('category', 'choice', array(
                'choices' => Fly::getCategories(),
                'expanded' => false,
                'multiple' => false,
                'required' => true
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Flyaround\MapBundle\Entity\Fly'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyaround_mapbundle_fly';
    }
}
