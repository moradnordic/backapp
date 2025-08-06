<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\CaristeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cariste')]
#[ORM\Entity(repositoryClass: CaristeRepository::class)]
class Cariste
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "name", length: 255)]
    private ?string $name = null;

    #[ORM\Column(name: "disponible", nullable: true)]
    private ?bool $disponible = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(?bool $disponible): static
    {
        $this->disponible = $disponible;

        return $this;
    }
}
