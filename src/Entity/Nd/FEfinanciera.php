<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEfinancieraRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EFINANCIERA')]
#[ORM\UniqueConstraint(name: 'IFA_LIGNE', columns: ['FA_Ligne'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIERA_EF_No', columns: ['EF_No'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIERA_CA_Num', columns: ['CA_Num'])]
#[ORM\Entity(repositoryClass: FEfinancieraRepository::class)]
class FEfinanciera
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EF_No")]
    private ?int $efNo = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "FA_Ligne", type: Types::SMALLINT, nullable: true)]
    private ?int $faLigne = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "FA_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faMontant = null;

    #[ORM\Column(name: "FA_Quantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faQuantite = null;

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

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getFaLigne(): ?int
    {
        return $this->faLigne;
    }

    public function setFaLigne(?int $faLigne): static
    {
        $this->faLigne = $faLigne;

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

    public function getFaMontant(): ?string
    {
        return $this->faMontant;
    }

    public function setFaMontant(?string $faMontant): static
    {
        $this->faMontant = $faMontant;

        return $this;
    }

    public function getFaQuantite(): ?string
    {
        return $this->faQuantite;
    }

    public function setFaQuantite(?string $faQuantite): static
    {
        $this->faQuantite = $faQuantite;

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
