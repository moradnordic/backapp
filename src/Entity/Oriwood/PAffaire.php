<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PAffaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_AFFAIRE')]
#[ORM\Entity(repositoryClass: PAffaireRepository::class)]
class PAffaire
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Affaire", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffaire = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCAffaire(): ?int
    {
        return $this->cAffaire;
    }

    public function setCAffaire(?int $cAffaire): static
    {
        $this->cAffaire = $cAffaire;

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
