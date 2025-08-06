<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PDocaffaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_DOCAFFAIRE')]
#[ORM\Entity(repositoryClass: PDocaffaireRepository::class)]
class PDocaffaire
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_DocAffaire", type: Types::SMALLINT, nullable: true)]
    private ?int $cDocaffaire = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCDocaffaire(): ?int
    {
        return $this->cDocaffaire;
    }

    public function setCDocaffaire(?int $cDocaffaire): static
    {
        $this->cDocaffaire = $cDocaffaire;

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
