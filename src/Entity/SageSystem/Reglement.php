<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ReglementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Reglement')]
#[ORM\Entity(repositoryClass: ReglementRepository::class)]
class Reglement
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ref", length: 60, nullable: true)]
    private ?string $ref = null;

    #[ORM\Column(name: "typePaiment")]
    private ?int $typepaiment = null;

    #[ORM\Column(name: "idVent", nullable: true)]
    private ?int $idvent = null;

    #[ORM\Column(name: "montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "idPV", nullable: true, options: ["comment" => "id point de vente"])]
    private ?int $idpv = null;

    #[ORM\Column(name: "date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(name: "idReversement", nullable: true)]
    private ?int $idreversement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): static
    {
        $this->ref = $ref;

        return $this;
    }

    public function getTypepaiment(): ?int
    {
        return $this->typepaiment;
    }

    public function setTypepaiment(int $typepaiment): static
    {
        $this->typepaiment = $typepaiment;

        return $this;
    }

    public function getIdvent(): ?int
    {
        return $this->idvent;
    }

    public function setIdvent(?int $idvent): static
    {
        $this->idvent = $idvent;

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

    public function getIdpv(): ?int
    {
        return $this->idpv;
    }

    public function setIdpv(?int $idpv): static
    {
        $this->idpv = $idpv;

        return $this;
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

    public function getIdreversement(): ?int
    {
        return $this->idreversement;
    }

    public function setIdreversement(?int $idreversement): static
    {
        $this->idreversement = $idreversement;

        return $this;
    }
}
