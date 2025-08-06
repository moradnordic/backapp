<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PAnalyseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ANALYSE')]
#[ORM\Entity(repositoryClass: PAnalyseRepository::class)]
class PAnalyse
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "A_Intitule", length: 35, nullable: true)]
    private ?string $aIntitule = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAIntitule(): ?string
    {
        return $this->aIntitule;
    }

    public function setAIntitule(?string $aIntitule): static
    {
        $this->aIntitule = $aIntitule;

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
