<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FJmouvRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_JMOUV')]
#[ORM\UniqueConstraint(name: 'IJM_JONUM', columns: ['JM_Date'])]
#[ORM\Index(name: 'IJM_DATE', columns: ['cbJO_Num'])]
#[ORM\Entity(repositoryClass: FJmouvRepository::class)]
class FJmouv
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "JO_Num", length: 7)]
    private ?string $joNum = null;

    #[ORM\Column(name: "cbJO_Num", type: Types::BINARY, nullable: true)]
    private $cbjoNum = null;

    #[ORM\Column(name: "JM_Date", type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $jmDate = null;

    #[ORM\Column(name: "JM_Cloture", type: Types::SMALLINT, nullable: true)]
    private ?int $jmCloture = null;

    #[ORM\Column(name: "JM_Impression", type: Types::SMALLINT, nullable: true)]
    private ?int $jmImpression = null;

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

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getCbjoNum()
    {
        return $this->cbjoNum;
    }

    public function setCbjoNum($cbjoNum): static
    {
        $this->cbjoNum = $cbjoNum;

        return $this;
    }

    public function getJmDate(): ?\DateTimeInterface
    {
        return $this->jmDate;
    }

    public function setJmDate(\DateTimeInterface $jmDate): static
    {
        $this->jmDate = $jmDate;

        return $this;
    }

    public function getJmCloture(): ?int
    {
        return $this->jmCloture;
    }

    public function setJmCloture(?int $jmCloture): static
    {
        $this->jmCloture = $jmCloture;

        return $this;
    }

    public function getJmImpression(): ?int
    {
        return $this->jmImpression;
    }

    public function setJmImpression(?int $jmImpression): static
    {
        $this->jmImpression = $jmImpression;

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
