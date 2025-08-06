<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\TypepaimentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'TypePaiment')]
#[ORM\Entity(repositoryClass: TypepaimentRepository::class)]
class Typepaiment
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "name", length: 60, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(name: "abrv", length: 60, nullable: true)]
    private ?string $abrv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAbrv(): ?string
    {
        return $this->abrv;
    }

    public function setAbrv(?string $abrv): static
    {
        $this->abrv = $abrv;

        return $this;
    }
}
