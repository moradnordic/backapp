<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FRessourceprodRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_RESSOURCEPROD')]
#[ORM\UniqueConstraint(name: 'IRP_CODE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_INTITULE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_SOMCODE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_SOMINTITULE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_SOMTYPE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_CENTRAL', columns: ['cbRP_Central'])]
#[ORM\Index(name: 'IRP_TYPECODE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPEINTITULE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPETYPE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPESOMCODE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPESOMINTITULE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPESOMTYPE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPEDEPOT', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_TYPESOMDEPOT', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_DEPOTCODE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_SOMDEPOTCODE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_SOMDEPOTINTITULE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_SOMDEPOTTYPE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IRP_CALENDRIER', columns: ['CAL_No'])]
#[ORM\UniqueConstraint(name: 'UKA_F_RESSOURCEPROD_RP_Code', columns: ['RP_Code'])]
#[ORM\Index(name: 'FKIA_F_RESSOURCEPROD_DE_No', columns: ['DE_No'])]
#[ORM\Index(name: 'FKIA_F_RESSOURCEPROD_AR_Ref', columns: ['AR_RefDefaut'])]
#[ORM\Entity(repositoryClass: FRessourceprodRepository::class)]
class FRessourceprod
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "RP_Code", length: 11)]
    private ?string $rpCode = null;

    #[ORM\Column(name: "cbRP_Code", type: Types::BINARY, nullable: true)]
    private $cbrpCode = null;

    #[ORM\Column(name: "RP_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $rpType = null;

    #[ORM\Column(name: "RP_Intitule", length: 69, nullable: true)]
    private ?string $rpIntitule = null;

    #[ORM\Column(name: "cbRP_Intitule", type: Types::BINARY, nullable: true)]
    private $cbrpIntitule = null;

    #[ORM\Column(name: "RP_Complement", length: 69, nullable: true)]
    private ?string $rpComplement = null;

    #[ORM\Column(name: "RP_Central", length: 11, nullable: true)]
    private ?string $rpCentral = null;

    #[ORM\Column(name: "cbRP_Central", type: Types::BINARY, nullable: true)]
    private $cbrpCentral = null;

    #[ORM\Column(name: "RP_Visite", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rpVisite = null;

    #[ORM\Column(name: "RP_CoutStd", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rpCoutstd = null;

    #[ORM\Column(name: "RP_Temps", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpTemps = null;

    #[ORM\Column(name: "RP_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $rpSommeil = null;

    #[ORM\Column(name: "RP_Capacite", nullable: true)]
    private ?int $rpCapacite = null;

    #[ORM\Column(name: "RP_Commentaire", length: 69, nullable: true)]
    private ?string $rpCommentaire = null;

    #[ORM\Column(name: "RP_DateCreation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rpDatecreation = null;

    #[ORM\Column(name: "RP_TypeRess", type: Types::SMALLINT, nullable: true)]
    private ?int $rpTyperess = null;

    #[ORM\Column(name: "RP_CodeExterne", length: 31, nullable: true)]
    private ?string $rpCodeexterne = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "RP_Adresse", length: 35, nullable: true)]
    private ?string $rpAdresse = null;

    #[ORM\Column(name: "RP_ComplementAdresse", length: 35, nullable: true)]
    private ?string $rpComplementadresse = null;

    #[ORM\Column(name: "RP_CodePostal", length: 9, nullable: true)]
    private ?string $rpCodepostal = null;

    #[ORM\Column(name: "RP_Ville", length: 35, nullable: true)]
    private ?string $rpVille = null;

    #[ORM\Column(name: "RP_Region", length: 35, nullable: true)]
    private ?string $rpRegion = null;

    #[ORM\Column(name: "RP_Pays", length: 35, nullable: true)]
    private ?string $rpPays = null;

    #[ORM\Column(name: "RP_Telephone", length: 21, nullable: true)]
    private ?string $rpTelephone = null;

    #[ORM\Column(name: "RP_Portable", length: 21, nullable: true)]
    private ?string $rpPortable = null;

    #[ORM\Column(name: "RP_EMail", length: 69, nullable: true)]
    private ?string $rpEmail = null;

    #[ORM\Column(name: "AR_RefDefaut", length: 19, nullable: true)]
    private ?string $arRefdefaut = null;

    #[ORM\Column(name: "RP_Unite", type: Types::SMALLINT, nullable: true)]
    private ?int $rpUnite = null;

    #[ORM\Column(name: "RP_Continue", type: Types::SMALLINT, nullable: true)]
    private ?int $rpContinue = null;

    #[ORM\Column(name: "CAL_No", nullable: true)]
    private ?int $calNo = null;

    #[ORM\Column(name: "RP_Horaire0101RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0101rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0101RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0101rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0102RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0102rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0102RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0102rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0201RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0201rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0201RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0201rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0202RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0202rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0202RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0202rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0301RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0301rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0301RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0301rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0302RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0302rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0302RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0302rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0401RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0401rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0401RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0401rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0402RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0402rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0402RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0402rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0501RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0501rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0501RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0501rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0502RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0502rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0502RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0502rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0601RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0601rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0601RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0601rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0602RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0602rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0602RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0602rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0701RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0701rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0701RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0701rpPlagefin = null;

    #[ORM\Column(name: "RP_Horaire0702RP_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0702rpPlagedebut = null;

    #[ORM\Column(name: "RP_Horaire0702RP_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $rpHoraire0702rpPlagefin = null;

    #[ORM\Column(name: "RP_Facebook", length: 35, nullable: true)]
    private ?string $rpFacebook = null;

    #[ORM\Column(name: "RP_LinkedIn", length: 35, nullable: true)]
    private ?string $rpLinkedin = null;

    #[ORM\Column(name: "RP_Skype", length: 35, nullable: true)]
    private ?string $rpSkype = null;

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

    public function getRpCode(): ?string
    {
        return $this->rpCode;
    }

    public function setRpCode(string $rpCode): static
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

    public function getRpType(): ?int
    {
        return $this->rpType;
    }

    public function setRpType(?int $rpType): static
    {
        $this->rpType = $rpType;

        return $this;
    }

    public function getRpIntitule(): ?string
    {
        return $this->rpIntitule;
    }

    public function setRpIntitule(?string $rpIntitule): static
    {
        $this->rpIntitule = $rpIntitule;

        return $this;
    }

    public function getCbrpIntitule()
    {
        return $this->cbrpIntitule;
    }

    public function setCbrpIntitule($cbrpIntitule): static
    {
        $this->cbrpIntitule = $cbrpIntitule;

        return $this;
    }

    public function getRpComplement(): ?string
    {
        return $this->rpComplement;
    }

    public function setRpComplement(?string $rpComplement): static
    {
        $this->rpComplement = $rpComplement;

        return $this;
    }

    public function getRpCentral(): ?string
    {
        return $this->rpCentral;
    }

    public function setRpCentral(?string $rpCentral): static
    {
        $this->rpCentral = $rpCentral;

        return $this;
    }

    public function getCbrpCentral()
    {
        return $this->cbrpCentral;
    }

    public function setCbrpCentral($cbrpCentral): static
    {
        $this->cbrpCentral = $cbrpCentral;

        return $this;
    }

    public function getRpVisite(): ?\DateTimeInterface
    {
        return $this->rpVisite;
    }

    public function setRpVisite(?\DateTimeInterface $rpVisite): static
    {
        $this->rpVisite = $rpVisite;

        return $this;
    }

    public function getRpCoutstd(): ?string
    {
        return $this->rpCoutstd;
    }

    public function setRpCoutstd(?string $rpCoutstd): static
    {
        $this->rpCoutstd = $rpCoutstd;

        return $this;
    }

    public function getRpTemps(): ?string
    {
        return $this->rpTemps;
    }

    public function setRpTemps(?string $rpTemps): static
    {
        $this->rpTemps = $rpTemps;

        return $this;
    }

    public function getRpSommeil(): ?int
    {
        return $this->rpSommeil;
    }

    public function setRpSommeil(?int $rpSommeil): static
    {
        $this->rpSommeil = $rpSommeil;

        return $this;
    }

    public function getRpCapacite(): ?int
    {
        return $this->rpCapacite;
    }

    public function setRpCapacite(?int $rpCapacite): static
    {
        $this->rpCapacite = $rpCapacite;

        return $this;
    }

    public function getRpCommentaire(): ?string
    {
        return $this->rpCommentaire;
    }

    public function setRpCommentaire(?string $rpCommentaire): static
    {
        $this->rpCommentaire = $rpCommentaire;

        return $this;
    }

    public function getRpDatecreation(): ?\DateTimeInterface
    {
        return $this->rpDatecreation;
    }

    public function setRpDatecreation(?\DateTimeInterface $rpDatecreation): static
    {
        $this->rpDatecreation = $rpDatecreation;

        return $this;
    }

    public function getRpTyperess(): ?int
    {
        return $this->rpTyperess;
    }

    public function setRpTyperess(?int $rpTyperess): static
    {
        $this->rpTyperess = $rpTyperess;

        return $this;
    }

    public function getRpCodeexterne(): ?string
    {
        return $this->rpCodeexterne;
    }

    public function setRpCodeexterne(?string $rpCodeexterne): static
    {
        $this->rpCodeexterne = $rpCodeexterne;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getRpAdresse(): ?string
    {
        return $this->rpAdresse;
    }

    public function setRpAdresse(?string $rpAdresse): static
    {
        $this->rpAdresse = $rpAdresse;

        return $this;
    }

    public function getRpComplementadresse(): ?string
    {
        return $this->rpComplementadresse;
    }

    public function setRpComplementadresse(?string $rpComplementadresse): static
    {
        $this->rpComplementadresse = $rpComplementadresse;

        return $this;
    }

    public function getRpCodepostal(): ?string
    {
        return $this->rpCodepostal;
    }

    public function setRpCodepostal(?string $rpCodepostal): static
    {
        $this->rpCodepostal = $rpCodepostal;

        return $this;
    }

    public function getRpVille(): ?string
    {
        return $this->rpVille;
    }

    public function setRpVille(?string $rpVille): static
    {
        $this->rpVille = $rpVille;

        return $this;
    }

    public function getRpRegion(): ?string
    {
        return $this->rpRegion;
    }

    public function setRpRegion(?string $rpRegion): static
    {
        $this->rpRegion = $rpRegion;

        return $this;
    }

    public function getRpPays(): ?string
    {
        return $this->rpPays;
    }

    public function setRpPays(?string $rpPays): static
    {
        $this->rpPays = $rpPays;

        return $this;
    }

    public function getRpTelephone(): ?string
    {
        return $this->rpTelephone;
    }

    public function setRpTelephone(?string $rpTelephone): static
    {
        $this->rpTelephone = $rpTelephone;

        return $this;
    }

    public function getRpPortable(): ?string
    {
        return $this->rpPortable;
    }

    public function setRpPortable(?string $rpPortable): static
    {
        $this->rpPortable = $rpPortable;

        return $this;
    }

    public function getRpEmail(): ?string
    {
        return $this->rpEmail;
    }

    public function setRpEmail(?string $rpEmail): static
    {
        $this->rpEmail = $rpEmail;

        return $this;
    }

    public function getArRefdefaut(): ?string
    {
        return $this->arRefdefaut;
    }

    public function setArRefdefaut(?string $arRefdefaut): static
    {
        $this->arRefdefaut = $arRefdefaut;

        return $this;
    }

    public function getRpUnite(): ?int
    {
        return $this->rpUnite;
    }

    public function setRpUnite(?int $rpUnite): static
    {
        $this->rpUnite = $rpUnite;

        return $this;
    }

    public function getRpContinue(): ?int
    {
        return $this->rpContinue;
    }

    public function setRpContinue(?int $rpContinue): static
    {
        $this->rpContinue = $rpContinue;

        return $this;
    }

    public function getCalNo(): ?int
    {
        return $this->calNo;
    }

    public function setCalNo(?int $calNo): static
    {
        $this->calNo = $calNo;

        return $this;
    }

    public function getRpHoraire0101rpPlagedebut(): ?string
    {
        return $this->rpHoraire0101rpPlagedebut;
    }

    public function setRpHoraire0101rpPlagedebut(?string $rpHoraire0101rpPlagedebut): static
    {
        $this->rpHoraire0101rpPlagedebut = $rpHoraire0101rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0101rpPlagefin(): ?string
    {
        return $this->rpHoraire0101rpPlagefin;
    }

    public function setRpHoraire0101rpPlagefin(?string $rpHoraire0101rpPlagefin): static
    {
        $this->rpHoraire0101rpPlagefin = $rpHoraire0101rpPlagefin;

        return $this;
    }

    public function getRpHoraire0102rpPlagedebut(): ?string
    {
        return $this->rpHoraire0102rpPlagedebut;
    }

    public function setRpHoraire0102rpPlagedebut(?string $rpHoraire0102rpPlagedebut): static
    {
        $this->rpHoraire0102rpPlagedebut = $rpHoraire0102rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0102rpPlagefin(): ?string
    {
        return $this->rpHoraire0102rpPlagefin;
    }

    public function setRpHoraire0102rpPlagefin(?string $rpHoraire0102rpPlagefin): static
    {
        $this->rpHoraire0102rpPlagefin = $rpHoraire0102rpPlagefin;

        return $this;
    }

    public function getRpHoraire0201rpPlagedebut(): ?string
    {
        return $this->rpHoraire0201rpPlagedebut;
    }

    public function setRpHoraire0201rpPlagedebut(?string $rpHoraire0201rpPlagedebut): static
    {
        $this->rpHoraire0201rpPlagedebut = $rpHoraire0201rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0201rpPlagefin(): ?string
    {
        return $this->rpHoraire0201rpPlagefin;
    }

    public function setRpHoraire0201rpPlagefin(?string $rpHoraire0201rpPlagefin): static
    {
        $this->rpHoraire0201rpPlagefin = $rpHoraire0201rpPlagefin;

        return $this;
    }

    public function getRpHoraire0202rpPlagedebut(): ?string
    {
        return $this->rpHoraire0202rpPlagedebut;
    }

    public function setRpHoraire0202rpPlagedebut(?string $rpHoraire0202rpPlagedebut): static
    {
        $this->rpHoraire0202rpPlagedebut = $rpHoraire0202rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0202rpPlagefin(): ?string
    {
        return $this->rpHoraire0202rpPlagefin;
    }

    public function setRpHoraire0202rpPlagefin(?string $rpHoraire0202rpPlagefin): static
    {
        $this->rpHoraire0202rpPlagefin = $rpHoraire0202rpPlagefin;

        return $this;
    }

    public function getRpHoraire0301rpPlagedebut(): ?string
    {
        return $this->rpHoraire0301rpPlagedebut;
    }

    public function setRpHoraire0301rpPlagedebut(?string $rpHoraire0301rpPlagedebut): static
    {
        $this->rpHoraire0301rpPlagedebut = $rpHoraire0301rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0301rpPlagefin(): ?string
    {
        return $this->rpHoraire0301rpPlagefin;
    }

    public function setRpHoraire0301rpPlagefin(?string $rpHoraire0301rpPlagefin): static
    {
        $this->rpHoraire0301rpPlagefin = $rpHoraire0301rpPlagefin;

        return $this;
    }

    public function getRpHoraire0302rpPlagedebut(): ?string
    {
        return $this->rpHoraire0302rpPlagedebut;
    }

    public function setRpHoraire0302rpPlagedebut(?string $rpHoraire0302rpPlagedebut): static
    {
        $this->rpHoraire0302rpPlagedebut = $rpHoraire0302rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0302rpPlagefin(): ?string
    {
        return $this->rpHoraire0302rpPlagefin;
    }

    public function setRpHoraire0302rpPlagefin(?string $rpHoraire0302rpPlagefin): static
    {
        $this->rpHoraire0302rpPlagefin = $rpHoraire0302rpPlagefin;

        return $this;
    }

    public function getRpHoraire0401rpPlagedebut(): ?string
    {
        return $this->rpHoraire0401rpPlagedebut;
    }

    public function setRpHoraire0401rpPlagedebut(?string $rpHoraire0401rpPlagedebut): static
    {
        $this->rpHoraire0401rpPlagedebut = $rpHoraire0401rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0401rpPlagefin(): ?string
    {
        return $this->rpHoraire0401rpPlagefin;
    }

    public function setRpHoraire0401rpPlagefin(?string $rpHoraire0401rpPlagefin): static
    {
        $this->rpHoraire0401rpPlagefin = $rpHoraire0401rpPlagefin;

        return $this;
    }

    public function getRpHoraire0402rpPlagedebut(): ?string
    {
        return $this->rpHoraire0402rpPlagedebut;
    }

    public function setRpHoraire0402rpPlagedebut(?string $rpHoraire0402rpPlagedebut): static
    {
        $this->rpHoraire0402rpPlagedebut = $rpHoraire0402rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0402rpPlagefin(): ?string
    {
        return $this->rpHoraire0402rpPlagefin;
    }

    public function setRpHoraire0402rpPlagefin(?string $rpHoraire0402rpPlagefin): static
    {
        $this->rpHoraire0402rpPlagefin = $rpHoraire0402rpPlagefin;

        return $this;
    }

    public function getRpHoraire0501rpPlagedebut(): ?string
    {
        return $this->rpHoraire0501rpPlagedebut;
    }

    public function setRpHoraire0501rpPlagedebut(?string $rpHoraire0501rpPlagedebut): static
    {
        $this->rpHoraire0501rpPlagedebut = $rpHoraire0501rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0501rpPlagefin(): ?string
    {
        return $this->rpHoraire0501rpPlagefin;
    }

    public function setRpHoraire0501rpPlagefin(?string $rpHoraire0501rpPlagefin): static
    {
        $this->rpHoraire0501rpPlagefin = $rpHoraire0501rpPlagefin;

        return $this;
    }

    public function getRpHoraire0502rpPlagedebut(): ?string
    {
        return $this->rpHoraire0502rpPlagedebut;
    }

    public function setRpHoraire0502rpPlagedebut(?string $rpHoraire0502rpPlagedebut): static
    {
        $this->rpHoraire0502rpPlagedebut = $rpHoraire0502rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0502rpPlagefin(): ?string
    {
        return $this->rpHoraire0502rpPlagefin;
    }

    public function setRpHoraire0502rpPlagefin(?string $rpHoraire0502rpPlagefin): static
    {
        $this->rpHoraire0502rpPlagefin = $rpHoraire0502rpPlagefin;

        return $this;
    }

    public function getRpHoraire0601rpPlagedebut(): ?string
    {
        return $this->rpHoraire0601rpPlagedebut;
    }

    public function setRpHoraire0601rpPlagedebut(?string $rpHoraire0601rpPlagedebut): static
    {
        $this->rpHoraire0601rpPlagedebut = $rpHoraire0601rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0601rpPlagefin(): ?string
    {
        return $this->rpHoraire0601rpPlagefin;
    }

    public function setRpHoraire0601rpPlagefin(?string $rpHoraire0601rpPlagefin): static
    {
        $this->rpHoraire0601rpPlagefin = $rpHoraire0601rpPlagefin;

        return $this;
    }

    public function getRpHoraire0602rpPlagedebut(): ?string
    {
        return $this->rpHoraire0602rpPlagedebut;
    }

    public function setRpHoraire0602rpPlagedebut(?string $rpHoraire0602rpPlagedebut): static
    {
        $this->rpHoraire0602rpPlagedebut = $rpHoraire0602rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0602rpPlagefin(): ?string
    {
        return $this->rpHoraire0602rpPlagefin;
    }

    public function setRpHoraire0602rpPlagefin(?string $rpHoraire0602rpPlagefin): static
    {
        $this->rpHoraire0602rpPlagefin = $rpHoraire0602rpPlagefin;

        return $this;
    }

    public function getRpHoraire0701rpPlagedebut(): ?string
    {
        return $this->rpHoraire0701rpPlagedebut;
    }

    public function setRpHoraire0701rpPlagedebut(?string $rpHoraire0701rpPlagedebut): static
    {
        $this->rpHoraire0701rpPlagedebut = $rpHoraire0701rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0701rpPlagefin(): ?string
    {
        return $this->rpHoraire0701rpPlagefin;
    }

    public function setRpHoraire0701rpPlagefin(?string $rpHoraire0701rpPlagefin): static
    {
        $this->rpHoraire0701rpPlagefin = $rpHoraire0701rpPlagefin;

        return $this;
    }

    public function getRpHoraire0702rpPlagedebut(): ?string
    {
        return $this->rpHoraire0702rpPlagedebut;
    }

    public function setRpHoraire0702rpPlagedebut(?string $rpHoraire0702rpPlagedebut): static
    {
        $this->rpHoraire0702rpPlagedebut = $rpHoraire0702rpPlagedebut;

        return $this;
    }

    public function getRpHoraire0702rpPlagefin(): ?string
    {
        return $this->rpHoraire0702rpPlagefin;
    }

    public function setRpHoraire0702rpPlagefin(?string $rpHoraire0702rpPlagefin): static
    {
        $this->rpHoraire0702rpPlagefin = $rpHoraire0702rpPlagefin;

        return $this;
    }

    public function getRpFacebook(): ?string
    {
        return $this->rpFacebook;
    }

    public function setRpFacebook(?string $rpFacebook): static
    {
        $this->rpFacebook = $rpFacebook;

        return $this;
    }

    public function getRpLinkedin(): ?string
    {
        return $this->rpLinkedin;
    }

    public function setRpLinkedin(?string $rpLinkedin): static
    {
        $this->rpLinkedin = $rpLinkedin;

        return $this;
    }

    public function getRpSkype(): ?string
    {
        return $this->rpSkype;
    }

    public function setRpSkype(?string $rpSkype): static
    {
        $this->rpSkype = $rpSkype;

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
