<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDrecouvrementecRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DRECOUVREMENTEC')]
#[ORM\Index(name: 'IDE_DRNUM', columns: ['EC_No'])]
#[ORM\UniqueConstraint(name: 'IDE_ECNO', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_DRECOUVREMENTEC_DR_Num', columns: ['DR_Num'])]
#[ORM\Index(name: 'FKIA_F_DRECOUVREMENTEC_EC_No', columns: ['EC_No'])]
#[ORM\Entity(repositoryClass: FDrecouvrementecRepository::class)]
class FDrecouvrementec
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DR_Num", length: 13)]
    private ?string $drNum = null;

    #[ORM\Column(name: "cbDR_Num", type: Types::BINARY, nullable: true)]
    private $cbdrNum = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

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

    #[ORM\Column(name: "EC_DateTiersDouteux", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecDatetiersdouteux = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDrNum(): ?string
    {
        return $this->drNum;
    }

    public function setDrNum(string $drNum): static
    {
        $this->drNum = $drNum;

        return $this;
    }

    public function getCbdrNum()
    {
        return $this->cbdrNum;
    }

    public function setCbdrNum($cbdrNum): static
    {
        $this->cbdrNum = $cbdrNum;

        return $this;
    }

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

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

    public function getEcDatetiersdouteux(): ?\DateTimeInterface
    {
        return $this->ecDatetiersdouteux;
    }

    public function setEcDatetiersdouteux(?\DateTimeInterface $ecDatetiersdouteux): static
    {
        $this->ecDatetiersdouteux = $ecDatetiersdouteux;

        return $this;
    }
}
