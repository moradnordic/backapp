<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblbaremetarifTypeclientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblBaremeTarif_TypeClient')]
#[ORM\Entity(repositoryClass: TblbaremetarifTypeclientRepository::class)]
class TblbaremetarifTypeclient
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "CategorieClient", nullable: true)]
    private ?int $categorieclient = null;

    #[ORM\Column(name: "Coef", nullable: true)]
    private ?float $coef = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getCategorieclient(): ?int
    {
        return $this->categorieclient;
    }

    public function setCategorieclient(?int $categorieclient): static
    {
        $this->categorieclient = $categorieclient;

        return $this;
    }

    public function getCoef(): ?float
    {
        return $this->coef;
    }

    public function setCoef(?float $coef): static
    {
        $this->coef = $coef;

        return $this;
    }
}
