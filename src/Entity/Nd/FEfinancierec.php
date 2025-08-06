<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEfinancierecRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EFINANCIEREC')]
#[ORM\UniqueConstraint(name: 'IFC_EFNO', columns: ['EC_No'])]
#[ORM\Index(name: 'IFC_ECNO', columns: ['EF_No'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIEREC_EC_No', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIEREC_EF_No', columns: ['EF_No'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIEREC_PI_NoAutre', columns: ['cbPI_NoAutre'])]
#[ORM\Entity(repositoryClass: FEfinancierecRepository::class)]
class FEfinancierec
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EF_No")]
    private ?int $efNo = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "FC_MontantPartiel", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fcMontantpartiel = null;

    #[ORM\Column(name: "FC_MontantRegl", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fcMontantregl = null;

    #[ORM\Column(name: "FC_MontantChange", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fcMontantchange = null;

    #[ORM\Column(name: "FC_MontantEsc", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fcMontantesc = null;

    #[ORM\Column(name: "FC_MontantAutre", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fcMontantautre = null;

    #[ORM\Column(name: "JO_NumAutre", length: 7, nullable: true)]
    private ?string $joNumautre = null;

    #[ORM\Column(name: "PI_NoAutre", nullable: true)]
    private ?int $piNoautre = null;

    #[ORM\Column(name: "cbPI_NoAutre", nullable: true)]
    private ?int $cbpiNoautre = null;

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

    public function getEfNo(): ?int
    {
        return $this->efNo;
    }

    public function setEfNo(int $efNo): static
    {
        $this->efNo = $efNo;

        return $this;
    }

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getFcMontantpartiel(): ?string
    {
        return $this->fcMontantpartiel;
    }

    public function setFcMontantpartiel(?string $fcMontantpartiel): static
    {
        $this->fcMontantpartiel = $fcMontantpartiel;

        return $this;
    }

    public function getFcMontantregl(): ?string
    {
        return $this->fcMontantregl;
    }

    public function setFcMontantregl(?string $fcMontantregl): static
    {
        $this->fcMontantregl = $fcMontantregl;

        return $this;
    }

    public function getFcMontantchange(): ?string
    {
        return $this->fcMontantchange;
    }

    public function setFcMontantchange(?string $fcMontantchange): static
    {
        $this->fcMontantchange = $fcMontantchange;

        return $this;
    }

    public function getFcMontantesc(): ?string
    {
        return $this->fcMontantesc;
    }

    public function setFcMontantesc(?string $fcMontantesc): static
    {
        $this->fcMontantesc = $fcMontantesc;

        return $this;
    }

    public function getFcMontantautre(): ?string
    {
        return $this->fcMontantautre;
    }

    public function setFcMontantautre(?string $fcMontantautre): static
    {
        $this->fcMontantautre = $fcMontantautre;

        return $this;
    }

    public function getJoNumautre(): ?string
    {
        return $this->joNumautre;
    }

    public function setJoNumautre(?string $joNumautre): static
    {
        $this->joNumautre = $joNumautre;

        return $this;
    }

    public function getPiNoautre(): ?int
    {
        return $this->piNoautre;
    }

    public function setPiNoautre(?int $piNoautre): static
    {
        $this->piNoautre = $piNoautre;

        return $this;
    }

    public function getCbpiNoautre(): ?int
    {
        return $this->cbpiNoautre;
    }

    public function setCbpiNoautre(?int $cbpiNoautre): static
    {
        $this->cbpiNoautre = $cbpiNoautre;

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
