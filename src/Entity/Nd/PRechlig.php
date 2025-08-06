<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PRechligRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_RECHLIG')]
#[ORM\Entity(repositoryClass: PRechligRepository::class)]
class PRechlig
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_RechLig", type: Types::SMALLINT, nullable: true)]
    private ?int $cRechlig = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCRechlig(): ?int
    {
        return $this->cRechlig;
    }

    public function setCRechlig(?int $cRechlig): static
    {
        $this->cRechlig = $cRechlig;

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
