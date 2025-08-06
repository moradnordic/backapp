<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PGammeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_GAMME')]
#[ORM\Entity(repositoryClass: PGammeRepository::class)]
class PGamme
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "G_Intitule", length: 35, nullable: true)]
    private ?string $gIntitule = null;

    #[ORM\Column(name: "G_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $gType = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getGIntitule(): ?string
    {
        return $this->gIntitule;
    }

    public function setGIntitule(?string $gIntitule): static
    {
        $this->gIntitule = $gIntitule;

        return $this;
    }

    public function getGType(): ?int
    {
        return $this->gType;
    }

    public function setGType(?int $gType): static
    {
        $this->gType = $gType;

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
