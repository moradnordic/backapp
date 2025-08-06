<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PArrondiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ARRONDI')]
#[ORM\Entity(repositoryClass: PArrondiRepository::class)]
class PArrondi
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arValeur = null;

    #[ORM\Column(name: "AR_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arType = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getArValeur(): ?string
    {
        return $this->arValeur;
    }

    public function setArValeur(?string $arValeur): static
    {
        $this->arValeur = $arValeur;

        return $this;
    }

    public function getArType(): ?int
    {
        return $this->arType;
    }

    public function setArType(?int $arType): static
    {
        $this->arType = $arType;

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
