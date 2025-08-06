<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FTarifremiseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TARIFREMISE')]
#[ORM\UniqueConstraint(name: 'ITR_BORNE', columns: ['TR_BorneSup'])]
#[ORM\Index(name: 'FKIA_F_TARIFREMISE_TF_No', columns: ['TF_No'])]
#[ORM\Entity(repositoryClass: FTarifremiseRepository::class)]
class FTarifremise
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "TF_No")]
    private ?int $tfNo = null;

    #[ORM\Column(name: "TR_BorneSup", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $trBornesup = null;

    #[ORM\Column(name: "TR_Remise01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $trRemise01remValeur = null;

    #[ORM\Column(name: "TR_Remise01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $trRemise01remType = null;

    #[ORM\Column(name: "TR_Remise02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $trRemise02remValeur = null;

    #[ORM\Column(name: "TR_Remise02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $trRemise02remType = null;

    #[ORM\Column(name: "TR_Remise03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $trRemise03remValeur = null;

    #[ORM\Column(name: "TR_Remise03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $trRemise03remType = null;

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

    public function getTfNo(): ?int
    {
        return $this->tfNo;
    }

    public function setTfNo(int $tfNo): static
    {
        $this->tfNo = $tfNo;

        return $this;
    }

    public function getTrBornesup(): ?string
    {
        return $this->trBornesup;
    }

    public function setTrBornesup(?string $trBornesup): static
    {
        $this->trBornesup = $trBornesup;

        return $this;
    }

    public function getTrRemise01remValeur(): ?string
    {
        return $this->trRemise01remValeur;
    }

    public function setTrRemise01remValeur(?string $trRemise01remValeur): static
    {
        $this->trRemise01remValeur = $trRemise01remValeur;

        return $this;
    }

    public function getTrRemise01remType(): ?int
    {
        return $this->trRemise01remType;
    }

    public function setTrRemise01remType(?int $trRemise01remType): static
    {
        $this->trRemise01remType = $trRemise01remType;

        return $this;
    }

    public function getTrRemise02remValeur(): ?string
    {
        return $this->trRemise02remValeur;
    }

    public function setTrRemise02remValeur(?string $trRemise02remValeur): static
    {
        $this->trRemise02remValeur = $trRemise02remValeur;

        return $this;
    }

    public function getTrRemise02remType(): ?int
    {
        return $this->trRemise02remType;
    }

    public function setTrRemise02remType(?int $trRemise02remType): static
    {
        $this->trRemise02remType = $trRemise02remType;

        return $this;
    }

    public function getTrRemise03remValeur(): ?string
    {
        return $this->trRemise03remValeur;
    }

    public function setTrRemise03remValeur(?string $trRemise03remValeur): static
    {
        $this->trRemise03remValeur = $trRemise03remValeur;

        return $this;
    }

    public function getTrRemise03remType(): ?int
    {
        return $this->trRemise03remType;
    }

    public function setTrRemise03remType(?int $trRemise03remType): static
    {
        $this->trRemise03remType = $trRemise03remType;

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
