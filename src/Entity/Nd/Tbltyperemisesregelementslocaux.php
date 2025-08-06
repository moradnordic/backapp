<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltyperemisesregelementslocauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeRemisesRegelementsLocaux')]
#[ORM\Entity(repositoryClass: TbltyperemisesregelementslocauxRepository::class)]
class Tbltyperemisesregelementslocaux
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeRemise", length: 255, nullable: true)]
    private ?string $typeremise = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTyperemise(): ?string
    {
        return $this->typeremise;
    }

    public function setTyperemise(?string $typeremise): static
    {
        $this->typeremise = $typeremise;

        return $this;
    }
}
