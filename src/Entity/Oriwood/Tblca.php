<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblcaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCA')]
#[ORM\Entity(repositoryClass: TblcaRepository::class)]
class Tblca
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Periode", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $periode = null;

    #[ORM\Column(name: "Utilisateur", nullable: true)]
    private ?int $utilisateur = null;

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

    public function getPeriode(): ?\DateTimeInterface
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTimeInterface $periode): static
    {
        $this->periode = $periode;

        return $this;
    }

    public function getUtilisateur(): ?int
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?int $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

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
