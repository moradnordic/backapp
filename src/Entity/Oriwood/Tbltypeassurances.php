<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbltypeassurancesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeAssurances')]
#[ORM\Entity(repositoryClass: TbltypeassurancesRepository::class)]
class Tbltypeassurances
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeAssurance", length: 255, nullable: true)]
    private ?string $typeassurance = null;

    #[ORM\Column(name: "TypeBien", nullable: true)]
    private ?int $typebien = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypeassurance(): ?string
    {
        return $this->typeassurance;
    }

    public function setTypeassurance(?string $typeassurance): static
    {
        $this->typeassurance = $typeassurance;

        return $this;
    }

    public function getTypebien(): ?int
    {
        return $this->typebien;
    }

    public function setTypebien(?int $typebien): static
    {
        $this->typebien = $typebien;

        return $this;
    }
}
