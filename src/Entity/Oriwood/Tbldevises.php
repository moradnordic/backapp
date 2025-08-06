<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbldevisesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblDevises')]
#[ORM\Entity(repositoryClass: TbldevisesRepository::class)]
class Tbldevises
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Devise", length: 255, nullable: true)]
    private ?string $devise = null;

    #[ORM\Column(name: "TypeFrs", nullable: true)]
    private ?int $typefrs = null;

    #[ORM\Column(name: "Cours", nullable: true)]
    private ?float $cours = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getDevise(): ?string
    {
        return $this->devise;
    }

    public function setDevise(?string $devise): static
    {
        $this->devise = $devise;

        return $this;
    }

    public function getTypefrs(): ?int
    {
        return $this->typefrs;
    }

    public function setTypefrs(?int $typefrs): static
    {
        $this->typefrs = $typefrs;

        return $this;
    }

    public function getCours(): ?float
    {
        return $this->cours;
    }

    public function setCours(?float $cours): static
    {
        $this->cours = $cours;

        return $this;
    }
}
