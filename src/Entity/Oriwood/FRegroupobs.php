<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FRegroupobsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_REGROUPOBS')]
#[ORM\UniqueConstraint(name: 'IRO_RGNUM', columns: ['RO_Exercice'])]
#[ORM\Entity(repositoryClass: FRegroupobsRepository::class)]
class FRegroupobs
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CY_Num", length: 11, nullable: true)]
    private ?string $cyNum = null;

    #[ORM\Column(name: "cbCY_Num", type: Types::BINARY, nullable: true)]
    private $cbcyNum = null;

    #[ORM\Column(name: "RG_Num", length: 11, nullable: true)]
    private ?string $rgNum = null;

    #[ORM\Column(name: "cbRG_Num", type: Types::BINARY, nullable: true)]
    private $cbrgNum = null;

    #[ORM\Column(name: "RO_Exercice", type: Types::SMALLINT, nullable: true)]
    private ?int $roExercice = null;

    #[ORM\Column(name: "RO_Obs", length: -1, nullable: true)]
    private ?string $roObs = null;

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

    public function getRgNum(): ?string
    {
        return $this->rgNum;
    }

    public function setRgNum(?string $rgNum): static
    {
        $this->rgNum = $rgNum;

        return $this;
    }

    public function getCbrgNum()
    {
        return $this->cbrgNum;
    }

    public function setCbrgNum($cbrgNum): static
    {
        $this->cbrgNum = $cbrgNum;

        return $this;
    }

    public function getRoExercice(): ?int
    {
        return $this->roExercice;
    }

    public function setRoExercice(?int $roExercice): static
    {
        $this->roExercice = $roExercice;

        return $this;
    }

    public function getRoObs(): ?string
    {
        return $this->roObs;
    }

    public function setRoObs(?string $roObs): static
    {
        $this->roObs = $roObs;

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
