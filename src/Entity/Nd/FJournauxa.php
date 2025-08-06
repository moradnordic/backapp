<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FJournauxaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_JOURNAUXA')]
#[ORM\UniqueConstraint(name: 'IJA_NUM', columns: ['cbJA_Num'])]
#[ORM\Index(name: 'IJA_INT', columns: ['cbJA_Intitule'])]
#[ORM\Index(name: 'IJA_SOMNUM', columns: ['cbJA_Num'])]
#[ORM\Index(name: 'IJA_SOMINT', columns: ['cbJA_Intitule'])]
#[ORM\Entity(repositoryClass: FJournauxaRepository::class)]
class FJournauxa
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "JA_Num", length: 7)]
    private ?string $jaNum = null;

    #[ORM\Column(name: "cbJA_Num", type: Types::BINARY, nullable: true)]
    private $cbjaNum = null;

    #[ORM\Column(name: "JA_Intitule", length: 35, nullable: true)]
    private ?string $jaIntitule = null;

    #[ORM\Column(name: "cbJA_Intitule", type: Types::BINARY, nullable: true)]
    private $cbjaIntitule = null;

    #[ORM\Column(name: "JA_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $jaSommeil = null;

    #[ORM\Column(name: "JA_IFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $jaIfrs = null;

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

    public function getJaNum(): ?string
    {
        return $this->jaNum;
    }

    public function setJaNum(string $jaNum): static
    {
        $this->jaNum = $jaNum;

        return $this;
    }

    public function getCbjaNum()
    {
        return $this->cbjaNum;
    }

    public function setCbjaNum($cbjaNum): static
    {
        $this->cbjaNum = $cbjaNum;

        return $this;
    }

    public function getJaIntitule(): ?string
    {
        return $this->jaIntitule;
    }

    public function setJaIntitule(?string $jaIntitule): static
    {
        $this->jaIntitule = $jaIntitule;

        return $this;
    }

    public function getCbjaIntitule()
    {
        return $this->cbjaIntitule;
    }

    public function setCbjaIntitule($cbjaIntitule): static
    {
        $this->cbjaIntitule = $cbjaIntitule;

        return $this;
    }

    public function getJaSommeil(): ?int
    {
        return $this->jaSommeil;
    }

    public function setJaSommeil(?int $jaSommeil): static
    {
        $this->jaSommeil = $jaSommeil;

        return $this;
    }

    public function getJaIfrs(): ?int
    {
        return $this->jaIfrs;
    }

    public function setJaIfrs(?int $jaIfrs): static
    {
        $this->jaIfrs = $jaIfrs;

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
