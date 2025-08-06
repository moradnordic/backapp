<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FPiecegRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PIECEG')]
#[ORM\UniqueConstraint(name: 'IPG_LIGNE', columns: ['PG_Ligne'])]
#[ORM\Index(name: 'FKIA_F_PIECEG_PI_No', columns: ['PI_No'])]
#[ORM\Entity(repositoryClass: FPiecegRepository::class)]
class FPieceg
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PI_No")]
    private ?int $piNo = null;

    #[ORM\Column(name: "PG_Ligne", type: Types::SMALLINT)]
    private ?int $pgLigne = null;

    #[ORM\Column(name: "PG_Jour", length: 35, nullable: true)]
    private ?string $pgJour = null;

    #[ORM\Column(name: "PG_Piece", length: 35, nullable: true)]
    private ?string $pgPiece = null;

    #[ORM\Column(name: "PG_RefPiece", length: 35, nullable: true)]
    private ?string $pgRefpiece = null;

    #[ORM\Column(name: "CG_Num", length: 35, nullable: true)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "CG_NumCont", length: 35, nullable: true)]
    private ?string $cgNumcont = null;

    #[ORM\Column(name: "CT_Num", length: 35, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "PG_Intitule", length: 35, nullable: true)]
    private ?string $pgIntitule = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "PG_Echeance", length: 35, nullable: true)]
    private ?string $pgEcheance = null;

    #[ORM\Column(name: "PG_Parite", length: 35, nullable: true)]
    private ?string $pgParite = null;

    #[ORM\Column(name: "PG_Quantite", length: 35, nullable: true)]
    private ?string $pgQuantite = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "PG_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $pgSens = null;

    #[ORM\Column(name: "PG_Montant", length: 35, nullable: true)]
    private ?string $pgMontant = null;

    #[ORM\Column(name: "CT_NumCont", length: 35, nullable: true)]
    private ?string $ctNumcont = null;

    #[ORM\Column(name: "PG_Devise", length: 35, nullable: true)]
    private ?string $pgDevise = null;

    #[ORM\Column(name: "PG_InfoL01", length: 35, nullable: true)]
    private ?string $pgInfol01 = null;

    #[ORM\Column(name: "PG_InfoL02", length: 35, nullable: true)]
    private ?string $pgInfol02 = null;

    #[ORM\Column(name: "PG_InfoL03", length: 35, nullable: true)]
    private ?string $pgInfol03 = null;

    #[ORM\Column(name: "PG_InfoL04", length: 35, nullable: true)]
    private ?string $pgInfol04 = null;

    #[ORM\Column(name: "PG_InfoL05", length: 35, nullable: true)]
    private ?string $pgInfol05 = null;

    #[ORM\Column(name: "PG_InfoL06", length: 35, nullable: true)]
    private ?string $pgInfol06 = null;

    #[ORM\Column(name: "PG_InfoL07", length: 35, nullable: true)]
    private ?string $pgInfol07 = null;

    #[ORM\Column(name: "PG_InfoL08", length: 35, nullable: true)]
    private ?string $pgInfol08 = null;

    #[ORM\Column(name: "PG_InfoL09", length: 35, nullable: true)]
    private ?string $pgInfol09 = null;

    #[ORM\Column(name: "PG_InfoL10", length: 35, nullable: true)]
    private ?string $pgInfol10 = null;

    #[ORM\Column(name: "PG_InfoL11", length: 35, nullable: true)]
    private ?string $pgInfol11 = null;

    #[ORM\Column(name: "PG_InfoL12", length: 35, nullable: true)]
    private ?string $pgInfol12 = null;

    #[ORM\Column(name: "PG_InfoL13", length: 35, nullable: true)]
    private ?string $pgInfol13 = null;

    #[ORM\Column(name: "PG_InfoL14", length: 35, nullable: true)]
    private ?string $pgInfol14 = null;

    #[ORM\Column(name: "PG_InfoL15", length: 35, nullable: true)]
    private ?string $pgInfol15 = null;

    #[ORM\Column(name: "PG_InfoL16", length: 35, nullable: true)]
    private ?string $pgInfol16 = null;

    #[ORM\Column(name: "PG_InfoL17", length: 35, nullable: true)]
    private ?string $pgInfol17 = null;

    #[ORM\Column(name: "PG_InfoL18", length: 35, nullable: true)]
    private ?string $pgInfol18 = null;

    #[ORM\Column(name: "PG_InfoL19", length: 35, nullable: true)]
    private ?string $pgInfol19 = null;

    #[ORM\Column(name: "PG_InfoL20", length: 35, nullable: true)]
    private ?string $pgInfol20 = null;

    #[ORM\Column(name: "PG_InfoL21", length: 35, nullable: true)]
    private ?string $pgInfol21 = null;

    #[ORM\Column(name: "PG_InfoL22", length: 35, nullable: true)]
    private ?string $pgInfol22 = null;

    #[ORM\Column(name: "PG_InfoL23", length: 35, nullable: true)]
    private ?string $pgInfol23 = null;

    #[ORM\Column(name: "PG_InfoL24", length: 35, nullable: true)]
    private ?string $pgInfol24 = null;

    #[ORM\Column(name: "PG_InfoL25", length: 35, nullable: true)]
    private ?string $pgInfol25 = null;

    #[ORM\Column(name: "PG_InfoL26", length: 35, nullable: true)]
    private ?string $pgInfol26 = null;

    #[ORM\Column(name: "PG_InfoL27", length: 35, nullable: true)]
    private ?string $pgInfol27 = null;

    #[ORM\Column(name: "PG_InfoL28", length: 35, nullable: true)]
    private ?string $pgInfol28 = null;

    #[ORM\Column(name: "PG_InfoL29", length: 35, nullable: true)]
    private ?string $pgInfol29 = null;

    #[ORM\Column(name: "PG_InfoL30", length: 35, nullable: true)]
    private ?string $pgInfol30 = null;

    #[ORM\Column(name: "PG_InfoL31", length: 35, nullable: true)]
    private ?string $pgInfol31 = null;

    #[ORM\Column(name: "PG_InfoL32", length: 35, nullable: true)]
    private ?string $pgInfol32 = null;

    #[ORM\Column(name: "PG_InfoL33", length: 35, nullable: true)]
    private ?string $pgInfol33 = null;

    #[ORM\Column(name: "PG_InfoL34", length: 35, nullable: true)]
    private ?string $pgInfol34 = null;

    #[ORM\Column(name: "PG_InfoL35", length: 35, nullable: true)]
    private ?string $pgInfol35 = null;

    #[ORM\Column(name: "PG_InfoL36", length: 35, nullable: true)]
    private ?string $pgInfol36 = null;

    #[ORM\Column(name: "PG_InfoL37", length: 35, nullable: true)]
    private ?string $pgInfol37 = null;

    #[ORM\Column(name: "PG_InfoL38", length: 35, nullable: true)]
    private ?string $pgInfol38 = null;

    #[ORM\Column(name: "PG_InfoL39", length: 35, nullable: true)]
    private ?string $pgInfol39 = null;

    #[ORM\Column(name: "PG_InfoL40", length: 35, nullable: true)]
    private ?string $pgInfol40 = null;

    #[ORM\Column(name: "PG_InfoL41", length: 35, nullable: true)]
    private ?string $pgInfol41 = null;

    #[ORM\Column(name: "PG_InfoL42", length: 35, nullable: true)]
    private ?string $pgInfol42 = null;

    #[ORM\Column(name: "PG_InfoL43", length: 35, nullable: true)]
    private ?string $pgInfol43 = null;

    #[ORM\Column(name: "PG_InfoL44", length: 35, nullable: true)]
    private ?string $pgInfol44 = null;

    #[ORM\Column(name: "PG_InfoL45", length: 35, nullable: true)]
    private ?string $pgInfol45 = null;

    #[ORM\Column(name: "PG_InfoL46", length: 35, nullable: true)]
    private ?string $pgInfol46 = null;

    #[ORM\Column(name: "PG_InfoL47", length: 35, nullable: true)]
    private ?string $pgInfol47 = null;

    #[ORM\Column(name: "PG_InfoL48", length: 35, nullable: true)]
    private ?string $pgInfol48 = null;

    #[ORM\Column(name: "PG_InfoL49", length: 35, nullable: true)]
    private ?string $pgInfol49 = null;

    #[ORM\Column(name: "PG_InfoL50", length: 35, nullable: true)]
    private ?string $pgInfol50 = null;

    #[ORM\Column(name: "PG_InfoL51", length: 35, nullable: true)]
    private ?string $pgInfol51 = null;

    #[ORM\Column(name: "PG_InfoL52", length: 35, nullable: true)]
    private ?string $pgInfol52 = null;

    #[ORM\Column(name: "PG_InfoL53", length: 35, nullable: true)]
    private ?string $pgInfol53 = null;

    #[ORM\Column(name: "PG_InfoL54", length: 35, nullable: true)]
    private ?string $pgInfol54 = null;

    #[ORM\Column(name: "PG_InfoL55", length: 35, nullable: true)]
    private ?string $pgInfol55 = null;

    #[ORM\Column(name: "PG_InfoL56", length: 35, nullable: true)]
    private ?string $pgInfol56 = null;

    #[ORM\Column(name: "PG_InfoL57", length: 35, nullable: true)]
    private ?string $pgInfol57 = null;

    #[ORM\Column(name: "PG_InfoL58", length: 35, nullable: true)]
    private ?string $pgInfol58 = null;

    #[ORM\Column(name: "PG_InfoL59", length: 35, nullable: true)]
    private ?string $pgInfol59 = null;

    #[ORM\Column(name: "PG_InfoL60", length: 35, nullable: true)]
    private ?string $pgInfol60 = null;

    #[ORM\Column(name: "PG_InfoL61", length: 35, nullable: true)]
    private ?string $pgInfol61 = null;

    #[ORM\Column(name: "PG_InfoL62", length: 35, nullable: true)]
    private ?string $pgInfol62 = null;

    #[ORM\Column(name: "PG_InfoL63", length: 35, nullable: true)]
    private ?string $pgInfol63 = null;

    #[ORM\Column(name: "PG_InfoL64", length: 35, nullable: true)]
    private ?string $pgInfol64 = null;

    #[ORM\Column(name: "TA_Code", length: 35, nullable: true)]
    private ?string $taCode = null;

    #[ORM\Column(name: "TA_Provenance", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance = null;

    #[ORM\Column(name: "PG_Reference", length: 35, nullable: true)]
    private ?string $pgReference = null;

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

    public function getPiNo(): ?int
    {
        return $this->piNo;
    }

    public function setPiNo(int $piNo): static
    {
        $this->piNo = $piNo;

        return $this;
    }

    public function getPgLigne(): ?int
    {
        return $this->pgLigne;
    }

    public function setPgLigne(int $pgLigne): static
    {
        $this->pgLigne = $pgLigne;

        return $this;
    }

    public function getPgJour(): ?string
    {
        return $this->pgJour;
    }

    public function setPgJour(?string $pgJour): static
    {
        $this->pgJour = $pgJour;

        return $this;
    }

    public function getPgPiece(): ?string
    {
        return $this->pgPiece;
    }

    public function setPgPiece(?string $pgPiece): static
    {
        $this->pgPiece = $pgPiece;

        return $this;
    }

    public function getPgRefpiece(): ?string
    {
        return $this->pgRefpiece;
    }

    public function setPgRefpiece(?string $pgRefpiece): static
    {
        $this->pgRefpiece = $pgRefpiece;

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

    public function getPgIntitule(): ?string
    {
        return $this->pgIntitule;
    }

    public function setPgIntitule(?string $pgIntitule): static
    {
        $this->pgIntitule = $pgIntitule;

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

    public function getPgEcheance(): ?string
    {
        return $this->pgEcheance;
    }

    public function setPgEcheance(?string $pgEcheance): static
    {
        $this->pgEcheance = $pgEcheance;

        return $this;
    }

    public function getPgParite(): ?string
    {
        return $this->pgParite;
    }

    public function setPgParite(?string $pgParite): static
    {
        $this->pgParite = $pgParite;

        return $this;
    }

    public function getPgQuantite(): ?string
    {
        return $this->pgQuantite;
    }

    public function setPgQuantite(?string $pgQuantite): static
    {
        $this->pgQuantite = $pgQuantite;

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

    public function getPgSens(): ?int
    {
        return $this->pgSens;
    }

    public function setPgSens(?int $pgSens): static
    {
        $this->pgSens = $pgSens;

        return $this;
    }

    public function getPgMontant(): ?string
    {
        return $this->pgMontant;
    }

    public function setPgMontant(?string $pgMontant): static
    {
        $this->pgMontant = $pgMontant;

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

    public function getPgDevise(): ?string
    {
        return $this->pgDevise;
    }

    public function setPgDevise(?string $pgDevise): static
    {
        $this->pgDevise = $pgDevise;

        return $this;
    }

    public function getPgInfol01(): ?string
    {
        return $this->pgInfol01;
    }

    public function setPgInfol01(?string $pgInfol01): static
    {
        $this->pgInfol01 = $pgInfol01;

        return $this;
    }

    public function getPgInfol02(): ?string
    {
        return $this->pgInfol02;
    }

    public function setPgInfol02(?string $pgInfol02): static
    {
        $this->pgInfol02 = $pgInfol02;

        return $this;
    }

    public function getPgInfol03(): ?string
    {
        return $this->pgInfol03;
    }

    public function setPgInfol03(?string $pgInfol03): static
    {
        $this->pgInfol03 = $pgInfol03;

        return $this;
    }

    public function getPgInfol04(): ?string
    {
        return $this->pgInfol04;
    }

    public function setPgInfol04(?string $pgInfol04): static
    {
        $this->pgInfol04 = $pgInfol04;

        return $this;
    }

    public function getPgInfol05(): ?string
    {
        return $this->pgInfol05;
    }

    public function setPgInfol05(?string $pgInfol05): static
    {
        $this->pgInfol05 = $pgInfol05;

        return $this;
    }

    public function getPgInfol06(): ?string
    {
        return $this->pgInfol06;
    }

    public function setPgInfol06(?string $pgInfol06): static
    {
        $this->pgInfol06 = $pgInfol06;

        return $this;
    }

    public function getPgInfol07(): ?string
    {
        return $this->pgInfol07;
    }

    public function setPgInfol07(?string $pgInfol07): static
    {
        $this->pgInfol07 = $pgInfol07;

        return $this;
    }

    public function getPgInfol08(): ?string
    {
        return $this->pgInfol08;
    }

    public function setPgInfol08(?string $pgInfol08): static
    {
        $this->pgInfol08 = $pgInfol08;

        return $this;
    }

    public function getPgInfol09(): ?string
    {
        return $this->pgInfol09;
    }

    public function setPgInfol09(?string $pgInfol09): static
    {
        $this->pgInfol09 = $pgInfol09;

        return $this;
    }

    public function getPgInfol10(): ?string
    {
        return $this->pgInfol10;
    }

    public function setPgInfol10(?string $pgInfol10): static
    {
        $this->pgInfol10 = $pgInfol10;

        return $this;
    }

    public function getPgInfol11(): ?string
    {
        return $this->pgInfol11;
    }

    public function setPgInfol11(?string $pgInfol11): static
    {
        $this->pgInfol11 = $pgInfol11;

        return $this;
    }

    public function getPgInfol12(): ?string
    {
        return $this->pgInfol12;
    }

    public function setPgInfol12(?string $pgInfol12): static
    {
        $this->pgInfol12 = $pgInfol12;

        return $this;
    }

    public function getPgInfol13(): ?string
    {
        return $this->pgInfol13;
    }

    public function setPgInfol13(?string $pgInfol13): static
    {
        $this->pgInfol13 = $pgInfol13;

        return $this;
    }

    public function getPgInfol14(): ?string
    {
        return $this->pgInfol14;
    }

    public function setPgInfol14(?string $pgInfol14): static
    {
        $this->pgInfol14 = $pgInfol14;

        return $this;
    }

    public function getPgInfol15(): ?string
    {
        return $this->pgInfol15;
    }

    public function setPgInfol15(?string $pgInfol15): static
    {
        $this->pgInfol15 = $pgInfol15;

        return $this;
    }

    public function getPgInfol16(): ?string
    {
        return $this->pgInfol16;
    }

    public function setPgInfol16(?string $pgInfol16): static
    {
        $this->pgInfol16 = $pgInfol16;

        return $this;
    }

    public function getPgInfol17(): ?string
    {
        return $this->pgInfol17;
    }

    public function setPgInfol17(?string $pgInfol17): static
    {
        $this->pgInfol17 = $pgInfol17;

        return $this;
    }

    public function getPgInfol18(): ?string
    {
        return $this->pgInfol18;
    }

    public function setPgInfol18(?string $pgInfol18): static
    {
        $this->pgInfol18 = $pgInfol18;

        return $this;
    }

    public function getPgInfol19(): ?string
    {
        return $this->pgInfol19;
    }

    public function setPgInfol19(?string $pgInfol19): static
    {
        $this->pgInfol19 = $pgInfol19;

        return $this;
    }

    public function getPgInfol20(): ?string
    {
        return $this->pgInfol20;
    }

    public function setPgInfol20(?string $pgInfol20): static
    {
        $this->pgInfol20 = $pgInfol20;

        return $this;
    }

    public function getPgInfol21(): ?string
    {
        return $this->pgInfol21;
    }

    public function setPgInfol21(?string $pgInfol21): static
    {
        $this->pgInfol21 = $pgInfol21;

        return $this;
    }

    public function getPgInfol22(): ?string
    {
        return $this->pgInfol22;
    }

    public function setPgInfol22(?string $pgInfol22): static
    {
        $this->pgInfol22 = $pgInfol22;

        return $this;
    }

    public function getPgInfol23(): ?string
    {
        return $this->pgInfol23;
    }

    public function setPgInfol23(?string $pgInfol23): static
    {
        $this->pgInfol23 = $pgInfol23;

        return $this;
    }

    public function getPgInfol24(): ?string
    {
        return $this->pgInfol24;
    }

    public function setPgInfol24(?string $pgInfol24): static
    {
        $this->pgInfol24 = $pgInfol24;

        return $this;
    }

    public function getPgInfol25(): ?string
    {
        return $this->pgInfol25;
    }

    public function setPgInfol25(?string $pgInfol25): static
    {
        $this->pgInfol25 = $pgInfol25;

        return $this;
    }

    public function getPgInfol26(): ?string
    {
        return $this->pgInfol26;
    }

    public function setPgInfol26(?string $pgInfol26): static
    {
        $this->pgInfol26 = $pgInfol26;

        return $this;
    }

    public function getPgInfol27(): ?string
    {
        return $this->pgInfol27;
    }

    public function setPgInfol27(?string $pgInfol27): static
    {
        $this->pgInfol27 = $pgInfol27;

        return $this;
    }

    public function getPgInfol28(): ?string
    {
        return $this->pgInfol28;
    }

    public function setPgInfol28(?string $pgInfol28): static
    {
        $this->pgInfol28 = $pgInfol28;

        return $this;
    }

    public function getPgInfol29(): ?string
    {
        return $this->pgInfol29;
    }

    public function setPgInfol29(?string $pgInfol29): static
    {
        $this->pgInfol29 = $pgInfol29;

        return $this;
    }

    public function getPgInfol30(): ?string
    {
        return $this->pgInfol30;
    }

    public function setPgInfol30(?string $pgInfol30): static
    {
        $this->pgInfol30 = $pgInfol30;

        return $this;
    }

    public function getPgInfol31(): ?string
    {
        return $this->pgInfol31;
    }

    public function setPgInfol31(?string $pgInfol31): static
    {
        $this->pgInfol31 = $pgInfol31;

        return $this;
    }

    public function getPgInfol32(): ?string
    {
        return $this->pgInfol32;
    }

    public function setPgInfol32(?string $pgInfol32): static
    {
        $this->pgInfol32 = $pgInfol32;

        return $this;
    }

    public function getPgInfol33(): ?string
    {
        return $this->pgInfol33;
    }

    public function setPgInfol33(?string $pgInfol33): static
    {
        $this->pgInfol33 = $pgInfol33;

        return $this;
    }

    public function getPgInfol34(): ?string
    {
        return $this->pgInfol34;
    }

    public function setPgInfol34(?string $pgInfol34): static
    {
        $this->pgInfol34 = $pgInfol34;

        return $this;
    }

    public function getPgInfol35(): ?string
    {
        return $this->pgInfol35;
    }

    public function setPgInfol35(?string $pgInfol35): static
    {
        $this->pgInfol35 = $pgInfol35;

        return $this;
    }

    public function getPgInfol36(): ?string
    {
        return $this->pgInfol36;
    }

    public function setPgInfol36(?string $pgInfol36): static
    {
        $this->pgInfol36 = $pgInfol36;

        return $this;
    }

    public function getPgInfol37(): ?string
    {
        return $this->pgInfol37;
    }

    public function setPgInfol37(?string $pgInfol37): static
    {
        $this->pgInfol37 = $pgInfol37;

        return $this;
    }

    public function getPgInfol38(): ?string
    {
        return $this->pgInfol38;
    }

    public function setPgInfol38(?string $pgInfol38): static
    {
        $this->pgInfol38 = $pgInfol38;

        return $this;
    }

    public function getPgInfol39(): ?string
    {
        return $this->pgInfol39;
    }

    public function setPgInfol39(?string $pgInfol39): static
    {
        $this->pgInfol39 = $pgInfol39;

        return $this;
    }

    public function getPgInfol40(): ?string
    {
        return $this->pgInfol40;
    }

    public function setPgInfol40(?string $pgInfol40): static
    {
        $this->pgInfol40 = $pgInfol40;

        return $this;
    }

    public function getPgInfol41(): ?string
    {
        return $this->pgInfol41;
    }

    public function setPgInfol41(?string $pgInfol41): static
    {
        $this->pgInfol41 = $pgInfol41;

        return $this;
    }

    public function getPgInfol42(): ?string
    {
        return $this->pgInfol42;
    }

    public function setPgInfol42(?string $pgInfol42): static
    {
        $this->pgInfol42 = $pgInfol42;

        return $this;
    }

    public function getPgInfol43(): ?string
    {
        return $this->pgInfol43;
    }

    public function setPgInfol43(?string $pgInfol43): static
    {
        $this->pgInfol43 = $pgInfol43;

        return $this;
    }

    public function getPgInfol44(): ?string
    {
        return $this->pgInfol44;
    }

    public function setPgInfol44(?string $pgInfol44): static
    {
        $this->pgInfol44 = $pgInfol44;

        return $this;
    }

    public function getPgInfol45(): ?string
    {
        return $this->pgInfol45;
    }

    public function setPgInfol45(?string $pgInfol45): static
    {
        $this->pgInfol45 = $pgInfol45;

        return $this;
    }

    public function getPgInfol46(): ?string
    {
        return $this->pgInfol46;
    }

    public function setPgInfol46(?string $pgInfol46): static
    {
        $this->pgInfol46 = $pgInfol46;

        return $this;
    }

    public function getPgInfol47(): ?string
    {
        return $this->pgInfol47;
    }

    public function setPgInfol47(?string $pgInfol47): static
    {
        $this->pgInfol47 = $pgInfol47;

        return $this;
    }

    public function getPgInfol48(): ?string
    {
        return $this->pgInfol48;
    }

    public function setPgInfol48(?string $pgInfol48): static
    {
        $this->pgInfol48 = $pgInfol48;

        return $this;
    }

    public function getPgInfol49(): ?string
    {
        return $this->pgInfol49;
    }

    public function setPgInfol49(?string $pgInfol49): static
    {
        $this->pgInfol49 = $pgInfol49;

        return $this;
    }

    public function getPgInfol50(): ?string
    {
        return $this->pgInfol50;
    }

    public function setPgInfol50(?string $pgInfol50): static
    {
        $this->pgInfol50 = $pgInfol50;

        return $this;
    }

    public function getPgInfol51(): ?string
    {
        return $this->pgInfol51;
    }

    public function setPgInfol51(?string $pgInfol51): static
    {
        $this->pgInfol51 = $pgInfol51;

        return $this;
    }

    public function getPgInfol52(): ?string
    {
        return $this->pgInfol52;
    }

    public function setPgInfol52(?string $pgInfol52): static
    {
        $this->pgInfol52 = $pgInfol52;

        return $this;
    }

    public function getPgInfol53(): ?string
    {
        return $this->pgInfol53;
    }

    public function setPgInfol53(?string $pgInfol53): static
    {
        $this->pgInfol53 = $pgInfol53;

        return $this;
    }

    public function getPgInfol54(): ?string
    {
        return $this->pgInfol54;
    }

    public function setPgInfol54(?string $pgInfol54): static
    {
        $this->pgInfol54 = $pgInfol54;

        return $this;
    }

    public function getPgInfol55(): ?string
    {
        return $this->pgInfol55;
    }

    public function setPgInfol55(?string $pgInfol55): static
    {
        $this->pgInfol55 = $pgInfol55;

        return $this;
    }

    public function getPgInfol56(): ?string
    {
        return $this->pgInfol56;
    }

    public function setPgInfol56(?string $pgInfol56): static
    {
        $this->pgInfol56 = $pgInfol56;

        return $this;
    }

    public function getPgInfol57(): ?string
    {
        return $this->pgInfol57;
    }

    public function setPgInfol57(?string $pgInfol57): static
    {
        $this->pgInfol57 = $pgInfol57;

        return $this;
    }

    public function getPgInfol58(): ?string
    {
        return $this->pgInfol58;
    }

    public function setPgInfol58(?string $pgInfol58): static
    {
        $this->pgInfol58 = $pgInfol58;

        return $this;
    }

    public function getPgInfol59(): ?string
    {
        return $this->pgInfol59;
    }

    public function setPgInfol59(?string $pgInfol59): static
    {
        $this->pgInfol59 = $pgInfol59;

        return $this;
    }

    public function getPgInfol60(): ?string
    {
        return $this->pgInfol60;
    }

    public function setPgInfol60(?string $pgInfol60): static
    {
        $this->pgInfol60 = $pgInfol60;

        return $this;
    }

    public function getPgInfol61(): ?string
    {
        return $this->pgInfol61;
    }

    public function setPgInfol61(?string $pgInfol61): static
    {
        $this->pgInfol61 = $pgInfol61;

        return $this;
    }

    public function getPgInfol62(): ?string
    {
        return $this->pgInfol62;
    }

    public function setPgInfol62(?string $pgInfol62): static
    {
        $this->pgInfol62 = $pgInfol62;

        return $this;
    }

    public function getPgInfol63(): ?string
    {
        return $this->pgInfol63;
    }

    public function setPgInfol63(?string $pgInfol63): static
    {
        $this->pgInfol63 = $pgInfol63;

        return $this;
    }

    public function getPgInfol64(): ?string
    {
        return $this->pgInfol64;
    }

    public function setPgInfol64(?string $pgInfol64): static
    {
        $this->pgInfol64 = $pgInfol64;

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

    public function getTaProvenance(): ?int
    {
        return $this->taProvenance;
    }

    public function setTaProvenance(?int $taProvenance): static
    {
        $this->taProvenance = $taProvenance;

        return $this;
    }

    public function getPgReference(): ?string
    {
        return $this->pgReference;
    }

    public function setPgReference(?string $pgReference): static
    {
        $this->pgReference = $pgReference;

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
