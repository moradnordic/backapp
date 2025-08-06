<?php

namespace App\Entity\Nd;

use App\Repository\Nd\SocieteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'societe')]
#[ORM\Entity(repositoryClass: SocieteRepository::class)]
class Societe
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nom", length: 255)]
    private ?string $nom = null;

    #[ORM\Column(name: "adresse", length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: "ville", length: 100, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(name: "pays", length: 100, nullable: true)]
    private ?string $pays = null;

    #[ORM\Column(name: "telephone", length: 50, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(name: "email", length: 100, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: "responsable", length: 100, nullable: true)]
    private ?string $responsable = null;

    #[ORM\Column(name: "ice", length: 50, nullable: true)]
    private ?string $ice = null;

    #[ORM\Column(name: "rc", length: 50, nullable: true)]
    private ?string $rc = null;

    #[ORM\Column(name: "patente", length: 50, nullable: true)]
    private ?string $patente = null;

    #[ORM\Column(name: "cnss", length: 50, nullable: true)]
    private ?string $cnss = null;

    #[ORM\Column(name: "site_web", length: 255, nullable: true)]
    private ?string $siteWeb = null;

    #[ORM\Column(name: "logo", length: 255, nullable: true)]
    private ?string $logo = null;

    #[ORM\Column(name: "idFiscale", nullable: true)]
    private ?int $idfiscale = null;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(?string $responsable): static
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getIce(): ?string
    {
        return $this->ice;
    }

    public function setIce(?string $ice): static
    {
        $this->ice = $ice;

        return $this;
    }

    public function getRc(): ?string
    {
        return $this->rc;
    }

    public function setRc(?string $rc): static
    {
        $this->rc = $rc;

        return $this;
    }

    public function getPatente(): ?string
    {
        return $this->patente;
    }

    public function setPatente(?string $patente): static
    {
        $this->patente = $patente;

        return $this;
    }

    public function getCnss(): ?string
    {
        return $this->cnss;
    }

    public function setCnss(?string $cnss): static
    {
        $this->cnss = $cnss;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    public function setSiteWeb(?string $siteWeb): static
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getIdfiscale(): ?int
    {
        return $this->idfiscale;
    }

    public function setIdfiscale(?int $idfiscale): static
    {
        $this->idfiscale = $idfiscale;

        return $this;
    }
}
