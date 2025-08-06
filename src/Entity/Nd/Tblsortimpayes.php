<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblsortimpayesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblSortImpayes')]
#[ORM\Entity(repositoryClass: TblsortimpayesRepository::class)]
class Tblsortimpayes
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "sortImpaye", length: 255, nullable: true)]
    private ?string $sortimpaye = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getSortimpaye(): ?string
    {
        return $this->sortimpaye;
    }

    public function setSortimpaye(?string $sortimpaye): static
    {
        $this->sortimpaye = $sortimpaye;

        return $this;
    }
}
