<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PBonapayerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_BONAPAYER')]
#[ORM\Entity(repositoryClass: PBonapayerRepository::class)]
class PBonapayer
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "B_Autorisation", type: Types::SMALLINT, nullable: true)]
    private ?int $bAutorisation = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "B_Facture", type: Types::SMALLINT, nullable: true)]
    private ?int $bFacture = null;

    #[ORM\Column(name: "B_Seuil", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bSeuil = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getBAutorisation(): ?int
    {
        return $this->bAutorisation;
    }

    public function setBAutorisation(?int $bAutorisation): static
    {
        $this->bAutorisation = $bAutorisation;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getBFacture(): ?int
    {
        return $this->bFacture;
    }

    public function setBFacture(?int $bFacture): static
    {
        $this->bFacture = $bFacture;

        return $this;
    }

    public function getBSeuil(): ?string
    {
        return $this->bSeuil;
    }

    public function setBSeuil(?string $bSeuil): static
    {
        $this->bSeuil = $bSeuil;

        return $this;
    }
}
