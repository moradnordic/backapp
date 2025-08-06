<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FPieceaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PIECEA')]
#[ORM\UniqueConstraint(name: 'IPA_LIGNE', columns: ['PA_Ligne'])]
#[ORM\Index(name: 'FKIA_F_PIECEA_PI_LIGNE', columns: ['PG_Ligne'])]
#[ORM\Entity(repositoryClass: FPieceaRepository::class)]
class FPiecea
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PI_No")]
    private ?int $piNo = null;

    #[ORM\Column(name: "PG_Ligne", type: Types::SMALLINT)]
    private ?int $pgLigne = null;

    #[ORM\Column(name: "PA_Ligne", type: Types::SMALLINT, nullable: true)]
    private ?int $paLigne = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "PA_TMontant", type: Types::SMALLINT, nullable: true)]
    private ?int $paTmontant = null;

    #[ORM\Column(name: "PA_VMontant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $paVmontant = null;

    #[ORM\Column(name: "PA_TQuantite", type: Types::SMALLINT, nullable: true)]
    private ?int $paTquantite = null;

    #[ORM\Column(name: "PA_VQuantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $paVquantite = null;

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

    public function getPiNo(): ?int
    {
        return $this->piNo;
    }

    public function setPiNo(int $piNo): static
    {
        $this->piNo = $piNo;

        return $this;
    }

    public function getPgLigne(): ?int
    {
        return $this->pgLigne;
    }

    public function setPgLigne(int $pgLigne): static
    {
        $this->pgLigne = $pgLigne;

        return $this;
    }

    public function getPaLigne(): ?int
    {
        return $this->paLigne;
    }

    public function setPaLigne(?int $paLigne): static
    {
        $this->paLigne = $paLigne;

        return $this;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(?int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

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

    public function getPaTmontant(): ?int
    {
        return $this->paTmontant;
    }

    public function setPaTmontant(?int $paTmontant): static
    {
        $this->paTmontant = $paTmontant;

        return $this;
    }

    public function getPaVmontant(): ?string
    {
        return $this->paVmontant;
    }

    public function setPaVmontant(?string $paVmontant): static
    {
        $this->paVmontant = $paVmontant;

        return $this;
    }

    public function getPaTquantite(): ?int
    {
        return $this->paTquantite;
    }

    public function setPaTquantite(?int $paTquantite): static
    {
        $this->paTquantite = $paTquantite;

        return $this;
    }

    public function getPaVquantite(): ?string
    {
        return $this->paVquantite;
    }

    public function setPaVquantite(?string $paVquantite): static
    {
        $this->paVquantite = $paVquantite;

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
