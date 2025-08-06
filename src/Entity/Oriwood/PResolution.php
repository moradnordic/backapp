<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PResolutionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_RESOLUTION')]
#[ORM\Entity(repositoryClass: PResolutionRepository::class)]
class PResolution
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Intitule", length: 35, nullable: true)]
    private ?string $rIntitule = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRIntitule(): ?string
    {
        return $this->rIntitule;
    }

    public function setRIntitule(?string $rIntitule): static
    {
        $this->rIntitule = $rIntitule;

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
