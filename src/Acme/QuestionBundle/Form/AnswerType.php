<?php

namespace Acme\QuestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AnswerType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('answerdescription', 'textarea');
    }
 
    
    
    public function getName()
    {
        return 'answer';
    }
    
    
}