<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\SocieteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'societe')]
#[ORM\Entity(repositoryClass: SocieteRepository::class)]
class Societe
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "SOC_NO", nullable: true)]
    private ?int $socNo = null;

    #[ORM\Column(name: "SOC_Intitule", length: -1, nullable: true)]
    private ?string $socIntitule = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocNo(): ?int
    {
        return $this->socNo;
    }

    public function setSocNo(?int $socNo): static
    {
        $this->socNo = $socNo;

        return $this;
    }

    public function getSocIntitule(): ?string
    {
        return $this->socIntitule;
    }

    public function setSocIntitule(?string $socIntitule): static
    {
        $this->socIntitule = $socIntitule;

        return $this;
    }
}
