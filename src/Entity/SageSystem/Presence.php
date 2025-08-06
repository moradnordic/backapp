<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\PresenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'presence')]
#[ORM\Entity(repositoryClass: PresenceRepository::class)]
class Presence
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "idrapport", nullable: true)]
    private ?int $idrapport = null;

    #[ORM\Column(name: "idUtilisateur", nullable: true)]
    private ?int $idutilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdrapport(): ?int
    {
        return $this->idrapport;
    }

    public function setIdrapport(?int $idrapport): static
    {
        $this->idrapport = $idrapport;

        return $this;
    }

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?int $idutilisateur): static
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }
}
