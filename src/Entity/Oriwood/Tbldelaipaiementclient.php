<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbldelaipaiementclientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbldelaiPaiementClient')]
#[ORM\Entity(repositoryClass: TbldelaipaiementclientRepository::class)]
class Tbldelaipaiementclient
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Delai", length: 255, nullable: true)]
    private ?string $delai = null;

    #[ORM\Column(name: "Supplement_Pourcentage", nullable: true)]
    private ?float $supplementPourcentage = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getDelai(): ?string
    {
        return $this->delai;
    }

    public function setDelai(?string $delai): static
    {
        $this->delai = $delai;

        return $this;
    }

    public function getSupplementPourcentage(): ?float
    {
        return $this->supplementPourcentage;
    }

    public function setSupplementPourcentage(?float $supplementPourcentage): static
    {
        $this->supplementPourcentage = $supplementPourcentage;

        return $this;
    }
}
