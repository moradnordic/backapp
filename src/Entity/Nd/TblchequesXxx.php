<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblchequesXxxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCheques_XXX')]
#[ORM\Entity(repositoryClass: TblchequesXxxRepository::class)]
class TblchequesXxx
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "ChequierPere", nullable: true)]
    private ?int $chequierpere = null;

    #[ORM\Column(name: "PrefixeCheque", length: 4, nullable: true)]
    private ?string $prefixecheque = null;

    #[ORM\Column(name: "NumeroCheque", nullable: true)]
    private ?int $numerocheque = null;

    #[ORM\Column(name: "DateEmission", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateemission = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "Beneficiaire", length: 255, nullable: true)]
    private ?string $beneficiaire = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "SignerPar", nullable: true)]
    private ?int $signerpar = null;

    #[ORM\Column(name: "ScanCheque", length: 255, nullable: true)]
    private ?string $scancheque = null;

    #[ORM\Column(name: "ScanPiece", length: 255, nullable: true)]
    private ?string $scanpiece = null;

    #[ORM\Column(name: "Valide")]
    private ?bool $valide = null;

    #[ORM\Column(name: "Encaisse")]
    private ?bool $encaisse = null;

    #[ORM\Column(name: "Annuler")]
    private ?bool $annuler = null;

    #[ORM\Column(name: "Banque", nullable: true)]
    private ?int $banque = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getChequierpere(): ?int
    {
        return $this->chequierpere;
    }

    public function setChequierpere(?int $chequierpere): static
    {
        $this->chequierpere = $chequierpere;

        return $this;
    }

    public function getPrefixecheque(): ?string
    {
        return $this->prefixecheque;
    }

    public function setPrefixecheque(?string $prefixecheque): static
    {
        $this->prefixecheque = $prefixecheque;

        return $this;
    }

    public function getNumerocheque(): ?int
    {
        return $this->numerocheque;
    }

    public function setNumerocheque(?int $numerocheque): static
    {
        $this->numerocheque = $numerocheque;

        return $this;
    }

    public function getDateemission(): ?\DateTimeInterface
    {
        return $this->dateemission;
    }

    public function setDateemission(?\DateTimeInterface $dateemission): static
    {
        $this->dateemission = $dateemission;

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

    public function getBeneficiaire(): ?string
    {
        return $this->beneficiaire;
    }

    public function setBeneficiaire(?string $beneficiaire): static
    {
        $this->beneficiaire = $beneficiaire;

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

    public function getSignerpar(): ?int
    {
        return $this->signerpar;
    }

    public function setSignerpar(?int $signerpar): static
    {
        $this->signerpar = $signerpar;

        return $this;
    }

    public function getScancheque(): ?string
    {
        return $this->scancheque;
    }

    public function setScancheque(?string $scancheque): static
    {
        $this->scancheque = $scancheque;

        return $this;
    }

    public function getScanpiece(): ?string
    {
        return $this->scanpiece;
    }

    public function setScanpiece(?string $scanpiece): static
    {
        $this->scanpiece = $scanpiece;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getEncaisse(): ?bool
    {
        return $this->encaisse;
    }

    public function setEncaisse(bool $encaisse): static
    {
        $this->encaisse = $encaisse;

        return $this;
    }

    public function getAnnuler(): ?bool
    {
        return $this->annuler;
    }

    public function setAnnuler(bool $annuler): static
    {
        $this->annuler = $annuler;

        return $this;
    }

    public function getBanque(): ?int
    {
        return $this->banque;
    }

    public function setBanque(?int $banque): static
    {
        $this->banque = $banque;

        return $this;
    }
}
