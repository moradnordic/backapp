<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbletatscommandesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblEtatsCommandes')]
#[ORM\Entity(repositoryClass: TbletatscommandesRepository::class)]
class Tbletatscommandes
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "EtatCommande", length: 255, nullable: true)]
    private ?string $etatcommande = null;

    #[ORM\Column(name: "DescriptifEtat", length: 255, nullable: true)]
    private ?string $descriptifetat = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getEtatcommande(): ?string
    {
        return $this->etatcommande;
    }

    public function setEtatcommande(?string $etatcommande): static
    {
        $this->etatcommande = $etatcommande;

        return $this;
    }

    public function getDescriptifetat(): ?string
    {
        return $this->descriptifetat;
    }

    public function setDescriptifetat(?string $descriptifetat): static
    {
        $this->descriptifetat = $descriptifetat;

        return $this;
    }
}
