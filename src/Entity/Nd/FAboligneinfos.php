<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FAboligneinfosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ABOLIGNEINFOS')]
#[ORM\Index(name: 'IAC_INTITULE', columns: ['cbAC_Intitule'])]
#[ORM\UniqueConstraint(name: 'IAC_CODE', columns: ['cbAC_Code'])]
#[ORM\Index(name: 'FKIA_F_ABOLIGNEINFOS_AL_No', columns: ['AL_No'])]
#[ORM\Entity(repositoryClass: FAboligneinfosRepository::class)]
class FAboligneinfos
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AL_No")]
    private ?int $alNo = null;

    #[ORM\Column(name: "AC_Code", length: 13)]
    private ?string $acCode = null;

    #[ORM\Column(name: "cbAC_Code", type: Types::BINARY, nullable: true)]
    private $cbacCode = null;

    #[ORM\Column(name: "AC_Intitule", length: 35)]
    private ?string $acIntitule = null;

    #[ORM\Column(name: "cbAC_Intitule", type: Types::BINARY, nullable: true)]
    private $cbacIntitule = null;

    #[ORM\Column(name: "AC_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $acType = null;

    #[ORM\Column(name: "AC_Valeur", length: 101, nullable: true)]
    private ?string $acValeur = null;

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

    public function getAlNo(): ?int
    {
        return $this->alNo;
    }

    public function setAlNo(int $alNo): static
    {
        $this->alNo = $alNo;

        return $this;
    }

    public function getAcCode(): ?string
    {
        return $this->acCode;
    }

    public function setAcCode(string $acCode): static
    {
        $this->acCode = $acCode;

        return $this;
    }

    public function getCbacCode()
    {
        return $this->cbacCode;
    }

    public function setCbacCode($cbacCode): static
    {
        $this->cbacCode = $cbacCode;

        return $this;
    }

    public function getAcIntitule(): ?string
    {
        return $this->acIntitule;
    }

    public function setAcIntitule(string $acIntitule): static
    {
        $this->acIntitule = $acIntitule;

        return $this;
    }

    public function getCbacIntitule()
    {
        return $this->cbacIntitule;
    }

    public function setCbacIntitule($cbacIntitule): static
    {
        $this->cbacIntitule = $cbacIntitule;

        return $this;
    }

    public function getAcType(): ?int
    {
        return $this->acType;
    }

    public function setAcType(?int $acType): static
    {
        $this->acType = $acType;

        return $this;
    }

    public function getAcValeur(): ?string
    {
        return $this->acValeur;
    }

    public function setAcValeur(?string $acValeur): static
    {
        $this->acValeur = $acValeur;

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
