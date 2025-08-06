<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblprestatairesextRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblPrestatairesExt')]
#[ORM\Entity(repositoryClass: TblprestatairesextRepository::class)]
class Tblprestatairesext
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Def", length: 255, nullable: true)]
    private ?string $def = null;

    #[ORM\Column(name: "ID", length: 255, nullable: true)]
    private ?string $id = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getDef(): ?string
    {
        return $this->def;
    }

    public function setDef(?string $def): static
    {
        $this->def = $def;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;

        return $this;
    }
}
