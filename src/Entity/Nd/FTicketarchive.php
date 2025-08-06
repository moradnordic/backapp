<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FTicketarchiveRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TICKETARCHIVE')]
#[ORM\Index(name: 'ITA_CAISSE', columns: ['CA_No'])]
#[ORM\Index(name: 'ITA_CAISSIER', columns: ['CO_NoCaissier'])]
#[ORM\Index(name: 'ITA_PIECE', columns: ['cbTA_Piece'])]
#[ORM\Index(name: 'ITA_DATE', columns: ['TA_Date'])]
#[ORM\Index(name: 'ITA_CLIENT', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ITA_DOC', columns: ['cbDO_Piece'])]
#[ORM\UniqueConstraint(name: 'UKA_F_TICKETARCHIVE_TA_Piece', columns: ['TA_Piece'])]
#[ORM\Index(name: 'FKIA_F_TICKETARCHIVE_CA_No', columns: ['CA_No'])]
#[ORM\Entity(repositoryClass: FTicketarchiveRepository::class)]
class FTicketarchive
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CA_No")]
    private ?int $caNo = null;

    #[ORM\Column(name: "CO_NoCaissier", nullable: true)]
    private ?int $coNocaissier = null;

    #[ORM\Column(name: "cbCO_NoCaissier", nullable: true)]
    private ?int $cbcoNocaissier = null;

    #[ORM\Column(name: "TA_Piece", length: 9)]
    private ?string $taPiece = null;

    #[ORM\Column(name: "cbTA_Piece", type: Types::BINARY, nullable: true)]
    private $cbtaPiece = null;

    #[ORM\Column(name: "TA_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $taDate = null;

    #[ORM\Column(name: "TA_Heure", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $taHeure = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

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

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(int $caNo): static
    {
        $this->caNo = $caNo;

        return $this;
    }

    public function getCoNocaissier(): ?int
    {
        return $this->coNocaissier;
    }

    public function setCoNocaissier(?int $coNocaissier): static
    {
        $this->coNocaissier = $coNocaissier;

        return $this;
    }

    public function getCbcoNocaissier(): ?int
    {
        return $this->cbcoNocaissier;
    }

    public function setCbcoNocaissier(?int $cbcoNocaissier): static
    {
        $this->cbcoNocaissier = $cbcoNocaissier;

        return $this;
    }

    public function getTaPiece(): ?string
    {
        return $this->taPiece;
    }

    public function setTaPiece(string $taPiece): static
    {
        $this->taPiece = $taPiece;

        return $this;
    }

    public function getCbtaPiece()
    {
        return $this->cbtaPiece;
    }

    public function setCbtaPiece($cbtaPiece): static
    {
        $this->cbtaPiece = $cbtaPiece;

        return $this;
    }

    public function getTaDate(): ?\DateTimeInterface
    {
        return $this->taDate;
    }

    public function setTaDate(?\DateTimeInterface $taDate): static
    {
        $this->taDate = $taDate;

        return $this;
    }

    public function getTaHeure(): ?string
    {
        return $this->taHeure;
    }

    public function setTaHeure(?string $taHeure): static
    {
        $this->taHeure = $taHeure;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
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
}
