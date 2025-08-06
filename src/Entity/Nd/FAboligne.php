<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FAboligneRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ABOLIGNE')]
#[ORM\Index(name: 'IAL_LIGNE', columns: ['AL_Ligne'])]
#[ORM\Index(name: 'IAL_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'IAL_ARTGAM', columns: ['AG_No1'])]
#[ORM\Index(name: 'IAL_REPRESENT', columns: ['CO_No'])]
#[ORM\Index(name: 'IAL_ANAL', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'IAL_ARTGAM2', columns: ['AG_No2'])]
#[ORM\Index(name: 'IAL_REF', columns: ['AG_No2'])]
#[ORM\Index(name: 'IAL_REFFOUR', columns: ['cbAF_RefFourniss'])]
#[ORM\Index(name: 'IAL_RESSOURCE', columns: ['cbRP_Code'])]
#[ORM\UniqueConstraint(name: 'IAL_NO', columns: ['AL_No'])]
#[ORM\Index(name: 'IAL_NOSOUSTOTAL', columns: ['AL_NoSousTotal'])]
#[ORM\Index(name: 'FKIA_F_ABOLIGNE_DE_No', columns: ['cbDE_No'])]
#[ORM\Index(name: 'FKIA_F_ABOLIGNE_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ABOLIGNE_AB_No', columns: ['AB_No'])]
#[ORM\Index(name: 'FKIA_F_ABOLIGNE_RP_Code', columns: ['RP_Code'])]
#[ORM\Entity(repositoryClass: FAboligneRepository::class)]
class FAboligne
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AB_No")]
    private ?int $abNo = null;

    #[ORM\Column(name: "AL_Ligne", nullable: true)]
    private ?int $alLigne = null;

    #[ORM\Column(name: "AL_Ref", length: 17, nullable: true)]
    private ?string $alRef = null;

    #[ORM\Column(name: "AL_TRemPied", type: Types::SMALLINT, nullable: true)]
    private ?int $alTrempied = null;

    #[ORM\Column(name: "AL_TRemExep", type: Types::SMALLINT, nullable: true)]
    private ?int $alTremexep = null;

    #[ORM\Column(name: "AR_Ref", length: 19, nullable: true)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AL_Design", length: 69, nullable: true)]
    private ?string $alDesign = null;

    #[ORM\Column(name: "AL_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alQte = null;

    #[ORM\Column(name: "AL_PoidsNet", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alPoidsnet = null;

    #[ORM\Column(name: "AL_PoidsBrut", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alPoidsbrut = null;

    #[ORM\Column(name: "AL_Remise01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alRemise01remValeur = null;

    #[ORM\Column(name: "AL_Remise01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $alRemise01remType = null;

    #[ORM\Column(name: "AL_Remise02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alRemise02remValeur = null;

    #[ORM\Column(name: "AL_Remise02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $alRemise02remType = null;

    #[ORM\Column(name: "AL_Remise03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alRemise03remValeur = null;

    #[ORM\Column(name: "AL_Remise03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $alRemise03remType = null;

    #[ORM\Column(name: "AL_PrixUnitaire", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alPrixunitaire = null;

    #[ORM\Column(name: "AL_Taxe1", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alTaxe1 = null;

    #[ORM\Column(name: "AL_TypeTaux1", type: Types::SMALLINT, nullable: true)]
    private ?int $alTypetaux1 = null;

    #[ORM\Column(name: "AL_TypeTaxe1", type: Types::SMALLINT, nullable: true)]
    private ?int $alTypetaxe1 = null;

    #[ORM\Column(name: "AL_Taxe2", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alTaxe2 = null;

    #[ORM\Column(name: "AL_TypeTaux2", type: Types::SMALLINT, nullable: true)]
    private ?int $alTypetaux2 = null;

    #[ORM\Column(name: "AL_TypeTaxe2", type: Types::SMALLINT, nullable: true)]
    private ?int $alTypetaxe2 = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

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

    #[ORM\Column(name: "AL_TTC", type: Types::SMALLINT, nullable: true)]
    private ?int $alTtc = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "AL_PUDevise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alPudevise = null;

    #[ORM\Column(name: "AL_PUTTC", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alPuttc = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "AL_Taxe3", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alTaxe3 = null;

    #[ORM\Column(name: "AL_TypeTaux3", type: Types::SMALLINT, nullable: true)]
    private ?int $alTypetaux3 = null;

    #[ORM\Column(name: "AL_TypeTaxe3", type: Types::SMALLINT, nullable: true)]
    private ?int $alTypetaxe3 = null;

    #[ORM\Column(name: "AL_Period", type: Types::SMALLINT, nullable: true)]
    private ?int $alPeriod = null;

    #[ORM\Column(name: "AL_Debut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $alDebut = null;

    #[ORM\Column(name: "AL_Fin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $alFin = null;

    #[ORM\Column(name: "AL_GestAnnee", type: Types::SMALLINT, nullable: true)]
    private ?int $alGestannee = null;

    #[ORM\Column(name: "AL_Prorata", type: Types::SMALLINT, nullable: true)]
    private ?int $alProrata = null;

    #[ORM\Column(name: "AL_Reconduction", type: Types::SMALLINT, nullable: true)]
    private ?int $alReconduction = null;

    #[ORM\Column(name: "AL_PrixRU", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alPrixru = null;

    #[ORM\Column(name: "AL_CMUP", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alCmup = null;

    #[ORM\Column(name: "AL_Valorise", type: Types::SMALLINT, nullable: true)]
    private ?int $alValorise = null;

    #[ORM\Column(name: "AR_RefCompose", length: 19, nullable: true)]
    private ?string $arRefcompose = null;

    #[ORM\Column(name: "AC_RefClient", length: 19, nullable: true)]
    private ?string $acRefclient = null;

    #[ORM\Column(name: "AL_MontantHT", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alMontantht = null;

    #[ORM\Column(name: "AL_MontantTTC", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $alMontantttc = null;

    #[ORM\Column(name: "AL_FactPoids", type: Types::SMALLINT, nullable: true)]
    private ?int $alFactpoids = null;

    #[ORM\Column(name: "AL_Escompte", type: Types::SMALLINT, nullable: true)]
    private ?int $alEscompte = null;

    #[ORM\Column(name: "RP_Code", length: 11, nullable: true)]
    private ?string $rpCode = null;

    #[ORM\Column(name: "cbRP_Code", type: Types::BINARY, nullable: true)]
    private $cbrpCode = null;

    #[ORM\Column(name: "AL_QteRessource", nullable: true)]
    private ?int $alQteressource = null;

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

    #[ORM\Column(name: "AL_No", nullable: true)]
    private ?int $alNo = null;

    #[ORM\Column(name: "AL_CodeTaxe1", length: 5, nullable: true)]
    private ?string $alCodetaxe1 = null;

    #[ORM\Column(name: "AL_CodeTaxe2", length: 5, nullable: true)]
    private ?string $alCodetaxe2 = null;

    #[ORM\Column(name: "AL_CodeTaxe3", length: 5, nullable: true)]
    private ?string $alCodetaxe3 = null;

    #[ORM\Column(name: "PU_FRS", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $puFrs = null;

    #[ORM\Column(name: "[Nbr PACK]", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $nbrPack = null;

    #[ORM\Column(name: "AL_NoSousTotal", nullable: true)]
    private ?int $alNosoustotal = null;

    #[ORM\Column(name: "Emplacement", length: 69, nullable: true)]
    private ?string $emplacement = null;

    #[ORM\Column(name: "AletreStockMin", length: 69, nullable: true)]
    private ?string $aletreStockMin = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAbNo(): ?int
    {
        return $this->abNo;
    }

    public function setAbNo(int $abNo): static
    {
        $this->abNo = $abNo;

        return $this;
    }

    public function getAlLigne(): ?int
    {
        return $this->alLigne;
    }

    public function setAlLigne(?int $alLigne): static
    {
        $this->alLigne = $alLigne;

        return $this;
    }

    public function getAlRef(): ?string
    {
        return $this->alRef;
    }

    public function setAlRef(?string $alRef): static
    {
        $this->alRef = $alRef;

        return $this;
    }

    public function getAlTrempied(): ?int
    {
        return $this->alTrempied;
    }

    public function setAlTrempied(?int $alTrempied): static
    {
        $this->alTrempied = $alTrempied;

        return $this;
    }

    public function getAlTremexep(): ?int
    {
        return $this->alTremexep;
    }

    public function setAlTremexep(?int $alTremexep): static
    {
        $this->alTremexep = $alTremexep;

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

    public function getAlDesign(): ?string
    {
        return $this->alDesign;
    }

    public function setAlDesign(?string $alDesign): static
    {
        $this->alDesign = $alDesign;

        return $this;
    }

    public function getAlQte(): ?string
    {
        return $this->alQte;
    }

    public function setAlQte(?string $alQte): static
    {
        $this->alQte = $alQte;

        return $this;
    }

    public function getAlPoidsnet(): ?string
    {
        return $this->alPoidsnet;
    }

    public function setAlPoidsnet(?string $alPoidsnet): static
    {
        $this->alPoidsnet = $alPoidsnet;

        return $this;
    }

    public function getAlPoidsbrut(): ?string
    {
        return $this->alPoidsbrut;
    }

    public function setAlPoidsbrut(?string $alPoidsbrut): static
    {
        $this->alPoidsbrut = $alPoidsbrut;

        return $this;
    }

    public function getAlRemise01remValeur(): ?string
    {
        return $this->alRemise01remValeur;
    }

    public function setAlRemise01remValeur(?string $alRemise01remValeur): static
    {
        $this->alRemise01remValeur = $alRemise01remValeur;

        return $this;
    }

    public function getAlRemise01remType(): ?int
    {
        return $this->alRemise01remType;
    }

    public function setAlRemise01remType(?int $alRemise01remType): static
    {
        $this->alRemise01remType = $alRemise01remType;

        return $this;
    }

    public function getAlRemise02remValeur(): ?string
    {
        return $this->alRemise02remValeur;
    }

    public function setAlRemise02remValeur(?string $alRemise02remValeur): static
    {
        $this->alRemise02remValeur = $alRemise02remValeur;

        return $this;
    }

    public function getAlRemise02remType(): ?int
    {
        return $this->alRemise02remType;
    }

    public function setAlRemise02remType(?int $alRemise02remType): static
    {
        $this->alRemise02remType = $alRemise02remType;

        return $this;
    }

    public function getAlRemise03remValeur(): ?string
    {
        return $this->alRemise03remValeur;
    }

    public function setAlRemise03remValeur(?string $alRemise03remValeur): static
    {
        $this->alRemise03remValeur = $alRemise03remValeur;

        return $this;
    }

    public function getAlRemise03remType(): ?int
    {
        return $this->alRemise03remType;
    }

    public function setAlRemise03remType(?int $alRemise03remType): static
    {
        $this->alRemise03remType = $alRemise03remType;

        return $this;
    }

    public function getAlPrixunitaire(): ?string
    {
        return $this->alPrixunitaire;
    }

    public function setAlPrixunitaire(?string $alPrixunitaire): static
    {
        $this->alPrixunitaire = $alPrixunitaire;

        return $this;
    }

    public function getAlTaxe1(): ?string
    {
        return $this->alTaxe1;
    }

    public function setAlTaxe1(?string $alTaxe1): static
    {
        $this->alTaxe1 = $alTaxe1;

        return $this;
    }

    public function getAlTypetaux1(): ?int
    {
        return $this->alTypetaux1;
    }

    public function setAlTypetaux1(?int $alTypetaux1): static
    {
        $this->alTypetaux1 = $alTypetaux1;

        return $this;
    }

    public function getAlTypetaxe1(): ?int
    {
        return $this->alTypetaxe1;
    }

    public function setAlTypetaxe1(?int $alTypetaxe1): static
    {
        $this->alTypetaxe1 = $alTypetaxe1;

        return $this;
    }

    public function getAlTaxe2(): ?string
    {
        return $this->alTaxe2;
    }

    public function setAlTaxe2(?string $alTaxe2): static
    {
        $this->alTaxe2 = $alTaxe2;

        return $this;
    }

    public function getAlTypetaux2(): ?int
    {
        return $this->alTypetaux2;
    }

    public function setAlTypetaux2(?int $alTypetaux2): static
    {
        $this->alTypetaux2 = $alTypetaux2;

        return $this;
    }

    public function getAlTypetaxe2(): ?int
    {
        return $this->alTypetaxe2;
    }

    public function setAlTypetaxe2(?int $alTypetaxe2): static
    {
        $this->alTypetaxe2 = $alTypetaxe2;

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

    public function getAlTtc(): ?int
    {
        return $this->alTtc;
    }

    public function setAlTtc(?int $alTtc): static
    {
        $this->alTtc = $alTtc;

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

    public function getAlPudevise(): ?string
    {
        return $this->alPudevise;
    }

    public function setAlPudevise(?string $alPudevise): static
    {
        $this->alPudevise = $alPudevise;

        return $this;
    }

    public function getAlPuttc(): ?string
    {
        return $this->alPuttc;
    }

    public function setAlPuttc(?string $alPuttc): static
    {
        $this->alPuttc = $alPuttc;

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

    public function getAlTaxe3(): ?string
    {
        return $this->alTaxe3;
    }

    public function setAlTaxe3(?string $alTaxe3): static
    {
        $this->alTaxe3 = $alTaxe3;

        return $this;
    }

    public function getAlTypetaux3(): ?int
    {
        return $this->alTypetaux3;
    }

    public function setAlTypetaux3(?int $alTypetaux3): static
    {
        $this->alTypetaux3 = $alTypetaux3;

        return $this;
    }

    public function getAlTypetaxe3(): ?int
    {
        return $this->alTypetaxe3;
    }

    public function setAlTypetaxe3(?int $alTypetaxe3): static
    {
        $this->alTypetaxe3 = $alTypetaxe3;

        return $this;
    }

    public function getAlPeriod(): ?int
    {
        return $this->alPeriod;
    }

    public function setAlPeriod(?int $alPeriod): static
    {
        $this->alPeriod = $alPeriod;

        return $this;
    }

    public function getAlDebut(): ?\DateTimeInterface
    {
        return $this->alDebut;
    }

    public function setAlDebut(?\DateTimeInterface $alDebut): static
    {
        $this->alDebut = $alDebut;

        return $this;
    }

    public function getAlFin(): ?\DateTimeInterface
    {
        return $this->alFin;
    }

    public function setAlFin(?\DateTimeInterface $alFin): static
    {
        $this->alFin = $alFin;

        return $this;
    }

    public function getAlGestannee(): ?int
    {
        return $this->alGestannee;
    }

    public function setAlGestannee(?int $alGestannee): static
    {
        $this->alGestannee = $alGestannee;

        return $this;
    }

    public function getAlProrata(): ?int
    {
        return $this->alProrata;
    }

    public function setAlProrata(?int $alProrata): static
    {
        $this->alProrata = $alProrata;

        return $this;
    }

    public function getAlReconduction(): ?int
    {
        return $this->alReconduction;
    }

    public function setAlReconduction(?int $alReconduction): static
    {
        $this->alReconduction = $alReconduction;

        return $this;
    }

    public function getAlPrixru(): ?string
    {
        return $this->alPrixru;
    }

    public function setAlPrixru(?string $alPrixru): static
    {
        $this->alPrixru = $alPrixru;

        return $this;
    }

    public function getAlCmup(): ?string
    {
        return $this->alCmup;
    }

    public function setAlCmup(?string $alCmup): static
    {
        $this->alCmup = $alCmup;

        return $this;
    }

    public function getAlValorise(): ?int
    {
        return $this->alValorise;
    }

    public function setAlValorise(?int $alValorise): static
    {
        $this->alValorise = $alValorise;

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

    public function getAcRefclient(): ?string
    {
        return $this->acRefclient;
    }

    public function setAcRefclient(?string $acRefclient): static
    {
        $this->acRefclient = $acRefclient;

        return $this;
    }

    public function getAlMontantht(): ?string
    {
        return $this->alMontantht;
    }

    public function setAlMontantht(?string $alMontantht): static
    {
        $this->alMontantht = $alMontantht;

        return $this;
    }

    public function getAlMontantttc(): ?string
    {
        return $this->alMontantttc;
    }

    public function setAlMontantttc(?string $alMontantttc): static
    {
        $this->alMontantttc = $alMontantttc;

        return $this;
    }

    public function getAlFactpoids(): ?int
    {
        return $this->alFactpoids;
    }

    public function setAlFactpoids(?int $alFactpoids): static
    {
        $this->alFactpoids = $alFactpoids;

        return $this;
    }

    public function getAlEscompte(): ?int
    {
        return $this->alEscompte;
    }

    public function setAlEscompte(?int $alEscompte): static
    {
        $this->alEscompte = $alEscompte;

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

    public function getAlQteressource(): ?int
    {
        return $this->alQteressource;
    }

    public function setAlQteressource(?int $alQteressource): static
    {
        $this->alQteressource = $alQteressource;

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

    public function getAlNo(): ?int
    {
        return $this->alNo;
    }

    public function setAlNo(?int $alNo): static
    {
        $this->alNo = $alNo;

        return $this;
    }

    public function getAlCodetaxe1(): ?string
    {
        return $this->alCodetaxe1;
    }

    public function setAlCodetaxe1(?string $alCodetaxe1): static
    {
        $this->alCodetaxe1 = $alCodetaxe1;

        return $this;
    }

    public function getAlCodetaxe2(): ?string
    {
        return $this->alCodetaxe2;
    }

    public function setAlCodetaxe2(?string $alCodetaxe2): static
    {
        $this->alCodetaxe2 = $alCodetaxe2;

        return $this;
    }

    public function getAlCodetaxe3(): ?string
    {
        return $this->alCodetaxe3;
    }

    public function setAlCodetaxe3(?string $alCodetaxe3): static
    {
        $this->alCodetaxe3 = $alCodetaxe3;

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

    public function getAlNosoustotal(): ?int
    {
        return $this->alNosoustotal;
    }

    public function setAlNosoustotal(?int $alNosoustotal): static
    {
        $this->alNosoustotal = $alNosoustotal;

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
