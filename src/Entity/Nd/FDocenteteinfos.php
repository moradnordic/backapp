<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDocenteteinfosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCENTETEINFOS')]
#[ORM\Index(name: 'IDI_INTITULE', columns: ['cbDI_Intitule'])]
#[ORM\UniqueConstraint(name: 'IDI_CODE', columns: ['cbDI_Code'])]
#[ORM\Entity(repositoryClass: FDocenteteinfosRepository::class)]
class FDocenteteinfos
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $doType = null;

    #[ORM\Column(name: "DO_Piece", length: 9, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cbDO_Piece", type: Types::BINARY, nullable: true)]
    private $cbdoPiece = null;

    #[ORM\Column(name: "DI_Code", length: 13)]
    private ?string $diCode = null;

    #[ORM\Column(name: "cbDI_Code", type: Types::BINARY, nullable: true)]
    private $cbdiCode = null;

    #[ORM\Column(name: "DI_Intitule", length: 35)]
    private ?string $diIntitule = null;

    #[ORM\Column(name: "cbDI_Intitule", type: Types::BINARY, nullable: true)]
    private $cbdiIntitule = null;

    #[ORM\Column(name: "DI_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $diType = null;

    #[ORM\Column(name: "DI_Valeur", length: 101, nullable: true)]
    private ?string $diValeur = null;

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

    public function getDoType(): ?int
    {
        return $this->doType;
    }

    public function setDoType(?int $doType): static
    {
        $this->doType = $doType;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getCbdoPiece()
    {
        return $this->cbdoPiece;
    }

    public function setCbdoPiece($cbdoPiece): static
    {
        $this->cbdoPiece = $cbdoPiece;

        return $this;
    }

    public function getDiCode(): ?string
    {
        return $this->diCode;
    }

    public function setDiCode(string $diCode): static
    {
        $this->diCode = $diCode;

        return $this;
    }

    public function getCbdiCode()
    {
        return $this->cbdiCode;
    }

    public function setCbdiCode($cbdiCode): static
    {
        $this->cbdiCode = $cbdiCode;

        return $this;
    }

    public function getDiIntitule(): ?string
    {
        return $this->diIntitule;
    }

    public function setDiIntitule(string $diIntitule): static
    {
        $this->diIntitule = $diIntitule;

        return $this;
    }

    public function getCbdiIntitule()
    {
        return $this->cbdiIntitule;
    }

    public function setCbdiIntitule($cbdiIntitule): static
    {
        $this->cbdiIntitule = $cbdiIntitule;

        return $this;
    }

    public function getDiType(): ?int
    {
        return $this->diType;
    }

    public function setDiType(?int $diType): static
    {
        $this->diType = $diType;

        return $this;
    }

    public function getDiValeur(): ?string
    {
        return $this->diValeur;
    }

    public function setDiValeur(?string $diValeur): static
    {
        $this->diValeur = $diValeur;

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
