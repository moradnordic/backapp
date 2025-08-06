<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEcriturefRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ECRITUREF')]
#[ORM\UniqueConstraint(name: 'IEF_EFNO', columns: ['EF_No'])]
#[ORM\Index(name: 'IEF_CGNUM', columns: ['cbEF_Piece'])]
#[ORM\Index(name: 'FKIA_F_ECRITUREF_CG_Num', columns: ['CG_Num'])]
#[ORM\Entity(repositoryClass: FEcriturefRepository::class)]
class FEcrituref
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EF_No", nullable: true)]
    private ?int $efNo = null;

    #[ORM\Column(name: "EF_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $efDate = null;

    #[ORM\Column(name: "EF_Piece", length: 13, nullable: true)]
    private ?string $efPiece = null;

    #[ORM\Column(name: "cbEF_Piece", type: Types::BINARY, nullable: true)]
    private $cbefPiece = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "EF_Intitule", length: 35, nullable: true)]
    private ?string $efIntitule = null;

    #[ORM\Column(name: "EF_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $efSens = null;

    #[ORM\Column(name: "EF_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $efMontant = null;

    #[ORM\Column(name: "EF_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $efType = null;

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

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getEfNo(): ?int
    {
        return $this->efNo;
    }

    public function setEfNo(?int $efNo): static
    {
        $this->efNo = $efNo;

        return $this;
    }

    public function getEfDate(): ?\DateTimeInterface
    {
        return $this->efDate;
    }

    public function setEfDate(?\DateTimeInterface $efDate): static
    {
        $this->efDate = $efDate;

        return $this;
    }

    public function getEfPiece(): ?string
    {
        return $this->efPiece;
    }

    public function setEfPiece(?string $efPiece): static
    {
        $this->efPiece = $efPiece;

        return $this;
    }

    public function getCbefPiece()
    {
        return $this->cbefPiece;
    }

    public function setCbefPiece($cbefPiece): static
    {
        $this->cbefPiece = $cbefPiece;

        return $this;
    }

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(string $cgNum): static
    {
        $this->cgNum = $cgNum;

        return $this;
    }

    public function getCbcgNum()
    {
        return $this->cbcgNum;
    }

    public function setCbcgNum($cbcgNum): static
    {
        $this->cbcgNum = $cbcgNum;

        return $this;
    }

    public function getEfIntitule(): ?string
    {
        return $this->efIntitule;
    }

    public function setEfIntitule(?string $efIntitule): static
    {
        $this->efIntitule = $efIntitule;

        return $this;
    }

    public function getEfSens(): ?int
    {
        return $this->efSens;
    }

    public function setEfSens(?int $efSens): static
    {
        $this->efSens = $efSens;

        return $this;
    }

    public function getEfMontant(): ?string
    {
        return $this->efMontant;
    }

    public function setEfMontant(?string $efMontant): static
    {
        $this->efMontant = $efMontant;

        return $this;
    }

    public function getEfType(): ?int
    {
        return $this->efType;
    }

    public function setEfType(?int $efType): static
    {
        $this->efType = $efType;

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
}
