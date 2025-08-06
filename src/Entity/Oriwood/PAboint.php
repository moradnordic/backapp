<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PAbointRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ABOINT')]
#[ORM\Entity(repositoryClass: PAbointRepository::class)]
class PAboint
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_AboInt", type: Types::SMALLINT, nullable: true)]
    private ?int $cAboint = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCAboint(): ?int
    {
        return $this->cAboint;
    }

    public function setCAboint(?int $cAboint): static
    {
        $this->cAboint = $cAboint;

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
