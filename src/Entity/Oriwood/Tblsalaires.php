<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblsalairesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblSalaires')]
#[ORM\Entity(repositoryClass: TblsalairesRepository::class)]
class Tblsalaires
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Employe", nullable: true)]
    private ?int $employe = null;

    #[ORM\Column(name: "Periode", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $periode = null;

    #[ORM\Column(name: "Brut", nullable: true)]
    private ?float $brut = null;

    #[ORM\Column(name: "Net", nullable: true)]
    private ?float $net = null;

    #[ORM\Column(name: "TotalChargeSociete", nullable: true)]
    private ?float $totalchargesociete = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getEmploye(): ?int
    {
        return $this->employe;
    }

    public function setEmploye(?int $employe): static
    {
        $this->employe = $employe;

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

    public function getBrut(): ?float
    {
        return $this->brut;
    }

    public function setBrut(?float $brut): static
    {
        $this->brut = $brut;

        return $this;
    }

    public function getNet(): ?float
    {
        return $this->net;
    }

    public function setNet(?float $net): static
    {
        $this->net = $net;

        return $this;
    }

    public function getTotalchargesociete(): ?float
    {
        return $this->totalchargesociete;
    }

    public function setTotalchargesociete(?float $totalchargesociete): static
    {
        $this->totalchargesociete = $totalchargesociete;

        return $this;
    }
}
