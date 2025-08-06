<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PValidplglobaleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_VALIDPLGLOBALE')]
#[ORM\Entity(repositoryClass: PValidplglobaleRepository::class)]
class PValidplglobale
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_ValidPLGlobale", type: Types::SMALLINT, nullable: true)]
    private ?int $cValidplglobale = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCValidplglobale(): ?int
    {
        return $this->cValidplglobale;
    }

    public function setCValidplglobale(?int $cValidplglobale): static
    {
        $this->cValidplglobale = $cValidplglobale;

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
