<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblchiffredaffairescommemrciauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblChiffreDaffairesCommemrciaux')]
#[ORM\Entity(repositoryClass: TblchiffredaffairescommemrciauxRepository::class)]
class Tblchiffredaffairescommemrciaux
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Employe", nullable: true)]
    private ?float $employe = null;

    #[ORM\Column(name: "CATTC", nullable: true)]
    private ?float $cattc = null;

    #[ORM\Column(name: "CAHT", nullable: true)]
    private ?float $caht = null;

    #[ORM\Column(name: "EncoursTTC", nullable: true)]
    private ?float $encoursttc = null;

    #[ORM\Column(name: "CAHTEncaisseAceJours", nullable: true)]
    private ?float $cahtencaisseacejours = null;

    #[ORM\Column(name: "TotalEncaissementDuMOis", nullable: true)]
    private ?float $totalencaissementdumois = null;

    #[ORM\Column(name: "periode", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $periode = null;

    #[ORM\Column(name: "Impayes", nullable: true)]
    private ?float $impayes = null;

    #[ORM\Column(name: "BlNonCachetes", nullable: true)]
    private ?float $blnoncachetes = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getEmploye(): ?float
    {
        return $this->employe;
    }

    public function setEmploye(?float $employe): static
    {
        $this->employe = $employe;

        return $this;
    }

    public function getCattc(): ?float
    {
        return $this->cattc;
    }

    public function setCattc(?float $cattc): static
    {
        $this->cattc = $cattc;

        return $this;
    }

    public function getCaht(): ?float
    {
        return $this->caht;
    }

    public function setCaht(?float $caht): static
    {
        $this->caht = $caht;

        return $this;
    }

    public function getEncoursttc(): ?float
    {
        return $this->encoursttc;
    }

    public function setEncoursttc(?float $encoursttc): static
    {
        $this->encoursttc = $encoursttc;

        return $this;
    }

    public function getCahtencaisseacejours(): ?float
    {
        return $this->cahtencaisseacejours;
    }

    public function setCahtencaisseacejours(?float $cahtencaisseacejours): static
    {
        $this->cahtencaisseacejours = $cahtencaisseacejours;

        return $this;
    }

    public function getTotalencaissementdumois(): ?float
    {
        return $this->totalencaissementdumois;
    }

    public function setTotalencaissementdumois(?float $totalencaissementdumois): static
    {
        $this->totalencaissementdumois = $totalencaissementdumois;

        return $this;
    }

    public function getPeriode(): ?\DateTimeInterface
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTimeInterface $periode): static
    {
        $this->periode = $periode;

        return $this;
    }

    public function getImpayes(): ?float
    {
        return $this->impayes;
    }

    public function setImpayes(?float $impayes): static
    {
        $this->impayes = $impayes;

        return $this;
    }

    public function getBlnoncachetes(): ?float
    {
        return $this->blnoncachetes;
    }

    public function setBlnoncachetes(?float $blnoncachetes): static
    {
        $this->blnoncachetes = $blnoncachetes;

        return $this;
    }
}
