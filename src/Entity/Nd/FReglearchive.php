<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FReglearchiveRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_REGLEARCHIVE')]
#[ORM\Index(name: 'IRA_PIECE', columns: ['N_Reglement'])]
#[ORM\Index(name: 'IRA_CAISSE', columns: ['CA_No'])]
#[ORM\Index(name: 'FKIA_F_REGLEARCHIVE_TA_Piece', columns: ['TA_Piece'])]
#[ORM\Index(name: 'FKIA_F_REGLEARCHIVE_CA_No', columns: ['cbCA_No'])]
#[ORM\Entity(repositoryClass: FReglearchiveRepository::class)]
class FReglearchive
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "TA_Piece", length: 9)]
    private ?string $taPiece = null;

    #[ORM\Column(name: "cbTA_Piece", type: Types::BINARY, nullable: true)]
    private $cbtaPiece = null;

    #[ORM\Column(name: "RA_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $raMontant = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "RA_MontantDev", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $raMontantdev = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "RA_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $raDate = null;

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

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
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

    public function getRaMontant(): ?string
    {
        return $this->raMontant;
    }

    public function setRaMontant(?string $raMontant): static
    {
        $this->raMontant = $raMontant;

        return $this;
    }

    public function getNDevise(): ?int
    {
        return $this->nDevise;
    }

    public function setNDevise(?int $nDevise): static
    {
        $this->nDevise = $nDevise;

        return $this;
    }

    public function getRaMontantdev(): ?string
    {
        return $this->raMontantdev;
    }

    public function setRaMontantdev(?string $raMontantdev): static
    {
        $this->raMontantdev = $raMontantdev;

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

    public function getRaDate(): ?\DateTimeInterface
    {
        return $this->raDate;
    }

    public function setRaDate(?\DateTimeInterface $raDate): static
    {
        $this->raDate = $raDate;

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
}
