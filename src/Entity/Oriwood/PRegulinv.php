<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PRegulinvRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_REGULINV')]
#[ORM\Entity(repositoryClass: PRegulinvRepository::class)]
class PRegulinv
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_RegulInv", type: Types::SMALLINT, nullable: true)]
    private ?int $cRegulinv = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCRegulinv(): ?int
    {
        return $this->cRegulinv;
    }

    public function setCRegulinv(?int $cRegulinv): static
    {
        $this->cRegulinv = $cRegulinv;

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
