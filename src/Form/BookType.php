<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\Auteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class)
            ->add('description', TextareaType::class)
            ->add('dateDePublication', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('dateDeCreation', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('dateDeModification', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('Auteur', AuthorBook::class)
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
