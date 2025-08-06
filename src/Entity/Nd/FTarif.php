<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FTarifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TARIF')]
#[ORM\UniqueConstraint(name: 'ITF_INTITULE', columns: ['TF_Interes'])]
#[ORM\Index(name: 'ITF_INTERES', columns: ['cbTF_Intitule'])]
#[ORM\UniqueConstraint(name: 'ITF_NO', columns: ['TF_No'])]
#[ORM\Index(name: 'ITF_REF', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'ITF_FOURN', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'FKIA_F_TARIF_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FTarifRepository::class)]
class FTarif
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "TF_No", nullable: true)]
    private ?int $tfNo = null;

    #[ORM\Column(name: "TF_Intitule", length: 35, nullable: true)]
    private ?string $tfIntitule = null;

    #[ORM\Column(name: "cbTF_Intitule", type: Types::BINARY, nullable: true)]
    private $cbtfIntitule = null;

    #[ORM\Column(name: "TF_Interes", type: Types::SMALLINT, nullable: true)]
    private ?int $tfInteres = null;

    #[ORM\Column(name: "TF_Debut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $tfDebut = null;

    #[ORM\Column(name: "TF_Fin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $tfFin = null;

    #[ORM\Column(name: "TF_Objectif", type: Types::SMALLINT, nullable: true)]
    private ?int $tfObjectif = null;

    #[ORM\Column(name: "TF_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $tfDomaine = null;

    #[ORM\Column(name: "TF_Base", type: Types::SMALLINT, nullable: true)]
    private ?int $tfBase = null;

    #[ORM\Column(name: "TF_Calcul", type: Types::SMALLINT, nullable: true)]
    private ?int $tfCalcul = null;

    #[ORM\Column(name: "AR_Ref", length: 19, nullable: true)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "TF_Remise01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tfRemise01remValeur = null;

    #[ORM\Column(name: "TF_Remise01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $tfRemise01remType = null;

    #[ORM\Column(name: "TF_Remise02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tfRemise02remValeur = null;

    #[ORM\Column(name: "TF_Remise02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $tfRemise02remType = null;

    #[ORM\Column(name: "TF_Remise03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tfRemise03remValeur = null;

    #[ORM\Column(name: "TF_Remise03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $tfRemise03remType = null;

    #[ORM\Column(name: "TF_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $tfType = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

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

    public function setTfNo(?int $tfNo): static
    {
        $this->tfNo = $tfNo;

        return $this;
    }

    public function getTfIntitule(): ?string
    {
        return $this->tfIntitule;
    }

    public function setTfIntitule(?string $tfIntitule): static
    {
        $this->tfIntitule = $tfIntitule;

        return $this;
    }

    public function getCbtfIntitule()
    {
        return $this->cbtfIntitule;
    }

    public function setCbtfIntitule($cbtfIntitule): static
    {
        $this->cbtfIntitule = $cbtfIntitule;

        return $this;
    }

    public function getTfInteres(): ?int
    {
        return $this->tfInteres;
    }

    public function setTfInteres(?int $tfInteres): static
    {
        $this->tfInteres = $tfInteres;

        return $this;
    }

    public function getTfDebut(): ?\DateTimeInterface
    {
        return $this->tfDebut;
    }

    public function setTfDebut(?\DateTimeInterface $tfDebut): static
    {
        $this->tfDebut = $tfDebut;

        return $this;
    }

    public function getTfFin(): ?\DateTimeInterface
    {
        return $this->tfFin;
    }

    public function setTfFin(?\DateTimeInterface $tfFin): static
    {
        $this->tfFin = $tfFin;

        return $this;
    }

    public function getTfObjectif(): ?int
    {
        return $this->tfObjectif;
    }

    public function setTfObjectif(?int $tfObjectif): static
    {
        $this->tfObjectif = $tfObjectif;

        return $this;
    }

    public function getTfDomaine(): ?int
    {
        return $this->tfDomaine;
    }

    public function setTfDomaine(?int $tfDomaine): static
    {
        $this->tfDomaine = $tfDomaine;

        return $this;
    }

    public function getTfBase(): ?int
    {
        return $this->tfBase;
    }

    public function setTfBase(?int $tfBase): static
    {
        $this->tfBase = $tfBase;

        return $this;
    }

    public function getTfCalcul(): ?int
    {
        return $this->tfCalcul;
    }

    public function setTfCalcul(?int $tfCalcul): static
    {
        $this->tfCalcul = $tfCalcul;

        return $this;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(?string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getTfRemise01remValeur(): ?string
    {
        return $this->tfRemise01remValeur;
    }

    public function setTfRemise01remValeur(?string $tfRemise01remValeur): static
    {
        $this->tfRemise01remValeur = $tfRemise01remValeur;

        return $this;
    }

    public function getTfRemise01remType(): ?int
    {
        return $this->tfRemise01remType;
    }

    public function setTfRemise01remType(?int $tfRemise01remType): static
    {
        $this->tfRemise01remType = $tfRemise01remType;

        return $this;
    }

    public function getTfRemise02remValeur(): ?string
    {
        return $this->tfRemise02remValeur;
    }

    public function setTfRemise02remValeur(?string $tfRemise02remValeur): static
    {
        $this->tfRemise02remValeur = $tfRemise02remValeur;

        return $this;
    }

    public function getTfRemise02remType(): ?int
    {
        return $this->tfRemise02remType;
    }

    public function setTfRemise02remType(?int $tfRemise02remType): static
    {
        $this->tfRemise02remType = $tfRemise02remType;

        return $this;
    }

    public function getTfRemise03remValeur(): ?string
    {
        return $this->tfRemise03remValeur;
    }

    public function setTfRemise03remValeur(?string $tfRemise03remValeur): static
    {
        $this->tfRemise03remValeur = $tfRemise03remValeur;

        return $this;
    }

    public function getTfRemise03remType(): ?int
    {
        return $this->tfRemise03remType;
    }

    public function setTfRemise03remType(?int $tfRemise03remType): static
    {
        $this->tfRemise03remType = $tfRemise03remType;

        return $this;
    }

    public function getTfType(): ?int
    {
        return $this->tfType;
    }

    public function setTfType(?int $tfType): static
    {
        $this->tfType = $tfType;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): static
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
