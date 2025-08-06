<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblnosbanquesContactpersonsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblNosBanques_ContactPersons')]
#[ORM\Entity(repositoryClass: TblnosbanquesContactpersonsRepository::class)]
class TblnosbanquesContactpersons
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Banque", nullable: true)]
    private ?int $banque = null;

    #[ORM\Column(name: "Prenom", length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(name: "Nom", length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "Position", length: 255, nullable: true)]
    private ?string $position = null;

    #[ORM\Column(name: "NumGSM", length: 255, nullable: true)]
    private ?string $numgsm = null;

    #[ORM\Column(name: "Email", length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: "Fax", length: 255, nullable: true)]
    private ?string $fax = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getBanque(): ?int
    {
        return $this->banque;
    }

    public function setBanque(?int $banque): static
    {
        $this->banque = $banque;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getNumgsm(): ?string
    {
        return $this->numgsm;
    }

    public function setNumgsm(?string $numgsm): static
    {
        $this->numgsm = $numgsm;

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

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): static
    {
        $this->fax = $fax;

        return $this;
    }
}
