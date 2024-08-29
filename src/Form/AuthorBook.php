<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Book; 
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorBook extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('auteur', EntityType::class, [
                '?Auteur' => Auteur::class,
                'choice_label' => 'nom',
                'placeholder' => 'Select an author',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,  
        ]);
    }
}
