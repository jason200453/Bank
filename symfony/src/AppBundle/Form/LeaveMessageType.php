<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LeaveMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder)
    {
        $builder->add('title', 'text')
            ->add('content', 'text')
            ->add('save', 'submit', ['label' => 'Leave Message']);
    }
}