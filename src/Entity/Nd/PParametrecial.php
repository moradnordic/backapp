<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PParametrecialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_PARAMETRECIAL')]
#[ORM\Entity(repositoryClass: PParametrecialRepository::class)]
class PParametrecial
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "P_ChpAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $pChpanal = null;

    #[ORM\Column(name: "P_ChpAnalDoc", type: Types::SMALLINT, nullable: true)]
    private ?int $pChpanaldoc = null;

    #[ORM\Column(name: "P_Conversion", type: Types::SMALLINT, nullable: true)]
    private ?int $pConversion = null;

    #[ORM\Column(name: "P_Indispo", type: Types::SMALLINT, nullable: true)]
    private ?int $pIndispo = null;

    #[ORM\Column(name: "P_Echeances", type: Types::SMALLINT, nullable: true)]
    private ?int $pEcheances = null;

    #[ORM\Column(name: "P_StockSaisie", type: Types::SMALLINT, nullable: true)]
    private ?int $pStocksaisie = null;

    #[ORM\Column(name: "P_PeriodEncours", type: Types::SMALLINT, nullable: true)]
    private ?int $pPeriodencours = null;

    #[ORM\Column(name: "P_BaseEncours", type: Types::SMALLINT, nullable: true)]
    private ?int $pBaseencours = null;

    #[ORM\Column(name: "P_Contremarque", type: Types::SMALLINT, nullable: true)]
    private ?int $pContremarque = null;

    #[ORM\Column(name: "P_ReportAchat", type: Types::SMALLINT, nullable: true)]
    private ?int $pReportachat = null;

    #[ORM\Column(name: "P_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $pAnalytique = null;

    #[ORM\Column(name: "P_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $pDevise = null;

    #[ORM\Column(name: "P_TransfertDevise", type: Types::SMALLINT, nullable: true)]
    private ?int $pTransfertdevise = null;

    #[ORM\Column(name: "P_Journal01", length: 7, nullable: true)]
    private ?string $pJournal01 = null;

    #[ORM\Column(name: "P_Journal02", length: 7, nullable: true)]
    private ?string $pJournal02 = null;

    #[ORM\Column(name: "P_Journal03", length: 7, nullable: true)]
    private ?string $pJournal03 = null;

    #[ORM\Column(name: "P_Journal04", length: 7, nullable: true)]
    private ?string $pJournal04 = null;

    #[ORM\Column(name: "P_Journal05", length: 7, nullable: true)]
    private ?string $pJournal05 = null;

    #[ORM\Column(name: "P_Journal06", length: 7, nullable: true)]
    private ?string $pJournal06 = null;

    #[ORM\Column(name: "P_Piece01", type: Types::SMALLINT, nullable: true)]
    private ?int $pPiece01 = null;

    #[ORM\Column(name: "P_Piece02", type: Types::SMALLINT, nullable: true)]
    private ?int $pPiece02 = null;

    #[ORM\Column(name: "P_Piece03", type: Types::SMALLINT, nullable: true)]
    private ?int $pPiece03 = null;

    #[ORM\Column(name: "P_Piece04", type: Types::SMALLINT, nullable: true)]
    private ?int $pPiece04 = null;

    #[ORM\Column(name: "P_Libelle01", length: 35, nullable: true)]
    private ?string $pLibelle01 = null;

    #[ORM\Column(name: "P_Libelle02", length: 35, nullable: true)]
    private ?string $pLibelle02 = null;

    #[ORM\Column(name: "P_Libelle03", length: 35, nullable: true)]
    private ?string $pLibelle03 = null;

    #[ORM\Column(name: "P_Libelle04", length: 35, nullable: true)]
    private ?string $pLibelle04 = null;

    #[ORM\Column(name: "P_LigneNeg", type: Types::SMALLINT, nullable: true)]
    private ?int $pLigneneg = null;

    #[ORM\Column(name: "P_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $pQuantite = null;

    #[ORM\Column(name: "P_InfoLibre", type: Types::SMALLINT, nullable: true)]
    private ?int $pInfolibre = null;

    #[ORM\Column(name: "P_Seuil", type: Types::SMALLINT, nullable: true)]
    private ?int $pSeuil = null;

    #[ORM\Column(name: "P_Appel", type: Types::SMALLINT, nullable: true)]
    private ?int $pAppel = null;

    #[ORM\Column(name: "P_Arrondi", type: Types::SMALLINT, nullable: true)]
    private ?int $pArrondi = null;

    #[ORM\Column(name: "P_TransfertCaisse", type: Types::SMALLINT, nullable: true)]
    private ?int $pTransfertcaisse = null;

    #[ORM\Column(name: "P_JournalCaisse", length: 7, nullable: true)]
    private ?string $pJournalcaisse = null;

    #[ORM\Column(name: "P_PieceEcrReg", type: Types::SMALLINT, nullable: true)]
    private ?int $pPieceecrreg = null;

    #[ORM\Column(name: "P_RefEcrReg", type: Types::SMALLINT, nullable: true)]
    private ?int $pRefecrreg = null;

    #[ORM\Column(name: "P_MvtCaisse", type: Types::SMALLINT, nullable: true)]
    private ?int $pMvtcaisse = null;

    #[ORM\Column(name: "P_JournEcartRegl", length: 7, nullable: true)]
    private ?string $pJournecartregl = null;

    #[ORM\Column(name: "P_DebitRegl", length: 13, nullable: true)]
    private ?string $pDebitregl = null;

    #[ORM\Column(name: "P_CreditRegl", length: 13, nullable: true)]
    private ?string $pCreditregl = null;

    #[ORM\Column(name: "P_MaxEcart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $pMaxecart = null;

    #[ORM\Column(name: "P_CptaCaisse", type: Types::SMALLINT, nullable: true)]
    private ?int $pCptacaisse = null;

    #[ORM\Column(name: "P_DebitCaisse", length: 13, nullable: true)]
    private ?string $pDebitcaisse = null;

    #[ORM\Column(name: "P_CreditCaisse", length: 13, nullable: true)]
    private ?string $pCreditcaisse = null;

    #[ORM\Column(name: "P_JournEcartConv", length: 7, nullable: true)]
    private ?string $pJournecartconv = null;

    #[ORM\Column(name: "P_MaxEcartConv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $pMaxecartconv = null;

    #[ORM\Column(name: "P_UniciteLot", type: Types::SMALLINT, nullable: true)]
    private ?int $pUnicitelot = null;

    #[ORM\Column(name: "P_UniteTemps", type: Types::SMALLINT, nullable: true)]
    private ?int $pUnitetemps = null;

    #[ORM\Column(name: "P_TransfertIFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $pTransfertifrs = null;

    #[ORM\Column(name: "P_ConversionEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pConversioneng = null;

    #[ORM\Column(name: "P_AnalytiqueEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pAnalytiqueeng = null;

    #[ORM\Column(name: "P_DeviseEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pDeviseeng = null;

    #[ORM\Column(name: "P_TransfertDeviseEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pTransfertdeviseeng = null;

    #[ORM\Column(name: "P_LigneNegEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pLignenegeng = null;

    #[ORM\Column(name: "P_QuantiteEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pQuantiteeng = null;

    #[ORM\Column(name: "P_InfoLibreEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pInfolibreeng = null;

    #[ORM\Column(name: "P_TransfertIFRSEng", type: Types::SMALLINT, nullable: true)]
    private ?int $pTransfertifrseng = null;

    #[ORM\Column(name: "P_ValSerie01", type: Types::SMALLINT, nullable: true)]
    private ?int $pValserie01 = null;

    #[ORM\Column(name: "P_ValSerie02", type: Types::SMALLINT, nullable: true)]
    private ?int $pValserie02 = null;

    #[ORM\Column(name: "P_ExercicePrevision", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pExerciceprevision = null;

    #[ORM\Column(name: "P_PeriodicitePrevision", type: Types::SMALLINT, nullable: true)]
    private ?int $pPeriodiciteprevision = null;

    #[ORM\Column(name: "P_InterditSommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $pInterditsommeil = null;

    #[ORM\Column(name: "P_GestionMulti", type: Types::SMALLINT, nullable: true)]
    private ?int $pGestionmulti = null;

    #[ORM\Column(name: "P_Priorite", type: Types::SMALLINT, nullable: true)]
    private ?int $pPriorite = null;

    #[ORM\Column(name: "P_GestionControle", type: Types::SMALLINT, nullable: true)]
    private ?int $pGestioncontrole = null;

    #[ORM\Column(name: "P_ReportInfos", type: Types::SMALLINT, nullable: true)]
    private ?int $pReportinfos = null;

    #[ORM\Column(name: "P_ReportPrixRev", type: Types::SMALLINT, nullable: true)]
    private ?int $pReportprixrev = null;

    #[ORM\Column(name: "P_ComptaRegl", type: Types::SMALLINT, nullable: true)]
    private ?int $pComptaregl = null;

    #[ORM\Column(name: "P_BaseCalculMarge", type: Types::SMALLINT, nullable: true)]
    private ?int $pBasecalculmarge = null;

    #[ORM\Column(name: "P_GestionPlanning", type: Types::SMALLINT, nullable: true)]
    private ?int $pGestionplanning = null;

    #[ORM\Column(name: "P_EvtPlanning", type: Types::SMALLINT, nullable: true)]
    private ?int $pEvtplanning = null;

    #[ORM\Column(name: "P_RefStructuree", type: Types::SMALLINT, nullable: true)]
    private ?int $pRefstructuree = null;

    #[ORM\Column(name: "P_LibellePoidsNet", length: 21, nullable: true)]
    private ?string $pLibellepoidsnet = null;

    #[ORM\Column(name: "P_LibellePoidsBrut", length: 21, nullable: true)]
    private ?string $pLibellepoidsbrut = null;

    #[ORM\Column(name: "P_LibelleCondi", length: 21, nullable: true)]
    private ?string $pLibellecondi = null;

    #[ORM\Column(name: "P_LibelleEntete1", length: 21, nullable: true)]
    private ?string $pLibelleentete1 = null;

    #[ORM\Column(name: "P_LibelleEntete2", length: 21, nullable: true)]
    private ?string $pLibelleentete2 = null;

    #[ORM\Column(name: "P_LibelleEntete3", length: 21, nullable: true)]
    private ?string $pLibelleentete3 = null;

    #[ORM\Column(name: "P_LibelleEntete4", length: 21, nullable: true)]
    private ?string $pLibelleentete4 = null;

    #[ORM\Column(name: "P_LibelleReference", length: 21, nullable: true)]
    private ?string $pLibellereference = null;

    #[ORM\Column(name: "P_TauxEscompte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $pTauxescompte = null;

    #[ORM\Column(name: "P_ExonerationTVA", length: 61, nullable: true)]
    private ?string $pExonerationtva = null;

    #[ORM\Column(name: "P_ImpressionValide", type: Types::SMALLINT, nullable: true)]
    private ?int $pImpressionvalide = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPChpanal(): ?int
    {
        return $this->pChpanal;
    }

    public function setPChpanal(?int $pChpanal): static
    {
        $this->pChpanal = $pChpanal;

        return $this;
    }

    public function getPChpanaldoc(): ?int
    {
        return $this->pChpanaldoc;
    }

    public function setPChpanaldoc(?int $pChpanaldoc): static
    {
        $this->pChpanaldoc = $pChpanaldoc;

        return $this;
    }

    public function getPConversion(): ?int
    {
        return $this->pConversion;
    }

    public function setPConversion(?int $pConversion): static
    {
        $this->pConversion = $pConversion;

        return $this;
    }

    public function getPIndispo(): ?int
    {
        return $this->pIndispo;
    }

    public function setPIndispo(?int $pIndispo): static
    {
        $this->pIndispo = $pIndispo;

        return $this;
    }

    public function getPEcheances(): ?int
    {
        return $this->pEcheances;
    }

    public function setPEcheances(?int $pEcheances): static
    {
        $this->pEcheances = $pEcheances;

        return $this;
    }

    public function getPStocksaisie(): ?int
    {
        return $this->pStocksaisie;
    }

    public function setPStocksaisie(?int $pStocksaisie): static
    {
        $this->pStocksaisie = $pStocksaisie;

        return $this;
    }

    public function getPPeriodencours(): ?int
    {
        return $this->pPeriodencours;
    }

    public function setPPeriodencours(?int $pPeriodencours): static
    {
        $this->pPeriodencours = $pPeriodencours;

        return $this;
    }

    public function getPBaseencours(): ?int
    {
        return $this->pBaseencours;
    }

    public function setPBaseencours(?int $pBaseencours): static
    {
        $this->pBaseencours = $pBaseencours;

        return $this;
    }

    public function getPContremarque(): ?int
    {
        return $this->pContremarque;
    }

    public function setPContremarque(?int $pContremarque): static
    {
        $this->pContremarque = $pContremarque;

        return $this;
    }

    public function getPReportachat(): ?int
    {
        return $this->pReportachat;
    }

    public function setPReportachat(?int $pReportachat): static
    {
        $this->pReportachat = $pReportachat;

        return $this;
    }

    public function getPAnalytique(): ?int
    {
        return $this->pAnalytique;
    }

    public function setPAnalytique(?int $pAnalytique): static
    {
        $this->pAnalytique = $pAnalytique;

        return $this;
    }

    public function getPDevise(): ?int
    {
        return $this->pDevise;
    }

    public function setPDevise(?int $pDevise): static
    {
        $this->pDevise = $pDevise;

        return $this;
    }

    public function getPTransfertdevise(): ?int
    {
        return $this->pTransfertdevise;
    }

    public function setPTransfertdevise(?int $pTransfertdevise): static
    {
        $this->pTransfertdevise = $pTransfertdevise;

        return $this;
    }

    public function getPJournal01(): ?string
    {
        return $this->pJournal01;
    }

    public function setPJournal01(?string $pJournal01): static
    {
        $this->pJournal01 = $pJournal01;

        return $this;
    }

    public function getPJournal02(): ?string
    {
        return $this->pJournal02;
    }

    public function setPJournal02(?string $pJournal02): static
    {
        $this->pJournal02 = $pJournal02;

        return $this;
    }

    public function getPJournal03(): ?string
    {
        return $this->pJournal03;
    }

    public function setPJournal03(?string $pJournal03): static
    {
        $this->pJournal03 = $pJournal03;

        return $this;
    }

    public function getPJournal04(): ?string
    {
        return $this->pJournal04;
    }

    public function setPJournal04(?string $pJournal04): static
    {
        $this->pJournal04 = $pJournal04;

        return $this;
    }

    public function getPJournal05(): ?string
    {
        return $this->pJournal05;
    }

    public function setPJournal05(?string $pJournal05): static
    {
        $this->pJournal05 = $pJournal05;

        return $this;
    }

    public function getPJournal06(): ?string
    {
        return $this->pJournal06;
    }

    public function setPJournal06(?string $pJournal06): static
    {
        $this->pJournal06 = $pJournal06;

        return $this;
    }

    public function getPPiece01(): ?int
    {
        return $this->pPiece01;
    }

    public function setPPiece01(?int $pPiece01): static
    {
        $this->pPiece01 = $pPiece01;

        return $this;
    }

    public function getPPiece02(): ?int
    {
        return $this->pPiece02;
    }

    public function setPPiece02(?int $pPiece02): static
    {
        $this->pPiece02 = $pPiece02;

        return $this;
    }

    public function getPPiece03(): ?int
    {
        return $this->pPiece03;
    }

    public function setPPiece03(?int $pPiece03): static
    {
        $this->pPiece03 = $pPiece03;

        return $this;
    }

    public function getPPiece04(): ?int
    {
        return $this->pPiece04;
    }

    public function setPPiece04(?int $pPiece04): static
    {
        $this->pPiece04 = $pPiece04;

        return $this;
    }

    public function getPLibelle01(): ?string
    {
        return $this->pLibelle01;
    }

    public function setPLibelle01(?string $pLibelle01): static
    {
        $this->pLibelle01 = $pLibelle01;

        return $this;
    }

    public function getPLibelle02(): ?string
    {
        return $this->pLibelle02;
    }

    public function setPLibelle02(?string $pLibelle02): static
    {
        $this->pLibelle02 = $pLibelle02;

        return $this;
    }

    public function getPLibelle03(): ?string
    {
        return $this->pLibelle03;
    }

    public function setPLibelle03(?string $pLibelle03): static
    {
        $this->pLibelle03 = $pLibelle03;

        return $this;
    }

    public function getPLibelle04(): ?string
    {
        return $this->pLibelle04;
    }

    public function setPLibelle04(?string $pLibelle04): static
    {
        $this->pLibelle04 = $pLibelle04;

        return $this;
    }

    public function getPLigneneg(): ?int
    {
        return $this->pLigneneg;
    }

    public function setPLigneneg(?int $pLigneneg): static
    {
        $this->pLigneneg = $pLigneneg;

        return $this;
    }

    public function getPQuantite(): ?int
    {
        return $this->pQuantite;
    }

    public function setPQuantite(?int $pQuantite): static
    {
        $this->pQuantite = $pQuantite;

        return $this;
    }

    public function getPInfolibre(): ?int
    {
        return $this->pInfolibre;
    }

    public function setPInfolibre(?int $pInfolibre): static
    {
        $this->pInfolibre = $pInfolibre;

        return $this;
    }

    public function getPSeuil(): ?int
    {
        return $this->pSeuil;
    }

    public function setPSeuil(?int $pSeuil): static
    {
        $this->pSeuil = $pSeuil;

        return $this;
    }

    public function getPAppel(): ?int
    {
        return $this->pAppel;
    }

    public function setPAppel(?int $pAppel): static
    {
        $this->pAppel = $pAppel;

        return $this;
    }

    public function getPArrondi(): ?int
    {
        return $this->pArrondi;
    }

    public function setPArrondi(?int $pArrondi): static
    {
        $this->pArrondi = $pArrondi;

        return $this;
    }

    public function getPTransfertcaisse(): ?int
    {
        return $this->pTransfertcaisse;
    }

    public function setPTransfertcaisse(?int $pTransfertcaisse): static
    {
        $this->pTransfertcaisse = $pTransfertcaisse;

        return $this;
    }

    public function getPJournalcaisse(): ?string
    {
        return $this->pJournalcaisse;
    }

    public function setPJournalcaisse(?string $pJournalcaisse): static
    {
        $this->pJournalcaisse = $pJournalcaisse;

        return $this;
    }

    public function getPPieceecrreg(): ?int
    {
        return $this->pPieceecrreg;
    }

    public function setPPieceecrreg(?int $pPieceecrreg): static
    {
        $this->pPieceecrreg = $pPieceecrreg;

        return $this;
    }

    public function getPRefecrreg(): ?int
    {
        return $this->pRefecrreg;
    }

    public function setPRefecrreg(?int $pRefecrreg): static
    {
        $this->pRefecrreg = $pRefecrreg;

        return $this;
    }

    public function getPMvtcaisse(): ?int
    {
        return $this->pMvtcaisse;
    }

    public function setPMvtcaisse(?int $pMvtcaisse): static
    {
        $this->pMvtcaisse = $pMvtcaisse;

        return $this;
    }

    public function getPJournecartregl(): ?string
    {
        return $this->pJournecartregl;
    }

    public function setPJournecartregl(?string $pJournecartregl): static
    {
        $this->pJournecartregl = $pJournecartregl;

        return $this;
    }

    public function getPDebitregl(): ?string
    {
        return $this->pDebitregl;
    }

    public function setPDebitregl(?string $pDebitregl): static
    {
        $this->pDebitregl = $pDebitregl;

        return $this;
    }

    public function getPCreditregl(): ?string
    {
        return $this->pCreditregl;
    }

    public function setPCreditregl(?string $pCreditregl): static
    {
        $this->pCreditregl = $pCreditregl;

        return $this;
    }

    public function getPMaxecart(): ?string
    {
        return $this->pMaxecart;
    }

    public function setPMaxecart(?string $pMaxecart): static
    {
        $this->pMaxecart = $pMaxecart;

        return $this;
    }

    public function getPCptacaisse(): ?int
    {
        return $this->pCptacaisse;
    }

    public function setPCptacaisse(?int $pCptacaisse): static
    {
        $this->pCptacaisse = $pCptacaisse;

        return $this;
    }

    public function getPDebitcaisse(): ?string
    {
        return $this->pDebitcaisse;
    }

    public function setPDebitcaisse(?string $pDebitcaisse): static
    {
        $this->pDebitcaisse = $pDebitcaisse;

        return $this;
    }

    public function getPCreditcaisse(): ?string
    {
        return $this->pCreditcaisse;
    }

    public function setPCreditcaisse(?string $pCreditcaisse): static
    {
        $this->pCreditcaisse = $pCreditcaisse;

        return $this;
    }

    public function getPJournecartconv(): ?string
    {
        return $this->pJournecartconv;
    }

    public function setPJournecartconv(?string $pJournecartconv): static
    {
        $this->pJournecartconv = $pJournecartconv;

        return $this;
    }

    public function getPMaxecartconv(): ?string
    {
        return $this->pMaxecartconv;
    }

    public function setPMaxecartconv(?string $pMaxecartconv): static
    {
        $this->pMaxecartconv = $pMaxecartconv;

        return $this;
    }

    public function getPUnicitelot(): ?int
    {
        return $this->pUnicitelot;
    }

    public function setPUnicitelot(?int $pUnicitelot): static
    {
        $this->pUnicitelot = $pUnicitelot;

        return $this;
    }

    public function getPUnitetemps(): ?int
    {
        return $this->pUnitetemps;
    }

    public function setPUnitetemps(?int $pUnitetemps): static
    {
        $this->pUnitetemps = $pUnitetemps;

        return $this;
    }

    public function getPTransfertifrs(): ?int
    {
        return $this->pTransfertifrs;
    }

    public function setPTransfertifrs(?int $pTransfertifrs): static
    {
        $this->pTransfertifrs = $pTransfertifrs;

        return $this;
    }

    public function getPConversioneng(): ?int
    {
        return $this->pConversioneng;
    }

    public function setPConversioneng(?int $pConversioneng): static
    {
        $this->pConversioneng = $pConversioneng;

        return $this;
    }

    public function getPAnalytiqueeng(): ?int
    {
        return $this->pAnalytiqueeng;
    }

    public function setPAnalytiqueeng(?int $pAnalytiqueeng): static
    {
        $this->pAnalytiqueeng = $pAnalytiqueeng;

        return $this;
    }

    public function getPDeviseeng(): ?int
    {
        return $this->pDeviseeng;
    }

    public function setPDeviseeng(?int $pDeviseeng): static
    {
        $this->pDeviseeng = $pDeviseeng;

        return $this;
    }

    public function getPTransfertdeviseeng(): ?int
    {
        return $this->pTransfertdeviseeng;
    }

    public function setPTransfertdeviseeng(?int $pTransfertdeviseeng): static
    {
        $this->pTransfertdeviseeng = $pTransfertdeviseeng;

        return $this;
    }

    public function getPLignenegeng(): ?int
    {
        return $this->pLignenegeng;
    }

    public function setPLignenegeng(?int $pLignenegeng): static
    {
        $this->pLignenegeng = $pLignenegeng;

        return $this;
    }

    public function getPQuantiteeng(): ?int
    {
        return $this->pQuantiteeng;
    }

    public function setPQuantiteeng(?int $pQuantiteeng): static
    {
        $this->pQuantiteeng = $pQuantiteeng;

        return $this;
    }

    public function getPInfolibreeng(): ?int
    {
        return $this->pInfolibreeng;
    }

    public function setPInfolibreeng(?int $pInfolibreeng): static
    {
        $this->pInfolibreeng = $pInfolibreeng;

        return $this;
    }

    public function getPTransfertifrseng(): ?int
    {
        return $this->pTransfertifrseng;
    }

    public function setPTransfertifrseng(?int $pTransfertifrseng): static
    {
        $this->pTransfertifrseng = $pTransfertifrseng;

        return $this;
    }

    public function getPValserie01(): ?int
    {
        return $this->pValserie01;
    }

    public function setPValserie01(?int $pValserie01): static
    {
        $this->pValserie01 = $pValserie01;

        return $this;
    }

    public function getPValserie02(): ?int
    {
        return $this->pValserie02;
    }

    public function setPValserie02(?int $pValserie02): static
    {
        $this->pValserie02 = $pValserie02;

        return $this;
    }

    public function getPExerciceprevision(): ?\DateTimeInterface
    {
        return $this->pExerciceprevision;
    }

    public function setPExerciceprevision(?\DateTimeInterface $pExerciceprevision): static
    {
        $this->pExerciceprevision = $pExerciceprevision;

        return $this;
    }

    public function getPPeriodiciteprevision(): ?int
    {
        return $this->pPeriodiciteprevision;
    }

    public function setPPeriodiciteprevision(?int $pPeriodiciteprevision): static
    {
        $this->pPeriodiciteprevision = $pPeriodiciteprevision;

        return $this;
    }

    public function getPInterditsommeil(): ?int
    {
        return $this->pInterditsommeil;
    }

    public function setPInterditsommeil(?int $pInterditsommeil): static
    {
        $this->pInterditsommeil = $pInterditsommeil;

        return $this;
    }

    public function getPGestionmulti(): ?int
    {
        return $this->pGestionmulti;
    }

    public function setPGestionmulti(?int $pGestionmulti): static
    {
        $this->pGestionmulti = $pGestionmulti;

        return $this;
    }

    public function getPPriorite(): ?int
    {
        return $this->pPriorite;
    }

    public function setPPriorite(?int $pPriorite): static
    {
        $this->pPriorite = $pPriorite;

        return $this;
    }

    public function getPGestioncontrole(): ?int
    {
        return $this->pGestioncontrole;
    }

    public function setPGestioncontrole(?int $pGestioncontrole): static
    {
        $this->pGestioncontrole = $pGestioncontrole;

        return $this;
    }

    public function getPReportinfos(): ?int
    {
        return $this->pReportinfos;
    }

    public function setPReportinfos(?int $pReportinfos): static
    {
        $this->pReportinfos = $pReportinfos;

        return $this;
    }

    public function getPReportprixrev(): ?int
    {
        return $this->pReportprixrev;
    }

    public function setPReportprixrev(?int $pReportprixrev): static
    {
        $this->pReportprixrev = $pReportprixrev;

        return $this;
    }

    public function getPComptaregl(): ?int
    {
        return $this->pComptaregl;
    }

    public function setPComptaregl(?int $pComptaregl): static
    {
        $this->pComptaregl = $pComptaregl;

        return $this;
    }

    public function getPBasecalculmarge(): ?int
    {
        return $this->pBasecalculmarge;
    }

    public function setPBasecalculmarge(?int $pBasecalculmarge): static
    {
        $this->pBasecalculmarge = $pBasecalculmarge;

        return $this;
    }

    public function getPGestionplanning(): ?int
    {
        return $this->pGestionplanning;
    }

    public function setPGestionplanning(?int $pGestionplanning): static
    {
        $this->pGestionplanning = $pGestionplanning;

        return $this;
    }

    public function getPEvtplanning(): ?int
    {
        return $this->pEvtplanning;
    }

    public function setPEvtplanning(?int $pEvtplanning): static
    {
        $this->pEvtplanning = $pEvtplanning;

        return $this;
    }

    public function getPRefstructuree(): ?int
    {
        return $this->pRefstructuree;
    }

    public function setPRefstructuree(?int $pRefstructuree): static
    {
        $this->pRefstructuree = $pRefstructuree;

        return $this;
    }

    public function getPLibellepoidsnet(): ?string
    {
        return $this->pLibellepoidsnet;
    }

    public function setPLibellepoidsnet(?string $pLibellepoidsnet): static
    {
        $this->pLibellepoidsnet = $pLibellepoidsnet;

        return $this;
    }

    public function getPLibellepoidsbrut(): ?string
    {
        return $this->pLibellepoidsbrut;
    }

    public function setPLibellepoidsbrut(?string $pLibellepoidsbrut): static
    {
        $this->pLibellepoidsbrut = $pLibellepoidsbrut;

        return $this;
    }

    public function getPLibellecondi(): ?string
    {
        return $this->pLibellecondi;
    }

    public function setPLibellecondi(?string $pLibellecondi): static
    {
        $this->pLibellecondi = $pLibellecondi;

        return $this;
    }

    public function getPLibelleentete1(): ?string
    {
        return $this->pLibelleentete1;
    }

    public function setPLibelleentete1(?string $pLibelleentete1): static
    {
        $this->pLibelleentete1 = $pLibelleentete1;

        return $this;
    }

    public function getPLibelleentete2(): ?string
    {
        return $this->pLibelleentete2;
    }

    public function setPLibelleentete2(?string $pLibelleentete2): static
    {
        $this->pLibelleentete2 = $pLibelleentete2;

        return $this;
    }

    public function getPLibelleentete3(): ?string
    {
        return $this->pLibelleentete3;
    }

    public function setPLibelleentete3(?string $pLibelleentete3): static
    {
        $this->pLibelleentete3 = $pLibelleentete3;

        return $this;
    }

    public function getPLibelleentete4(): ?string
    {
        return $this->pLibelleentete4;
    }

    public function setPLibelleentete4(?string $pLibelleentete4): static
    {
        $this->pLibelleentete4 = $pLibelleentete4;

        return $this;
    }

    public function getPLibellereference(): ?string
    {
        return $this->pLibellereference;
    }

    public function setPLibellereference(?string $pLibellereference): static
    {
        $this->pLibellereference = $pLibellereference;

        return $this;
    }

    public function getPTauxescompte(): ?string
    {
        return $this->pTauxescompte;
    }

    public function setPTauxescompte(?string $pTauxescompte): static
    {
        $this->pTauxescompte = $pTauxescompte;

        return $this;
    }

    public function getPExonerationtva(): ?string
    {
        return $this->pExonerationtva;
    }

    public function setPExonerationtva(?string $pExonerationtva): static
    {
        $this->pExonerationtva = $pExonerationtva;

        return $this;
    }

    public function getPImpressionvalide(): ?int
    {
        return $this->pImpressionvalide;
    }

    public function setPImpressionvalide(?int $pImpressionvalide): static
    {
        $this->pImpressionvalide = $pImpressionvalide;

        return $this;
    }
}
