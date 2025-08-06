<?php

namespace App\Entity\Nd;

use App\Repository\Nd\EmployeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'employe')]
#[ORM\Entity(repositoryClass: EmployeRepository::class)]
class Employe
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nom", length: 100)]
    private ?string $nom = null;

    #[ORM\Column(name: "prenom", length: 100, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(name: "cin", length: 50, nullable: true)]
    private ?string $cin = null;

    #[ORM\Column(name: "telephone_personnel", length: 50, nullable: true)]
    private ?string $telephonePersonnel = null;

    #[ORM\Column(name: "telephone_prof", length: 50, nullable: true)]
    private ?string $telephoneProf = null;

    #[ORM\Column(name: "photo", length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(name: "poste", length: 100, nullable: true)]
    private ?string $poste = null;

    #[ORM\Column(name: "permis_date", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $permisDate = null;

    #[ORM\Column(name: "permis_expiration", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $permisExpiration = null;

    #[ORM\Column(name: "permis_scan", length: 255, nullable: true)]
    private ?string $permisScan = null;

    #[ORM\Column(name: "societe_id", nullable: true)]
    private ?int $societeId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
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

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(?string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getTelephonePersonnel(): ?string
    {
        return $this->telephonePersonnel;
    }

    public function setTelephonePersonnel(?string $telephonePersonnel): static
    {
        $this->telephonePersonnel = $telephonePersonnel;

        return $this;
    }

    public function getTelephoneProf(): ?string
    {
        return $this->telephoneProf;
    }

    public function setTelephoneProf(?string $telephoneProf): static
    {
        $this->telephoneProf = $telephoneProf;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getPermisDate(): ?\DateTimeInterface
    {
        return $this->permisDate;
    }

    public function setPermisDate(?\DateTimeInterface $permisDate): static
    {
        $this->permisDate = $permisDate;

        return $this;
    }

    public function getPermisExpiration(): ?\DateTimeInterface
    {
        return $this->permisExpiration;
    }

    public function setPermisExpiration(?\DateTimeInterface $permisExpiration): static
    {
        $this->permisExpiration = $permisExpiration;

        return $this;
    }

    public function getPermisScan(): ?string
    {
        return $this->permisScan;
    }

    public function setPermisScan(?string $permisScan): static
    {
        $this->permisScan = $permisScan;

        return $this;
    }

    public function getSocieteId(): ?int
    {
        return $this->societeId;
    }

    public function setSocieteId(?int $societeId): static
    {
        $this->societeId = $societeId;

        return $this;
    }
}
