<?php

namespace App\Entity\Nd;

use App\Repository\Nd\Result33Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Result_33')]
#[ORM\Entity(repositoryClass: Result33Repository::class)]
class Result33
{
    #[ORM\Column(name: "NC", nullable: true)]
    private ?int $nc = null;

    #[ORM\Column(name: "NomClient", length: 1, nullable: true)]
    private ?string $nomclient = null;

    #[ORM\Column(name: "DateReception", length: 1, nullable: true)]
    private ?string $datereception = null;

    #[ORM\Column(name: "Echeance", length: 1, nullable: true)]
    private ?string $echeance = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "DateVersement", length: 1, nullable: true)]
    private ?string $dateversement = null;

    #[ORM\Column(name: "DateRemise", length: 1, nullable: true)]
    private ?string $dateremise = null;

    #[ORM\Column(name: "DateFactureRegler", length: 1, nullable: true)]
    private ?string $datefactureregler = null;

    #[ORM\Column(name: "DateVersement_2", length: 1, nullable: true)]
    private ?string $dateversement2 = null;

    #[ORM\Column(name: "TypeDePaiement", length: 1, nullable: true)]
    private ?string $typedepaiement = null;

    #[ORM\Column(name: "client_bank", length: 1, nullable: true)]
    private ?string $clientBank = null;

    #[ORM\Column(name: "NumPiece", length: 1, nullable: true)]
    private ?string $numpiece = null;

    #[ORM\Column(name: "Nbre_Jours", nullable: true)]
    private ?int $nbreJours = null;

    #[ORM\Column(name: "nos_banque", length: 1, nullable: true)]
    private ?string $nosBanque = null;

    #[ORM\Column(name: "dte_diff_vers_echea", nullable: true)]
    private ?int $dteDiffVersEchea = null;

    #[ORM\Column(name: "Jrs_restants", nullable: true)]
    private ?int $jrsRestants = null;

    #[ORM\Column(name: "TypeVersements", length: 1, nullable: true)]
    private ?string $typeversements = null;

    #[ORM\Column(name: "Sort", nullable: true)]
    private ?int $sort = null;

    #[ORM\Column(name: "NePasVerser", length: 1, nullable: true)]
    private ?string $nepasverser = null;

    #[ORM\Column(name: "ReferenceBanque", length: 1, nullable: true)]
    private ?string $referencebanque = null;

    public function getNc(): ?int
    {
        return $this->nc;
    }

    public function setNc(?int $nc): static
    {
        $this->nc = $nc;

        return $this;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): static
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getDatereception(): ?string
    {
        return $this->datereception;
    }

    public function setDatereception(?string $datereception): static
    {
        $this->datereception = $datereception;

        return $this;
    }

    public function getEcheance(): ?string
    {
        return $this->echeance;
    }

    public function setEcheance(?string $echeance): static
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

    public function getDateversement(): ?string
    {
        return $this->dateversement;
    }

    public function setDateversement(?string $dateversement): static
    {
        $this->dateversement = $dateversement;

        return $this;
    }

    public function getDateremise(): ?string
    {
        return $this->dateremise;
    }

    public function setDateremise(?string $dateremise): static
    {
        $this->dateremise = $dateremise;

        return $this;
    }

    public function getDatefactureregler(): ?string
    {
        return $this->datefactureregler;
    }

    public function setDatefactureregler(?string $datefactureregler): static
    {
        $this->datefactureregler = $datefactureregler;

        return $this;
    }

    public function getDateversement2(): ?string
    {
        return $this->dateversement2;
    }

    public function setDateversement2(?string $dateversement2): static
    {
        $this->dateversement2 = $dateversement2;

        return $this;
    }

    public function getTypedepaiement(): ?string
    {
        return $this->typedepaiement;
    }

    public function setTypedepaiement(?string $typedepaiement): static
    {
        $this->typedepaiement = $typedepaiement;

        return $this;
    }

    public function getClientBank(): ?string
    {
        return $this->clientBank;
    }

    public function setClientBank(?string $clientBank): static
    {
        $this->clientBank = $clientBank;

        return $this;
    }

    public function getNumpiece(): ?string
    {
        return $this->numpiece;
    }

    public function setNumpiece(?string $numpiece): static
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    public function getNbreJours(): ?int
    {
        return $this->nbreJours;
    }

    public function setNbreJours(?int $nbreJours): static
    {
        $this->nbreJours = $nbreJours;

        return $this;
    }

    public function getNosBanque(): ?string
    {
        return $this->nosBanque;
    }

    public function setNosBanque(?string $nosBanque): static
    {
        $this->nosBanque = $nosBanque;

        return $this;
    }

    public function getDteDiffVersEchea(): ?int
    {
        return $this->dteDiffVersEchea;
    }

    public function setDteDiffVersEchea(?int $dteDiffVersEchea): static
    {
        $this->dteDiffVersEchea = $dteDiffVersEchea;

        return $this;
    }

    public function getJrsRestants(): ?int
    {
        return $this->jrsRestants;
    }

    public function setJrsRestants(?int $jrsRestants): static
    {
        $this->jrsRestants = $jrsRestants;

        return $this;
    }

    public function getTypeversements(): ?string
    {
        return $this->typeversements;
    }

    public function setTypeversements(?string $typeversements): static
    {
        $this->typeversements = $typeversements;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(?int $sort): static
    {
        $this->sort = $sort;

        return $this;
    }

    public function getNepasverser(): ?string
    {
        return $this->nepasverser;
    }

    public function setNepasverser(?string $nepasverser): static
    {
        $this->nepasverser = $nepasverser;

        return $this;
    }

    public function getReferencebanque(): ?string
    {
        return $this->referencebanque;
    }

    public function setReferencebanque(?string $referencebanque): static
    {
        $this->referencebanque = $referencebanque;

        return $this;
    }
}
