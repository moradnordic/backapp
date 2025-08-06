<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FReglementtRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_REGLEMENTT')]
#[ORM\UniqueConstraint(name: 'IRT_NBJOUR', columns: ['N_Reglement'])]
#[ORM\Index(name: 'FKIA_F_REGLEMENTT_CT_Num', columns: ['CT_Num'])]
#[ORM\Entity(repositoryClass: FReglementtRepository::class)]
class FReglementt
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "RT_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $rtCondition = null;

    #[ORM\Column(name: "RT_NbJour", type: Types::SMALLINT, nullable: true)]
    private ?int $rtNbjour = null;

    #[ORM\Column(name: "RT_JourTb01", type: Types::SMALLINT, nullable: true)]
    private ?int $rtJourtb01 = null;

    #[ORM\Column(name: "RT_JourTb02", type: Types::SMALLINT, nullable: true)]
    private ?int $rtJourtb02 = null;

    #[ORM\Column(name: "RT_JourTb03", type: Types::SMALLINT, nullable: true)]
    private ?int $rtJourtb03 = null;

    #[ORM\Column(name: "RT_JourTb04", type: Types::SMALLINT, nullable: true)]
    private ?int $rtJourtb04 = null;

    #[ORM\Column(name: "RT_JourTb05", type: Types::SMALLINT, nullable: true)]
    private ?int $rtJourtb05 = null;

    #[ORM\Column(name: "RT_JourTb06", type: Types::SMALLINT, nullable: true)]
    private ?int $rtJourtb06 = null;

    #[ORM\Column(name: "RT_TRepart", type: Types::SMALLINT, nullable: true)]
    private ?int $rtTrepart = null;

    #[ORM\Column(name: "RT_VRepart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtVrepart = null;

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

    public function getNReglement(): ?int
    {
        return $this->nReglement;
    }

    public function setNReglement(?int $nReglement): static
    {
        $this->nReglement = $nReglement;

        return $this;
    }

    public function getRtCondition(): ?int
    {
        return $this->rtCondition;
    }

    public function setRtCondition(?int $rtCondition): static
    {
        $this->rtCondition = $rtCondition;

        return $this;
    }

    public function getRtNbjour(): ?int
    {
        return $this->rtNbjour;
    }

    public function setRtNbjour(?int $rtNbjour): static
    {
        $this->rtNbjour = $rtNbjour;

        return $this;
    }

    public function getRtJourtb01(): ?int
    {
        return $this->rtJourtb01;
    }

    public function setRtJourtb01(?int $rtJourtb01): static
    {
        $this->rtJourtb01 = $rtJourtb01;

        return $this;
    }

    public function getRtJourtb02(): ?int
    {
        return $this->rtJourtb02;
    }

    public function setRtJourtb02(?int $rtJourtb02): static
    {
        $this->rtJourtb02 = $rtJourtb02;

        return $this;
    }

    public function getRtJourtb03(): ?int
    {
        return $this->rtJourtb03;
    }

    public function setRtJourtb03(?int $rtJourtb03): static
    {
        $this->rtJourtb03 = $rtJourtb03;

        return $this;
    }

    public function getRtJourtb04(): ?int
    {
        return $this->rtJourtb04;
    }

    public function setRtJourtb04(?int $rtJourtb04): static
    {
        $this->rtJourtb04 = $rtJourtb04;

        return $this;
    }

    public function getRtJourtb05(): ?int
    {
        return $this->rtJourtb05;
    }

    public function setRtJourtb05(?int $rtJourtb05): static
    {
        $this->rtJourtb05 = $rtJourtb05;

        return $this;
    }

    public function getRtJourtb06(): ?int
    {
        return $this->rtJourtb06;
    }

    public function setRtJourtb06(?int $rtJourtb06): static
    {
        $this->rtJourtb06 = $rtJourtb06;

        return $this;
    }

    public function getRtTrepart(): ?int
    {
        return $this->rtTrepart;
    }

    public function setRtTrepart(?int $rtTrepart): static
    {
        $this->rtTrepart = $rtTrepart;

        return $this;
    }

    public function getRtVrepart(): ?string
    {
        return $this->rtVrepart;
    }

    public function setRtVrepart(?string $rtVrepart): static
    {
        $this->rtVrepart = $rtVrepart;

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
