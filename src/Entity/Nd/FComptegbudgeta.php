<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FComptegbudgetaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTEGBUDGETA')]
#[ORM\UniqueConstraint(name: 'ICG_BUDGETACGNUM', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICG_BUDGETACANUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEGBUDGETA_BUDGET', columns: ['CG_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEGBUDGETA_CA_Num', columns: ['CA_Num'])]
#[ORM\Entity(repositoryClass: FComptegbudgetaRepository::class)]
class FComptegbudgeta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

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

    #[ORM\Column(name: "CG_BATRepart01", type: Types::SMALLINT, nullable: true)]
    private ?int $cgBatrepart01 = null;

    #[ORM\Column(name: "CG_BATRepart02", type: Types::SMALLINT, nullable: true)]
    private ?int $cgBatrepart02 = null;

    #[ORM\Column(name: "CG_BATRepart03", type: Types::SMALLINT, nullable: true)]
    private ?int $cgBatrepart03 = null;

    #[ORM\Column(name: "CG_BATRepart04", type: Types::SMALLINT, nullable: true)]
    private ?int $cgBatrepart04 = null;

    #[ORM\Column(name: "CG_BATRepart05", type: Types::SMALLINT, nullable: true)]
    private ?int $cgBatrepart05 = null;

    #[ORM\Column(name: "CG_BATRepart06", type: Types::SMALLINT, nullable: true)]
    private ?int $cgBatrepart06 = null;

    #[ORM\Column(name: "CG_BAVRepart01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepart01 = null;

    #[ORM\Column(name: "CG_BAVRepart02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepart02 = null;

    #[ORM\Column(name: "CG_BAVRepart03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepart03 = null;

    #[ORM\Column(name: "CG_BAVRepart04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepart04 = null;

    #[ORM\Column(name: "CG_BAVRepart05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepart05 = null;

    #[ORM\Column(name: "CG_BAVRepart06", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepart06 = null;

    #[ORM\Column(name: "CG_BAVRepartQ01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepartq01 = null;

    #[ORM\Column(name: "CG_BAVRepartQ02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepartq02 = null;

    #[ORM\Column(name: "CG_BAVRepartQ03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepartq03 = null;

    #[ORM\Column(name: "CG_BAVRepartQ04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepartq04 = null;

    #[ORM\Column(name: "CG_BAVRepartQ05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepartq05 = null;

    #[ORM\Column(name: "CG_BAVRepartQ06", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBavrepartq06 = null;

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

    public function getCgBatrepart01(): ?int
    {
        return $this->cgBatrepart01;
    }

    public function setCgBatrepart01(?int $cgBatrepart01): static
    {
        $this->cgBatrepart01 = $cgBatrepart01;

        return $this;
    }

    public function getCgBatrepart02(): ?int
    {
        return $this->cgBatrepart02;
    }

    public function setCgBatrepart02(?int $cgBatrepart02): static
    {
        $this->cgBatrepart02 = $cgBatrepart02;

        return $this;
    }

    public function getCgBatrepart03(): ?int
    {
        return $this->cgBatrepart03;
    }

    public function setCgBatrepart03(?int $cgBatrepart03): static
    {
        $this->cgBatrepart03 = $cgBatrepart03;

        return $this;
    }

    public function getCgBatrepart04(): ?int
    {
        return $this->cgBatrepart04;
    }

    public function setCgBatrepart04(?int $cgBatrepart04): static
    {
        $this->cgBatrepart04 = $cgBatrepart04;

        return $this;
    }

    public function getCgBatrepart05(): ?int
    {
        return $this->cgBatrepart05;
    }

    public function setCgBatrepart05(?int $cgBatrepart05): static
    {
        $this->cgBatrepart05 = $cgBatrepart05;

        return $this;
    }

    public function getCgBatrepart06(): ?int
    {
        return $this->cgBatrepart06;
    }

    public function setCgBatrepart06(?int $cgBatrepart06): static
    {
        $this->cgBatrepart06 = $cgBatrepart06;

        return $this;
    }

    public function getCgBavrepart01(): ?string
    {
        return $this->cgBavrepart01;
    }

    public function setCgBavrepart01(?string $cgBavrepart01): static
    {
        $this->cgBavrepart01 = $cgBavrepart01;

        return $this;
    }

    public function getCgBavrepart02(): ?string
    {
        return $this->cgBavrepart02;
    }

    public function setCgBavrepart02(?string $cgBavrepart02): static
    {
        $this->cgBavrepart02 = $cgBavrepart02;

        return $this;
    }

    public function getCgBavrepart03(): ?string
    {
        return $this->cgBavrepart03;
    }

    public function setCgBavrepart03(?string $cgBavrepart03): static
    {
        $this->cgBavrepart03 = $cgBavrepart03;

        return $this;
    }

    public function getCgBavrepart04(): ?string
    {
        return $this->cgBavrepart04;
    }

    public function setCgBavrepart04(?string $cgBavrepart04): static
    {
        $this->cgBavrepart04 = $cgBavrepart04;

        return $this;
    }

    public function getCgBavrepart05(): ?string
    {
        return $this->cgBavrepart05;
    }

    public function setCgBavrepart05(?string $cgBavrepart05): static
    {
        $this->cgBavrepart05 = $cgBavrepart05;

        return $this;
    }

    public function getCgBavrepart06(): ?string
    {
        return $this->cgBavrepart06;
    }

    public function setCgBavrepart06(?string $cgBavrepart06): static
    {
        $this->cgBavrepart06 = $cgBavrepart06;

        return $this;
    }

    public function getCgBavrepartq01(): ?string
    {
        return $this->cgBavrepartq01;
    }

    public function setCgBavrepartq01(?string $cgBavrepartq01): static
    {
        $this->cgBavrepartq01 = $cgBavrepartq01;

        return $this;
    }

    public function getCgBavrepartq02(): ?string
    {
        return $this->cgBavrepartq02;
    }

    public function setCgBavrepartq02(?string $cgBavrepartq02): static
    {
        $this->cgBavrepartq02 = $cgBavrepartq02;

        return $this;
    }

    public function getCgBavrepartq03(): ?string
    {
        return $this->cgBavrepartq03;
    }

    public function setCgBavrepartq03(?string $cgBavrepartq03): static
    {
        $this->cgBavrepartq03 = $cgBavrepartq03;

        return $this;
    }

    public function getCgBavrepartq04(): ?string
    {
        return $this->cgBavrepartq04;
    }

    public function setCgBavrepartq04(?string $cgBavrepartq04): static
    {
        $this->cgBavrepartq04 = $cgBavrepartq04;

        return $this;
    }

    public function getCgBavrepartq05(): ?string
    {
        return $this->cgBavrepartq05;
    }

    public function setCgBavrepartq05(?string $cgBavrepartq05): static
    {
        $this->cgBavrepartq05 = $cgBavrepartq05;

        return $this;
    }

    public function getCgBavrepartq06(): ?string
    {
        return $this->cgBavrepartq06;
    }

    public function setCgBavrepartq06(?string $cgBavrepartq06): static
    {
        $this->cgBavrepartq06 = $cgBavrepartq06;

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
