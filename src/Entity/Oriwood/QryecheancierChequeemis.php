<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\QryecheancierChequeemisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'qryEcheancier_ChequeEmis')]
#[ORM\Entity(repositoryClass: QryecheancierChequeemisRepository::class)]
class QryecheancierChequeemis
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "Debit", nullable: true)]
    private ?float $debit = null;

    #[ORM\Column(name: "Credit", nullable: true)]
    private ?int $credit = null;

    #[ORM\Column(name: "Tiers", length: 255, nullable: true)]
    private ?string $tiers = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

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
}
