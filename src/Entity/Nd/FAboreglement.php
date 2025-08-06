<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FAboreglementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ABOREGLEMENT')]
#[ORM\UniqueConstraint(name: 'IRA_NBJOUR', columns: ['N_Reglement'])]
#[ORM\Index(name: 'FKIA_F_ABOREGLEMENT_AB_No', columns: ['AB_No'])]
#[ORM\Entity(repositoryClass: FAboreglementRepository::class)]
class FAboreglement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AB_No")]
    private ?int $abNo = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "RA_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $raCondition = null;

    #[ORM\Column(name: "RA_NbJour", type: Types::SMALLINT, nullable: true)]
    private ?int $raNbjour = null;

    #[ORM\Column(name: "RA_JourTb01", type: Types::SMALLINT, nullable: true)]
    private ?int $raJourtb01 = null;

    #[ORM\Column(name: "RA_JourTb02", type: Types::SMALLINT, nullable: true)]
    private ?int $raJourtb02 = null;

    #[ORM\Column(name: "RA_JourTb03", type: Types::SMALLINT, nullable: true)]
    private ?int $raJourtb03 = null;

    #[ORM\Column(name: "RA_JourTb04", type: Types::SMALLINT, nullable: true)]
    private ?int $raJourtb04 = null;

    #[ORM\Column(name: "RA_JourTb05", type: Types::SMALLINT, nullable: true)]
    private ?int $raJourtb05 = null;

    #[ORM\Column(name: "RA_JourTb06", type: Types::SMALLINT, nullable: true)]
    private ?int $raJourtb06 = null;

    #[ORM\Column(name: "RA_TRepart", type: Types::SMALLINT, nullable: true)]
    private ?int $raTrepart = null;

    #[ORM\Column(name: "RA_VRepart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $raVrepart = null;

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

    public function getAbNo(): ?int
    {
        return $this->abNo;
    }

    public function setAbNo(int $abNo): static
    {
        $this->abNo = $abNo;

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

    public function getRaCondition(): ?int
    {
        return $this->raCondition;
    }

    public function setRaCondition(?int $raCondition): static
    {
        $this->raCondition = $raCondition;

        return $this;
    }

    public function getRaNbjour(): ?int
    {
        return $this->raNbjour;
    }

    public function setRaNbjour(?int $raNbjour): static
    {
        $this->raNbjour = $raNbjour;

        return $this;
    }

    public function getRaJourtb01(): ?int
    {
        return $this->raJourtb01;
    }

    public function setRaJourtb01(?int $raJourtb01): static
    {
        $this->raJourtb01 = $raJourtb01;

        return $this;
    }

    public function getRaJourtb02(): ?int
    {
        return $this->raJourtb02;
    }

    public function setRaJourtb02(?int $raJourtb02): static
    {
        $this->raJourtb02 = $raJourtb02;

        return $this;
    }

    public function getRaJourtb03(): ?int
    {
        return $this->raJourtb03;
    }

    public function setRaJourtb03(?int $raJourtb03): static
    {
        $this->raJourtb03 = $raJourtb03;

        return $this;
    }

    public function getRaJourtb04(): ?int
    {
        return $this->raJourtb04;
    }

    public function setRaJourtb04(?int $raJourtb04): static
    {
        $this->raJourtb04 = $raJourtb04;

        return $this;
    }

    public function getRaJourtb05(): ?int
    {
        return $this->raJourtb05;
    }

    public function setRaJourtb05(?int $raJourtb05): static
    {
        $this->raJourtb05 = $raJourtb05;

        return $this;
    }

    public function getRaJourtb06(): ?int
    {
        return $this->raJourtb06;
    }

    public function setRaJourtb06(?int $raJourtb06): static
    {
        $this->raJourtb06 = $raJourtb06;

        return $this;
    }

    public function getRaTrepart(): ?int
    {
        return $this->raTrepart;
    }

    public function setRaTrepart(?int $raTrepart): static
    {
        $this->raTrepart = $raTrepart;

        return $this;
    }

    public function getRaVrepart(): ?string
    {
        return $this->raVrepart;
    }

    public function setRaVrepart(?string $raVrepart): static
    {
        $this->raVrepart = $raVrepart;

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
