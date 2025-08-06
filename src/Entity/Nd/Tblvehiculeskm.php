<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblvehiculeskmRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblVehiculesKM')]
#[ORM\Entity(repositoryClass: TblvehiculeskmRepository::class)]
class Tblvehiculeskm
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Vehicule")]
    private ?int $vehicule = null;

    #[ORM\Column(name: "Periode", type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $periode = null;

    #[ORM\Column(name: "KM")]
    private ?int $km = null;

    #[ORM\Column(name: "Utilisateur", nullable: true)]
    private ?int $utilisateur = null;

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

    public function getPeriode(): ?\DateTimeInterface
    {
        return $this->periode;
    }

    public function setPeriode(\DateTimeInterface $periode): static
    {
        $this->periode = $periode;

        return $this;
    }

    public function getKm(): ?int
    {
        return $this->km;
    }

    public function setKm(int $km): static
    {
        $this->km = $km;

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
}
