<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbltypecomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeCom')]
#[ORM\Entity(repositoryClass: TbltypecomRepository::class)]
class Tbltypecom
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Type", length: 255, nullable: true)]
    private ?string $type = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
