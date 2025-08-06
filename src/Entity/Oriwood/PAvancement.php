<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PAvancementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_AVANCEMENT')]
#[ORM\Entity(repositoryClass: PAvancementRepository::class)]
class PAvancement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Avancement", type: Types::SMALLINT, nullable: true)]
    private ?int $cAvancement = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCAvancement(): ?int
    {
        return $this->cAvancement;
    }

    public function setCAvancement(?int $cAvancement): static
    {
        $this->cAvancement = $cAvancement;

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
