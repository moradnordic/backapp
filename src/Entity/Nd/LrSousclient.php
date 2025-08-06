<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrSousclientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_SousClient')]
#[ORM\Entity(repositoryClass: LrSousclientRepository::class)]
class LrSousclient
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Nom", length: 150, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "Ville", length: 150, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(name: "ICE", length: 150, nullable: true)]
    private ?string $ice = null;

    #[ORM\Column(name: "Type_Cli", nullable: true)]
    private ?int $typeCli = null;

    #[ORM\Column(name: "Civilité", nullable: true)]
    private ?int $civilité = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getIce(): ?string
    {
        return $this->ice;
    }

    public function setIce(?string $ice): static
    {
        $this->ice = $ice;

        return $this;
    }

    public function getTypeCli(): ?int
    {
        return $this->typeCli;
    }

    public function setTypeCli(?int $typeCli): static
    {
        $this->typeCli = $typeCli;

        return $this;
    }

    public function getCivilité(): ?int
    {
        return $this->civilité;
    }

    public function setCivilité(?int $civilité): static
    {
        $this->civilité = $civilité;

        return $this;
    }
}
