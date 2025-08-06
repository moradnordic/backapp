<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\PaletteArrivageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'palette_arrivage')]
#[ORM\Entity(repositoryClass: PaletteArrivageRepository::class)]
class PaletteArrivage
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "id_palette")]
    private ?int $idPalette = null;

    #[ORM\Column(name: "id_arrivage")]
    private ?int $idArrivage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPalette(): ?int
    {
        return $this->idPalette;
    }

    public function setIdPalette(int $idPalette): static
    {
        $this->idPalette = $idPalette;

        return $this;
    }

    public function getIdArrivage(): ?int
    {
        return $this->idArrivage;
    }

    public function setIdArrivage(int $idArrivage): static
    {
        $this->idArrivage = $idArrivage;

        return $this;
    }
}
