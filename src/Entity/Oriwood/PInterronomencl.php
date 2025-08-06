<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PInterronomenclRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERRONOMENCL')]
#[ORM\Entity(repositoryClass: PInterronomenclRepository::class)]
class PInterronomencl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroNomencl", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterronomencl = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterronomencl(): ?int
    {
        return $this->cInterronomencl;
    }

    public function setCInterronomencl(?int $cInterronomencl): static
    {
        $this->cInterronomencl = $cInterronomencl;

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
