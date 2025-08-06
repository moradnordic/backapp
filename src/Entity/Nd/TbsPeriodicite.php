<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbsPeriodiciteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbs_Periodicite')]
#[ORM\Entity(repositoryClass: TbsPeriodiciteRepository::class)]
class TbsPeriodicite
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Periodicite", length: 255, nullable: true)]
    private ?string $periodicite = null;

    #[ORM\Column(name: "NombreMois", length: 255, nullable: true)]
    private ?string $nombremois = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getPeriodicite(): ?string
    {
        return $this->periodicite;
    }

    public function setPeriodicite(?string $periodicite): static
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    public function getNombremois(): ?string
    {
        return $this->nombremois;
    }

    public function setNombremois(?string $nombremois): static
    {
        $this->nombremois = $nombremois;

        return $this;
    }
}
