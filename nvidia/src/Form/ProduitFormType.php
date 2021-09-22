<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProduit')
            ->add('descriptionProduit')
            ->add('prixProduit')
            ->add('coeursNvidia')
            ->add('frequenceBoost')
            ->add('capaciteMem')
            ->add('typeMem')
            ->add('tailleIntMem')
            ->add('resolutionNumMax')
            ->add('longueurProduit')
            ->add('largeurProduit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
