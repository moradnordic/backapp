<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PConditionnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CONDITIONNEMENT')]
#[ORM\Entity(repositoryClass: PConditionnementRepository::class)]
class PConditionnement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "P_Conditionnement", length: 35, nullable: true)]
    private ?string $pConditionnement = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPConditionnement(): ?string
    {
        return $this->pConditionnement;
    }

    public function setPConditionnement(?string $pConditionnement): static
    {
        $this->pConditionnement = $pConditionnement;

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
