<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEnumgammeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ENUMGAMME')]
#[ORM\Index(name: 'IEG_BORNE', columns: ['EG_BorneSup'])]
#[ORM\Index(name: 'IEG_LIGNE', columns: ['EG_Ligne'])]
#[ORM\Index(name: 'IEG_ENUMERE', columns: ['cbEG_Enumere'])]
#[ORM\Entity(repositoryClass: FEnumgammeRepository::class)]
class FEnumgamme
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EG_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $egChamp = null;

    #[ORM\Column(name: "EG_Ligne", type: Types::SMALLINT, nullable: true)]
    private ?int $egLigne = null;

    #[ORM\Column(name: "EG_Enumere", length: 21, nullable: true)]
    private ?string $egEnumere = null;

    #[ORM\Column(name: "cbEG_Enumere", type: Types::BINARY, nullable: true)]
    private $cbegEnumere = null;

    #[ORM\Column(name: "EG_BorneSup", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $egBornesup = null;

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

    public function getEgChamp(): ?int
    {
        return $this->egChamp;
    }

    public function setEgChamp(?int $egChamp): static
    {
        $this->egChamp = $egChamp;

        return $this;
    }

    public function getEgLigne(): ?int
    {
        return $this->egLigne;
    }

    public function setEgLigne(?int $egLigne): static
    {
        $this->egLigne = $egLigne;

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

    public function getEgBornesup(): ?string
    {
        return $this->egBornesup;
    }

    public function setEgBornesup(?string $egBornesup): static
    {
        $this->egBornesup = $egBornesup;

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
