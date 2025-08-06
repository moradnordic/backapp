<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PCondlivrRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CONDLIVR')]
#[ORM\Entity(repositoryClass: PCondlivrRepository::class)]
class PCondlivr
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Intitule", length: 35, nullable: true)]
    private ?string $cIntitule = null;

    #[ORM\Column(name: "C_Mode", length: 5, nullable: true)]
    private ?string $cMode = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCIntitule(): ?string
    {
        return $this->cIntitule;
    }

    public function setCIntitule(?string $cIntitule): static
    {
        $this->cIntitule = $cIntitule;

        return $this;
    }

    public function getCMode(): ?string
    {
        return $this->cMode;
    }

    public function setCMode(?string $cMode): static
    {
        $this->cMode = $cMode;

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
