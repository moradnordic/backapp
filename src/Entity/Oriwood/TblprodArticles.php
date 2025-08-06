<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblprodArticlesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblProd_Articles')]
#[ORM\Entity(repositoryClass: TblprodArticlesRepository::class)]
class TblprodArticles
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Famille", nullable: true)]
    private ?int $famille = null;

    #[ORM\Column(name: "Designation", length: 255, nullable: true)]
    private ?string $designation = null;

    #[ORM\Column(name: "EP", nullable: true)]
    private ?float $ep = null;

    #[ORM\Column(name: "Largeur", nullable: true)]
    private ?float $largeur = null;

    #[ORM\Column(name: "CodeTarif", nullable: true)]
    private ?int $codetarif = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getFamille(): ?int
    {
        return $this->famille;
    }

    public function setFamille(?int $famille): static
    {
        $this->famille = $famille;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getEp(): ?float
    {
        return $this->ep;
    }

    public function setEp(?float $ep): static
    {
        $this->ep = $ep;

        return $this;
    }

    public function getLargeur(): ?float
    {
        return $this->largeur;
    }

    public function setLargeur(?float $largeur): static
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getCodetarif(): ?int
    {
        return $this->codetarif;
    }

    public function setCodetarif(?int $codetarif): static
    {
        $this->codetarif = $codetarif;

        return $this;
    }
}
