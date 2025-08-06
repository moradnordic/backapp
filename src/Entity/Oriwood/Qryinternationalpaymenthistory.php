<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\QryinternationalpaymenthistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'qryInternationalPaymentHistory')]
#[ORM\Entity(repositoryClass: QryinternationalpaymenthistoryRepository::class)]
class Qryinternationalpaymenthistory
{
    #[ORM\Column(name: "NomFrs", length: 255, nullable: true)]
    private ?string $nomfrs = null;

    #[ORM\Column(name: "PaysFrs", length: 255, nullable: true)]
    private ?string $paysfrs = null;

    #[ORM\Column(name: "Dev", nullable: true)]
    private ?int $dev = null;

    #[ORM\Column(name: "ModeDePaiement", nullable: true)]
    private ?int $modedepaiement = null;

    #[ORM\Column(name: "MontantReglementEcheance", nullable: true)]
    private ?float $montantreglementecheance = null;

    #[ORM\Column(name: "DateValeur", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datevaleur = null;

    #[ORM\Column(name: "Confirmed")]
    private ?bool $confirmed = null;

    #[ORM\Column(name: "DateReglement", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereglement = null;

    #[ORM\Column(name: "[tblReglementFrs.N°]")]
    private ?int $tblreglementfrs_n = null;

    #[ORM\Column(name: "Facture", nullable: true)]
    private ?int $facture = null;

    #[ORM\Column(name: "NumFacture", length: 255, nullable: true)]
    private ?string $numfacture = null;

    #[ORM\Column(name: "DateFacture", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefacture = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "[tblDevises.devise]", length: 255, nullable: true)]
    private ?string $tbldevises_devise = null;

    #[ORM\Column(name: "ScanOrdreDeVirement", length: 255, nullable: true)]
    private ?string $scanordredevirement = null;

    #[ORM\Column(name: "ScanSwift", length: 255, nullable: true)]
    private ?string $scanswift = null;

    #[ORM\Column(name: "TextSwift", length: 255, nullable: true)]
    private ?string $textswift = null;

    #[ORM\Column(name: "[tblReglementFrs.Frs]", nullable: true)]
    private ?int $tblreglementfrs_frs = null;

    #[ORM\Column(name: "TypeOperation", nullable: true)]
    private ?int $typeoperation = null;

    #[ORM\Column(name: "ModeFinancementRegFrs", nullable: true)]
    private ?int $modefinancementregfrs = null;

    #[ORM\Column(name: "TypeEmprunt", nullable: true)]
    private ?int $typeemprunt = null;

    #[ORM\Column(name: "NrEmprunt", nullable: true)]
    private ?int $nremprunt = null;

    #[ORM\Column(name: "DeposeOuiNon")]
    private ?bool $deposeouinon = null;

    #[ORM\Column(name: "Online_Papier", length: 1, nullable: true)]
    private ?string $onlinePapier = null;

    #[ORM\Column(name: "[tblReglementFrs.Cours]", nullable: true)]
    private ?float $tblreglementfrs_cours = null;

    #[ORM\Column(name: "MontantMAD", nullable: true)]
    private ?float $montantmad = null;

    #[ORM\Column(name: "[tblFrs.N°]")]
    private ?int $tblfrs_n = null;

    #[ORM\Column(name: "[tblFrs.TypeFrs]", nullable: true)]
    private ?int $tblfrs_typefrs = null;

    #[ORM\Column(name: "CodeFrsSage", length: 255, nullable: true)]
    private ?string $codefrssage = null;

    #[ORM\Column(name: "FrsFullName", length: 255, nullable: true)]
    private ?string $frsfullname = null;

    #[ORM\Column(name: "AdresseFrs", length: 255, nullable: true)]
    private ?string $adressefrs = null;

    #[ORM\Column(name: "VilleFrs", length: 255, nullable: true)]
    private ?string $villefrs = null;

    #[ORM\Column(name: "CodePostalFrs", length: 255, nullable: true)]
    private ?string $codepostalfrs = null;

    #[ORM\Column(name: "ManagersFrs", nullable: true)]
    private ?int $managersfrs = null;

    #[ORM\Column(name: "[tblFacturesAchats.N°]")]
    private ?int $tblfacturesachats_n = null;

    #[ORM\Column(name: "EtatCommande", nullable: true)]
    private ?int $etatcommande = null;

    #[ORM\Column(name: "ScanFacture", length: 255, nullable: true)]
    private ?string $scanfacture = null;

    #[ORM\Column(name: "[tblFacturesAchats.TypeFrs]", nullable: true)]
    private ?int $tblfacturesachats_typefrs = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "[tblFacturesAchats.Frs]", nullable: true)]
    private ?int $tblfacturesachats_frs = null;

    #[ORM\Column(name: "NumFactureSage", length: 255, nullable: true)]
    private ?string $numfacturesage = null;

    #[ORM\Column(name: "DateFactureSage", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefacturesage = null;

    #[ORM\Column(name: "BanqueFrs", nullable: true)]
    private ?int $banquefrs = null;

    #[ORM\Column(name: "Description", length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: "Echeance_", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance_ = null;

    #[ORM\Column(name: "[tblFacturesAchats.devise]", nullable: true)]
    private ?int $tblfacturesachats_devise = null;

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

    #[ORM\Column(name: "Societe", nullable: true)]
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

    #[ORM\Column(name: "BLNum", length: 255, nullable: true)]
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

    #[ORM\Column(name: "[tblDevises.N°]")]
    private ?int $tbldevises_n = null;

    #[ORM\Column(name: "[tblDevises.TypeFrs]", nullable: true)]
    private ?int $tbldevises_typefrs = null;

    #[ORM\Column(name: "[tblDevises.Cours]", nullable: true)]
    private ?float $tbldevises_cours = null;

    public function getNomfrs(): ?string
    {
        return $this->nomfrs;
    }

    public function setNomfrs(?string $nomfrs): static
    {
        $this->nomfrs = $nomfrs;

        return $this;
    }

    public function getPaysfrs(): ?string
    {
        return $this->paysfrs;
    }

    public function setPaysfrs(?string $paysfrs): static
    {
        $this->paysfrs = $paysfrs;

        return $this;
    }

    public function getDev(): ?int
    {
        return $this->dev;
    }

    public function setDev(?int $dev): static
    {
        $this->dev = $dev;

        return $this;
    }

    public function getModedepaiement(): ?int
    {
        return $this->modedepaiement;
    }

    public function setModedepaiement(?int $modedepaiement): static
    {
        $this->modedepaiement = $modedepaiement;

        return $this;
    }

    public function getMontantreglementecheance(): ?float
    {
        return $this->montantreglementecheance;
    }

    public function setMontantreglementecheance(?float $montantreglementecheance): static
    {
        $this->montantreglementecheance = $montantreglementecheance;

        return $this;
    }

    public function getDatevaleur(): ?\DateTimeInterface
    {
        return $this->datevaleur;
    }

    public function setDatevaleur(?\DateTimeInterface $datevaleur): static
    {
        $this->datevaleur = $datevaleur;

        return $this;
    }

    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): static
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getDatereglement(): ?\DateTimeInterface
    {
        return $this->datereglement;
    }

    public function setDatereglement(?\DateTimeInterface $datereglement): static
    {
        $this->datereglement = $datereglement;

        return $this;
    }

    public function getTblreglementfrs_n(): ?int
    {
        return $this->tblreglementfrs_n;
    }

    public function setTblreglementfrs_n(int $tblreglementfrs_n): static
    {
        $this->tblreglementfrs_n = $tblreglementfrs_n;

        return $this;
    }

    public function getFacture(): ?int
    {
        return $this->facture;
    }

    public function setFacture(?int $facture): static
    {
        $this->facture = $facture;

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

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getTbldevises_devise(): ?string
    {
        return $this->tbldevises_devise;
    }

    public function setTbldevises_devise(?string $tbldevises_devise): static
    {
        $this->tbldevises_devise = $tbldevises_devise;

        return $this;
    }

    public function getScanordredevirement(): ?string
    {
        return $this->scanordredevirement;
    }

    public function setScanordredevirement(?string $scanordredevirement): static
    {
        $this->scanordredevirement = $scanordredevirement;

        return $this;
    }

    public function getScanswift(): ?string
    {
        return $this->scanswift;
    }

    public function setScanswift(?string $scanswift): static
    {
        $this->scanswift = $scanswift;

        return $this;
    }

    public function getTextswift(): ?string
    {
        return $this->textswift;
    }

    public function setTextswift(?string $textswift): static
    {
        $this->textswift = $textswift;

        return $this;
    }

    public function getTblreglementfrs_frs(): ?int
    {
        return $this->tblreglementfrs_frs;
    }

    public function setTblreglementfrs_frs(?int $tblreglementfrs_frs): static
    {
        $this->tblreglementfrs_frs = $tblreglementfrs_frs;

        return $this;
    }

    public function getTypeoperation(): ?int
    {
        return $this->typeoperation;
    }

    public function setTypeoperation(?int $typeoperation): static
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    public function getModefinancementregfrs(): ?int
    {
        return $this->modefinancementregfrs;
    }

    public function setModefinancementregfrs(?int $modefinancementregfrs): static
    {
        $this->modefinancementregfrs = $modefinancementregfrs;

        return $this;
    }

    public function getTypeemprunt(): ?int
    {
        return $this->typeemprunt;
    }

    public function setTypeemprunt(?int $typeemprunt): static
    {
        $this->typeemprunt = $typeemprunt;

        return $this;
    }

    public function getNremprunt(): ?int
    {
        return $this->nremprunt;
    }

    public function setNremprunt(?int $nremprunt): static
    {
        $this->nremprunt = $nremprunt;

        return $this;
    }

    public function getDeposeouinon(): ?bool
    {
        return $this->deposeouinon;
    }

    public function setDeposeouinon(bool $deposeouinon): static
    {
        $this->deposeouinon = $deposeouinon;

        return $this;
    }

    public function getOnlinePapier(): ?string
    {
        return $this->onlinePapier;
    }

    public function setOnlinePapier(?string $onlinePapier): static
    {
        $this->onlinePapier = $onlinePapier;

        return $this;
    }

    public function getTblreglementfrs_cours(): ?float
    {
        return $this->tblreglementfrs_cours;
    }

    public function setTblreglementfrs_cours(?float $tblreglementfrs_cours): static
    {
        $this->tblreglementfrs_cours = $tblreglementfrs_cours;

        return $this;
    }

    public function getMontantmad(): ?float
    {
        return $this->montantmad;
    }

    public function setMontantmad(?float $montantmad): static
    {
        $this->montantmad = $montantmad;

        return $this;
    }

    public function getTblfrs_n(): ?int
    {
        return $this->tblfrs_n;
    }

    public function setTblfrs_n(int $tblfrs_n): static
    {
        $this->tblfrs_n = $tblfrs_n;

        return $this;
    }

    public function getTblfrs_typefrs(): ?int
    {
        return $this->tblfrs_typefrs;
    }

    public function setTblfrs_typefrs(?int $tblfrs_typefrs): static
    {
        $this->tblfrs_typefrs = $tblfrs_typefrs;

        return $this;
    }

    public function getCodefrssage(): ?string
    {
        return $this->codefrssage;
    }

    public function setCodefrssage(?string $codefrssage): static
    {
        $this->codefrssage = $codefrssage;

        return $this;
    }

    public function getFrsfullname(): ?string
    {
        return $this->frsfullname;
    }

    public function setFrsfullname(?string $frsfullname): static
    {
        $this->frsfullname = $frsfullname;

        return $this;
    }

    public function getAdressefrs(): ?string
    {
        return $this->adressefrs;
    }

    public function setAdressefrs(?string $adressefrs): static
    {
        $this->adressefrs = $adressefrs;

        return $this;
    }

    public function getVillefrs(): ?string
    {
        return $this->villefrs;
    }

    public function setVillefrs(?string $villefrs): static
    {
        $this->villefrs = $villefrs;

        return $this;
    }

    public function getCodepostalfrs(): ?string
    {
        return $this->codepostalfrs;
    }

    public function setCodepostalfrs(?string $codepostalfrs): static
    {
        $this->codepostalfrs = $codepostalfrs;

        return $this;
    }

    public function getManagersfrs(): ?int
    {
        return $this->managersfrs;
    }

    public function setManagersfrs(?int $managersfrs): static
    {
        $this->managersfrs = $managersfrs;

        return $this;
    }

    public function getTblfacturesachats_n(): ?int
    {
        return $this->tblfacturesachats_n;
    }

    public function setTblfacturesachats_n(int $tblfacturesachats_n): static
    {
        $this->tblfacturesachats_n = $tblfacturesachats_n;

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

    public function getScanfacture(): ?string
    {
        return $this->scanfacture;
    }

    public function setScanfacture(?string $scanfacture): static
    {
        $this->scanfacture = $scanfacture;

        return $this;
    }

    public function getTblfacturesachats_typefrs(): ?int
    {
        return $this->tblfacturesachats_typefrs;
    }

    public function setTblfacturesachats_typefrs(?int $tblfacturesachats_typefrs): static
    {
        $this->tblfacturesachats_typefrs = $tblfacturesachats_typefrs;

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

    public function getTblfacturesachats_frs(): ?int
    {
        return $this->tblfacturesachats_frs;
    }

    public function setTblfacturesachats_frs(?int $tblfacturesachats_frs): static
    {
        $this->tblfacturesachats_frs = $tblfacturesachats_frs;

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

    public function getEcheance_(): ?\DateTimeInterface
    {
        return $this->echeance_;
    }

    public function setEcheance_(?\DateTimeInterface $echeance_): static
    {
        $this->echeance_ = $echeance_;

        return $this;
    }

    public function getTblfacturesachats_devise(): ?int
    {
        return $this->tblfacturesachats_devise;
    }

    public function setTblfacturesachats_devise(?int $tblfacturesachats_devise): static
    {
        $this->tblfacturesachats_devise = $tblfacturesachats_devise;

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

    public function setSociete(?int $societe): static
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

    public function getTbldevises_n(): ?int
    {
        return $this->tbldevises_n;
    }

    public function setTbldevises_n(int $tbldevises_n): static
    {
        $this->tbldevises_n = $tbldevises_n;

        return $this;
    }

    public function getTbldevises_typefrs(): ?int
    {
        return $this->tbldevises_typefrs;
    }

    public function setTbldevises_typefrs(?int $tbldevises_typefrs): static
    {
        $this->tbldevises_typefrs = $tbldevises_typefrs;

        return $this;
    }

    public function getTbldevises_cours(): ?float
    {
        return $this->tbldevises_cours;
    }

    public function setTbldevises_cours(?float $tbldevises_cours): static
    {
        $this->tbldevises_cours = $tbldevises_cours;

        return $this;
    }
}
