<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblbanquesmarocainesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblBanquesMarocaines')]
#[ORM\Entity(repositoryClass: TblbanquesmarocainesRepository::class)]
class Tblbanquesmarocaines
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "NomBanquesMar", length: 255, nullable: true)]
    private ?string $nombanquesmar = null;

    #[ORM\Column(name: "AbrvBanquesMar", length: 255, nullable: true)]
    private ?string $abrvbanquesmar = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNombanquesmar(): ?string
    {
        return $this->nombanquesmar;
    }

    public function setNombanquesmar(?string $nombanquesmar): static
    {
        $this->nombanquesmar = $nombanquesmar;

        return $this;
    }

    public function getAbrvbanquesmar(): ?string
    {
        return $this->abrvbanquesmar;
    }

    public function setAbrvbanquesmar(?string $abrvbanquesmar): static
    {
        $this->abrvbanquesmar = $abrvbanquesmar;

        return $this;
    }
}
