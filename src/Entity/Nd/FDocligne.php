<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDocligneRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCLIGNE')]
#[ORM\Index(name: 'IHashOrder_F_DOCLIGNE', columns: ['cbHashOrder'])]
#[ORM\Index(name: 'IDL_LIGNE', columns: ['DL_Ligne'])]
#[ORM\Index(name: 'IDL_REF', columns: ['DL_NoRef'])]
#[ORM\Index(name: 'IDL_STOCK', columns: ['DL_DateBL'])]
#[ORM\Index(name: 'IDL_ARTGAM', columns: ['AG_No2'])]
#[ORM\Index(name: 'IDL_REPRESENT', columns: ['CO_No'])]
#[ORM\Index(name: 'IDL_PIECECOM', columns: ['cbDL_PieceBC'])]
#[ORM\Index(name: 'IDL_PIECELIVR', columns: ['cbDL_PieceBL'])]
#[ORM\Index(name: 'IDL_TIERS', columns: ['DO_Date'])]
#[ORM\UniqueConstraint(name: 'IDL_NO', columns: ['DL_No'])]
#[ORM\Index(name: 'IDL_ANAL', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'IDL_ARTGAM2', columns: ['AG_No2'])]
#[ORM\Index(name: 'IDL_PIECEPL', columns: ['cbDL_PiecePL'])]
#[ORM\Index(name: 'IDL_DEPOT', columns: ['DO_Type'])]
#[ORM\Index(name: 'IDL_REFFOUR', columns: ['cbAF_RefFourniss'])]
#[ORM\Index(name: 'IDL_NOLINK', columns: ['DL_NoLink'])]
#[ORM\Index(name: 'IDL_RESSOURCE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IDL_PROJET', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IDL_COMPOSE', columns: ['cbAR_RefCompose'])]
#[ORM\Index(name: 'IDL_PIECEDE', columns: ['cbDL_PieceDE'])]
#[ORM\Index(name: 'IDL_REFLIG', columns: ['cbDO_Ref'])]
#[ORM\Index(name: 'IDL_NOSOUSTOTAL', columns: ['DL_NoSousTotal'])]
#[ORM\Index(name: 'FKIA_F_DOCLIGNE_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_DOCLIGNE_DE_No', columns: ['cbDE_No'])]
#[ORM\Index(name: 'FKIA_F_DOCLIGNE_DL_NoLink', columns: ['cbDL_NoLink'])]
#[ORM\Index(name: 'FKIA_F_DOCLIGNE_RP_Code', columns: ['RP_Code'])]
#[ORM\Entity(repositoryClass: FDocligneRepository::class)]
class FDocligne
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DO_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $doDomaine = null;

    #[ORM\Column(name: "DO_Type", type: Types::SMALLINT)]
    private ?int $doType = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "DO_Piece", length: 9)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cbDO_Piece", type: Types::BINARY, nullable: true)]
    private $cbdoPiece = null;

    #[ORM\Column(name: "DL_PieceBC", length: 9, nullable: true)]
    private ?string $dlPiecebc = null;

    #[ORM\Column(name: "cbDL_PieceBC", type: Types::BINARY, nullable: true)]
    private $cbdlPiecebc = null;

    #[ORM\Column(name: "DL_PieceBL", length: 9, nullable: true)]
    private ?string $dlPiecebl = null;

    #[ORM\Column(name: "cbDL_PieceBL", type: Types::BINARY, nullable: true)]
    private $cbdlPiecebl = null;

    #[ORM\Column(name: "DO_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDate = null;

    #[ORM\Column(name: "DL_DateBC", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dlDatebc = null;

    #[ORM\Column(name: "DL_DateBL", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dlDatebl = null;

    #[ORM\Column(name: "DL_Ligne", nullable: true)]
    private ?int $dlLigne = null;

    #[ORM\Column(name: "DO_Ref", length: 17, nullable: true)]
    private ?string $doRef = null;

    #[ORM\Column(name: "DL_TNomencl", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTnomencl = null;

    #[ORM\Column(name: "DL_TRemPied", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTrempied = null;

    #[ORM\Column(name: "DL_TRemExep", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTremexep = null;

    #[ORM\Column(name: "AR_Ref", length: 19, nullable: true)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "DL_Design", length: 69, nullable: true)]
    private ?string $dlDesign = null;

    #[ORM\Column(name: "DL_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlQte = null;

    #[ORM\Column(name: "DL_QteBC", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlQtebc = null;

    #[ORM\Column(name: "DL_QteBL", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlQtebl = null;

    #[ORM\Column(name: "DL_PoidsNet", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlPoidsnet = null;

    #[ORM\Column(name: "DL_PoidsBrut", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlPoidsbrut = null;

    #[ORM\Column(name: "DL_Remise01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlRemise01remValeur = null;

    #[ORM\Column(name: "DL_Remise01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $dlRemise01remType = null;

    #[ORM\Column(name: "DL_Remise02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlRemise02remValeur = null;

    #[ORM\Column(name: "DL_Remise02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $dlRemise02remType = null;

    #[ORM\Column(name: "DL_Remise03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlRemise03remValeur = null;

    #[ORM\Column(name: "DL_Remise03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $dlRemise03remType = null;

    #[ORM\Column(name: "DL_PrixUnitaire", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlPrixunitaire = null;

    #[ORM\Column(name: "DL_PUBC", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlPubc = null;

    #[ORM\Column(name: "DL_Taxe1", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlTaxe1 = null;

    #[ORM\Column(name: "DL_TypeTaux1", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTypetaux1 = null;

    #[ORM\Column(name: "DL_TypeTaxe1", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTypetaxe1 = null;

    #[ORM\Column(name: "DL_Taxe2", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlTaxe2 = null;

    #[ORM\Column(name: "DL_TypeTaux2", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTypetaux2 = null;

    #[ORM\Column(name: "DL_TypeTaxe2", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTypetaxe2 = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

    #[ORM\Column(name: "DL_PrixRU", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlPrixru = null;

    #[ORM\Column(name: "DL_CMUP", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlCmup = null;

    #[ORM\Column(name: "DL_MvtStock", type: Types::SMALLINT, nullable: true)]
    private ?int $dlMvtstock = null;

    #[ORM\Column(name: "DT_No", nullable: true)]
    private ?int $dtNo = null;

    #[ORM\Column(name: "cbDT_No", nullable: true)]
    private ?int $cbdtNo = null;

    #[ORM\Column(name: "AF_RefFourniss", length: 19, nullable: true)]
    private ?string $afReffourniss = null;

    #[ORM\Column(name: "cbAF_RefFourniss", type: Types::BINARY, nullable: true)]
    private $cbafReffourniss = null;

    #[ORM\Column(name: "EU_Enumere", length: 21, nullable: true)]
    private ?string $euEnumere = null;

    #[ORM\Column(name: "EU_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $euQte = null;

    #[ORM\Column(name: "DL_TTC", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTtc = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "DL_NoRef", type: Types::SMALLINT, nullable: true)]
    private ?int $dlNoref = null;

    #[ORM\Column(name: "DL_TypePL", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTypepl = null;

    #[ORM\Column(name: "DL_PUDevise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlPudevise = null;

    #[ORM\Column(name: "DL_PUTTC", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlPuttc = null;

    #[ORM\Column(name: "DL_No", nullable: true)]
    private ?int $dlNo = null;

    #[ORM\Column(name: "DO_DateLivr", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDatelivr = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "DL_Taxe3", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlTaxe3 = null;

    #[ORM\Column(name: "DL_TypeTaux3", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTypetaux3 = null;

    #[ORM\Column(name: "DL_TypeTaxe3", type: Types::SMALLINT, nullable: true)]
    private ?int $dlTypetaxe3 = null;

    #[ORM\Column(name: "DL_Frais", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlFrais = null;

    #[ORM\Column(name: "DL_Valorise", type: Types::SMALLINT, nullable: true)]
    private ?int $dlValorise = null;

    #[ORM\Column(name: "AR_RefCompose", length: 19, nullable: true)]
    private ?string $arRefcompose = null;

    #[ORM\Column(name: "DL_NonLivre", type: Types::SMALLINT, nullable: true)]
    private ?int $dlNonlivre = null;

    #[ORM\Column(name: "AC_RefClient", length: 19, nullable: true)]
    private ?string $acRefclient = null;

    #[ORM\Column(name: "DL_MontantHT", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlMontantht = null;

    #[ORM\Column(name: "DL_MontantTTC", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlMontantttc = null;

    #[ORM\Column(name: "DL_FactPoids", type: Types::SMALLINT, nullable: true)]
    private ?int $dlFactpoids = null;

    #[ORM\Column(name: "DL_Escompte", type: Types::SMALLINT, nullable: true)]
    private ?int $dlEscompte = null;

    #[ORM\Column(name: "DL_PiecePL", length: 9, nullable: true)]
    private ?string $dlPiecepl = null;

    #[ORM\Column(name: "cbDL_PiecePL", type: Types::BINARY, nullable: true)]
    private $cbdlPiecepl = null;

    #[ORM\Column(name: "DL_DatePL", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dlDatepl = null;

    #[ORM\Column(name: "DL_QtePL", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlQtepl = null;

    #[ORM\Column(name: "DL_NoColis", length: 19, nullable: true)]
    private ?string $dlNocolis = null;

    #[ORM\Column(name: "DL_NoLink", nullable: true)]
    private ?int $dlNolink = null;

    #[ORM\Column(name: "cbDL_NoLink", nullable: true)]
    private ?int $cbdlNolink = null;

    #[ORM\Column(name: "RP_Code", length: 11, nullable: true)]
    private ?string $rpCode = null;

    #[ORM\Column(name: "cbRP_Code", type: Types::BINARY, nullable: true)]
    private $cbrpCode = null;

    #[ORM\Column(name: "DL_QteRessource", nullable: true)]
    private ?int $dlQteressource = null;

    #[ORM\Column(name: "DL_DateAvancement", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dlDateavancement = null;

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

    #[ORM\Column(name: "cbDO_Ref", type: Types::BINARY, nullable: true)]
    private $cbdoRef = null;

    #[ORM\Column(name: "cbAR_RefCompose", type: Types::BINARY, nullable: true)]
    private $cbarRefcompose = null;

    #[ORM\Column(name: "PF_Num", length: 9)]
    private ?string $pfNum = null;

    #[ORM\Column(name: "cbPF_Num", type: Types::BINARY, nullable: true)]
    private $cbpfNum = null;

    #[ORM\Column(name: "DL_CodeTaxe1", length: 5, nullable: true)]
    private ?string $dlCodetaxe1 = null;

    #[ORM\Column(name: "DL_CodeTaxe2", length: 5, nullable: true)]
    private ?string $dlCodetaxe2 = null;

    #[ORM\Column(name: "DL_CodeTaxe3", length: 5, nullable: true)]
    private ?string $dlCodetaxe3 = null;

    #[ORM\Column(name: "DL_PieceOFProd", nullable: true)]
    private ?int $dlPieceofprod = null;

    #[ORM\Column(name: "DL_PieceDE", length: 9, nullable: true)]
    private ?string $dlPiecede = null;

    #[ORM\Column(name: "cbDL_PieceDE", type: Types::BINARY, nullable: true)]
    private $cbdlPiecede = null;

    #[ORM\Column(name: "DL_DateDE", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dlDatede = null;

    #[ORM\Column(name: "DL_QteDE", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlQtede = null;

    #[ORM\Column(name: "DL_Operation", length: 11, nullable: true)]
    private ?string $dlOperation = null;

    #[ORM\Column(name: "PU_FRS", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $puFrs = null;

    #[ORM\Column(name: "[Nbr PACK]", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $nbrPack = null;

    #[ORM\Column(name: "DL_NoSousTotal", nullable: true)]
    private ?int $dlNosoustotal = null;

    #[ORM\Column(name: "CA_No", nullable: true)]
    private ?int $caNo = null;

    #[ORM\Column(name: "cbCA_No", nullable: true)]
    private ?int $cbcaNo = null;

    #[ORM\Column(name: "cbHash", type: Types::BINARY, nullable: true)]
    private $cbhash = null;

    #[ORM\Column(name: "cbHashVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $cbhashversion = 1;

    #[ORM\Column(name: "cbHashDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbhashdate = null;

    #[ORM\Column(name: "cbHashOrder", nullable: true)]
    private ?int $cbhashorder = null;

    #[ORM\Column(name: "Emplacement", length: 69, nullable: true)]
    private ?string $emplacement = null;

    #[ORM\Column(name: "[Aletre stock min]", length: 69, nullable: true)]
    private ?string $aletreStockMin = null;

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

    public function setDoType(int $doType): static
    {
        $this->doType = $doType;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(string $doPiece): static
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

    public function getDlPiecebc(): ?string
    {
        return $this->dlPiecebc;
    }

    public function setDlPiecebc(?string $dlPiecebc): static
    {
        $this->dlPiecebc = $dlPiecebc;

        return $this;
    }

    public function getCbdlPiecebc()
    {
        return $this->cbdlPiecebc;
    }

    public function setCbdlPiecebc($cbdlPiecebc): static
    {
        $this->cbdlPiecebc = $cbdlPiecebc;

        return $this;
    }

    public function getDlPiecebl(): ?string
    {
        return $this->dlPiecebl;
    }

    public function setDlPiecebl(?string $dlPiecebl): static
    {
        $this->dlPiecebl = $dlPiecebl;

        return $this;
    }

    public function getCbdlPiecebl()
    {
        return $this->cbdlPiecebl;
    }

    public function setCbdlPiecebl($cbdlPiecebl): static
    {
        $this->cbdlPiecebl = $cbdlPiecebl;

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

    public function getDlDatebc(): ?\DateTimeInterface
    {
        return $this->dlDatebc;
    }

    public function setDlDatebc(?\DateTimeInterface $dlDatebc): static
    {
        $this->dlDatebc = $dlDatebc;

        return $this;
    }

    public function getDlDatebl(): ?\DateTimeInterface
    {
        return $this->dlDatebl;
    }

    public function setDlDatebl(?\DateTimeInterface $dlDatebl): static
    {
        $this->dlDatebl = $dlDatebl;

        return $this;
    }

    public function getDlLigne(): ?int
    {
        return $this->dlLigne;
    }

    public function setDlLigne(?int $dlLigne): static
    {
        $this->dlLigne = $dlLigne;

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

    public function getDlTnomencl(): ?int
    {
        return $this->dlTnomencl;
    }

    public function setDlTnomencl(?int $dlTnomencl): static
    {
        $this->dlTnomencl = $dlTnomencl;

        return $this;
    }

    public function getDlTrempied(): ?int
    {
        return $this->dlTrempied;
    }

    public function setDlTrempied(?int $dlTrempied): static
    {
        $this->dlTrempied = $dlTrempied;

        return $this;
    }

    public function getDlTremexep(): ?int
    {
        return $this->dlTremexep;
    }

    public function setDlTremexep(?int $dlTremexep): static
    {
        $this->dlTremexep = $dlTremexep;

        return $this;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(?string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getDlDesign(): ?string
    {
        return $this->dlDesign;
    }

    public function setDlDesign(?string $dlDesign): static
    {
        $this->dlDesign = $dlDesign;

        return $this;
    }

    public function getDlQte(): ?string
    {
        return $this->dlQte;
    }

    public function setDlQte(?string $dlQte): static
    {
        $this->dlQte = $dlQte;

        return $this;
    }

    public function getDlQtebc(): ?string
    {
        return $this->dlQtebc;
    }

    public function setDlQtebc(?string $dlQtebc): static
    {
        $this->dlQtebc = $dlQtebc;

        return $this;
    }

    public function getDlQtebl(): ?string
    {
        return $this->dlQtebl;
    }

    public function setDlQtebl(?string $dlQtebl): static
    {
        $this->dlQtebl = $dlQtebl;

        return $this;
    }

    public function getDlPoidsnet(): ?string
    {
        return $this->dlPoidsnet;
    }

    public function setDlPoidsnet(?string $dlPoidsnet): static
    {
        $this->dlPoidsnet = $dlPoidsnet;

        return $this;
    }

    public function getDlPoidsbrut(): ?string
    {
        return $this->dlPoidsbrut;
    }

    public function setDlPoidsbrut(?string $dlPoidsbrut): static
    {
        $this->dlPoidsbrut = $dlPoidsbrut;

        return $this;
    }

    public function getDlRemise01remValeur(): ?string
    {
        return $this->dlRemise01remValeur;
    }

    public function setDlRemise01remValeur(?string $dlRemise01remValeur): static
    {
        $this->dlRemise01remValeur = $dlRemise01remValeur;

        return $this;
    }

    public function getDlRemise01remType(): ?int
    {
        return $this->dlRemise01remType;
    }

    public function setDlRemise01remType(?int $dlRemise01remType): static
    {
        $this->dlRemise01remType = $dlRemise01remType;

        return $this;
    }

    public function getDlRemise02remValeur(): ?string
    {
        return $this->dlRemise02remValeur;
    }

    public function setDlRemise02remValeur(?string $dlRemise02remValeur): static
    {
        $this->dlRemise02remValeur = $dlRemise02remValeur;

        return $this;
    }

    public function getDlRemise02remType(): ?int
    {
        return $this->dlRemise02remType;
    }

    public function setDlRemise02remType(?int $dlRemise02remType): static
    {
        $this->dlRemise02remType = $dlRemise02remType;

        return $this;
    }

    public function getDlRemise03remValeur(): ?string
    {
        return $this->dlRemise03remValeur;
    }

    public function setDlRemise03remValeur(?string $dlRemise03remValeur): static
    {
        $this->dlRemise03remValeur = $dlRemise03remValeur;

        return $this;
    }

    public function getDlRemise03remType(): ?int
    {
        return $this->dlRemise03remType;
    }

    public function setDlRemise03remType(?int $dlRemise03remType): static
    {
        $this->dlRemise03remType = $dlRemise03remType;

        return $this;
    }

    public function getDlPrixunitaire(): ?string
    {
        return $this->dlPrixunitaire;
    }

    public function setDlPrixunitaire(?string $dlPrixunitaire): static
    {
        $this->dlPrixunitaire = $dlPrixunitaire;

        return $this;
    }

    public function getDlPubc(): ?string
    {
        return $this->dlPubc;
    }

    public function setDlPubc(?string $dlPubc): static
    {
        $this->dlPubc = $dlPubc;

        return $this;
    }

    public function getDlTaxe1(): ?string
    {
        return $this->dlTaxe1;
    }

    public function setDlTaxe1(?string $dlTaxe1): static
    {
        $this->dlTaxe1 = $dlTaxe1;

        return $this;
    }

    public function getDlTypetaux1(): ?int
    {
        return $this->dlTypetaux1;
    }

    public function setDlTypetaux1(?int $dlTypetaux1): static
    {
        $this->dlTypetaux1 = $dlTypetaux1;

        return $this;
    }

    public function getDlTypetaxe1(): ?int
    {
        return $this->dlTypetaxe1;
    }

    public function setDlTypetaxe1(?int $dlTypetaxe1): static
    {
        $this->dlTypetaxe1 = $dlTypetaxe1;

        return $this;
    }

    public function getDlTaxe2(): ?string
    {
        return $this->dlTaxe2;
    }

    public function setDlTaxe2(?string $dlTaxe2): static
    {
        $this->dlTaxe2 = $dlTaxe2;

        return $this;
    }

    public function getDlTypetaux2(): ?int
    {
        return $this->dlTypetaux2;
    }

    public function setDlTypetaux2(?int $dlTypetaux2): static
    {
        $this->dlTypetaux2 = $dlTypetaux2;

        return $this;
    }

    public function getDlTypetaxe2(): ?int
    {
        return $this->dlTypetaxe2;
    }

    public function setDlTypetaxe2(?int $dlTypetaxe2): static
    {
        $this->dlTypetaxe2 = $dlTypetaxe2;

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

    public function getAgNo1(): ?int
    {
        return $this->agNo1;
    }

    public function setAgNo1(?int $agNo1): static
    {
        $this->agNo1 = $agNo1;

        return $this;
    }

    public function getAgNo2(): ?int
    {
        return $this->agNo2;
    }

    public function setAgNo2(?int $agNo2): static
    {
        $this->agNo2 = $agNo2;

        return $this;
    }

    public function getDlPrixru(): ?string
    {
        return $this->dlPrixru;
    }

    public function setDlPrixru(?string $dlPrixru): static
    {
        $this->dlPrixru = $dlPrixru;

        return $this;
    }

    public function getDlCmup(): ?string
    {
        return $this->dlCmup;
    }

    public function setDlCmup(?string $dlCmup): static
    {
        $this->dlCmup = $dlCmup;

        return $this;
    }

    public function getDlMvtstock(): ?int
    {
        return $this->dlMvtstock;
    }

    public function setDlMvtstock(?int $dlMvtstock): static
    {
        $this->dlMvtstock = $dlMvtstock;

        return $this;
    }

    public function getDtNo(): ?int
    {
        return $this->dtNo;
    }

    public function setDtNo(?int $dtNo): static
    {
        $this->dtNo = $dtNo;

        return $this;
    }

    public function getCbdtNo(): ?int
    {
        return $this->cbdtNo;
    }

    public function setCbdtNo(?int $cbdtNo): static
    {
        $this->cbdtNo = $cbdtNo;

        return $this;
    }

    public function getAfReffourniss(): ?string
    {
        return $this->afReffourniss;
    }

    public function setAfReffourniss(?string $afReffourniss): static
    {
        $this->afReffourniss = $afReffourniss;

        return $this;
    }

    public function getCbafReffourniss()
    {
        return $this->cbafReffourniss;
    }

    public function setCbafReffourniss($cbafReffourniss): static
    {
        $this->cbafReffourniss = $cbafReffourniss;

        return $this;
    }

    public function getEuEnumere(): ?string
    {
        return $this->euEnumere;
    }

    public function setEuEnumere(?string $euEnumere): static
    {
        $this->euEnumere = $euEnumere;

        return $this;
    }

    public function getEuQte(): ?string
    {
        return $this->euQte;
    }

    public function setEuQte(?string $euQte): static
    {
        $this->euQte = $euQte;

        return $this;
    }

    public function getDlTtc(): ?int
    {
        return $this->dlTtc;
    }

    public function setDlTtc(?int $dlTtc): static
    {
        $this->dlTtc = $dlTtc;

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

    public function getDlNoref(): ?int
    {
        return $this->dlNoref;
    }

    public function setDlNoref(?int $dlNoref): static
    {
        $this->dlNoref = $dlNoref;

        return $this;
    }

    public function getDlTypepl(): ?int
    {
        return $this->dlTypepl;
    }

    public function setDlTypepl(?int $dlTypepl): static
    {
        $this->dlTypepl = $dlTypepl;

        return $this;
    }

    public function getDlPudevise(): ?string
    {
        return $this->dlPudevise;
    }

    public function setDlPudevise(?string $dlPudevise): static
    {
        $this->dlPudevise = $dlPudevise;

        return $this;
    }

    public function getDlPuttc(): ?string
    {
        return $this->dlPuttc;
    }

    public function setDlPuttc(?string $dlPuttc): static
    {
        $this->dlPuttc = $dlPuttc;

        return $this;
    }

    public function getDlNo(): ?int
    {
        return $this->dlNo;
    }

    public function setDlNo(?int $dlNo): static
    {
        $this->dlNo = $dlNo;

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

    public function getDlTaxe3(): ?string
    {
        return $this->dlTaxe3;
    }

    public function setDlTaxe3(?string $dlTaxe3): static
    {
        $this->dlTaxe3 = $dlTaxe3;

        return $this;
    }

    public function getDlTypetaux3(): ?int
    {
        return $this->dlTypetaux3;
    }

    public function setDlTypetaux3(?int $dlTypetaux3): static
    {
        $this->dlTypetaux3 = $dlTypetaux3;

        return $this;
    }

    public function getDlTypetaxe3(): ?int
    {
        return $this->dlTypetaxe3;
    }

    public function setDlTypetaxe3(?int $dlTypetaxe3): static
    {
        $this->dlTypetaxe3 = $dlTypetaxe3;

        return $this;
    }

    public function getDlFrais(): ?string
    {
        return $this->dlFrais;
    }

    public function setDlFrais(?string $dlFrais): static
    {
        $this->dlFrais = $dlFrais;

        return $this;
    }

    public function getDlValorise(): ?int
    {
        return $this->dlValorise;
    }

    public function setDlValorise(?int $dlValorise): static
    {
        $this->dlValorise = $dlValorise;

        return $this;
    }

    public function getArRefcompose(): ?string
    {
        return $this->arRefcompose;
    }

    public function setArRefcompose(?string $arRefcompose): static
    {
        $this->arRefcompose = $arRefcompose;

        return $this;
    }

    public function getDlNonlivre(): ?int
    {
        return $this->dlNonlivre;
    }

    public function setDlNonlivre(?int $dlNonlivre): static
    {
        $this->dlNonlivre = $dlNonlivre;

        return $this;
    }

    public function getAcRefclient(): ?string
    {
        return $this->acRefclient;
    }

    public function setAcRefclient(?string $acRefclient): static
    {
        $this->acRefclient = $acRefclient;

        return $this;
    }

    public function getDlMontantht(): ?string
    {
        return $this->dlMontantht;
    }

    public function setDlMontantht(?string $dlMontantht): static
    {
        $this->dlMontantht = $dlMontantht;

        return $this;
    }

    public function getDlMontantttc(): ?string
    {
        return $this->dlMontantttc;
    }

    public function setDlMontantttc(?string $dlMontantttc): static
    {
        $this->dlMontantttc = $dlMontantttc;

        return $this;
    }

    public function getDlFactpoids(): ?int
    {
        return $this->dlFactpoids;
    }

    public function setDlFactpoids(?int $dlFactpoids): static
    {
        $this->dlFactpoids = $dlFactpoids;

        return $this;
    }

    public function getDlEscompte(): ?int
    {
        return $this->dlEscompte;
    }

    public function setDlEscompte(?int $dlEscompte): static
    {
        $this->dlEscompte = $dlEscompte;

        return $this;
    }

    public function getDlPiecepl(): ?string
    {
        return $this->dlPiecepl;
    }

    public function setDlPiecepl(?string $dlPiecepl): static
    {
        $this->dlPiecepl = $dlPiecepl;

        return $this;
    }

    public function getCbdlPiecepl()
    {
        return $this->cbdlPiecepl;
    }

    public function setCbdlPiecepl($cbdlPiecepl): static
    {
        $this->cbdlPiecepl = $cbdlPiecepl;

        return $this;
    }

    public function getDlDatepl(): ?\DateTimeInterface
    {
        return $this->dlDatepl;
    }

    public function setDlDatepl(?\DateTimeInterface $dlDatepl): static
    {
        $this->dlDatepl = $dlDatepl;

        return $this;
    }

    public function getDlQtepl(): ?string
    {
        return $this->dlQtepl;
    }

    public function setDlQtepl(?string $dlQtepl): static
    {
        $this->dlQtepl = $dlQtepl;

        return $this;
    }

    public function getDlNocolis(): ?string
    {
        return $this->dlNocolis;
    }

    public function setDlNocolis(?string $dlNocolis): static
    {
        $this->dlNocolis = $dlNocolis;

        return $this;
    }

    public function getDlNolink(): ?int
    {
        return $this->dlNolink;
    }

    public function setDlNolink(?int $dlNolink): static
    {
        $this->dlNolink = $dlNolink;

        return $this;
    }

    public function getCbdlNolink(): ?int
    {
        return $this->cbdlNolink;
    }

    public function setCbdlNolink(?int $cbdlNolink): static
    {
        $this->cbdlNolink = $cbdlNolink;

        return $this;
    }

    public function getRpCode(): ?string
    {
        return $this->rpCode;
    }

    public function setRpCode(?string $rpCode): static
    {
        $this->rpCode = $rpCode;

        return $this;
    }

    public function getCbrpCode()
    {
        return $this->cbrpCode;
    }

    public function setCbrpCode($cbrpCode): static
    {
        $this->cbrpCode = $cbrpCode;

        return $this;
    }

    public function getDlQteressource(): ?int
    {
        return $this->dlQteressource;
    }

    public function setDlQteressource(?int $dlQteressource): static
    {
        $this->dlQteressource = $dlQteressource;

        return $this;
    }

    public function getDlDateavancement(): ?\DateTimeInterface
    {
        return $this->dlDateavancement;
    }

    public function setDlDateavancement(?\DateTimeInterface $dlDateavancement): static
    {
        $this->dlDateavancement = $dlDateavancement;

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

    public function getCbdoRef()
    {
        return $this->cbdoRef;
    }

    public function setCbdoRef($cbdoRef): static
    {
        $this->cbdoRef = $cbdoRef;

        return $this;
    }

    public function getCbarRefcompose()
    {
        return $this->cbarRefcompose;
    }

    public function setCbarRefcompose($cbarRefcompose): static
    {
        $this->cbarRefcompose = $cbarRefcompose;

        return $this;
    }

    public function getPfNum(): ?string
    {
        return $this->pfNum;
    }

    public function setPfNum(string $pfNum): static
    {
        $this->pfNum = $pfNum;

        return $this;
    }

    public function getCbpfNum()
    {
        return $this->cbpfNum;
    }

    public function setCbpfNum($cbpfNum): static
    {
        $this->cbpfNum = $cbpfNum;

        return $this;
    }

    public function getDlCodetaxe1(): ?string
    {
        return $this->dlCodetaxe1;
    }

    public function setDlCodetaxe1(?string $dlCodetaxe1): static
    {
        $this->dlCodetaxe1 = $dlCodetaxe1;

        return $this;
    }

    public function getDlCodetaxe2(): ?string
    {
        return $this->dlCodetaxe2;
    }

    public function setDlCodetaxe2(?string $dlCodetaxe2): static
    {
        $this->dlCodetaxe2 = $dlCodetaxe2;

        return $this;
    }

    public function getDlCodetaxe3(): ?string
    {
        return $this->dlCodetaxe3;
    }

    public function setDlCodetaxe3(?string $dlCodetaxe3): static
    {
        $this->dlCodetaxe3 = $dlCodetaxe3;

        return $this;
    }

    public function getDlPieceofprod(): ?int
    {
        return $this->dlPieceofprod;
    }

    public function setDlPieceofprod(?int $dlPieceofprod): static
    {
        $this->dlPieceofprod = $dlPieceofprod;

        return $this;
    }

    public function getDlPiecede(): ?string
    {
        return $this->dlPiecede;
    }

    public function setDlPiecede(?string $dlPiecede): static
    {
        $this->dlPiecede = $dlPiecede;

        return $this;
    }

    public function getCbdlPiecede()
    {
        return $this->cbdlPiecede;
    }

    public function setCbdlPiecede($cbdlPiecede): static
    {
        $this->cbdlPiecede = $cbdlPiecede;

        return $this;
    }

    public function getDlDatede(): ?\DateTimeInterface
    {
        return $this->dlDatede;
    }

    public function setDlDatede(?\DateTimeInterface $dlDatede): static
    {
        $this->dlDatede = $dlDatede;

        return $this;
    }

    public function getDlQtede(): ?string
    {
        return $this->dlQtede;
    }

    public function setDlQtede(?string $dlQtede): static
    {
        $this->dlQtede = $dlQtede;

        return $this;
    }

    public function getDlOperation(): ?string
    {
        return $this->dlOperation;
    }

    public function setDlOperation(?string $dlOperation): static
    {
        $this->dlOperation = $dlOperation;

        return $this;
    }

    public function getPuFrs(): ?string
    {
        return $this->puFrs;
    }

    public function setPuFrs(?string $puFrs): static
    {
        $this->puFrs = $puFrs;

        return $this;
    }

    public function getNbrPack(): ?string
    {
        return $this->nbrPack;
    }

    public function setNbrPack(?string $nbrPack): static
    {
        $this->nbrPack = $nbrPack;

        return $this;
    }

    public function getDlNosoustotal(): ?int
    {
        return $this->dlNosoustotal;
    }

    public function setDlNosoustotal(?int $dlNosoustotal): static
    {
        $this->dlNosoustotal = $dlNosoustotal;

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

    public function getCbcaNo(): ?int
    {
        return $this->cbcaNo;
    }

    public function setCbcaNo(?int $cbcaNo): static
    {
        $this->cbcaNo = $cbcaNo;

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

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(?string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getAletreStockMin(): ?string
    {
        return $this->aletreStockMin;
    }

    public function setAletreStockMin(?string $aletreStockMin): static
    {
        $this->aletreStockMin = $aletreStockMin;

        return $this;
    }
}
