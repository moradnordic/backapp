<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PContremarquecomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CONTREMARQUECOM')]
#[ORM\Entity(repositoryClass: PContremarquecomRepository::class)]
class PContremarquecom
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_ContremarqueCom", type: Types::SMALLINT, nullable: true)]
    private ?int $cContremarquecom = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCContremarquecom(): ?int
    {
        return $this->cContremarquecom;
    }

    public function setCContremarquecom(?int $cContremarquecom): static
    {
        $this->cContremarquecom = $cContremarquecom;

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
