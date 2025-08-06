<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PInterroressRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERRORESS')]
#[ORM\Entity(repositoryClass: PInterroressRepository::class)]
class PInterroress
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_InterroRess", type: Types::SMALLINT, nullable: true)]
    private ?int $cInterroress = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCInterroress(): ?int
    {
        return $this->cInterroress;
    }

    public function setCInterroress(?int $cInterroress): static
    {
        $this->cInterroress = $cInterroress;

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
