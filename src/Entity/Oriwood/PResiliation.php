<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PResiliationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_RESILIATION')]
#[ORM\Entity(repositoryClass: PResiliationRepository::class)]
class PResiliation
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Resiliation", length: 35, nullable: true)]
    private ?string $rResiliation = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRResiliation(): ?string
    {
        return $this->rResiliation;
    }

    public function setRResiliation(?string $rResiliation): static
    {
        $this->rResiliation = $rResiliation;

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
