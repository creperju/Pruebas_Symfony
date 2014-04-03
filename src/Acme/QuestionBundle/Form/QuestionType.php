<?php

namespace Acme\QuestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class QuestionType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('questiondescription', 'text');
    }
 
    
    
    public function getName()
    {
        return 'question';
    }
    
    
    
 
    /*public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\QuestionBundle\Document\Question',
        ));
    }*/
    
}