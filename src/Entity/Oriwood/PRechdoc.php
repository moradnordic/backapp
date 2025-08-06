<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PRechdocRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_RECHDOC')]
#[ORM\Entity(repositoryClass: PRechdocRepository::class)]
class PRechdoc
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_RechDoc", type: Types::SMALLINT, nullable: true)]
    private ?int $cRechdoc = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCRechdoc(): ?int
    {
        return $this->cRechdoc;
    }

    public function setCRechdoc(?int $cRechdoc): static
    {
        $this->cRechdoc = $cRechdoc;

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
