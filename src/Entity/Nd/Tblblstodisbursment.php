<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblblstodisbursmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblBLsToDisbursment')]
#[ORM\Entity(repositoryClass: TblblstodisbursmentRepository::class)]
class Tblblstodisbursment
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "NrBL", length: 255, nullable: true)]
    private ?string $nrbl = null;

    #[ORM\Column(name: "BLMontant", nullable: true)]
    private ?float $blmontant = null;

    #[ORM\Column(name: "BLDate", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $bldate = null;

    #[ORM\Column(name: "BLCommercial", nullable: true)]
    private ?int $blcommercial = null;

    #[ORM\Column(name: "OPCaisseNr", nullable: true)]
    private ?int $opcaissenr = null;

    #[ORM\Column(name: "OPWhichCaisse", nullable: true)]
    private ?int $opwhichcaisse = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNrbl(): ?string
    {
        return $this->nrbl;
    }

    public function setNrbl(?string $nrbl): static
    {
        $this->nrbl = $nrbl;

        return $this;
    }

    public function getBlmontant(): ?float
    {
        return $this->blmontant;
    }

    public function setBlmontant(?float $blmontant): static
    {
        $this->blmontant = $blmontant;

        return $this;
    }

    public function getBldate(): ?\DateTimeInterface
    {
        return $this->bldate;
    }

    public function setBldate(?\DateTimeInterface $bldate): static
    {
        $this->bldate = $bldate;

        return $this;
    }

    public function getBlcommercial(): ?int
    {
        return $this->blcommercial;
    }

    public function setBlcommercial(?int $blcommercial): static
    {
        $this->blcommercial = $blcommercial;

        return $this;
    }

    public function getOpcaissenr(): ?int
    {
        return $this->opcaissenr;
    }

    public function setOpcaissenr(?int $opcaissenr): static
    {
        $this->opcaissenr = $opcaissenr;

        return $this;
    }

    public function getOpwhichcaisse(): ?int
    {
        return $this->opwhichcaisse;
    }

    public function setOpwhichcaisse(?int $opwhichcaisse): static
    {
        $this->opwhichcaisse = $opwhichcaisse;

        return $this;
    }
}
