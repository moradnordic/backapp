<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblmodepaiementfrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblModePaiementFrs')]
#[ORM\Entity(repositoryClass: TblmodepaiementfrsRepository::class)]
class Tblmodepaiementfrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "ModePaiementFrs", length: 255, nullable: true)]
    private ?string $modepaiementfrs = null;

    #[ORM\Column(name: "Delai", nullable: true)]
    private ?int $delai = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getModepaiementfrs(): ?string
    {
        return $this->modepaiementfrs;
    }

    public function setModepaiementfrs(?string $modepaiementfrs): static
    {
        $this->modepaiementfrs = $modepaiementfrs;

        return $this;
    }

    public function getDelai(): ?int
    {
        return $this->delai;
    }

    public function setDelai(?int $delai): static
    {
        $this->delai = $delai;

        return $this;
    }
}
