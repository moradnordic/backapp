<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbloperateurtelecomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblOperateurTelecom')]
#[ORM\Entity(repositoryClass: TbloperateurtelecomRepository::class)]
class Tbloperateurtelecom
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "NomOperateur", length: 255, nullable: true)]
    private ?string $nomoperateur = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNomoperateur(): ?string
    {
        return $this->nomoperateur;
    }

    public function setNomoperateur(?string $nomoperateur): static
    {
        $this->nomoperateur = $nomoperateur;

        return $this;
    }
}
