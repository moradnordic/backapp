<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDocligneinfosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCLIGNEINFOS')]
#[ORM\Index(name: 'IDC_INTITULE', columns: ['cbDC_Intitule'])]
#[ORM\UniqueConstraint(name: 'IDC_CODE', columns: ['cbDC_Code'])]
#[ORM\Index(name: 'FKIA_F_DOCLIGNEINFOS_DL_No', columns: ['DL_No'])]
#[ORM\Entity(repositoryClass: FDocligneinfosRepository::class)]
class FDocligneinfos
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DL_No")]
    private ?int $dlNo = null;

    #[ORM\Column(name: "DC_Code", length: 13)]
    private ?string $dcCode = null;

    #[ORM\Column(name: "cbDC_Code", type: Types::BINARY, nullable: true)]
    private $cbdcCode = null;

    #[ORM\Column(name: "DC_Intitule", length: 35)]
    private ?string $dcIntitule = null;

    #[ORM\Column(name: "cbDC_Intitule", type: Types::BINARY, nullable: true)]
    private $cbdcIntitule = null;

    #[ORM\Column(name: "DC_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $dcType = null;

    #[ORM\Column(name: "DC_Valeur", length: 101, nullable: true)]
    private ?string $dcValeur = null;

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

    public function getDlNo(): ?int
    {
        return $this->dlNo;
    }

    public function setDlNo(int $dlNo): static
    {
        $this->dlNo = $dlNo;

        return $this;
    }

    public function getDcCode(): ?string
    {
        return $this->dcCode;
    }

    public function setDcCode(string $dcCode): static
    {
        $this->dcCode = $dcCode;

        return $this;
    }

    public function getCbdcCode()
    {
        return $this->cbdcCode;
    }

    public function setCbdcCode($cbdcCode): static
    {
        $this->cbdcCode = $cbdcCode;

        return $this;
    }

    public function getDcIntitule(): ?string
    {
        return $this->dcIntitule;
    }

    public function setDcIntitule(string $dcIntitule): static
    {
        $this->dcIntitule = $dcIntitule;

        return $this;
    }

    public function getCbdcIntitule()
    {
        return $this->cbdcIntitule;
    }

    public function setCbdcIntitule($cbdcIntitule): static
    {
        $this->cbdcIntitule = $cbdcIntitule;

        return $this;
    }

    public function getDcType(): ?int
    {
        return $this->dcType;
    }

    public function setDcType(?int $dcType): static
    {
        $this->dcType = $dcType;

        return $this;
    }

    public function getDcValeur(): ?string
    {
        return $this->dcValeur;
    }

    public function setDcValeur(?string $dcValeur): static
    {
        $this->dcValeur = $dcValeur;

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
