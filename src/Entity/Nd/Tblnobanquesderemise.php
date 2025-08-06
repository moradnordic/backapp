<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblnobanquesderemiseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblNoBanquesdeRemise')]
#[ORM\Entity(repositoryClass: TblnobanquesderemiseRepository::class)]
class Tblnobanquesderemise
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Banque", nullable: true)]
    private ?int $banque = null;

    #[ORM\Column(name: "Agence", length: 255, nullable: true)]
    private ?string $agence = null;

    #[ORM\Column(name: "Escompte")]
    private ?bool $escompte = null;

    #[ORM\Column(name: "Effets")]
    private ?bool $effets = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getBanque(): ?int
    {
        return $this->banque;
    }

    public function setBanque(?int $banque): static
    {
        $this->banque = $banque;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(?string $agence): static
    {
        $this->agence = $agence;

        return $this;
    }

    public function getEscompte(): ?bool
    {
        return $this->escompte;
    }

    public function setEscompte(bool $escompte): static
    {
        $this->escompte = $escompte;

        return $this;
    }

    public function getEffets(): ?bool
    {
        return $this->effets;
    }

    public function setEffets(bool $effets): static
    {
        $this->effets = $effets;

        return $this;
    }
}
