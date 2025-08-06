<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ReversementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Reversement')]
#[ORM\Entity(repositoryClass: ReversementRepository::class)]
class Reversement
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "date", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(name: "createdBy", nullable: true)]
    private ?int $createdby = null;

    #[ORM\Column(name: "takedBy", length: 60, nullable: true)]
    private ?string $takedby = null;

    #[ORM\Column(name: "montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "nbrFacture", nullable: true)]
    private ?int $nbrfacture = null;

    #[ORM\Column(name: "idPV", nullable: true)]
    private ?int $idpv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCreatedby(): ?int
    {
        return $this->createdby;
    }

    public function setCreatedby(?int $createdby): static
    {
        $this->createdby = $createdby;

        return $this;
    }

    public function getTakedby(): ?string
    {
        return $this->takedby;
    }

    public function setTakedby(?string $takedby): static
    {
        $this->takedby = $takedby;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getNbrfacture(): ?int
    {
        return $this->nbrfacture;
    }

    public function setNbrfacture(?int $nbrfacture): static
    {
        $this->nbrfacture = $nbrfacture;

        return $this;
    }

    public function getIdpv(): ?int
    {
        return $this->idpv;
    }

    public function setIdpv(?int $idpv): static
    {
        $this->idpv = $idpv;

        return $this;
    }
}
