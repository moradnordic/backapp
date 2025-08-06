<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltypebienRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeBien')]
#[ORM\Entity(repositoryClass: TbltypebienRepository::class)]
class Tbltypebien
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TB", length: 255, nullable: true)]
    private ?string $tb = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTb(): ?string
    {
        return $this->tb;
    }

    public function setTb(?string $tb): static
    {
        $this->tb = $tb;

        return $this;
    }
}
