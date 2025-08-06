<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEcriturerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ECRITURER')]
#[ORM\Index(name: 'IER_DATE', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'IER_CGNUM', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'IER_CANUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'IER_JANUM', columns: ['cbER_Piece'])]
#[ORM\UniqueConstraint(name: 'IER_ERNO', columns: ['ER_No'])]
#[ORM\Index(name: 'FKIA_F_ECRITURER_CG_Num', columns: ['CG_Num'])]
#[ORM\Index(name: 'FKIA_F_ECRITURER_CA_Num', columns: ['CA_Num'])]
#[ORM\Entity(repositoryClass: FEcriturerRepository::class)]
class FEcriturer
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "ER_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $erDate = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "ER_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $erSens = null;

    #[ORM\Column(name: "ER_MontantA", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $erMontanta = null;

    #[ORM\Column(name: "ER_QuantiteA", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $erQuantitea = null;

    #[ORM\Column(name: "ER_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $erType = null;

    #[ORM\Column(name: "JA_Num", length: 7)]
    private ?string $jaNum = null;

    #[ORM\Column(name: "cbJA_Num", type: Types::BINARY, nullable: true)]
    private $cbjaNum = null;

    #[ORM\Column(name: "ER_Piece", length: 13, nullable: true)]
    private ?string $erPiece = null;

    #[ORM\Column(name: "cbER_Piece", type: Types::BINARY, nullable: true)]
    private $cberPiece = null;

    #[ORM\Column(name: "ER_RefPiece", length: 17, nullable: true)]
    private ?string $erRefpiece = null;

    #[ORM\Column(name: "ER_Intitule", length: 35, nullable: true)]
    private ?string $erIntitule = null;

    #[ORM\Column(name: "ER_No", nullable: true)]
    private ?int $erNo = null;

    #[ORM\Column(name: "ER_Norme", type: Types::SMALLINT, nullable: true)]
    private ?int $erNorme = null;

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

    public function getErDate(): ?\DateTimeInterface
    {
        return $this->erDate;
    }

    public function setErDate(?\DateTimeInterface $erDate): static
    {
        $this->erDate = $erDate;

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

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getCbcaNum()
    {
        return $this->cbcaNum;
    }

    public function setCbcaNum($cbcaNum): static
    {
        $this->cbcaNum = $cbcaNum;

        return $this;
    }

    public function getErSens(): ?int
    {
        return $this->erSens;
    }

    public function setErSens(?int $erSens): static
    {
        $this->erSens = $erSens;

        return $this;
    }

    public function getErMontanta(): ?string
    {
        return $this->erMontanta;
    }

    public function setErMontanta(?string $erMontanta): static
    {
        $this->erMontanta = $erMontanta;

        return $this;
    }

    public function getErQuantitea(): ?string
    {
        return $this->erQuantitea;
    }

    public function setErQuantitea(?string $erQuantitea): static
    {
        $this->erQuantitea = $erQuantitea;

        return $this;
    }

    public function getErType(): ?int
    {
        return $this->erType;
    }

    public function setErType(?int $erType): static
    {
        $this->erType = $erType;

        return $this;
    }

    public function getJaNum(): ?string
    {
        return $this->jaNum;
    }

    public function setJaNum(string $jaNum): static
    {
        $this->jaNum = $jaNum;

        return $this;
    }

    public function getCbjaNum()
    {
        return $this->cbjaNum;
    }

    public function setCbjaNum($cbjaNum): static
    {
        $this->cbjaNum = $cbjaNum;

        return $this;
    }

    public function getErPiece(): ?string
    {
        return $this->erPiece;
    }

    public function setErPiece(?string $erPiece): static
    {
        $this->erPiece = $erPiece;

        return $this;
    }

    public function getCberPiece()
    {
        return $this->cberPiece;
    }

    public function setCberPiece($cberPiece): static
    {
        $this->cberPiece = $cberPiece;

        return $this;
    }

    public function getErRefpiece(): ?string
    {
        return $this->erRefpiece;
    }

    public function setErRefpiece(?string $erRefpiece): static
    {
        $this->erRefpiece = $erRefpiece;

        return $this;
    }

    public function getErIntitule(): ?string
    {
        return $this->erIntitule;
    }

    public function setErIntitule(?string $erIntitule): static
    {
        $this->erIntitule = $erIntitule;

        return $this;
    }

    public function getErNo(): ?int
    {
        return $this->erNo;
    }

    public function setErNo(?int $erNo): static
    {
        $this->erNo = $erNo;

        return $this;
    }

    public function getErNorme(): ?int
    {
        return $this->erNorme;
    }

    public function setErNorme(?int $erNorme): static
    {
        $this->erNorme = $erNorme;

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
