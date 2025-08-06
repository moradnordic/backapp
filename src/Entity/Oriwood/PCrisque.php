<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PCrisqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CRISQUE')]
#[ORM\Entity(repositoryClass: PCrisqueRepository::class)]
class PCrisque
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Intitule", length: 35, nullable: true)]
    private ?string $rIntitule = null;

    #[ORM\Column(name: "R_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $rType = null;

    #[ORM\Column(name: "R_Min", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rMin = null;

    #[ORM\Column(name: "R_Max", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rMax = null;

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

    public function getRType(): ?int
    {
        return $this->rType;
    }

    public function setRType(?int $rType): static
    {
        $this->rType = $rType;

        return $this;
    }

    public function getRMin(): ?string
    {
        return $this->rMin;
    }

    public function setRMin(?string $rMin): static
    {
        $this->rMin = $rMin;

        return $this;
    }

    public function getRMax(): ?string
    {
        return $this->rMax;
    }

    public function setRMax(?string $rMax): static
    {
        $this->rMax = $rMax;

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
