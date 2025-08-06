<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FProjetfabricationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PROJETFABRICATION')]
#[ORM\UniqueConstraint(name: 'IPF_NUM', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IPF_INTITULE', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IPF_DATEDEBUT', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IPF_STATUTNUM', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IPF_STATUTINTITULE', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IPF_STATUTDATEDEBUT', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IPF_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'IPF_AFFAIRE', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'IPF_DOCUMENT', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IPF_TIERS', columns: ['cbCT_Num'])]
#[ORM\UniqueConstraint(name: 'UKA_F_PROJETFABRICATION_PF_Num', columns: ['PF_Num'])]
#[ORM\Index(name: 'FKIA_F_PROJETFABRICATION_DE_No', columns: ['cbDE_No'])]
#[ORM\Entity(repositoryClass: FProjetfabricationRepository::class)]
class FProjetfabrication
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PF_Num", length: 9)]
    private ?string $pfNum = null;

    #[ORM\Column(name: "cbPF_Num", type: Types::BINARY, nullable: true)]
    private $cbpfNum = null;

    #[ORM\Column(name: "PF_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $pfStatut = null;

    #[ORM\Column(name: "PF_Intitule", length: 69, nullable: true)]
    private ?string $pfIntitule = null;

    #[ORM\Column(name: "cbPF_Intitule", type: Types::BINARY, nullable: true)]
    private $cbpfIntitule = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "PF_DateDebut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pfDatedebut = null;

    #[ORM\Column(name: "PF_DateFin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pfDatefin = null;

    #[ORM\Column(name: "DO_Piece", length: 9, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cbDO_Piece", type: Types::BINARY, nullable: true)]
    private $cbdoPiece = null;

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

    #[ORM\Column(name: "PF_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $pfType = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

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

    public function getPfStatut(): ?int
    {
        return $this->pfStatut;
    }

    public function setPfStatut(?int $pfStatut): static
    {
        $this->pfStatut = $pfStatut;

        return $this;
    }

    public function getPfIntitule(): ?string
    {
        return $this->pfIntitule;
    }

    public function setPfIntitule(?string $pfIntitule): static
    {
        $this->pfIntitule = $pfIntitule;

        return $this;
    }

    public function getCbpfIntitule()
    {
        return $this->cbpfIntitule;
    }

    public function setCbpfIntitule($cbpfIntitule): static
    {
        $this->cbpfIntitule = $cbpfIntitule;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(?int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(?string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getCbcaNum()
    {
        return $this->cbcaNum;
    }

    public function setCbcaNum($cbcaNum): static
    {
        $this->cbcaNum = $cbcaNum;

        return $this;
    }

    public function getPfDatedebut(): ?\DateTimeInterface
    {
        return $this->pfDatedebut;
    }

    public function setPfDatedebut(?\DateTimeInterface $pfDatedebut): static
    {
        $this->pfDatedebut = $pfDatedebut;

        return $this;
    }

    public function getPfDatefin(): ?\DateTimeInterface
    {
        return $this->pfDatefin;
    }

    public function setPfDatefin(?\DateTimeInterface $pfDatefin): static
    {
        $this->pfDatefin = $pfDatefin;

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

    public function getPfType(): ?int
    {
        return $this->pfType;
    }

    public function setPfType(?int $pfType): static
    {
        $this->pfType = $pfType;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getCbdeNo(): ?int
    {
        return $this->cbdeNo;
    }

    public function setCbdeNo(?int $cbdeNo): static
    {
        $this->cbdeNo = $cbdeNo;

        return $this;
    }
}
