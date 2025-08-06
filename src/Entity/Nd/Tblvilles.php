<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblvillesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblVilles')]
#[ORM\Entity(repositoryClass: TblvillesRepository::class)]
class Tblvilles
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Ville", length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(name: "Pays", length: 255, nullable: true)]
    private ?string $pays = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }
}
