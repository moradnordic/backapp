<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\PointDeVenteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'point_de_vente')]
#[ORM\Entity(repositoryClass: PointDeVenteRepository::class)]
class PointDeVente
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "name", length: 100, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(name: "adresse", length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: "depotSage", nullable: true, options: ["comment" => "id de depot sage rattache a ce point de vente f_depot"])]
    private ?int $depotsage = null;

    #[ORM\Column(name: "commercial", length: 60, nullable: true, options: ["comment" => "nom du commercial en charge du point de vente"])]
    private ?string $commercial = null;

    #[ORM\Column(name: "dateCreation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datecreation = null;

    #[ORM\Column(name: "actif", nullable: true)]
    private ?bool $actif = null;

    #[ORM\Column(name: "dateCloture", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datecloture = null;

    #[ORM\Column(name: "password", length: 30, nullable: true)]
    private ?string $password = null;

    #[ORM\Column(name: "abr_name", length: 60, nullable: true)]
    private ?string $abrName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDepotsage(): ?int
    {
        return $this->depotsage;
    }

    public function setDepotsage(?int $depotsage): static
    {
        $this->depotsage = $depotsage;

        return $this;
    }

    public function getCommercial(): ?string
    {
        return $this->commercial;
    }

    public function setCommercial(?string $commercial): static
    {
        $this->commercial = $commercial;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): static
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(?bool $actif): static
    {
        $this->actif = $actif;

        return $this;
    }

    public function getDatecloture(): ?\DateTimeInterface
    {
        return $this->datecloture;
    }

    public function setDatecloture(?\DateTimeInterface $datecloture): static
    {
        $this->datecloture = $datecloture;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getAbrName(): ?string
    {
        return $this->abrName;
    }

    public function setAbrName(?string $abrName): static
    {
        $this->abrName = $abrName;

        return $this;
    }
}
