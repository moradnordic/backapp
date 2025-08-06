<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ClientsNdOwRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'clients_ND_OW')]
#[ORM\Entity(repositoryClass: ClientsNdOwRepository::class)]
class ClientsNdOw
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "CT_Intitule", length: 255)]
    private ?string $ctIntitule = null;

    #[ORM\Column(name: "REF_ND", length: 255, nullable: true)]
    private ?string $refNd = null;

    #[ORM\Column(name: "REF_OW", length: 255, nullable: true)]
    private ?string $refOw = null;

    #[ORM\Column(name: "Active_Client", nullable: true)]
    private ?bool $activeClient = null;

    #[ORM\Column(name: "Restricted", nullable: true)]
    private ?bool $restricted = null;

    #[ORM\Column(name: "REFSystem", length: 60, nullable: true)]
    private ?string $refsystem = null;

    #[ORM\Column(name: "commercialId", nullable: true)]
    private ?int $commercialid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCtIntitule(): ?string
    {
        return $this->ctIntitule;
    }

    public function setCtIntitule(string $ctIntitule): static
    {
        $this->ctIntitule = $ctIntitule;

        return $this;
    }

    public function getRefNd(): ?string
    {
        return $this->refNd;
    }

    public function setRefNd(?string $refNd): static
    {
        $this->refNd = $refNd;

        return $this;
    }

    public function getRefOw(): ?string
    {
        return $this->refOw;
    }

    public function setRefOw(?string $refOw): static
    {
        $this->refOw = $refOw;

        return $this;
    }

    public function getActiveClient(): ?bool
    {
        return $this->activeClient;
    }

    public function setActiveClient(?bool $activeClient): static
    {
        $this->activeClient = $activeClient;

        return $this;
    }

    public function getRestricted(): ?bool
    {
        return $this->restricted;
    }

    public function setRestricted(?bool $restricted): static
    {
        $this->restricted = $restricted;

        return $this;
    }

    public function getRefsystem(): ?string
    {
        return $this->refsystem;
    }

    public function setRefsystem(?string $refsystem): static
    {
        $this->refsystem = $refsystem;

        return $this;
    }

    public function getCommercialid(): ?int
    {
        return $this->commercialid;
    }

    public function setCommercialid(?int $commercialid): static
    {
        $this->commercialid = $commercialid;

        return $this;
    }
}
