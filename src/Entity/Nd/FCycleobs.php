<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FCycleobsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CYCLEOBS')]
#[ORM\UniqueConstraint(name: 'ICO_CYNUM', columns: ['CO_Exercice'])]
#[ORM\Entity(repositoryClass: FCycleobsRepository::class)]
class FCycleobs
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CY_Num", length: 11, nullable: true)]
    private ?string $cyNum = null;

    #[ORM\Column(name: "cbCY_Num", type: Types::BINARY, nullable: true)]
    private $cbcyNum = null;

    #[ORM\Column(name: "CO_Exercice", type: Types::SMALLINT, nullable: true)]
    private ?int $coExercice = null;

    #[ORM\Column(name: "CO_Obs", length: -1, nullable: true)]
    private ?string $coObs = null;

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

    public function getCyNum(): ?string
    {
        return $this->cyNum;
    }

    public function setCyNum(?string $cyNum): static
    {
        $this->cyNum = $cyNum;

        return $this;
    }

    public function getCbcyNum()
    {
        return $this->cbcyNum;
    }

    public function setCbcyNum($cbcyNum): static
    {
        $this->cbcyNum = $cbcyNum;

        return $this;
    }

    public function getCoExercice(): ?int
    {
        return $this->coExercice;
    }

    public function setCoExercice(?int $coExercice): static
    {
        $this->coExercice = $coExercice;

        return $this;
    }

    public function getCoObs(): ?string
    {
        return $this->coObs;
    }

    public function setCoObs(?string $coObs): static
    {
        $this->coObs = $coObs;

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
