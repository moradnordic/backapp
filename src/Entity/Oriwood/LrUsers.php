<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrUsersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Users')]
#[ORM\Entity(repositoryClass: LrUsersRepository::class)]
class LrUsers
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nom", length: 100, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "descr", length: 200, nullable: true)]
    private ?string $descr = null;

    #[ORM\Column(name: "pswd", length: 200, nullable: true)]
    private ?string $pswd = null;

    #[ORM\Column(name: "grput", length: 150, nullable: true)]
    private ?string $grput = null;

    #[ORM\Column(name: "statu", type: Types::SMALLINT, nullable: true)]
    private ?int $statu = null;

    #[ORM\Column(name: "UserConec", type: Types::SMALLINT, nullable: true)]
    private ?int $userconec = null;

    #[ORM\Column(name: "Gén_Fact", nullable: true)]
    private ?int $génFact = null;

    #[ORM\Column(name: "Gést_Fact", nullable: true)]
    private ?int $géstFact = null;

    #[ORM\Column(name: "import", nullable: true)]
    private ?int $import = null;

    #[ORM\Column(name: "journ_vte", nullable: true)]
    private ?int $journVte = null;

    #[ORM\Column(name: "vte_art", nullable: true)]
    private ?int $vteArt = null;

    #[ORM\Column(name: "mise_art", nullable: true)]
    private ?int $miseArt = null;

    #[ORM\Column(name: "Gén_num", nullable: true)]
    private ?int $génNum = null;

    #[ORM\Column(name: "utils", nullable: true)]
    private ?int $utils = null;

    #[ORM\Column(name: "coffe", nullable: true)]
    private ?int $coffe = null;

    #[ORM\Column(name: "Gést_num", nullable: true)]
    private ?int $géstNum = null;

    #[ORM\Column(name: "prix_Rev", nullable: true)]
    private ?int $prixRev = null;

    #[ORM\Column(name: "verif_Fact", nullable: true)]
    private ?int $verifFact = null;

    #[ORM\Column(name: "sycron_stk", nullable: true)]
    private ?int $sycronStk = null;

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

    public function getUserconec(): ?int
    {
        return $this->userconec;
    }

    public function setUserconec(?int $userconec): static
    {
        $this->userconec = $userconec;

        return $this;
    }

    public function getGénFact(): ?int
    {
        return $this->génFact;
    }

    public function setGénFact(?int $génFact): static
    {
        $this->génFact = $génFact;

        return $this;
    }

    public function getGéstFact(): ?int
    {
        return $this->géstFact;
    }

    public function setGéstFact(?int $géstFact): static
    {
        $this->géstFact = $géstFact;

        return $this;
    }

    public function getImport(): ?int
    {
        return $this->import;
    }

    public function setImport(?int $import): static
    {
        $this->import = $import;

        return $this;
    }

    public function getJournVte(): ?int
    {
        return $this->journVte;
    }

    public function setJournVte(?int $journVte): static
    {
        $this->journVte = $journVte;

        return $this;
    }

    public function getVteArt(): ?int
    {
        return $this->vteArt;
    }

    public function setVteArt(?int $vteArt): static
    {
        $this->vteArt = $vteArt;

        return $this;
    }

    public function getMiseArt(): ?int
    {
        return $this->miseArt;
    }

    public function setMiseArt(?int $miseArt): static
    {
        $this->miseArt = $miseArt;

        return $this;
    }

    public function getGénNum(): ?int
    {
        return $this->génNum;
    }

    public function setGénNum(?int $génNum): static
    {
        $this->génNum = $génNum;

        return $this;
    }

    public function getUtils(): ?int
    {
        return $this->utils;
    }

    public function setUtils(?int $utils): static
    {
        $this->utils = $utils;

        return $this;
    }

    public function getCoffe(): ?int
    {
        return $this->coffe;
    }

    public function setCoffe(?int $coffe): static
    {
        $this->coffe = $coffe;

        return $this;
    }

    public function getGéstNum(): ?int
    {
        return $this->géstNum;
    }

    public function setGéstNum(?int $géstNum): static
    {
        $this->géstNum = $géstNum;

        return $this;
    }

    public function getPrixRev(): ?int
    {
        return $this->prixRev;
    }

    public function setPrixRev(?int $prixRev): static
    {
        $this->prixRev = $prixRev;

        return $this;
    }

    public function getVerifFact(): ?int
    {
        return $this->verifFact;
    }

    public function setVerifFact(?int $verifFact): static
    {
        $this->verifFact = $verifFact;

        return $this;
    }

    public function getSycronStk(): ?int
    {
        return $this->sycronStk;
    }

    public function setSycronStk(?int $sycronStk): static
    {
        $this->sycronStk = $sycronStk;

        return $this;
    }
}
