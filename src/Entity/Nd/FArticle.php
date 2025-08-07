<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTICLE')]
#[ORM\UniqueConstraint(name: 'IAR_REF', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_DESIGN', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_FAMILLE', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_RACC', columns: ['cbAR_Raccourci'])]
#[ORM\Index(name: 'IAR_CBARRE', columns: ['cbAR_CodeBarre'])]
#[ORM\Index(name: 'IAR_SUBSTITUT', columns: ['cbAR_Substitut'])]
#[ORM\Index(name: 'IAR_REFSOM', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_DESIGNSOM', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_FAMILLESOM', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_REFNOMENCL', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_DESIGNNOMENCL', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_EMPL1', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_EMPL2', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_EMPL3', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_EMPL4', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_TYPEREF', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_EDICODE', columns: ['cbAR_EdiCode'])]
#[ORM\Index(name: 'IAR_SOMEMPL1', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_SOMEMPL2', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_SOMEMPL3', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAR_SOMEMPL4', columns: ['cbAR_Ref'])]
#[ORM\UniqueConstraint(name: 'UKA_F_ARTICLE_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ARTICLE_AR_Ref', columns: ['AR_Substitut'])]
#[ORM\Index(name: 'FKIA_F_ARTICLE_CL_No1', columns: ['cbCL_No1'])]
#[ORM\Index(name: 'FKIA_F_ARTICLE_CL_No2', columns: ['cbCL_No2'])]
#[ORM\Index(name: 'FKIA_F_ARTICLE_CL_No3', columns: ['cbCL_No3'])]
#[ORM\Index(name: 'FKIA_F_ARTICLE_CL_No4', columns: ['cbCL_No4'])]
#[ORM\Index(name: 'FKIA_F_ARTICLE_RP_Code', columns: ['RP_CodeDefaut'])]
#[ORM\Entity(repositoryClass: FArticleRepository::class)]
class FArticle
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AR_Design", length: 69, nullable: true)]
    private ?string $arDesign = null;

    #[ORM\Column(name: "cbAR_Design", type: Types::BINARY, nullable: true)]
    private $cbarDesign = null;

    #[ORM\Column(name: "FA_CodeFamille", length: 11)]
    private ?string $faCodefamille = null;

    #[ORM\Column(name: "cbFA_CodeFamille", type: Types::BINARY, nullable: true)]
    private $cbfaCodefamille = null;

    #[ORM\Column(name: "AR_Substitut", length: 19, nullable: true)]
    private ?string $arSubstitut = null;

    #[ORM\Column(name: "cbAR_Substitut", type: Types::BINARY, nullable: true)]
    private $cbarSubstitut = null;

    #[ORM\Column(name: "AR_Raccourci", length: 7, nullable: true)]
    private ?string $arRaccourci = null;

    #[ORM\Column(name: "cbAR_Raccourci", type: Types::BINARY, nullable: true)]
    private $cbarRaccourci = null;

    #[ORM\Column(name: "AR_Garantie", type: Types::SMALLINT, nullable: true)]
    private ?int $arGarantie = null;

    #[ORM\Column(name: "AR_UnitePoids", type: Types::SMALLINT, nullable: true)]
    private ?int $arUnitepoids = null;

    #[ORM\Column(name: "AR_PoidsNet", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arPoidsnet = null;

    #[ORM\Column(name: "AR_PoidsBrut", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arPoidsbrut = null;

    #[ORM\Column(name: "AR_UniteVen", type: Types::SMALLINT, nullable: true)]
    private ?int $arUniteven = null;

    #[ORM\Column(name: "AR_PrixAch", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arPrixach = null;

    #[ORM\Column(name: "AR_Coef", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arCoef = null;

    #[ORM\Column(name: "AR_PrixVen", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arPrixven = null;

    #[ORM\Column(name: "AR_PrixTTC", type: Types::SMALLINT, nullable: true)]
    private ?int $arPrixttc = null;

    #[ORM\Column(name: "AR_Gamme1", type: Types::SMALLINT, nullable: true)]
    private ?int $arGamme1 = null;

    #[ORM\Column(name: "AR_Gamme2", type: Types::SMALLINT, nullable: true)]
    private ?int $arGamme2 = null;

    #[ORM\Column(name: "AR_SuiviStock", type: Types::SMALLINT, nullable: true)]
    private ?int $arSuivistock = null;

    #[ORM\Column(name: "AR_Nomencl", type: Types::SMALLINT, nullable: true)]
    private ?int $arNomencl = null;

    #[ORM\Column(name: "AR_Stat01", length: 21, nullable: true)]
    private ?string $arStat01 = null;

    #[ORM\Column(name: "AR_Stat02", length: 21, nullable: true)]
    private ?string $arStat02 = null;

    #[ORM\Column(name: "AR_Stat03", length: 21, nullable: true)]
    private ?string $arStat03 = null;

    #[ORM\Column(name: "AR_Stat04", length: 21, nullable: true)]
    private ?string $arStat04 = null;

    #[ORM\Column(name: "AR_Stat05", length: 21, nullable: true)]
    private ?string $arStat05 = null;

    #[ORM\Column(name: "AR_Escompte", type: Types::SMALLINT, nullable: true)]
    private ?int $arEscompte = null;

    #[ORM\Column(name: "AR_Delai", type: Types::SMALLINT, nullable: true)]
    private ?int $arDelai = null;

    #[ORM\Column(name: "AR_HorsStat", type: Types::SMALLINT, nullable: true)]
    private ?int $arHorsstat = null;

    #[ORM\Column(name: "AR_VteDebit", type: Types::SMALLINT, nullable: true)]
    private ?int $arVtedebit = null;

    #[ORM\Column(name: "AR_NotImp", type: Types::SMALLINT, nullable: true)]
    private ?int $arNotimp = null;

    #[ORM\Column(name: "AR_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $arSommeil = null;

    #[ORM\Column(name: "AR_Langue1", length: 69, nullable: true)]
    private ?string $arLangue1 = null;

    #[ORM\Column(name: "AR_Langue2", length: 69, nullable: true)]
    private ?string $arLangue2 = null;

    #[ORM\Column(name: "AR_CodeBarre", length: 19, nullable: true)]
    private ?string $arCodebarre = null;

    #[ORM\Column(name: "cbAR_CodeBarre", type: Types::BINARY, nullable: true)]
    private $cbarCodebarre = null;

    #[ORM\Column(name: "AR_CodeFiscal", length: 25, nullable: true)]
    private ?string $arCodefiscal = null;

    #[ORM\Column(name: "AR_Pays", length: 35, nullable: true)]
    private ?string $arPays = null;

    #[ORM\Column(name: "AR_Frais01FR_Denomination", length: 21, nullable: true)]
    private ?string $arFrais01frDenomination = null;

    #[ORM\Column(name: "AR_Frais01FR_Rem01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais01frRem01remValeur = null;

    #[ORM\Column(name: "AR_Frais01FR_Rem01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais01frRem01remType = null;

    #[ORM\Column(name: "AR_Frais01FR_Rem02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais01frRem02remValeur = null;

    #[ORM\Column(name: "AR_Frais01FR_Rem02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais01frRem02remType = null;

    #[ORM\Column(name: "AR_Frais01FR_Rem03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais01frRem03remValeur = null;

    #[ORM\Column(name: "AR_Frais01FR_Rem03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais01frRem03remType = null;

    #[ORM\Column(name: "AR_Frais02FR_Denomination", length: 21, nullable: true)]
    private ?string $arFrais02frDenomination = null;

    #[ORM\Column(name: "AR_Frais02FR_Rem01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais02frRem01remValeur = null;

    #[ORM\Column(name: "AR_Frais02FR_Rem01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais02frRem01remType = null;

    #[ORM\Column(name: "AR_Frais02FR_Rem02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais02frRem02remValeur = null;

    #[ORM\Column(name: "AR_Frais02FR_Rem02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais02frRem02remType = null;

    #[ORM\Column(name: "AR_Frais02FR_Rem03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais02frRem03remValeur = null;

    #[ORM\Column(name: "AR_Frais02FR_Rem03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais02frRem03remType = null;

    #[ORM\Column(name: "AR_Frais03FR_Denomination", length: 21, nullable: true)]
    private ?string $arFrais03frDenomination = null;

    #[ORM\Column(name: "AR_Frais03FR_Rem01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais03frRem01remValeur = null;

    #[ORM\Column(name: "AR_Frais03FR_Rem01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais03frRem01remType = null;

    #[ORM\Column(name: "AR_Frais03FR_Rem02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais03frRem02remValeur = null;

    #[ORM\Column(name: "AR_Frais03FR_Rem02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais03frRem02remType = null;

    #[ORM\Column(name: "AR_Frais03FR_Rem03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arFrais03frRem03remValeur = null;

    #[ORM\Column(name: "AR_Frais03FR_Rem03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arFrais03frRem03remType = null;

    #[ORM\Column(name: "AR_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $arCondition = null;

    #[ORM\Column(name: "AR_PUNet", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arPunet = null;

    #[ORM\Column(name: "AR_Contremarque", type: Types::SMALLINT, nullable: true)]
    private ?int $arContremarque = null;

    #[ORM\Column(name: "AR_FactPoids", type: Types::SMALLINT, nullable: true)]
    private ?int $arFactpoids = null;

    #[ORM\Column(name: "AR_FactForfait", type: Types::SMALLINT, nullable: true)]
    private ?int $arFactforfait = null;

    #[ORM\Column(name: "AR_DateCreation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arDatecreation = null;

    #[ORM\Column(name: "AR_SaisieVar", type: Types::SMALLINT, nullable: true)]
    private ?int $arSaisievar = null;

    #[ORM\Column(name: "AR_Transfere", type: Types::SMALLINT, nullable: true)]
    private ?int $arTransfere = null;

    #[ORM\Column(name: "AR_Publie", type: Types::SMALLINT, nullable: true)]
    private ?int $arPublie = null;

    #[ORM\Column(name: "AR_DateModif", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arDatemodif = null;

    #[ORM\Column(name: "AR_Photo", length: 259, nullable: true)]
    private ?string $arPhoto = null;

    #[ORM\Column(name: "AR_PrixAchNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arPrixachnouv = null;

    #[ORM\Column(name: "AR_CoefNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arCoefnouv = null;

    #[ORM\Column(name: "AR_PrixVenNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arPrixvennouv = null;

    #[ORM\Column(name: "AR_DateApplication", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arDateapplication = null;

    #[ORM\Column(name: "AR_CoutStd", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arCoutstd = null;

    #[ORM\Column(name: "AR_QteComp", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arQtecomp = null;

    #[ORM\Column(name: "AR_QteOperatoire", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $arQteoperatoire = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "AR_Prevision", type: Types::SMALLINT, nullable: true)]
    private ?int $arPrevision = null;

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

    #[ORM\Column(name: "AR_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $arType = null;

    #[ORM\Column(name: "RP_CodeDefaut", length: 11, nullable: true)]
    private ?string $rpCodedefaut = null;

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

    #[ORM\Column(name: "Face2", length: 21, nullable: true)]
    private ?string $face2 = null;

    #[ORM\Column(name: "largeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $largeur = null;

    #[ORM\Column(name: "longeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $longeur = null;

    #[ORM\Column(name: "epaisseur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $epaisseur = null;

    #[ORM\Column(name: "AR_EdiCode", length: 45, nullable: true)]
    private ?string $arEdicode = null;

    #[ORM\Column(name: "cbAR_EdiCode", type: Types::BINARY, nullable: true)]
    private $cbarEdicode = null;

    #[ORM\Column(name: "AR_Nature", type: Types::SMALLINT, nullable: true)]
    private ?int $arNature = null;

    #[ORM\Column(name: "AR_DelaiFabrication", type: Types::SMALLINT, nullable: true)]
    private ?int $arDelaifabrication = null;

    #[ORM\Column(name: "AR_NbColis", type: Types::SMALLINT, nullable: true)]
    private ?int $arNbcolis = null;

    #[ORM\Column(name: "AR_DelaiPeremption", type: Types::SMALLINT, nullable: true)]
    private ?int $arDelaiperemption = null;

    #[ORM\Column(name: "AR_DelaiSecurite", type: Types::SMALLINT, nullable: true)]
    private ?int $arDelaisecurite = null;

    #[ORM\Column(name: "AR_Fictif", type: Types::SMALLINT, nullable: true)]
    private ?int $arFictif = null;

    #[ORM\Column(name: "AR_SousTraitance", type: Types::SMALLINT, nullable: true)]
    private ?int $arSoustraitance = null;

    #[ORM\Column(name: "AR_TypeLancement", type: Types::SMALLINT, nullable: true)]
    private ?int $arTypelancement = null;

    #[ORM\Column(name: "AR_Cycle", type: Types::SMALLINT, nullable: true)]
    private ?int $arCycle = null;

    #[ORM\Column(name: "AR_Criticite", type: Types::SMALLINT, nullable: true)]
    private ?int $arCriticite = null;

    #[ORM\Column(name: "composant", length: 69, nullable: true)]
    private ?string $composant = null;

    #[ORM\Column(name: "application", length: 21, nullable: true)]
    private ?string $application = null;

    #[ORM\Column(name: "Brillance", length: 21, nullable: true)]
    private ?string $brillance = null;

    #[ORM\Column(name: "solidité", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $solidite = null;

    #[ORM\Column(name: "sechage", length: 21, nullable: true)]
    private ?string $sechage = null;

    #[ORM\Column(name: "[Melanger avec]", length: 69, nullable: true)]
    private ?string $melangerAvec = null;

    #[ORM\Column(name: "[utilisation avec/pour]", length: 69, nullable: true)]
    private ?string $utilisationAvecPour = null;

    #[ORM\Column(name: "[densité]", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $densite = null;

    #[ORM\Column(name: "[code Fournisseur]", length: 69, nullable: true)]
    private ?string $codeFournisseur = null;

    #[ORM\Column(name: "LiensProduit", length: 69, nullable: true)]
    private ?string $liensproduit = null;

    #[ORM\Column(name: "LiensPhotoProduit", length: 69, nullable: true)]
    private ?string $liensphotoproduit = null;

    #[ORM\Column(name: "emplacement", length: 69, nullable: true)]
    private ?string $emplacement = null;

    #[ORM\Column(name: "Finition", length: 21, nullable: true)]
    private ?string $finition = null;

    #[ORM\Column(name: "Face1", length: 21, nullable: true)]
    private ?string $face1 = null;

    #[ORM\Column(name: "[Famille Decor]", length: 21, nullable: true)]
    private ?string $familleDecor = null;

    #[ORM\Column(name: "[Nom Decor]", length: 21, nullable: true)]
    private ?string $nomDecor = null;

    #[ORM\Column(name: "[Code Decor]", length: 21, nullable: true)]
    private ?string $codeDecor = null;


    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
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

    public function getArDesign(): ?string
    {
        return $this->arDesign;
    }

    public function setArDesign(?string $arDesign): static
    {
        $this->arDesign = $arDesign;

        return $this;
    }

    public function getCbarDesign()
    {
        return $this->cbarDesign;
    }

    public function setCbarDesign($cbarDesign): static
    {
        $this->cbarDesign = $cbarDesign;

        return $this;
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

    public function getArSubstitut(): ?string
    {
        return $this->arSubstitut;
    }

    public function setArSubstitut(?string $arSubstitut): static
    {
        $this->arSubstitut = $arSubstitut;

        return $this;
    }

    public function getCbarSubstitut()
    {
        return $this->cbarSubstitut;
    }

    public function setCbarSubstitut($cbarSubstitut): static
    {
        $this->cbarSubstitut = $cbarSubstitut;

        return $this;
    }

    public function getArRaccourci(): ?string
    {
        return $this->arRaccourci;
    }

    public function setArRaccourci(?string $arRaccourci): static
    {
        $this->arRaccourci = $arRaccourci;

        return $this;
    }

    public function getCbarRaccourci()
    {
        return $this->cbarRaccourci;
    }

    public function setCbarRaccourci($cbarRaccourci): static
    {
        $this->cbarRaccourci = $cbarRaccourci;

        return $this;
    }

    public function getArGarantie(): ?int
    {
        return $this->arGarantie;
    }

    public function setArGarantie(?int $arGarantie): static
    {
        $this->arGarantie = $arGarantie;

        return $this;
    }

    public function getArUnitepoids(): ?int
    {
        return $this->arUnitepoids;
    }

    public function setArUnitepoids(?int $arUnitepoids): static
    {
        $this->arUnitepoids = $arUnitepoids;

        return $this;
    }

    public function getArPoidsnet(): ?string
    {
        return $this->arPoidsnet;
    }

    public function setArPoidsnet(?string $arPoidsnet): static
    {
        $this->arPoidsnet = $arPoidsnet;

        return $this;
    }

    public function getArPoidsbrut(): ?string
    {
        return $this->arPoidsbrut;
    }

    public function setArPoidsbrut(?string $arPoidsbrut): static
    {
        $this->arPoidsbrut = $arPoidsbrut;

        return $this;
    }

    public function getArUniteven(): ?int
    {
        return $this->arUniteven;
    }

    public function setArUniteven(?int $arUniteven): static
    {
        $this->arUniteven = $arUniteven;

        return $this;
    }

    public function getArPrixach(): ?string
    {
        return $this->arPrixach;
    }

    public function setArPrixach(?string $arPrixach): static
    {
        $this->arPrixach = $arPrixach;

        return $this;
    }

    public function getArCoef(): ?string
    {
        return $this->arCoef;
    }

    public function setArCoef(?string $arCoef): static
    {
        $this->arCoef = $arCoef;

        return $this;
    }

    public function getArPrixven(): ?string
    {
        return $this->arPrixven;
    }

    public function setArPrixven(?string $arPrixven): static
    {
        $this->arPrixven = $arPrixven;

        return $this;
    }

    public function getArPrixttc(): ?int
    {
        return $this->arPrixttc;
    }

    public function setArPrixttc(?int $arPrixttc): static
    {
        $this->arPrixttc = $arPrixttc;

        return $this;
    }

    public function getArGamme1(): ?int
    {
        return $this->arGamme1;
    }

    public function setArGamme1(?int $arGamme1): static
    {
        $this->arGamme1 = $arGamme1;

        return $this;
    }

    public function getArGamme2(): ?int
    {
        return $this->arGamme2;
    }

    public function setArGamme2(?int $arGamme2): static
    {
        $this->arGamme2 = $arGamme2;

        return $this;
    }

    public function getArSuivistock(): ?int
    {
        return $this->arSuivistock;
    }

    public function setArSuivistock(?int $arSuivistock): static
    {
        $this->arSuivistock = $arSuivistock;

        return $this;
    }

    public function getArNomencl(): ?int
    {
        return $this->arNomencl;
    }

    public function setArNomencl(?int $arNomencl): static
    {
        $this->arNomencl = $arNomencl;

        return $this;
    }

    public function getArStat01(): ?string
    {
        return $this->arStat01;
    }

    public function setArStat01(?string $arStat01): static
    {
        $this->arStat01 = $arStat01;

        return $this;
    }

    public function getArStat02(): ?string
    {
        return $this->arStat02;
    }

    public function setArStat02(?string $arStat02): static
    {
        $this->arStat02 = $arStat02;

        return $this;
    }

    public function getArStat03(): ?string
    {
        return $this->arStat03;
    }

    public function setArStat03(?string $arStat03): static
    {
        $this->arStat03 = $arStat03;

        return $this;
    }

    public function getArStat04(): ?string
    {
        return $this->arStat04;
    }

    public function setArStat04(?string $arStat04): static
    {
        $this->arStat04 = $arStat04;

        return $this;
    }

    public function getArStat05(): ?string
    {
        return $this->arStat05;
    }

    public function setArStat05(?string $arStat05): static
    {
        $this->arStat05 = $arStat05;

        return $this;
    }

    public function getArEscompte(): ?int
    {
        return $this->arEscompte;
    }

    public function setArEscompte(?int $arEscompte): static
    {
        $this->arEscompte = $arEscompte;

        return $this;
    }

    public function getArDelai(): ?int
    {
        return $this->arDelai;
    }

    public function setArDelai(?int $arDelai): static
    {
        $this->arDelai = $arDelai;

        return $this;
    }

    public function getArHorsstat(): ?int
    {
        return $this->arHorsstat;
    }

    public function setArHorsstat(?int $arHorsstat): static
    {
        $this->arHorsstat = $arHorsstat;

        return $this;
    }

    public function getArVtedebit(): ?int
    {
        return $this->arVtedebit;
    }

    public function setArVtedebit(?int $arVtedebit): static
    {
        $this->arVtedebit = $arVtedebit;

        return $this;
    }

    public function getArNotimp(): ?int
    {
        return $this->arNotimp;
    }

    public function setArNotimp(?int $arNotimp): static
    {
        $this->arNotimp = $arNotimp;

        return $this;
    }

    public function getArSommeil(): ?int
    {
        return $this->arSommeil;
    }

    public function setArSommeil(?int $arSommeil): static
    {
        $this->arSommeil = $arSommeil;

        return $this;
    }

    public function getArLangue1(): ?string
    {
        return $this->arLangue1;
    }

    public function setArLangue1(?string $arLangue1): static
    {
        $this->arLangue1 = $arLangue1;

        return $this;
    }

    public function getArLangue2(): ?string
    {
        return $this->arLangue2;
    }

    public function setArLangue2(?string $arLangue2): static
    {
        $this->arLangue2 = $arLangue2;

        return $this;
    }

    public function getArCodebarre(): ?string
    {
        return $this->arCodebarre;
    }

    public function setArCodebarre(?string $arCodebarre): static
    {
        $this->arCodebarre = $arCodebarre;

        return $this;
    }

    public function getCbarCodebarre()
    {
        return $this->cbarCodebarre;
    }

    public function setCbarCodebarre($cbarCodebarre): static
    {
        $this->cbarCodebarre = $cbarCodebarre;

        return $this;
    }

    public function getArCodefiscal(): ?string
    {
        return $this->arCodefiscal;
    }

    public function setArCodefiscal(?string $arCodefiscal): static
    {
        $this->arCodefiscal = $arCodefiscal;

        return $this;
    }

    public function getArPays(): ?string
    {
        return $this->arPays;
    }

    public function setArPays(?string $arPays): static
    {
        $this->arPays = $arPays;

        return $this;
    }

    public function getArFrais01frDenomination(): ?string
    {
        return $this->arFrais01frDenomination;
    }

    public function setArFrais01frDenomination(?string $arFrais01frDenomination): static
    {
        $this->arFrais01frDenomination = $arFrais01frDenomination;

        return $this;
    }

    public function getArFrais01frRem01remValeur(): ?string
    {
        return $this->arFrais01frRem01remValeur;
    }

    public function setArFrais01frRem01remValeur(?string $arFrais01frRem01remValeur): static
    {
        $this->arFrais01frRem01remValeur = $arFrais01frRem01remValeur;

        return $this;
    }

    public function getArFrais01frRem01remType(): ?int
    {
        return $this->arFrais01frRem01remType;
    }

    public function setArFrais01frRem01remType(?int $arFrais01frRem01remType): static
    {
        $this->arFrais01frRem01remType = $arFrais01frRem01remType;

        return $this;
    }

    public function getArFrais01frRem02remValeur(): ?string
    {
        return $this->arFrais01frRem02remValeur;
    }

    public function setArFrais01frRem02remValeur(?string $arFrais01frRem02remValeur): static
    {
        $this->arFrais01frRem02remValeur = $arFrais01frRem02remValeur;

        return $this;
    }

    public function getArFrais01frRem02remType(): ?int
    {
        return $this->arFrais01frRem02remType;
    }

    public function setArFrais01frRem02remType(?int $arFrais01frRem02remType): static
    {
        $this->arFrais01frRem02remType = $arFrais01frRem02remType;

        return $this;
    }

    public function getArFrais01frRem03remValeur(): ?string
    {
        return $this->arFrais01frRem03remValeur;
    }

    public function setArFrais01frRem03remValeur(?string $arFrais01frRem03remValeur): static
    {
        $this->arFrais01frRem03remValeur = $arFrais01frRem03remValeur;

        return $this;
    }

    public function getArFrais01frRem03remType(): ?int
    {
        return $this->arFrais01frRem03remType;
    }

    public function setArFrais01frRem03remType(?int $arFrais01frRem03remType): static
    {
        $this->arFrais01frRem03remType = $arFrais01frRem03remType;

        return $this;
    }

    public function getArFrais02frDenomination(): ?string
    {
        return $this->arFrais02frDenomination;
    }

    public function setArFrais02frDenomination(?string $arFrais02frDenomination): static
    {
        $this->arFrais02frDenomination = $arFrais02frDenomination;

        return $this;
    }

    public function getArFrais02frRem01remValeur(): ?string
    {
        return $this->arFrais02frRem01remValeur;
    }

    public function setArFrais02frRem01remValeur(?string $arFrais02frRem01remValeur): static
    {
        $this->arFrais02frRem01remValeur = $arFrais02frRem01remValeur;

        return $this;
    }

    public function getArFrais02frRem01remType(): ?int
    {
        return $this->arFrais02frRem01remType;
    }

    public function setArFrais02frRem01remType(?int $arFrais02frRem01remType): static
    {
        $this->arFrais02frRem01remType = $arFrais02frRem01remType;

        return $this;
    }

    public function getArFrais02frRem02remValeur(): ?string
    {
        return $this->arFrais02frRem02remValeur;
    }

    public function setArFrais02frRem02remValeur(?string $arFrais02frRem02remValeur): static
    {
        $this->arFrais02frRem02remValeur = $arFrais02frRem02remValeur;

        return $this;
    }

    public function getArFrais02frRem02remType(): ?int
    {
        return $this->arFrais02frRem02remType;
    }

    public function setArFrais02frRem02remType(?int $arFrais02frRem02remType): static
    {
        $this->arFrais02frRem02remType = $arFrais02frRem02remType;

        return $this;
    }

    public function getArFrais02frRem03remValeur(): ?string
    {
        return $this->arFrais02frRem03remValeur;
    }

    public function setArFrais02frRem03remValeur(?string $arFrais02frRem03remValeur): static
    {
        $this->arFrais02frRem03remValeur = $arFrais02frRem03remValeur;

        return $this;
    }

    public function getArFrais02frRem03remType(): ?int
    {
        return $this->arFrais02frRem03remType;
    }

    public function setArFrais02frRem03remType(?int $arFrais02frRem03remType): static
    {
        $this->arFrais02frRem03remType = $arFrais02frRem03remType;

        return $this;
    }

    public function getArFrais03frDenomination(): ?string
    {
        return $this->arFrais03frDenomination;
    }

    public function setArFrais03frDenomination(?string $arFrais03frDenomination): static
    {
        $this->arFrais03frDenomination = $arFrais03frDenomination;

        return $this;
    }

    public function getArFrais03frRem01remValeur(): ?string
    {
        return $this->arFrais03frRem01remValeur;
    }

    public function setArFrais03frRem01remValeur(?string $arFrais03frRem01remValeur): static
    {
        $this->arFrais03frRem01remValeur = $arFrais03frRem01remValeur;

        return $this;
    }

    public function getArFrais03frRem01remType(): ?int
    {
        return $this->arFrais03frRem01remType;
    }

    public function setArFrais03frRem01remType(?int $arFrais03frRem01remType): static
    {
        $this->arFrais03frRem01remType = $arFrais03frRem01remType;

        return $this;
    }

    public function getArFrais03frRem02remValeur(): ?string
    {
        return $this->arFrais03frRem02remValeur;
    }

    public function setArFrais03frRem02remValeur(?string $arFrais03frRem02remValeur): static
    {
        $this->arFrais03frRem02remValeur = $arFrais03frRem02remValeur;

        return $this;
    }

    public function getArFrais03frRem02remType(): ?int
    {
        return $this->arFrais03frRem02remType;
    }

    public function setArFrais03frRem02remType(?int $arFrais03frRem02remType): static
    {
        $this->arFrais03frRem02remType = $arFrais03frRem02remType;

        return $this;
    }

    public function getArFrais03frRem03remValeur(): ?string
    {
        return $this->arFrais03frRem03remValeur;
    }

    public function setArFrais03frRem03remValeur(?string $arFrais03frRem03remValeur): static
    {
        $this->arFrais03frRem03remValeur = $arFrais03frRem03remValeur;

        return $this;
    }

    public function getArFrais03frRem03remType(): ?int
    {
        return $this->arFrais03frRem03remType;
    }

    public function setArFrais03frRem03remType(?int $arFrais03frRem03remType): static
    {
        $this->arFrais03frRem03remType = $arFrais03frRem03remType;

        return $this;
    }

    public function getArCondition(): ?int
    {
        return $this->arCondition;
    }

    public function setArCondition(?int $arCondition): static
    {
        $this->arCondition = $arCondition;

        return $this;
    }

    public function getArPunet(): ?string
    {
        return $this->arPunet;
    }

    public function setArPunet(?string $arPunet): static
    {
        $this->arPunet = $arPunet;

        return $this;
    }

    public function getArContremarque(): ?int
    {
        return $this->arContremarque;
    }

    public function setArContremarque(?int $arContremarque): static
    {
        $this->arContremarque = $arContremarque;

        return $this;
    }

    public function getArFactpoids(): ?int
    {
        return $this->arFactpoids;
    }

    public function setArFactpoids(?int $arFactpoids): static
    {
        $this->arFactpoids = $arFactpoids;

        return $this;
    }

    public function getArFactforfait(): ?int
    {
        return $this->arFactforfait;
    }

    public function setArFactforfait(?int $arFactforfait): static
    {
        $this->arFactforfait = $arFactforfait;

        return $this;
    }

    public function getArDatecreation(): ?\DateTimeInterface
    {
        return $this->arDatecreation;
    }

    public function setArDatecreation(?\DateTimeInterface $arDatecreation): static
    {
        $this->arDatecreation = $arDatecreation;

        return $this;
    }

    public function getArSaisievar(): ?int
    {
        return $this->arSaisievar;
    }

    public function setArSaisievar(?int $arSaisievar): static
    {
        $this->arSaisievar = $arSaisievar;

        return $this;
    }

    public function getArTransfere(): ?int
    {
        return $this->arTransfere;
    }

    public function setArTransfere(?int $arTransfere): static
    {
        $this->arTransfere = $arTransfere;

        return $this;
    }

    public function getArPublie(): ?int
    {
        return $this->arPublie;
    }

    public function setArPublie(?int $arPublie): static
    {
        $this->arPublie = $arPublie;

        return $this;
    }

    public function getArDatemodif(): ?\DateTimeInterface
    {
        return $this->arDatemodif;
    }

    public function setArDatemodif(?\DateTimeInterface $arDatemodif): static
    {
        $this->arDatemodif = $arDatemodif;

        return $this;
    }

    public function getArPhoto(): ?string
    {
        return $this->arPhoto;
    }

    public function setArPhoto(?string $arPhoto): static
    {
        $this->arPhoto = $arPhoto;

        return $this;
    }

    public function getArPrixachnouv(): ?string
    {
        return $this->arPrixachnouv;
    }

    public function setArPrixachnouv(?string $arPrixachnouv): static
    {
        $this->arPrixachnouv = $arPrixachnouv;

        return $this;
    }

    public function getArCoefnouv(): ?string
    {
        return $this->arCoefnouv;
    }

    public function setArCoefnouv(?string $arCoefnouv): static
    {
        $this->arCoefnouv = $arCoefnouv;

        return $this;
    }

    public function getArPrixvennouv(): ?string
    {
        return $this->arPrixvennouv;
    }

    public function setArPrixvennouv(?string $arPrixvennouv): static
    {
        $this->arPrixvennouv = $arPrixvennouv;

        return $this;
    }

    public function getArDateapplication(): ?\DateTimeInterface
    {
        return $this->arDateapplication;
    }

    public function setArDateapplication(?\DateTimeInterface $arDateapplication): static
    {
        $this->arDateapplication = $arDateapplication;

        return $this;
    }

    public function getArCoutstd(): ?string
    {
        return $this->arCoutstd;
    }

    public function setArCoutstd(?string $arCoutstd): static
    {
        $this->arCoutstd = $arCoutstd;

        return $this;
    }

    public function getArQtecomp(): ?string
    {
        return $this->arQtecomp;
    }

    public function setArQtecomp(?string $arQtecomp): static
    {
        $this->arQtecomp = $arQtecomp;

        return $this;
    }

    public function getArQteoperatoire(): ?string
    {
        return $this->arQteoperatoire;
    }

    public function setArQteoperatoire(?string $arQteoperatoire): static
    {
        $this->arQteoperatoire = $arQteoperatoire;

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

    public function getArPrevision(): ?int
    {
        return $this->arPrevision;
    }

    public function setArPrevision(?int $arPrevision): static
    {
        $this->arPrevision = $arPrevision;

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

    public function getArType(): ?int
    {
        return $this->arType;
    }

    public function setArType(?int $arType): static
    {
        $this->arType = $arType;

        return $this;
    }

    public function getRpCodedefaut(): ?string
    {
        return $this->rpCodedefaut;
    }

    public function setRpCodedefaut(?string $rpCodedefaut): static
    {
        $this->rpCodedefaut = $rpCodedefaut;

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

    public function getFace2(): ?string
    {
        return $this->face2;
    }

    public function setFace2(?string $face2): static
    {
        $this->face2 = $face2;

        return $this;
    }

    public function getLargeur(): ?string
    {
        return $this->largeur;
    }

    public function setLargeur(?string $largeur): static
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getLongeur(): ?string
    {
        return $this->longeur;
    }

    public function setLongeur(?string $longeur): static
    {
        $this->longeur = $longeur;

        return $this;
    }

    public function getEpaisseur(): ?string
    {
        return $this->epaisseur;
    }

    public function setEpaisseur(?string $epaisseur): static
    {
        $this->epaisseur = $epaisseur;

        return $this;
    }

    public function getArEdicode(): ?string
    {
        return $this->arEdicode;
    }

    public function setArEdicode(?string $arEdicode): static
    {
        $this->arEdicode = $arEdicode;

        return $this;
    }

    public function getCbarEdicode()
    {
        return $this->cbarEdicode;
    }

    public function setCbarEdicode($cbarEdicode): static
    {
        $this->cbarEdicode = $cbarEdicode;

        return $this;
    }

    public function getArNature(): ?int
    {
        return $this->arNature;
    }

    public function setArNature(?int $arNature): static
    {
        $this->arNature = $arNature;

        return $this;
    }

    public function getArDelaifabrication(): ?int
    {
        return $this->arDelaifabrication;
    }

    public function setArDelaifabrication(?int $arDelaifabrication): static
    {
        $this->arDelaifabrication = $arDelaifabrication;

        return $this;
    }

    public function getArNbcolis(): ?int
    {
        return $this->arNbcolis;
    }

    public function setArNbcolis(?int $arNbcolis): static
    {
        $this->arNbcolis = $arNbcolis;

        return $this;
    }

    public function getArDelaiperemption(): ?int
    {
        return $this->arDelaiperemption;
    }

    public function setArDelaiperemption(?int $arDelaiperemption): static
    {
        $this->arDelaiperemption = $arDelaiperemption;

        return $this;
    }

    public function getArDelaisecurite(): ?int
    {
        return $this->arDelaisecurite;
    }

    public function setArDelaisecurite(?int $arDelaisecurite): static
    {
        $this->arDelaisecurite = $arDelaisecurite;

        return $this;
    }

    public function getArFictif(): ?int
    {
        return $this->arFictif;
    }

    public function setArFictif(?int $arFictif): static
    {
        $this->arFictif = $arFictif;

        return $this;
    }

    public function getArSoustraitance(): ?int
    {
        return $this->arSoustraitance;
    }

    public function setArSoustraitance(?int $arSoustraitance): static
    {
        $this->arSoustraitance = $arSoustraitance;

        return $this;
    }

    public function getArTypelancement(): ?int
    {
        return $this->arTypelancement;
    }

    public function setArTypelancement(?int $arTypelancement): static
    {
        $this->arTypelancement = $arTypelancement;

        return $this;
    }

    public function getArCycle(): ?int
    {
        return $this->arCycle;
    }

    public function setArCycle(?int $arCycle): static
    {
        $this->arCycle = $arCycle;

        return $this;
    }

    public function getArCriticite(): ?int
    {
        return $this->arCriticite;
    }

    public function setArCriticite(?int $arCriticite): static
    {
        $this->arCriticite = $arCriticite;

        return $this;
    }

    public function getComposant(): ?string
    {
        return $this->composant;
    }

    public function setComposant(?string $composant): static
    {
        $this->composant = $composant;

        return $this;
    }

    public function getApplication(): ?string
    {
        return $this->application;
    }

    public function setApplication(?string $application): static
    {
        $this->application = $application;

        return $this;
    }

    public function getBrillance(): ?string
    {
        return $this->brillance;
    }

    public function setBrillance(?string $brillance): static
    {
        $this->brillance = $brillance;

        return $this;
    }

    public function getSolidite(): ?string
    {
        return $this->solidite;
    }

    public function setSolidite(?string $solidite): static
    {
        $this->solidite = $solidite;

        return $this;
    }

    public function getSechage(): ?string
    {
        return $this->sechage;
    }

    public function setSechage(?string $sechage): static
    {
        $this->sechage = $sechage;

        return $this;
    }

    public function getMelangerAvec(): ?string
    {
        return $this->melangerAvec;
    }

    public function setMelangerAvec(?string $melangerAvec): static
    {
        $this->melangerAvec = $melangerAvec;

        return $this;
    }

    public function getUtilisationAvecPour(): ?string
    {
        return $this->utilisationAvecPour;
    }

    public function setUtilisationAvecPour(?string $utilisationAvecPour): static
    {
        $this->utilisationAvecPour = $utilisationAvecPour;

        return $this;
    }

    public function getDensite(): ?string
    {
        return $this->densite;
    }

    public function setDensite(?string $densite): static
    {
        $this->densite = $densite;

        return $this;
    }

    public function getCodeFournisseur(): ?string
    {
        return $this->codeFournisseur;
    }

    public function setCodeFournisseur(?string $codeFournisseur): static
    {
        $this->codeFournisseur = $codeFournisseur;

        return $this;
    }

    public function getLiensproduit(): ?string
    {
        return $this->liensproduit;
    }

    public function setLiensproduit(?string $liensproduit): static
    {
        $this->liensproduit = $liensproduit;

        return $this;
    }

    public function getLiensphotoproduit(): ?string
    {
        return $this->liensphotoproduit;
    }

    public function setLiensphotoproduit(?string $liensphotoproduit): static
    {
        $this->liensphotoproduit = $liensphotoproduit;

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

    public function getFinition(): ?string
    {
        return $this->finition;
    }

    public function setFinition(?string $finition): static
    {
        $this->finition = $finition;

        return $this;
    }

    public function getFace1(): ?string
    {
        return $this->face1;
    }

    public function setFace1(?string $face1): static
    {
        $this->face1 = $face1;

        return $this;
    }

    public function getFamilleDecor(): ?string
    {
        return $this->familleDecor;
    }

    public function setFamilleDecor(?string $familleDecor): static
    {
        $this->familleDecor = $familleDecor;

        return $this;
    }

    public function getNomDecor(): ?string
    {
        return $this->nomDecor;
    }

    public function setNomDecor(?string $nomDecor): static
    {
        $this->nomDecor = $nomDecor;

        return $this;
    }

    public function getCodeDecor(): ?string
    {
        return $this->codeDecor;
    }

    public function setCodeDecor(?string $codeDecor): static
    {
        $this->codeDecor = $codeDecor;

        return $this;
    }
}
