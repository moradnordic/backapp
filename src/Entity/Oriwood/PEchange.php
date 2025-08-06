<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PEchangeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ECHANGE')]
#[ORM\Entity(repositoryClass: PEchangeRepository::class)]
class PEchange
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "E_EdiCodeType", type: Types::SMALLINT, nullable: true)]
    private ?int $eEdicodetype = null;

    #[ORM\Column(name: "E_EdiCode", length: 23, nullable: true)]
    private ?string $eEdicode = null;

    #[ORM\Column(name: "E_EdiCodeSage", length: 9, nullable: true)]
    private ?string $eEdicodesage = null;

    #[ORM\Column(name: "CD_No", nullable: true)]
    private ?int $cdNo = null;

    #[ORM\Column(name: "JO_Num", length: 7, nullable: true)]
    private ?string $joNum = null;

    #[ORM\Column(name: "PI_No", nullable: true)]
    private ?int $piNo = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getEEdicodetype(): ?int
    {
        return $this->eEdicodetype;
    }

    public function setEEdicodetype(?int $eEdicodetype): static
    {
        $this->eEdicodetype = $eEdicodetype;

        return $this;
    }

    public function getEEdicode(): ?string
    {
        return $this->eEdicode;
    }

    public function setEEdicode(?string $eEdicode): static
    {
        $this->eEdicode = $eEdicode;

        return $this;
    }

    public function getEEdicodesage(): ?string
    {
        return $this->eEdicodesage;
    }

    public function setEEdicodesage(?string $eEdicodesage): static
    {
        $this->eEdicodesage = $eEdicodesage;

        return $this;
    }

    public function getCdNo(): ?int
    {
        return $this->cdNo;
    }

    public function setCdNo(?int $cdNo): static
    {
        $this->cdNo = $cdNo;

        return $this;
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

    public function getPiNo(): ?int
    {
        return $this->piNo;
    }

    public function setPiNo(?int $piNo): static
    {
        $this->piNo = $piNo;

        return $this;
    }
}
