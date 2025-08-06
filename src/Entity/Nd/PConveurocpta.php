<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PConveurocptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CONVEUROCPTA')]
#[ORM\Entity(repositoryClass: PConveurocptaRepository::class)]
class PConveurocpta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Devises", type: Types::SMALLINT, nullable: true)]
    private ?int $cDevises = null;

    #[ORM\Column(name: "C_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $cTiers = null;

    #[ORM\Column(name: "C_Banques", type: Types::SMALLINT, nullable: true)]
    private ?int $cBanques = null;

    #[ORM\Column(name: "C_InfosL", type: Types::SMALLINT, nullable: true)]
    private ?int $cInfosl = null;

    #[ORM\Column(name: "C_DeviseCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $cDevisecompte = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCDevises(): ?int
    {
        return $this->cDevises;
    }

    public function setCDevises(?int $cDevises): static
    {
        $this->cDevises = $cDevises;

        return $this;
    }

    public function getCTiers(): ?int
    {
        return $this->cTiers;
    }

    public function setCTiers(?int $cTiers): static
    {
        $this->cTiers = $cTiers;

        return $this;
    }

    public function getCBanques(): ?int
    {
        return $this->cBanques;
    }

    public function setCBanques(?int $cBanques): static
    {
        $this->cBanques = $cBanques;

        return $this;
    }

    public function getCInfosl(): ?int
    {
        return $this->cInfosl;
    }

    public function setCInfosl(?int $cInfosl): static
    {
        $this->cInfosl = $cInfosl;

        return $this;
    }

    public function getCDevisecompte(): ?int
    {
        return $this->cDevisecompte;
    }

    public function setCDevisecompte(?int $cDevisecompte): static
    {
        $this->cDevisecompte = $cDevisecompte;

        return $this;
    }
}
