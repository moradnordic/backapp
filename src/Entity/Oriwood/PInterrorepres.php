<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PInterrorepresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERROREPRES')]
#[ORM\Entity(repositoryClass: PInterrorepresRepository::class)]
class PInterrorepres
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroRepres", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterrorepres = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterrorepres(): ?int
    {
        return $this->cInterrorepres;
    }

    public function setCInterrorepres(?int $cInterrorepres): static
    {
        $this->cInterrorepres = $cInterrorepres;

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
