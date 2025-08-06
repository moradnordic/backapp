<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblvehiculesaffectationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblVehiculesAffectations')]
#[ORM\Entity(repositoryClass: TblvehiculesaffectationsRepository::class)]
class Tblvehiculesaffectations
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Vehicule")]
    private ?int $vehicule = null;

    #[ORM\Column(name: "Employe")]
    private ?int $employe = null;

    #[ORM\Column(name: "Du", type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $du = null;

    #[ORM\Column(name: "Au", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $au = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getVehicule(): ?int
    {
        return $this->vehicule;
    }

    public function setVehicule(int $vehicule): static
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getEmploye(): ?int
    {
        return $this->employe;
    }

    public function setEmploye(int $employe): static
    {
        $this->employe = $employe;

        return $this;
    }

    public function getDu(): ?\DateTimeInterface
    {
        return $this->du;
    }

    public function setDu(\DateTimeInterface $du): static
    {
        $this->du = $du;

        return $this;
    }

    public function getAu(): ?\DateTimeInterface
    {
        return $this->au;
    }

    public function setAu(?\DateTimeInterface $au): static
    {
        $this->au = $au;

        return $this;
    }
}
