<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\POrgatiersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ORGATIERS')]
#[ORM\Entity(repositoryClass: POrgatiersRepository::class)]
class POrgatiers
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_OrgaTiers", type: Types::SMALLINT, nullable: true)]
    private ?int $cOrgatiers = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCOrgatiers(): ?int
    {
        return $this->cOrgatiers;
    }

    public function setCOrgatiers(?int $cOrgatiers): static
    {
        $this->cOrgatiers = $cOrgatiers;

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
