<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblfacturesachatsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblFacturesAchats')]
#[ORM\Entity(repositoryClass: TblfacturesachatsRepository::class)]
class Tblfacturesachats
{
    #[ORM\Column(name: "N°")]
    private ?int $n = null;

    #[ORM\Column(name: "EtatCommande", nullable: true)]
    private ?int $etatcommande = null;

    #[ORM\Column(name: "NumFacture", length: 255, nullable: true)]
    private ?string $numfacture = null;

    #[ORM\Column(name: "DateFacture", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefacture = null;

    #[ORM\Column(name: "ScanFacture", length: 255, nullable: true)]
    private ?string $scanfacture = null;

    #[ORM\Column(name: "TypeFrs", nullable: true)]
    private ?int $typefrs = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "Frs", nullable: true)]
    private ?int $frs = null;

    #[ORM\Column(name: "NumFactureSage", length: 255, nullable: true)]
    private ?string $numfacturesage = null;

    #[ORM\Column(name: "DateFactureSage", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefacturesage = null;

    #[ORM\Column(name: "BanqueFrs", nullable: true)]
    private ?int $banquefrs = null;

    #[ORM\Column(name: "Description", length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "Echeance_", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance_ = null;

    #[ORM\Column(name: "devise", nullable: true)]
    private ?int $devise = null;

    #[ORM\Column(name: "HT", nullable: true)]
    private ?float $ht = null;

    #[ORM\Column(name: "TVA", nullable: true)]
    private ?float $tva = null;

    #[ORM\Column(name: "Echeances", nullable: true)]
    private ?int $echeances = null;

    #[ORM\Column(name: "ModePaiement", nullable: true)]
    private ?int $modepaiement = null;

    #[ORM\Column(name: "payee")]
    private ?bool $payee = null;

    #[ORM\Column(name: "DomiciliationNotreBanque", nullable: true)]
    private ?int $domiciliationnotrebanque = null;

    #[ORM\Column(name: "DUM", length: 255, nullable: true)]
    private ?string $dum = null;

    #[ORM\Column(name: "DateDum", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datedum = null;

    #[ORM\Column(name: "CoursChangeDUM", nullable: true)]
    private ?float $courschangedum = null;

    #[ORM\Column(name: "ValeurDeclaree", nullable: true)]
    private ?float $valeurdeclaree = null;

    #[ORM\Column(name: "NumDossierImport", length: 255, nullable: true)]
    private ?string $numdossierimport = null;

    #[ORM\Column(name: "EI_Num", length: 255, nullable: true)]
    private ?string $eiNum = null;

    #[ORM\Column(name: "EI_Date", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eiDate = null;

    #[ORM\Column(name: "Locked")]
    private ?bool $locked = null;

    #[ORM\Column(name: "Proforma", length: 255, nullable: true)]
    private ?string $proforma = null;

    #[ORM\Column(name: "DateProforma", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateproforma = null;

    #[ORM\Column(name: "ScanProforma", length: 255, nullable: true)]
    private ?string $scanproforma = null;

    #[ORM\Column(name: "Annulee")]
    private ?bool $annulee = null;

    #[ORM\Column(name: "Valide")]
    private ?bool $valide = null;

    #[ORM\Column(name: "Societe")]
    private ?int $societe = null;

    #[ORM\Column(name: "Scan_EI", length: 255, nullable: true)]
    private ?string $scanEi = null;

    #[ORM\Column(name: "RefConteneur", length: 255, nullable: true)]
    private ?string $refconteneur = null;

    #[ORM\Column(name: "Livree")]
    private ?bool $livree = null;

    #[ORM\Column(name: "[Date Liv]", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateLiv = null;

    #[ORM\Column(name: "NmbreTC", nullable: true)]
    private ?int $nmbretc = null;

    #[ORM\Column(name: "DouaneTTC", nullable: true)]
    private ?float $douanettc = null;

    #[ORM\Column(name: "DouaneHT", nullable: true)]
    private ?float $douaneht = null;

    #[ORM\Column(name: "EcheanceDouane", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeancedouane = null;

    #[ORM\Column(name: "DouaneEstimatif")]
    private ?bool $douaneestimatif = null;

    #[ORM\Column(name: "DouanePayee")]
    private ?bool $douanepayee = null;

    #[ORM\Column(name: "BLNUM", length: 255, nullable: true)]
    private ?string $blnum = null;

    #[ORM\Column(name: "BLDATE", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $bldate = null;

    #[ORM\Column(name: "QtiteTotale", nullable: true)]
    private ?float $qtitetotale = null;

    #[ORM\Column(name: "QtiteTotaleUnite", nullable: true)]
    private ?int $qtitetotaleunite = null;

    #[ORM\Column(name: "Coef_PR_DEV_TO_TTC", nullable: true)]
    private ?float $coefPrDevToTtc = null;

    #[ORM\Column(name: "PR_LOCKED")]
    private ?bool $prLocked = null;

    public function getN(): ?int
    {
        return $this->n;
    }

    public function setN(int $n): static
    {
        $this->n = $n;

        return $this;
    }

    public function getEtatcommande(): ?int
    {
        return $this->etatcommande;
    }

    public function setEtatcommande(?int $etatcommande): static
    {
        $this->etatcommande = $etatcommande;

        return $this;
    }

    public function getNumfacture(): ?string
    {
        return $this->numfacture;
    }

    public function setNumfacture(?string $numfacture): static
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    public function getDatefacture(): ?\DateTimeInterface
    {
        return $this->datefacture;
    }

    public function setDatefacture(?\DateTimeInterface $datefacture): static
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    public function getScanfacture(): ?string
    {
        return $this->scanfacture;
    }

    public function setScanfacture(?string $scanfacture): static
    {
        $this->scanfacture = $scanfacture;

        return $this;
    }

    public function getTypefrs(): ?int
    {
        return $this->typefrs;
    }

    public function setTypefrs(?int $typefrs): static
    {
        $this->typefrs = $typefrs;

        return $this;
    }

    public function getEcheance(): ?\DateTimeInterface
    {
        return $this->echeance;
    }

    public function setEcheance(?\DateTimeInterface $echeance): static
    {
        $this->echeance = $echeance;

        return $this;
    }

    public function getFrs(): ?int
    {
        return $this->frs;
    }

    public function setFrs(?int $frs): static
    {
        $this->frs = $frs;

        return $this;
    }

    public function getNumfacturesage(): ?string
    {
        return $this->numfacturesage;
    }

    public function setNumfacturesage(?string $numfacturesage): static
    {
        $this->numfacturesage = $numfacturesage;

        return $this;
    }

    public function getDatefacturesage(): ?\DateTimeInterface
    {
        return $this->datefacturesage;
    }

    public function setDatefacturesage(?\DateTimeInterface $datefacturesage): static
    {
        $this->datefacturesage = $datefacturesage;

        return $this;
    }

    public function getBanquefrs(): ?int
    {
        return $this->banquefrs;
    }

    public function setBanquefrs(?int $banquefrs): static
    {
        $this->banquefrs = $banquefrs;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getEcheance_(): ?\DateTimeInterface
    {
        return $this->echeance_;
    }

    public function setEcheance_(?\DateTimeInterface $echeance_): static
    {
        $this->echeance_ = $echeance_;

        return $this;
    }

    public function getDevise(): ?int
    {
        return $this->devise;
    }

    public function setDevise(?int $devise): static
    {
        $this->devise = $devise;

        return $this;
    }

    public function getHt(): ?float
    {
        return $this->ht;
    }

    public function setHt(?float $ht): static
    {
        $this->ht = $ht;

        return $this;
    }

    public function getTva(): ?float
    {
        return $this->tva;
    }

    public function setTva(?float $tva): static
    {
        $this->tva = $tva;

        return $this;
    }

    public function getEcheances(): ?int
    {
        return $this->echeances;
    }

    public function setEcheances(?int $echeances): static
    {
        $this->echeances = $echeances;

        return $this;
    }

    public function getModepaiement(): ?int
    {
        return $this->modepaiement;
    }

    public function setModepaiement(?int $modepaiement): static
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    public function getPayee(): ?bool
    {
        return $this->payee;
    }

    public function setPayee(bool $payee): static
    {
        $this->payee = $payee;

        return $this;
    }

    public function getDomiciliationnotrebanque(): ?int
    {
        return $this->domiciliationnotrebanque;
    }

    public function setDomiciliationnotrebanque(?int $domiciliationnotrebanque): static
    {
        $this->domiciliationnotrebanque = $domiciliationnotrebanque;

        return $this;
    }

    public function getDum(): ?string
    {
        return $this->dum;
    }

    public function setDum(?string $dum): static
    {
        $this->dum = $dum;

        return $this;
    }

    public function getDatedum(): ?\DateTimeInterface
    {
        return $this->datedum;
    }

    public function setDatedum(?\DateTimeInterface $datedum): static
    {
        $this->datedum = $datedum;

        return $this;
    }

    public function getCourschangedum(): ?float
    {
        return $this->courschangedum;
    }

    public function setCourschangedum(?float $courschangedum): static
    {
        $this->courschangedum = $courschangedum;

        return $this;
    }

    public function getValeurdeclaree(): ?float
    {
        return $this->valeurdeclaree;
    }

    public function setValeurdeclaree(?float $valeurdeclaree): static
    {
        $this->valeurdeclaree = $valeurdeclaree;

        return $this;
    }

    public function getNumdossierimport(): ?string
    {
        return $this->numdossierimport;
    }

    public function setNumdossierimport(?string $numdossierimport): static
    {
        $this->numdossierimport = $numdossierimport;

        return $this;
    }

    public function getEiNum(): ?string
    {
        return $this->eiNum;
    }

    public function setEiNum(?string $eiNum): static
    {
        $this->eiNum = $eiNum;

        return $this;
    }

    public function getEiDate(): ?\DateTimeInterface
    {
        return $this->eiDate;
    }

    public function setEiDate(?\DateTimeInterface $eiDate): static
    {
        $this->eiDate = $eiDate;

        return $this;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): static
    {
        $this->locked = $locked;

        return $this;
    }

    public function getProforma(): ?string
    {
        return $this->proforma;
    }

    public function setProforma(?string $proforma): static
    {
        $this->proforma = $proforma;

        return $this;
    }

    public function getDateproforma(): ?\DateTimeInterface
    {
        return $this->dateproforma;
    }

    public function setDateproforma(?\DateTimeInterface $dateproforma): static
    {
        $this->dateproforma = $dateproforma;

        return $this;
    }

    public function getScanproforma(): ?string
    {
        return $this->scanproforma;
    }

    public function setScanproforma(?string $scanproforma): static
    {
        $this->scanproforma = $scanproforma;

        return $this;
    }

    public function getAnnulee(): ?bool
    {
        return $this->annulee;
    }

    public function setAnnulee(bool $annulee): static
    {
        $this->annulee = $annulee;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getSociete(): ?int
    {
        return $this->societe;
    }

    public function setSociete(int $societe): static
    {
        $this->societe = $societe;

        return $this;
    }

    public function getScanEi(): ?string
    {
        return $this->scanEi;
    }

    public function setScanEi(?string $scanEi): static
    {
        $this->scanEi = $scanEi;

        return $this;
    }

    public function getRefconteneur(): ?string
    {
        return $this->refconteneur;
    }

    public function setRefconteneur(?string $refconteneur): static
    {
        $this->refconteneur = $refconteneur;

        return $this;
    }

    public function getLivree(): ?bool
    {
        return $this->livree;
    }

    public function setLivree(bool $livree): static
    {
        $this->livree = $livree;

        return $this;
    }

    public function getDateLiv(): ?\DateTimeInterface
    {
        return $this->dateLiv;
    }

    public function setDateLiv(?\DateTimeInterface $dateLiv): static
    {
        $this->dateLiv = $dateLiv;

        return $this;
    }

    public function getNmbretc(): ?int
    {
        return $this->nmbretc;
    }

    public function setNmbretc(?int $nmbretc): static
    {
        $this->nmbretc = $nmbretc;

        return $this;
    }

    public function getDouanettc(): ?float
    {
        return $this->douanettc;
    }

    public function setDouanettc(?float $douanettc): static
    {
        $this->douanettc = $douanettc;

        return $this;
    }

    public function getDouaneht(): ?float
    {
        return $this->douaneht;
    }

    public function setDouaneht(?float $douaneht): static
    {
        $this->douaneht = $douaneht;

        return $this;
    }

    public function getEcheancedouane(): ?\DateTimeInterface
    {
        return $this->echeancedouane;
    }

    public function setEcheancedouane(?\DateTimeInterface $echeancedouane): static
    {
        $this->echeancedouane = $echeancedouane;

        return $this;
    }

    public function getDouaneestimatif(): ?bool
    {
        return $this->douaneestimatif;
    }

    public function setDouaneestimatif(bool $douaneestimatif): static
    {
        $this->douaneestimatif = $douaneestimatif;

        return $this;
    }

    public function getDouanepayee(): ?bool
    {
        return $this->douanepayee;
    }

    public function setDouanepayee(bool $douanepayee): static
    {
        $this->douanepayee = $douanepayee;

        return $this;
    }

    public function getBlnum(): ?string
    {
        return $this->blnum;
    }

    public function setBlnum(?string $blnum): static
    {
        $this->blnum = $blnum;

        return $this;
    }

    public function getBldate(): ?\DateTimeInterface
    {
        return $this->bldate;
    }

    public function setBldate(?\DateTimeInterface $bldate): static
    {
        $this->bldate = $bldate;

        return $this;
    }

    public function getQtitetotale(): ?float
    {
        return $this->qtitetotale;
    }

    public function setQtitetotale(?float $qtitetotale): static
    {
        $this->qtitetotale = $qtitetotale;

        return $this;
    }

    public function getQtitetotaleunite(): ?int
    {
        return $this->qtitetotaleunite;
    }

    public function setQtitetotaleunite(?int $qtitetotaleunite): static
    {
        $this->qtitetotaleunite = $qtitetotaleunite;

        return $this;
    }

    public function getCoefPrDevToTtc(): ?float
    {
        return $this->coefPrDevToTtc;
    }

    public function setCoefPrDevToTtc(?float $coefPrDevToTtc): static
    {
        $this->coefPrDevToTtc = $coefPrDevToTtc;

        return $this;
    }

    public function getPrLocked(): ?bool
    {
        return $this->prLocked;
    }

    public function setPrLocked(bool $prLocked): static
    {
        $this->prLocked = $prLocked;

        return $this;
    }
}
