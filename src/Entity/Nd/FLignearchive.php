<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FLignearchiveRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_LIGNEARCHIVE')]
#[ORM\Index(name: 'ILA_PIECE', columns: ['LA_Ligne'])]
#[ORM\Index(name: 'ILA_VENDEUR', columns: ['CO_No'])]
#[ORM\Index(name: 'ILA_ARTGAM', columns: ['AG_No1'])]
#[ORM\Index(name: 'ILA_ARTGAM2', columns: ['AG_No2'])]
#[ORM\Index(name: 'FKIA_F_LIGNEARCHIVE_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_LIGNEARCHIVE_TA_Piece', columns: ['TA_Piece'])]
#[ORM\Entity(repositoryClass: FLignearchiveRepository::class)]
class FLignearchive
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "TA_Piece", length: 9)]
    private ?string $taPiece = null;

    #[ORM\Column(name: "cbTA_Piece", type: Types::BINARY, nullable: true)]
    private $cbtaPiece = null;

    #[ORM\Column(name: "AR_Ref", length: 19, nullable: true)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "LA_Design", length: 69, nullable: true)]
    private ?string $laDesign = null;

    #[ORM\Column(name: "LA_PrixUnitaire", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laPrixunitaire = null;

    #[ORM\Column(name: "LA_PUTTC", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laPuttc = null;

    #[ORM\Column(name: "LA_TTC", type: Types::SMALLINT, nullable: true)]
    private ?int $laTtc = null;

    #[ORM\Column(name: "LA_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laQte = null;

    #[ORM\Column(name: "LA_Remise01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laRemise01remValeur = null;

    #[ORM\Column(name: "LA_Remise01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $laRemise01remType = null;

    #[ORM\Column(name: "LA_Remise02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laRemise02remValeur = null;

    #[ORM\Column(name: "LA_Remise02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $laRemise02remType = null;

    #[ORM\Column(name: "LA_Remise03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laRemise03remValeur = null;

    #[ORM\Column(name: "LA_Remise03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $laRemise03remType = null;

    #[ORM\Column(name: "LA_Ligne", nullable: true)]
    private ?int $laLigne = null;

    #[ORM\Column(name: "LA_Taxe1", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laTaxe1 = null;

    #[ORM\Column(name: "LA_TypeTaux1", type: Types::SMALLINT, nullable: true)]
    private ?int $laTypetaux1 = null;

    #[ORM\Column(name: "LA_TypeTaxe1", type: Types::SMALLINT, nullable: true)]
    private ?int $laTypetaxe1 = null;

    #[ORM\Column(name: "LA_Taxe2", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laTaxe2 = null;

    #[ORM\Column(name: "LA_TypeTaux2", type: Types::SMALLINT, nullable: true)]
    private ?int $laTypetaux2 = null;

    #[ORM\Column(name: "LA_TypeTaxe2", type: Types::SMALLINT, nullable: true)]
    private ?int $laTypetaxe2 = null;

    #[ORM\Column(name: "LA_Taxe3", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laTaxe3 = null;

    #[ORM\Column(name: "LA_TypeTaux3", type: Types::SMALLINT, nullable: true)]
    private ?int $laTypetaux3 = null;

    #[ORM\Column(name: "LA_TypeTaxe3", type: Types::SMALLINT, nullable: true)]
    private ?int $laTypetaxe3 = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

    #[ORM\Column(name: "LS_NoSerie", length: 31, nullable: true)]
    private ?string $lsNoserie = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "LA_PoidsNet", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laPoidsnet = null;

    #[ORM\Column(name: "LA_TRemExep", type: Types::SMALLINT, nullable: true)]
    private ?int $laTremexep = null;

    #[ORM\Column(name: "LA_PrixRU", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laPrixru = null;

    #[ORM\Column(name: "LA_CMUP", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $laCmup = null;

    #[ORM\Column(name: "EU_Enumere", length: 21, nullable: true)]
    private ?string $euEnumere = null;

    #[ORM\Column(name: "EU_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $euQte = null;

    #[ORM\Column(name: "LA_FactPoids", type: Types::SMALLINT, nullable: true)]
    private ?int $laFactpoids = null;

    #[ORM\Column(name: "LA_Escompte", type: Types::SMALLINT, nullable: true)]
    private ?int $laEscompte = null;

    #[ORM\Column(name: "LA_Valorise", type: Types::SMALLINT, nullable: true)]
    private ?int $laValorise = null;

    #[ORM\Column(name: "LS_Complement", length: 31, nullable: true)]
    private ?string $lsComplement = null;

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

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getTaPiece(): ?string
    {
        return $this->taPiece;
    }

    public function setTaPiece(string $taPiece): static
    {
        $this->taPiece = $taPiece;

        return $this;
    }

    public function getCbtaPiece()
    {
        return $this->cbtaPiece;
    }

    public function setCbtaPiece($cbtaPiece): static
    {
        $this->cbtaPiece = $cbtaPiece;

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

    public function getLaDesign(): ?string
    {
        return $this->laDesign;
    }

    public function setLaDesign(?string $laDesign): static
    {
        $this->laDesign = $laDesign;

        return $this;
    }

    public function getLaPrixunitaire(): ?string
    {
        return $this->laPrixunitaire;
    }

    public function setLaPrixunitaire(?string $laPrixunitaire): static
    {
        $this->laPrixunitaire = $laPrixunitaire;

        return $this;
    }

    public function getLaPuttc(): ?string
    {
        return $this->laPuttc;
    }

    public function setLaPuttc(?string $laPuttc): static
    {
        $this->laPuttc = $laPuttc;

        return $this;
    }

    public function getLaTtc(): ?int
    {
        return $this->laTtc;
    }

    public function setLaTtc(?int $laTtc): static
    {
        $this->laTtc = $laTtc;

        return $this;
    }

    public function getLaQte(): ?string
    {
        return $this->laQte;
    }

    public function setLaQte(?string $laQte): static
    {
        $this->laQte = $laQte;

        return $this;
    }

    public function getLaRemise01remValeur(): ?string
    {
        return $this->laRemise01remValeur;
    }

    public function setLaRemise01remValeur(?string $laRemise01remValeur): static
    {
        $this->laRemise01remValeur = $laRemise01remValeur;

        return $this;
    }

    public function getLaRemise01remType(): ?int
    {
        return $this->laRemise01remType;
    }

    public function setLaRemise01remType(?int $laRemise01remType): static
    {
        $this->laRemise01remType = $laRemise01remType;

        return $this;
    }

    public function getLaRemise02remValeur(): ?string
    {
        return $this->laRemise02remValeur;
    }

    public function setLaRemise02remValeur(?string $laRemise02remValeur): static
    {
        $this->laRemise02remValeur = $laRemise02remValeur;

        return $this;
    }

    public function getLaRemise02remType(): ?int
    {
        return $this->laRemise02remType;
    }

    public function setLaRemise02remType(?int $laRemise02remType): static
    {
        $this->laRemise02remType = $laRemise02remType;

        return $this;
    }

    public function getLaRemise03remValeur(): ?string
    {
        return $this->laRemise03remValeur;
    }

    public function setLaRemise03remValeur(?string $laRemise03remValeur): static
    {
        $this->laRemise03remValeur = $laRemise03remValeur;

        return $this;
    }

    public function getLaRemise03remType(): ?int
    {
        return $this->laRemise03remType;
    }

    public function setLaRemise03remType(?int $laRemise03remType): static
    {
        $this->laRemise03remType = $laRemise03remType;

        return $this;
    }

    public function getLaLigne(): ?int
    {
        return $this->laLigne;
    }

    public function setLaLigne(?int $laLigne): static
    {
        $this->laLigne = $laLigne;

        return $this;
    }

    public function getLaTaxe1(): ?string
    {
        return $this->laTaxe1;
    }

    public function setLaTaxe1(?string $laTaxe1): static
    {
        $this->laTaxe1 = $laTaxe1;

        return $this;
    }

    public function getLaTypetaux1(): ?int
    {
        return $this->laTypetaux1;
    }

    public function setLaTypetaux1(?int $laTypetaux1): static
    {
        $this->laTypetaux1 = $laTypetaux1;

        return $this;
    }

    public function getLaTypetaxe1(): ?int
    {
        return $this->laTypetaxe1;
    }

    public function setLaTypetaxe1(?int $laTypetaxe1): static
    {
        $this->laTypetaxe1 = $laTypetaxe1;

        return $this;
    }

    public function getLaTaxe2(): ?string
    {
        return $this->laTaxe2;
    }

    public function setLaTaxe2(?string $laTaxe2): static
    {
        $this->laTaxe2 = $laTaxe2;

        return $this;
    }

    public function getLaTypetaux2(): ?int
    {
        return $this->laTypetaux2;
    }

    public function setLaTypetaux2(?int $laTypetaux2): static
    {
        $this->laTypetaux2 = $laTypetaux2;

        return $this;
    }

    public function getLaTypetaxe2(): ?int
    {
        return $this->laTypetaxe2;
    }

    public function setLaTypetaxe2(?int $laTypetaxe2): static
    {
        $this->laTypetaxe2 = $laTypetaxe2;

        return $this;
    }

    public function getLaTaxe3(): ?string
    {
        return $this->laTaxe3;
    }

    public function setLaTaxe3(?string $laTaxe3): static
    {
        $this->laTaxe3 = $laTaxe3;

        return $this;
    }

    public function getLaTypetaux3(): ?int
    {
        return $this->laTypetaux3;
    }

    public function setLaTypetaux3(?int $laTypetaux3): static
    {
        $this->laTypetaux3 = $laTypetaux3;

        return $this;
    }

    public function getLaTypetaxe3(): ?int
    {
        return $this->laTypetaxe3;
    }

    public function setLaTypetaxe3(?int $laTypetaxe3): static
    {
        $this->laTypetaxe3 = $laTypetaxe3;

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

    public function getLsNoserie(): ?string
    {
        return $this->lsNoserie;
    }

    public function setLsNoserie(?string $lsNoserie): static
    {
        $this->lsNoserie = $lsNoserie;

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

    public function getLaPoidsnet(): ?string
    {
        return $this->laPoidsnet;
    }

    public function setLaPoidsnet(?string $laPoidsnet): static
    {
        $this->laPoidsnet = $laPoidsnet;

        return $this;
    }

    public function getLaTremexep(): ?int
    {
        return $this->laTremexep;
    }

    public function setLaTremexep(?int $laTremexep): static
    {
        $this->laTremexep = $laTremexep;

        return $this;
    }

    public function getLaPrixru(): ?string
    {
        return $this->laPrixru;
    }

    public function setLaPrixru(?string $laPrixru): static
    {
        $this->laPrixru = $laPrixru;

        return $this;
    }

    public function getLaCmup(): ?string
    {
        return $this->laCmup;
    }

    public function setLaCmup(?string $laCmup): static
    {
        $this->laCmup = $laCmup;

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

    public function getLaFactpoids(): ?int
    {
        return $this->laFactpoids;
    }

    public function setLaFactpoids(?int $laFactpoids): static
    {
        $this->laFactpoids = $laFactpoids;

        return $this;
    }

    public function getLaEscompte(): ?int
    {
        return $this->laEscompte;
    }

    public function setLaEscompte(?int $laEscompte): static
    {
        $this->laEscompte = $laEscompte;

        return $this;
    }

    public function getLaValorise(): ?int
    {
        return $this->laValorise;
    }

    public function setLaValorise(?int $laValorise): static
    {
        $this->laValorise = $laValorise;

        return $this;
    }

    public function getLsComplement(): ?string
    {
        return $this->lsComplement;
    }

    public function setLsComplement(?string $lsComplement): static
    {
        $this->lsComplement = $lsComplement;

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
}
