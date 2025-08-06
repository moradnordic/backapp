<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PRegulrRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_REGULR')]
#[ORM\Entity(repositoryClass: PRegulrRepository::class)]
class PRegulr
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "JO_Num", length: 7, nullable: true)]
    private ?string $joNum = null;

    #[ORM\Column(name: "PI_NoCharge", nullable: true)]
    private ?int $piNocharge = null;

    #[ORM\Column(name: "PI_NoFr", nullable: true)]
    private ?int $piNofr = null;

    #[ORM\Column(name: "PI_NoProduit", nullable: true)]
    private ?int $piNoproduit = null;

    #[ORM\Column(name: "PI_NoCl", nullable: true)]
    private ?int $piNocl = null;

    #[ORM\Column(name: "R_BaseProrata", type: Types::SMALLINT, nullable: true)]
    private ?int $rBaseprorata = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(?string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getPiNocharge(): ?int
    {
        return $this->piNocharge;
    }

    public function setPiNocharge(?int $piNocharge): static
    {
        $this->piNocharge = $piNocharge;

        return $this;
    }

    public function getPiNofr(): ?int
    {
        return $this->piNofr;
    }

    public function setPiNofr(?int $piNofr): static
    {
        $this->piNofr = $piNofr;

        return $this;
    }

    public function getPiNoproduit(): ?int
    {
        return $this->piNoproduit;
    }

    public function setPiNoproduit(?int $piNoproduit): static
    {
        $this->piNoproduit = $piNoproduit;

        return $this;
    }

    public function getPiNocl(): ?int
    {
        return $this->piNocl;
    }

    public function setPiNocl(?int $piNocl): static
    {
        $this->piNocl = $piNocl;

        return $this;
    }

    public function getRBaseprorata(): ?int
    {
        return $this->rBaseprorata;
    }

    public function setRBaseprorata(?int $rBaseprorata): static
    {
        $this->rBaseprorata = $rBaseprorata;

        return $this;
    }
}
