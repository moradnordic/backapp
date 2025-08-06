<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FFamilleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FAMILLE')]
#[ORM\UniqueConstraint(name: 'IFA_CODE', columns: ['FA_Type'])]
#[ORM\Index(name: 'IFA_TYPE', columns: ['cbFA_CodeFamille'])]
#[ORM\Index(name: 'IFA_INTITULE', columns: ['FA_Type'])]
#[ORM\Index(name: 'IFA_CENTRAL', columns: ['cbFA_CodeFamille'])]
#[ORM\Index(name: 'IFA_EMPL1', columns: ['cbFA_CodeFamille'])]
#[ORM\Index(name: 'IFA_EMPL2', columns: ['cbFA_CodeFamille'])]
#[ORM\Index(name: 'IFA_EMPL3', columns: ['cbFA_CodeFamille'])]
#[ORM\Index(name: 'IFA_EMPL4', columns: ['cbFA_CodeFamille'])]
#[ORM\Index(name: 'FKIA_F_FAMILLE_CL_No1', columns: ['cbCL_No1'])]
#[ORM\Index(name: 'FKIA_F_FAMILLE_CL_No2', columns: ['cbCL_No2'])]
#[ORM\Index(name: 'FKIA_F_FAMILLE_CL_No3', columns: ['cbCL_No3'])]
#[ORM\Index(name: 'FKIA_F_FAMILLE_CL_No4', columns: ['cbCL_No4'])]
#[ORM\Entity(repositoryClass: FFamilleRepository::class)]
class FFamille
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FA_CodeFamille", length: 11)]
    private ?string $faCodefamille = null;

    #[ORM\Column(name: "cbFA_CodeFamille", type: Types::BINARY, nullable: true)]
    private $cbfaCodefamille = null;

    #[ORM\Column(name: "FA_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faType = null;

    #[ORM\Column(name: "FA_Intitule", length: 35, nullable: true)]
    private ?string $faIntitule = null;

    #[ORM\Column(name: "cbFA_Intitule", type: Types::BINARY, nullable: true)]
    private $cbfaIntitule = null;

    #[ORM\Column(name: "FA_UniteVen", type: Types::SMALLINT, nullable: true)]
    private ?int $faUniteven = null;

    #[ORM\Column(name: "FA_Coef", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faCoef = null;

    #[ORM\Column(name: "FA_SuiviStock", type: Types::SMALLINT, nullable: true)]
    private ?int $faSuivistock = null;

    #[ORM\Column(name: "FA_Garantie", type: Types::SMALLINT, nullable: true)]
    private ?int $faGarantie = null;

    #[ORM\Column(name: "FA_Central", length: 11, nullable: true)]
    private ?string $faCentral = null;

    #[ORM\Column(name: "cbFA_Central", type: Types::BINARY, nullable: true)]
    private $cbfaCentral = null;

    #[ORM\Column(name: "FA_Stat01", length: 21, nullable: true)]
    private ?string $faStat01 = null;

    #[ORM\Column(name: "FA_Stat02", length: 21, nullable: true)]
    private ?string $faStat02 = null;

    #[ORM\Column(name: "FA_Stat03", length: 21, nullable: true)]
    private ?string $faStat03 = null;

    #[ORM\Column(name: "FA_Stat04", length: 21, nullable: true)]
    private ?string $faStat04 = null;

    #[ORM\Column(name: "FA_Stat05", length: 21, nullable: true)]
    private ?string $faStat05 = null;

    #[ORM\Column(name: "FA_CodeFiscal", length: 25, nullable: true)]
    private ?string $faCodefiscal = null;

    #[ORM\Column(name: "FA_Pays", length: 35, nullable: true)]
    private ?string $faPays = null;

    #[ORM\Column(name: "FA_UnitePoids", type: Types::SMALLINT, nullable: true)]
    private ?int $faUnitepoids = null;

    #[ORM\Column(name: "FA_Escompte", type: Types::SMALLINT, nullable: true)]
    private ?int $faEscompte = null;

    #[ORM\Column(name: "FA_Delai", type: Types::SMALLINT, nullable: true)]
    private ?int $faDelai = null;

    #[ORM\Column(name: "FA_HorsStat", type: Types::SMALLINT, nullable: true)]
    private ?int $faHorsstat = null;

    #[ORM\Column(name: "FA_VteDebit", type: Types::SMALLINT, nullable: true)]
    private ?int $faVtedebit = null;

    #[ORM\Column(name: "FA_NotImp", type: Types::SMALLINT, nullable: true)]
    private ?int $faNotimp = null;

    #[ORM\Column(name: "FA_Frais01FR_Denomination", length: 21, nullable: true)]
    private ?string $faFrais01frDenomination = null;

    #[ORM\Column(name: "FA_Frais01FR_Rem01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais01frRem01remValeur = null;

    #[ORM\Column(name: "FA_Frais01FR_Rem01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais01frRem01remType = null;

    #[ORM\Column(name: "FA_Frais01FR_Rem02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais01frRem02remValeur = null;

    #[ORM\Column(name: "FA_Frais01FR_Rem02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais01frRem02remType = null;

    #[ORM\Column(name: "FA_Frais01FR_Rem03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais01frRem03remValeur = null;

    #[ORM\Column(name: "FA_Frais01FR_Rem03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais01frRem03remType = null;

    #[ORM\Column(name: "FA_Frais02FR_Denomination", length: 21, nullable: true)]
    private ?string $faFrais02frDenomination = null;

    #[ORM\Column(name: "FA_Frais02FR_Rem01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais02frRem01remValeur = null;

    #[ORM\Column(name: "FA_Frais02FR_Rem01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais02frRem01remType = null;

    #[ORM\Column(name: "FA_Frais02FR_Rem02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais02frRem02remValeur = null;

    #[ORM\Column(name: "FA_Frais02FR_Rem02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais02frRem02remType = null;

    #[ORM\Column(name: "FA_Frais02FR_Rem03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais02frRem03remValeur = null;

    #[ORM\Column(name: "FA_Frais02FR_Rem03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais02frRem03remType = null;

    #[ORM\Column(name: "FA_Frais03FR_Denomination", length: 21, nullable: true)]
    private ?string $faFrais03frDenomination = null;

    #[ORM\Column(name: "FA_Frais03FR_Rem01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais03frRem01remValeur = null;

    #[ORM\Column(name: "FA_Frais03FR_Rem01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais03frRem01remType = null;

    #[ORM\Column(name: "FA_Frais03FR_Rem02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais03frRem02remValeur = null;

    #[ORM\Column(name: "FA_Frais03FR_Rem02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais03frRem02remType = null;

    #[ORM\Column(name: "FA_Frais03FR_Rem03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $faFrais03frRem03remValeur = null;

    #[ORM\Column(name: "FA_Frais03FR_Rem03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $faFrais03frRem03remType = null;

    #[ORM\Column(name: "FA_Contremarque", type: Types::SMALLINT, nullable: true)]
    private ?int $faContremarque = null;

    #[ORM\Column(name: "FA_FactPoids", type: Types::SMALLINT, nullable: true)]
    private ?int $faFactpoids = null;

    #[ORM\Column(name: "FA_FactForfait", type: Types::SMALLINT, nullable: true)]
    private ?int $faFactforfait = null;

    #[ORM\Column(name: "FA_Publie", type: Types::SMALLINT, nullable: true)]
    private ?int $faPublie = null;

    #[ORM\Column(name: "FA_RacineRef", length: 19, nullable: true)]
    private ?string $faRacineref = null;

    #[ORM\Column(name: "FA_RacineCB", length: 19, nullable: true)]
    private ?string $faRacinecb = null;

    #[ORM\Column(name: "CL_No1", nullable: true)]
    private ?int $clNo1 = null;

    #[ORM\Column(name: "cbCL_No1", nullable: true)]
    private ?int $cbclNo1 = null;

    #[ORM\Column(name: "CL_No2", nullable: true)]
    private ?int $clNo2 = null;

    #[ORM\Column(name: "cbCL_No2", nullable: true)]
    private ?int $cbclNo2 = null;

    #[ORM\Column(name: "CL_No3", nullable: true)]
    private ?int $clNo3 = null;

    #[ORM\Column(name: "cbCL_No3", nullable: true)]
    private ?int $cbclNo3 = null;

    #[ORM\Column(name: "CL_No4", nullable: true)]
    private ?int $clNo4 = null;

    #[ORM\Column(name: "cbCL_No4", nullable: true)]
    private ?int $cbclNo4 = null;

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

    #[ORM\Column(name: "FA_Nature", type: Types::SMALLINT, nullable: true)]
    private ?int $faNature = null;

    #[ORM\Column(name: "FA_NbColis", type: Types::SMALLINT, nullable: true)]
    private ?int $faNbcolis = null;

    #[ORM\Column(name: "FA_SousTraitance", type: Types::SMALLINT, nullable: true)]
    private ?int $faSoustraitance = null;

    #[ORM\Column(name: "FA_Fictif", type: Types::SMALLINT, nullable: true)]
    private ?int $faFictif = null;

    #[ORM\Column(name: "FA_Criticite", type: Types::SMALLINT, nullable: true)]
    private ?int $faCriticite = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getFaCodefamille(): ?string
    {
        return $this->faCodefamille;
    }

    public function setFaCodefamille(string $faCodefamille): static
    {
        $this->faCodefamille = $faCodefamille;

        return $this;
    }

    public function getCbfaCodefamille()
    {
        return $this->cbfaCodefamille;
    }

    public function setCbfaCodefamille($cbfaCodefamille): static
    {
        $this->cbfaCodefamille = $cbfaCodefamille;

        return $this;
    }

    public function getFaType(): ?int
    {
        return $this->faType;
    }

    public function setFaType(?int $faType): static
    {
        $this->faType = $faType;

        return $this;
    }

    public function getFaIntitule(): ?string
    {
        return $this->faIntitule;
    }

    public function setFaIntitule(?string $faIntitule): static
    {
        $this->faIntitule = $faIntitule;

        return $this;
    }

    public function getCbfaIntitule()
    {
        return $this->cbfaIntitule;
    }

    public function setCbfaIntitule($cbfaIntitule): static
    {
        $this->cbfaIntitule = $cbfaIntitule;

        return $this;
    }

    public function getFaUniteven(): ?int
    {
        return $this->faUniteven;
    }

    public function setFaUniteven(?int $faUniteven): static
    {
        $this->faUniteven = $faUniteven;

        return $this;
    }

    public function getFaCoef(): ?string
    {
        return $this->faCoef;
    }

    public function setFaCoef(?string $faCoef): static
    {
        $this->faCoef = $faCoef;

        return $this;
    }

    public function getFaSuivistock(): ?int
    {
        return $this->faSuivistock;
    }

    public function setFaSuivistock(?int $faSuivistock): static
    {
        $this->faSuivistock = $faSuivistock;

        return $this;
    }

    public function getFaGarantie(): ?int
    {
        return $this->faGarantie;
    }

    public function setFaGarantie(?int $faGarantie): static
    {
        $this->faGarantie = $faGarantie;

        return $this;
    }

    public function getFaCentral(): ?string
    {
        return $this->faCentral;
    }

    public function setFaCentral(?string $faCentral): static
    {
        $this->faCentral = $faCentral;

        return $this;
    }

    public function getCbfaCentral()
    {
        return $this->cbfaCentral;
    }

    public function setCbfaCentral($cbfaCentral): static
    {
        $this->cbfaCentral = $cbfaCentral;

        return $this;
    }

    public function getFaStat01(): ?string
    {
        return $this->faStat01;
    }

    public function setFaStat01(?string $faStat01): static
    {
        $this->faStat01 = $faStat01;

        return $this;
    }

    public function getFaStat02(): ?string
    {
        return $this->faStat02;
    }

    public function setFaStat02(?string $faStat02): static
    {
        $this->faStat02 = $faStat02;

        return $this;
    }

    public function getFaStat03(): ?string
    {
        return $this->faStat03;
    }

    public function setFaStat03(?string $faStat03): static
    {
        $this->faStat03 = $faStat03;

        return $this;
    }

    public function getFaStat04(): ?string
    {
        return $this->faStat04;
    }

    public function setFaStat04(?string $faStat04): static
    {
        $this->faStat04 = $faStat04;

        return $this;
    }

    public function getFaStat05(): ?string
    {
        return $this->faStat05;
    }

    public function setFaStat05(?string $faStat05): static
    {
        $this->faStat05 = $faStat05;

        return $this;
    }

    public function getFaCodefiscal(): ?string
    {
        return $this->faCodefiscal;
    }

    public function setFaCodefiscal(?string $faCodefiscal): static
    {
        $this->faCodefiscal = $faCodefiscal;

        return $this;
    }

    public function getFaPays(): ?string
    {
        return $this->faPays;
    }

    public function setFaPays(?string $faPays): static
    {
        $this->faPays = $faPays;

        return $this;
    }

    public function getFaUnitepoids(): ?int
    {
        return $this->faUnitepoids;
    }

    public function setFaUnitepoids(?int $faUnitepoids): static
    {
        $this->faUnitepoids = $faUnitepoids;

        return $this;
    }

    public function getFaEscompte(): ?int
    {
        return $this->faEscompte;
    }

    public function setFaEscompte(?int $faEscompte): static
    {
        $this->faEscompte = $faEscompte;

        return $this;
    }

    public function getFaDelai(): ?int
    {
        return $this->faDelai;
    }

    public function setFaDelai(?int $faDelai): static
    {
        $this->faDelai = $faDelai;

        return $this;
    }

    public function getFaHorsstat(): ?int
    {
        return $this->faHorsstat;
    }

    public function setFaHorsstat(?int $faHorsstat): static
    {
        $this->faHorsstat = $faHorsstat;

        return $this;
    }

    public function getFaVtedebit(): ?int
    {
        return $this->faVtedebit;
    }

    public function setFaVtedebit(?int $faVtedebit): static
    {
        $this->faVtedebit = $faVtedebit;

        return $this;
    }

    public function getFaNotimp(): ?int
    {
        return $this->faNotimp;
    }

    public function setFaNotimp(?int $faNotimp): static
    {
        $this->faNotimp = $faNotimp;

        return $this;
    }

    public function getFaFrais01frDenomination(): ?string
    {
        return $this->faFrais01frDenomination;
    }

    public function setFaFrais01frDenomination(?string $faFrais01frDenomination): static
    {
        $this->faFrais01frDenomination = $faFrais01frDenomination;

        return $this;
    }

    public function getFaFrais01frRem01remValeur(): ?string
    {
        return $this->faFrais01frRem01remValeur;
    }

    public function setFaFrais01frRem01remValeur(?string $faFrais01frRem01remValeur): static
    {
        $this->faFrais01frRem01remValeur = $faFrais01frRem01remValeur;

        return $this;
    }

    public function getFaFrais01frRem01remType(): ?int
    {
        return $this->faFrais01frRem01remType;
    }

    public function setFaFrais01frRem01remType(?int $faFrais01frRem01remType): static
    {
        $this->faFrais01frRem01remType = $faFrais01frRem01remType;

        return $this;
    }

    public function getFaFrais01frRem02remValeur(): ?string
    {
        return $this->faFrais01frRem02remValeur;
    }

    public function setFaFrais01frRem02remValeur(?string $faFrais01frRem02remValeur): static
    {
        $this->faFrais01frRem02remValeur = $faFrais01frRem02remValeur;

        return $this;
    }

    public function getFaFrais01frRem02remType(): ?int
    {
        return $this->faFrais01frRem02remType;
    }

    public function setFaFrais01frRem02remType(?int $faFrais01frRem02remType): static
    {
        $this->faFrais01frRem02remType = $faFrais01frRem02remType;

        return $this;
    }

    public function getFaFrais01frRem03remValeur(): ?string
    {
        return $this->faFrais01frRem03remValeur;
    }

    public function setFaFrais01frRem03remValeur(?string $faFrais01frRem03remValeur): static
    {
        $this->faFrais01frRem03remValeur = $faFrais01frRem03remValeur;

        return $this;
    }

    public function getFaFrais01frRem03remType(): ?int
    {
        return $this->faFrais01frRem03remType;
    }

    public function setFaFrais01frRem03remType(?int $faFrais01frRem03remType): static
    {
        $this->faFrais01frRem03remType = $faFrais01frRem03remType;

        return $this;
    }

    public function getFaFrais02frDenomination(): ?string
    {
        return $this->faFrais02frDenomination;
    }

    public function setFaFrais02frDenomination(?string $faFrais02frDenomination): static
    {
        $this->faFrais02frDenomination = $faFrais02frDenomination;

        return $this;
    }

    public function getFaFrais02frRem01remValeur(): ?string
    {
        return $this->faFrais02frRem01remValeur;
    }

    public function setFaFrais02frRem01remValeur(?string $faFrais02frRem01remValeur): static
    {
        $this->faFrais02frRem01remValeur = $faFrais02frRem01remValeur;

        return $this;
    }

    public function getFaFrais02frRem01remType(): ?int
    {
        return $this->faFrais02frRem01remType;
    }

    public function setFaFrais02frRem01remType(?int $faFrais02frRem01remType): static
    {
        $this->faFrais02frRem01remType = $faFrais02frRem01remType;

        return $this;
    }

    public function getFaFrais02frRem02remValeur(): ?string
    {
        return $this->faFrais02frRem02remValeur;
    }

    public function setFaFrais02frRem02remValeur(?string $faFrais02frRem02remValeur): static
    {
        $this->faFrais02frRem02remValeur = $faFrais02frRem02remValeur;

        return $this;
    }

    public function getFaFrais02frRem02remType(): ?int
    {
        return $this->faFrais02frRem02remType;
    }

    public function setFaFrais02frRem02remType(?int $faFrais02frRem02remType): static
    {
        $this->faFrais02frRem02remType = $faFrais02frRem02remType;

        return $this;
    }

    public function getFaFrais02frRem03remValeur(): ?string
    {
        return $this->faFrais02frRem03remValeur;
    }

    public function setFaFrais02frRem03remValeur(?string $faFrais02frRem03remValeur): static
    {
        $this->faFrais02frRem03remValeur = $faFrais02frRem03remValeur;

        return $this;
    }

    public function getFaFrais02frRem03remType(): ?int
    {
        return $this->faFrais02frRem03remType;
    }

    public function setFaFrais02frRem03remType(?int $faFrais02frRem03remType): static
    {
        $this->faFrais02frRem03remType = $faFrais02frRem03remType;

        return $this;
    }

    public function getFaFrais03frDenomination(): ?string
    {
        return $this->faFrais03frDenomination;
    }

    public function setFaFrais03frDenomination(?string $faFrais03frDenomination): static
    {
        $this->faFrais03frDenomination = $faFrais03frDenomination;

        return $this;
    }

    public function getFaFrais03frRem01remValeur(): ?string
    {
        return $this->faFrais03frRem01remValeur;
    }

    public function setFaFrais03frRem01remValeur(?string $faFrais03frRem01remValeur): static
    {
        $this->faFrais03frRem01remValeur = $faFrais03frRem01remValeur;

        return $this;
    }

    public function getFaFrais03frRem01remType(): ?int
    {
        return $this->faFrais03frRem01remType;
    }

    public function setFaFrais03frRem01remType(?int $faFrais03frRem01remType): static
    {
        $this->faFrais03frRem01remType = $faFrais03frRem01remType;

        return $this;
    }

    public function getFaFrais03frRem02remValeur(): ?string
    {
        return $this->faFrais03frRem02remValeur;
    }

    public function setFaFrais03frRem02remValeur(?string $faFrais03frRem02remValeur): static
    {
        $this->faFrais03frRem02remValeur = $faFrais03frRem02remValeur;

        return $this;
    }

    public function getFaFrais03frRem02remType(): ?int
    {
        return $this->faFrais03frRem02remType;
    }

    public function setFaFrais03frRem02remType(?int $faFrais03frRem02remType): static
    {
        $this->faFrais03frRem02remType = $faFrais03frRem02remType;

        return $this;
    }

    public function getFaFrais03frRem03remValeur(): ?string
    {
        return $this->faFrais03frRem03remValeur;
    }

    public function setFaFrais03frRem03remValeur(?string $faFrais03frRem03remValeur): static
    {
        $this->faFrais03frRem03remValeur = $faFrais03frRem03remValeur;

        return $this;
    }

    public function getFaFrais03frRem03remType(): ?int
    {
        return $this->faFrais03frRem03remType;
    }

    public function setFaFrais03frRem03remType(?int $faFrais03frRem03remType): static
    {
        $this->faFrais03frRem03remType = $faFrais03frRem03remType;

        return $this;
    }

    public function getFaContremarque(): ?int
    {
        return $this->faContremarque;
    }

    public function setFaContremarque(?int $faContremarque): static
    {
        $this->faContremarque = $faContremarque;

        return $this;
    }

    public function getFaFactpoids(): ?int
    {
        return $this->faFactpoids;
    }

    public function setFaFactpoids(?int $faFactpoids): static
    {
        $this->faFactpoids = $faFactpoids;

        return $this;
    }

    public function getFaFactforfait(): ?int
    {
        return $this->faFactforfait;
    }

    public function setFaFactforfait(?int $faFactforfait): static
    {
        $this->faFactforfait = $faFactforfait;

        return $this;
    }

    public function getFaPublie(): ?int
    {
        return $this->faPublie;
    }

    public function setFaPublie(?int $faPublie): static
    {
        $this->faPublie = $faPublie;

        return $this;
    }

    public function getFaRacineref(): ?string
    {
        return $this->faRacineref;
    }

    public function setFaRacineref(?string $faRacineref): static
    {
        $this->faRacineref = $faRacineref;

        return $this;
    }

    public function getFaRacinecb(): ?string
    {
        return $this->faRacinecb;
    }

    public function setFaRacinecb(?string $faRacinecb): static
    {
        $this->faRacinecb = $faRacinecb;

        return $this;
    }

    public function getClNo1(): ?int
    {
        return $this->clNo1;
    }

    public function setClNo1(?int $clNo1): static
    {
        $this->clNo1 = $clNo1;

        return $this;
    }

    public function getCbclNo1(): ?int
    {
        return $this->cbclNo1;
    }

    public function setCbclNo1(?int $cbclNo1): static
    {
        $this->cbclNo1 = $cbclNo1;

        return $this;
    }

    public function getClNo2(): ?int
    {
        return $this->clNo2;
    }

    public function setClNo2(?int $clNo2): static
    {
        $this->clNo2 = $clNo2;

        return $this;
    }

    public function getCbclNo2(): ?int
    {
        return $this->cbclNo2;
    }

    public function setCbclNo2(?int $cbclNo2): static
    {
        $this->cbclNo2 = $cbclNo2;

        return $this;
    }

    public function getClNo3(): ?int
    {
        return $this->clNo3;
    }

    public function setClNo3(?int $clNo3): static
    {
        $this->clNo3 = $clNo3;

        return $this;
    }

    public function getCbclNo3(): ?int
    {
        return $this->cbclNo3;
    }

    public function setCbclNo3(?int $cbclNo3): static
    {
        $this->cbclNo3 = $cbclNo3;

        return $this;
    }

    public function getClNo4(): ?int
    {
        return $this->clNo4;
    }

    public function setClNo4(?int $clNo4): static
    {
        $this->clNo4 = $clNo4;

        return $this;
    }

    public function getCbclNo4(): ?int
    {
        return $this->cbclNo4;
    }

    public function setCbclNo4(?int $cbclNo4): static
    {
        $this->cbclNo4 = $cbclNo4;

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

    public function getFaNature(): ?int
    {
        return $this->faNature;
    }

    public function setFaNature(?int $faNature): static
    {
        $this->faNature = $faNature;

        return $this;
    }

    public function getFaNbcolis(): ?int
    {
        return $this->faNbcolis;
    }

    public function setFaNbcolis(?int $faNbcolis): static
    {
        $this->faNbcolis = $faNbcolis;

        return $this;
    }

    public function getFaSoustraitance(): ?int
    {
        return $this->faSoustraitance;
    }

    public function setFaSoustraitance(?int $faSoustraitance): static
    {
        $this->faSoustraitance = $faSoustraitance;

        return $this;
    }

    public function getFaFictif(): ?int
    {
        return $this->faFictif;
    }

    public function setFaFictif(?int $faFictif): static
    {
        $this->faFictif = $faFictif;

        return $this;
    }

    public function getFaCriticite(): ?int
    {
        return $this->faCriticite;
    }

    public function setFaCriticite(?int $faCriticite): static
    {
        $this->faCriticite = $faCriticite;

        return $this;
    }
}
