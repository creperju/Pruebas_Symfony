<?php

namespace Acme\QuestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class FormQuestionAnswer extends AbstractType
{
    private $form_name;
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('questiondescription', 'text');
    }
 
    public function setName($form_name)
    {
        $this->form_name = $form_name;
    }
    
    public function getName()
    {
        return $this->form_name;
    }
    
    
    
 
    /*public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\QuestionBundle\Document\Question',
        ));
    }*/
    
}