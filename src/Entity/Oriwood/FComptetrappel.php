<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FComptetrappelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTETRAPPEL')]
#[ORM\Index(name: 'ICR_DATE', columns: ['CR_Date'])]
#[ORM\Index(name: 'FKIA_F_COMPTETRAPPEL_CT_Num', columns: ['CT_Num'])]
#[ORM\Entity(repositoryClass: FComptetrappelRepository::class)]
class FComptetrappel
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "CR_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $crDate = null;

    #[ORM\Column(name: "CR_Trait", type: Types::SMALLINT, nullable: true)]
    private ?int $crTrait = null;

    #[ORM\Column(name: "CR_Impayes", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $crImpayes = null;

    #[ORM\Column(name: "CR_Penal", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $crPenal = null;

    #[ORM\Column(name: "CR_Echeance", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $crEcheance = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "CR_Comptabilisation", type: Types::SMALLINT, nullable: true)]
    private ?int $crComptabilisation = null;

    #[ORM\Column(name: "CR_SoldeRelance", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $crSolderelance = null;

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

    public function getCrDate(): ?\DateTimeInterface
    {
        return $this->crDate;
    }

    public function setCrDate(?\DateTimeInterface $crDate): static
    {
        $this->crDate = $crDate;

        return $this;
    }

    public function getCrTrait(): ?int
    {
        return $this->crTrait;
    }

    public function setCrTrait(?int $crTrait): static
    {
        $this->crTrait = $crTrait;

        return $this;
    }

    public function getCrImpayes(): ?string
    {
        return $this->crImpayes;
    }

    public function setCrImpayes(?string $crImpayes): static
    {
        $this->crImpayes = $crImpayes;

        return $this;
    }

    public function getCrPenal(): ?string
    {
        return $this->crPenal;
    }

    public function setCrPenal(?string $crPenal): static
    {
        $this->crPenal = $crPenal;

        return $this;
    }

    public function getCrEcheance(): ?\DateTimeInterface
    {
        return $this->crEcheance;
    }

    public function setCrEcheance(?\DateTimeInterface $crEcheance): static
    {
        $this->crEcheance = $crEcheance;

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

    public function getCrComptabilisation(): ?int
    {
        return $this->crComptabilisation;
    }

    public function setCrComptabilisation(?int $crComptabilisation): static
    {
        $this->crComptabilisation = $crComptabilisation;

        return $this;
    }

    public function getCrSolderelance(): ?string
    {
        return $this->crSolderelance;
    }

    public function setCrSolderelance(?string $crSolderelance): static
    {
        $this->crSolderelance = $crSolderelance;

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
