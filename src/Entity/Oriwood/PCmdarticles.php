<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PCmdarticlesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CMDARTICLES')]
#[ORM\Entity(repositoryClass: PCmdarticlesRepository::class)]
class PCmdarticles
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_CmdArticles", type: Types::SMALLINT, nullable: true)]
    private ?int $cCmdarticles = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCCmdarticles(): ?int
    {
        return $this->cCmdarticles;
    }

    public function setCCmdarticles(?int $cCmdarticles): static
    {
        $this->cCmdarticles = $cCmdarticles;

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
