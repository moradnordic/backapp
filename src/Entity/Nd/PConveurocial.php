<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PConveurocialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CONVEUROCIAL')]
#[ORM\Entity(repositoryClass: PConveurocialRepository::class)]
class PConveurocial
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_BasculeTarif", type: Types::SMALLINT, nullable: true)]
    private ?int $cBasculetarif = null;

    #[ORM\Column(name: "C_BasculeLibre", type: Types::SMALLINT, nullable: true)]
    private ?int $cBasculelibre = null;

    #[ORM\Column(name: "C_BasculeCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $cBasculecompte = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCBasculetarif(): ?int
    {
        return $this->cBasculetarif;
    }

    public function setCBasculetarif(?int $cBasculetarif): static
    {
        $this->cBasculetarif = $cBasculetarif;

        return $this;
    }

    public function getCBasculelibre(): ?int
    {
        return $this->cBasculelibre;
    }

    public function setCBasculelibre(?int $cBasculelibre): static
    {
        $this->cBasculelibre = $cBasculelibre;

        return $this;
    }

    public function getCBasculecompte(): ?int
    {
        return $this->cBasculecompte;
    }

    public function setCBasculecompte(?int $cBasculecompte): static
    {
        $this->cBasculecompte = $cBasculecompte;

        return $this;
    }
}
