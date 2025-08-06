<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\POrgaartRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ORGAART')]
#[ORM\Entity(repositoryClass: POrgaartRepository::class)]
class POrgaart
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_OrgaArt", type: Types::SMALLINT, nullable: true)]
    private ?int $cOrgaart = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCOrgaart(): ?int
    {
        return $this->cOrgaart;
    }

    public function setCOrgaart(?int $cOrgaart): static
    {
        $this->cOrgaart = $cOrgaart;

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
