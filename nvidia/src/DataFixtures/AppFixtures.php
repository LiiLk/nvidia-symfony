<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $produit_1 = new Produit();
        $produit_1->setNomProduit("GEFORCE RTX 3090")
            ->setDescriptionProduit("NVIDIA GEFORCE RTX 3090 - Système de refroidissement: Fan")
            ->setPrixProduit(1549.00)
            ->setCoeursNvidia(10496)
            ->setFrequenceBoost(1.70)
            ->setCapaciteMem("24 GB")
            ->setTypeMem("GDDR6X")
            ->setTailleIntMem("384-bit")
            ->setResolutionNumMax("7680x4320")
            ->setLongueurProduit("12.3' (313 mm)")
            ->setLargeurProduit("5.4' (138 mm)");
        $manager->persist($produit_1);

        $produit_2 = new Produit();
        $produit_2->setNomProduit("GEFORCE RTX 3080 Ti")
            ->setDescriptionProduit("NVIDIA GEFORCE RTX 3080 Ti - Système de refroidissement: Fan")
            ->setPrixProduit(1199.00)
            ->setCoeursNvidia(10240)
            ->setFrequenceBoost(1.67)
            ->setCapaciteMem("12 GB")
            ->setTypeMem("GDDR6X")
            ->setTailleIntMem("384-bit")
            ->setResolutionNumMax("7680x4320")
            ->setLongueurProduit("11.2' (285 mm)")
            ->setLargeurProduit("4.4' (112 mm)");
        $manager->persist($produit_2);

        $produit_3 = new Produit();
        $produit_3->setNomProduit("GEFORCE RTX 3080")
            ->setDescriptionProduit("NVIDIA GEFORCE RTX 3080 - Système de refroidissement: Fan")
            ->setPrixProduit(719.00)
            ->setCoeursNvidia(8704)
            ->setFrequenceBoost(1.71)
            ->setCapaciteMem("10 GB")
            ->setTypeMem("GDDR6X")
            ->setTailleIntMem("320-bit")
            ->setResolutionNumMax("7680x4320")
            ->setLongueurProduit("11.2' (285 mm)")
            ->setLargeurProduit("4.4' (112 mm)");
        $manager->persist($produit_3);

        $produit_4 = new Produit();
        $produit_4->setNomProduit("GEFORCE RTX 3070 Ti")
            ->setDescriptionProduit("NVIDIA GEFORCE RTX 3070 Ti - Système de refroidissement: Fan")
            ->setPrixProduit(619.00)
            ->setCoeursNvidia(6144)
            ->setFrequenceBoost(1.77)
            ->setCapaciteMem("8 GB")
            ->setTypeMem("GDDR6X")
            ->setTailleIntMem("256-bit")
            ->setResolutionNumMax("7680x4320")
            ->setLongueurProduit("10.5' (267 mm)")
            ->setLargeurProduit("4.4' (112 mm)");
        $manager->persist($produit_4);

        $produit_5 = new Produit();
        $produit_5->setNomProduit("GEFORCE RTX 3070")
            ->setDescriptionProduit("NVIDIA GEFORCE RTX 3070 - Système de refroidissement: Fan")
            ->setPrixProduit(519.00)
            ->setCoeursNvidia(5888)
            ->setFrequenceBoost(1.73)
            ->setCapaciteMem("8 GB")
            ->setTypeMem("GDDR6")
            ->setTailleIntMem("256-bit")
            ->setResolutionNumMax("7680x4320")
            ->setLongueurProduit("9.5' (242 mm)")
            ->setLargeurProduit("4.4' (112 mm)");
        $manager->persist($produit_5);

        $produit_6 = new Produit();
        $produit_6->setNomProduit("GEFORCE RTX 3060 Ti")
            ->setDescriptionProduit("NVIDIA GEFORCE RTX 3060 Ti - Système de refroidissement: Fan")
            ->setPrixProduit(419.00)
            ->setCoeursNvidia(4864)
            ->setFrequenceBoost(1.67)
            ->setCapaciteMem("8 GB")
            ->setTypeMem("GDDR6")
            ->setTailleIntMem("256-bit")
            ->setResolutionNumMax("7680x4320")
            ->setLongueurProduit("9.5' (242 mm)")
            ->setLargeurProduit("4.4' (112 mm)");
        $manager->persist($produit_6);

        $produit_7 = new Produit();
        $produit_7->setNomProduit("GEFORCE RTX 3060")
            ->setDescriptionProduit("MSI GeForce RTX 3060 VENTUS 2X 12G - Système de refroidissement: Active")
            ->setPrixProduit(579.90)
            ->setCoeursNvidia(3584)
            ->setFrequenceBoost(1.78)
            ->setCapaciteMem("12 GB")
            ->setTypeMem("GDDR6")
            ->setTailleIntMem("192-bit")
            ->setResolutionNumMax("7680x4320")
            ->setLongueurProduit("235 mm")
            ->setLargeurProduit("124 mm");
        $manager->persist($produit_7);

        $manager->flush();
    }
}
