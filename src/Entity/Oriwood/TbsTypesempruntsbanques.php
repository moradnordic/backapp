<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbsTypesempruntsbanquesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbS_TypesEmpruntsBanques')]
#[ORM\Entity(repositoryClass: TbsTypesempruntsbanquesRepository::class)]
class TbsTypesempruntsbanques
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeEpreunt", length: 255, nullable: true)]
    private ?string $typeepreunt = null;

    #[ORM\Column(name: "DeviseFrs")]
    private ?bool $devisefrs = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypeepreunt(): ?string
    {
        return $this->typeepreunt;
    }

    public function setTypeepreunt(?string $typeepreunt): static
    {
        $this->typeepreunt = $typeepreunt;

        return $this;
    }

    public function getDevisefrs(): ?bool
    {
        return $this->devisefrs;
    }

    public function setDevisefrs(bool $devisefrs): static
    {
        $this->devisefrs = $devisefrs;

        return $this;
    }
}
