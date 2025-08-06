<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FCaissetotalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CAISSETOTAL')]
#[ORM\Index(name: 'IHashOrder_F_CAISSETOTAL', columns: ['cbHashOrder'])]
#[ORM\UniqueConstraint(name: 'ICAT_NO', columns: ['CAT_No'])]
#[ORM\Index(name: 'ICAT_ORDRE', columns: ['CAT_No'])]
#[ORM\Index(name: 'FKIA_F_CAISSETOTAL_CA_No', columns: ['CA_No'])]
#[ORM\Entity(repositoryClass: FCaissetotalRepository::class)]
class FCaissetotal
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CA_No")]
    private ?int $caNo = null;

    #[ORM\Column(name: "CAT_No", nullable: true)]
    private ?int $catNo = null;

    #[ORM\Column(name: "CAT_DateCloture", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $catDatecloture = null;

    #[ORM\Column(name: "CAT_HeureCloture", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $catHeurecloture = null;

    #[ORM\Column(name: "CAT_Total", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $catTotal = null;

    #[ORM\Column(name: "cbProt", type: Types::SMALLINT, nullable: true)]
    private ?int $cbprot = null;

    #[ORM\Column(name: "cbCreateur", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbcreateur = 'CSQL';

    #[ORM\Column(name: "cbModification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbmodification = null;

    #[ORM\Column(name: "cbReplication", nullable: true)]
    private ?int $cbreplication = null;

    #[ORM\Column(name: "cbFlag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbflag = null;

    #[ORM\Column(name: "cbHash", type: Types::BINARY, nullable: true)]
    private $cbhash = null;

    #[ORM\Column(name: "cbHashVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $cbhashversion = 1;

    #[ORM\Column(name: "cbHashDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbhashdate = null;

    #[ORM\Column(name: "cbHashOrder", nullable: true)]
    private ?int $cbhashorder = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(int $caNo): static
    {
        $this->caNo = $caNo;

        return $this;
    }

    public function getCatNo(): ?int
    {
        return $this->catNo;
    }

    public function setCatNo(?int $catNo): static
    {
        $this->catNo = $catNo;

        return $this;
    }

    public function getCatDatecloture(): ?\DateTimeInterface
    {
        return $this->catDatecloture;
    }

    public function setCatDatecloture(?\DateTimeInterface $catDatecloture): static
    {
        $this->catDatecloture = $catDatecloture;

        return $this;
    }

    public function getCatHeurecloture(): ?string
    {
        return $this->catHeurecloture;
    }

    public function setCatHeurecloture(?string $catHeurecloture): static
    {
        $this->catHeurecloture = $catHeurecloture;

        return $this;
    }

    public function getCatTotal(): ?string
    {
        return $this->catTotal;
    }

    public function setCatTotal(?string $catTotal): static
    {
        $this->catTotal = $catTotal;

        return $this;
    }

    public function getCbprot(): ?int
    {
        return $this->cbprot;
    }

    public function setCbprot(?int $cbprot): static
    {
        $this->cbprot = $cbprot;

        return $this;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): static
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): static
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getCbreplication(): ?int
    {
        return $this->cbreplication;
    }

    public function setCbreplication(?int $cbreplication): static
    {
        $this->cbreplication = $cbreplication;

        return $this;
    }

    public function getCbflag(): ?int
    {
        return $this->cbflag;
    }

    public function setCbflag(?int $cbflag): static
    {
        $this->cbflag = $cbflag;

        return $this;
    }

    public function getCbhash()
    {
        return $this->cbhash;
    }

    public function setCbhash($cbhash): static
    {
        $this->cbhash = $cbhash;

        return $this;
    }

    public function getCbhashversion(): ?int
    {
        return $this->cbhashversion;
    }

    public function setCbhashversion(?int $cbhashversion): static
    {
        $this->cbhashversion = $cbhashversion;

        return $this;
    }

    public function getCbhashdate(): ?\DateTimeInterface
    {
        return $this->cbhashdate;
    }

    public function setCbhashdate(?\DateTimeInterface $cbhashdate): static
    {
        $this->cbhashdate = $cbhashdate;

        return $this;
    }

    public function getCbhashorder(): ?int
    {
        return $this->cbhashorder;
    }

    public function setCbhashorder(?int $cbhashorder): static
    {
        $this->cbhashorder = $cbhashorder;

        return $this;
    }
}
