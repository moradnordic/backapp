<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrNumerotationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Numerotation')]
#[ORM\Entity(repositoryClass: LrNumerotationRepository::class)]
class LrNumerotation
{
    #[ORM\Column(name: "Num")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $num = null;

    #[ORM\Column(name: "NumAff", length: 50, nullable: true)]
    private ?string $numaff = null;

    #[ORM\Column(name: "dateNum", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datenum = null;

    #[ORM\Column(name: "NumReserv", type: Types::SMALLINT, nullable: true)]
    private ?int $numreserv = null;

    #[ORM\Column(name: "GenFac", type: Types::SMALLINT, nullable: true)]
    private ?int $genfac = null;

    #[ORM\Column(name: "EncVer", type: Types::SMALLINT, nullable: true)]
    private ?int $encver = null;

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function getNumaff(): ?string
    {
        return $this->numaff;
    }

    public function setNumaff(?string $numaff): static
    {
        $this->numaff = $numaff;

        return $this;
    }

    public function getDatenum(): ?\DateTimeInterface
    {
        return $this->datenum;
    }

    public function setDatenum(?\DateTimeInterface $datenum): static
    {
        $this->datenum = $datenum;

        return $this;
    }

    public function getNumreserv(): ?int
    {
        return $this->numreserv;
    }

    public function setNumreserv(?int $numreserv): static
    {
        $this->numreserv = $numreserv;

        return $this;
    }

    public function getGenfac(): ?int
    {
        return $this->genfac;
    }

    public function setGenfac(?int $genfac): static
    {
        $this->genfac = $genfac;

        return $this;
    }

    public function getEncver(): ?int
    {
        return $this->encver;
    }

    public function setEncver(?int $encver): static
    {
        $this->encver = $encver;

        return $this;
    }
}
