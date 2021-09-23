<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomProduit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionProduit;

    /**
     * @ORM\Column(type="float")
     */
    private $prixProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $coeursNvidia;

    /**
     * @ORM\Column(type="float")
     */
    private $frequenceBoost;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $capaciteMem;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $typeMem;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tailleIntMem;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $resolutionNumMax;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $longueurProduit;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $largeurProduit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(string $descriptionProduit): self
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(float $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    public function getCoeursNvidia(): ?int
    {
        return $this->coeursNvidia;
    }

    public function setCoeursNvidia(int $coeursNvidia): self
    {
        $this->coeursNvidia = $coeursNvidia;

        return $this;
    }

    public function getFrequenceBoost(): ?float
    {
        return $this->frequenceBoost;
    }

    public function setFrequenceBoost(float $frequenceBoost): self
    {
        $this->frequenceBoost = $frequenceBoost;

        return $this;
    }

    public function getCapaciteMem(): ?string
    {
        return $this->capaciteMem;
    }

    public function setCapaciteMem(string $capaciteMem): self
    {
        $this->capaciteMem = $capaciteMem;

        return $this;
    }

    public function getTypeMem(): ?string
    {
        return $this->typeMem;
    }

    public function setTypeMem(string $typeMem): self
    {
        $this->typeMem = $typeMem;

        return $this;
    }

    public function getTailleIntMem(): ?string
    {
        return $this->tailleIntMem;
    }

    public function setTailleIntMem(string $tailleIntMem): self
    {
        $this->tailleIntMem = $tailleIntMem;

        return $this;
    }

    public function getResolutionNumMax(): ?string
    {
        return $this->resolutionNumMax;
    }

    public function setResolutionNumMax(string $resolutionNumMax): self
    {
        $this->resolutionNumMax = $resolutionNumMax;

        return $this;
    }

    public function getLongueurProduit(): ?string
    {
        return $this->longueurProduit;
    }

    public function setLongueurProduit(string $longueurProduit): self
    {
        $this->longueurProduit = $longueurProduit;

        return $this;
    }

    public function getLargeurProduit(): ?string
    {
        return $this->largeurProduit;
    }

    public function setLargeurProduit(string $largeurProduit): self
    {
        $this->largeurProduit = $largeurProduit;

        return $this;
    }
}
