<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FComptetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTET')]
#[ORM\UniqueConstraint(name: 'ICT_NUM', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_TYPE', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_CLASS', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_TYPECLASS', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_CONO', columns: ['CO_No'])]
#[ORM\Index(name: 'ICT_NUMPAYEUR', columns: ['cbCT_NumPayeur'])]
#[ORM\Index(name: 'ICT_CGNUMPRINC', columns: ['cbCG_NumPrinc'])]
#[ORM\Index(name: 'ICT_RACC', columns: ['cbCT_Raccourci'])]
#[ORM\Index(name: 'ICT_DENO', columns: ['DE_No'])]
#[ORM\Index(name: 'ICT_CANUM', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_CODEPOSTAL', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_TYPECODEP', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_SOMNUM', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_SOMTYPE', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_SOMCLASS', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_SOMTYPECLASS', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_NUMCENTRALE', columns: ['cbCT_NumCentrale'])]
#[ORM\Index(name: 'ICT_CANUMTYPE', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_PINOECHANGE', columns: ['PI_NoEchange'])]
#[ORM\Index(name: 'ICT_SOMCODEP', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'ICT_SOMTYPECODEP', columns: ['cbCT_Num'])]
#[ORM\UniqueConstraint(name: 'UKA_F_COMPTET_CT_Num', columns: ['CT_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTET_CG_Num', columns: ['CG_NumPrinc'])]
#[ORM\Index(name: 'FKIA_F_COMPTET_CA_Num', columns: ['CA_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTET_CA_NumIFRS', columns: ['CA_NumIFRS'])]
#[ORM\Index(name: 'FKIA_F_COMPTET_MR_No', columns: ['cbMR_No'])]
#[ORM\Index(name: 'FKIA_F_COMPTET_EB_No', columns: ['cbEB_No'])]
#[ORM\Index(name: 'FKIA_F_COMPTET_CO_No', columns: ['cbCO_No'])]
#[ORM\Index(name: 'FKIA_F_COMPTET_PI_NoEchange', columns: ['cbPI_NoEchange'])]
#[ORM\Entity(repositoryClass: FComptetRepository::class)]
class FComptet
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "CT_Intitule", length: 35, nullable: true)]
    private ?string $ctIntitule = null;

    #[ORM\Column(name: "CT_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $ctType = null;

    #[ORM\Column(name: "CG_NumPrinc", length: 13)]
    private ?string $cgNumprinc = null;

    #[ORM\Column(name: "cbCG_NumPrinc", type: Types::BINARY, nullable: true)]
    private $cbcgNumprinc = null;

    #[ORM\Column(name: "CT_Qualite", length: 17, nullable: true)]
    private ?string $ctQualite = null;

    #[ORM\Column(name: "CT_Classement", length: 17, nullable: true)]
    private ?string $ctClassement = null;

    #[ORM\Column(name: "cbCT_Classement", type: Types::BINARY, nullable: true)]
    private $cbctClassement = null;

    #[ORM\Column(name: "CT_Contact", length: 35, nullable: true)]
    private ?string $ctContact = null;

    #[ORM\Column(name: "CT_Adresse", length: 35, nullable: true)]
    private ?string $ctAdresse = null;

    #[ORM\Column(name: "CT_Complement", length: 35, nullable: true)]
    private ?string $ctComplement = null;

    #[ORM\Column(name: "CT_CodePostal", length: 9, nullable: true)]
    private ?string $ctCodepostal = null;

    #[ORM\Column(name: "cbCT_CodePostal", type: Types::BINARY, nullable: true)]
    private $cbctCodepostal = null;

    #[ORM\Column(name: "CT_Ville", length: 35, nullable: true)]
    private ?string $ctVille = null;

    #[ORM\Column(name: "CT_CodeRegion", length: 25, nullable: true)]
    private ?string $ctCoderegion = null;

    #[ORM\Column(name: "CT_Pays", length: 35, nullable: true)]
    private ?string $ctPays = null;

    #[ORM\Column(name: "CT_Raccourci", length: 7, nullable: true)]
    private ?string $ctRaccourci = null;

    #[ORM\Column(name: "cbCT_Raccourci", type: Types::BINARY, nullable: true)]
    private $cbctRaccourci = null;

    #[ORM\Column(name: "BT_Num", type: Types::SMALLINT, nullable: true)]
    private ?int $btNum = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "CT_Ape", length: 7, nullable: true)]
    private ?string $ctApe = null;

    #[ORM\Column(name: "CT_Identifiant", length: 25, nullable: true)]
    private ?string $ctIdentifiant = null;

    #[ORM\Column(name: "CT_Siret", length: 15, nullable: true)]
    private ?string $ctSiret = null;

    #[ORM\Column(name: "CT_Statistique01", length: 21, nullable: true)]
    private ?string $ctStatistique01 = null;

    #[ORM\Column(name: "CT_Statistique02", length: 21, nullable: true)]
    private ?string $ctStatistique02 = null;

    #[ORM\Column(name: "CT_Statistique03", length: 21, nullable: true)]
    private ?string $ctStatistique03 = null;

    #[ORM\Column(name: "CT_Statistique04", length: 21, nullable: true)]
    private ?string $ctStatistique04 = null;

    #[ORM\Column(name: "CT_Statistique05", length: 21, nullable: true)]
    private ?string $ctStatistique05 = null;

    #[ORM\Column(name: "CT_Statistique06", length: 21, nullable: true)]
    private ?string $ctStatistique06 = null;

    #[ORM\Column(name: "CT_Statistique07", length: 21, nullable: true)]
    private ?string $ctStatistique07 = null;

    #[ORM\Column(name: "CT_Statistique08", length: 21, nullable: true)]
    private ?string $ctStatistique08 = null;

    #[ORM\Column(name: "CT_Statistique09", length: 21, nullable: true)]
    private ?string $ctStatistique09 = null;

    #[ORM\Column(name: "CT_Statistique10", length: 21, nullable: true)]
    private ?string $ctStatistique10 = null;

    #[ORM\Column(name: "CT_Commentaire", length: 35, nullable: true)]
    private ?string $ctCommentaire = null;

    #[ORM\Column(name: "CT_Encours", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctEncours = null;

    #[ORM\Column(name: "CT_Assurance", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctAssurance = null;

    #[ORM\Column(name: "CT_NumPayeur", length: 17, nullable: true)]
    private ?string $ctNumpayeur = null;

    #[ORM\Column(name: "cbCT_NumPayeur", type: Types::BINARY, nullable: true)]
    private $cbctNumpayeur = null;

    #[ORM\Column(name: "N_Risque", type: Types::SMALLINT, nullable: true)]
    private ?int $nRisque = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "N_CatTarif", type: Types::SMALLINT, nullable: true)]
    private ?int $nCattarif = null;

    #[ORM\Column(name: "CT_Taux01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctTaux01 = null;

    #[ORM\Column(name: "CT_Taux02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctTaux02 = null;

    #[ORM\Column(name: "CT_Taux03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctTaux03 = null;

    #[ORM\Column(name: "CT_Taux04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctTaux04 = null;

    #[ORM\Column(name: "N_CatCompta", type: Types::SMALLINT, nullable: true)]
    private ?int $nCatcompta = null;

    #[ORM\Column(name: "N_Period", type: Types::SMALLINT, nullable: true)]
    private ?int $nPeriod = null;

    #[ORM\Column(name: "CT_Facture", type: Types::SMALLINT, nullable: true)]
    private ?int $ctFacture = null;

    #[ORM\Column(name: "CT_BLFact", type: Types::SMALLINT, nullable: true)]
    private ?int $ctBlfact = null;

    #[ORM\Column(name: "CT_Langue", type: Types::SMALLINT, nullable: true)]
    private ?int $ctLangue = null;

    #[ORM\Column(name: "N_Expedition", type: Types::SMALLINT, nullable: true)]
    private ?int $nExpedition = null;

    #[ORM\Column(name: "N_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $nCondition = null;

    #[ORM\Column(name: "CT_DateCreate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctDatecreate = null;

    #[ORM\Column(name: "CT_Saut", type: Types::SMALLINT, nullable: true)]
    private ?int $ctSaut = null;

    #[ORM\Column(name: "CT_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $ctLettrage = null;

    #[ORM\Column(name: "CT_ValidEch", type: Types::SMALLINT, nullable: true)]
    private ?int $ctValidech = null;

    #[ORM\Column(name: "CT_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $ctSommeil = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "CT_ControlEnc", type: Types::SMALLINT, nullable: true)]
    private ?int $ctControlenc = null;

    #[ORM\Column(name: "CT_NotRappel", type: Types::SMALLINT, nullable: true)]
    private ?int $ctNotrappel = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "cbN_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $cbnAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "CT_Telephone", length: 21, nullable: true)]
    private ?string $ctTelephone = null;

    #[ORM\Column(name: "CT_Telecopie", length: 21, nullable: true)]
    private ?string $ctTelecopie = null;

    #[ORM\Column(name: "CT_EMail", length: 69, nullable: true)]
    private ?string $ctEmail = null;

    #[ORM\Column(name: "CT_Site", length: 69, nullable: true)]
    private ?string $ctSite = null;

    #[ORM\Column(name: "CT_Coface", length: 25, nullable: true)]
    private ?string $ctCoface = null;

    #[ORM\Column(name: "CT_Surveillance", type: Types::SMALLINT, nullable: true)]
    private ?int $ctSurveillance = null;

    #[ORM\Column(name: "CT_SvDateCreate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctSvdatecreate = null;

    #[ORM\Column(name: "CT_SvFormeJuri", length: 33, nullable: true)]
    private ?string $ctSvformejuri = null;

    #[ORM\Column(name: "CT_SvEffectif", length: 11, nullable: true)]
    private ?string $ctSveffectif = null;

    #[ORM\Column(name: "CT_SvCA", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctSvca = null;

    #[ORM\Column(name: "CT_SvResultat", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ctSvresultat = null;

    #[ORM\Column(name: "CT_SvIncident", type: Types::SMALLINT, nullable: true)]
    private ?int $ctSvincident = null;

    #[ORM\Column(name: "CT_SvDateIncid", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctSvdateincid = null;

    #[ORM\Column(name: "CT_SvPrivil", type: Types::SMALLINT, nullable: true)]
    private ?int $ctSvprivil = null;

    #[ORM\Column(name: "CT_SvRegul", length: 3, nullable: true)]
    private ?string $ctSvregul = null;

    #[ORM\Column(name: "CT_SvCotation", length: 5, nullable: true)]
    private ?string $ctSvcotation = null;

    #[ORM\Column(name: "CT_SvDateMaj", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctSvdatemaj = null;

    #[ORM\Column(name: "CT_SvObjetMaj", length: 61, nullable: true)]
    private ?string $ctSvobjetmaj = null;

    #[ORM\Column(name: "CT_SvDateBilan", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctSvdatebilan = null;

    #[ORM\Column(name: "CT_SvNbMoisBilan", type: Types::SMALLINT, nullable: true)]
    private ?int $ctSvnbmoisbilan = null;

    #[ORM\Column(name: "N_AnalytiqueIFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalytiqueifrs = null;

    #[ORM\Column(name: "cbN_AnalytiqueIFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $cbnAnalytiqueifrs = null;

    #[ORM\Column(name: "CA_NumIFRS", length: 13, nullable: true)]
    private ?string $caNumifrs = null;

    #[ORM\Column(name: "CT_PrioriteLivr", type: Types::SMALLINT, nullable: true)]
    private ?int $ctPrioritelivr = null;

    #[ORM\Column(name: "CT_LivrPartielle", type: Types::SMALLINT, nullable: true)]
    private ?int $ctLivrpartielle = null;

    #[ORM\Column(name: "MR_No", nullable: true)]
    private ?int $mrNo = null;

    #[ORM\Column(name: "cbMR_No", nullable: true)]
    private ?int $cbmrNo = null;

    #[ORM\Column(name: "CT_NotPenal", type: Types::SMALLINT, nullable: true)]
    private ?int $ctNotpenal = null;

    #[ORM\Column(name: "EB_No", nullable: true)]
    private ?int $ebNo = null;

    #[ORM\Column(name: "cbEB_No", nullable: true)]
    private ?int $cbebNo = null;

    #[ORM\Column(name: "CT_NumCentrale", length: 17, nullable: true)]
    private ?string $ctNumcentrale = null;

    #[ORM\Column(name: "cbCT_NumCentrale", type: Types::BINARY, nullable: true)]
    private $cbctNumcentrale = null;

    #[ORM\Column(name: "CT_DateFermeDebut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctDatefermedebut = null;

    #[ORM\Column(name: "CT_DateFermeFin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctDatefermefin = null;

    #[ORM\Column(name: "CT_FactureElec", type: Types::SMALLINT, nullable: true)]
    private ?int $ctFactureelec = null;

    #[ORM\Column(name: "CT_TypeNIF", type: Types::SMALLINT, nullable: true)]
    private ?int $ctTypenif = null;

    #[ORM\Column(name: "CT_RepresentInt", length: 35, nullable: true)]
    private ?string $ctRepresentint = null;

    #[ORM\Column(name: "CT_RepresentNIF", length: 25, nullable: true)]
    private ?string $ctRepresentnif = null;

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

    #[ORM\Column(name: "CT_EdiCodeType", type: Types::SMALLINT, nullable: true)]
    private ?int $ctEdicodetype = null;

    #[ORM\Column(name: "CT_EdiCode", length: 23, nullable: true)]
    private ?string $ctEdicode = null;

    #[ORM\Column(name: "CT_EdiCodeSage", length: 9, nullable: true)]
    private ?string $ctEdicodesage = null;

    #[ORM\Column(name: "CT_ProfilSoc", type: Types::SMALLINT, nullable: true)]
    private ?int $ctProfilsoc = null;

    #[ORM\Column(name: "CT_StatutContrat", type: Types::SMALLINT, nullable: true)]
    private ?int $ctStatutcontrat = null;

    #[ORM\Column(name: "CT_DateMAJ", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctDatemaj = null;

    #[ORM\Column(name: "CT_EchangeRappro", type: Types::SMALLINT, nullable: true)]
    private ?int $ctEchangerappro = null;

    #[ORM\Column(name: "CT_EchangeCR", type: Types::SMALLINT, nullable: true)]
    private ?int $ctEchangecr = null;

    #[ORM\Column(name: "PI_NoEchange", nullable: true)]
    private ?int $piNoechange = null;

    #[ORM\Column(name: "cbPI_NoEchange", nullable: true)]
    private ?int $cbpiNoechange = null;

    #[ORM\Column(name: "CT_BonAPayer", type: Types::SMALLINT, nullable: true)]
    private ?int $ctBonapayer = null;

    #[ORM\Column(name: "CT_DelaiTransport", type: Types::SMALLINT, nullable: true)]
    private ?int $ctDelaitransport = null;

    #[ORM\Column(name: "CT_DelaiAppro", type: Types::SMALLINT, nullable: true)]
    private ?int $ctDelaiappro = null;

    #[ORM\Column(name: "CT_LangueISO2", length: 3, nullable: true)]
    private ?string $ctLangueiso2 = null;

    #[ORM\Column(name: "CT_AnnulationCR", type: Types::SMALLINT, nullable: true)]
    private ?int $ctAnnulationcr = null;

    #[ORM\Column(name: "[FRS ETRANGER]", length: 21, nullable: true)]
    private ?string $frsEtranger = null;

    #[ORM\Column(name: "RC", length: 69, nullable: true)]
    private ?string $rc = null;

    #[ORM\Column(name: "CT_CessionCreance", type: Types::SMALLINT, nullable: true)]
    private ?int $ctCessioncreance = null;

    #[ORM\Column(name: "CT_Facebook", length: 35, nullable: true)]
    private ?string $ctFacebook = null;

    #[ORM\Column(name: "CT_LinkedIn", length: 35, nullable: true)]
    private ?string $ctLinkedin = null;

    #[ORM\Column(name: "[REP TEL]", length: 13, nullable: true)]
    private ?string $repTel = null;

    #[ORM\Column(name: "CategorieClient", length: 21, nullable: true)]
    private ?string $categorieclient = null;

    #[ORM\Column(name: "SousClientDe_Code_Client", length: 21, nullable: true)]
    private ?string $sousclientdeCodeClient = null;

    #[ORM\Column(name: "ClientActif", length: 21, nullable: true)]
    private ?string $clientactif = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
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

    public function getCtIntitule(): ?string
    {
        return $this->ctIntitule;
    }

    public function setCtIntitule(?string $ctIntitule): static
    {
        $this->ctIntitule = $ctIntitule;

        return $this;
    }

    public function getCtType(): ?int
    {
        return $this->ctType;
    }

    public function setCtType(?int $ctType): static
    {
        $this->ctType = $ctType;

        return $this;
    }

    public function getCgNumprinc(): ?string
    {
        return $this->cgNumprinc;
    }

    public function setCgNumprinc(string $cgNumprinc): static
    {
        $this->cgNumprinc = $cgNumprinc;

        return $this;
    }

    public function getCbcgNumprinc()
    {
        return $this->cbcgNumprinc;
    }

    public function setCbcgNumprinc($cbcgNumprinc): static
    {
        $this->cbcgNumprinc = $cbcgNumprinc;

        return $this;
    }

    public function getCtQualite(): ?string
    {
        return $this->ctQualite;
    }

    public function setCtQualite(?string $ctQualite): static
    {
        $this->ctQualite = $ctQualite;

        return $this;
    }

    public function getCtClassement(): ?string
    {
        return $this->ctClassement;
    }

    public function setCtClassement(?string $ctClassement): static
    {
        $this->ctClassement = $ctClassement;

        return $this;
    }

    public function getCbctClassement()
    {
        return $this->cbctClassement;
    }

    public function setCbctClassement($cbctClassement): static
    {
        $this->cbctClassement = $cbctClassement;

        return $this;
    }

    public function getCtContact(): ?string
    {
        return $this->ctContact;
    }

    public function setCtContact(?string $ctContact): static
    {
        $this->ctContact = $ctContact;

        return $this;
    }

    public function getCtAdresse(): ?string
    {
        return $this->ctAdresse;
    }

    public function setCtAdresse(?string $ctAdresse): static
    {
        $this->ctAdresse = $ctAdresse;

        return $this;
    }

    public function getCtComplement(): ?string
    {
        return $this->ctComplement;
    }

    public function setCtComplement(?string $ctComplement): static
    {
        $this->ctComplement = $ctComplement;

        return $this;
    }

    public function getCtCodepostal(): ?string
    {
        return $this->ctCodepostal;
    }

    public function setCtCodepostal(?string $ctCodepostal): static
    {
        $this->ctCodepostal = $ctCodepostal;

        return $this;
    }

    public function getCbctCodepostal()
    {
        return $this->cbctCodepostal;
    }

    public function setCbctCodepostal($cbctCodepostal): static
    {
        $this->cbctCodepostal = $cbctCodepostal;

        return $this;
    }

    public function getCtVille(): ?string
    {
        return $this->ctVille;
    }

    public function setCtVille(?string $ctVille): static
    {
        $this->ctVille = $ctVille;

        return $this;
    }

    public function getCtCoderegion(): ?string
    {
        return $this->ctCoderegion;
    }

    public function setCtCoderegion(?string $ctCoderegion): static
    {
        $this->ctCoderegion = $ctCoderegion;

        return $this;
    }

    public function getCtPays(): ?string
    {
        return $this->ctPays;
    }

    public function setCtPays(?string $ctPays): static
    {
        $this->ctPays = $ctPays;

        return $this;
    }

    public function getCtRaccourci(): ?string
    {
        return $this->ctRaccourci;
    }

    public function setCtRaccourci(?string $ctRaccourci): static
    {
        $this->ctRaccourci = $ctRaccourci;

        return $this;
    }

    public function getCbctRaccourci()
    {
        return $this->cbctRaccourci;
    }

    public function setCbctRaccourci($cbctRaccourci): static
    {
        $this->cbctRaccourci = $cbctRaccourci;

        return $this;
    }

    public function getBtNum(): ?int
    {
        return $this->btNum;
    }

    public function setBtNum(?int $btNum): static
    {
        $this->btNum = $btNum;

        return $this;
    }

    public function getNDevise(): ?int
    {
        return $this->nDevise;
    }

    public function setNDevise(?int $nDevise): static
    {
        $this->nDevise = $nDevise;

        return $this;
    }

    public function getCtApe(): ?string
    {
        return $this->ctApe;
    }

    public function setCtApe(?string $ctApe): static
    {
        $this->ctApe = $ctApe;

        return $this;
    }

    public function getCtIdentifiant(): ?string
    {
        return $this->ctIdentifiant;
    }

    public function setCtIdentifiant(?string $ctIdentifiant): static
    {
        $this->ctIdentifiant = $ctIdentifiant;

        return $this;
    }

    public function getCtSiret(): ?string
    {
        return $this->ctSiret;
    }

    public function setCtSiret(?string $ctSiret): static
    {
        $this->ctSiret = $ctSiret;

        return $this;
    }

    public function getCtStatistique01(): ?string
    {
        return $this->ctStatistique01;
    }

    public function setCtStatistique01(?string $ctStatistique01): static
    {
        $this->ctStatistique01 = $ctStatistique01;

        return $this;
    }

    public function getCtStatistique02(): ?string
    {
        return $this->ctStatistique02;
    }

    public function setCtStatistique02(?string $ctStatistique02): static
    {
        $this->ctStatistique02 = $ctStatistique02;

        return $this;
    }

    public function getCtStatistique03(): ?string
    {
        return $this->ctStatistique03;
    }

    public function setCtStatistique03(?string $ctStatistique03): static
    {
        $this->ctStatistique03 = $ctStatistique03;

        return $this;
    }

    public function getCtStatistique04(): ?string
    {
        return $this->ctStatistique04;
    }

    public function setCtStatistique04(?string $ctStatistique04): static
    {
        $this->ctStatistique04 = $ctStatistique04;

        return $this;
    }

    public function getCtStatistique05(): ?string
    {
        return $this->ctStatistique05;
    }

    public function setCtStatistique05(?string $ctStatistique05): static
    {
        $this->ctStatistique05 = $ctStatistique05;

        return $this;
    }

    public function getCtStatistique06(): ?string
    {
        return $this->ctStatistique06;
    }

    public function setCtStatistique06(?string $ctStatistique06): static
    {
        $this->ctStatistique06 = $ctStatistique06;

        return $this;
    }

    public function getCtStatistique07(): ?string
    {
        return $this->ctStatistique07;
    }

    public function setCtStatistique07(?string $ctStatistique07): static
    {
        $this->ctStatistique07 = $ctStatistique07;

        return $this;
    }

    public function getCtStatistique08(): ?string
    {
        return $this->ctStatistique08;
    }

    public function setCtStatistique08(?string $ctStatistique08): static
    {
        $this->ctStatistique08 = $ctStatistique08;

        return $this;
    }

    public function getCtStatistique09(): ?string
    {
        return $this->ctStatistique09;
    }

    public function setCtStatistique09(?string $ctStatistique09): static
    {
        $this->ctStatistique09 = $ctStatistique09;

        return $this;
    }

    public function getCtStatistique10(): ?string
    {
        return $this->ctStatistique10;
    }

    public function setCtStatistique10(?string $ctStatistique10): static
    {
        $this->ctStatistique10 = $ctStatistique10;

        return $this;
    }

    public function getCtCommentaire(): ?string
    {
        return $this->ctCommentaire;
    }

    public function setCtCommentaire(?string $ctCommentaire): static
    {
        $this->ctCommentaire = $ctCommentaire;

        return $this;
    }

    public function getCtEncours(): ?string
    {
        return $this->ctEncours;
    }

    public function setCtEncours(?string $ctEncours): static
    {
        $this->ctEncours = $ctEncours;

        return $this;
    }

    public function getCtAssurance(): ?string
    {
        return $this->ctAssurance;
    }

    public function setCtAssurance(?string $ctAssurance): static
    {
        $this->ctAssurance = $ctAssurance;

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

    public function getNRisque(): ?int
    {
        return $this->nRisque;
    }

    public function setNRisque(?int $nRisque): static
    {
        $this->nRisque = $nRisque;

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

    public function getNCattarif(): ?int
    {
        return $this->nCattarif;
    }

    public function setNCattarif(?int $nCattarif): static
    {
        $this->nCattarif = $nCattarif;

        return $this;
    }

    public function getCtTaux01(): ?string
    {
        return $this->ctTaux01;
    }

    public function setCtTaux01(?string $ctTaux01): static
    {
        $this->ctTaux01 = $ctTaux01;

        return $this;
    }

    public function getCtTaux02(): ?string
    {
        return $this->ctTaux02;
    }

    public function setCtTaux02(?string $ctTaux02): static
    {
        $this->ctTaux02 = $ctTaux02;

        return $this;
    }

    public function getCtTaux03(): ?string
    {
        return $this->ctTaux03;
    }

    public function setCtTaux03(?string $ctTaux03): static
    {
        $this->ctTaux03 = $ctTaux03;

        return $this;
    }

    public function getCtTaux04(): ?string
    {
        return $this->ctTaux04;
    }

    public function setCtTaux04(?string $ctTaux04): static
    {
        $this->ctTaux04 = $ctTaux04;

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

    public function getNPeriod(): ?int
    {
        return $this->nPeriod;
    }

    public function setNPeriod(?int $nPeriod): static
    {
        $this->nPeriod = $nPeriod;

        return $this;
    }

    public function getCtFacture(): ?int
    {
        return $this->ctFacture;
    }

    public function setCtFacture(?int $ctFacture): static
    {
        $this->ctFacture = $ctFacture;

        return $this;
    }

    public function getCtBlfact(): ?int
    {
        return $this->ctBlfact;
    }

    public function setCtBlfact(?int $ctBlfact): static
    {
        $this->ctBlfact = $ctBlfact;

        return $this;
    }

    public function getCtLangue(): ?int
    {
        return $this->ctLangue;
    }

    public function setCtLangue(?int $ctLangue): static
    {
        $this->ctLangue = $ctLangue;

        return $this;
    }

    public function getNExpedition(): ?int
    {
        return $this->nExpedition;
    }

    public function setNExpedition(?int $nExpedition): static
    {
        $this->nExpedition = $nExpedition;

        return $this;
    }

    public function getNCondition(): ?int
    {
        return $this->nCondition;
    }

    public function setNCondition(?int $nCondition): static
    {
        $this->nCondition = $nCondition;

        return $this;
    }

    public function getCtDatecreate(): ?\DateTimeInterface
    {
        return $this->ctDatecreate;
    }

    public function setCtDatecreate(?\DateTimeInterface $ctDatecreate): static
    {
        $this->ctDatecreate = $ctDatecreate;

        return $this;
    }

    public function getCtSaut(): ?int
    {
        return $this->ctSaut;
    }

    public function setCtSaut(?int $ctSaut): static
    {
        $this->ctSaut = $ctSaut;

        return $this;
    }

    public function getCtLettrage(): ?int
    {
        return $this->ctLettrage;
    }

    public function setCtLettrage(?int $ctLettrage): static
    {
        $this->ctLettrage = $ctLettrage;

        return $this;
    }

    public function getCtValidech(): ?int
    {
        return $this->ctValidech;
    }

    public function setCtValidech(?int $ctValidech): static
    {
        $this->ctValidech = $ctValidech;

        return $this;
    }

    public function getCtSommeil(): ?int
    {
        return $this->ctSommeil;
    }

    public function setCtSommeil(?int $ctSommeil): static
    {
        $this->ctSommeil = $ctSommeil;

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

    public function getCtControlenc(): ?int
    {
        return $this->ctControlenc;
    }

    public function setCtControlenc(?int $ctControlenc): static
    {
        $this->ctControlenc = $ctControlenc;

        return $this;
    }

    public function getCtNotrappel(): ?int
    {
        return $this->ctNotrappel;
    }

    public function setCtNotrappel(?int $ctNotrappel): static
    {
        $this->ctNotrappel = $ctNotrappel;

        return $this;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(?int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getCbnAnalytique(): ?int
    {
        return $this->cbnAnalytique;
    }

    public function setCbnAnalytique(?int $cbnAnalytique): static
    {
        $this->cbnAnalytique = $cbnAnalytique;

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

    public function getCtTelephone(): ?string
    {
        return $this->ctTelephone;
    }

    public function setCtTelephone(?string $ctTelephone): static
    {
        $this->ctTelephone = $ctTelephone;

        return $this;
    }

    public function getCtTelecopie(): ?string
    {
        return $this->ctTelecopie;
    }

    public function setCtTelecopie(?string $ctTelecopie): static
    {
        $this->ctTelecopie = $ctTelecopie;

        return $this;
    }

    public function getCtEmail(): ?string
    {
        return $this->ctEmail;
    }

    public function setCtEmail(?string $ctEmail): static
    {
        $this->ctEmail = $ctEmail;

        return $this;
    }

    public function getCtSite(): ?string
    {
        return $this->ctSite;
    }

    public function setCtSite(?string $ctSite): static
    {
        $this->ctSite = $ctSite;

        return $this;
    }

    public function getCtCoface(): ?string
    {
        return $this->ctCoface;
    }

    public function setCtCoface(?string $ctCoface): static
    {
        $this->ctCoface = $ctCoface;

        return $this;
    }

    public function getCtSurveillance(): ?int
    {
        return $this->ctSurveillance;
    }

    public function setCtSurveillance(?int $ctSurveillance): static
    {
        $this->ctSurveillance = $ctSurveillance;

        return $this;
    }

    public function getCtSvdatecreate(): ?\DateTimeInterface
    {
        return $this->ctSvdatecreate;
    }

    public function setCtSvdatecreate(?\DateTimeInterface $ctSvdatecreate): static
    {
        $this->ctSvdatecreate = $ctSvdatecreate;

        return $this;
    }

    public function getCtSvformejuri(): ?string
    {
        return $this->ctSvformejuri;
    }

    public function setCtSvformejuri(?string $ctSvformejuri): static
    {
        $this->ctSvformejuri = $ctSvformejuri;

        return $this;
    }

    public function getCtSveffectif(): ?string
    {
        return $this->ctSveffectif;
    }

    public function setCtSveffectif(?string $ctSveffectif): static
    {
        $this->ctSveffectif = $ctSveffectif;

        return $this;
    }

    public function getCtSvca(): ?string
    {
        return $this->ctSvca;
    }

    public function setCtSvca(?string $ctSvca): static
    {
        $this->ctSvca = $ctSvca;

        return $this;
    }

    public function getCtSvresultat(): ?string
    {
        return $this->ctSvresultat;
    }

    public function setCtSvresultat(?string $ctSvresultat): static
    {
        $this->ctSvresultat = $ctSvresultat;

        return $this;
    }

    public function getCtSvincident(): ?int
    {
        return $this->ctSvincident;
    }

    public function setCtSvincident(?int $ctSvincident): static
    {
        $this->ctSvincident = $ctSvincident;

        return $this;
    }

    public function getCtSvdateincid(): ?\DateTimeInterface
    {
        return $this->ctSvdateincid;
    }

    public function setCtSvdateincid(?\DateTimeInterface $ctSvdateincid): static
    {
        $this->ctSvdateincid = $ctSvdateincid;

        return $this;
    }

    public function getCtSvprivil(): ?int
    {
        return $this->ctSvprivil;
    }

    public function setCtSvprivil(?int $ctSvprivil): static
    {
        $this->ctSvprivil = $ctSvprivil;

        return $this;
    }

    public function getCtSvregul(): ?string
    {
        return $this->ctSvregul;
    }

    public function setCtSvregul(?string $ctSvregul): static
    {
        $this->ctSvregul = $ctSvregul;

        return $this;
    }

    public function getCtSvcotation(): ?string
    {
        return $this->ctSvcotation;
    }

    public function setCtSvcotation(?string $ctSvcotation): static
    {
        $this->ctSvcotation = $ctSvcotation;

        return $this;
    }

    public function getCtSvdatemaj(): ?\DateTimeInterface
    {
        return $this->ctSvdatemaj;
    }

    public function setCtSvdatemaj(?\DateTimeInterface $ctSvdatemaj): static
    {
        $this->ctSvdatemaj = $ctSvdatemaj;

        return $this;
    }

    public function getCtSvobjetmaj(): ?string
    {
        return $this->ctSvobjetmaj;
    }

    public function setCtSvobjetmaj(?string $ctSvobjetmaj): static
    {
        $this->ctSvobjetmaj = $ctSvobjetmaj;

        return $this;
    }

    public function getCtSvdatebilan(): ?\DateTimeInterface
    {
        return $this->ctSvdatebilan;
    }

    public function setCtSvdatebilan(?\DateTimeInterface $ctSvdatebilan): static
    {
        $this->ctSvdatebilan = $ctSvdatebilan;

        return $this;
    }

    public function getCtSvnbmoisbilan(): ?int
    {
        return $this->ctSvnbmoisbilan;
    }

    public function setCtSvnbmoisbilan(?int $ctSvnbmoisbilan): static
    {
        $this->ctSvnbmoisbilan = $ctSvnbmoisbilan;

        return $this;
    }

    public function getNAnalytiqueifrs(): ?int
    {
        return $this->nAnalytiqueifrs;
    }

    public function setNAnalytiqueifrs(?int $nAnalytiqueifrs): static
    {
        $this->nAnalytiqueifrs = $nAnalytiqueifrs;

        return $this;
    }

    public function getCbnAnalytiqueifrs(): ?int
    {
        return $this->cbnAnalytiqueifrs;
    }

    public function setCbnAnalytiqueifrs(?int $cbnAnalytiqueifrs): static
    {
        $this->cbnAnalytiqueifrs = $cbnAnalytiqueifrs;

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

    public function getCtPrioritelivr(): ?int
    {
        return $this->ctPrioritelivr;
    }

    public function setCtPrioritelivr(?int $ctPrioritelivr): static
    {
        $this->ctPrioritelivr = $ctPrioritelivr;

        return $this;
    }

    public function getCtLivrpartielle(): ?int
    {
        return $this->ctLivrpartielle;
    }

    public function setCtLivrpartielle(?int $ctLivrpartielle): static
    {
        $this->ctLivrpartielle = $ctLivrpartielle;

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

    public function getCbmrNo(): ?int
    {
        return $this->cbmrNo;
    }

    public function setCbmrNo(?int $cbmrNo): static
    {
        $this->cbmrNo = $cbmrNo;

        return $this;
    }

    public function getCtNotpenal(): ?int
    {
        return $this->ctNotpenal;
    }

    public function setCtNotpenal(?int $ctNotpenal): static
    {
        $this->ctNotpenal = $ctNotpenal;

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

    public function getCbebNo(): ?int
    {
        return $this->cbebNo;
    }

    public function setCbebNo(?int $cbebNo): static
    {
        $this->cbebNo = $cbebNo;

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

    public function getCtDatefermedebut(): ?\DateTimeInterface
    {
        return $this->ctDatefermedebut;
    }

    public function setCtDatefermedebut(?\DateTimeInterface $ctDatefermedebut): static
    {
        $this->ctDatefermedebut = $ctDatefermedebut;

        return $this;
    }

    public function getCtDatefermefin(): ?\DateTimeInterface
    {
        return $this->ctDatefermefin;
    }

    public function setCtDatefermefin(?\DateTimeInterface $ctDatefermefin): static
    {
        $this->ctDatefermefin = $ctDatefermefin;

        return $this;
    }

    public function getCtFactureelec(): ?int
    {
        return $this->ctFactureelec;
    }

    public function setCtFactureelec(?int $ctFactureelec): static
    {
        $this->ctFactureelec = $ctFactureelec;

        return $this;
    }

    public function getCtTypenif(): ?int
    {
        return $this->ctTypenif;
    }

    public function setCtTypenif(?int $ctTypenif): static
    {
        $this->ctTypenif = $ctTypenif;

        return $this;
    }

    public function getCtRepresentint(): ?string
    {
        return $this->ctRepresentint;
    }

    public function setCtRepresentint(?string $ctRepresentint): static
    {
        $this->ctRepresentint = $ctRepresentint;

        return $this;
    }

    public function getCtRepresentnif(): ?string
    {
        return $this->ctRepresentnif;
    }

    public function setCtRepresentnif(?string $ctRepresentnif): static
    {
        $this->ctRepresentnif = $ctRepresentnif;

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

    public function getCtEdicodetype(): ?int
    {
        return $this->ctEdicodetype;
    }

    public function setCtEdicodetype(?int $ctEdicodetype): static
    {
        $this->ctEdicodetype = $ctEdicodetype;

        return $this;
    }

    public function getCtEdicode(): ?string
    {
        return $this->ctEdicode;
    }

    public function setCtEdicode(?string $ctEdicode): static
    {
        $this->ctEdicode = $ctEdicode;

        return $this;
    }

    public function getCtEdicodesage(): ?string
    {
        return $this->ctEdicodesage;
    }

    public function setCtEdicodesage(?string $ctEdicodesage): static
    {
        $this->ctEdicodesage = $ctEdicodesage;

        return $this;
    }

    public function getCtProfilsoc(): ?int
    {
        return $this->ctProfilsoc;
    }

    public function setCtProfilsoc(?int $ctProfilsoc): static
    {
        $this->ctProfilsoc = $ctProfilsoc;

        return $this;
    }

    public function getCtStatutcontrat(): ?int
    {
        return $this->ctStatutcontrat;
    }

    public function setCtStatutcontrat(?int $ctStatutcontrat): static
    {
        $this->ctStatutcontrat = $ctStatutcontrat;

        return $this;
    }

    public function getCtDatemaj(): ?\DateTimeInterface
    {
        return $this->ctDatemaj;
    }

    public function setCtDatemaj(?\DateTimeInterface $ctDatemaj): static
    {
        $this->ctDatemaj = $ctDatemaj;

        return $this;
    }

    public function getCtEchangerappro(): ?int
    {
        return $this->ctEchangerappro;
    }

    public function setCtEchangerappro(?int $ctEchangerappro): static
    {
        $this->ctEchangerappro = $ctEchangerappro;

        return $this;
    }

    public function getCtEchangecr(): ?int
    {
        return $this->ctEchangecr;
    }

    public function setCtEchangecr(?int $ctEchangecr): static
    {
        $this->ctEchangecr = $ctEchangecr;

        return $this;
    }

    public function getPiNoechange(): ?int
    {
        return $this->piNoechange;
    }

    public function setPiNoechange(?int $piNoechange): static
    {
        $this->piNoechange = $piNoechange;

        return $this;
    }

    public function getCbpiNoechange(): ?int
    {
        return $this->cbpiNoechange;
    }

    public function setCbpiNoechange(?int $cbpiNoechange): static
    {
        $this->cbpiNoechange = $cbpiNoechange;

        return $this;
    }

    public function getCtBonapayer(): ?int
    {
        return $this->ctBonapayer;
    }

    public function setCtBonapayer(?int $ctBonapayer): static
    {
        $this->ctBonapayer = $ctBonapayer;

        return $this;
    }

    public function getCtDelaitransport(): ?int
    {
        return $this->ctDelaitransport;
    }

    public function setCtDelaitransport(?int $ctDelaitransport): static
    {
        $this->ctDelaitransport = $ctDelaitransport;

        return $this;
    }

    public function getCtDelaiappro(): ?int
    {
        return $this->ctDelaiappro;
    }

    public function setCtDelaiappro(?int $ctDelaiappro): static
    {
        $this->ctDelaiappro = $ctDelaiappro;

        return $this;
    }

    public function getCtLangueiso2(): ?string
    {
        return $this->ctLangueiso2;
    }

    public function setCtLangueiso2(?string $ctLangueiso2): static
    {
        $this->ctLangueiso2 = $ctLangueiso2;

        return $this;
    }

    public function getCtAnnulationcr(): ?int
    {
        return $this->ctAnnulationcr;
    }

    public function setCtAnnulationcr(?int $ctAnnulationcr): static
    {
        $this->ctAnnulationcr = $ctAnnulationcr;

        return $this;
    }

    public function getFrsEtranger(): ?string
    {
        return $this->frsEtranger;
    }

    public function setFrsEtranger(?string $frsEtranger): static
    {
        $this->frsEtranger = $frsEtranger;

        return $this;
    }

    public function getRc(): ?string
    {
        return $this->rc;
    }

    public function setRc(?string $rc): static
    {
        $this->rc = $rc;

        return $this;
    }

    public function getCtCessioncreance(): ?int
    {
        return $this->ctCessioncreance;
    }

    public function setCtCessioncreance(?int $ctCessioncreance): static
    {
        $this->ctCessioncreance = $ctCessioncreance;

        return $this;
    }

    public function getCtFacebook(): ?string
    {
        return $this->ctFacebook;
    }

    public function setCtFacebook(?string $ctFacebook): static
    {
        $this->ctFacebook = $ctFacebook;

        return $this;
    }

    public function getCtLinkedin(): ?string
    {
        return $this->ctLinkedin;
    }

    public function setCtLinkedin(?string $ctLinkedin): static
    {
        $this->ctLinkedin = $ctLinkedin;

        return $this;
    }

    public function getRepTel(): ?string
    {
        return $this->repTel;
    }

    public function setRepTel(?string $repTel): static
    {
        $this->repTel = $repTel;

        return $this;
    }

    public function getCategorieclient(): ?string
    {
        return $this->categorieclient;
    }

    public function setCategorieclient(?string $categorieclient): static
    {
        $this->categorieclient = $categorieclient;

        return $this;
    }

    public function getSousclientdeCodeClient(): ?string
    {
        return $this->sousclientdeCodeClient;
    }

    public function setSousclientdeCodeClient(?string $sousclientdeCodeClient): static
    {
        $this->sousclientdeCodeClient = $sousclientdeCodeClient;

        return $this;
    }

    public function getClientactif(): ?string
    {
        return $this->clientactif;
    }

    public function setClientactif(?string $clientactif): static
    {
        $this->clientactif = $clientactif;

        return $this;
    }
}
