<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ProfilepageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'profilePage')]
#[ORM\Entity(repositoryClass: ProfilepageRepository::class)]
class Profilepage
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "pageId")]
    private ?int $pageid = null;

    #[ORM\Column(name: "profileId")]
    private ?int $profileid = null;

    #[ORM\Column(name: "typePermission")]
    private ?int $typepermission = null;

    #[ORM\Column(name: "observation", length: -1, nullable: true)]
    private ?string $observation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPageid(): ?int
    {
        return $this->pageid;
    }

    public function setPageid(int $pageid): static
    {
        $this->pageid = $pageid;

        return $this;
    }

    public function getProfileid(): ?int
    {
        return $this->profileid;
    }

    public function setProfileid(int $profileid): static
    {
        $this->profileid = $profileid;

        return $this;
    }

    public function getTypepermission(): ?int
    {
        return $this->typepermission;
    }

    public function setTypepermission(int $typepermission): static
    {
        $this->typepermission = $typepermission;

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
