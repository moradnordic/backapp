<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCreglementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CREGLEMENT')]
#[ORM\Index(name: 'IHashOrder_F_CREGLEMENT', columns: ['cbHashOrder'])]
#[ORM\UniqueConstraint(name: 'IRG_NO', columns: ['RG_No'])]
#[ORM\Index(name: 'IRG_PAYEUR', columns: ['RG_Date'])]
#[ORM\Index(name: 'IRG_DATE', columns: ['RG_Date'])]
#[ORM\Index(name: 'IRG_ECNO', columns: ['EC_No'])]
#[ORM\Index(name: 'IRG_NUMCONT', columns: ['cbCG_NumCont'])]
#[ORM\Index(name: 'IRG_CGNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'IRG_CAISSIER', columns: ['CO_NoCaissier'])]
#[ORM\Index(name: 'IRG_CAISSE', columns: ['CA_No'])]
#[ORM\Index(name: 'IRG_CLOTURE', columns: ['RG_Date'])]
#[ORM\Index(name: 'IRG_TYPEPAYEUR', columns: ['RG_Date'])]
#[ORM\Index(name: 'IRG_TYPEDATE', columns: ['RG_Date'])]
#[ORM\Index(name: 'IRG_PIECE', columns: ['cbRG_Piece'])]
#[ORM\Index(name: 'IRG_PAYEURORIG', columns: ['cbCT_NumPayeurOrig'])]
#[ORM\Index(name: 'IRG_NUMECART', columns: ['cbCG_NumEcart'])]
#[ORM\Index(name: 'IRG_TYPECOMPTA', columns: ['RG_Date'])]
#[ORM\Index(name: 'FKIA_F_CREGLEMENT_CA_No', columns: ['cbCA_No'])]
#[ORM\Entity(repositoryClass: FCreglementRepository::class)]
class FCreglement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "RG_No", nullable: true)]
    private ?int $rgNo = null;

    #[ORM\Column(name: "CT_NumPayeur", length: 17, nullable: true)]
    private ?string $ctNumpayeur = null;

    #[ORM\Column(name: "cbCT_NumPayeur", type: Types::BINARY, nullable: true)]
    private $cbctNumpayeur = null;

    #[ORM\Column(name: "RG_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rgDate = null;

    #[ORM\Column(name: "RG_Reference", length: 17, nullable: true)]
    private ?string $rgReference = null;

    #[ORM\Column(name: "RG_Libelle", length: 35, nullable: true)]
    private ?string $rgLibelle = null;

    #[ORM\Column(name: "RG_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rgMontant = null;

    #[ORM\Column(name: "RG_MontantDev", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rgMontantdev = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "RG_Impute", type: Types::SMALLINT, nullable: true)]
    private ?int $rgImpute = null;

    #[ORM\Column(name: "RG_Compta", type: Types::SMALLINT, nullable: true)]
    private ?int $rgCompta = null;

    #[ORM\Column(name: "EC_No", nullable: true)]
    private ?int $ecNo = null;

    #[ORM\Column(name: "cbEC_No", nullable: true)]
    private ?int $cbecNo = null;

    #[ORM\Column(name: "RG_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $rgType = null;

    #[ORM\Column(name: "RG_Cours", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rgCours = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "JO_Num", length: 7)]
    private ?string $joNum = null;

    #[ORM\Column(name: "CG_NumCont", length: 13, nullable: true)]
    private ?string $cgNumcont = null;

    #[ORM\Column(name: "cbCG_NumCont", type: Types::BINARY, nullable: true)]
    private $cbcgNumcont = null;

    #[ORM\Column(name: "RG_Impaye", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rgImpaye = null;

    #[ORM\Column(name: "CG_Num", length: 13, nullable: true)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "RG_TypeReg", type: Types::SMALLINT, nullable: true)]
    private ?int $rgTypereg = null;

    #[ORM\Column(name: "RG_Heure", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rgHeure = null;

    #[ORM\Column(name: "RG_Piece", length: 13, nullable: true)]
    private ?string $rgPiece = null;

    #[ORM\Column(name: "cbRG_Piece", type: Types::BINARY, nullable: true)]
    private $cbrgPiece = null;

    #[ORM\Column(name: "CA_No", nullable: true)]
    private ?int $caNo = null;

    #[ORM\Column(name: "cbCA_No", nullable: true)]
    private ?int $cbcaNo = null;

    #[ORM\Column(name: "CO_NoCaissier", nullable: true)]
    private ?int $coNocaissier = null;

    #[ORM\Column(name: "cbCO_NoCaissier", nullable: true)]
    private ?int $cbcoNocaissier = null;

    #[ORM\Column(name: "RG_Banque", type: Types::SMALLINT, nullable: true)]
    private ?int $rgBanque = null;

    #[ORM\Column(name: "RG_Transfere", type: Types::SMALLINT, nullable: true)]
    private ?int $rgTransfere = null;

    #[ORM\Column(name: "RG_Cloture", type: Types::SMALLINT)]
    private ?int $rgCloture = null;

    #[ORM\Column(name: "RG_Ticket", type: Types::SMALLINT, nullable: true)]
    private ?int $rgTicket = null;

    #[ORM\Column(name: "RG_Souche", type: Types::SMALLINT, nullable: true)]
    private ?int $rgSouche = null;

    #[ORM\Column(name: "CT_NumPayeurOrig", length: 17, nullable: true)]
    private ?string $ctNumpayeurorig = null;

    #[ORM\Column(name: "cbCT_NumPayeurOrig", type: Types::BINARY, nullable: true)]
    private $cbctNumpayeurorig = null;

    #[ORM\Column(name: "RG_DateEchCont", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rgDateechcont = null;

    #[ORM\Column(name: "CG_NumEcart", length: 13, nullable: true)]
    private ?string $cgNumecart = null;

    #[ORM\Column(name: "cbCG_NumEcart", type: Types::BINARY, nullable: true)]
    private $cbcgNumecart = null;

    #[ORM\Column(name: "JO_NumEcart", length: 7, nullable: true)]
    private ?string $joNumecart = null;

    #[ORM\Column(name: "RG_MontantEcart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rgMontantecart = null;

    #[ORM\Column(name: "RG_NoBonAchat", nullable: true)]
    private ?int $rgNobonachat = null;

    #[ORM\Column(name: "RG_Valide", type: Types::SMALLINT, nullable: true)]
    private ?int $rgValide = null;

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

    #[ORM\Column(name: "cbHash", type: Types::BINARY, nullable: true)]
    private $cbhash = null;

    #[ORM\Column(name: "cbHashVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $cbhashversion = 1;

    #[ORM\Column(name: "cbHashDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbhashdate = null;

    #[ORM\Column(name: "cbHashOrder", nullable: true)]
    private ?int $cbhashorder = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRgNo(): ?int
    {
        return $this->rgNo;
    }

    public function setRgNo(?int $rgNo): static
    {
        $this->rgNo = $rgNo;

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

    public function getRgDate(): ?\DateTimeInterface
    {
        return $this->rgDate;
    }

    public function setRgDate(?\DateTimeInterface $rgDate): static
    {
        $this->rgDate = $rgDate;

        return $this;
    }

    public function getRgReference(): ?string
    {
        return $this->rgReference;
    }

    public function setRgReference(?string $rgReference): static
    {
        $this->rgReference = $rgReference;

        return $this;
    }

    public function getRgLibelle(): ?string
    {
        return $this->rgLibelle;
    }

    public function setRgLibelle(?string $rgLibelle): static
    {
        $this->rgLibelle = $rgLibelle;

        return $this;
    }

    public function getRgMontant(): ?string
    {
        return $this->rgMontant;
    }

    public function setRgMontant(?string $rgMontant): static
    {
        $this->rgMontant = $rgMontant;

        return $this;
    }

    public function getRgMontantdev(): ?string
    {
        return $this->rgMontantdev;
    }

    public function setRgMontantdev(?string $rgMontantdev): static
    {
        $this->rgMontantdev = $rgMontantdev;

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

    public function getRgImpute(): ?int
    {
        return $this->rgImpute;
    }

    public function setRgImpute(?int $rgImpute): static
    {
        $this->rgImpute = $rgImpute;

        return $this;
    }

    public function getRgCompta(): ?int
    {
        return $this->rgCompta;
    }

    public function setRgCompta(?int $rgCompta): static
    {
        $this->rgCompta = $rgCompta;

        return $this;
    }

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(?int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getCbecNo(): ?int
    {
        return $this->cbecNo;
    }

    public function setCbecNo(?int $cbecNo): static
    {
        $this->cbecNo = $cbecNo;

        return $this;
    }

    public function getRgType(): ?int
    {
        return $this->rgType;
    }

    public function setRgType(?int $rgType): static
    {
        $this->rgType = $rgType;

        return $this;
    }

    public function getRgCours(): ?string
    {
        return $this->rgCours;
    }

    public function setRgCours(?string $rgCours): static
    {
        $this->rgCours = $rgCours;

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

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(string $joNum): static
    {
        $this->joNum = $joNum;

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

    public function getCbcgNumcont()
    {
        return $this->cbcgNumcont;
    }

    public function setCbcgNumcont($cbcgNumcont): static
    {
        $this->cbcgNumcont = $cbcgNumcont;

        return $this;
    }

    public function getRgImpaye(): ?\DateTimeInterface
    {
        return $this->rgImpaye;
    }

    public function setRgImpaye(?\DateTimeInterface $rgImpaye): static
    {
        $this->rgImpaye = $rgImpaye;

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

    public function getRgTypereg(): ?int
    {
        return $this->rgTypereg;
    }

    public function setRgTypereg(?int $rgTypereg): static
    {
        $this->rgTypereg = $rgTypereg;

        return $this;
    }

    public function getRgHeure(): ?string
    {
        return $this->rgHeure;
    }

    public function setRgHeure(?string $rgHeure): static
    {
        $this->rgHeure = $rgHeure;

        return $this;
    }

    public function getRgPiece(): ?string
    {
        return $this->rgPiece;
    }

    public function setRgPiece(?string $rgPiece): static
    {
        $this->rgPiece = $rgPiece;

        return $this;
    }

    public function getCbrgPiece()
    {
        return $this->cbrgPiece;
    }

    public function setCbrgPiece($cbrgPiece): static
    {
        $this->cbrgPiece = $cbrgPiece;

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

    public function getRgBanque(): ?int
    {
        return $this->rgBanque;
    }

    public function setRgBanque(?int $rgBanque): static
    {
        $this->rgBanque = $rgBanque;

        return $this;
    }

    public function getRgTransfere(): ?int
    {
        return $this->rgTransfere;
    }

    public function setRgTransfere(?int $rgTransfere): static
    {
        $this->rgTransfere = $rgTransfere;

        return $this;
    }

    public function getRgCloture(): ?int
    {
        return $this->rgCloture;
    }

    public function setRgCloture(int $rgCloture): static
    {
        $this->rgCloture = $rgCloture;

        return $this;
    }

    public function getRgTicket(): ?int
    {
        return $this->rgTicket;
    }

    public function setRgTicket(?int $rgTicket): static
    {
        $this->rgTicket = $rgTicket;

        return $this;
    }

    public function getRgSouche(): ?int
    {
        return $this->rgSouche;
    }

    public function setRgSouche(?int $rgSouche): static
    {
        $this->rgSouche = $rgSouche;

        return $this;
    }

    public function getCtNumpayeurorig(): ?string
    {
        return $this->ctNumpayeurorig;
    }

    public function setCtNumpayeurorig(?string $ctNumpayeurorig): static
    {
        $this->ctNumpayeurorig = $ctNumpayeurorig;

        return $this;
    }

    public function getCbctNumpayeurorig()
    {
        return $this->cbctNumpayeurorig;
    }

    public function setCbctNumpayeurorig($cbctNumpayeurorig): static
    {
        $this->cbctNumpayeurorig = $cbctNumpayeurorig;

        return $this;
    }

    public function getRgDateechcont(): ?\DateTimeInterface
    {
        return $this->rgDateechcont;
    }

    public function setRgDateechcont(?\DateTimeInterface $rgDateechcont): static
    {
        $this->rgDateechcont = $rgDateechcont;

        return $this;
    }

    public function getCgNumecart(): ?string
    {
        return $this->cgNumecart;
    }

    public function setCgNumecart(?string $cgNumecart): static
    {
        $this->cgNumecart = $cgNumecart;

        return $this;
    }

    public function getCbcgNumecart()
    {
        return $this->cbcgNumecart;
    }

    public function setCbcgNumecart($cbcgNumecart): static
    {
        $this->cbcgNumecart = $cbcgNumecart;

        return $this;
    }

    public function getJoNumecart(): ?string
    {
        return $this->joNumecart;
    }

    public function setJoNumecart(?string $joNumecart): static
    {
        $this->joNumecart = $joNumecart;

        return $this;
    }

    public function getRgMontantecart(): ?string
    {
        return $this->rgMontantecart;
    }

    public function setRgMontantecart(?string $rgMontantecart): static
    {
        $this->rgMontantecart = $rgMontantecart;

        return $this;
    }

    public function getRgNobonachat(): ?int
    {
        return $this->rgNobonachat;
    }

    public function setRgNobonachat(?int $rgNobonachat): static
    {
        $this->rgNobonachat = $rgNobonachat;

        return $this;
    }

    public function getRgValide(): ?int
    {
        return $this->rgValide;
    }

    public function setRgValide(?int $rgValide): static
    {
        $this->rgValide = $rgValide;

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
}
