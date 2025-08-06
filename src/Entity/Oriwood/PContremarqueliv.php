<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PContremarquelivRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CONTREMARQUELIV')]
#[ORM\Entity(repositoryClass: PContremarquelivRepository::class)]
class PContremarqueliv
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_ContremarqueLiv", type: Types::SMALLINT, nullable: true)]
    private ?int $cContremarqueliv = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCContremarqueliv(): ?int
    {
        return $this->cContremarqueliv;
    }

    public function setCContremarqueliv(?int $cContremarqueliv): static
    {
        $this->cContremarqueliv = $cContremarqueliv;

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
