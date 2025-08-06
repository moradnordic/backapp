<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbltarifEnteteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTarif_Entete')]
#[ORM\Entity(repositoryClass: TbltarifEnteteRepository::class)]
class TbltarifEntete
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "DU", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $du = null;

    #[ORM\Column(name: "Actif")]
    private ?bool $actif = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getDu(): ?\DateTimeInterface
    {
        return $this->du;
    }

    public function setDu(?\DateTimeInterface $du): static
    {
        $this->du = $du;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): static
    {
        $this->actif = $actif;

        return $this;
    }
}
