<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PInterrocompteressRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERROCOMPTERESS')]
#[ORM\Entity(repositoryClass: PInterrocompteressRepository::class)]
class PInterrocompteress
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroCompteRess", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterrocompteress = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterrocompteress(): ?int
    {
        return $this->cInterrocompteress;
    }

    public function setCInterrocompteress(?int $cInterrocompteress): static
    {
        $this->cInterrocompteress = $cInterrocompteress;

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
