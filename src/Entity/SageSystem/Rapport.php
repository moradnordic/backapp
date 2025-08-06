<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\RapportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'rapport')]
#[ORM\Entity(repositoryClass: RapportRepository::class)]
class Rapport
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ID_writer", nullable: true)]
    private ?int $idWriter = null;

    #[ORM\Column(name: "type", length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(name: "titre", length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(name: "datedebut", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datedebut = null;

    #[ORM\Column(name: "datefin", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefin = null;

    #[ORM\Column(name: "datemodif", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datemodif = null;

    #[ORM\Column(name: "datesaisie", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datesaisie = null;

    #[ORM\Column(name: "etat", nullable: true)]
    private ?bool $etat = null;

    #[ORM\Column(name: "validation", nullable: true)]
    private ?bool $validation = true;

    #[ORM\Column(name: "status", length: 250, nullable: true)]
    private ?string $status = null;

    #[ORM\Column(name: "societe", nullable: true, options: ["comment" => "if nordic valeur is 0 else if oriwood valeur 1"])]
    private ?int $societe = null;

    #[ORM\Column(name: "company", nullable: true)]
    private ?int $company = null;

    #[ORM\Column(name: "dateReponce", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereponce = null;

    #[ORM\Column(name: "idRepondant", nullable: true)]
    private ?int $idrepondant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdWriter(): ?int
    {
        return $this->idWriter;
    }

    public function setIdWriter(?int $idWriter): static
    {
        $this->idWriter = $idWriter;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(?\DateTimeInterface $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(?\DateTimeInterface $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getDatemodif(): ?\DateTimeInterface
    {
        return $this->datemodif;
    }

    public function setDatemodif(?\DateTimeInterface $datemodif): static
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    public function getDatesaisie(): ?\DateTimeInterface
    {
        return $this->datesaisie;
    }

    public function setDatesaisie(?\DateTimeInterface $datesaisie): static
    {
        $this->datesaisie = $datesaisie;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(?bool $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getValidation(): ?bool
    {
        return $this->validation;
    }

    public function setValidation(?bool $validation): static
    {
        $this->validation = $validation;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getSociete(): ?int
    {
        return $this->societe;
    }

    public function setSociete(?int $societe): static
    {
        $this->societe = $societe;

        return $this;
    }

    public function getCompany(): ?int
    {
        return $this->company;
    }

    public function setCompany(?int $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getDatereponce(): ?\DateTimeInterface
    {
        return $this->datereponce;
    }

    public function setDatereponce(?\DateTimeInterface $datereponce): static
    {
        $this->datereponce = $datereponce;

        return $this;
    }

    public function getIdrepondant(): ?int
    {
        return $this->idrepondant;
    }

    public function setIdrepondant(?int $idrepondant): static
    {
        $this->idrepondant = $idrepondant;

        return $this;
    }
}
