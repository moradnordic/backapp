<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PTracabiliteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_TRACABILITE')]
#[ORM\Entity(repositoryClass: PTracabiliteRepository::class)]
class PTracabilite
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Tracabilite", type: Types::SMALLINT, nullable: true)]
    private ?int $cTracabilite = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCTracabilite(): ?int
    {
        return $this->cTracabilite;
    }

    public function setCTracabilite(?int $cTracabilite): static
    {
        $this->cTracabilite = $cTracabilite;

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
