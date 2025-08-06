<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PInterrotarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERROTAR')]
#[ORM\Entity(repositoryClass: PInterrotarRepository::class)]
class PInterrotar
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroTar", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterrotar = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterrotar(): ?int
    {
        return $this->cInterrotar;
    }

    public function setCInterrotar(?int $cInterrotar): static
    {
        $this->cInterrotar = $cInterrotar;

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
