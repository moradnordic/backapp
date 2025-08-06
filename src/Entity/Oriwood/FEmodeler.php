<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEmodelerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EMODELER')]
#[ORM\UniqueConstraint(name: 'IER_NBJOUR', columns: ['N_Reglement'])]
#[ORM\Index(name: 'FKIA_F_EMODELER_MR_No', columns: ['MR_No'])]
#[ORM\Entity(repositoryClass: FEmodelerRepository::class)]
class FEmodeler
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "MR_No")]
    private ?int $mrNo = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "ER_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $erCondition = null;

    #[ORM\Column(name: "ER_NbJour", type: Types::SMALLINT, nullable: true)]
    private ?int $erNbjour = null;

    #[ORM\Column(name: "ER_JourTb01", type: Types::SMALLINT, nullable: true)]
    private ?int $erJourtb01 = null;

    #[ORM\Column(name: "ER_JourTb02", type: Types::SMALLINT, nullable: true)]
    private ?int $erJourtb02 = null;

    #[ORM\Column(name: "ER_JourTb03", type: Types::SMALLINT, nullable: true)]
    private ?int $erJourtb03 = null;

    #[ORM\Column(name: "ER_JourTb04", type: Types::SMALLINT, nullable: true)]
    private ?int $erJourtb04 = null;

    #[ORM\Column(name: "ER_JourTb05", type: Types::SMALLINT, nullable: true)]
    private ?int $erJourtb05 = null;

    #[ORM\Column(name: "ER_JourTb06", type: Types::SMALLINT, nullable: true)]
    private ?int $erJourtb06 = null;

    #[ORM\Column(name: "ER_TRepart", type: Types::SMALLINT, nullable: true)]
    private ?int $erTrepart = null;

    #[ORM\Column(name: "ER_VRepart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $erVrepart = null;

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

    public function getMrNo(): ?int
    {
        return $this->mrNo;
    }

    public function setMrNo(int $mrNo): static
    {
        $this->mrNo = $mrNo;

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

    public function getErCondition(): ?int
    {
        return $this->erCondition;
    }

    public function setErCondition(?int $erCondition): static
    {
        $this->erCondition = $erCondition;

        return $this;
    }

    public function getErNbjour(): ?int
    {
        return $this->erNbjour;
    }

    public function setErNbjour(?int $erNbjour): static
    {
        $this->erNbjour = $erNbjour;

        return $this;
    }

    public function getErJourtb01(): ?int
    {
        return $this->erJourtb01;
    }

    public function setErJourtb01(?int $erJourtb01): static
    {
        $this->erJourtb01 = $erJourtb01;

        return $this;
    }

    public function getErJourtb02(): ?int
    {
        return $this->erJourtb02;
    }

    public function setErJourtb02(?int $erJourtb02): static
    {
        $this->erJourtb02 = $erJourtb02;

        return $this;
    }

    public function getErJourtb03(): ?int
    {
        return $this->erJourtb03;
    }

    public function setErJourtb03(?int $erJourtb03): static
    {
        $this->erJourtb03 = $erJourtb03;

        return $this;
    }

    public function getErJourtb04(): ?int
    {
        return $this->erJourtb04;
    }

    public function setErJourtb04(?int $erJourtb04): static
    {
        $this->erJourtb04 = $erJourtb04;

        return $this;
    }

    public function getErJourtb05(): ?int
    {
        return $this->erJourtb05;
    }

    public function setErJourtb05(?int $erJourtb05): static
    {
        $this->erJourtb05 = $erJourtb05;

        return $this;
    }

    public function getErJourtb06(): ?int
    {
        return $this->erJourtb06;
    }

    public function setErJourtb06(?int $erJourtb06): static
    {
        $this->erJourtb06 = $erJourtb06;

        return $this;
    }

    public function getErTrepart(): ?int
    {
        return $this->erTrepart;
    }

    public function setErTrepart(?int $erTrepart): static
    {
        $this->erTrepart = $erTrepart;

        return $this;
    }

    public function getErVrepart(): ?string
    {
        return $this->erVrepart;
    }

    public function setErVrepart(?string $erVrepart): static
    {
        $this->erVrepart = $erVrepart;

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
