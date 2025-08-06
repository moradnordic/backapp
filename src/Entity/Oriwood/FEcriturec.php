<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEcriturecRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ECRITUREC')]
#[ORM\Index(name: 'IEC_JOUR', columns: ['EC_No'])]
#[ORM\Index(name: 'IEC_NO', columns: ['EC_No'])]
#[ORM\Index(name: 'IEC_PIECE', columns: ['EC_No'])]
#[ORM\Index(name: 'IEC_CGNUM', columns: ['cbEC_Piece'])]
#[ORM\Index(name: 'IEC_LETTRE', columns: ['cbEC_Piece'])]
#[ORM\Index(name: 'IEC_POINT', columns: ['cbEC_Piece'])]
#[ORM\UniqueConstraint(name: 'IEC_ECNO', columns: ['EC_No'])]
#[ORM\Index(name: 'IEC_CTNUM', columns: ['cbEC_Piece'])]
#[ORM\Index(name: 'IEC_CTLETTRE', columns: ['cbEC_Piece'])]
#[ORM\Index(name: 'IEC_TACODE', columns: ['cbTA_Code'])]
#[ORM\Index(name: 'IEC_PIECEJONUM', columns: ['EC_CType'])]
#[ORM\Index(name: 'IEC_REFPIECE', columns: ['EC_Jour'])]
#[ORM\Index(name: 'IEC_NOLINK', columns: ['EC_NoLink'])]
#[ORM\Index(name: 'IEC_NOCLOTURE', columns: ['EC_No'])]
#[ORM\Index(name: 'IEC_STATFINEXKAP', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_ECRITUREC_EC_CG_NUM', columns: ['CG_Num'])]
#[ORM\Index(name: 'FKIA_F_ECRITUREC_EC_TA_CODE', columns: ['TA_Code'])]
#[ORM\Index(name: 'FKIA_F_ECRITUREC_EC_CT_NUM', columns: ['CT_Num'])]
#[ORM\Entity(repositoryClass: FEcriturecRepository::class)]
class FEcriturec
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "JO_Num", length: 7)]
    private ?string $joNum = null;

    #[ORM\Column(name: "cbJO_Num", type: Types::BINARY, nullable: true)]
    private $cbjoNum = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "EC_NoLink", nullable: true)]
    private ?int $ecNolink = null;

    #[ORM\Column(name: "JM_Date", type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $jmDate = null;

    #[ORM\Column(name: "EC_Jour", type: Types::SMALLINT, nullable: true)]
    private ?int $ecJour = null;

    #[ORM\Column(name: "EC_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ec_Date = null;

    #[ORM\Column(name: "EC_Piece", length: 13, nullable: true)]
    private ?string $ecPiece = null;

    #[ORM\Column(name: "cbEC_Piece", type: Types::BINARY, nullable: true)]
    private $cbecPiece = null;

    #[ORM\Column(name: "EC_RefPiece", length: 17, nullable: true)]
    private ?string $ecRefpiece = null;

    #[ORM\Column(name: "cbEC_RefPiece", type: Types::BINARY, nullable: true)]
    private $cbecRefpiece = null;

    #[ORM\Column(name: "EC_TresoPiece", length: 17, nullable: true)]
    private ?string $ecTresopiece = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "CG_NumCont", length: 13, nullable: true)]
    private ?string $cgNumcont = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "EC_Intitule", length: 35, nullable: true)]
    private ?string $ecIntitule = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "EC_Echeance", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecEcheance = null;

    #[ORM\Column(name: "EC_Parite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ecParite = null;

    #[ORM\Column(name: "EC_Quantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ecQuantite = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "EC_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $ecSens = null;

    #[ORM\Column(name: "EC_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ecMontant = null;

    #[ORM\Column(name: "EC_Lettre", type: Types::SMALLINT, nullable: true)]
    private ?int $ecLettre = null;

    #[ORM\Column(name: "EC_Lettrage", length: 3, nullable: true)]
    private ?string $ecLettrage = null;

    #[ORM\Column(name: "EC_Point", type: Types::SMALLINT, nullable: true)]
    private ?int $ecPoint = null;

    #[ORM\Column(name: "EC_Pointage", length: 3, nullable: true)]
    private ?string $ecPointage = null;

    #[ORM\Column(name: "EC_Impression", type: Types::SMALLINT, nullable: true)]
    private ?int $ecImpression = null;

    #[ORM\Column(name: "EC_Cloture", type: Types::SMALLINT, nullable: true)]
    private ?int $ecCloture = null;

    #[ORM\Column(name: "EC_CType", type: Types::SMALLINT, nullable: true)]
    private ?int $ecCtype = null;

    #[ORM\Column(name: "EC_Rappel", type: Types::SMALLINT, nullable: true)]
    private ?int $ecRappel = null;

    #[ORM\Column(name: "CT_NumCont", length: 17, nullable: true)]
    private ?string $ctNumcont = null;

    #[ORM\Column(name: "EC_LettreQ", type: Types::SMALLINT, nullable: true)]
    private ?int $ecLettreq = null;

    #[ORM\Column(name: "EC_LettrageQ", length: 3, nullable: true)]
    private ?string $ecLettrageq = null;

    #[ORM\Column(name: "EC_ANType", type: Types::SMALLINT, nullable: true)]
    private ?int $ecAntype = null;

    #[ORM\Column(name: "EC_RType", type: Types::SMALLINT, nullable: true)]
    private ?int $ecRtype = null;

    #[ORM\Column(name: "EC_Devise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ecDevise = null;

    #[ORM\Column(name: "EC_Remise", type: Types::SMALLINT, nullable: true)]
    private ?int $ecRemise = null;

    #[ORM\Column(name: "EC_ExportExpert", type: Types::SMALLINT, nullable: true)]
    private ?int $ecExportexpert = null;

    #[ORM\Column(name: "TA_Code", length: 5, nullable: true)]
    private ?string $taCode = null;

    #[ORM\Column(name: "cbTA_Code", type: Types::BINARY, nullable: true)]
    private $cbtaCode = null;

    #[ORM\Column(name: "EC_Norme", type: Types::SMALLINT, nullable: true)]
    private ?int $ecNorme = null;

    #[ORM\Column(name: "TA_Provenance", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance = null;

    #[ORM\Column(name: "EC_PenalType", type: Types::SMALLINT, nullable: true)]
    private ?int $ecPenaltype = null;

    #[ORM\Column(name: "EC_DatePenal", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecDatepenal = null;

    #[ORM\Column(name: "EC_DateRelance", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecDaterelance = null;

    #[ORM\Column(name: "EC_DateRappro", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecDaterappro = null;

    #[ORM\Column(name: "EC_Reference", length: 17, nullable: true)]
    private ?string $ecReference = null;

    #[ORM\Column(name: "EC_StatusRegle", type: Types::SMALLINT, nullable: true)]
    private ?int $ecStatusregle = null;

    #[ORM\Column(name: "EC_MontantRegle", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ecMontantregle = null;

    #[ORM\Column(name: "EC_DateRegle", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecDateregle = null;

    #[ORM\Column(name: "EC_RIB", nullable: true)]
    private ?int $ecRib = null;

    #[ORM\Column(name: "EC_DateOp", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecDateop = null;

    #[ORM\Column(name: "EC_NoCloture", nullable: true)]
    private ?int $ecNocloture = null;

    #[ORM\Column(name: "EC_ExportRappro", type: Types::SMALLINT, nullable: true)]
    private ?int $ecExportrappro = null;

    #[ORM\Column(name: "EC_FactureGUID", type: Types::GUID, nullable: true)]
    private ?string $ecFactureguid = null;

    #[ORM\Column(name: "EC_DateCloture", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecDatecloture = null;

    #[ORM\Column(name: "EC_StatFinexKap", type: Types::SMALLINT, nullable: true)]
    private ?int $ecStatfinexkap = null;

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

    #[ORM\Column(name: "Lr_Ec_Piece", length: 50, nullable: true)]
    private ?string $lrEcPiece = null;

    #[ORM\Column(name: "Ent_No", length: 50, nullable: true)]
    private ?string $ent_No = null;

    #[ORM\Column(name: "lett", length: 69, nullable: true)]
    private ?string $lett = null;

    #[ORM\Column(name: "CT_Client", length: 69, nullable: true)]
    private ?string $ctClient = null;

    #[ORM\Column(name: "EMBALL", nullable: true)]
    private ?int $emball = null;

    #[ORM\Column(name: "FactVal", nullable: true)]
    private ?int $factval = null;

    #[ORM\Column(name: "CT_NUMAVENCE", length: 255, nullable: true)]
    private ?string $ctNumavence = null;

    #[ORM\Column(name: "MNTREGL", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $mntregl = null;

    #[ORM\Column(name: "PieceLr", length: 69, nullable: true)]
    private ?string $piecelr = null;

    #[ORM\Column(name: "EntNo", length: 69, nullable: true)]
    private ?string $entno = null;

    #[ORM\Column(name: "ECDate", length: 69, nullable: true)]
    private ?string $ecdate = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getCbjoNum()
    {
        return $this->cbjoNum;
    }

    public function setCbjoNum($cbjoNum): static
    {
        $this->cbjoNum = $cbjoNum;

        return $this;
    }

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getEcNolink(): ?int
    {
        return $this->ecNolink;
    }

    public function setEcNolink(?int $ecNolink): static
    {
        $this->ecNolink = $ecNolink;

        return $this;
    }

    public function getJmDate(): ?\DateTimeInterface
    {
        return $this->jmDate;
    }

    public function setJmDate(\DateTimeInterface $jmDate): static
    {
        $this->jmDate = $jmDate;

        return $this;
    }

    public function getEcJour(): ?int
    {
        return $this->ecJour;
    }

    public function setEcJour(?int $ecJour): static
    {
        $this->ecJour = $ecJour;

        return $this;
    }

    public function getEc_Date(): ?\DateTimeInterface
    {
        return $this->ec_Date;
    }

    public function setEc_Date(?\DateTimeInterface $ec_Date): static
    {
        $this->ec_Date = $ec_Date;

        return $this;
    }

    public function getEcPiece(): ?string
    {
        return $this->ecPiece;
    }

    public function setEcPiece(?string $ecPiece): static
    {
        $this->ecPiece = $ecPiece;

        return $this;
    }

    public function getCbecPiece()
    {
        return $this->cbecPiece;
    }

    public function setCbecPiece($cbecPiece): static
    {
        $this->cbecPiece = $cbecPiece;

        return $this;
    }

    public function getEcRefpiece(): ?string
    {
        return $this->ecRefpiece;
    }

    public function setEcRefpiece(?string $ecRefpiece): static
    {
        $this->ecRefpiece = $ecRefpiece;

        return $this;
    }

    public function getCbecRefpiece()
    {
        return $this->cbecRefpiece;
    }

    public function setCbecRefpiece($cbecRefpiece): static
    {
        $this->cbecRefpiece = $cbecRefpiece;

        return $this;
    }

    public function getEcTresopiece(): ?string
    {
        return $this->ecTresopiece;
    }

    public function setEcTresopiece(?string $ecTresopiece): static
    {
        $this->ecTresopiece = $ecTresopiece;

        return $this;
    }

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(string $cgNum): static
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

    public function getCgNumcont(): ?string
    {
        return $this->cgNumcont;
    }

    public function setCgNumcont(?string $cgNumcont): static
    {
        $this->cgNumcont = $cgNumcont;

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

    public function getEcIntitule(): ?string
    {
        return $this->ecIntitule;
    }

    public function setEcIntitule(?string $ecIntitule): static
    {
        $this->ecIntitule = $ecIntitule;

        return $this;
    }

    public function getNReglement(): ?int
    {
        return $this->nReglement;
    }

    public function setNReglement(?int $nReglement): static
    {
        $this->nReglement = $nReglement;

        return $this;
    }

    public function getEcEcheance(): ?\DateTimeInterface
    {
        return $this->ecEcheance;
    }

    public function setEcEcheance(?\DateTimeInterface $ecEcheance): static
    {
        $this->ecEcheance = $ecEcheance;

        return $this;
    }

    public function getEcParite(): ?string
    {
        return $this->ecParite;
    }

    public function setEcParite(?string $ecParite): static
    {
        $this->ecParite = $ecParite;

        return $this;
    }

    public function getEcQuantite(): ?string
    {
        return $this->ecQuantite;
    }

    public function setEcQuantite(?string $ecQuantite): static
    {
        $this->ecQuantite = $ecQuantite;

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

    public function getEcSens(): ?int
    {
        return $this->ecSens;
    }

    public function setEcSens(?int $ecSens): static
    {
        $this->ecSens = $ecSens;

        return $this;
    }

    public function getEcMontant(): ?string
    {
        return $this->ecMontant;
    }

    public function setEcMontant(?string $ecMontant): static
    {
        $this->ecMontant = $ecMontant;

        return $this;
    }

    public function getEcLettre(): ?int
    {
        return $this->ecLettre;
    }

    public function setEcLettre(?int $ecLettre): static
    {
        $this->ecLettre = $ecLettre;

        return $this;
    }

    public function getEcLettrage(): ?string
    {
        return $this->ecLettrage;
    }

    public function setEcLettrage(?string $ecLettrage): static
    {
        $this->ecLettrage = $ecLettrage;

        return $this;
    }

    public function getEcPoint(): ?int
    {
        return $this->ecPoint;
    }

    public function setEcPoint(?int $ecPoint): static
    {
        $this->ecPoint = $ecPoint;

        return $this;
    }

    public function getEcPointage(): ?string
    {
        return $this->ecPointage;
    }

    public function setEcPointage(?string $ecPointage): static
    {
        $this->ecPointage = $ecPointage;

        return $this;
    }

    public function getEcImpression(): ?int
    {
        return $this->ecImpression;
    }

    public function setEcImpression(?int $ecImpression): static
    {
        $this->ecImpression = $ecImpression;

        return $this;
    }

    public function getEcCloture(): ?int
    {
        return $this->ecCloture;
    }

    public function setEcCloture(?int $ecCloture): static
    {
        $this->ecCloture = $ecCloture;

        return $this;
    }

    public function getEcCtype(): ?int
    {
        return $this->ecCtype;
    }

    public function setEcCtype(?int $ecCtype): static
    {
        $this->ecCtype = $ecCtype;

        return $this;
    }

    public function getEcRappel(): ?int
    {
        return $this->ecRappel;
    }

    public function setEcRappel(?int $ecRappel): static
    {
        $this->ecRappel = $ecRappel;

        return $this;
    }

    public function getCtNumcont(): ?string
    {
        return $this->ctNumcont;
    }

    public function setCtNumcont(?string $ctNumcont): static
    {
        $this->ctNumcont = $ctNumcont;

        return $this;
    }

    public function getEcLettreq(): ?int
    {
        return $this->ecLettreq;
    }

    public function setEcLettreq(?int $ecLettreq): static
    {
        $this->ecLettreq = $ecLettreq;

        return $this;
    }

    public function getEcLettrageq(): ?string
    {
        return $this->ecLettrageq;
    }

    public function setEcLettrageq(?string $ecLettrageq): static
    {
        $this->ecLettrageq = $ecLettrageq;

        return $this;
    }

    public function getEcAntype(): ?int
    {
        return $this->ecAntype;
    }

    public function setEcAntype(?int $ecAntype): static
    {
        $this->ecAntype = $ecAntype;

        return $this;
    }

    public function getEcRtype(): ?int
    {
        return $this->ecRtype;
    }

    public function setEcRtype(?int $ecRtype): static
    {
        $this->ecRtype = $ecRtype;

        return $this;
    }

    public function getEcDevise(): ?string
    {
        return $this->ecDevise;
    }

    public function setEcDevise(?string $ecDevise): static
    {
        $this->ecDevise = $ecDevise;

        return $this;
    }

    public function getEcRemise(): ?int
    {
        return $this->ecRemise;
    }

    public function setEcRemise(?int $ecRemise): static
    {
        $this->ecRemise = $ecRemise;

        return $this;
    }

    public function getEcExportexpert(): ?int
    {
        return $this->ecExportexpert;
    }

    public function setEcExportexpert(?int $ecExportexpert): static
    {
        $this->ecExportexpert = $ecExportexpert;

        return $this;
    }

    public function getTaCode(): ?string
    {
        return $this->taCode;
    }

    public function setTaCode(?string $taCode): static
    {
        $this->taCode = $taCode;

        return $this;
    }

    public function getCbtaCode()
    {
        return $this->cbtaCode;
    }

    public function setCbtaCode($cbtaCode): static
    {
        $this->cbtaCode = $cbtaCode;

        return $this;
    }

    public function getEcNorme(): ?int
    {
        return $this->ecNorme;
    }

    public function setEcNorme(?int $ecNorme): static
    {
        $this->ecNorme = $ecNorme;

        return $this;
    }

    public function getTaProvenance(): ?int
    {
        return $this->taProvenance;
    }

    public function setTaProvenance(?int $taProvenance): static
    {
        $this->taProvenance = $taProvenance;

        return $this;
    }

    public function getEcPenaltype(): ?int
    {
        return $this->ecPenaltype;
    }

    public function setEcPenaltype(?int $ecPenaltype): static
    {
        $this->ecPenaltype = $ecPenaltype;

        return $this;
    }

    public function getEcDatepenal(): ?\DateTimeInterface
    {
        return $this->ecDatepenal;
    }

    public function setEcDatepenal(?\DateTimeInterface $ecDatepenal): static
    {
        $this->ecDatepenal = $ecDatepenal;

        return $this;
    }

    public function getEcDaterelance(): ?\DateTimeInterface
    {
        return $this->ecDaterelance;
    }

    public function setEcDaterelance(?\DateTimeInterface $ecDaterelance): static
    {
        $this->ecDaterelance = $ecDaterelance;

        return $this;
    }

    public function getEcDaterappro(): ?\DateTimeInterface
    {
        return $this->ecDaterappro;
    }

    public function setEcDaterappro(?\DateTimeInterface $ecDaterappro): static
    {
        $this->ecDaterappro = $ecDaterappro;

        return $this;
    }

    public function getEcReference(): ?string
    {
        return $this->ecReference;
    }

    public function setEcReference(?string $ecReference): static
    {
        $this->ecReference = $ecReference;

        return $this;
    }

    public function getEcStatusregle(): ?int
    {
        return $this->ecStatusregle;
    }

    public function setEcStatusregle(?int $ecStatusregle): static
    {
        $this->ecStatusregle = $ecStatusregle;

        return $this;
    }

    public function getEcMontantregle(): ?string
    {
        return $this->ecMontantregle;
    }

    public function setEcMontantregle(?string $ecMontantregle): static
    {
        $this->ecMontantregle = $ecMontantregle;

        return $this;
    }

    public function getEcDateregle(): ?\DateTimeInterface
    {
        return $this->ecDateregle;
    }

    public function setEcDateregle(?\DateTimeInterface $ecDateregle): static
    {
        $this->ecDateregle = $ecDateregle;

        return $this;
    }

    public function getEcRib(): ?int
    {
        return $this->ecRib;
    }

    public function setEcRib(?int $ecRib): static
    {
        $this->ecRib = $ecRib;

        return $this;
    }

    public function getEcDateop(): ?\DateTimeInterface
    {
        return $this->ecDateop;
    }

    public function setEcDateop(?\DateTimeInterface $ecDateop): static
    {
        $this->ecDateop = $ecDateop;

        return $this;
    }

    public function getEcNocloture(): ?int
    {
        return $this->ecNocloture;
    }

    public function setEcNocloture(?int $ecNocloture): static
    {
        $this->ecNocloture = $ecNocloture;

        return $this;
    }

    public function getEcExportrappro(): ?int
    {
        return $this->ecExportrappro;
    }

    public function setEcExportrappro(?int $ecExportrappro): static
    {
        $this->ecExportrappro = $ecExportrappro;

        return $this;
    }

    public function getEcFactureguid(): ?string
    {
        return $this->ecFactureguid;
    }

    public function setEcFactureguid(?string $ecFactureguid): static
    {
        $this->ecFactureguid = $ecFactureguid;

        return $this;
    }

    public function getEcDatecloture(): ?\DateTimeInterface
    {
        return $this->ecDatecloture;
    }

    public function setEcDatecloture(?\DateTimeInterface $ecDatecloture): static
    {
        $this->ecDatecloture = $ecDatecloture;

        return $this;
    }

    public function getEcStatfinexkap(): ?int
    {
        return $this->ecStatfinexkap;
    }

    public function setEcStatfinexkap(?int $ecStatfinexkap): static
    {
        $this->ecStatfinexkap = $ecStatfinexkap;

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

    public function getLrEcPiece(): ?string
    {
        return $this->lrEcPiece;
    }

    public function setLrEcPiece(?string $lrEcPiece): static
    {
        $this->lrEcPiece = $lrEcPiece;

        return $this;
    }

    public function getEnt_No(): ?string
    {
        return $this->ent_No;
    }

    public function setEnt_No(?string $ent_No): static
    {
        $this->ent_No = $ent_No;

        return $this;
    }

    public function getLett(): ?string
    {
        return $this->lett;
    }

    public function setLett(?string $lett): static
    {
        $this->lett = $lett;

        return $this;
    }

    public function getCtClient(): ?string
    {
        return $this->ctClient;
    }

    public function setCtClient(?string $ctClient): static
    {
        $this->ctClient = $ctClient;

        return $this;
    }

    public function getEmball(): ?int
    {
        return $this->emball;
    }

    public function setEmball(?int $emball): static
    {
        $this->emball = $emball;

        return $this;
    }

    public function getFactval(): ?int
    {
        return $this->factval;
    }

    public function setFactval(?int $factval): static
    {
        $this->factval = $factval;

        return $this;
    }

    public function getCtNumavence(): ?string
    {
        return $this->ctNumavence;
    }

    public function setCtNumavence(?string $ctNumavence): static
    {
        $this->ctNumavence = $ctNumavence;

        return $this;
    }

    public function getMntregl(): ?string
    {
        return $this->mntregl;
    }

    public function setMntregl(?string $mntregl): static
    {
        $this->mntregl = $mntregl;

        return $this;
    }

    public function getPiecelr(): ?string
    {
        return $this->piecelr;
    }

    public function setPiecelr(?string $piecelr): static
    {
        $this->piecelr = $piecelr;

        return $this;
    }

    public function getEntno(): ?string
    {
        return $this->entno;
    }

    public function setEntno(?string $entno): static
    {
        $this->entno = $entno;

        return $this;
    }

    public function getEcdate(): ?string
    {
        return $this->ecdate;
    }

    public function setEcdate(?string $ecdate): static
    {
        $this->ecdate = $ecdate;

        return $this;
    }
}
