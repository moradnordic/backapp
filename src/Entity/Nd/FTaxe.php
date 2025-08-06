<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FTaxeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TAXE')]
#[ORM\Index(name: 'ITA_CGNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ITA_INT', columns: ['cbTA_Intitule'])]
#[ORM\UniqueConstraint(name: 'ITA_NO', columns: ['TA_No'])]
#[ORM\UniqueConstraint(name: 'ITA_CODE', columns: ['cbTA_Code'])]
#[ORM\Index(name: 'ITA_REGROUP', columns: ['cbTA_Code'])]
#[ORM\Index(name: 'ITA_SENS', columns: ['cbTA_Code'])]
#[ORM\UniqueConstraint(name: 'UKA_F_TAXE_TA_Code', columns: ['TA_Code'])]
#[ORM\Index(name: 'FKIA_F_TAXE_CG_Num', columns: ['CG_Num'])]
#[ORM\Entity(repositoryClass: FTaxeRepository::class)]
class FTaxe
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "TA_Intitule", length: 35, nullable: true)]
    private ?string $taIntitule = null;

    #[ORM\Column(name: "cbTA_Intitule", type: Types::BINARY, nullable: true)]
    private $cbtaIntitule = null;

    #[ORM\Column(name: "TA_TTaux", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux = null;

    #[ORM\Column(name: "TA_Taux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux = null;

    #[ORM\Column(name: "TA_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $taType = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "TA_No")]
    private ?int $taNo = null;

    #[ORM\Column(name: "TA_Code", length: 5)]
    private ?string $taCode = null;

    #[ORM\Column(name: "cbTA_Code", type: Types::BINARY, nullable: true)]
    private $cbtaCode = null;

    #[ORM\Column(name: "TA_NP", type: Types::SMALLINT, nullable: true)]
    private ?int $taNp = null;

    #[ORM\Column(name: "TA_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $taSens = null;

    #[ORM\Column(name: "TA_Provenance", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance = null;

    #[ORM\Column(name: "TA_Regroup", length: 5, nullable: true)]
    private ?string $taRegroup = null;

    #[ORM\Column(name: "cbTA_Regroup", type: Types::BINARY, nullable: true)]
    private $cbtaRegroup = null;

    #[ORM\Column(name: "TA_Assujet", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taAssujet = null;

    #[ORM\Column(name: "TA_GrilleBase", length: 3, nullable: true)]
    private ?string $taGrillebase = null;

    #[ORM\Column(name: "TA_GrilleTaxe", length: 3, nullable: true)]
    private ?string $taGrilletaxe = null;

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

    #[ORM\Column(name: "TA_EdiCode", length: 3, nullable: true)]
    private ?string $taEdicode = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getTaIntitule(): ?string
    {
        return $this->taIntitule;
    }

    public function setTaIntitule(?string $taIntitule): static
    {
        $this->taIntitule = $taIntitule;

        return $this;
    }

    public function getCbtaIntitule()
    {
        return $this->cbtaIntitule;
    }

    public function setCbtaIntitule($cbtaIntitule): static
    {
        $this->cbtaIntitule = $cbtaIntitule;

        return $this;
    }

    public function getTaTtaux(): ?int
    {
        return $this->taTtaux;
    }

    public function setTaTtaux(?int $taTtaux): static
    {
        $this->taTtaux = $taTtaux;

        return $this;
    }

    public function getTaTaux(): ?string
    {
        return $this->taTaux;
    }

    public function setTaTaux(?string $taTaux): static
    {
        $this->taTaux = $taTaux;

        return $this;
    }

    public function getTaType(): ?int
    {
        return $this->taType;
    }

    public function setTaType(?int $taType): static
    {
        $this->taType = $taType;

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

    public function getTaNo(): ?int
    {
        return $this->taNo;
    }

    public function setTaNo(int $taNo): static
    {
        $this->taNo = $taNo;

        return $this;
    }

    public function getTaCode(): ?string
    {
        return $this->taCode;
    }

    public function setTaCode(string $taCode): static
    {
        $this->taCode = $taCode;

        return $this;
    }

    public function getCbtaCode()
    {
        return $this->cbtaCode;
    }

    public function setCbtaCode($cbtaCode): static
    {
        $this->cbtaCode = $cbtaCode;

        return $this;
    }

    public function getTaNp(): ?int
    {
        return $this->taNp;
    }

    public function setTaNp(?int $taNp): static
    {
        $this->taNp = $taNp;

        return $this;
    }

    public function getTaSens(): ?int
    {
        return $this->taSens;
    }

    public function setTaSens(?int $taSens): static
    {
        $this->taSens = $taSens;

        return $this;
    }

    public function getTaProvenance(): ?int
    {
        return $this->taProvenance;
    }

    public function setTaProvenance(?int $taProvenance): static
    {
        $this->taProvenance = $taProvenance;

        return $this;
    }

    public function getTaRegroup(): ?string
    {
        return $this->taRegroup;
    }

    public function setTaRegroup(?string $taRegroup): static
    {
        $this->taRegroup = $taRegroup;

        return $this;
    }

    public function getCbtaRegroup()
    {
        return $this->cbtaRegroup;
    }

    public function setCbtaRegroup($cbtaRegroup): static
    {
        $this->cbtaRegroup = $cbtaRegroup;

        return $this;
    }

    public function getTaAssujet(): ?string
    {
        return $this->taAssujet;
    }

    public function setTaAssujet(?string $taAssujet): static
    {
        $this->taAssujet = $taAssujet;

        return $this;
    }

    public function getTaGrillebase(): ?string
    {
        return $this->taGrillebase;
    }

    public function setTaGrillebase(?string $taGrillebase): static
    {
        $this->taGrillebase = $taGrillebase;

        return $this;
    }

    public function getTaGrilletaxe(): ?string
    {
        return $this->taGrilletaxe;
    }

    public function setTaGrilletaxe(?string $taGrilletaxe): static
    {
        $this->taGrilletaxe = $taGrilletaxe;

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

    public function getTaEdicode(): ?string
    {
        return $this->taEdicode;
    }

    public function setTaEdicode(?string $taEdicode): static
    {
        $this->taEdicode = $taEdicode;

        return $this;
    }
}
