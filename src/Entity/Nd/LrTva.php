<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrTvaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_TVA')]
#[ORM\Entity(repositoryClass: LrTvaRepository::class)]
class LrTva
{
    #[ORM\Column(name: "id_TVA")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $idTva = null;

    #[ORM\Column(name: "TAUX_TVA", type: Types::DECIMAL, precision: 18, scale: 0, nullable: true)]
    private ?string $tauxTva = null;

    #[ORM\Column(name: "COMPTE_TVA", length: 500, nullable: true)]
    private ?string $compteTva = null;

    #[ORM\Column(name: "INTIT_TVA", length: 500, nullable: true)]
    private ?string $intitTva = null;

    #[ORM\Column(name: "TYPE_TVA", length: 50, nullable: true)]
    private ?string $typeTva = null;

    public function getIdTva(): ?int
    {
        return $this->idTva;
    }

    public function getTauxTva(): ?string
    {
        return $this->tauxTva;
    }

    public function setTauxTva(?string $tauxTva): static
    {
        $this->tauxTva = $tauxTva;

        return $this;
    }

    public function getCompteTva(): ?string
    {
        return $this->compteTva;
    }

    public function setCompteTva(?string $compteTva): static
    {
        $this->compteTva = $compteTva;

        return $this;
    }

    public function getIntitTva(): ?string
    {
        return $this->intitTva;
    }

    public function setIntitTva(?string $intitTva): static
    {
        $this->intitTva = $intitTva;

        return $this;
    }

    public function getTypeTva(): ?string
    {
        return $this->typeTva;
    }

    public function setTypeTva(?string $typeTva): static
    {
        $this->typeTva = $typeTva;

        return $this;
    }
}
