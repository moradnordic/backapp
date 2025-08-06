<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PIntstatartRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTSTATART')]
#[ORM\Entity(repositoryClass: PIntstatartRepository::class)]
class PIntstatart
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "P_IntStatArt", length: 35, nullable: true)]
    private ?string $pIntstatart = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPIntstatart(): ?string
    {
        return $this->pIntstatart;
    }

    public function setPIntstatart(?string $pIntstatart): static
    {
        $this->pIntstatart = $pIntstatart;

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
