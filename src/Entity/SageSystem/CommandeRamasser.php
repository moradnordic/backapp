<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\CommandeRamasserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'commande_ramasser')]
#[ORM\Entity(repositoryClass: CommandeRamasserRepository::class)]
class CommandeRamasser
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ref", length: 50, nullable: true)]
    private ?string $ref = null;

    #[ORM\Column(name: "do_piece", length: 50, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "checked", nullable: true)]
    private ?bool $checked = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): static
    {
        $this->ref = $ref;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    public function setChecked(?bool $checked): static
    {
        $this->checked = $checked;

        return $this;
    }
}
