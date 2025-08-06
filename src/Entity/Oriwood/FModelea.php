<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FModeleaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_MODELEA')]
#[ORM\UniqueConstraint(name: 'IMA_NO', columns: ['MA_No'])]
#[ORM\UniqueConstraint(name: 'IMA_INT', columns: ['cbMA_Intitule'])]
#[ORM\Index(name: 'IMA_JONUM', columns: ['cbMA_Intitule'])]
#[ORM\Index(name: 'IMA_PINO', columns: ['PI_No'])]
#[ORM\Index(name: 'FKIA_F_MODELEA_PI_No', columns: ['PI_No'])]
#[ORM\Entity(repositoryClass: FModeleaRepository::class)]
class FModelea
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "MA_No")]
    private ?int $maNo = null;

    #[ORM\Column(name: "MA_Intitule", length: 35, nullable: true)]
    private ?string $maIntitule = null;

    #[ORM\Column(name: "cbMA_Intitule", type: Types::BINARY, nullable: true)]
    private $cbmaIntitule = null;

    #[ORM\Column(name: "JO_Num", length: 7)]
    private ?string $joNum = null;

    #[ORM\Column(name: "cbJO_Num", type: Types::BINARY, nullable: true)]
    private $cbjoNum = null;

    #[ORM\Column(name: "MA_Debut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $maDebut = null;

    #[ORM\Column(name: "MA_Fin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $maFin = null;

    #[ORM\Column(name: "MA_TPeriod", type: Types::SMALLINT, nullable: true)]
    private ?int $maTperiod = null;

    #[ORM\Column(name: "MA_VPeriod", type: Types::SMALLINT, nullable: true)]
    private ?int $maVperiod = null;

    #[ORM\Column(name: "PI_No")]
    private ?int $piNo = null;

    #[ORM\Column(name: "MA_Piece", length: 17, nullable: true)]
    private ?string $maPiece = null;

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

    public function getMaNo(): ?int
    {
        return $this->maNo;
    }

    public function setMaNo(int $maNo): static
    {
        $this->maNo = $maNo;

        return $this;
    }

    public function getMaIntitule(): ?string
    {
        return $this->maIntitule;
    }

    public function setMaIntitule(?string $maIntitule): static
    {
        $this->maIntitule = $maIntitule;

        return $this;
    }

    public function getCbmaIntitule()
    {
        return $this->cbmaIntitule;
    }

    public function setCbmaIntitule($cbmaIntitule): static
    {
        $this->cbmaIntitule = $cbmaIntitule;

        return $this;
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

    public function getMaDebut(): ?\DateTimeInterface
    {
        return $this->maDebut;
    }

    public function setMaDebut(?\DateTimeInterface $maDebut): static
    {
        $this->maDebut = $maDebut;

        return $this;
    }

    public function getMaFin(): ?\DateTimeInterface
    {
        return $this->maFin;
    }

    public function setMaFin(?\DateTimeInterface $maFin): static
    {
        $this->maFin = $maFin;

        return $this;
    }

    public function getMaTperiod(): ?int
    {
        return $this->maTperiod;
    }

    public function setMaTperiod(?int $maTperiod): static
    {
        $this->maTperiod = $maTperiod;

        return $this;
    }

    public function getMaVperiod(): ?int
    {
        return $this->maVperiod;
    }

    public function setMaVperiod(?int $maVperiod): static
    {
        $this->maVperiod = $maVperiod;

        return $this;
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

    public function getMaPiece(): ?string
    {
        return $this->maPiece;
    }

    public function setMaPiece(?string $maPiece): static
    {
        $this->maPiece = $maPiece;

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
