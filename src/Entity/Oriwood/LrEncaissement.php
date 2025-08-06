<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrEncaissementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Encaissement')]
#[ORM\Entity(repositoryClass: LrEncaissementRepository::class)]
class LrEncaissement
{
    #[ORM\Column(name: "ENT_No")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $entNo = null;

    #[ORM\Column(name: "CG_Num", nullable: true)]
    private ?int $cgNum = null;

    #[ORM\Column(name: "ECH_Intitule", length: 150, nullable: true)]
    private ?string $echIntitule = null;

    #[ORM\Column(name: "ECH_DateRecep", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echDaterecep = null;

    #[ORM\Column(name: "ECH_DATEREMISE", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echDateremise = null;

    #[ORM\Column(name: "ECH_DateEch", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echDateech = null;

    #[ORM\Column(name: "ECH_Piece", length: 150, nullable: true)]
    private ?string $echPiece = null;

    #[ORM\Column(name: "ECH_RefPiece", length: 250, nullable: true)]
    private ?string $echRefpiece = null;

    #[ORM\Column(name: "ECH_Libelle", length: 150, nullable: true)]
    private ?string $echLibelle = null;

    #[ORM\Column(name: "CT_Num", length: 69, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "ECH_ModePaie", nullable: true)]
    private ?int $echModepaie = null;

    #[ORM\Column(name: "ECH_Etape", nullable: true)]
    private ?int $echEtape = null;

    #[ORM\Column(name: "ECH_DernEtapeCpta", nullable: true)]
    private ?int $echDernetapecpta = null;

    #[ORM\Column(name: "ECH_Montant", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $echMontant = null;

    #[ORM\Column(name: "ECH_Sens", nullable: true)]
    private ?int $echSens = null;

    #[ORM\Column(name: "ECH_ModeRegle", length: 150, nullable: true)]
    private ?string $echModeregle = null;

    #[ORM\Column(name: "Num_Cheque", length: 70, nullable: true)]
    private ?string $numCheque = null;

    #[ORM\Column(name: "ECH_DernCompte", nullable: true)]
    private ?int $echDerncompte = null;

    #[ORM\Column(name: "EB_No", nullable: true)]
    private ?int $ebNo = null;

    #[ORM\Column(name: "ECH_IntBqeTiers", length: 50, nullable: true)]
    private ?string $echIntbqetiers = null;

    #[ORM\Column(name: "ECH_Lieu", length: 50, nullable: true)]
    private ?string $echLieu = null;

    #[ORM\Column(name: "EC_NO", length: 150, nullable: true)]
    private ?string $ecNo = null;

    #[ORM\Column(name: "date_notification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateNotification = null;

    #[ORM\Column(name: "date_impaye", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateImpaye = null;

    #[ORM\Column(name: "motif_rejet", length: 150, nullable: true)]
    private ?string $motifRejet = null;

    #[ORM\Column(name: "date_representation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateRepresentation = null;

    #[ORM\Column(name: "infos_remplacement", length: 200, nullable: true)]
    private ?string $infosRemplacement = null;

    #[ORM\Column(name: "mnt_tot", length: 200, nullable: true)]
    private ?string $mntTot = null;

    #[ORM\Column(name: "type_mod", length: 150, nullable: true)]
    private ?string $typeMod = null;

    #[ORM\Column(name: "date_saisie", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSaisie = null;

    #[ORM\Column(name: "Lettrage_Enc", length: 150, nullable: true)]
    private ?string $lettrageEnc = null;

    #[ORM\Column(name: "EC_NObanque", nullable: true)]
    private ?int $ecNobanque = null;

    #[ORM\Column(name: "Avance", length: 10, nullable: true)]
    private ?string $avance = null;

    #[ORM\Column(name: "EC_Avance", length: 100, nullable: true)]
    private ?string $ecAvance = null;

    #[ORM\Column(name: "EC_PieceAvance", length: 100, nullable: true)]
    private ?string $ecPieceavance = null;

    #[ORM\Column(name: "Compte_N", length: 50, nullable: true)]
    private ?string $compteN = null;

    #[ORM\Column(name: "Lr_Ec_Piece", length: 50, nullable: true)]
    private ?string $lrEcPiece = null;

    #[ORM\Column(name: "Ref_Border", length: 50, nullable: true)]
    private ?string $refBorder = null;

    #[ORM\Column(name: "ENT_No_Avance", length: 50, nullable: true)]
    private ?string $entNoAvance = null;

    #[ORM\Column(name: "Jo_num", length: 50, nullable: true)]
    private ?string $joNum = null;

    #[ORM\Column(name: "EC_Piece_OD_Avance", length: 50, nullable: true)]
    private ?string $ecPieceOdAvance = null;

    #[ORM\Column(name: "Impor", length: 50, nullable: true)]
    private ?string $impor = null;

    #[ORM\Column(name: "AnneExer", length: 50, nullable: true)]
    private ?string $anneexer = null;

    #[ORM\Column(name: "cocher", nullable: true)]
    private ?int $cocher = null;

    #[ORM\Column(name: "mntrest", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $mntrest = null;

    #[ORM\Column(name: "avodresttot", length: 50, nullable: true)]
    private ?string $avodresttot = null;

    #[ORM\Column(name: "cocheravo", nullable: true)]
    private ?int $cocheravo = null;

    #[ORM\Column(name: "EC_NO_Avoir", length: 50, nullable: true)]
    private ?string $ecNoAvoir = null;

    #[ORM\Column(name: "detcrjour", length: 50, nullable: true)]
    private ?string $detcrjour = null;

    #[ORM\Column(name: "detcrpiec", length: 50, nullable: true)]
    private ?string $detcrpiec = null;

    #[ORM\Column(name: "Ecart", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $ecart = null;

    #[ORM\Column(name: "En_Ec_Ecart", length: 50, nullable: true)]
    private ?string $enEcEcart = null;

    #[ORM\Column(name: "user_saisie1", length: 50, nullable: true)]
    private ?string $userSaisie1 = null;

    #[ORM\Column(name: "user_saisie2", length: 50, nullable: true)]
    private ?string $userSaisie2 = null;

    #[ORM\Column(name: "Commentaire", length: 500, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(name: "Compteur", nullable: true)]
    private ?int $compteur = null;

    #[ORM\Column(name: "clôture", nullable: true)]
    private ?int $clôture = null;

    #[ORM\Column(name: "Remarque", length: 50, nullable: true)]
    private ?string $remarque = null;

    #[ORM\Column(name: "Affichage", type: Types::SMALLINT, nullable: true)]
    private ?int $affichage = null;

    #[ORM\Column(name: "Remis", type: Types::SMALLINT, nullable: true)]
    private ?int $remis = null;

    #[ORM\Column(name: "ECH_DATEVERSER", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echDateverser = null;

    #[ORM\Column(name: "ECH_Ville", length: 50, nullable: true)]
    private ?string $echVille = null;

    #[ORM\Column(name: "ECH_Etat_Av", length: 50, nullable: true)]
    private ?string $echEtatAv = null;

    #[ORM\Column(name: "Ech_MntEsP", type: Types::DECIMAL, precision: 18, scale: 4, nullable: true)]
    private ?string $echMntesp = null;

    #[ORM\Column(name: "Nmbrjs", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $nmbrjs = null;

    #[ORM\Column(name: "ICE", length: 50, nullable: true)]
    private ?string $ice = null;

    #[ORM\Column(name: "TransRev", length: 10, nullable: true)]
    private ?string $transrev = null;

    #[ORM\Column(name: "TransComp", length: 10, nullable: true)]
    private ?string $transcomp = null;

    #[ORM\Column(name: "BordExtrn", length: 50, nullable: true)]
    private ?string $bordextrn = null;

    #[ORM\Column(name: "N_Doss", length: 50, nullable: true)]
    private ?string $nDoss = null;

    #[ORM\Column(name: "TVA", nullable: true)]
    private ?int $tva = null;

    #[ORM\Column(name: "COMPL", nullable: true)]
    private ?int $compl = null;

    #[ORM\Column(name: "RELIQ", nullable: true)]
    private ?int $reliq = null;

    #[ORM\Column(name: "Remarq_Aff", length: 50, nullable: true)]
    private ?string $remarqAff = null;

    #[ORM\Column(name: "Banque_Remi", length: 50, nullable: true)]
    private ?string $banqueRemi = null;

    #[ORM\Column(name: "AvanMod", length: 10, nullable: true)]
    private ?string $avanmod = null;

    #[ORM\Column(name: "AutAvanMod", length: 10, nullable: true)]
    private ?string $autavanmod = null;

    #[ORM\Column(name: "datesaisEcar", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datesaisecar = null;

    #[ORM\Column(name: "Type_Effet", length: 50, nullable: true)]
    private ?string $typeEffet = null;

    #[ORM\Column(name: "Lettrg20", length: 5, nullable: true)]
    private ?string $lettrg20 = null;

    #[ORM\Column(name: "Lettrg14", length: 5, nullable: true)]
    private ?string $lettrg14 = null;

    #[ORM\Column(name: "Lettrg10", length: 5, nullable: true)]
    private ?string $lettrg10 = null;

    #[ORM\Column(name: "Lettrg7", length: 5, nullable: true)]
    private ?string $lettrg7 = null;

    #[ORM\Column(name: "TVACHOIX", nullable: true)]
    private ?int $tvachoix = null;

    #[ORM\Column(name: "TVAVALIDE", nullable: true)]
    private ?int $tvavalide = null;

    #[ORM\Column(name: "TVAAVN20", nullable: true)]
    private ?int $tvaavn20 = null;

    #[ORM\Column(name: "TVAAVN14", nullable: true)]
    private ?int $tvaavn14 = null;

    #[ORM\Column(name: "TVAAVN10", nullable: true)]
    private ?int $tvaavn10 = null;

    #[ORM\Column(name: "TVAAVN7", nullable: true)]
    private ?int $tvaavn7 = null;

    #[ORM\Column(name: "PIECETRES", length: 50, nullable: true)]
    private ?string $piecetres = null;

    #[ORM\Column(name: "LR_PIECETRES", length: 50, nullable: true)]
    private ?string $lrPiecetres = null;

    #[ORM\Column(name: "LR_TYPEPIECETRES", length: 50, nullable: true)]
    private ?string $lrTypepiecetres = null;

    #[ORM\Column(name: "TVACOMPT", nullable: true)]
    private ?int $tvacompt = null;

    #[ORM\Column(name: "ECcompta", nullable: true)]
    private ?int $eccompta = null;

    #[ORM\Column(name: "ENT_COMP", nullable: true)]
    private ?int $entComp = null;

    #[ORM\Column(name: "INTCOMP", nullable: true)]
    private ?int $intcomp = null;

    #[ORM\Column(name: "TVAAFFECT", nullable: true)]
    private ?int $tvaaffect = null;

    #[ORM\Column(name: "Date_Retour", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateRetour = null;

    #[ORM\Column(name: "LR_MntEcartECIMP", length: 150, nullable: true)]
    private ?string $lrMntecartecimp = null;

    #[ORM\Column(name: "LR_MntEcartImp", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $lrMntecartimp = null;

    #[ORM\Column(name: "REGTIERS", nullable: true)]
    private ?int $regtiers = null;

    #[ORM\Column(name: "DateReport", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereport = null;

    #[ORM\Column(name: "DateCompt", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datecompt = null;

    #[ORM\Column(name: "OperaCompta", nullable: true)]
    private ?int $operacompta = null;

    #[ORM\Column(name: "DTReport", length: 50, nullable: true)]
    private ?string $dtreport = null;

    #[ORM\Column(name: "DTVal", length: 50, nullable: true)]
    private ?string $dtval = null;

    #[ORM\Column(name: "DTAnnul", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dtannul = null;

    #[ORM\Column(name: "Retour", length: 50, nullable: true)]
    private ?string $retour = null;

    #[ORM\Column(name: "TransCompImp", nullable: true)]
    private ?int $transcompimp = null;

    public function getEntNo(): ?int
    {
        return $this->entNo;
    }

    public function getCgNum(): ?int
    {
        return $this->cgNum;
    }

    public function setCgNum(?int $cgNum): static
    {
        $this->cgNum = $cgNum;

        return $this;
    }

    public function getEchIntitule(): ?string
    {
        return $this->echIntitule;
    }

    public function setEchIntitule(?string $echIntitule): static
    {
        $this->echIntitule = $echIntitule;

        return $this;
    }

    public function getEchDaterecep(): ?\DateTimeInterface
    {
        return $this->echDaterecep;
    }

    public function setEchDaterecep(?\DateTimeInterface $echDaterecep): static
    {
        $this->echDaterecep = $echDaterecep;

        return $this;
    }

    public function getEchDateremise(): ?\DateTimeInterface
    {
        return $this->echDateremise;
    }

    public function setEchDateremise(?\DateTimeInterface $echDateremise): static
    {
        $this->echDateremise = $echDateremise;

        return $this;
    }

    public function getEchDateech(): ?\DateTimeInterface
    {
        return $this->echDateech;
    }

    public function setEchDateech(?\DateTimeInterface $echDateech): static
    {
        $this->echDateech = $echDateech;

        return $this;
    }

    public function getEchPiece(): ?string
    {
        return $this->echPiece;
    }

    public function setEchPiece(?string $echPiece): static
    {
        $this->echPiece = $echPiece;

        return $this;
    }

    public function getEchRefpiece(): ?string
    {
        return $this->echRefpiece;
    }

    public function setEchRefpiece(?string $echRefpiece): static
    {
        $this->echRefpiece = $echRefpiece;

        return $this;
    }

    public function getEchLibelle(): ?string
    {
        return $this->echLibelle;
    }

    public function setEchLibelle(?string $echLibelle): static
    {
        $this->echLibelle = $echLibelle;

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

    public function getEchModepaie(): ?int
    {
        return $this->echModepaie;
    }

    public function setEchModepaie(?int $echModepaie): static
    {
        $this->echModepaie = $echModepaie;

        return $this;
    }

    public function getEchEtape(): ?int
    {
        return $this->echEtape;
    }

    public function setEchEtape(?int $echEtape): static
    {
        $this->echEtape = $echEtape;

        return $this;
    }

    public function getEchDernetapecpta(): ?int
    {
        return $this->echDernetapecpta;
    }

    public function setEchDernetapecpta(?int $echDernetapecpta): static
    {
        $this->echDernetapecpta = $echDernetapecpta;

        return $this;
    }

    public function getEchMontant(): ?string
    {
        return $this->echMontant;
    }

    public function setEchMontant(?string $echMontant): static
    {
        $this->echMontant = $echMontant;

        return $this;
    }

    public function getEchSens(): ?int
    {
        return $this->echSens;
    }

    public function setEchSens(?int $echSens): static
    {
        $this->echSens = $echSens;

        return $this;
    }

    public function getEchModeregle(): ?string
    {
        return $this->echModeregle;
    }

    public function setEchModeregle(?string $echModeregle): static
    {
        $this->echModeregle = $echModeregle;

        return $this;
    }

    public function getNumCheque(): ?string
    {
        return $this->numCheque;
    }

    public function setNumCheque(?string $numCheque): static
    {
        $this->numCheque = $numCheque;

        return $this;
    }

    public function getEchDerncompte(): ?int
    {
        return $this->echDerncompte;
    }

    public function setEchDerncompte(?int $echDerncompte): static
    {
        $this->echDerncompte = $echDerncompte;

        return $this;
    }

    public function getEbNo(): ?int
    {
        return $this->ebNo;
    }

    public function setEbNo(?int $ebNo): static
    {
        $this->ebNo = $ebNo;

        return $this;
    }

    public function getEchIntbqetiers(): ?string
    {
        return $this->echIntbqetiers;
    }

    public function setEchIntbqetiers(?string $echIntbqetiers): static
    {
        $this->echIntbqetiers = $echIntbqetiers;

        return $this;
    }

    public function getEchLieu(): ?string
    {
        return $this->echLieu;
    }

    public function setEchLieu(?string $echLieu): static
    {
        $this->echLieu = $echLieu;

        return $this;
    }

    public function getEcNo(): ?string
    {
        return $this->ecNo;
    }

    public function setEcNo(?string $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getDateNotification(): ?\DateTimeInterface
    {
        return $this->dateNotification;
    }

    public function setDateNotification(?\DateTimeInterface $dateNotification): static
    {
        $this->dateNotification = $dateNotification;

        return $this;
    }

    public function getDateImpaye(): ?\DateTimeInterface
    {
        return $this->dateImpaye;
    }

    public function setDateImpaye(?\DateTimeInterface $dateImpaye): static
    {
        $this->dateImpaye = $dateImpaye;

        return $this;
    }

    public function getMotifRejet(): ?string
    {
        return $this->motifRejet;
    }

    public function setMotifRejet(?string $motifRejet): static
    {
        $this->motifRejet = $motifRejet;

        return $this;
    }

    public function getDateRepresentation(): ?\DateTimeInterface
    {
        return $this->dateRepresentation;
    }

    public function setDateRepresentation(?\DateTimeInterface $dateRepresentation): static
    {
        $this->dateRepresentation = $dateRepresentation;

        return $this;
    }

    public function getInfosRemplacement(): ?string
    {
        return $this->infosRemplacement;
    }

    public function setInfosRemplacement(?string $infosRemplacement): static
    {
        $this->infosRemplacement = $infosRemplacement;

        return $this;
    }

    public function getMntTot(): ?string
    {
        return $this->mntTot;
    }

    public function setMntTot(?string $mntTot): static
    {
        $this->mntTot = $mntTot;

        return $this;
    }

    public function getTypeMod(): ?string
    {
        return $this->typeMod;
    }

    public function setTypeMod(?string $typeMod): static
    {
        $this->typeMod = $typeMod;

        return $this;
    }

    public function getDateSaisie(): ?\DateTimeInterface
    {
        return $this->dateSaisie;
    }

    public function setDateSaisie(?\DateTimeInterface $dateSaisie): static
    {
        $this->dateSaisie = $dateSaisie;

        return $this;
    }

    public function getLettrageEnc(): ?string
    {
        return $this->lettrageEnc;
    }

    public function setLettrageEnc(?string $lettrageEnc): static
    {
        $this->lettrageEnc = $lettrageEnc;

        return $this;
    }

    public function getEcNobanque(): ?int
    {
        return $this->ecNobanque;
    }

    public function setEcNobanque(?int $ecNobanque): static
    {
        $this->ecNobanque = $ecNobanque;

        return $this;
    }

    public function getAvance(): ?string
    {
        return $this->avance;
    }

    public function setAvance(?string $avance): static
    {
        $this->avance = $avance;

        return $this;
    }

    public function getEcAvance(): ?string
    {
        return $this->ecAvance;
    }

    public function setEcAvance(?string $ecAvance): static
    {
        $this->ecAvance = $ecAvance;

        return $this;
    }

    public function getEcPieceavance(): ?string
    {
        return $this->ecPieceavance;
    }

    public function setEcPieceavance(?string $ecPieceavance): static
    {
        $this->ecPieceavance = $ecPieceavance;

        return $this;
    }

    public function getCompteN(): ?string
    {
        return $this->compteN;
    }

    public function setCompteN(?string $compteN): static
    {
        $this->compteN = $compteN;

        return $this;
    }

    public function getLrEcPiece(): ?string
    {
        return $this->lrEcPiece;
    }

    public function setLrEcPiece(?string $lrEcPiece): static
    {
        $this->lrEcPiece = $lrEcPiece;

        return $this;
    }

    public function getRefBorder(): ?string
    {
        return $this->refBorder;
    }

    public function setRefBorder(?string $refBorder): static
    {
        $this->refBorder = $refBorder;

        return $this;
    }

    public function getEntNoAvance(): ?string
    {
        return $this->entNoAvance;
    }

    public function setEntNoAvance(?string $entNoAvance): static
    {
        $this->entNoAvance = $entNoAvance;

        return $this;
    }

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(?string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getEcPieceOdAvance(): ?string
    {
        return $this->ecPieceOdAvance;
    }

    public function setEcPieceOdAvance(?string $ecPieceOdAvance): static
    {
        $this->ecPieceOdAvance = $ecPieceOdAvance;

        return $this;
    }

    public function getImpor(): ?string
    {
        return $this->impor;
    }

    public function setImpor(?string $impor): static
    {
        $this->impor = $impor;

        return $this;
    }

    public function getAnneexer(): ?string
    {
        return $this->anneexer;
    }

    public function setAnneexer(?string $anneexer): static
    {
        $this->anneexer = $anneexer;

        return $this;
    }

    public function getCocher(): ?int
    {
        return $this->cocher;
    }

    public function setCocher(?int $cocher): static
    {
        $this->cocher = $cocher;

        return $this;
    }

    public function getMntrest(): ?string
    {
        return $this->mntrest;
    }

    public function setMntrest(?string $mntrest): static
    {
        $this->mntrest = $mntrest;

        return $this;
    }

    public function getAvodresttot(): ?string
    {
        return $this->avodresttot;
    }

    public function setAvodresttot(?string $avodresttot): static
    {
        $this->avodresttot = $avodresttot;

        return $this;
    }

    public function getCocheravo(): ?int
    {
        return $this->cocheravo;
    }

    public function setCocheravo(?int $cocheravo): static
    {
        $this->cocheravo = $cocheravo;

        return $this;
    }

    public function getEcNoAvoir(): ?string
    {
        return $this->ecNoAvoir;
    }

    public function setEcNoAvoir(?string $ecNoAvoir): static
    {
        $this->ecNoAvoir = $ecNoAvoir;

        return $this;
    }

    public function getDetcrjour(): ?string
    {
        return $this->detcrjour;
    }

    public function setDetcrjour(?string $detcrjour): static
    {
        $this->detcrjour = $detcrjour;

        return $this;
    }

    public function getDetcrpiec(): ?string
    {
        return $this->detcrpiec;
    }

    public function setDetcrpiec(?string $detcrpiec): static
    {
        $this->detcrpiec = $detcrpiec;

        return $this;
    }

    public function getEcart(): ?string
    {
        return $this->ecart;
    }

    public function setEcart(?string $ecart): static
    {
        $this->ecart = $ecart;

        return $this;
    }

    public function getEnEcEcart(): ?string
    {
        return $this->enEcEcart;
    }

    public function setEnEcEcart(?string $enEcEcart): static
    {
        $this->enEcEcart = $enEcEcart;

        return $this;
    }

    public function getUserSaisie1(): ?string
    {
        return $this->userSaisie1;
    }

    public function setUserSaisie1(?string $userSaisie1): static
    {
        $this->userSaisie1 = $userSaisie1;

        return $this;
    }

    public function getUserSaisie2(): ?string
    {
        return $this->userSaisie2;
    }

    public function setUserSaisie2(?string $userSaisie2): static
    {
        $this->userSaisie2 = $userSaisie2;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCompteur(): ?int
    {
        return $this->compteur;
    }

    public function setCompteur(?int $compteur): static
    {
        $this->compteur = $compteur;

        return $this;
    }

    public function getClôture(): ?int
    {
        return $this->clôture;
    }

    public function setClôture(?int $clôture): static
    {
        $this->clôture = $clôture;

        return $this;
    }

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): static
    {
        $this->remarque = $remarque;

        return $this;
    }

    public function getAffichage(): ?int
    {
        return $this->affichage;
    }

    public function setAffichage(?int $affichage): static
    {
        $this->affichage = $affichage;

        return $this;
    }

    public function getRemis(): ?int
    {
        return $this->remis;
    }

    public function setRemis(?int $remis): static
    {
        $this->remis = $remis;

        return $this;
    }

    public function getEchDateverser(): ?\DateTimeInterface
    {
        return $this->echDateverser;
    }

    public function setEchDateverser(?\DateTimeInterface $echDateverser): static
    {
        $this->echDateverser = $echDateverser;

        return $this;
    }

    public function getEchVille(): ?string
    {
        return $this->echVille;
    }

    public function setEchVille(?string $echVille): static
    {
        $this->echVille = $echVille;

        return $this;
    }

    public function getEchEtatAv(): ?string
    {
        return $this->echEtatAv;
    }

    public function setEchEtatAv(?string $echEtatAv): static
    {
        $this->echEtatAv = $echEtatAv;

        return $this;
    }

    public function getEchMntesp(): ?string
    {
        return $this->echMntesp;
    }

    public function setEchMntesp(?string $echMntesp): static
    {
        $this->echMntesp = $echMntesp;

        return $this;
    }

    public function getNmbrjs(): ?string
    {
        return $this->nmbrjs;
    }

    public function setNmbrjs(?string $nmbrjs): static
    {
        $this->nmbrjs = $nmbrjs;

        return $this;
    }

    public function getIce(): ?string
    {
        return $this->ice;
    }

    public function setIce(?string $ice): static
    {
        $this->ice = $ice;

        return $this;
    }

    public function getTransrev(): ?string
    {
        return $this->transrev;
    }

    public function setTransrev(?string $transrev): static
    {
        $this->transrev = $transrev;

        return $this;
    }

    public function getTranscomp(): ?string
    {
        return $this->transcomp;
    }

    public function setTranscomp(?string $transcomp): static
    {
        $this->transcomp = $transcomp;

        return $this;
    }

    public function getBordextrn(): ?string
    {
        return $this->bordextrn;
    }

    public function setBordextrn(?string $bordextrn): static
    {
        $this->bordextrn = $bordextrn;

        return $this;
    }

    public function getNDoss(): ?string
    {
        return $this->nDoss;
    }

    public function setNDoss(?string $nDoss): static
    {
        $this->nDoss = $nDoss;

        return $this;
    }

    public function getTva(): ?int
    {
        return $this->tva;
    }

    public function setTva(?int $tva): static
    {
        $this->tva = $tva;

        return $this;
    }

    public function getCompl(): ?int
    {
        return $this->compl;
    }

    public function setCompl(?int $compl): static
    {
        $this->compl = $compl;

        return $this;
    }

    public function getReliq(): ?int
    {
        return $this->reliq;
    }

    public function setReliq(?int $reliq): static
    {
        $this->reliq = $reliq;

        return $this;
    }

    public function getRemarqAff(): ?string
    {
        return $this->remarqAff;
    }

    public function setRemarqAff(?string $remarqAff): static
    {
        $this->remarqAff = $remarqAff;

        return $this;
    }

    public function getBanqueRemi(): ?string
    {
        return $this->banqueRemi;
    }

    public function setBanqueRemi(?string $banqueRemi): static
    {
        $this->banqueRemi = $banqueRemi;

        return $this;
    }

    public function getAvanmod(): ?string
    {
        return $this->avanmod;
    }

    public function setAvanmod(?string $avanmod): static
    {
        $this->avanmod = $avanmod;

        return $this;
    }

    public function getAutavanmod(): ?string
    {
        return $this->autavanmod;
    }

    public function setAutavanmod(?string $autavanmod): static
    {
        $this->autavanmod = $autavanmod;

        return $this;
    }

    public function getDatesaisecar(): ?\DateTimeInterface
    {
        return $this->datesaisecar;
    }

    public function setDatesaisecar(?\DateTimeInterface $datesaisecar): static
    {
        $this->datesaisecar = $datesaisecar;

        return $this;
    }

    public function getTypeEffet(): ?string
    {
        return $this->typeEffet;
    }

    public function setTypeEffet(?string $typeEffet): static
    {
        $this->typeEffet = $typeEffet;

        return $this;
    }

    public function getLettrg20(): ?string
    {
        return $this->lettrg20;
    }

    public function setLettrg20(?string $lettrg20): static
    {
        $this->lettrg20 = $lettrg20;

        return $this;
    }

    public function getLettrg14(): ?string
    {
        return $this->lettrg14;
    }

    public function setLettrg14(?string $lettrg14): static
    {
        $this->lettrg14 = $lettrg14;

        return $this;
    }

    public function getLettrg10(): ?string
    {
        return $this->lettrg10;
    }

    public function setLettrg10(?string $lettrg10): static
    {
        $this->lettrg10 = $lettrg10;

        return $this;
    }

    public function getLettrg7(): ?string
    {
        return $this->lettrg7;
    }

    public function setLettrg7(?string $lettrg7): static
    {
        $this->lettrg7 = $lettrg7;

        return $this;
    }

    public function getTvachoix(): ?int
    {
        return $this->tvachoix;
    }

    public function setTvachoix(?int $tvachoix): static
    {
        $this->tvachoix = $tvachoix;

        return $this;
    }

    public function getTvavalide(): ?int
    {
        return $this->tvavalide;
    }

    public function setTvavalide(?int $tvavalide): static
    {
        $this->tvavalide = $tvavalide;

        return $this;
    }

    public function getTvaavn20(): ?int
    {
        return $this->tvaavn20;
    }

    public function setTvaavn20(?int $tvaavn20): static
    {
        $this->tvaavn20 = $tvaavn20;

        return $this;
    }

    public function getTvaavn14(): ?int
    {
        return $this->tvaavn14;
    }

    public function setTvaavn14(?int $tvaavn14): static
    {
        $this->tvaavn14 = $tvaavn14;

        return $this;
    }

    public function getTvaavn10(): ?int
    {
        return $this->tvaavn10;
    }

    public function setTvaavn10(?int $tvaavn10): static
    {
        $this->tvaavn10 = $tvaavn10;

        return $this;
    }

    public function getTvaavn7(): ?int
    {
        return $this->tvaavn7;
    }

    public function setTvaavn7(?int $tvaavn7): static
    {
        $this->tvaavn7 = $tvaavn7;

        return $this;
    }

    public function getPiecetres(): ?string
    {
        return $this->piecetres;
    }

    public function setPiecetres(?string $piecetres): static
    {
        $this->piecetres = $piecetres;

        return $this;
    }

    public function getLrPiecetres(): ?string
    {
        return $this->lrPiecetres;
    }

    public function setLrPiecetres(?string $lrPiecetres): static
    {
        $this->lrPiecetres = $lrPiecetres;

        return $this;
    }

    public function getLrTypepiecetres(): ?string
    {
        return $this->lrTypepiecetres;
    }

    public function setLrTypepiecetres(?string $lrTypepiecetres): static
    {
        $this->lrTypepiecetres = $lrTypepiecetres;

        return $this;
    }

    public function getTvacompt(): ?int
    {
        return $this->tvacompt;
    }

    public function setTvacompt(?int $tvacompt): static
    {
        $this->tvacompt = $tvacompt;

        return $this;
    }

    public function getEccompta(): ?int
    {
        return $this->eccompta;
    }

    public function setEccompta(?int $eccompta): static
    {
        $this->eccompta = $eccompta;

        return $this;
    }

    public function getEntComp(): ?int
    {
        return $this->entComp;
    }

    public function setEntComp(?int $entComp): static
    {
        $this->entComp = $entComp;

        return $this;
    }

    public function getIntcomp(): ?int
    {
        return $this->intcomp;
    }

    public function setIntcomp(?int $intcomp): static
    {
        $this->intcomp = $intcomp;

        return $this;
    }

    public function getTvaaffect(): ?int
    {
        return $this->tvaaffect;
    }

    public function setTvaaffect(?int $tvaaffect): static
    {
        $this->tvaaffect = $tvaaffect;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(?\DateTimeInterface $dateRetour): static
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    public function getLrMntecartecimp(): ?string
    {
        return $this->lrMntecartecimp;
    }

    public function setLrMntecartecimp(?string $lrMntecartecimp): static
    {
        $this->lrMntecartecimp = $lrMntecartecimp;

        return $this;
    }

    public function getLrMntecartimp(): ?string
    {
        return $this->lrMntecartimp;
    }

    public function setLrMntecartimp(?string $lrMntecartimp): static
    {
        $this->lrMntecartimp = $lrMntecartimp;

        return $this;
    }

    public function getRegtiers(): ?int
    {
        return $this->regtiers;
    }

    public function setRegtiers(?int $regtiers): static
    {
        $this->regtiers = $regtiers;

        return $this;
    }

    public function getDatereport(): ?\DateTimeInterface
    {
        return $this->datereport;
    }

    public function setDatereport(?\DateTimeInterface $datereport): static
    {
        $this->datereport = $datereport;

        return $this;
    }

    public function getDatecompt(): ?\DateTimeInterface
    {
        return $this->datecompt;
    }

    public function setDatecompt(?\DateTimeInterface $datecompt): static
    {
        $this->datecompt = $datecompt;

        return $this;
    }

    public function getOperacompta(): ?int
    {
        return $this->operacompta;
    }

    public function setOperacompta(?int $operacompta): static
    {
        $this->operacompta = $operacompta;

        return $this;
    }

    public function getDtreport(): ?string
    {
        return $this->dtreport;
    }

    public function setDtreport(?string $dtreport): static
    {
        $this->dtreport = $dtreport;

        return $this;
    }

    public function getDtval(): ?string
    {
        return $this->dtval;
    }

    public function setDtval(?string $dtval): static
    {
        $this->dtval = $dtval;

        return $this;
    }

    public function getDtannul(): ?\DateTimeInterface
    {
        return $this->dtannul;
    }

    public function setDtannul(?\DateTimeInterface $dtannul): static
    {
        $this->dtannul = $dtannul;

        return $this;
    }

    public function getRetour(): ?string
    {
        return $this->retour;
    }

    public function setRetour(?string $retour): static
    {
        $this->retour = $retour;

        return $this;
    }

    public function getTranscompimp(): ?int
    {
        return $this->transcompimp;
    }

    public function setTranscompimp(?int $transcompimp): static
    {
        $this->transcompimp = $transcompimp;

        return $this;
    }
}
