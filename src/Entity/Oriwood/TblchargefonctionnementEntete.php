<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblchargefonctionnementEnteteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblChargeFonctionnement_Entete')]
#[ORM\Entity(repositoryClass: TblchargefonctionnementEnteteRepository::class)]
class TblchargefonctionnementEntete
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "DateDepart", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datedepart = null;

    #[ORM\Column(name: "DateFin", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefin = null;

    #[ORM\Column(name: "Nature", nullable: true)]
    private ?int $nature = null;

    #[ORM\Column(name: "Periodicite", nullable: true)]
    private ?int $periodicite = null;

    #[ORM\Column(name: "NombreEcheances", nullable: true)]
    private ?int $nombreecheances = null;

    #[ORM\Column(name: "Prestataire", length: 255, nullable: true)]
    private ?string $prestataire = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getDatedepart(): ?\DateTimeInterface
    {
        return $this->datedepart;
    }

    public function setDatedepart(?\DateTimeInterface $datedepart): static
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(?\DateTimeInterface $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getNature(): ?int
    {
        return $this->nature;
    }

    public function setNature(?int $nature): static
    {
        $this->nature = $nature;

        return $this;
    }

    public function getPeriodicite(): ?int
    {
        return $this->periodicite;
    }

    public function setPeriodicite(?int $periodicite): static
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    public function getNombreecheances(): ?int
    {
        return $this->nombreecheances;
    }

    public function setNombreecheances(?int $nombreecheances): static
    {
        $this->nombreecheances = $nombreecheances;

        return $this;
    }

    public function getPrestataire(): ?string
    {
        return $this->prestataire;
    }

    public function setPrestataire(?string $prestataire): static
    {
        $this->prestataire = $prestataire;

        return $this;
    }
}
