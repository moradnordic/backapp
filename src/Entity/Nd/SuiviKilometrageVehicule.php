<?php

namespace App\Entity\Nd;

use App\Repository\Nd\SuiviKilometrageVehiculeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'suivi_kilometrage_vehicule')]
#[ORM\Entity(repositoryClass: SuiviKilometrageVehiculeRepository::class)]
class SuiviKilometrageVehicule
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "vehicule_id")]
    private ?int $vehiculeId = null;

    #[ORM\Column(name: "date_periode", type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePeriode = null;

    #[ORM\Column(name: "kilometrage")]
    private ?int $kilometrage = null;

    #[ORM\Column(name: "employe_id", nullable: true)]
    private ?int $employeId = null;

    #[ORM\Column(name: "lieu_depart", length: 100, nullable: true)]
    private ?string $lieuDepart = null;

    #[ORM\Column(name: "lieu_arrivee", length: 100, nullable: true)]
    private ?string $lieuArrivee = null;

    #[ORM\Column(name: "objectif_deplacement", length: -1, nullable: true)]
    private ?string $objectifDeplacement = null;

    #[ORM\Column(name: "commentaire", length: -1, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(name: "photo_compteur", length: 255, nullable: true)]
    private ?string $photoCompteur = null;

    #[ORM\Column(name: "created_at", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehiculeId(): ?int
    {
        return $this->vehiculeId;
    }

    public function setVehiculeId(int $vehiculeId): static
    {
        $this->vehiculeId = $vehiculeId;

        return $this;
    }

    public function getDatePeriode(): ?\DateTimeInterface
    {
        return $this->datePeriode;
    }

    public function setDatePeriode(\DateTimeInterface $datePeriode): static
    {
        $this->datePeriode = $datePeriode;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getEmployeId(): ?int
    {
        return $this->employeId;
    }

    public function setEmployeId(?int $employeId): static
    {
        $this->employeId = $employeId;

        return $this;
    }

    public function getLieuDepart(): ?string
    {
        return $this->lieuDepart;
    }

    public function setLieuDepart(?string $lieuDepart): static
    {
        $this->lieuDepart = $lieuDepart;

        return $this;
    }

    public function getLieuArrivee(): ?string
    {
        return $this->lieuArrivee;
    }

    public function setLieuArrivee(?string $lieuArrivee): static
    {
        $this->lieuArrivee = $lieuArrivee;

        return $this;
    }

    public function getObjectifDeplacement(): ?string
    {
        return $this->objectifDeplacement;
    }

    public function setObjectifDeplacement(?string $objectifDeplacement): static
    {
        $this->objectifDeplacement = $objectifDeplacement;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getPhotoCompteur(): ?string
    {
        return $this->photoCompteur;
    }

    public function setPhotoCompteur(?string $photoCompteur): static
    {
        $this->photoCompteur = $photoCompteur;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
