<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblcaissetypeoperationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCaisseTypeOperations')]
#[ORM\Entity(repositoryClass: TblcaissetypeoperationsRepository::class)]
class Tblcaissetypeoperations
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeOperation", length: 255, nullable: true)]
    private ?string $typeoperation = null;

    #[ORM\Column(name: "Multiplicateur", nullable: true)]
    private ?int $multiplicateur = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypeoperation(): ?string
    {
        return $this->typeoperation;
    }

    public function setTypeoperation(?string $typeoperation): static
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    public function getMultiplicateur(): ?int
    {
        return $this->multiplicateur;
    }

    public function setMultiplicateur(?int $multiplicateur): static
    {
        $this->multiplicateur = $multiplicateur;

        return $this;
    }
}
