<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PInterrotarnomenclRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERROTARNOMENCL')]
#[ORM\Entity(repositoryClass: PInterrotarnomenclRepository::class)]
class PInterrotarnomencl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroTarNomencl", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterrotarnomencl = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterrotarnomencl(): ?int
    {
        return $this->cInterrotarnomencl;
    }

    public function setCInterrotarnomencl(?int $cInterrotarnomencl): static
    {
        $this->cInterrotarnomencl = $cInterrotarnomencl;

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
