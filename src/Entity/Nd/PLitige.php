<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PLitigeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_LITIGE')]
#[ORM\Entity(repositoryClass: PLitigeRepository::class)]
class PLitige
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "L_Intitule", length: 35, nullable: true)]
    private ?string $lIntitule = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getLIntitule(): ?string
    {
        return $this->lIntitule;
    }

    public function setLIntitule(?string $lIntitule): static
    {
        $this->lIntitule = $lIntitule;

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
