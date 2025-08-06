<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblreleveFrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblReleve_Frs')]
#[ORM\Entity(repositoryClass: TblreleveFrsRepository::class)]
class TblreleveFrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "RefND", nullable: true)]
    private ?int $refnd = null;

    #[ORM\Column(name: "Frs", nullable: true)]
    private ?int $frs = null;

    #[ORM\Column(name: "DateOperation", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateoperation = null;

    #[ORM\Column(name: "TypeOperation", length: 255, nullable: true)]
    private ?string $typeoperation = null;

    #[ORM\Column(name: "ReferenceOperation", length: 255, nullable: true)]
    private ?string $referenceoperation = null;

    #[ORM\Column(name: "DateFactureFrs", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefacturefrs = null;

    #[ORM\Column(name: "Debit", nullable: true)]
    private ?float $debit = null;

    #[ORM\Column(name: "Credit", nullable: true)]
    private ?float $credit = null;

    #[ORM\Column(name: "Solde", nullable: true)]
    private ?float $solde = null;

    #[ORM\Column(name: "Devise", nullable: true)]
    private ?int $devise = null;

    #[ORM\Column(name: "CatOperation", length: 255, nullable: true)]
    private ?string $catoperation = null;

    #[ORM\Column(name: "Confirmed")]
    private ?bool $confirmed = null;

    #[ORM\Column(name: "ValueDate", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $valuedate = null;

    #[ORM\Column(name: "RealPayTerm", nullable: true)]
    private ?int $realpayterm = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getRefnd(): ?int
    {
        return $this->refnd;
    }

    public function setRefnd(?int $refnd): static
    {
        $this->refnd = $refnd;

        return $this;
    }

    public function getFrs(): ?int
    {
        return $this->frs;
    }

    public function setFrs(?int $frs): static
    {
        $this->frs = $frs;

        return $this;
    }

    public function getDateoperation(): ?\DateTimeInterface
    {
        return $this->dateoperation;
    }

    public function setDateoperation(?\DateTimeInterface $dateoperation): static
    {
        $this->dateoperation = $dateoperation;

        return $this;
    }

    public function getTypeoperation(): ?string
    {
        return $this->typeoperation;
    }

    public function setTypeoperation(?string $typeoperation): static
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    public function getReferenceoperation(): ?string
    {
        return $this->referenceoperation;
    }

    public function setReferenceoperation(?string $referenceoperation): static
    {
        $this->referenceoperation = $referenceoperation;

        return $this;
    }

    public function getDatefacturefrs(): ?\DateTimeInterface
    {
        return $this->datefacturefrs;
    }

    public function setDatefacturefrs(?\DateTimeInterface $datefacturefrs): static
    {
        $this->datefacturefrs = $datefacturefrs;

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

    public function getCredit(): ?float
    {
        return $this->credit;
    }

    public function setCredit(?float $credit): static
    {
        $this->credit = $credit;

        return $this;
    }

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(?float $solde): static
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDevise(): ?int
    {
        return $this->devise;
    }

    public function setDevise(?int $devise): static
    {
        $this->devise = $devise;

        return $this;
    }

    public function getCatoperation(): ?string
    {
        return $this->catoperation;
    }

    public function setCatoperation(?string $catoperation): static
    {
        $this->catoperation = $catoperation;

        return $this;
    }

    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): static
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getValuedate(): ?\DateTimeInterface
    {
        return $this->valuedate;
    }

    public function setValuedate(?\DateTimeInterface $valuedate): static
    {
        $this->valuedate = $valuedate;

        return $this;
    }

    public function getRealpayterm(): ?int
    {
        return $this->realpayterm;
    }

    public function setRealpayterm(?int $realpayterm): static
    {
        $this->realpayterm = $realpayterm;

        return $this;
    }
}
