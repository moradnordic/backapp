<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PCattarifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CATTARIF')]
#[ORM\Entity(repositoryClass: PCattarifRepository::class)]
class PCattarif
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Intitule", length: 35, nullable: true)]
    private ?string $ctIntitule = null;

    #[ORM\Column(name: "CT_PrixTTC", type: Types::SMALLINT, nullable: true)]
    private ?int $ctPrixttc = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCtIntitule(): ?string
    {
        return $this->ctIntitule;
    }

    public function setCtIntitule(?string $ctIntitule): static
    {
        $this->ctIntitule = $ctIntitule;

        return $this;
    }

    public function getCtPrixttc(): ?int
    {
        return $this->ctPrixttc;
    }

    public function setCtPrixttc(?int $ctPrixttc): static
    {
        $this->ctPrixttc = $ctPrixttc;

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
