<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblusersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblUsers')]
#[ORM\Entity(repositoryClass: TblusersRepository::class)]
class Tblusers
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Prenom", length: 100, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(name: "Nom", length: 100, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "Utilisateur", length: 100)]
    private ?string $utilisateur = null;

    #[ORM\Column(name: "email", length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: "UserIsAdmin")]
    private ?bool $userisadmin = null;

    #[ORM\Column(name: "SuperUser")]
    private ?bool $superuser = null;

    #[ORM\Column(name: "AccessDataComms")]
    private ?bool $accessdatacomms = null;

    #[ORM\Column(name: "PW", length: 100, nullable: true)]
    private ?string $pw = null;

    #[ORM\Column(name: "TouteMachine")]
    private ?bool $toutemachine = null;

    #[ORM\Column(name: "NomMachine", length: 255, nullable: true)]
    private ?string $nommachine = null;

    #[ORM\Column(name: "Champ1", length: 255, nullable: true)]
    private ?string $champ1 = null;

    #[ORM\Column(name: "LocalBaseAllowed")]
    private ?bool $localbaseallowed = null;

    #[ORM\Column(name: "DateNaissance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datenaissance = null;

    #[ORM\Column(name: "LieuNaissance", length: 20, nullable: true)]
    private ?string $lieunaissance = null;

    #[ORM\Column(name: "DateEntree", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateentree = null;

    #[ORM\Column(name: "DateSortie", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datesortie = null;

    #[ORM\Column(name: "ToujoursEmplye")]
    private ?bool $toujoursemplye = null;

    #[ORM\Column(name: "CIN", length: 10, nullable: true)]
    private ?string $cin = null;

    #[ORM\Column(name: "CNSS", length: 10, nullable: true)]
    private ?string $cnss = null;

    #[ORM\Column(name: "ADRESSE", length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: "VILLE", length: 20, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(name: "PAYS", length: 20, nullable: true)]
    private ?string $pays = null;

    #[ORM\Column(name: "GSM", length: 15, nullable: true)]
    private ?string $gsm = null;

    #[ORM\Column(name: "UserCompanyNumber", length: 255, nullable: true)]
    private ?string $usercompanynumber = null;

    #[ORM\Column(name: "UserLogin", length: 255, nullable: true)]
    private ?string $userlogin = null;

    #[ORM\Column(name: "UserPW", length: 255, nullable: true)]
    private ?string $userpw = null;

    #[ORM\Column(name: "UserCanUnvalidatePiece")]
    private ?bool $usercanunvalidatepiece = null;

    #[ORM\Column(name: "userCanUnvalidateVersement")]
    private ?bool $usercanunvalidateversement = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

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

    public function getUtilisateur(): ?string
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(string $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

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

    public function getUserisadmin(): ?bool
    {
        return $this->userisadmin;
    }

    public function setUserisadmin(bool $userisadmin): static
    {
        $this->userisadmin = $userisadmin;

        return $this;
    }

    public function getSuperuser(): ?bool
    {
        return $this->superuser;
    }

    public function setSuperuser(bool $superuser): static
    {
        $this->superuser = $superuser;

        return $this;
    }

    public function getAccessdatacomms(): ?bool
    {
        return $this->accessdatacomms;
    }

    public function setAccessdatacomms(bool $accessdatacomms): static
    {
        $this->accessdatacomms = $accessdatacomms;

        return $this;
    }

    public function getPw(): ?string
    {
        return $this->pw;
    }

    public function setPw(?string $pw): static
    {
        $this->pw = $pw;

        return $this;
    }

    public function getToutemachine(): ?bool
    {
        return $this->toutemachine;
    }

    public function setToutemachine(bool $toutemachine): static
    {
        $this->toutemachine = $toutemachine;

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

    public function getChamp1(): ?string
    {
        return $this->champ1;
    }

    public function setChamp1(?string $champ1): static
    {
        $this->champ1 = $champ1;

        return $this;
    }

    public function getLocalbaseallowed(): ?bool
    {
        return $this->localbaseallowed;
    }

    public function setLocalbaseallowed(bool $localbaseallowed): static
    {
        $this->localbaseallowed = $localbaseallowed;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(?\DateTimeInterface $datenaissance): static
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getLieunaissance(): ?string
    {
        return $this->lieunaissance;
    }

    public function setLieunaissance(?string $lieunaissance): static
    {
        $this->lieunaissance = $lieunaissance;

        return $this;
    }

    public function getDateentree(): ?\DateTimeInterface
    {
        return $this->dateentree;
    }

    public function setDateentree(?\DateTimeInterface $dateentree): static
    {
        $this->dateentree = $dateentree;

        return $this;
    }

    public function getDatesortie(): ?\DateTimeInterface
    {
        return $this->datesortie;
    }

    public function setDatesortie(?\DateTimeInterface $datesortie): static
    {
        $this->datesortie = $datesortie;

        return $this;
    }

    public function getToujoursemplye(): ?bool
    {
        return $this->toujoursemplye;
    }

    public function setToujoursemplye(bool $toujoursemplye): static
    {
        $this->toujoursemplye = $toujoursemplye;

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

    public function getCnss(): ?string
    {
        return $this->cnss;
    }

    public function setCnss(?string $cnss): static
    {
        $this->cnss = $cnss;

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

    public function getGsm(): ?string
    {
        return $this->gsm;
    }

    public function setGsm(?string $gsm): static
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getUsercompanynumber(): ?string
    {
        return $this->usercompanynumber;
    }

    public function setUsercompanynumber(?string $usercompanynumber): static
    {
        $this->usercompanynumber = $usercompanynumber;

        return $this;
    }

    public function getUserlogin(): ?string
    {
        return $this->userlogin;
    }

    public function setUserlogin(?string $userlogin): static
    {
        $this->userlogin = $userlogin;

        return $this;
    }

    public function getUserpw(): ?string
    {
        return $this->userpw;
    }

    public function setUserpw(?string $userpw): static
    {
        $this->userpw = $userpw;

        return $this;
    }

    public function getUsercanunvalidatepiece(): ?bool
    {
        return $this->usercanunvalidatepiece;
    }

    public function setUsercanunvalidatepiece(bool $usercanunvalidatepiece): static
    {
        $this->usercanunvalidatepiece = $usercanunvalidatepiece;

        return $this;
    }

    public function getUsercanunvalidateversement(): ?bool
    {
        return $this->usercanunvalidateversement;
    }

    public function setUsercanunvalidateversement(bool $usercanunvalidateversement): static
    {
        $this->usercanunvalidateversement = $usercanunvalidateversement;

        return $this;
    }
}
