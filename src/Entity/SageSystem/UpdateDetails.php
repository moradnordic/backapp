<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\UpdateDetailsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'update_details')]
#[ORM\Entity(repositoryClass: UpdateDetailsRepository::class)]
class UpdateDetails
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "type", nullable: true)]
    private ?int $type = null;

    #[ORM\Column(name: "versionId", nullable: true)]
    private ?int $versionid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getVersionid(): ?int
    {
        return $this->versionid;
    }

    public function setVersionid(?int $versionid): static
    {
        $this->versionid = $versionid;

        return $this;
    }
}
