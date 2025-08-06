<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEmodelegRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EMODELEG')]
#[ORM\UniqueConstraint(name: 'IEG_MGNO', columns: ['cbCX_Num'])]
#[ORM\Index(name: 'IEG_CXNUM', columns: ['cbCX_Num'])]
#[ORM\Index(name: 'FKIA_F_EMODELEG_MG_No', columns: ['MG_No'])]
#[ORM\Entity(repositoryClass: FEmodelegRepository::class)]
class FEmodeleg
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "MG_No")]
    private ?int $mgNo = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CX_Num", length: 13, nullable: true)]
    private ?string $cxNum = null;

    #[ORM\Column(name: "cbCX_Num", type: Types::BINARY, nullable: true)]
    private $cbcxNum = null;

    #[ORM\Column(name: "EG_TRepart", type: Types::SMALLINT, nullable: true)]
    private ?int $egTrepart = null;

    #[ORM\Column(name: "EG_VRepart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $egVrepart = null;

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

    public function getMgNo(): ?int
    {
        return $this->mgNo;
    }

    public function setMgNo(int $mgNo): static
    {
        $this->mgNo = $mgNo;

        return $this;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(?int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getCxNum(): ?string
    {
        return $this->cxNum;
    }

    public function setCxNum(?string $cxNum): static
    {
        $this->cxNum = $cxNum;

        return $this;
    }

    public function getCbcxNum()
    {
        return $this->cbcxNum;
    }

    public function setCbcxNum($cbcxNum): static
    {
        $this->cbcxNum = $cbcxNum;

        return $this;
    }

    public function getEgTrepart(): ?int
    {
        return $this->egTrepart;
    }

    public function setEgTrepart(?int $egTrepart): static
    {
        $this->egTrepart = $egTrepart;

        return $this;
    }

    public function getEgVrepart(): ?string
    {
        return $this->egVrepart;
    }

    public function setEgVrepart(?string $egVrepart): static
    {
        $this->egVrepart = $egVrepart;

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
