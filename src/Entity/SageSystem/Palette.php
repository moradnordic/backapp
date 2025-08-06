<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\PaletteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'palette')]
#[ORM\Entity(repositoryClass: PaletteRepository::class)]
class Palette
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "reference", length: 50, nullable: true)]
    private ?string $reference = null;

    #[ORM\Column(name: "inventeur", length: 50, nullable: true)]
    private ?string $inventeur = null;

    #[ORM\Column(name: "emplacement", length: 50, nullable: true)]
    private ?string $emplacement = null;

    #[ORM\Column(name: "status", length: 50, nullable: true)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getInventeur(): ?string
    {
        return $this->inventeur;
    }

    public function setInventeur(?string $inventeur): static
    {
        $this->inventeur = $inventeur;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(?string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
