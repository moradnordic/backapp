<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblemployessteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblEmployesSTE')]
#[ORM\Entity(repositoryClass: TblemployessteRepository::class)]
class Tblemployesste
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Nom", length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "Prenom", length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(name: "active")]
    private ?bool $active = null;

    #[ORM\Column(name: "Admin")]
    private ?bool $admin = null;

    #[ORM\Column(name: "Commercial")]
    private ?bool $commercial = null;

    #[ORM\Column(name: "Logistique")]
    private ?bool $logistique = null;

    #[ORM\Column(name: "Depot")]
    private ?bool $depot = null;

    #[ORM\Column(name: "Permis", length: 255, nullable: true)]
    private ?string $permis = null;

    #[ORM\Column(name: "DatePermis", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datepermis = null;

    #[ORM\Column(name: "DateExpirationPermis", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateexpirationpermis = null;

    #[ORM\Column(name: "ScanPermis", length: 255, nullable: true)]
    private ?string $scanpermis = null;

    #[ORM\Column(name: "CIN", length: 255, nullable: true)]
    private ?string $cin = null;

    #[ORM\Column(name: "DateExpirationCIN", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateexpirationcin = null;

    #[ORM\Column(name: "NumTel", length: 255, nullable: true)]
    private ?string $numtel = null;

    #[ORM\Column(name: "Vehicule_OuiNon")]
    private ?bool $vehiculeOuinon = null;

    #[ORM\Column(name: "Vehicule", nullable: true)]
    private ?int $vehicule = null;

    #[ORM\Column(name: "Carburant_OuiNon")]
    private ?bool $carburantOuinon = null;

    #[ORM\Column(name: "NumCarteCarburant", length: 255, nullable: true)]
    private ?string $numcartecarburant = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getAdmin(): ?bool
    {
        return $this->admin;
    }

    public function setAdmin(bool $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    public function getCommercial(): ?bool
    {
        return $this->commercial;
    }

    public function setCommercial(bool $commercial): static
    {
        $this->commercial = $commercial;

        return $this;
    }

    public function getLogistique(): ?bool
    {
        return $this->logistique;
    }

    public function setLogistique(bool $logistique): static
    {
        $this->logistique = $logistique;

        return $this;
    }

    public function getDepot(): ?bool
    {
        return $this->depot;
    }

    public function setDepot(bool $depot): static
    {
        $this->depot = $depot;

        return $this;
    }

    public function getPermis(): ?string
    {
        return $this->permis;
    }

    public function setPermis(?string $permis): static
    {
        $this->permis = $permis;

        return $this;
    }

    public function getDatepermis(): ?\DateTimeInterface
    {
        return $this->datepermis;
    }

    public function setDatepermis(?\DateTimeInterface $datepermis): static
    {
        $this->datepermis = $datepermis;

        return $this;
    }

    public function getDateexpirationpermis(): ?\DateTimeInterface
    {
        return $this->dateexpirationpermis;
    }

    public function setDateexpirationpermis(?\DateTimeInterface $dateexpirationpermis): static
    {
        $this->dateexpirationpermis = $dateexpirationpermis;

        return $this;
    }

    public function getScanpermis(): ?string
    {
        return $this->scanpermis;
    }

    public function setScanpermis(?string $scanpermis): static
    {
        $this->scanpermis = $scanpermis;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(?string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDateexpirationcin(): ?\DateTimeInterface
    {
        return $this->dateexpirationcin;
    }

    public function setDateexpirationcin(?\DateTimeInterface $dateexpirationcin): static
    {
        $this->dateexpirationcin = $dateexpirationcin;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(?string $numtel): static
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getVehiculeOuinon(): ?bool
    {
        return $this->vehiculeOuinon;
    }

    public function setVehiculeOuinon(bool $vehiculeOuinon): static
    {
        $this->vehiculeOuinon = $vehiculeOuinon;

        return $this;
    }

    public function getVehicule(): ?int
    {
        return $this->vehicule;
    }

    public function setVehicule(?int $vehicule): static
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getCarburantOuinon(): ?bool
    {
        return $this->carburantOuinon;
    }

    public function setCarburantOuinon(bool $carburantOuinon): static
    {
        $this->carburantOuinon = $carburantOuinon;

        return $this;
    }

    public function getNumcartecarburant(): ?string
    {
        return $this->numcartecarburant;
    }

    public function setNumcartecarburant(?string $numcartecarburant): static
    {
        $this->numcartecarburant = $numcartecarburant;

        return $this;
    }
}
