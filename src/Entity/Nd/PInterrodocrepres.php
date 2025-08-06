<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PInterrodocrepresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERRODOCREPRES')]
#[ORM\Entity(repositoryClass: PInterrodocrepresRepository::class)]
class PInterrodocrepres
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroDocRepres", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterrodocrepres = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterrodocrepres(): ?int
    {
        return $this->cInterrodocrepres;
    }

    public function setCInterrodocrepres(?int $cInterrodocrepres): static
    {
        $this->cInterrodocrepres = $cInterrodocrepres;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
