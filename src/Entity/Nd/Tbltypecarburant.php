<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltypecarburantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeCarburant')]
#[ORM\Entity(repositoryClass: TbltypecarburantRepository::class)]
class Tbltypecarburant
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeCarburant", length: 255, nullable: true)]
    private ?string $typecarburant = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypecarburant(): ?string
    {
        return $this->typecarburant;
    }

    public function setTypecarburant(?string $typecarburant): static
    {
        $this->typecarburant = $typecarburant;

        return $this;
    }
}
