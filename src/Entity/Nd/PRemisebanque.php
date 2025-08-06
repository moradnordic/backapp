<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PRemisebanqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_REMISEBANQUE')]
#[ORM\Entity(repositoryClass: PRemisebanqueRepository::class)]
class PRemisebanque
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Remisebanque", type: Types::SMALLINT, nullable: true)]
    private ?int $rRemisebanque = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRRemisebanque(): ?int
    {
        return $this->rRemisebanque;
    }

    public function setRRemisebanque(?int $rRemisebanque): static
    {
        $this->rRemisebanque = $rRemisebanque;

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
