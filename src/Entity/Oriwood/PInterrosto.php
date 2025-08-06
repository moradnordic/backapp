<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PInterrostoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERROSTO')]
#[ORM\Entity(repositoryClass: PInterrostoRepository::class)]
class PInterrosto
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroSto", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterrosto = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterrosto(): ?int
    {
        return $this->cInterrosto;
    }

    public function setCInterrosto(?int $cInterrosto): static
    {
        $this->cInterrosto = $cInterrosto;

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
