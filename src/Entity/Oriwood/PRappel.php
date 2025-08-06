<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PRappelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_RAPPEL')]
#[ORM\Entity(repositoryClass: PRappelRepository::class)]
class PRappel
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Intitule", length: 35, nullable: true)]
    private ?string $rIntitule = null;

    #[ORM\Column(name: "R_Debut", type: Types::SMALLINT, nullable: true)]
    private ?int $rDebut = null;

    #[ORM\Column(name: "R_Fin", type: Types::SMALLINT, nullable: true)]
    private ?int $rFin = null;

    #[ORM\Column(name: "R_NbJours", type: Types::SMALLINT, nullable: true)]
    private ?int $rNbjours = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRIntitule(): ?string
    {
        return $this->rIntitule;
    }

    public function setRIntitule(?string $rIntitule): static
    {
        $this->rIntitule = $rIntitule;

        return $this;
    }

    public function getRDebut(): ?int
    {
        return $this->rDebut;
    }

    public function setRDebut(?int $rDebut): static
    {
        $this->rDebut = $rDebut;

        return $this;
    }

    public function getRFin(): ?int
    {
        return $this->rFin;
    }

    public function setRFin(?int $rFin): static
    {
        $this->rFin = $rFin;

        return $this;
    }

    public function getRNbjours(): ?int
    {
        return $this->rNbjours;
    }

    public function setRNbjours(?int $rNbjours): static
    {
        $this->rNbjours = $rNbjours;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
