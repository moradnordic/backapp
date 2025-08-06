<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbsLoginlogsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbS_LoginLogs')]
#[ORM\Entity(repositoryClass: TbsLoginlogsRepository::class)]
class TbsLoginlogs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "UserID", nullable: true)]
    private ?int $userid = null;

    #[ORM\Column(name: "NomUtilisateurSaisi", length: 255, nullable: true)]
    private ?string $nomutilisateursaisi = null;

    #[ORM\Column(name: "PwSaisi", length: 255, nullable: true)]
    private ?string $pwsaisi = null;

    #[ORM\Column(name: "TypeDeConnectionChoisie", length: 255, nullable: true)]
    private ?string $typedeconnectionchoisie = null;

    #[ORM\Column(name: "CheminBaseChoisi", length: 255, nullable: true)]
    private ?string $cheminbasechoisi = null;

    #[ORM\Column(name: "AccesAccorde")]
    private ?bool $accesaccorde = null;

    #[ORM\Column(name: "NomMachine", length: 255, nullable: true)]
    private ?string $nommachine = null;

    #[ORM\Column(name: "AdressIPMachine", length: 20, nullable: true)]
    private ?string $adressipmachine = null;

    #[ORM\Column(name: "AdressIPRouter", length: 20, nullable: true)]
    private ?string $adressiprouter = null;

    #[ORM\Column(name: "NomDeDomaine", length: 100, nullable: true)]
    private ?string $nomdedomaine = null;

    #[ORM\Column(name: "DateEtHeure", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateetheure = null;

    #[ORM\Column(name: "Motif", length: 255, nullable: true)]
    private ?string $motif = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(?int $userid): static
    {
        $this->userid = $userid;

        return $this;
    }

    public function getNomutilisateursaisi(): ?string
    {
        return $this->nomutilisateursaisi;
    }

    public function setNomutilisateursaisi(?string $nomutilisateursaisi): static
    {
        $this->nomutilisateursaisi = $nomutilisateursaisi;

        return $this;
    }

    public function getPwsaisi(): ?string
    {
        return $this->pwsaisi;
    }

    public function setPwsaisi(?string $pwsaisi): static
    {
        $this->pwsaisi = $pwsaisi;

        return $this;
    }

    public function getTypedeconnectionchoisie(): ?string
    {
        return $this->typedeconnectionchoisie;
    }

    public function setTypedeconnectionchoisie(?string $typedeconnectionchoisie): static
    {
        $this->typedeconnectionchoisie = $typedeconnectionchoisie;

        return $this;
    }

    public function getCheminbasechoisi(): ?string
    {
        return $this->cheminbasechoisi;
    }

    public function setCheminbasechoisi(?string $cheminbasechoisi): static
    {
        $this->cheminbasechoisi = $cheminbasechoisi;

        return $this;
    }

    public function getAccesaccorde(): ?bool
    {
        return $this->accesaccorde;
    }

    public function setAccesaccorde(bool $accesaccorde): static
    {
        $this->accesaccorde = $accesaccorde;

        return $this;
    }

    public function getNommachine(): ?string
    {
        return $this->nommachine;
    }

    public function setNommachine(?string $nommachine): static
    {
        $this->nommachine = $nommachine;

        return $this;
    }

    public function getAdressipmachine(): ?string
    {
        return $this->adressipmachine;
    }

    public function setAdressipmachine(?string $adressipmachine): static
    {
        $this->adressipmachine = $adressipmachine;

        return $this;
    }

    public function getAdressiprouter(): ?string
    {
        return $this->adressiprouter;
    }

    public function setAdressiprouter(?string $adressiprouter): static
    {
        $this->adressiprouter = $adressiprouter;

        return $this;
    }

    public function getNomdedomaine(): ?string
    {
        return $this->nomdedomaine;
    }

    public function setNomdedomaine(?string $nomdedomaine): static
    {
        $this->nomdedomaine = $nomdedomaine;

        return $this;
    }

    public function getDateetheure(): ?\DateTimeInterface
    {
        return $this->dateetheure;
    }

    public function setDateetheure(?\DateTimeInterface $dateetheure): static
    {
        $this->dateetheure = $dateetheure;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): static
    {
        $this->motif = $motif;

        return $this;
    }
}
