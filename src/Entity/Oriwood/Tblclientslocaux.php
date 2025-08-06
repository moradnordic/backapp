<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblclientslocauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblClientsLocaux')]
#[ORM\Entity(repositoryClass: TblclientslocauxRepository::class)]
class Tblclientslocaux
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "CodeClientSage", length: 255, nullable: true)]
    private ?string $codeclientsage = null;

    #[ORM\Column(name: "NomClient", length: 255, nullable: true)]
    private ?string $nomclient = null;

    #[ORM\Column(name: "Ville", length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(name: "Adresse", length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: "CodePostal", length: 255, nullable: true)]
    private ?string $codepostal = null;

    #[ORM\Column(name: "TelFixe", length: 255, nullable: true)]
    private ?string $telfixe = null;

    #[ORM\Column(name: "Fax", length: 255, nullable: true)]
    private ?string $fax = null;

    #[ORM\Column(name: "Email", length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: "Contact", length: 255, nullable: true)]
    private ?string $contact = null;

    #[ORM\Column(name: "Categorie", nullable: true)]
    private ?int $categorie = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getCodeclientsage(): ?string
    {
        return $this->codeclientsage;
    }

    public function setCodeclientsage(?string $codeclientsage): static
    {
        $this->codeclientsage = $codeclientsage;

        return $this;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): static
    {
        $this->nomclient = $nomclient;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(?string $codepostal): static
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getTelfixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelfixe(?string $telfixe): static
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): static
    {
        $this->fax = $fax;

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

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    public function getCategorie(): ?int
    {
        return $this->categorie;
    }

    public function setCategorie(?int $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }
}
