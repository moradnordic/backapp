<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PInterrostonomenclRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERROSTONOMENCL')]
#[ORM\Entity(repositoryClass: PInterrostonomenclRepository::class)]
class PInterrostonomencl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroStoNomencl", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterrostonomencl = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterrostonomencl(): ?int
    {
        return $this->cInterrostonomencl;
    }

    public function setCInterrostonomencl(?int $cInterrostonomencl): static
    {
        $this->cInterrostonomencl = $cInterrostonomencl;

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
