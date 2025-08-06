<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PAbocliRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ABOCLI')]
#[ORM\Entity(repositoryClass: PAbocliRepository::class)]
class PAbocli
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_AboCli", type: Types::SMALLINT, nullable: true)]
    private ?int $cAbocli = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCAbocli(): ?int
    {
        return $this->cAbocli;
    }

    public function setCAbocli(?int $cAbocli): static
    {
        $this->cAbocli = $cAbocli;

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
