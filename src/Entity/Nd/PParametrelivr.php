<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PParametrelivrRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_PARAMETRELIVR')]
#[ORM\Entity(repositoryClass: PParametrelivrRepository::class)]
class PParametrelivr
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PL_Priorite1", type: Types::SMALLINT, nullable: true)]
    private ?int $plPriorite1 = null;

    #[ORM\Column(name: "PL_Priorite2", type: Types::SMALLINT, nullable: true)]
    private ?int $plPriorite2 = null;

    #[ORM\Column(name: "PL_Priorite3", type: Types::SMALLINT, nullable: true)]
    private ?int $plPriorite3 = null;

    #[ORM\Column(name: "PL_Duree", type: Types::SMALLINT, nullable: true)]
    private ?int $plDuree = null;

    #[ORM\Column(name: "PL_TypeDuree", type: Types::SMALLINT, nullable: true)]
    private ?int $plTypeduree = null;

    #[ORM\Column(name: "PL_Reliquat", type: Types::SMALLINT, nullable: true)]
    private ?int $plReliquat = null;

    #[ORM\Column(name: "PL_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $plQuantite = null;

    #[ORM\Column(name: "PL_Generation", type: Types::SMALLINT, nullable: true)]
    private ?int $plGeneration = null;

    #[ORM\Column(name: "PL_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $plStatut = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPlPriorite1(): ?int
    {
        return $this->plPriorite1;
    }

    public function setPlPriorite1(?int $plPriorite1): static
    {
        $this->plPriorite1 = $plPriorite1;

        return $this;
    }

    public function getPlPriorite2(): ?int
    {
        return $this->plPriorite2;
    }

    public function setPlPriorite2(?int $plPriorite2): static
    {
        $this->plPriorite2 = $plPriorite2;

        return $this;
    }

    public function getPlPriorite3(): ?int
    {
        return $this->plPriorite3;
    }

    public function setPlPriorite3(?int $plPriorite3): static
    {
        $this->plPriorite3 = $plPriorite3;

        return $this;
    }

    public function getPlDuree(): ?int
    {
        return $this->plDuree;
    }

    public function setPlDuree(?int $plDuree): static
    {
        $this->plDuree = $plDuree;

        return $this;
    }

    public function getPlTypeduree(): ?int
    {
        return $this->plTypeduree;
    }

    public function setPlTypeduree(?int $plTypeduree): static
    {
        $this->plTypeduree = $plTypeduree;

        return $this;
    }

    public function getPlReliquat(): ?int
    {
        return $this->plReliquat;
    }

    public function setPlReliquat(?int $plReliquat): static
    {
        $this->plReliquat = $plReliquat;

        return $this;
    }

    public function getPlQuantite(): ?int
    {
        return $this->plQuantite;
    }

    public function setPlQuantite(?int $plQuantite): static
    {
        $this->plQuantite = $plQuantite;

        return $this;
    }

    public function getPlGeneration(): ?int
    {
        return $this->plGeneration;
    }

    public function setPlGeneration(?int $plGeneration): static
    {
        $this->plGeneration = $plGeneration;

        return $this;
    }

    public function getPlStatut(): ?int
    {
        return $this->plStatut;
    }

    public function setPlStatut(?int $plStatut): static
    {
        $this->plStatut = $plStatut;

        return $this;
    }
}
