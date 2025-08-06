<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltelconsommationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTelConsommation')]
#[ORM\Entity(repositoryClass: TbltelconsommationRepository::class)]
class Tbltelconsommation
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Employe", nullable: true)]
    private ?int $employe = null;

    #[ORM\Column(name: "Periode", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $periode = null;

    #[ORM\Column(name: "ConsommationDH", nullable: true)]
    private ?float $consommationdh = null;

    #[ORM\Column(name: "Heures", nullable: true)]
    private ?int $heures = null;

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

    public function getConsommationdh(): ?float
    {
        return $this->consommationdh;
    }

    public function setConsommationdh(?float $consommationdh): static
    {
        $this->consommationdh = $consommationdh;

        return $this;
    }

    public function getHeures(): ?int
    {
        return $this->heures;
    }

    public function setHeures(?int $heures): static
    {
        $this->heures = $heures;

        return $this;
    }
}
