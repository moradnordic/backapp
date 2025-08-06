<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FGamstockemplRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_GAMSTOCKEMPL')]
#[ORM\UniqueConstraint(name: 'IGE_NODEP', columns: ['DP_No'])]
#[ORM\Index(name: 'IGE_NODEP2', columns: ['AG_No2'])]
#[ORM\Index(name: 'IGE_EMPLACEMENT', columns: ['DP_No'])]
#[ORM\Index(name: 'FKIA_F_GAMSTOCKEMPL_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_GAMSTOCKEMPL_GAMDENO_DPNO', columns: ['DP_No'])]
#[ORM\Entity(repositoryClass: FGamstockemplRepository::class)]
class FGamstockempl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "DP_No")]
    private ?int $dpNo = null;

    #[ORM\Column(name: "GE_QteSto", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $geQtesto = null;

    #[ORM\Column(name: "GE_QtePrepa", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $geQteprepa = null;

    #[ORM\Column(name: "GE_QteAControler", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $geQteacontroler = null;

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

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getAgNo1(): ?int
    {
        return $this->agNo1;
    }

    public function setAgNo1(?int $agNo1): static
    {
        $this->agNo1 = $agNo1;

        return $this;
    }

    public function getAgNo2(): ?int
    {
        return $this->agNo2;
    }

    public function setAgNo2(?int $agNo2): static
    {
        $this->agNo2 = $agNo2;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getDpNo(): ?int
    {
        return $this->dpNo;
    }

    public function setDpNo(int $dpNo): static
    {
        $this->dpNo = $dpNo;

        return $this;
    }

    public function getGeQtesto(): ?string
    {
        return $this->geQtesto;
    }

    public function setGeQtesto(?string $geQtesto): static
    {
        $this->geQtesto = $geQtesto;

        return $this;
    }

    public function getGeQteprepa(): ?string
    {
        return $this->geQteprepa;
    }

    public function setGeQteprepa(?string $geQteprepa): static
    {
        $this->geQteprepa = $geQteprepa;

        return $this;
    }

    public function getGeQteacontroler(): ?string
    {
        return $this->geQteacontroler;
    }

    public function setGeQteacontroler(?string $geQteacontroler): static
    {
        $this->geQteacontroler = $geQteacontroler;

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
