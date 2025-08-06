<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbsUnitesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbS_Unites')]
#[ORM\Entity(repositoryClass: TbsUnitesRepository::class)]
class TbsUnites
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Unite", length: 255, nullable: true)]
    private ?string $unite = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(?string $unite): static
    {
        $this->unite = $unite;

        return $this;
    }
}
