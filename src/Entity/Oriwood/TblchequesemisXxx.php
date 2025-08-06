<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblchequesemisXxxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblChequesEmis_xxx')]
#[ORM\Entity(repositoryClass: TblchequesemisXxxRepository::class)]
class TblchequesemisXxx
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "NotreBanque", length: 255, nullable: true)]
    private ?string $notrebanque = null;

    #[ORM\Column(name: "Tireur", length: 255, nullable: true)]
    private ?string $tireur = null;

    #[ORM\Column(name: "Echeance", length: 255, nullable: true)]
    private ?string $echeance = null;

    #[ORM\Column(name: "DateSignature", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datesignature = null;

    #[ORM\Column(name: "SignerPar", length: 255, nullable: true)]
    private ?string $signerpar = null;

    #[ORM\Column(name: "NumeroCheque", length: 255, nullable: true)]
    private ?string $numerocheque = null;

    #[ORM\Column(name: "ScanCheque", length: 255, nullable: true)]
    private ?string $scancheque = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNotrebanque(): ?string
    {
        return $this->notrebanque;
    }

    public function setNotrebanque(?string $notrebanque): static
    {
        $this->notrebanque = $notrebanque;

        return $this;
    }

    public function getTireur(): ?string
    {
        return $this->tireur;
    }

    public function setTireur(?string $tireur): static
    {
        $this->tireur = $tireur;

        return $this;
    }

    public function getEcheance(): ?string
    {
        return $this->echeance;
    }

    public function setEcheance(?string $echeance): static
    {
        $this->echeance = $echeance;

        return $this;
    }

    public function getDatesignature(): ?\DateTimeInterface
    {
        return $this->datesignature;
    }

    public function setDatesignature(?\DateTimeInterface $datesignature): static
    {
        $this->datesignature = $datesignature;

        return $this;
    }

    public function getSignerpar(): ?string
    {
        return $this->signerpar;
    }

    public function setSignerpar(?string $signerpar): static
    {
        $this->signerpar = $signerpar;

        return $this;
    }

    public function getNumerocheque(): ?string
    {
        return $this->numerocheque;
    }

    public function setNumerocheque(?string $numerocheque): static
    {
        $this->numerocheque = $numerocheque;

        return $this;
    }

    public function getScancheque(): ?string
    {
        return $this->scancheque;
    }

    public function setScancheque(?string $scancheque): static
    {
        $this->scancheque = $scancheque;

        return $this;
    }
}
