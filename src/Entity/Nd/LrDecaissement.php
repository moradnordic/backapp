<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrDecaissementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Decaissement')]
#[ORM\Entity(repositoryClass: LrDecaissementRepository::class)]
class LrDecaissement
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

    #[ORM\Column(name: "type_mod", length: 150, nullable: true)]
    private ?string $typeMod = null;

    #[ORM\Column(name: "date_saisie", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSaisie = null;

    #[ORM\Column(name: "Lettrage_Enc", length: 150, nullable: true)]
    private ?string $lettrageEnc = null;

    #[ORM\Column(name: "EC_NObanque", nullable: true)]
    private ?int $ecNobanque = null;

    #[ORM\Column(name: "Compte_N", length: 50, nullable: true)]
    private ?string $compteN = null;

    #[ORM\Column(name: "Lr_Ec_Piece", length: 50, nullable: true)]
    private ?string $lrEcPiece = null;

    #[ORM\Column(name: "Ref_Border", length: 50, nullable: true)]
    private ?string $refBorder = null;

    #[ORM\Column(name: "Jo_num", length: 50, nullable: true)]
    private ?string $joNum = null;

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

    #[ORM\Column(name: "Avance", length: 50, nullable: true)]
    private ?string $avance = null;

    #[ORM\Column(name: "EC_Avance", length: 69, nullable: true)]
    private ?string $ecAvance = null;

    #[ORM\Column(name: "EC_PieceAvance", length: 69, nullable: true)]
    private ?string $ecPieceavance = null;

    #[ORM\Column(name: "Nmbrjs", type: Types::DECIMAL, precision: 18, scale: 4, nullable: true)]
    private ?string $nmbrjs = null;

    #[ORM\Column(name: "ICE", length: 100, nullable: true)]
    private ?string $ice = null;

    #[ORM\Column(name: "EC_Piece_OD_Avance", length: 100, nullable: true)]
    private ?string $ecPieceOdAvance = null;

    #[ORM\Column(name: "Lettrag_Chq", length: 50, nullable: true)]
    private ?string $lettragChq = null;

    #[ORM\Column(name: "Lettre_Chq", type: Types::SMALLINT, nullable: true)]
    private ?int $lettreChq = null;

    #[ORM\Column(name: "Comptabilisation", type: Types::SMALLINT, nullable: true)]
    private ?int $comptabilisation = null;

    #[ORM\Column(name: "Parite", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $parite = null;

    #[ORM\Column(name: "Mnt_Dev", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $mntDev = null;

    #[ORM\Column(name: "Devis", length: 50, nullable: true)]
    private ?string $devis = null;

    #[ORM\Column(name: "devise_BNKMG", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $deviseBnkmg = null;

    #[ORM\Column(name: "Reg_Fin", type: Types::SMALLINT, nullable: true)]
    private ?int $regFin = null;

    #[ORM\Column(name: "LCRED", length: 150, nullable: true)]
    private ?string $lcred = null;

    #[ORM\Column(name: "CHQ_IMP", length: 10, nullable: true)]
    private ?string $chqImp = null;

    #[ORM\Column(name: "CGNAVN", length: 50, nullable: true)]
    private ?string $cgnavn = null;

    #[ORM\Column(name: "Ecart_Int", nullable: true)]
    private ?int $ecartInt = null;

    #[ORM\Column(name: "Ecart_Fact", nullable: true)]
    private ?int $ecartFact = null;

    #[ORM\Column(name: "CGECART", length: 50, nullable: true)]
    private ?string $cgecart = null;

    #[ORM\Column(name: "Date_PieceAvn", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datePieceavn = null;

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

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(?string $joNum): static
    {
        $this->joNum = $joNum;

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

    public function getEcPieceOdAvance(): ?string
    {
        return $this->ecPieceOdAvance;
    }

    public function setEcPieceOdAvance(?string $ecPieceOdAvance): static
    {
        $this->ecPieceOdAvance = $ecPieceOdAvance;

        return $this;
    }

    public function getLettragChq(): ?string
    {
        return $this->lettragChq;
    }

    public function setLettragChq(?string $lettragChq): static
    {
        $this->lettragChq = $lettragChq;

        return $this;
    }

    public function getLettreChq(): ?int
    {
        return $this->lettreChq;
    }

    public function setLettreChq(?int $lettreChq): static
    {
        $this->lettreChq = $lettreChq;

        return $this;
    }

    public function getComptabilisation(): ?int
    {
        return $this->comptabilisation;
    }

    public function setComptabilisation(?int $comptabilisation): static
    {
        $this->comptabilisation = $comptabilisation;

        return $this;
    }

    public function getParite(): ?string
    {
        return $this->parite;
    }

    public function setParite(?string $parite): static
    {
        $this->parite = $parite;

        return $this;
    }

    public function getMntDev(): ?string
    {
        return $this->mntDev;
    }

    public function setMntDev(?string $mntDev): static
    {
        $this->mntDev = $mntDev;

        return $this;
    }

    public function getDevis(): ?string
    {
        return $this->devis;
    }

    public function setDevis(?string $devis): static
    {
        $this->devis = $devis;

        return $this;
    }

    public function getDeviseBnkmg(): ?string
    {
        return $this->deviseBnkmg;
    }

    public function setDeviseBnkmg(?string $deviseBnkmg): static
    {
        $this->deviseBnkmg = $deviseBnkmg;

        return $this;
    }

    public function getRegFin(): ?int
    {
        return $this->regFin;
    }

    public function setRegFin(?int $regFin): static
    {
        $this->regFin = $regFin;

        return $this;
    }

    public function getLcred(): ?string
    {
        return $this->lcred;
    }

    public function setLcred(?string $lcred): static
    {
        $this->lcred = $lcred;

        return $this;
    }

    public function getChqImp(): ?string
    {
        return $this->chqImp;
    }

    public function setChqImp(?string $chqImp): static
    {
        $this->chqImp = $chqImp;

        return $this;
    }

    public function getCgnavn(): ?string
    {
        return $this->cgnavn;
    }

    public function setCgnavn(?string $cgnavn): static
    {
        $this->cgnavn = $cgnavn;

        return $this;
    }

    public function getEcartInt(): ?int
    {
        return $this->ecartInt;
    }

    public function setEcartInt(?int $ecartInt): static
    {
        $this->ecartInt = $ecartInt;

        return $this;
    }

    public function getEcartFact(): ?int
    {
        return $this->ecartFact;
    }

    public function setEcartFact(?int $ecartFact): static
    {
        $this->ecartFact = $ecartFact;

        return $this;
    }

    public function getCgecart(): ?string
    {
        return $this->cgecart;
    }

    public function setCgecart(?string $cgecart): static
    {
        $this->cgecart = $cgecart;

        return $this;
    }

    public function getDatePieceavn(): ?\DateTimeInterface
    {
        return $this->datePieceavn;
    }

    public function setDatePieceavn(?\DateTimeInterface $datePieceavn): static
    {
        $this->datePieceavn = $datePieceavn;

        return $this;
    }
}
