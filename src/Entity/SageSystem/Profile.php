<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'profile')]
#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nomProfile", length: 25, nullable: true, options: ["fixed" => true])]
    private ?string $nomprofile = null;

    #[ORM\Column(name: "observation", length: 100, nullable: true)]
    private ?string $observation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomprofile(): ?string
    {
        return $this->nomprofile;
    }

    public function setNomprofile(?string $nomprofile): static
    {
        $this->nomprofile = $nomprofile;

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
}
