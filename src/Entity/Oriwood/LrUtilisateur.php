<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrUtilisateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Utilisateur')]
#[ORM\Entity(repositoryClass: LrUtilisateurRepository::class)]
class LrUtilisateur
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nom", length: 150, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "descr", length: 150, nullable: true)]
    private ?string $descr = null;

    #[ORM\Column(name: "email", length: 100, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: "pswd", length: 30, nullable: true)]
    private ?string $pswd = null;

    #[ORM\Column(name: "grput", length: 100, nullable: true)]
    private ?string $grput = null;

    #[ORM\Column(name: "statu", nullable: true)]
    private ?int $statu = null;

    #[ORM\Column(name: "Saisie_Enc", nullable: true)]
    private ?int $saisieEnc = null;

    #[ORM\Column(name: "Gestion_Enc", nullable: true)]
    private ?int $gestionEnc = null;

    #[ORM\Column(name: "Saisie_Imp", nullable: true)]
    private ?int $saisieImp = null;

    #[ORM\Column(name: "Gestion_Imp", nullable: true)]
    private ?int $gestionImp = null;

    #[ORM\Column(name: "Touts_Ges", nullable: true)]
    private ?int $toutsGes = null;

    #[ORM\Column(name: "Supp", nullable: true)]
    private ?int $supp = null;

    #[ORM\Column(name: "ConsImp", nullable: true)]
    private ?int $consimp = null;

    #[ORM\Column(name: "UserConec", nullable: true)]
    private ?int $userconec = null;

    #[ORM\Column(name: "Modif", nullable: true)]
    private ?int $modif = null;

    #[ORM\Column(name: "CrtClt", nullable: true)]
    private ?int $crtclt = null;

    #[ORM\Column(name: "ConsVirF", nullable: true)]
    private ?int $consvirf = null;

    #[ORM\Column(name: "RAPPRO", nullable: true)]
    private ?int $rappro = null;

    #[ORM\Column(name: "CHQIMP", nullable: true)]
    private ?int $chqimp = null;

    #[ORM\Column(name: "Trésorerie", nullable: true)]
    private ?int $trésorerie = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function setDescr(?string $descr): static
    {
        $this->descr = $descr;

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

    public function getPswd(): ?string
    {
        return $this->pswd;
    }

    public function setPswd(?string $pswd): static
    {
        $this->pswd = $pswd;

        return $this;
    }

    public function getGrput(): ?string
    {
        return $this->grput;
    }

    public function setGrput(?string $grput): static
    {
        $this->grput = $grput;

        return $this;
    }

    public function getStatu(): ?int
    {
        return $this->statu;
    }

    public function setStatu(?int $statu): static
    {
        $this->statu = $statu;

        return $this;
    }

    public function getSaisieEnc(): ?int
    {
        return $this->saisieEnc;
    }

    public function setSaisieEnc(?int $saisieEnc): static
    {
        $this->saisieEnc = $saisieEnc;

        return $this;
    }

    public function getGestionEnc(): ?int
    {
        return $this->gestionEnc;
    }

    public function setGestionEnc(?int $gestionEnc): static
    {
        $this->gestionEnc = $gestionEnc;

        return $this;
    }

    public function getSaisieImp(): ?int
    {
        return $this->saisieImp;
    }

    public function setSaisieImp(?int $saisieImp): static
    {
        $this->saisieImp = $saisieImp;

        return $this;
    }

    public function getGestionImp(): ?int
    {
        return $this->gestionImp;
    }

    public function setGestionImp(?int $gestionImp): static
    {
        $this->gestionImp = $gestionImp;

        return $this;
    }

    public function getToutsGes(): ?int
    {
        return $this->toutsGes;
    }

    public function setToutsGes(?int $toutsGes): static
    {
        $this->toutsGes = $toutsGes;

        return $this;
    }

    public function getSupp(): ?int
    {
        return $this->supp;
    }

    public function setSupp(?int $supp): static
    {
        $this->supp = $supp;

        return $this;
    }

    public function getConsimp(): ?int
    {
        return $this->consimp;
    }

    public function setConsimp(?int $consimp): static
    {
        $this->consimp = $consimp;

        return $this;
    }

    public function getUserconec(): ?int
    {
        return $this->userconec;
    }

    public function setUserconec(?int $userconec): static
    {
        $this->userconec = $userconec;

        return $this;
    }

    public function getModif(): ?int
    {
        return $this->modif;
    }

    public function setModif(?int $modif): static
    {
        $this->modif = $modif;

        return $this;
    }

    public function getCrtclt(): ?int
    {
        return $this->crtclt;
    }

    public function setCrtclt(?int $crtclt): static
    {
        $this->crtclt = $crtclt;

        return $this;
    }

    public function getConsvirf(): ?int
    {
        return $this->consvirf;
    }

    public function setConsvirf(?int $consvirf): static
    {
        $this->consvirf = $consvirf;

        return $this;
    }

    public function getRappro(): ?int
    {
        return $this->rappro;
    }

    public function setRappro(?int $rappro): static
    {
        $this->rappro = $rappro;

        return $this;
    }

    public function getChqimp(): ?int
    {
        return $this->chqimp;
    }

    public function setChqimp(?int $chqimp): static
    {
        $this->chqimp = $chqimp;

        return $this;
    }

    public function getTrésorerie(): ?int
    {
        return $this->trésorerie;
    }

    public function setTrésorerie(?int $trésorerie): static
    {
        $this->trésorerie = $trésorerie;

        return $this;
    }
}
