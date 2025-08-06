<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FDrecouvrementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DRECOUVREMENT')]
#[ORM\UniqueConstraint(name: 'IDR_NUM', columns: ['cbDR_Num'])]
#[ORM\Index(name: 'IDR_CTNUM', columns: ['cbDR_Num'])]
#[ORM\Index(name: 'IDR_CONO', columns: ['CO_No'])]
#[ORM\Index(name: 'IDR_CTNO', columns: ['CT_No'])]
#[ORM\Index(name: 'IDR_DATEDEBUT', columns: ['cbDR_Num'])]
#[ORM\Index(name: 'IDR_STATUTNUM', columns: ['cbDR_Num'])]
#[ORM\Index(name: 'IDR_STATUTDATEDEBUT', columns: ['cbDR_Num'])]
#[ORM\Index(name: 'IDR_CTNUMDATEDEBUT', columns: ['cbDR_Num'])]
#[ORM\Index(name: 'IDR_CTNUMSTATUT', columns: ['cbDR_Num'])]
#[ORM\Index(name: 'IDR_CTNUMSTATUTDATEDEBUT', columns: ['cbDR_Num'])]
#[ORM\UniqueConstraint(name: 'UKA_F_DRECOUVREMENT_DR_Num', columns: ['DR_Num'])]
#[ORM\Index(name: 'FKIA_F_DRECOUVREMENT_CT_Num', columns: ['CT_Num'])]
#[ORM\Index(name: 'FKIA_F_DRECOUVREMENT_CO_No', columns: ['cbCO_No'])]
#[ORM\Index(name: 'FKIA_F_DRECOUVREMENT_CT_No', columns: ['cbCT_No'])]
#[ORM\Entity(repositoryClass: FDrecouvrementRepository::class)]
class FDrecouvrement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DR_Num", length: 13)]
    private ?string $drNum = null;

    #[ORM\Column(name: "cbDR_Num", type: Types::BINARY, nullable: true)]
    private $cbdrNum = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "DR_PerteProbable", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $drPerteprobable = null;

    #[ORM\Column(name: "DR_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $drStatut = null;

    #[ORM\Column(name: "DR_Priorite", type: Types::SMALLINT, nullable: true)]
    private ?int $drPriorite = null;

    #[ORM\Column(name: "DR_DateDebut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $drDatedebut = null;

    #[ORM\Column(name: "N_Litige", type: Types::SMALLINT, nullable: true)]
    private ?int $nLitige = null;

    #[ORM\Column(name: "DR_Resume", length: 35, nullable: true)]
    private ?string $drResume = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "CT_No", nullable: true)]
    private ?int $ctNo = null;

    #[ORM\Column(name: "cbCT_No", nullable: true)]
    private ?int $cbctNo = null;

    #[ORM\Column(name: "DR_Commentaire", length: 255, nullable: true)]
    private ?string $drCommentaire = null;

    #[ORM\Column(name: "DR_DateFin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $drDatefin = null;

    #[ORM\Column(name: "N_Resolution", type: Types::SMALLINT, nullable: true)]
    private ?int $nResolution = null;

    #[ORM\Column(name: "DR_Resultat", type: Types::SMALLINT, nullable: true)]
    private ?int $drResultat = null;

    #[ORM\Column(name: "DR_Provision", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $drProvision = null;

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

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getDrPerteprobable(): ?string
    {
        return $this->drPerteprobable;
    }

    public function setDrPerteprobable(?string $drPerteprobable): static
    {
        $this->drPerteprobable = $drPerteprobable;

        return $this;
    }

    public function getDrStatut(): ?int
    {
        return $this->drStatut;
    }

    public function setDrStatut(?int $drStatut): static
    {
        $this->drStatut = $drStatut;

        return $this;
    }

    public function getDrPriorite(): ?int
    {
        return $this->drPriorite;
    }

    public function setDrPriorite(?int $drPriorite): static
    {
        $this->drPriorite = $drPriorite;

        return $this;
    }

    public function getDrDatedebut(): ?\DateTimeInterface
    {
        return $this->drDatedebut;
    }

    public function setDrDatedebut(?\DateTimeInterface $drDatedebut): static
    {
        $this->drDatedebut = $drDatedebut;

        return $this;
    }

    public function getNLitige(): ?int
    {
        return $this->nLitige;
    }

    public function setNLitige(?int $nLitige): static
    {
        $this->nLitige = $nLitige;

        return $this;
    }

    public function getDrResume(): ?string
    {
        return $this->drResume;
    }

    public function setDrResume(?string $drResume): static
    {
        $this->drResume = $drResume;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getCbcoNo(): ?int
    {
        return $this->cbcoNo;
    }

    public function setCbcoNo(?int $cbcoNo): static
    {
        $this->cbcoNo = $cbcoNo;

        return $this;
    }

    public function getCtNo(): ?int
    {
        return $this->ctNo;
    }

    public function setCtNo(?int $ctNo): static
    {
        $this->ctNo = $ctNo;

        return $this;
    }

    public function getCbctNo(): ?int
    {
        return $this->cbctNo;
    }

    public function setCbctNo(?int $cbctNo): static
    {
        $this->cbctNo = $cbctNo;

        return $this;
    }

    public function getDrCommentaire(): ?string
    {
        return $this->drCommentaire;
    }

    public function setDrCommentaire(?string $drCommentaire): static
    {
        $this->drCommentaire = $drCommentaire;

        return $this;
    }

    public function getDrDatefin(): ?\DateTimeInterface
    {
        return $this->drDatefin;
    }

    public function setDrDatefin(?\DateTimeInterface $drDatefin): static
    {
        $this->drDatefin = $drDatefin;

        return $this;
    }

    public function getNResolution(): ?int
    {
        return $this->nResolution;
    }

    public function setNResolution(?int $nResolution): static
    {
        $this->nResolution = $nResolution;

        return $this;
    }

    public function getDrResultat(): ?int
    {
        return $this->drResultat;
    }

    public function setDrResultat(?int $drResultat): static
    {
        $this->drResultat = $drResultat;

        return $this;
    }

    public function getDrProvision(): ?string
    {
        return $this->drProvision;
    }

    public function setDrProvision(?string $drProvision): static
    {
        $this->drProvision = $drProvision;

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
