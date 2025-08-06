<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDocenteteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCENTETE')]
#[ORM\Index(name: 'IHashOrder_F_DOCENTETE', columns: ['cbHashOrder'])]
#[ORM\UniqueConstraint(name: 'IDO_TPIECE', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_TTIERS', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_TDATE', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_TIERS', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_DATE', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_REPRESENT', columns: ['CO_No'])]
#[ORM\Index(name: 'IDO_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'IDO_DEPOTCL', columns: ['LI_No'])]
#[ORM\Index(name: 'IDO_NUM', columns: ['cbCT_NumPayeur'])]
#[ORM\Index(name: 'IDO_ANAL', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'IDO_SOUCHE', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_CGNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'IDO_DOMSOUCHE', columns: ['DO_Souche'])]
#[ORM\Index(name: 'IDO_CAISSIER', columns: ['CO_NoCaissier'])]
#[ORM\Index(name: 'IDO_CAISSE', columns: ['cbDO_Tiers'])]
#[ORM\Index(name: 'IDO_CLOTURE', columns: ['DO_Date'])]
#[ORM\Index(name: 'IDO_CENTRALE', columns: ['cbCT_NumCentrale'])]
#[ORM\Index(name: 'IDO_FACTURE', columns: ['cbDO_FactureFrs'])]
#[ORM\Index(name: 'IDO_PIECEORIG', columns: ['cbDO_PieceOrig'])]
#[ORM\Index(name: 'IDO_TTIERSDEPOT', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_TDATEDEPOT', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_TIERSDEPOT', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IDO_DATEDEPOT', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'FKIA_F_DOCENTETE_CA_No', columns: ['cbCA_No'])]
#[ORM\Index(name: 'FKIA_F_DOCENTETE_DE_No', columns: ['cbDE_No'])]
#[ORM\Entity(repositoryClass: FDocenteteRepository::class)]
class FDocentete
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DO_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $doDomaine = null;

    #[ORM\Column(name: "DO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $doType = null;

    #[ORM\Column(name: "DO_Piece", length: 9, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cbDO_Piece", type: Types::BINARY, nullable: true)]
    private $cbdoPiece = null;

    #[ORM\Column(name: "DO_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDate = null;

    #[ORM\Column(name: "DO_Ref", length: 17, nullable: true)]
    private ?string $doRef = null;

    #[ORM\Column(name: "DO_Tiers", length: 17, nullable: true)]
    private ?string $doTiers = null;

    #[ORM\Column(name: "cbDO_Tiers", type: Types::BINARY, nullable: true)]
    private $cbdoTiers = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "DO_Period", type: Types::SMALLINT, nullable: true)]
    private ?int $doPeriod = null;

    #[ORM\Column(name: "DO_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $doDevise = null;

    #[ORM\Column(name: "DO_Cours", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doCours = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "LI_No", nullable: true)]
    private ?int $liNo = null;

    #[ORM\Column(name: "cbLI_No", nullable: true)]
    private ?int $cbliNo = null;

    #[ORM\Column(name: "CT_NumPayeur", length: 17, nullable: true)]
    private ?string $ctNumpayeur = null;

    #[ORM\Column(name: "cbCT_NumPayeur", type: Types::BINARY, nullable: true)]
    private $cbctNumpayeur = null;

    #[ORM\Column(name: "DO_Expedit", type: Types::SMALLINT, nullable: true)]
    private ?int $doExpedit = null;

    #[ORM\Column(name: "DO_NbFacture", type: Types::SMALLINT, nullable: true)]
    private ?int $doNbfacture = null;

    #[ORM\Column(name: "DO_BLFact", type: Types::SMALLINT, nullable: true)]
    private ?int $doBlfact = null;

    #[ORM\Column(name: "DO_TxEscompte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doTxescompte = null;

    #[ORM\Column(name: "DO_Reliquat", type: Types::SMALLINT, nullable: true)]
    private ?int $doReliquat = null;

    #[ORM\Column(name: "DO_Imprim", type: Types::SMALLINT, nullable: true)]
    private ?int $doImprim = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "DO_Coord01", length: 25, nullable: true)]
    private ?string $doCoord01 = null;

    #[ORM\Column(name: "DO_Coord02", length: 25, nullable: true)]
    private ?string $doCoord02 = null;

    #[ORM\Column(name: "DO_Coord03", length: 25, nullable: true)]
    private ?string $doCoord03 = null;

    #[ORM\Column(name: "DO_Coord04", length: 25, nullable: true)]
    private ?string $doCoord04 = null;

    #[ORM\Column(name: "DO_Souche", type: Types::SMALLINT, nullable: true)]
    private ?int $doSouche = null;

    #[ORM\Column(name: "DO_DateLivr", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDatelivr = null;

    #[ORM\Column(name: "DO_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $doCondition = null;

    #[ORM\Column(name: "DO_Tarif", type: Types::SMALLINT, nullable: true)]
    private ?int $doTarif = null;

    #[ORM\Column(name: "DO_Colisage", type: Types::SMALLINT, nullable: true)]
    private ?int $doColisage = null;

    #[ORM\Column(name: "DO_TypeColis", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypecolis = null;

    #[ORM\Column(name: "DO_Transaction", type: Types::SMALLINT, nullable: true)]
    private ?int $doTransaction = null;

    #[ORM\Column(name: "DO_Langue", type: Types::SMALLINT, nullable: true)]
    private ?int $doLangue = null;

    #[ORM\Column(name: "DO_Ecart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doEcart = null;

    #[ORM\Column(name: "DO_Regime", type: Types::SMALLINT, nullable: true)]
    private ?int $doRegime = null;

    #[ORM\Column(name: "N_CatCompta", type: Types::SMALLINT, nullable: true)]
    private ?int $nCatcompta = null;

    #[ORM\Column(name: "DO_Ventile", type: Types::SMALLINT, nullable: true)]
    private ?int $doVentile = null;

    #[ORM\Column(name: "AB_No", nullable: true)]
    private ?int $abNo = null;

    #[ORM\Column(name: "DO_DebutAbo", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDebutabo = null;

    #[ORM\Column(name: "DO_FinAbo", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doFinabo = null;

    #[ORM\Column(name: "DO_DebutPeriod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDebutperiod = null;

    #[ORM\Column(name: "DO_FinPeriod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doFinperiod = null;

    #[ORM\Column(name: "CG_Num", length: 13, nullable: true)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "DO_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $doStatut = null;

    #[ORM\Column(name: "DO_Heure", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $doHeure = null;

    #[ORM\Column(name: "CA_No", nullable: true)]
    private ?int $caNo = null;

    #[ORM\Column(name: "CO_NoCaissier", nullable: true)]
    private ?int $coNocaissier = null;

    #[ORM\Column(name: "cbCO_NoCaissier", nullable: true)]
    private ?int $cbcoNocaissier = null;

    #[ORM\Column(name: "DO_Transfere", type: Types::SMALLINT, nullable: true)]
    private ?int $doTransfere = null;

    #[ORM\Column(name: "DO_Cloture", type: Types::SMALLINT, nullable: true)]
    private ?int $doCloture = null;

    #[ORM\Column(name: "DO_NoWeb", length: 17, nullable: true)]
    private ?string $doNoweb = null;

    #[ORM\Column(name: "DO_Attente", type: Types::SMALLINT, nullable: true)]
    private ?int $doAttente = null;

    #[ORM\Column(name: "DO_Provenance", type: Types::SMALLINT, nullable: true)]
    private ?int $doProvenance = null;

    #[ORM\Column(name: "CA_NumIFRS", length: 13, nullable: true)]
    private ?string $caNumifrs = null;

    #[ORM\Column(name: "MR_No", nullable: true)]
    private ?int $mrNo = null;

    #[ORM\Column(name: "DO_TypeFrais", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypefrais = null;

    #[ORM\Column(name: "DO_ValFrais", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doValfrais = null;

    #[ORM\Column(name: "DO_TypeLigneFrais", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypelignefrais = null;

    #[ORM\Column(name: "DO_TypeFranco", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypefranco = null;

    #[ORM\Column(name: "DO_ValFranco", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doValfranco = null;

    #[ORM\Column(name: "DO_TypeLigneFranco", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypelignefranco = null;

    #[ORM\Column(name: "DO_Taxe1", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doTaxe1 = null;

    #[ORM\Column(name: "DO_TypeTaux1", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypetaux1 = null;

    #[ORM\Column(name: "DO_TypeTaxe1", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypetaxe1 = null;

    #[ORM\Column(name: "DO_Taxe2", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doTaxe2 = null;

    #[ORM\Column(name: "DO_TypeTaux2", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypetaux2 = null;

    #[ORM\Column(name: "DO_TypeTaxe2", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypetaxe2 = null;

    #[ORM\Column(name: "DO_Taxe3", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doTaxe3 = null;

    #[ORM\Column(name: "DO_TypeTaux3", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypetaux3 = null;

    #[ORM\Column(name: "DO_TypeTaxe3", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypetaxe3 = null;

    #[ORM\Column(name: "DO_MajCpta", type: Types::SMALLINT, nullable: true)]
    private ?int $doMajcpta = null;

    #[ORM\Column(name: "DO_Motif", length: 69, nullable: true)]
    private ?string $doMotif = null;

    #[ORM\Column(name: "CT_NumCentrale", length: 17, nullable: true)]
    private ?string $ctNumcentrale = null;

    #[ORM\Column(name: "cbCT_NumCentrale", type: Types::BINARY, nullable: true)]
    private $cbctNumcentrale = null;

    #[ORM\Column(name: "DO_Contact", length: 35, nullable: true)]
    private ?string $doContact = null;

    #[ORM\Column(name: "DO_FactureElec", type: Types::SMALLINT, nullable: true)]
    private ?int $doFactureelec = null;

    #[ORM\Column(name: "DO_TypeTransac", type: Types::SMALLINT, nullable: true)]
    private ?int $doTypetransac = null;

    #[ORM\Column(name: "cbProt", type: Types::SMALLINT, nullable: true)]
    private ?int $cbprot = null;

    #[ORM\Column(name: "cbCreateur", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbcreateur = 'CSQL';

    #[ORM\Column(name: "cbModification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbmodification = null;

    #[ORM\Column(name: "cbReplication", nullable: true)]
    private ?int $cbreplication = null;

    #[ORM\Column(name: "cbFlag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbflag = null;

    #[ORM\Column(name: "Observation", length: 69, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(name: "DO_DateLivrRealisee", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDatelivrrealisee = null;

    #[ORM\Column(name: "DO_DateExpedition", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDateexpedition = null;

    #[ORM\Column(name: "DO_FactureFrs", length: 35, nullable: true)]
    private ?string $doFacturefrs = null;

    #[ORM\Column(name: "cbDO_FactureFrs", type: Types::BINARY, nullable: true)]
    private $cbdoFacturefrs = null;

    #[ORM\Column(name: "DO_PieceOrig", length: 9, nullable: true)]
    private ?string $doPieceorig = null;

    #[ORM\Column(name: "cbDO_PieceOrig", type: Types::BINARY, nullable: true)]
    private $cbdoPieceorig = null;

    #[ORM\Column(name: "DO_GUID", type: Types::GUID, nullable: true)]
    private ?string $doGuid = null;

    #[ORM\Column(name: "DO_EStatut", type: Types::SMALLINT, nullable: true)]
    private ?int $doEstatut = null;

    #[ORM\Column(name: "DO_DemandeRegul", type: Types::SMALLINT, nullable: true)]
    private ?int $doDemanderegul = null;

    #[ORM\Column(name: "ET_No", nullable: true)]
    private ?int $etNo = null;

    #[ORM\Column(name: "cbET_No", nullable: true)]
    private ?int $cbetNo = null;

    #[ORM\Column(name: "DO_Valide", type: Types::SMALLINT, nullable: true)]
    private ?int $doValide = null;

    #[ORM\Column(name: "DO_Coffre", type: Types::SMALLINT, nullable: true)]
    private ?int $doCoffre = null;

    #[ORM\Column(name: "DO_CodeTaxe1", length: 5, nullable: true)]
    private ?string $doCodetaxe1 = null;

    #[ORM\Column(name: "DO_CodeTaxe2", length: 5, nullable: true)]
    private ?string $doCodetaxe2 = null;

    #[ORM\Column(name: "DO_CodeTaxe3", length: 5, nullable: true)]
    private ?string $doCodetaxe3 = null;

    #[ORM\Column(name: "DO_TotalHT", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $doTotalht = null;

    #[ORM\Column(name: "DO_StatutBAP", type: Types::SMALLINT, nullable: true)]
    private ?int $doStatutbap = null;

    #[ORM\Column(name: "Sous_Client", length: 69, nullable: true)]
    private ?string $sousClient = null;

    #[ORM\Column(name: "[MONTANT FACTURE DEVEISE]", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $montantFactureDeveise = null;

    #[ORM\Column(name: "[MONTANT PAYE]", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $montantPaye = null;

    #[ORM\Column(name: "[DATE ECHEANCE]", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEcheance = null;

    #[ORM\Column(name: "[ADRESSE LIVRAISON]", length: 69, nullable: true)]
    private ?string $adresseLivraison = null;

    #[ORM\Column(name: "DO_Escompte", type: Types::SMALLINT, nullable: true)]
    private ?int $doEscompte = null;

    #[ORM\Column(name: "cbHash", type: Types::BINARY, nullable: true)]
    private $cbhash = null;

    #[ORM\Column(name: "cbHashVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $cbhashversion = 1;

    #[ORM\Column(name: "cbHashDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbhashdate = null;

    #[ORM\Column(name: "cbHashOrder", nullable: true)]
    private ?int $cbhashorder = null;

    #[ORM\Column(name: "cbCA_No", nullable: true)]
    private ?int $cbcaNo = null;

    #[ORM\Column(name: "CONDITION PAIEMENT", length: 69, nullable: true)]
    private ?string $conditionPaiement = null;

    #[ORM\Column(name: "Situation", length: 21, nullable: true)]
    private ?string $situation = null;

    #[ORM\Column(name: "[N° Dossier]", length: 69, nullable: true)]
    private ?string $nDossier = null;

    #[ORM\Column(name: "AlerteStock", length: 21, nullable: true)]
    private ?string $alertestock = null;

    #[ORM\Column(name: "ValideTrans", nullable: true)]
    private ?int $validetrans = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDoDomaine(): ?int
    {
        return $this->doDomaine;
    }

    public function setDoDomaine(?int $doDomaine): static
    {
        $this->doDomaine = $doDomaine;

        return $this;
    }

    public function getDoType(): ?int
    {
        return $this->doType;
    }

    public function setDoType(?int $doType): static
    {
        $this->doType = $doType;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getCbdoPiece()
    {
        return $this->cbdoPiece;
    }

    public function setCbdoPiece($cbdoPiece): static
    {
        $this->cbdoPiece = $cbdoPiece;

        return $this;
    }

    public function getDoDate(): ?\DateTimeInterface
    {
        return $this->doDate;
    }

    public function setDoDate(?\DateTimeInterface $doDate): static
    {
        $this->doDate = $doDate;

        return $this;
    }

    public function getDoRef(): ?string
    {
        return $this->doRef;
    }

    public function setDoRef(?string $doRef): static
    {
        $this->doRef = $doRef;

        return $this;
    }

    public function getDoTiers(): ?string
    {
        return $this->doTiers;
    }

    public function setDoTiers(?string $doTiers): static
    {
        $this->doTiers = $doTiers;

        return $this;
    }

    public function getCbdoTiers()
    {
        return $this->cbdoTiers;
    }

    public function setCbdoTiers($cbdoTiers): static
    {
        $this->cbdoTiers = $cbdoTiers;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getCbcoNo(): ?int
    {
        return $this->cbcoNo;
    }

    public function setCbcoNo(?int $cbcoNo): static
    {
        $this->cbcoNo = $cbcoNo;

        return $this;
    }

    public function getDoPeriod(): ?int
    {
        return $this->doPeriod;
    }

    public function setDoPeriod(?int $doPeriod): static
    {
        $this->doPeriod = $doPeriod;

        return $this;
    }

    public function getDoDevise(): ?int
    {
        return $this->doDevise;
    }

    public function setDoDevise(?int $doDevise): static
    {
        $this->doDevise = $doDevise;

        return $this;
    }

    public function getDoCours(): ?string
    {
        return $this->doCours;
    }

    public function setDoCours(?string $doCours): static
    {
        $this->doCours = $doCours;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(?int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getCbdeNo(): ?int
    {
        return $this->cbdeNo;
    }

    public function setCbdeNo(?int $cbdeNo): static
    {
        $this->cbdeNo = $cbdeNo;

        return $this;
    }

    public function getLiNo(): ?int
    {
        return $this->liNo;
    }

    public function setLiNo(?int $liNo): static
    {
        $this->liNo = $liNo;

        return $this;
    }

    public function getCbliNo(): ?int
    {
        return $this->cbliNo;
    }

    public function setCbliNo(?int $cbliNo): static
    {
        $this->cbliNo = $cbliNo;

        return $this;
    }

    public function getCtNumpayeur(): ?string
    {
        return $this->ctNumpayeur;
    }

    public function setCtNumpayeur(?string $ctNumpayeur): static
    {
        $this->ctNumpayeur = $ctNumpayeur;

        return $this;
    }

    public function getCbctNumpayeur()
    {
        return $this->cbctNumpayeur;
    }

    public function setCbctNumpayeur($cbctNumpayeur): static
    {
        $this->cbctNumpayeur = $cbctNumpayeur;

        return $this;
    }

    public function getDoExpedit(): ?int
    {
        return $this->doExpedit;
    }

    public function setDoExpedit(?int $doExpedit): static
    {
        $this->doExpedit = $doExpedit;

        return $this;
    }

    public function getDoNbfacture(): ?int
    {
        return $this->doNbfacture;
    }

    public function setDoNbfacture(?int $doNbfacture): static
    {
        $this->doNbfacture = $doNbfacture;

        return $this;
    }

    public function getDoBlfact(): ?int
    {
        return $this->doBlfact;
    }

    public function setDoBlfact(?int $doBlfact): static
    {
        $this->doBlfact = $doBlfact;

        return $this;
    }

    public function getDoTxescompte(): ?string
    {
        return $this->doTxescompte;
    }

    public function setDoTxescompte(?string $doTxescompte): static
    {
        $this->doTxescompte = $doTxescompte;

        return $this;
    }

    public function getDoReliquat(): ?int
    {
        return $this->doReliquat;
    }

    public function setDoReliquat(?int $doReliquat): static
    {
        $this->doReliquat = $doReliquat;

        return $this;
    }

    public function getDoImprim(): ?int
    {
        return $this->doImprim;
    }

    public function setDoImprim(?int $doImprim): static
    {
        $this->doImprim = $doImprim;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(?string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getCbcaNum()
    {
        return $this->cbcaNum;
    }

    public function setCbcaNum($cbcaNum): static
    {
        $this->cbcaNum = $cbcaNum;

        return $this;
    }

    public function getDoCoord01(): ?string
    {
        return $this->doCoord01;
    }

    public function setDoCoord01(?string $doCoord01): static
    {
        $this->doCoord01 = $doCoord01;

        return $this;
    }

    public function getDoCoord02(): ?string
    {
        return $this->doCoord02;
    }

    public function setDoCoord02(?string $doCoord02): static
    {
        $this->doCoord02 = $doCoord02;

        return $this;
    }

    public function getDoCoord03(): ?string
    {
        return $this->doCoord03;
    }

    public function setDoCoord03(?string $doCoord03): static
    {
        $this->doCoord03 = $doCoord03;

        return $this;
    }

    public function getDoCoord04(): ?string
    {
        return $this->doCoord04;
    }

    public function setDoCoord04(?string $doCoord04): static
    {
        $this->doCoord04 = $doCoord04;

        return $this;
    }

    public function getDoSouche(): ?int
    {
        return $this->doSouche;
    }

    public function setDoSouche(?int $doSouche): static
    {
        $this->doSouche = $doSouche;

        return $this;
    }

    public function getDoDatelivr(): ?\DateTimeInterface
    {
        return $this->doDatelivr;
    }

    public function setDoDatelivr(?\DateTimeInterface $doDatelivr): static
    {
        $this->doDatelivr = $doDatelivr;

        return $this;
    }

    public function getDoCondition(): ?int
    {
        return $this->doCondition;
    }

    public function setDoCondition(?int $doCondition): static
    {
        $this->doCondition = $doCondition;

        return $this;
    }

    public function getDoTarif(): ?int
    {
        return $this->doTarif;
    }

    public function setDoTarif(?int $doTarif): static
    {
        $this->doTarif = $doTarif;

        return $this;
    }

    public function getDoColisage(): ?int
    {
        return $this->doColisage;
    }

    public function setDoColisage(?int $doColisage): static
    {
        $this->doColisage = $doColisage;

        return $this;
    }

    public function getDoTypecolis(): ?int
    {
        return $this->doTypecolis;
    }

    public function setDoTypecolis(?int $doTypecolis): static
    {
        $this->doTypecolis = $doTypecolis;

        return $this;
    }

    public function getDoTransaction(): ?int
    {
        return $this->doTransaction;
    }

    public function setDoTransaction(?int $doTransaction): static
    {
        $this->doTransaction = $doTransaction;

        return $this;
    }

    public function getDoLangue(): ?int
    {
        return $this->doLangue;
    }

    public function setDoLangue(?int $doLangue): static
    {
        $this->doLangue = $doLangue;

        return $this;
    }

    public function getDoEcart(): ?string
    {
        return $this->doEcart;
    }

    public function setDoEcart(?string $doEcart): static
    {
        $this->doEcart = $doEcart;

        return $this;
    }

    public function getDoRegime(): ?int
    {
        return $this->doRegime;
    }

    public function setDoRegime(?int $doRegime): static
    {
        $this->doRegime = $doRegime;

        return $this;
    }

    public function getNCatcompta(): ?int
    {
        return $this->nCatcompta;
    }

    public function setNCatcompta(?int $nCatcompta): static
    {
        $this->nCatcompta = $nCatcompta;

        return $this;
    }

    public function getDoVentile(): ?int
    {
        return $this->doVentile;
    }

    public function setDoVentile(?int $doVentile): static
    {
        $this->doVentile = $doVentile;

        return $this;
    }

    public function getAbNo(): ?int
    {
        return $this->abNo;
    }

    public function setAbNo(?int $abNo): static
    {
        $this->abNo = $abNo;

        return $this;
    }

    public function getDoDebutabo(): ?\DateTimeInterface
    {
        return $this->doDebutabo;
    }

    public function setDoDebutabo(?\DateTimeInterface $doDebutabo): static
    {
        $this->doDebutabo = $doDebutabo;

        return $this;
    }

    public function getDoFinabo(): ?\DateTimeInterface
    {
        return $this->doFinabo;
    }

    public function setDoFinabo(?\DateTimeInterface $doFinabo): static
    {
        $this->doFinabo = $doFinabo;

        return $this;
    }

    public function getDoDebutperiod(): ?\DateTimeInterface
    {
        return $this->doDebutperiod;
    }

    public function setDoDebutperiod(?\DateTimeInterface $doDebutperiod): static
    {
        $this->doDebutperiod = $doDebutperiod;

        return $this;
    }

    public function getDoFinperiod(): ?\DateTimeInterface
    {
        return $this->doFinperiod;
    }

    public function setDoFinperiod(?\DateTimeInterface $doFinperiod): static
    {
        $this->doFinperiod = $doFinperiod;

        return $this;
    }

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(?string $cgNum): static
    {
        $this->cgNum = $cgNum;

        return $this;
    }

    public function getCbcgNum()
    {
        return $this->cbcgNum;
    }

    public function setCbcgNum($cbcgNum): static
    {
        $this->cbcgNum = $cbcgNum;

        return $this;
    }

    public function getDoStatut(): ?int
    {
        return $this->doStatut;
    }

    public function setDoStatut(?int $doStatut): static
    {
        $this->doStatut = $doStatut;

        return $this;
    }

    public function getDoHeure(): ?string
    {
        return $this->doHeure;
    }

    public function setDoHeure(?string $doHeure): static
    {
        $this->doHeure = $doHeure;

        return $this;
    }

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(?int $caNo): static
    {
        $this->caNo = $caNo;

        return $this;
    }

    public function getCoNocaissier(): ?int
    {
        return $this->coNocaissier;
    }

    public function setCoNocaissier(?int $coNocaissier): static
    {
        $this->coNocaissier = $coNocaissier;

        return $this;
    }

    public function getCbcoNocaissier(): ?int
    {
        return $this->cbcoNocaissier;
    }

    public function setCbcoNocaissier(?int $cbcoNocaissier): static
    {
        $this->cbcoNocaissier = $cbcoNocaissier;

        return $this;
    }

    public function getDoTransfere(): ?int
    {
        return $this->doTransfere;
    }

    public function setDoTransfere(?int $doTransfere): static
    {
        $this->doTransfere = $doTransfere;

        return $this;
    }

    public function getDoCloture(): ?int
    {
        return $this->doCloture;
    }

    public function setDoCloture(?int $doCloture): static
    {
        $this->doCloture = $doCloture;

        return $this;
    }

    public function getDoNoweb(): ?string
    {
        return $this->doNoweb;
    }

    public function setDoNoweb(?string $doNoweb): static
    {
        $this->doNoweb = $doNoweb;

        return $this;
    }

    public function getDoAttente(): ?int
    {
        return $this->doAttente;
    }

    public function setDoAttente(?int $doAttente): static
    {
        $this->doAttente = $doAttente;

        return $this;
    }

    public function getDoProvenance(): ?int
    {
        return $this->doProvenance;
    }

    public function setDoProvenance(?int $doProvenance): static
    {
        $this->doProvenance = $doProvenance;

        return $this;
    }

    public function getCaNumifrs(): ?string
    {
        return $this->caNumifrs;
    }

    public function setCaNumifrs(?string $caNumifrs): static
    {
        $this->caNumifrs = $caNumifrs;

        return $this;
    }

    public function getMrNo(): ?int
    {
        return $this->mrNo;
    }

    public function setMrNo(?int $mrNo): static
    {
        $this->mrNo = $mrNo;

        return $this;
    }

    public function getDoTypefrais(): ?int
    {
        return $this->doTypefrais;
    }

    public function setDoTypefrais(?int $doTypefrais): static
    {
        $this->doTypefrais = $doTypefrais;

        return $this;
    }

    public function getDoValfrais(): ?string
    {
        return $this->doValfrais;
    }

    public function setDoValfrais(?string $doValfrais): static
    {
        $this->doValfrais = $doValfrais;

        return $this;
    }

    public function getDoTypelignefrais(): ?int
    {
        return $this->doTypelignefrais;
    }

    public function setDoTypelignefrais(?int $doTypelignefrais): static
    {
        $this->doTypelignefrais = $doTypelignefrais;

        return $this;
    }

    public function getDoTypefranco(): ?int
    {
        return $this->doTypefranco;
    }

    public function setDoTypefranco(?int $doTypefranco): static
    {
        $this->doTypefranco = $doTypefranco;

        return $this;
    }

    public function getDoValfranco(): ?string
    {
        return $this->doValfranco;
    }

    public function setDoValfranco(?string $doValfranco): static
    {
        $this->doValfranco = $doValfranco;

        return $this;
    }

    public function getDoTypelignefranco(): ?int
    {
        return $this->doTypelignefranco;
    }

    public function setDoTypelignefranco(?int $doTypelignefranco): static
    {
        $this->doTypelignefranco = $doTypelignefranco;

        return $this;
    }

    public function getDoTaxe1(): ?string
    {
        return $this->doTaxe1;
    }

    public function setDoTaxe1(?string $doTaxe1): static
    {
        $this->doTaxe1 = $doTaxe1;

        return $this;
    }

    public function getDoTypetaux1(): ?int
    {
        return $this->doTypetaux1;
    }

    public function setDoTypetaux1(?int $doTypetaux1): static
    {
        $this->doTypetaux1 = $doTypetaux1;

        return $this;
    }

    public function getDoTypetaxe1(): ?int
    {
        return $this->doTypetaxe1;
    }

    public function setDoTypetaxe1(?int $doTypetaxe1): static
    {
        $this->doTypetaxe1 = $doTypetaxe1;

        return $this;
    }

    public function getDoTaxe2(): ?string
    {
        return $this->doTaxe2;
    }

    public function setDoTaxe2(?string $doTaxe2): static
    {
        $this->doTaxe2 = $doTaxe2;

        return $this;
    }

    public function getDoTypetaux2(): ?int
    {
        return $this->doTypetaux2;
    }

    public function setDoTypetaux2(?int $doTypetaux2): static
    {
        $this->doTypetaux2 = $doTypetaux2;

        return $this;
    }

    public function getDoTypetaxe2(): ?int
    {
        return $this->doTypetaxe2;
    }

    public function setDoTypetaxe2(?int $doTypetaxe2): static
    {
        $this->doTypetaxe2 = $doTypetaxe2;

        return $this;
    }

    public function getDoTaxe3(): ?string
    {
        return $this->doTaxe3;
    }

    public function setDoTaxe3(?string $doTaxe3): static
    {
        $this->doTaxe3 = $doTaxe3;

        return $this;
    }

    public function getDoTypetaux3(): ?int
    {
        return $this->doTypetaux3;
    }

    public function setDoTypetaux3(?int $doTypetaux3): static
    {
        $this->doTypetaux3 = $doTypetaux3;

        return $this;
    }

    public function getDoTypetaxe3(): ?int
    {
        return $this->doTypetaxe3;
    }

    public function setDoTypetaxe3(?int $doTypetaxe3): static
    {
        $this->doTypetaxe3 = $doTypetaxe3;

        return $this;
    }

    public function getDoMajcpta(): ?int
    {
        return $this->doMajcpta;
    }

    public function setDoMajcpta(?int $doMajcpta): static
    {
        $this->doMajcpta = $doMajcpta;

        return $this;
    }

    public function getDoMotif(): ?string
    {
        return $this->doMotif;
    }

    public function setDoMotif(?string $doMotif): static
    {
        $this->doMotif = $doMotif;

        return $this;
    }

    public function getCtNumcentrale(): ?string
    {
        return $this->ctNumcentrale;
    }

    public function setCtNumcentrale(?string $ctNumcentrale): static
    {
        $this->ctNumcentrale = $ctNumcentrale;

        return $this;
    }

    public function getCbctNumcentrale()
    {
        return $this->cbctNumcentrale;
    }

    public function setCbctNumcentrale($cbctNumcentrale): static
    {
        $this->cbctNumcentrale = $cbctNumcentrale;

        return $this;
    }

    public function getDoContact(): ?string
    {
        return $this->doContact;
    }

    public function setDoContact(?string $doContact): static
    {
        $this->doContact = $doContact;

        return $this;
    }

    public function getDoFactureelec(): ?int
    {
        return $this->doFactureelec;
    }

    public function setDoFactureelec(?int $doFactureelec): static
    {
        $this->doFactureelec = $doFactureelec;

        return $this;
    }

    public function getDoTypetransac(): ?int
    {
        return $this->doTypetransac;
    }

    public function setDoTypetransac(?int $doTypetransac): static
    {
        $this->doTypetransac = $doTypetransac;

        return $this;
    }

    public function getCbprot(): ?int
    {
        return $this->cbprot;
    }

    public function setCbprot(?int $cbprot): static
    {
        $this->cbprot = $cbprot;

        return $this;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): static
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): static
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getCbreplication(): ?int
    {
        return $this->cbreplication;
    }

    public function setCbreplication(?int $cbreplication): static
    {
        $this->cbreplication = $cbreplication;

        return $this;
    }

    public function getCbflag(): ?int
    {
        return $this->cbflag;
    }

    public function setCbflag(?int $cbflag): static
    {
        $this->cbflag = $cbflag;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getDoDatelivrrealisee(): ?\DateTimeInterface
    {
        return $this->doDatelivrrealisee;
    }

    public function setDoDatelivrrealisee(?\DateTimeInterface $doDatelivrrealisee): static
    {
        $this->doDatelivrrealisee = $doDatelivrrealisee;

        return $this;
    }

    public function getDoDateexpedition(): ?\DateTimeInterface
    {
        return $this->doDateexpedition;
    }

    public function setDoDateexpedition(?\DateTimeInterface $doDateexpedition): static
    {
        $this->doDateexpedition = $doDateexpedition;

        return $this;
    }

    public function getDoFacturefrs(): ?string
    {
        return $this->doFacturefrs;
    }

    public function setDoFacturefrs(?string $doFacturefrs): static
    {
        $this->doFacturefrs = $doFacturefrs;

        return $this;
    }

    public function getCbdoFacturefrs()
    {
        return $this->cbdoFacturefrs;
    }

    public function setCbdoFacturefrs($cbdoFacturefrs): static
    {
        $this->cbdoFacturefrs = $cbdoFacturefrs;

        return $this;
    }

    public function getDoPieceorig(): ?string
    {
        return $this->doPieceorig;
    }

    public function setDoPieceorig(?string $doPieceorig): static
    {
        $this->doPieceorig = $doPieceorig;

        return $this;
    }

    public function getCbdoPieceorig()
    {
        return $this->cbdoPieceorig;
    }

    public function setCbdoPieceorig($cbdoPieceorig): static
    {
        $this->cbdoPieceorig = $cbdoPieceorig;

        return $this;
    }

    public function getDoGuid(): ?string
    {
        return $this->doGuid;
    }

    public function setDoGuid(?string $doGuid): static
    {
        $this->doGuid = $doGuid;

        return $this;
    }

    public function getDoEstatut(): ?int
    {
        return $this->doEstatut;
    }

    public function setDoEstatut(?int $doEstatut): static
    {
        $this->doEstatut = $doEstatut;

        return $this;
    }

    public function getDoDemanderegul(): ?int
    {
        return $this->doDemanderegul;
    }

    public function setDoDemanderegul(?int $doDemanderegul): static
    {
        $this->doDemanderegul = $doDemanderegul;

        return $this;
    }

    public function getEtNo(): ?int
    {
        return $this->etNo;
    }

    public function setEtNo(?int $etNo): static
    {
        $this->etNo = $etNo;

        return $this;
    }

    public function getCbetNo(): ?int
    {
        return $this->cbetNo;
    }

    public function setCbetNo(?int $cbetNo): static
    {
        $this->cbetNo = $cbetNo;

        return $this;
    }

    public function getDoValide(): ?int
    {
        return $this->doValide;
    }

    public function setDoValide(?int $doValide): static
    {
        $this->doValide = $doValide;

        return $this;
    }

    public function getDoCoffre(): ?int
    {
        return $this->doCoffre;
    }

    public function setDoCoffre(?int $doCoffre): static
    {
        $this->doCoffre = $doCoffre;

        return $this;
    }

    public function getDoCodetaxe1(): ?string
    {
        return $this->doCodetaxe1;
    }

    public function setDoCodetaxe1(?string $doCodetaxe1): static
    {
        $this->doCodetaxe1 = $doCodetaxe1;

        return $this;
    }

    public function getDoCodetaxe2(): ?string
    {
        return $this->doCodetaxe2;
    }

    public function setDoCodetaxe2(?string $doCodetaxe2): static
    {
        $this->doCodetaxe2 = $doCodetaxe2;

        return $this;
    }

    public function getDoCodetaxe3(): ?string
    {
        return $this->doCodetaxe3;
    }

    public function setDoCodetaxe3(?string $doCodetaxe3): static
    {
        $this->doCodetaxe3 = $doCodetaxe3;

        return $this;
    }

    public function getDoTotalht(): ?string
    {
        return $this->doTotalht;
    }

    public function setDoTotalht(?string $doTotalht): static
    {
        $this->doTotalht = $doTotalht;

        return $this;
    }

    public function getDoStatutbap(): ?int
    {
        return $this->doStatutbap;
    }

    public function setDoStatutbap(?int $doStatutbap): static
    {
        $this->doStatutbap = $doStatutbap;

        return $this;
    }

    public function getSousClient(): ?string
    {
        return $this->sousClient;
    }

    public function setSousClient(?string $sousClient): static
    {
        $this->sousClient = $sousClient;

        return $this;
    }

    public function getMontantFactureDeveise(): ?string
    {
        return $this->montantFactureDeveise;
    }

    public function setMontantFactureDeveise(?string $montantFactureDeveise): static
    {
        $this->montantFactureDeveise = $montantFactureDeveise;

        return $this;
    }

    public function getMontantPaye(): ?string
    {
        return $this->montantPaye;
    }

    public function setMontantPaye(?string $montantPaye): static
    {
        $this->montantPaye = $montantPaye;

        return $this;
    }

    public function getDateEcheance(): ?\DateTimeInterface
    {
        return $this->dateEcheance;
    }

    public function setDateEcheance(?\DateTimeInterface $dateEcheance): static
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(?string $adresseLivraison): static
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    public function getDoEscompte(): ?int
    {
        return $this->doEscompte;
    }

    public function setDoEscompte(?int $doEscompte): static
    {
        $this->doEscompte = $doEscompte;

        return $this;
    }

    public function getCbhash()
    {
        return $this->cbhash;
    }

    public function setCbhash($cbhash): static
    {
        $this->cbhash = $cbhash;

        return $this;
    }

    public function getCbhashversion(): ?int
    {
        return $this->cbhashversion;
    }

    public function setCbhashversion(?int $cbhashversion): static
    {
        $this->cbhashversion = $cbhashversion;

        return $this;
    }

    public function getCbhashdate(): ?\DateTimeInterface
    {
        return $this->cbhashdate;
    }

    public function setCbhashdate(?\DateTimeInterface $cbhashdate): static
    {
        $this->cbhashdate = $cbhashdate;

        return $this;
    }

    public function getCbhashorder(): ?int
    {
        return $this->cbhashorder;
    }

    public function setCbhashorder(?int $cbhashorder): static
    {
        $this->cbhashorder = $cbhashorder;

        return $this;
    }

    public function getCbcaNo(): ?int
    {
        return $this->cbcaNo;
    }

    public function setCbcaNo(?int $cbcaNo): static
    {
        $this->cbcaNo = $cbcaNo;

        return $this;
    }

    public function getConditionPaiement(): ?string
    {
        return $this->conditionPaiement;
    }

    public function setConditionPaiement(?string $conditionPaiement): static
    {
        $this->conditionPaiement = $conditionPaiement;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(?string $situation): static
    {
        $this->situation = $situation;

        return $this;
    }

    public function getNDossier(): ?string
    {
        return $this->nDossier;
    }

    public function setNDossier(?string $nDossier): static
    {
        $this->nDossier = $nDossier;

        return $this;
    }

    public function getAlertestock(): ?string
    {
        return $this->alertestock;
    }

    public function setAlertestock(?string $alertestock): static
    {
        $this->alertestock = $alertestock;

        return $this;
    }

    public function getValidetrans(): ?int
    {
        return $this->validetrans;
    }

    public function setValidetrans(?int $validetrans): static
    {
        $this->validetrans = $validetrans;

        return $this;
    }
}
