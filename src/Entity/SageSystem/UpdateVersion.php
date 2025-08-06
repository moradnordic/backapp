<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\UpdateVersionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'update_version')]
#[ORM\Entity(repositoryClass: UpdateVersionRepository::class)]
class UpdateVersion
{
    #[ORM\Column(name: "ID")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "UpdateVersion", length: 50, nullable: true)]
    private ?string $updateversion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUpdateversion(): ?string
    {
        return $this->updateversion;
    }

    public function setUpdateversion(?string $updateversion): static
    {
        $this->updateversion = $updateversion;

        return $this;
    }
}
