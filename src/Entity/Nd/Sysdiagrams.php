<?php

namespace App\Entity\Nd;

use App\Repository\Nd\SysdiagramsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'sysdiagrams')]
#[ORM\UniqueConstraint(name: 'UK_principal_name', columns: ['name'])]
#[ORM\Entity(repositoryClass: SysdiagramsRepository::class)]
class Sysdiagrams
{
    #[ORM\Column(name: "diagram_id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $diagramId = null;

    #[ORM\Column(name: "name", length: 128)]
    private ?string $name = null;

    #[ORM\Column(name: "principal_id")]
    private ?int $principalId = null;

    #[ORM\Column(name: "version", nullable: true)]
    private ?int $version = null;

    #[ORM\Column(name: "definition", type: Types::BINARY, nullable: true)]
    private $definition = null;

    public function getDiagramId(): ?int
    {
        return $this->diagramId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrincipalId(): ?int
    {
        return $this->principalId;
    }

    public function setPrincipalId(int $principalId): static
    {
        $this->principalId = $principalId;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getDefinition()
    {
        return $this->definition;
    }

    public function setDefinition($definition): static
    {
        $this->definition = $definition;

        return $this;
    }
}
