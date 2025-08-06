<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblchequiersXxxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblChequiers_xxx')]
#[ORM\Entity(repositoryClass: TblchequiersXxxRepository::class)]
class TblchequiersXxx
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "chqBanque", nullable: true)]
    private ?int $chqbanque = null;

    #[ORM\Column(name: "Prefix", length: 4, nullable: true)]
    private ?string $prefix = null;

    #[ORM\Column(name: "NumDepart", length: 255, nullable: true)]
    private ?string $numdepart = null;

    #[ORM\Column(name: "NumFin", length: 255, nullable: true)]
    private ?string $numfin = null;

    #[ORM\Column(name: "NombreDeCheques", nullable: true)]
    private ?int $nombredecheques = null;

    #[ORM\Column(name: "DateReceptin", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereceptin = null;

    #[ORM\Column(name: "cHEQUIERcLOS")]
    private ?bool $chequierclos = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getChqbanque(): ?int
    {
        return $this->chqbanque;
    }

    public function setChqbanque(?int $chqbanque): static
    {
        $this->chqbanque = $chqbanque;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): static
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getNumdepart(): ?string
    {
        return $this->numdepart;
    }

    public function setNumdepart(?string $numdepart): static
    {
        $this->numdepart = $numdepart;

        return $this;
    }

    public function getNumfin(): ?string
    {
        return $this->numfin;
    }

    public function setNumfin(?string $numfin): static
    {
        $this->numfin = $numfin;

        return $this;
    }

    public function getNombredecheques(): ?int
    {
        return $this->nombredecheques;
    }

    public function setNombredecheques(?int $nombredecheques): static
    {
        $this->nombredecheques = $nombredecheques;

        return $this;
    }

    public function getDatereceptin(): ?\DateTimeInterface
    {
        return $this->datereceptin;
    }

    public function setDatereceptin(?\DateTimeInterface $datereceptin): static
    {
        $this->datereceptin = $datereceptin;

        return $this;
    }

    public function getChequierclos(): ?bool
    {
        return $this->chequierclos;
    }

    public function setChequierclos(bool $chequierclos): static
    {
        $this->chequierclos = $chequierclos;

        return $this;
    }
}
