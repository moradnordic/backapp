<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblregnaissanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblRegNaissance')]
#[ORM\Entity(repositoryClass: TblregnaissanceRepository::class)]
class Tblregnaissance
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "GenerePar", length: 255, nullable: true)]
    private ?string $generepar = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getGenerepar(): ?string
    {
        return $this->generepar;
    }

    public function setGenerepar(?string $generepar): static
    {
        $this->generepar = $generepar;

        return $this;
    }
}
