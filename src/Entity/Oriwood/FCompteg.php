<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FComptegRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTEG')]
#[ORM\UniqueConstraint(name: 'ICG_NUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICG_CLASS', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICG_TYPE', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICG_RACC', columns: ['cbCG_Raccourci'])]
#[ORM\Index(name: 'ICG_TYPECLASS', columns: ['cbCG_Classement'])]
#[ORM\Index(name: 'ICG_CRNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICG_TACODE', columns: ['cbTA_Code'])]
#[ORM\Index(name: 'ICG_SOMNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICG_SOMCLASS', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICG_SOMTYPE', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICG_SOMTYPECLASS', columns: ['cbCG_Classement'])]
#[ORM\UniqueConstraint(name: 'UKA_F_COMPTEG_CG_Num', columns: ['CG_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEG_TA_Code', columns: ['TA_Code'])]
#[ORM\Index(name: 'FKIA_F_COMPTEG_CR_Num', columns: ['CR_Num'])]
#[ORM\Entity(repositoryClass: FComptegRepository::class)]
class FCompteg
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "CG_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $cgType = null;

    #[ORM\Column(name: "CG_Intitule", length: 35, nullable: true)]
    private ?string $cgIntitule = null;

    #[ORM\Column(name: "CG_Classement", length: 17, nullable: true)]
    private ?string $cgClassement = null;

    #[ORM\Column(name: "cbCG_Classement", type: Types::BINARY, nullable: true)]
    private $cbcgClassement = null;

    #[ORM\Column(name: "N_Nature", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature = null;

    #[ORM\Column(name: "CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $cgReport = null;

    #[ORM\Column(name: "CR_Num", length: 13, nullable: true)]
    private ?string $crNum = null;

    #[ORM\Column(name: "cbCR_Num", type: Types::BINARY, nullable: true)]
    private $cbcrNum = null;

    #[ORM\Column(name: "CG_Raccourci", length: 7, nullable: true)]
    private ?string $cgRaccourci = null;

    #[ORM\Column(name: "cbCG_Raccourci", type: Types::BINARY, nullable: true)]
    private $cbcgRaccourci = null;

    #[ORM\Column(name: "CG_Saut", type: Types::SMALLINT, nullable: true)]
    private ?int $cgSaut = null;

    #[ORM\Column(name: "CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $cgRegroup = null;

    #[ORM\Column(name: "CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $cgAnalytique = null;

    #[ORM\Column(name: "CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $cgEcheance = null;

    #[ORM\Column(name: "CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $cgQuantite = null;

    #[ORM\Column(name: "CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $cgLettrage = null;

    #[ORM\Column(name: "CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $cgTiers = null;

    #[ORM\Column(name: "CG_DateCreate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cgDatecreate = null;

    #[ORM\Column(name: "CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $cgDevise = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "TA_Code", length: 5, nullable: true)]
    private ?string $taCode = null;

    #[ORM\Column(name: "cbTA_Code", type: Types::BINARY, nullable: true)]
    private $cbtaCode = null;

    #[ORM\Column(name: "CG_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $cgSommeil = null;

    #[ORM\Column(name: "CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $cgReportanal = null;

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

    public function getCgType(): ?int
    {
        return $this->cgType;
    }

    public function setCgType(?int $cgType): static
    {
        $this->cgType = $cgType;

        return $this;
    }

    public function getCgIntitule(): ?string
    {
        return $this->cgIntitule;
    }

    public function setCgIntitule(?string $cgIntitule): static
    {
        $this->cgIntitule = $cgIntitule;

        return $this;
    }

    public function getCgClassement(): ?string
    {
        return $this->cgClassement;
    }

    public function setCgClassement(?string $cgClassement): static
    {
        $this->cgClassement = $cgClassement;

        return $this;
    }

    public function getCbcgClassement()
    {
        return $this->cbcgClassement;
    }

    public function setCbcgClassement($cbcgClassement): static
    {
        $this->cbcgClassement = $cbcgClassement;

        return $this;
    }

    public function getNNature(): ?int
    {
        return $this->nNature;
    }

    public function setNNature(?int $nNature): static
    {
        $this->nNature = $nNature;

        return $this;
    }

    public function getCgReport(): ?int
    {
        return $this->cgReport;
    }

    public function setCgReport(?int $cgReport): static
    {
        $this->cgReport = $cgReport;

        return $this;
    }

    public function getCrNum(): ?string
    {
        return $this->crNum;
    }

    public function setCrNum(?string $crNum): static
    {
        $this->crNum = $crNum;

        return $this;
    }

    public function getCbcrNum()
    {
        return $this->cbcrNum;
    }

    public function setCbcrNum($cbcrNum): static
    {
        $this->cbcrNum = $cbcrNum;

        return $this;
    }

    public function getCgRaccourci(): ?string
    {
        return $this->cgRaccourci;
    }

    public function setCgRaccourci(?string $cgRaccourci): static
    {
        $this->cgRaccourci = $cgRaccourci;

        return $this;
    }

    public function getCbcgRaccourci()
    {
        return $this->cbcgRaccourci;
    }

    public function setCbcgRaccourci($cbcgRaccourci): static
    {
        $this->cbcgRaccourci = $cbcgRaccourci;

        return $this;
    }

    public function getCgSaut(): ?int
    {
        return $this->cgSaut;
    }

    public function setCgSaut(?int $cgSaut): static
    {
        $this->cgSaut = $cgSaut;

        return $this;
    }

    public function getCgRegroup(): ?int
    {
        return $this->cgRegroup;
    }

    public function setCgRegroup(?int $cgRegroup): static
    {
        $this->cgRegroup = $cgRegroup;

        return $this;
    }

    public function getCgAnalytique(): ?int
    {
        return $this->cgAnalytique;
    }

    public function setCgAnalytique(?int $cgAnalytique): static
    {
        $this->cgAnalytique = $cgAnalytique;

        return $this;
    }

    public function getCgEcheance(): ?int
    {
        return $this->cgEcheance;
    }

    public function setCgEcheance(?int $cgEcheance): static
    {
        $this->cgEcheance = $cgEcheance;

        return $this;
    }

    public function getCgQuantite(): ?int
    {
        return $this->cgQuantite;
    }

    public function setCgQuantite(?int $cgQuantite): static
    {
        $this->cgQuantite = $cgQuantite;

        return $this;
    }

    public function getCgLettrage(): ?int
    {
        return $this->cgLettrage;
    }

    public function setCgLettrage(?int $cgLettrage): static
    {
        $this->cgLettrage = $cgLettrage;

        return $this;
    }

    public function getCgTiers(): ?int
    {
        return $this->cgTiers;
    }

    public function setCgTiers(?int $cgTiers): static
    {
        $this->cgTiers = $cgTiers;

        return $this;
    }

    public function getCgDatecreate(): ?\DateTimeInterface
    {
        return $this->cgDatecreate;
    }

    public function setCgDatecreate(?\DateTimeInterface $cgDatecreate): static
    {
        $this->cgDatecreate = $cgDatecreate;

        return $this;
    }

    public function getCgDevise(): ?int
    {
        return $this->cgDevise;
    }

    public function setCgDevise(?int $cgDevise): static
    {
        $this->cgDevise = $cgDevise;

        return $this;
    }

    public function getNDevise(): ?int
    {
        return $this->nDevise;
    }

    public function setNDevise(?int $nDevise): static
    {
        $this->nDevise = $nDevise;

        return $this;
    }

    public function getTaCode(): ?string
    {
        return $this->taCode;
    }

    public function setTaCode(?string $taCode): static
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

    public function getCgSommeil(): ?int
    {
        return $this->cgSommeil;
    }

    public function setCgSommeil(?int $cgSommeil): static
    {
        $this->cgSommeil = $cgSommeil;

        return $this;
    }

    public function getCgReportanal(): ?int
    {
        return $this->cgReportanal;
    }

    public function setCgReportanal(?int $cgReportanal): static
    {
        $this->cgReportanal = $cgReportanal;

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
