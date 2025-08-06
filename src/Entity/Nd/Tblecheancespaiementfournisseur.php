<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblecheancespaiementfournisseurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblEcheancesPaiementFournisseur')]
#[ORM\Entity(repositoryClass: TblecheancespaiementfournisseurRepository::class)]
class Tblecheancespaiementfournisseur
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Facture", nullable: true)]
    private ?int $facture = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getFacture(): ?int
    {
        return $this->facture;
    }

    public function setFacture(?int $facture): static
    {
        $this->facture = $facture;

        return $this;
    }

    public function getEcheance(): ?\DateTimeInterface
    {
        return $this->echeance;
    }

    public function setEcheance(?\DateTimeInterface $echeance): static
    {
        $this->echeance = $echeance;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }
}
