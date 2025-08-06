<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblassuranceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblAssurance')]
#[ORM\Entity(repositoryClass: TblassuranceRepository::class)]
class Tblassurance
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeAssurance", length: 255, nullable: true)]
    private ?string $typeassurance = null;

    #[ORM\Column(name: "AviserLe", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $aviserle = null;

    #[ORM\Column(name: "NumPolice", length: 255, nullable: true)]
    private ?string $numpolice = null;

    #[ORM\Column(name: "Courtier", nullable: true)]
    private ?int $courtier = null;

    #[ORM\Column(name: "DateEffet", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateeffet = null;

    #[ORM\Column(name: "DateExpiration", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateexpiration = null;

    #[ORM\Column(name: "MontantPrime", nullable: true)]
    private ?float $montantprime = null;

    #[ORM\Column(name: "ScanContrat", length: 255, nullable: true)]
    private ?string $scancontrat = null;

    #[ORM\Column(name: "BienVehiculeConcerner", nullable: true)]
    private ?int $bienvehiculeconcerner = null;

    #[ORM\Column(name: "BienImmeubleConcerner", nullable: true)]
    private ?int $bienimmeubleconcerner = null;

    #[ORM\Column(name: "Societe", nullable: true)]
    private ?int $societe = null;

    #[ORM\Column(name: "RegleON")]
    private ?bool $regleon = null;

    #[ORM\Column(name: "RefPaiement", nullable: true)]
    private ?int $refpaiement = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypeassurance(): ?string
    {
        return $this->typeassurance;
    }

    public function setTypeassurance(?string $typeassurance): static
    {
        $this->typeassurance = $typeassurance;

        return $this;
    }

    public function getAviserle(): ?\DateTimeInterface
    {
        return $this->aviserle;
    }

    public function setAviserle(?\DateTimeInterface $aviserle): static
    {
        $this->aviserle = $aviserle;

        return $this;
    }

    public function getNumpolice(): ?string
    {
        return $this->numpolice;
    }

    public function setNumpolice(?string $numpolice): static
    {
        $this->numpolice = $numpolice;

        return $this;
    }

    public function getCourtier(): ?int
    {
        return $this->courtier;
    }

    public function setCourtier(?int $courtier): static
    {
        $this->courtier = $courtier;

        return $this;
    }

    public function getDateeffet(): ?\DateTimeInterface
    {
        return $this->dateeffet;
    }

    public function setDateeffet(?\DateTimeInterface $dateeffet): static
    {
        $this->dateeffet = $dateeffet;

        return $this;
    }

    public function getDateexpiration(): ?\DateTimeInterface
    {
        return $this->dateexpiration;
    }

    public function setDateexpiration(?\DateTimeInterface $dateexpiration): static
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }

    public function getMontantprime(): ?float
    {
        return $this->montantprime;
    }

    public function setMontantprime(?float $montantprime): static
    {
        $this->montantprime = $montantprime;

        return $this;
    }

    public function getScancontrat(): ?string
    {
        return $this->scancontrat;
    }

    public function setScancontrat(?string $scancontrat): static
    {
        $this->scancontrat = $scancontrat;

        return $this;
    }

    public function getBienvehiculeconcerner(): ?int
    {
        return $this->bienvehiculeconcerner;
    }

    public function setBienvehiculeconcerner(?int $bienvehiculeconcerner): static
    {
        $this->bienvehiculeconcerner = $bienvehiculeconcerner;

        return $this;
    }

    public function getBienimmeubleconcerner(): ?int
    {
        return $this->bienimmeubleconcerner;
    }

    public function setBienimmeubleconcerner(?int $bienimmeubleconcerner): static
    {
        $this->bienimmeubleconcerner = $bienimmeubleconcerner;

        return $this;
    }

    public function getSociete(): ?int
    {
        return $this->societe;
    }

    public function setSociete(?int $societe): static
    {
        $this->societe = $societe;

        return $this;
    }

    public function getRegleon(): ?bool
    {
        return $this->regleon;
    }

    public function setRegleon(bool $regleon): static
    {
        $this->regleon = $regleon;

        return $this;
    }

    public function getRefpaiement(): ?int
    {
        return $this->refpaiement;
    }

    public function setRefpaiement(?int $refpaiement): static
    {
        $this->refpaiement = $refpaiement;

        return $this;
    }
}
