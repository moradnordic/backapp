<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FPieceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PIECE')]
#[ORM\UniqueConstraint(name: 'IPI_INT', columns: ['cbPI_Intitule'])]
#[ORM\Index(name: 'IPI_JOTYPE', columns: ['cbPI_Intitule'])]
#[ORM\Index(name: 'IPI_RACC', columns: ['cbPI_Raccourci'])]
#[ORM\UniqueConstraint(name: 'IPI_NO', columns: ['PI_No'])]
#[ORM\Index(name: 'IPI_JONUM', columns: ['cbJO_Num'])]
#[ORM\Entity(repositoryClass: FPieceRepository::class)]
class FPiece
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PI_No")]
    private ?int $piNo = null;

    #[ORM\Column(name: "PI_Intitule", length: 35, nullable: true)]
    private ?string $piIntitule = null;

    #[ORM\Column(name: "cbPI_Intitule", type: Types::BINARY, nullable: true)]
    private $cbpiIntitule = null;

    #[ORM\Column(name: "PI_Raccourci", length: 7, nullable: true)]
    private ?string $piRaccourci = null;

    #[ORM\Column(name: "cbPI_Raccourci", type: Types::BINARY, nullable: true)]
    private $cbpiRaccourci = null;

    #[ORM\Column(name: "JO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $joType = null;

    #[ORM\Column(name: "JO_Num", length: 7, nullable: true)]
    private ?string $joNum = null;

    #[ORM\Column(name: "cbJO_Num", type: Types::BINARY, nullable: true)]
    private $cbjoNum = null;

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

    public function getPiNo(): ?int
    {
        return $this->piNo;
    }

    public function setPiNo(int $piNo): static
    {
        $this->piNo = $piNo;

        return $this;
    }

    public function getPiIntitule(): ?string
    {
        return $this->piIntitule;
    }

    public function setPiIntitule(?string $piIntitule): static
    {
        $this->piIntitule = $piIntitule;

        return $this;
    }

    public function getCbpiIntitule()
    {
        return $this->cbpiIntitule;
    }

    public function setCbpiIntitule($cbpiIntitule): static
    {
        $this->cbpiIntitule = $cbpiIntitule;

        return $this;
    }

    public function getPiRaccourci(): ?string
    {
        return $this->piRaccourci;
    }

    public function setPiRaccourci(?string $piRaccourci): static
    {
        $this->piRaccourci = $piRaccourci;

        return $this;
    }

    public function getCbpiRaccourci()
    {
        return $this->cbpiRaccourci;
    }

    public function setCbpiRaccourci($cbpiRaccourci): static
    {
        $this->cbpiRaccourci = $cbpiRaccourci;

        return $this;
    }

    public function getJoType(): ?int
    {
        return $this->joType;
    }

    public function setJoType(?int $joType): static
    {
        $this->joType = $joType;

        return $this;
    }

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(?string $joNum): static
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
