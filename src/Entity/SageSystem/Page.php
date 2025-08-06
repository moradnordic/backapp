<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\PageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'page')]
#[ORM\Entity(repositoryClass: PageRepository::class)]
class Page
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nomPage", length: 50, nullable: true)]
    private ?string $nompage = null;

    #[ORM\Column(name: "observation", length: -1, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(name: "tri", nullable: true)]
    private ?int $tri = null;

    #[ORM\Column(name: "dossier", length: 100, nullable: true)]
    private ?string $dossier = null;

    #[ORM\Column(name: "society", nullable: true)]
    private ?int $society = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNompage(): ?string
    {
        return $this->nompage;
    }

    public function setNompage(?string $nompage): static
    {
        $this->nompage = $nompage;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getTri(): ?int
    {
        return $this->tri;
    }

    public function setTri(?int $tri): static
    {
        $this->tri = $tri;

        return $this;
    }

    public function getDossier(): ?string
    {
        return $this->dossier;
    }

    public function setDossier(?string $dossier): static
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getSociety(): ?int
    {
        return $this->society;
    }

    public function setSociety(?int $society): static
    {
        $this->society = $society;

        return $this;
    }
}
