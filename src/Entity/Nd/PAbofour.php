<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PAbofourRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ABOFOUR')]
#[ORM\Entity(repositoryClass: PAbofourRepository::class)]
class PAbofour
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_AboFour", type: Types::SMALLINT, nullable: true)]
    private ?int $cAbofour = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCAbofour(): ?int
    {
        return $this->cAbofour;
    }

    public function setCAbofour(?int $cAbofour): static
    {
        $this->cAbofour = $cAbofour;

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
