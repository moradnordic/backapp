<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FFinancierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FINANCIER')]
#[ORM\UniqueConstraint(name: 'IFI_NO', columns: ['FI_No'])]
#[ORM\UniqueConstraint(name: 'IFI_DATE', columns: ['cbJO_Num'])]
#[ORM\Index(name: 'IFI_JONUM', columns: ['cbJO_Num'])]
#[ORM\Entity(repositoryClass: FFinancierRepository::class)]
class FFinancier
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FI_No")]
    private ?int $fiNo = null;

    #[ORM\Column(name: "FI_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fiDate = null;

    #[ORM\Column(name: "JO_Num", length: 7)]
    private ?string $joNum = null;

    #[ORM\Column(name: "cbJO_Num", type: Types::BINARY, nullable: true)]
    private $cbjoNum = null;

    #[ORM\Column(name: "FI_Extrait", length: 17, nullable: true)]
    private ?string $fiExtrait = null;

    #[ORM\Column(name: "FI_SoldeInitial", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fiSoldeinitial = null;

    #[ORM\Column(name: "FI_SoldeFinal", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fiSoldefinal = null;

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

    public function getFiNo(): ?int
    {
        return $this->fiNo;
    }

    public function setFiNo(int $fiNo): static
    {
        $this->fiNo = $fiNo;

        return $this;
    }

    public function getFiDate(): ?\DateTimeInterface
    {
        return $this->fiDate;
    }

    public function setFiDate(?\DateTimeInterface $fiDate): static
    {
        $this->fiDate = $fiDate;

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

    public function getFiExtrait(): ?string
    {
        return $this->fiExtrait;
    }

    public function setFiExtrait(?string $fiExtrait): static
    {
        $this->fiExtrait = $fiExtrait;

        return $this;
    }

    public function getFiSoldeinitial(): ?string
    {
        return $this->fiSoldeinitial;
    }

    public function setFiSoldeinitial(?string $fiSoldeinitial): static
    {
        $this->fiSoldeinitial = $fiSoldeinitial;

        return $this;
    }

    public function getFiSoldefinal(): ?string
    {
        return $this->fiSoldefinal;
    }

    public function setFiSoldefinal(?string $fiSoldefinal): static
    {
        $this->fiSoldefinal = $fiSoldefinal;

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
