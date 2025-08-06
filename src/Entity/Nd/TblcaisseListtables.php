<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblcaisseListtablesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCaisse_ListTables')]
#[ORM\Entity(repositoryClass: TblcaisseListtablesRepository::class)]
class TblcaisseListtables
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "NomTable", length: 255, nullable: true)]
    private ?string $nomtable = null;

    #[ORM\Column(name: "Responsable", nullable: true)]
    private ?int $responsable = null;

    #[ORM\Column(name: "Definition", length: 255, nullable: true)]
    private ?string $definition = null;

    #[ORM\Column(name: "PeuVerserALaBanque")]
    private ?bool $peuverseralabanque = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNomtable(): ?string
    {
        return $this->nomtable;
    }

    public function setNomtable(?string $nomtable): static
    {
        $this->nomtable = $nomtable;

        return $this;
    }

    public function getResponsable(): ?int
    {
        return $this->responsable;
    }

    public function setResponsable(?int $responsable): static
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getDefinition(): ?string
    {
        return $this->definition;
    }

    public function setDefinition(?string $definition): static
    {
        $this->definition = $definition;

        return $this;
    }

    public function getPeuverseralabanque(): ?bool
    {
        return $this->peuverseralabanque;
    }

    public function setPeuverseralabanque(bool $peuverseralabanque): static
    {
        $this->peuverseralabanque = $peuverseralabanque;

        return $this;
    }
}
