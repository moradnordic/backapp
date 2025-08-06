<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FComptetinfosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTETINFOS')]
#[ORM\Index(name: 'ICI_DOMAINE', columns: ['cbCI_Intitule'])]
#[ORM\UniqueConstraint(name: 'ICI_CODE', columns: ['cbCI_Code'])]
#[ORM\Entity(repositoryClass: FComptetinfosRepository::class)]
class FComptetinfos
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "CI_Code", length: 13)]
    private ?string $ciCode = null;

    #[ORM\Column(name: "cbCI_Code", type: Types::BINARY, nullable: true)]
    private $cbciCode = null;

    #[ORM\Column(name: "CI_Intitule", length: 35)]
    private ?string $ciIntitule = null;

    #[ORM\Column(name: "cbCI_Intitule", type: Types::BINARY, nullable: true)]
    private $cbciIntitule = null;

    #[ORM\Column(name: "CI_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $ciDomaine = null;

    #[ORM\Column(name: "CI_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $ciType = null;

    #[ORM\Column(name: "CI_Valeur", length: 101, nullable: true)]
    private ?string $ciValeur = null;

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

    public function getCiCode(): ?string
    {
        return $this->ciCode;
    }

    public function setCiCode(string $ciCode): static
    {
        $this->ciCode = $ciCode;

        return $this;
    }

    public function getCbciCode()
    {
        return $this->cbciCode;
    }

    public function setCbciCode($cbciCode): static
    {
        $this->cbciCode = $cbciCode;

        return $this;
    }

    public function getCiIntitule(): ?string
    {
        return $this->ciIntitule;
    }

    public function setCiIntitule(string $ciIntitule): static
    {
        $this->ciIntitule = $ciIntitule;

        return $this;
    }

    public function getCbciIntitule()
    {
        return $this->cbciIntitule;
    }

    public function setCbciIntitule($cbciIntitule): static
    {
        $this->cbciIntitule = $cbciIntitule;

        return $this;
    }

    public function getCiDomaine(): ?int
    {
        return $this->ciDomaine;
    }

    public function setCiDomaine(?int $ciDomaine): static
    {
        $this->ciDomaine = $ciDomaine;

        return $this;
    }

    public function getCiType(): ?int
    {
        return $this->ciType;
    }

    public function setCiType(?int $ciType): static
    {
        $this->ciType = $ciType;

        return $this;
    }

    public function getCiValeur(): ?string
    {
        return $this->ciValeur;
    }

    public function setCiValeur(?string $ciValeur): static
    {
        $this->ciValeur = $ciValeur;

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
