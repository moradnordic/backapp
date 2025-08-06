<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PPeriodRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_PERIOD')]
#[ORM\Entity(repositoryClass: PPeriodRepository::class)]
class PPeriod
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "P_Period", length: 35, nullable: true)]
    private ?string $pPeriod = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPPeriod(): ?string
    {
        return $this->pPeriod;
    }

    public function setPPeriod(?string $pPeriod): static
    {
        $this->pPeriod = $pPeriod;

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
