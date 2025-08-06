<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCompteabudgetgRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTEABUDGETG')]
#[ORM\UniqueConstraint(name: 'ICA_BUDGETGCANUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'ICA_BUDGETGCGNUM', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEABUDGETG_BUDGET', columns: ['CA_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEABUDGETG_CG_Num', columns: ['CG_Num'])]
#[ORM\Entity(repositoryClass: FCompteabudgetgRepository::class)]
class FCompteabudgetg
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "CA_BGTRepart01", type: Types::SMALLINT, nullable: true)]
    private ?int $caBgtrepart01 = null;

    #[ORM\Column(name: "CA_BGTRepart02", type: Types::SMALLINT, nullable: true)]
    private ?int $caBgtrepart02 = null;

    #[ORM\Column(name: "CA_BGTRepart03", type: Types::SMALLINT, nullable: true)]
    private ?int $caBgtrepart03 = null;

    #[ORM\Column(name: "CA_BGTRepart04", type: Types::SMALLINT, nullable: true)]
    private ?int $caBgtrepart04 = null;

    #[ORM\Column(name: "CA_BGTRepart05", type: Types::SMALLINT, nullable: true)]
    private ?int $caBgtrepart05 = null;

    #[ORM\Column(name: "CA_BGTRepart06", type: Types::SMALLINT, nullable: true)]
    private ?int $caBgtrepart06 = null;

    #[ORM\Column(name: "CA_BGVRepart01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepart01 = null;

    #[ORM\Column(name: "CA_BGVRepart02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepart02 = null;

    #[ORM\Column(name: "CA_BGVRepart03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepart03 = null;

    #[ORM\Column(name: "CA_BGVRepart04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepart04 = null;

    #[ORM\Column(name: "CA_BGVRepart05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepart05 = null;

    #[ORM\Column(name: "CA_BGVRepart06", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepart06 = null;

    #[ORM\Column(name: "CA_BGVRepartQ01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepartq01 = null;

    #[ORM\Column(name: "CA_BGVRepartQ02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepartq02 = null;

    #[ORM\Column(name: "CA_BGVRepartQ03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepartq03 = null;

    #[ORM\Column(name: "CA_BGVRepartQ04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepartq04 = null;

    #[ORM\Column(name: "CA_BGVRepartQ05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepartq05 = null;

    #[ORM\Column(name: "CA_BGVRepartQ06", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBgvrepartq06 = null;

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

    public function getCaBgtrepart01(): ?int
    {
        return $this->caBgtrepart01;
    }

    public function setCaBgtrepart01(?int $caBgtrepart01): static
    {
        $this->caBgtrepart01 = $caBgtrepart01;

        return $this;
    }

    public function getCaBgtrepart02(): ?int
    {
        return $this->caBgtrepart02;
    }

    public function setCaBgtrepart02(?int $caBgtrepart02): static
    {
        $this->caBgtrepart02 = $caBgtrepart02;

        return $this;
    }

    public function getCaBgtrepart03(): ?int
    {
        return $this->caBgtrepart03;
    }

    public function setCaBgtrepart03(?int $caBgtrepart03): static
    {
        $this->caBgtrepart03 = $caBgtrepart03;

        return $this;
    }

    public function getCaBgtrepart04(): ?int
    {
        return $this->caBgtrepart04;
    }

    public function setCaBgtrepart04(?int $caBgtrepart04): static
    {
        $this->caBgtrepart04 = $caBgtrepart04;

        return $this;
    }

    public function getCaBgtrepart05(): ?int
    {
        return $this->caBgtrepart05;
    }

    public function setCaBgtrepart05(?int $caBgtrepart05): static
    {
        $this->caBgtrepart05 = $caBgtrepart05;

        return $this;
    }

    public function getCaBgtrepart06(): ?int
    {
        return $this->caBgtrepart06;
    }

    public function setCaBgtrepart06(?int $caBgtrepart06): static
    {
        $this->caBgtrepart06 = $caBgtrepart06;

        return $this;
    }

    public function getCaBgvrepart01(): ?string
    {
        return $this->caBgvrepart01;
    }

    public function setCaBgvrepart01(?string $caBgvrepart01): static
    {
        $this->caBgvrepart01 = $caBgvrepart01;

        return $this;
    }

    public function getCaBgvrepart02(): ?string
    {
        return $this->caBgvrepart02;
    }

    public function setCaBgvrepart02(?string $caBgvrepart02): static
    {
        $this->caBgvrepart02 = $caBgvrepart02;

        return $this;
    }

    public function getCaBgvrepart03(): ?string
    {
        return $this->caBgvrepart03;
    }

    public function setCaBgvrepart03(?string $caBgvrepart03): static
    {
        $this->caBgvrepart03 = $caBgvrepart03;

        return $this;
    }

    public function getCaBgvrepart04(): ?string
    {
        return $this->caBgvrepart04;
    }

    public function setCaBgvrepart04(?string $caBgvrepart04): static
    {
        $this->caBgvrepart04 = $caBgvrepart04;

        return $this;
    }

    public function getCaBgvrepart05(): ?string
    {
        return $this->caBgvrepart05;
    }

    public function setCaBgvrepart05(?string $caBgvrepart05): static
    {
        $this->caBgvrepart05 = $caBgvrepart05;

        return $this;
    }

    public function getCaBgvrepart06(): ?string
    {
        return $this->caBgvrepart06;
    }

    public function setCaBgvrepart06(?string $caBgvrepart06): static
    {
        $this->caBgvrepart06 = $caBgvrepart06;

        return $this;
    }

    public function getCaBgvrepartq01(): ?string
    {
        return $this->caBgvrepartq01;
    }

    public function setCaBgvrepartq01(?string $caBgvrepartq01): static
    {
        $this->caBgvrepartq01 = $caBgvrepartq01;

        return $this;
    }

    public function getCaBgvrepartq02(): ?string
    {
        return $this->caBgvrepartq02;
    }

    public function setCaBgvrepartq02(?string $caBgvrepartq02): static
    {
        $this->caBgvrepartq02 = $caBgvrepartq02;

        return $this;
    }

    public function getCaBgvrepartq03(): ?string
    {
        return $this->caBgvrepartq03;
    }

    public function setCaBgvrepartq03(?string $caBgvrepartq03): static
    {
        $this->caBgvrepartq03 = $caBgvrepartq03;

        return $this;
    }

    public function getCaBgvrepartq04(): ?string
    {
        return $this->caBgvrepartq04;
    }

    public function setCaBgvrepartq04(?string $caBgvrepartq04): static
    {
        $this->caBgvrepartq04 = $caBgvrepartq04;

        return $this;
    }

    public function getCaBgvrepartq05(): ?string
    {
        return $this->caBgvrepartq05;
    }

    public function setCaBgvrepartq05(?string $caBgvrepartq05): static
    {
        $this->caBgvrepartq05 = $caBgvrepartq05;

        return $this;
    }

    public function getCaBgvrepartq06(): ?string
    {
        return $this->caBgvrepartq06;
    }

    public function setCaBgvrepartq06(?string $caBgvrepartq06): static
    {
        $this->caBgvrepartq06 = $caBgvrepartq06;

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
