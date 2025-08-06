<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FDocreglRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCREGL')]
#[ORM\Index(name: 'IHashOrder_F_DOCREGL', columns: ['cbHashOrder'])]
#[ORM\Index(name: 'IDR_LIGNE', columns: ['N_Reglement'])]
#[ORM\Index(name: 'IDR_ECNO', columns: ['EC_No'])]
#[ORM\UniqueConstraint(name: 'IDR_NO', columns: ['DR_No'])]
#[ORM\Index(name: 'IDR_REGLE', columns: ['N_Reglement'])]
#[ORM\Entity(repositoryClass: FDocreglRepository::class)]
class FDocregl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DR_No", nullable: true)]
    private ?int $drNo = null;

    #[ORM\Column(name: "DO_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $doDomaine = null;

    #[ORM\Column(name: "DO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $doType = null;

    #[ORM\Column(name: "DO_Piece", length: 9, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cbDO_Piece", type: Types::BINARY, nullable: true)]
    private $cbdoPiece = null;

    #[ORM\Column(name: "DR_TypeRegl", type: Types::SMALLINT, nullable: true)]
    private ?int $drTyperegl = null;

    #[ORM\Column(name: "DR_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $drDate = null;

    #[ORM\Column(name: "DR_Libelle", length: 35, nullable: true)]
    private ?string $drLibelle = null;

    #[ORM\Column(name: "DR_Pourcent", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $drPourcent = null;

    #[ORM\Column(name: "DR_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $drMontant = null;

    #[ORM\Column(name: "DR_MontantDev", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $drMontantdev = null;

    #[ORM\Column(name: "DR_Equil", type: Types::SMALLINT, nullable: true)]
    private ?int $drEquil = null;

    #[ORM\Column(name: "EC_No", nullable: true)]
    private ?int $ecNo = null;

    #[ORM\Column(name: "cbEC_No", nullable: true)]
    private ?int $cbecNo = null;

    #[ORM\Column(name: "DR_Regle", type: Types::SMALLINT, nullable: true)]
    private ?int $drRegle = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "CA_No", nullable: true)]
    private ?int $caNo = null;

    #[ORM\Column(name: "cbCA_No", nullable: true)]
    private ?int $cbcaNo = null;

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

    #[ORM\Column(name: "cbHash", type: Types::BINARY, nullable: true)]
    private $cbhash = null;

    #[ORM\Column(name: "cbHashVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $cbhashversion = 1;

    #[ORM\Column(name: "cbHashDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbhashdate = null;

    #[ORM\Column(name: "cbHashOrder", nullable: true)]
    private ?int $cbhashorder = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDrNo(): ?int
    {
        return $this->drNo;
    }

    public function setDrNo(?int $drNo): static
    {
        $this->drNo = $drNo;

        return $this;
    }

    public function getDoDomaine(): ?int
    {
        return $this->doDomaine;
    }

    public function setDoDomaine(?int $doDomaine): static
    {
        $this->doDomaine = $doDomaine;

        return $this;
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

    public function getDrTyperegl(): ?int
    {
        return $this->drTyperegl;
    }

    public function setDrTyperegl(?int $drTyperegl): static
    {
        $this->drTyperegl = $drTyperegl;

        return $this;
    }

    public function getDrDate(): ?\DateTimeInterface
    {
        return $this->drDate;
    }

    public function setDrDate(?\DateTimeInterface $drDate): static
    {
        $this->drDate = $drDate;

        return $this;
    }

    public function getDrLibelle(): ?string
    {
        return $this->drLibelle;
    }

    public function setDrLibelle(?string $drLibelle): static
    {
        $this->drLibelle = $drLibelle;

        return $this;
    }

    public function getDrPourcent(): ?string
    {
        return $this->drPourcent;
    }

    public function setDrPourcent(?string $drPourcent): static
    {
        $this->drPourcent = $drPourcent;

        return $this;
    }

    public function getDrMontant(): ?string
    {
        return $this->drMontant;
    }

    public function setDrMontant(?string $drMontant): static
    {
        $this->drMontant = $drMontant;

        return $this;
    }

    public function getDrMontantdev(): ?string
    {
        return $this->drMontantdev;
    }

    public function setDrMontantdev(?string $drMontantdev): static
    {
        $this->drMontantdev = $drMontantdev;

        return $this;
    }

    public function getDrEquil(): ?int
    {
        return $this->drEquil;
    }

    public function setDrEquil(?int $drEquil): static
    {
        $this->drEquil = $drEquil;

        return $this;
    }

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(?int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getCbecNo(): ?int
    {
        return $this->cbecNo;
    }

    public function setCbecNo(?int $cbecNo): static
    {
        $this->cbecNo = $cbecNo;

        return $this;
    }

    public function getDrRegle(): ?int
    {
        return $this->drRegle;
    }

    public function setDrRegle(?int $drRegle): static
    {
        $this->drRegle = $drRegle;

        return $this;
    }

    public function getNReglement(): ?int
    {
        return $this->nReglement;
    }

    public function setNReglement(?int $nReglement): static
    {
        $this->nReglement = $nReglement;

        return $this;
    }

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(?int $caNo): static
    {
        $this->caNo = $caNo;

        return $this;
    }

    public function getCbcaNo(): ?int
    {
        return $this->cbcaNo;
    }

    public function setCbcaNo(?int $cbcaNo): static
    {
        $this->cbcaNo = $cbcaNo;

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

    public function getCbhash()
    {
        return $this->cbhash;
    }

    public function setCbhash($cbhash): static
    {
        $this->cbhash = $cbhash;

        return $this;
    }

    public function getCbhashversion(): ?int
    {
        return $this->cbhashversion;
    }

    public function setCbhashversion(?int $cbhashversion): static
    {
        $this->cbhashversion = $cbhashversion;

        return $this;
    }

    public function getCbhashdate(): ?\DateTimeInterface
    {
        return $this->cbhashdate;
    }

    public function setCbhashdate(?\DateTimeInterface $cbhashdate): static
    {
        $this->cbhashdate = $cbhashdate;

        return $this;
    }

    public function getCbhashorder(): ?int
    {
        return $this->cbhashorder;
    }

    public function setCbhashorder(?int $cbhashorder): static
    {
        $this->cbhashorder = $cbhashorder;

        return $this;
    }
}
