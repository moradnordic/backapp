<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PReapproRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_REAPPRO')]
#[ORM\Entity(repositoryClass: PReapproRepository::class)]
class PReappro
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Reappro", type: Types::SMALLINT, nullable: true)]
    private ?int $cReappro = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCReappro(): ?int
    {
        return $this->cReappro;
    }

    public function setCReappro(?int $cReappro): static
    {
        $this->cReappro = $cReappro;

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
