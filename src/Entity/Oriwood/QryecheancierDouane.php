<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\QryecheancierDouaneRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'qryEcheancier_Douane')]
#[ORM\Entity(repositoryClass: QryecheancierDouaneRepository::class)]
class QryecheancierDouane
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "GAC_Nr")]
    private ?int $gacNr = null;

    #[ORM\Column(name: "Dossier", length: 255, nullable: true)]
    private ?string $dossier = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "Coef", nullable: true)]
    private ?int $coef = null;

    #[ORM\Column(name: "Debit", nullable: true)]
    private ?float $debit = null;

    #[ORM\Column(name: "Credit", nullable: true)]
    private ?int $credit = null;

    #[ORM\Column(name: "Tiers", length: 255, nullable: true)]
    private ?string $tiers = null;

    #[ORM\Column(name: "RefTiers", length: 255, nullable: true)]
    private ?string $reftiers = null;

    #[ORM\Column(name: "DteFactTiers", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dtefacttiers = null;

    #[ORM\Column(name: "DeviseFactTiers", length: 255, nullable: true)]
    private ?string $devisefacttiers = null;

    #[ORM\Column(name: "MntFactTiers", nullable: true)]
    private ?float $mntfacttiers = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getGacNr(): ?int
    {
        return $this->gacNr;
    }

    public function setGacNr(int $gacNr): static
    {
        $this->gacNr = $gacNr;

        return $this;
    }

    public function getDossier(): ?string
    {
        return $this->dossier;
    }

    public function setDossier(?string $dossier): static
    {
        $this->dossier = $dossier;

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

    public function getCoef(): ?int
    {
        return $this->coef;
    }

    public function setCoef(?int $coef): static
    {
        $this->coef = $coef;

        return $this;
    }

    public function getDebit(): ?float
    {
        return $this->debit;
    }

    public function setDebit(?float $debit): static
    {
        $this->debit = $debit;

        return $this;
    }

    public function getCredit(): ?int
    {
        return $this->credit;
    }

    public function setCredit(?int $credit): static
    {
        $this->credit = $credit;

        return $this;
    }

    public function getTiers(): ?string
    {
        return $this->tiers;
    }

    public function setTiers(?string $tiers): static
    {
        $this->tiers = $tiers;

        return $this;
    }

    public function getReftiers(): ?string
    {
        return $this->reftiers;
    }

    public function setReftiers(?string $reftiers): static
    {
        $this->reftiers = $reftiers;

        return $this;
    }

    public function getDtefacttiers(): ?\DateTimeInterface
    {
        return $this->dtefacttiers;
    }

    public function setDtefacttiers(?\DateTimeInterface $dtefacttiers): static
    {
        $this->dtefacttiers = $dtefacttiers;

        return $this;
    }

    public function getDevisefacttiers(): ?string
    {
        return $this->devisefacttiers;
    }

    public function setDevisefacttiers(?string $devisefacttiers): static
    {
        $this->devisefacttiers = $devisefacttiers;

        return $this;
    }

    public function getMntfacttiers(): ?float
    {
        return $this->mntfacttiers;
    }

    public function setMntfacttiers(?float $mntfacttiers): static
    {
        $this->mntfacttiers = $mntfacttiers;

        return $this;
    }
}
