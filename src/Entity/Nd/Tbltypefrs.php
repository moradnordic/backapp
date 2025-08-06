<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltypefrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeFrs')]
#[ORM\Entity(repositoryClass: TbltypefrsRepository::class)]
class Tbltypefrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeFrs", length: 255, nullable: true)]
    private ?string $typefrs = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypefrs(): ?string
    {
        return $this->typefrs;
    }

    public function setTypefrs(?string $typefrs): static
    {
        $this->typefrs = $typefrs;

        return $this;
    }
}
