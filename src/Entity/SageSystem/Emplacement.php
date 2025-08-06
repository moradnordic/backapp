<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\EmplacementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Emplacement')]
#[ORM\Entity(repositoryClass: EmplacementRepository::class)]
class Emplacement
{
    #[ORM\Column(name: "Id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Rangee", length: 2, nullable: true)]
    private ?string $rangee = null;

    #[ORM\Column(name: "Etage", length: 2, nullable: true)]
    private ?string $etage = null;

    #[ORM\Column(name: "Cote", length: 2, nullable: true)]
    private ?string $cote = null;

    #[ORM\Column(name: "Direction", length: 2, nullable: true)]
    private ?string $direction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRangee(): ?string
    {
        return $this->rangee;
    }

    public function setRangee(?string $rangee): static
    {
        $this->rangee = $rangee;

        return $this;
    }

    public function getEtage(): ?string
    {
        return $this->etage;
    }

    public function setEtage(?string $etage): static
    {
        $this->etage = $etage;

        return $this;
    }

    public function getCote(): ?string
    {
        return $this->cote;
    }

    public function setCote(?string $cote): static
    {
        $this->cote = $cote;

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): static
    {
        $this->direction = $direction;

        return $this;
    }
}
