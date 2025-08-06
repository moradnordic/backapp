<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FArtgammeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTGAMME')]
#[ORM\Index(name: 'IAG_REF', columns: ['AG_No'])]
#[ORM\UniqueConstraint(name: 'IAG_NO', columns: ['AG_No'])]
#[ORM\UniqueConstraint(name: 'IAG_ENUMERE', columns: ['cbEG_Enumere'])]
#[ORM\Index(name: 'FKIA_F_ARTGAMME_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FArtgammeRepository::class)]
class FArtgamme
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AG_No", nullable: true)]
    private ?int $agNo = null;

    #[ORM\Column(name: "EG_Enumere", length: 21, nullable: true)]
    private ?string $egEnumere = null;

    #[ORM\Column(name: "cbEG_Enumere", type: Types::BINARY, nullable: true)]
    private $cbegEnumere = null;

    #[ORM\Column(name: "AG_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $agType = null;

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

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
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

    public function getAgNo(): ?int
    {
        return $this->agNo;
    }

    public function setAgNo(?int $agNo): static
    {
        $this->agNo = $agNo;

        return $this;
    }

    public function getEgEnumere(): ?string
    {
        return $this->egEnumere;
    }

    public function setEgEnumere(?string $egEnumere): static
    {
        $this->egEnumere = $egEnumere;

        return $this;
    }

    public function getCbegEnumere()
    {
        return $this->cbegEnumere;
    }

    public function setCbegEnumere($cbegEnumere): static
    {
        $this->cbegEnumere = $cbegEnumere;

        return $this;
    }

    public function getAgType(): ?int
    {
        return $this->agType;
    }

    public function setAgType(?int $agType): static
    {
        $this->agType = $agType;

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
