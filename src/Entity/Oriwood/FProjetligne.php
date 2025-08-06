<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FProjetligneRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PROJETLIGNE')]
#[ORM\Index(name: 'IPL_NUM', columns: ['PL_Ordre'])]
#[ORM\Index(name: 'IPL_LIGNE', columns: ['DL_No'])]
#[ORM\Index(name: 'FKIA_F_PROJETLIGNE_PF_Num', columns: ['PF_Num'])]
#[ORM\Index(name: 'FKIA_F_PROJETLIGNE_DL_No', columns: ['DL_No'])]
#[ORM\Entity(repositoryClass: FProjetligneRepository::class)]
class FProjetligne
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PF_Num", length: 9)]
    private ?string $pfNum = null;

    #[ORM\Column(name: "cbPF_Num", type: Types::BINARY, nullable: true)]
    private $cbpfNum = null;

    #[ORM\Column(name: "DL_No", nullable: true)]
    private ?int $dlNo = null;

    #[ORM\Column(name: "PL_Ordre", type: Types::SMALLINT, nullable: true)]
    private ?int $plOrdre = null;

    #[ORM\Column(name: "PF_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $pfType = null;

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

    public function getPfNum(): ?string
    {
        return $this->pfNum;
    }

    public function setPfNum(string $pfNum): static
    {
        $this->pfNum = $pfNum;

        return $this;
    }

    public function getCbpfNum()
    {
        return $this->cbpfNum;
    }

    public function setCbpfNum($cbpfNum): static
    {
        $this->cbpfNum = $cbpfNum;

        return $this;
    }

    public function getDlNo(): ?int
    {
        return $this->dlNo;
    }

    public function setDlNo(?int $dlNo): static
    {
        $this->dlNo = $dlNo;

        return $this;
    }

    public function getPlOrdre(): ?int
    {
        return $this->plOrdre;
    }

    public function setPlOrdre(?int $plOrdre): static
    {
        $this->plOrdre = $plOrdre;

        return $this;
    }

    public function getPfType(): ?int
    {
        return $this->pfType;
    }

    public function setPfType(?int $pfType): static
    {
        $this->pfType = $pfType;

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
