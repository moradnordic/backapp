<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TmpStockTmpRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tmp_stock_tmp')]
#[ORM\Entity(repositoryClass: TmpStockTmpRepository::class)]
class TmpStockTmp
{
    #[ORM\Column(name: "reference", length: 19)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $reference = null;

    #[ORM\Column(name: "famille", length: 35, nullable: true)]
    private ?string $famille = null;

    #[ORM\Column(name: "designation", length: 69, nullable: true)]
    private ?string $designation = null;

    #[ORM\Column(name: "qteStock", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $qtestock = null;

    #[ORM\Column(name: "qteMin", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $qtemin = null;

    #[ORM\Column(name: "qteCommande", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $qtecommande = null;

    #[ORM\Column(name: "qteReserve", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $qtereserve = null;

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->famille;
    }

    public function setFamille(?string $famille): static
    {
        $this->famille = $famille;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getQtestock(): ?string
    {
        return $this->qtestock;
    }

    public function setQtestock(?string $qtestock): static
    {
        $this->qtestock = $qtestock;

        return $this;
    }

    public function getQtemin(): ?string
    {
        return $this->qtemin;
    }

    public function setQtemin(?string $qtemin): static
    {
        $this->qtemin = $qtemin;

        return $this;
    }

    public function getQtecommande(): ?string
    {
        return $this->qtecommande;
    }

    public function setQtecommande(?string $qtecommande): static
    {
        $this->qtecommande = $qtecommande;

        return $this;
    }

    public function getQtereserve(): ?string
    {
        return $this->qtereserve;
    }

    public function setQtereserve(?string $qtereserve): static
    {
        $this->qtereserve = $qtereserve;

        return $this;
    }
}
