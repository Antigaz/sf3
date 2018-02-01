<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 2/1/18
 * Time: 1:06 AM
 */

namespace AppBundle\Forms\Types;


use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class offerSubmissionType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('proposition', TextType::class)
            ->add('price', NumberType::class)
            ->add('envoyer', SubmitType::class, ['label' => 'Proposer'])
        ;
    }
}