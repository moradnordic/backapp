<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEtaxeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ETAXE')]
#[ORM\UniqueConstraint(name: 'IET_TANO', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'IET_CGNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'FKIA_F_ETAXE_CG_Num', columns: ['CG_Num'])]
#[ORM\Index(name: 'FKIA_F_ETAXE_TA_No', columns: ['TA_No'])]
#[ORM\Entity(repositoryClass: FEtaxeRepository::class)]
class FEtaxe
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "TA_No")]
    private ?int $taNo = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

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

    public function getTaNo(): ?int
    {
        return $this->taNo;
    }

    public function setTaNo(int $taNo): static
    {
        $this->taNo = $taNo;

        return $this;
    }

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(string $cgNum): static
    {
        $this->cgNum = $cgNum;

        return $this;
    }

    public function getCbcgNum()
    {
        return $this->cbcgNum;
    }

    public function setCbcgNum($cbcgNum): static
    {
        $this->cbcgNum = $cbcgNum;

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
