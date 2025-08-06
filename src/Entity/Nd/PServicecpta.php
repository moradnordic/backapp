<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PServicecptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_SERVICECPTA')]
#[ORM\Entity(repositoryClass: PServicecptaRepository::class)]
class PServicecpta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "S_Intitule", length: 35, nullable: true)]
    private ?string $sIntitule = null;

    #[ORM\Column(name: "S_Abrege", length: 3, nullable: true)]
    private ?string $sAbrege = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getSIntitule(): ?string
    {
        return $this->sIntitule;
    }

    public function setSIntitule(?string $sIntitule): static
    {
        $this->sIntitule = $sIntitule;

        return $this;
    }

    public function getSAbrege(): ?string
    {
        return $this->sAbrege;
    }

    public function setSAbrege(?string $sAbrege): static
    {
        $this->sAbrege = $sAbrege;

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
