<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PLibellecptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_LIBELLECPTA')]
#[ORM\Entity(repositoryClass: PLibellecptaRepository::class)]
class PLibellecpta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "L_LangueAucune", length: 21, nullable: true)]
    private ?string $lLangueaucune = null;

    #[ORM\Column(name: "L_Langue1", length: 21, nullable: true)]
    private ?string $lLangue1 = null;

    #[ORM\Column(name: "L_Langue2", length: 21, nullable: true)]
    private ?string $lLangue2 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getLLangueaucune(): ?string
    {
        return $this->lLangueaucune;
    }

    public function setLLangueaucune(?string $lLangueaucune): static
    {
        $this->lLangueaucune = $lLangueaucune;

        return $this;
    }

    public function getLLangue1(): ?string
    {
        return $this->lLangue1;
    }

    public function setLLangue1(?string $lLangue1): static
    {
        $this->lLangue1 = $lLangue1;

        return $this;
    }

    public function getLLangue2(): ?string
    {
        return $this->lLangue2;
    }

    public function setLLangue2(?string $lLangue2): static
    {
        $this->lLangue2 = $lLangue2;

        return $this;
    }
}
