<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblbiensimmeubleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblBiensImmeuble')]
#[ORM\Entity(repositoryClass: TblbiensimmeubleRepository::class)]
class Tblbiensimmeuble
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "BienImmeuble", length: 255, nullable: true)]
    private ?string $bienimmeuble = null;

    #[ORM\Column(name: "Locataire", nullable: true)]
    private ?int $locataire = null;

    #[ORM\Column(name: "TypeBien", length: 255, nullable: true)]
    private ?string $typebien = null;

    #[ORM\Column(name: "Adresse", length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: "MontantLoyer", nullable: true)]
    private ?int $montantloyer = null;

    #[ORM\Column(name: "Proprio", length: 255, nullable: true)]
    private ?string $proprio = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getBienimmeuble(): ?string
    {
        return $this->bienimmeuble;
    }

    public function setBienimmeuble(?string $bienimmeuble): static
    {
        $this->bienimmeuble = $bienimmeuble;

        return $this;
    }

    public function getLocataire(): ?int
    {
        return $this->locataire;
    }

    public function setLocataire(?int $locataire): static
    {
        $this->locataire = $locataire;

        return $this;
    }

    public function getTypebien(): ?string
    {
        return $this->typebien;
    }

    public function setTypebien(?string $typebien): static
    {
        $this->typebien = $typebien;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMontantloyer(): ?int
    {
        return $this->montantloyer;
    }

    public function setMontantloyer(?int $montantloyer): static
    {
        $this->montantloyer = $montantloyer;

        return $this;
    }

    public function getProprio(): ?string
    {
        return $this->proprio;
    }

    public function setProprio(?string $proprio): static
    {
        $this->proprio = $proprio;

        return $this;
    }
}
