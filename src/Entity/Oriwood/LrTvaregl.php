<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrTvareglRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_TvaRegl')]
#[ORM\Entity(repositoryClass: LrTvareglRepository::class)]
class LrTvaregl
{
    #[ORM\Column(name: "Mouv_Ent")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $mouvEnt = null;

    #[ORM\Column(name: "LR_ENT_No", length: 50, nullable: true)]
    private ?string $lrEntNo = null;

    #[ORM\Column(name: "LR_Montant", nullable: true)]
    private ?float $lrMontant = null;

    #[ORM\Column(name: "LR_Piece", length: 200, nullable: true)]
    private ?string $lrPiece = null;

    #[ORM\Column(name: "LR_EC_NO", length: 100, nullable: true)]
    private ?string $lrEcNo = null;

    #[ORM\Column(name: "LR_ModePaie", length: 100, nullable: true)]
    private ?string $lrModepaie = null;

    #[ORM\Column(name: "LR_ECH_Ref_Piece", length: 100, nullable: true)]
    private ?string $lrEchRefPiece = null;

    #[ORM\Column(name: "LR_Date_Fact", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lrDateFact = null;

    #[ORM\Column(name: "LR_Type_Mod", length: 100, nullable: true)]
    private ?string $lrTypeMod = null;

    public function getMouvEnt(): ?int
    {
        return $this->mouvEnt;
    }

    public function getLrEntNo(): ?string
    {
        return $this->lrEntNo;
    }

    public function setLrEntNo(?string $lrEntNo): static
    {
        $this->lrEntNo = $lrEntNo;

        return $this;
    }

    public function getLrMontant(): ?float
    {
        return $this->lrMontant;
    }

    public function setLrMontant(?float $lrMontant): static
    {
        $this->lrMontant = $lrMontant;

        return $this;
    }

    public function getLrPiece(): ?string
    {
        return $this->lrPiece;
    }

    public function setLrPiece(?string $lrPiece): static
    {
        $this->lrPiece = $lrPiece;

        return $this;
    }

    public function getLrEcNo(): ?string
    {
        return $this->lrEcNo;
    }

    public function setLrEcNo(?string $lrEcNo): static
    {
        $this->lrEcNo = $lrEcNo;

        return $this;
    }

    public function getLrModepaie(): ?string
    {
        return $this->lrModepaie;
    }

    public function setLrModepaie(?string $lrModepaie): static
    {
        $this->lrModepaie = $lrModepaie;

        return $this;
    }

    public function getLrEchRefPiece(): ?string
    {
        return $this->lrEchRefPiece;
    }

    public function setLrEchRefPiece(?string $lrEchRefPiece): static
    {
        $this->lrEchRefPiece = $lrEchRefPiece;

        return $this;
    }

    public function getLrDateFact(): ?\DateTimeInterface
    {
        return $this->lrDateFact;
    }

    public function setLrDateFact(?\DateTimeInterface $lrDateFact): static
    {
        $this->lrDateFact = $lrDateFact;

        return $this;
    }

    public function getLrTypeMod(): ?string
    {
        return $this->lrTypeMod;
    }

    public function setLrTypeMod(?string $lrTypeMod): static
    {
        $this->lrTypeMod = $lrTypeMod;

        return $this;
    }
}
