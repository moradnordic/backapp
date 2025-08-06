<?php

namespace App\Entity\Nd;

use App\Repository\Nd\VehiculeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'vehicule')]
#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "marque", length: 100, nullable: true)]
    private ?string $marque = null;

    #[ORM\Column(name: "modele", length: 100, nullable: true)]
    private ?string $modele = null;

    #[ORM\Column(name: "type_vehicule", length: 100, nullable: true)]
    private ?string $typeVehicule = null;

    #[ORM\Column(name: "date_achat", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAchat = null;

    #[ORM\Column(name: "immatriculation", length: 50, nullable: true)]
    private ?string $immatriculation = null;

    #[ORM\Column(name: "immatriculation_temporaire", length: 50, nullable: true)]
    private ?string $immatriculationTemporaire = null;

    #[ORM\Column(name: "type_carburant_id", nullable: true)]
    private ?int $typeCarburantId = null;

    #[ORM\Column(name: "societe_id", nullable: true)]
    private ?int $societeId = null;

    #[ORM\Column(name: "employe_id", nullable: true)]
    private ?int $employeId = null;

    #[ORM\Column(name: "leasing")]
    private ?bool $leasing = null;

    #[ORM\Column(name: "leasing_sales_cost")]
    private ?bool $leasingSalesCost = null;

    #[ORM\Column(name: "definition", length: -1, nullable: true)]
    private ?string $definition = null;

    #[ORM\Column(name: "duree_leasing", nullable: true)]
    private ?int $dureeLeasing = null;

    #[ORM\Column(name: "banque_leasing_id", nullable: true)]
    private ?int $banqueLeasingId = null;

    #[ORM\Column(name: "montant_loyer_ttc", nullable: true)]
    private ?float $montantLoyerTtc = null;

    #[ORM\Column(name: "montant_loyer_ht", nullable: true)]
    private ?float $montantLoyerHt = null;

    #[ORM\Column(name: "loyer_tva", nullable: true)]
    private ?float $loyerTva = null;

    #[ORM\Column(name: "valeur_residuelle", nullable: true)]
    private ?float $valeurResiduelle = null;

    #[ORM\Column(name: "debut_loyer", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutLoyer = null;

    #[ORM\Column(name: "dernier_loyer", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dernierLoyer = null;

    #[ORM\Column(name: "visite_technique_mois", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $visiteTechniqueMois = null;

    #[ORM\Column(name: "prix_proforma_ht", nullable: true)]
    private ?float $prixProformaHt = null;

    #[ORM\Column(name: "prix_proforma_ttc", nullable: true)]
    private ?float $prixProformaTtc = null;

    #[ORM\Column(name: "nr_contrat", length: 100, nullable: true)]
    private ?string $nrContrat = null;

    #[ORM\Column(name: "scan_carte_grise", length: 255, nullable: true)]
    private ?string $scanCarteGrise = null;

    #[ORM\Column(name: "statut", length: 50, nullable: true)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTypeVehicule(): ?string
    {
        return $this->typeVehicule;
    }

    public function setTypeVehicule(?string $typeVehicule): static
    {
        $this->typeVehicule = $typeVehicule;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): static
    {
        $this->dateAchat = $dateAchat;

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

    public function getImmatriculationTemporaire(): ?string
    {
        return $this->immatriculationTemporaire;
    }

    public function setImmatriculationTemporaire(?string $immatriculationTemporaire): static
    {
        $this->immatriculationTemporaire = $immatriculationTemporaire;

        return $this;
    }

    public function getTypeCarburantId(): ?int
    {
        return $this->typeCarburantId;
    }

    public function setTypeCarburantId(?int $typeCarburantId): static
    {
        $this->typeCarburantId = $typeCarburantId;

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

    public function getEmployeId(): ?int
    {
        return $this->employeId;
    }

    public function setEmployeId(?int $employeId): static
    {
        $this->employeId = $employeId;

        return $this;
    }

    public function getLeasing(): ?bool
    {
        return $this->leasing;
    }

    public function setLeasing(bool $leasing): static
    {
        $this->leasing = $leasing;

        return $this;
    }

    public function getLeasingSalesCost(): ?bool
    {
        return $this->leasingSalesCost;
    }

    public function setLeasingSalesCost(bool $leasingSalesCost): static
    {
        $this->leasingSalesCost = $leasingSalesCost;

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

    public function getDureeLeasing(): ?int
    {
        return $this->dureeLeasing;
    }

    public function setDureeLeasing(?int $dureeLeasing): static
    {
        $this->dureeLeasing = $dureeLeasing;

        return $this;
    }

    public function getBanqueLeasingId(): ?int
    {
        return $this->banqueLeasingId;
    }

    public function setBanqueLeasingId(?int $banqueLeasingId): static
    {
        $this->banqueLeasingId = $banqueLeasingId;

        return $this;
    }

    public function getMontantLoyerTtc(): ?float
    {
        return $this->montantLoyerTtc;
    }

    public function setMontantLoyerTtc(?float $montantLoyerTtc): static
    {
        $this->montantLoyerTtc = $montantLoyerTtc;

        return $this;
    }

    public function getMontantLoyerHt(): ?float
    {
        return $this->montantLoyerHt;
    }

    public function setMontantLoyerHt(?float $montantLoyerHt): static
    {
        $this->montantLoyerHt = $montantLoyerHt;

        return $this;
    }

    public function getLoyerTva(): ?float
    {
        return $this->loyerTva;
    }

    public function setLoyerTva(?float $loyerTva): static
    {
        $this->loyerTva = $loyerTva;

        return $this;
    }

    public function getValeurResiduelle(): ?float
    {
        return $this->valeurResiduelle;
    }

    public function setValeurResiduelle(?float $valeurResiduelle): static
    {
        $this->valeurResiduelle = $valeurResiduelle;

        return $this;
    }

    public function getDebutLoyer(): ?\DateTimeInterface
    {
        return $this->debutLoyer;
    }

    public function setDebutLoyer(?\DateTimeInterface $debutLoyer): static
    {
        $this->debutLoyer = $debutLoyer;

        return $this;
    }

    public function getDernierLoyer(): ?\DateTimeInterface
    {
        return $this->dernierLoyer;
    }

    public function setDernierLoyer(?\DateTimeInterface $dernierLoyer): static
    {
        $this->dernierLoyer = $dernierLoyer;

        return $this;
    }

    public function getVisiteTechniqueMois(): ?\DateTimeInterface
    {
        return $this->visiteTechniqueMois;
    }

    public function setVisiteTechniqueMois(?\DateTimeInterface $visiteTechniqueMois): static
    {
        $this->visiteTechniqueMois = $visiteTechniqueMois;

        return $this;
    }

    public function getPrixProformaHt(): ?float
    {
        return $this->prixProformaHt;
    }

    public function setPrixProformaHt(?float $prixProformaHt): static
    {
        $this->prixProformaHt = $prixProformaHt;

        return $this;
    }

    public function getPrixProformaTtc(): ?float
    {
        return $this->prixProformaTtc;
    }

    public function setPrixProformaTtc(?float $prixProformaTtc): static
    {
        $this->prixProformaTtc = $prixProformaTtc;

        return $this;
    }

    public function getNrContrat(): ?string
    {
        return $this->nrContrat;
    }

    public function setNrContrat(?string $nrContrat): static
    {
        $this->nrContrat = $nrContrat;

        return $this;
    }

    public function getScanCarteGrise(): ?string
    {
        return $this->scanCarteGrise;
    }

    public function setScanCarteGrise(?string $scanCarteGrise): static
    {
        $this->scanCarteGrise = $scanCarteGrise;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
