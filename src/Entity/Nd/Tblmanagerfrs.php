<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblmanagerfrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblManagerFrs')]
#[ORM\Entity(repositoryClass: TblmanagerfrsRepository::class)]
class Tblmanagerfrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Frs", nullable: true)]
    private ?int $frs = null;

    #[ORM\Column(name: "PrenomMgerFrs", length: 255, nullable: true)]
    private ?string $prenommgerfrs = null;

    #[ORM\Column(name: "NomMgerFrs", length: 255, nullable: true)]
    private ?string $nommgerfrs = null;

    #[ORM\Column(name: "TelMgerFrs", length: 255, nullable: true)]
    private ?string $telmgerfrs = null;

    #[ORM\Column(name: "EmailMgerFrs", length: 255, nullable: true)]
    private ?string $emailmgerfrs = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getFrs(): ?int
    {
        return $this->frs;
    }

    public function setFrs(?int $frs): static
    {
        $this->frs = $frs;

        return $this;
    }

    public function getPrenommgerfrs(): ?string
    {
        return $this->prenommgerfrs;
    }

    public function setPrenommgerfrs(?string $prenommgerfrs): static
    {
        $this->prenommgerfrs = $prenommgerfrs;

        return $this;
    }

    public function getNommgerfrs(): ?string
    {
        return $this->nommgerfrs;
    }

    public function setNommgerfrs(?string $nommgerfrs): static
    {
        $this->nommgerfrs = $nommgerfrs;

        return $this;
    }

    public function getTelmgerfrs(): ?string
    {
        return $this->telmgerfrs;
    }

    public function setTelmgerfrs(?string $telmgerfrs): static
    {
        $this->telmgerfrs = $telmgerfrs;

        return $this;
    }

    public function getEmailmgerfrs(): ?string
    {
        return $this->emailmgerfrs;
    }

    public function setEmailmgerfrs(?string $emailmgerfrs): static
    {
        $this->emailmgerfrs = $emailmgerfrs;

        return $this;
    }
}
