<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CONTACT')]
#[ORM\Entity(repositoryClass: PContactRepository::class)]
class PContact
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Intitule", length: 35, nullable: true)]
    private ?string $cIntitule = null;

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
