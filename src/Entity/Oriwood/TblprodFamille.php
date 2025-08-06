<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblprodFamilleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblProd_Famille')]
#[ORM\Entity(repositoryClass: TblprodFamilleRepository::class)]
class TblprodFamille
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "FamilleProd", length: 255, nullable: true)]
    private ?string $familleprod = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getFamilleprod(): ?string
    {
        return $this->familleprod;
    }

    public function setFamilleprod(?string $familleprod): static
    {
        $this->familleprod = $familleprod;

        return $this;
    }
}
