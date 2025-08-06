<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblclientCategriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblClient_Categries')]
#[ORM\Entity(repositoryClass: TblclientCategriesRepository::class)]
class TblclientCategries
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Categorie", length: 255, nullable: true)]
    private ?string $categorie = null;

    #[ORM\Column(name: "Supplement_Pourcentage", length: 255, nullable: true)]
    private ?string $supplementPourcentage = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getSupplementPourcentage(): ?string
    {
        return $this->supplementPourcentage;
    }

    public function setSupplementPourcentage(?string $supplementPourcentage): static
    {
        $this->supplementPourcentage = $supplementPourcentage;

        return $this;
    }
}
