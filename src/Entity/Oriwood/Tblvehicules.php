<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblvehiculesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblVehicules')]
#[ORM\Entity(repositoryClass: TblvehiculesRepository::class)]
class Tblvehicules
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "LeasON")]
    private ?bool $leason = null;

    #[ORM\Column(name: "LeasingSalesCost")]
    private ?bool $leasingsalescost = null;

    #[ORM\Column(name: "Definition", length: 255, nullable: true)]
    private ?string $definition = null;

    #[ORM\Column(name: "Marque", length: 255, nullable: true)]
    private ?string $marque = null;

    #[ORM\Column(name: "Modele", length: 255, nullable: true)]
    private ?string $modele = null;

    #[ORM\Column(name: "Type", length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(name: "DateAchat", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateachat = null;

    #[ORM\Column(name: "DureeLeasing", nullable: true)]
    private ?int $dureeleasing = null;

    #[ORM\Column(name: "BanqueLeasing", nullable: true)]
    private ?int $banqueleasing = null;

    #[ORM\Column(name: "MontantLoyerTTC", nullable: true)]
    private ?float $montantloyerttc = null;

    #[ORM\Column(name: "MontantLoyerHT", nullable: true)]
    private ?float $montantloyerht = null;

    #[ORM\Column(name: "LoyerTVA", nullable: true)]
    private ?float $loyertva = null;

    #[ORM\Column(name: "ValeurResiduel", nullable: true)]
    private ?float $valeurresiduel = null;

    #[ORM\Column(name: "DebutLoyer", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutloyer = null;

    #[ORM\Column(name: "DernierLoyer", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dernierloyer = null;

    #[ORM\Column(name: "VisiteTechniqueMois", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $visitetechniquemois = null;

    #[ORM\Column(name: "Immatriculation", length: 255, nullable: true)]
    private ?string $immatriculation = null;

    #[ORM\Column(name: "WW", length: 255, nullable: true)]
    private ?string $ww = null;

    #[ORM\Column(name: "TypeCarburant", nullable: true)]
    private ?int $typecarburant = null;

    #[ORM\Column(name: "Societe", nullable: true)]
    private ?int $societe = null;

    #[ORM\Column(name: "NrContrat", length: 255, nullable: true)]
    private ?string $nrcontrat = null;

    #[ORM\Column(name: "PrixProfomraHT", nullable: true)]
    private ?float $prixprofomraht = null;

    #[ORM\Column(name: "PrixProformaTTC", nullable: true)]
    private ?float $prixproformattc = null;

    #[ORM\Column(name: "UtilistaeurVehicule", nullable: true)]
    private ?int $utilistaeurvehicule = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getLeason(): ?bool
    {
        return $this->leason;
    }

    public function setLeason(bool $leason): static
    {
        $this->leason = $leason;

        return $this;
    }

    public function getLeasingsalescost(): ?bool
    {
        return $this->leasingsalescost;
    }

    public function setLeasingsalescost(bool $leasingsalescost): static
    {
        $this->leasingsalescost = $leasingsalescost;

        return $this;
    }

    public function getDefinition(): ?string
    {
        return $this->definition;
    }

    public function setDefinition(?string $definition): static
    {
        $this->definition = $definition;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDateachat(): ?\DateTimeInterface
    {
        return $this->dateachat;
    }

    public function setDateachat(?\DateTimeInterface $dateachat): static
    {
        $this->dateachat = $dateachat;

        return $this;
    }

    public function getDureeleasing(): ?int
    {
        return $this->dureeleasing;
    }

    public function setDureeleasing(?int $dureeleasing): static
    {
        $this->dureeleasing = $dureeleasing;

        return $this;
    }

    public function getBanqueleasing(): ?int
    {
        return $this->banqueleasing;
    }

    public function setBanqueleasing(?int $banqueleasing): static
    {
        $this->banqueleasing = $banqueleasing;

        return $this;
    }

    public function getMontantloyerttc(): ?float
    {
        return $this->montantloyerttc;
    }

    public function setMontantloyerttc(?float $montantloyerttc): static
    {
        $this->montantloyerttc = $montantloyerttc;

        return $this;
    }

    public function getMontantloyerht(): ?float
    {
        return $this->montantloyerht;
    }

    public function setMontantloyerht(?float $montantloyerht): static
    {
        $this->montantloyerht = $montantloyerht;

        return $this;
    }

    public function getLoyertva(): ?float
    {
        return $this->loyertva;
    }

    public function setLoyertva(?float $loyertva): static
    {
        $this->loyertva = $loyertva;

        return $this;
    }

    public function getValeurresiduel(): ?float
    {
        return $this->valeurresiduel;
    }

    public function setValeurresiduel(?float $valeurresiduel): static
    {
        $this->valeurresiduel = $valeurresiduel;

        return $this;
    }

    public function getDebutloyer(): ?\DateTimeInterface
    {
        return $this->debutloyer;
    }

    public function setDebutloyer(?\DateTimeInterface $debutloyer): static
    {
        $this->debutloyer = $debutloyer;

        return $this;
    }

    public function getDernierloyer(): ?\DateTimeInterface
    {
        return $this->dernierloyer;
    }

    public function setDernierloyer(?\DateTimeInterface $dernierloyer): static
    {
        $this->dernierloyer = $dernierloyer;

        return $this;
    }

    public function getVisitetechniquemois(): ?\DateTimeInterface
    {
        return $this->visitetechniquemois;
    }

    public function setVisitetechniquemois(?\DateTimeInterface $visitetechniquemois): static
    {
        $this->visitetechniquemois = $visitetechniquemois;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getWw(): ?string
    {
        return $this->ww;
    }

    public function setWw(?string $ww): static
    {
        $this->ww = $ww;

        return $this;
    }

    public function getTypecarburant(): ?int
    {
        return $this->typecarburant;
    }

    public function setTypecarburant(?int $typecarburant): static
    {
        $this->typecarburant = $typecarburant;

        return $this;
    }

    public function getSociete(): ?int
    {
        return $this->societe;
    }

    public function setSociete(?int $societe): static
    {
        $this->societe = $societe;

        return $this;
    }

    public function getNrcontrat(): ?string
    {
        return $this->nrcontrat;
    }

    public function setNrcontrat(?string $nrcontrat): static
    {
        $this->nrcontrat = $nrcontrat;

        return $this;
    }

    public function getPrixprofomraht(): ?float
    {
        return $this->prixprofomraht;
    }

    public function setPrixprofomraht(?float $prixprofomraht): static
    {
        $this->prixprofomraht = $prixprofomraht;

        return $this;
    }

    public function getPrixproformattc(): ?float
    {
        return $this->prixproformattc;
    }

    public function setPrixproformattc(?float $prixproformattc): static
    {
        $this->prixproformattc = $prixproformattc;

        return $this;
    }

    public function getUtilistaeurvehicule(): ?int
    {
        return $this->utilistaeurvehicule;
    }

    public function setUtilistaeurvehicule(?int $utilistaeurvehicule): static
    {
        $this->utilistaeurvehicule = $utilistaeurvehicule;

        return $this;
    }
}
