<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TypecomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'TypeCom')]
#[ORM\Entity(repositoryClass: TypecomRepository::class)]
class Typecom
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
