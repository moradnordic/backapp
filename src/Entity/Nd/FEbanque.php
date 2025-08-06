<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEbanqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EBANQUE')]
#[ORM\UniqueConstraint(name: 'IEB_BANQUE', columns: ['N_Devise'])]
#[ORM\UniqueConstraint(name: 'IEB_NO', columns: ['EB_No'])]
#[ORM\UniqueConstraint(name: 'IEB_ABREGE', columns: ['cbEB_Abrege'])]
#[ORM\Index(name: 'IEB_BQNOABREGE', columns: ['cbEB_Abrege'])]
#[ORM\Index(name: 'IEB_JONUMESCOMPTE', columns: ['cbJO_NumEscompte'])]
#[ORM\Index(name: 'IEB_JONUMENCAISS', columns: ['cbJO_NumEncaiss'])]
#[ORM\Index(name: 'IEB_IGABREGE', columns: ['cbEB_Abrege'])]
#[ORM\Index(name: 'IEB_IGJONUM', columns: ['N_Devise'])]
#[ORM\Index(name: 'IEB_IGBQNOABREGE', columns: ['cbEB_Abrege'])]
#[ORM\Index(name: 'FKIA_F_EBANQUE_BQ_No', columns: ['BQ_No'])]
#[ORM\Entity(repositoryClass: FEbanqueRepository::class)]
class FEbanque
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "BQ_No")]
    private ?int $bqNo = null;

    #[ORM\Column(name: "EB_Banque", length: 15, nullable: true)]
    private ?string $ebBanque = null;

    #[ORM\Column(name: "cbEB_Banque", type: Types::BINARY, nullable: true)]
    private $cbebBanque = null;

    #[ORM\Column(name: "EB_Guichet", length: 17, nullable: true)]
    private ?string $ebGuichet = null;

    #[ORM\Column(name: "cbEB_Guichet", type: Types::BINARY, nullable: true)]
    private $cbebGuichet = null;

    #[ORM\Column(name: "EB_Compte", length: 35, nullable: true)]
    private ?string $ebCompte = null;

    #[ORM\Column(name: "cbEB_Compte", type: Types::BINARY, nullable: true)]
    private $cbebCompte = null;

    #[ORM\Column(name: "EB_Cle", length: 3, nullable: true)]
    private ?string $ebCle = null;

    #[ORM\Column(name: "EB_Commentaire", length: 69, nullable: true)]
    private ?string $ebCommentaire = null;

    #[ORM\Column(name: "JO_Num", length: 7, nullable: true)]
    private ?string $joNum = null;

    #[ORM\Column(name: "cbJO_Num", type: Types::BINARY, nullable: true)]
    private $cbjoNum = null;

    #[ORM\Column(name: "EB_Struct", type: Types::SMALLINT, nullable: true)]
    private ?int $ebStruct = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "EB_No", nullable: true)]
    private ?int $ebNo = null;

    #[ORM\Column(name: "EB_Abrege", length: 5, nullable: true)]
    private ?string $ebAbrege = null;

    #[ORM\Column(name: "cbEB_Abrege", type: Types::BINARY, nullable: true)]
    private $cbebAbrege = null;

    #[ORM\Column(name: "EB_Emetteur01", length: 7, nullable: true)]
    private ?string $ebEmetteur01 = null;

    #[ORM\Column(name: "EB_Emetteur02", length: 7, nullable: true)]
    private ?string $ebEmetteur02 = null;

    #[ORM\Column(name: "EB_Emetteur03", length: 7, nullable: true)]
    private ?string $ebEmetteur03 = null;

    #[ORM\Column(name: "EB_Adresse", length: 35, nullable: true)]
    private ?string $ebAdresse = null;

    #[ORM\Column(name: "EB_Complement", length: 35, nullable: true)]
    private ?string $ebComplement = null;

    #[ORM\Column(name: "EB_CodePostal", length: 9, nullable: true)]
    private ?string $ebCodepostal = null;

    #[ORM\Column(name: "EB_Ville", length: 35, nullable: true)]
    private ?string $ebVille = null;

    #[ORM\Column(name: "EB_Pays", length: 35, nullable: true)]
    private ?string $ebPays = null;

    #[ORM\Column(name: "EB_BIC", length: 11, nullable: true)]
    private ?string $ebBic = null;

    #[ORM\Column(name: "EB_IBAN", length: 35, nullable: true)]
    private ?string $ebIban = null;

    #[ORM\Column(name: "EB_CalculIBAN", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCalculiban = null;

    #[ORM\Column(name: "EB_NomAgence", length: 35, nullable: true)]
    private ?string $ebNomagence = null;

    #[ORM\Column(name: "JO_NumEscompte", length: 7, nullable: true)]
    private ?string $joNumescompte = null;

    #[ORM\Column(name: "cbJO_NumEscompte", type: Types::BINARY, nullable: true)]
    private $cbjoNumescompte = null;

    #[ORM\Column(name: "JO_NumEncaiss", length: 7, nullable: true)]
    private ?string $joNumencaiss = null;

    #[ORM\Column(name: "cbJO_NumEncaiss", type: Types::BINARY, nullable: true)]
    private $cbjoNumencaiss = null;

    #[ORM\Column(name: "EB_IntraGroupe", type: Types::SMALLINT, nullable: true)]
    private ?int $ebIntragroupe = null;

    #[ORM\Column(name: "EB_RaisonSocBenef", length: 35, nullable: true)]
    private ?string $ebRaisonsocbenef = null;

    #[ORM\Column(name: "EB_AdresseBenef", length: 35, nullable: true)]
    private ?string $ebAdressebenef = null;

    #[ORM\Column(name: "EB_ComplementBenef", length: 35, nullable: true)]
    private ?string $ebComplementbenef = null;

    #[ORM\Column(name: "EB_CodePostalBenef", length: 9, nullable: true)]
    private ?string $ebCodepostalbenef = null;

    #[ORM\Column(name: "EB_VilleBenef", length: 35, nullable: true)]
    private ?string $ebVillebenef = null;

    #[ORM\Column(name: "EB_PaysBenef", length: 35, nullable: true)]
    private ?string $ebPaysbenef = null;

    #[ORM\Column(name: "EB_SiretBenef", length: 15, nullable: true)]
    private ?string $ebSiretbenef = null;

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

    #[ORM\Column(name: "EB_CodeRegionBenef", length: 25, nullable: true)]
    private ?string $ebCoderegionbenef = null;

    #[ORM\Column(name: "EB_CodeRegion", length: 25, nullable: true)]
    private ?string $ebCoderegion = null;

    #[ORM\Column(name: "EB_PaysAgence", length: 35, nullable: true)]
    private ?string $ebPaysagence = null;

    #[ORM\Column(name: "EB_FileExtrait", length: 259, nullable: true)]
    private ?string $ebFileextrait = null;

    #[ORM\Column(name: "EB_TresoPublic", type: Types::SMALLINT, nullable: true)]
    private ?int $ebTresopublic = null;

    #[ORM\Column(name: "EB_BanqueDeFrance", type: Types::SMALLINT, nullable: true)]
    private ?int $ebBanquedefrance = null;

    #[ORM\Column(name: "EB_TPServiceDepot", length: 71, nullable: true)]
    private ?string $ebTpservicedepot = null;

    #[ORM\Column(name: "EB_TPTypeService", type: Types::SMALLINT, nullable: true)]
    private ?int $ebTptypeservice = null;

    #[ORM\Column(name: "EB_TPCodique", length: 7, nullable: true)]
    private ?string $ebTpcodique = null;

    #[ORM\Column(name: "EB_TPIBAN", length: 35, nullable: true)]
    private ?string $ebTpiban = null;

    #[ORM\Column(name: "EB_TPBIC", length: 11, nullable: true)]
    private ?string $ebTpbic = null;

    #[ORM\Column(name: "EB_TPRemise51", type: Types::SMALLINT, nullable: true)]
    private ?int $ebTpremise51 = null;

    #[ORM\Column(name: "EB_TPIdentifiant51", length: 9, nullable: true)]
    private ?string $ebTpidentifiant51 = null;

    #[ORM\Column(name: "EB_BDFCodeRemettant", length: 5, nullable: true)]
    private ?string $ebBdfcoderemettant = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getBqNo(): ?int
    {
        return $this->bqNo;
    }

    public function setBqNo(int $bqNo): static
    {
        $this->bqNo = $bqNo;

        return $this;
    }

    public function getEbBanque(): ?string
    {
        return $this->ebBanque;
    }

    public function setEbBanque(?string $ebBanque): static
    {
        $this->ebBanque = $ebBanque;

        return $this;
    }

    public function getCbebBanque()
    {
        return $this->cbebBanque;
    }

    public function setCbebBanque($cbebBanque): static
    {
        $this->cbebBanque = $cbebBanque;

        return $this;
    }

    public function getEbGuichet(): ?string
    {
        return $this->ebGuichet;
    }

    public function setEbGuichet(?string $ebGuichet): static
    {
        $this->ebGuichet = $ebGuichet;

        return $this;
    }

    public function getCbebGuichet()
    {
        return $this->cbebGuichet;
    }

    public function setCbebGuichet($cbebGuichet): static
    {
        $this->cbebGuichet = $cbebGuichet;

        return $this;
    }

    public function getEbCompte(): ?string
    {
        return $this->ebCompte;
    }

    public function setEbCompte(?string $ebCompte): static
    {
        $this->ebCompte = $ebCompte;

        return $this;
    }

    public function getCbebCompte()
    {
        return $this->cbebCompte;
    }

    public function setCbebCompte($cbebCompte): static
    {
        $this->cbebCompte = $cbebCompte;

        return $this;
    }

    public function getEbCle(): ?string
    {
        return $this->ebCle;
    }

    public function setEbCle(?string $ebCle): static
    {
        $this->ebCle = $ebCle;

        return $this;
    }

    public function getEbCommentaire(): ?string
    {
        return $this->ebCommentaire;
    }

    public function setEbCommentaire(?string $ebCommentaire): static
    {
        $this->ebCommentaire = $ebCommentaire;

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

    public function getCbjoNum()
    {
        return $this->cbjoNum;
    }

    public function setCbjoNum($cbjoNum): static
    {
        $this->cbjoNum = $cbjoNum;

        return $this;
    }

    public function getEbStruct(): ?int
    {
        return $this->ebStruct;
    }

    public function setEbStruct(?int $ebStruct): static
    {
        $this->ebStruct = $ebStruct;

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

    public function getEbNo(): ?int
    {
        return $this->ebNo;
    }

    public function setEbNo(?int $ebNo): static
    {
        $this->ebNo = $ebNo;

        return $this;
    }

    public function getEbAbrege(): ?string
    {
        return $this->ebAbrege;
    }

    public function setEbAbrege(?string $ebAbrege): static
    {
        $this->ebAbrege = $ebAbrege;

        return $this;
    }

    public function getCbebAbrege()
    {
        return $this->cbebAbrege;
    }

    public function setCbebAbrege($cbebAbrege): static
    {
        $this->cbebAbrege = $cbebAbrege;

        return $this;
    }

    public function getEbEmetteur01(): ?string
    {
        return $this->ebEmetteur01;
    }

    public function setEbEmetteur01(?string $ebEmetteur01): static
    {
        $this->ebEmetteur01 = $ebEmetteur01;

        return $this;
    }

    public function getEbEmetteur02(): ?string
    {
        return $this->ebEmetteur02;
    }

    public function setEbEmetteur02(?string $ebEmetteur02): static
    {
        $this->ebEmetteur02 = $ebEmetteur02;

        return $this;
    }

    public function getEbEmetteur03(): ?string
    {
        return $this->ebEmetteur03;
    }

    public function setEbEmetteur03(?string $ebEmetteur03): static
    {
        $this->ebEmetteur03 = $ebEmetteur03;

        return $this;
    }

    public function getEbAdresse(): ?string
    {
        return $this->ebAdresse;
    }

    public function setEbAdresse(?string $ebAdresse): static
    {
        $this->ebAdresse = $ebAdresse;

        return $this;
    }

    public function getEbComplement(): ?string
    {
        return $this->ebComplement;
    }

    public function setEbComplement(?string $ebComplement): static
    {
        $this->ebComplement = $ebComplement;

        return $this;
    }

    public function getEbCodepostal(): ?string
    {
        return $this->ebCodepostal;
    }

    public function setEbCodepostal(?string $ebCodepostal): static
    {
        $this->ebCodepostal = $ebCodepostal;

        return $this;
    }

    public function getEbVille(): ?string
    {
        return $this->ebVille;
    }

    public function setEbVille(?string $ebVille): static
    {
        $this->ebVille = $ebVille;

        return $this;
    }

    public function getEbPays(): ?string
    {
        return $this->ebPays;
    }

    public function setEbPays(?string $ebPays): static
    {
        $this->ebPays = $ebPays;

        return $this;
    }

    public function getEbBic(): ?string
    {
        return $this->ebBic;
    }

    public function setEbBic(?string $ebBic): static
    {
        $this->ebBic = $ebBic;

        return $this;
    }

    public function getEbIban(): ?string
    {
        return $this->ebIban;
    }

    public function setEbIban(?string $ebIban): static
    {
        $this->ebIban = $ebIban;

        return $this;
    }

    public function getEbCalculiban(): ?int
    {
        return $this->ebCalculiban;
    }

    public function setEbCalculiban(?int $ebCalculiban): static
    {
        $this->ebCalculiban = $ebCalculiban;

        return $this;
    }

    public function getEbNomagence(): ?string
    {
        return $this->ebNomagence;
    }

    public function setEbNomagence(?string $ebNomagence): static
    {
        $this->ebNomagence = $ebNomagence;

        return $this;
    }

    public function getJoNumescompte(): ?string
    {
        return $this->joNumescompte;
    }

    public function setJoNumescompte(?string $joNumescompte): static
    {
        $this->joNumescompte = $joNumescompte;

        return $this;
    }

    public function getCbjoNumescompte()
    {
        return $this->cbjoNumescompte;
    }

    public function setCbjoNumescompte($cbjoNumescompte): static
    {
        $this->cbjoNumescompte = $cbjoNumescompte;

        return $this;
    }

    public function getJoNumencaiss(): ?string
    {
        return $this->joNumencaiss;
    }

    public function setJoNumencaiss(?string $joNumencaiss): static
    {
        $this->joNumencaiss = $joNumencaiss;

        return $this;
    }

    public function getCbjoNumencaiss()
    {
        return $this->cbjoNumencaiss;
    }

    public function setCbjoNumencaiss($cbjoNumencaiss): static
    {
        $this->cbjoNumencaiss = $cbjoNumencaiss;

        return $this;
    }

    public function getEbIntragroupe(): ?int
    {
        return $this->ebIntragroupe;
    }

    public function setEbIntragroupe(?int $ebIntragroupe): static
    {
        $this->ebIntragroupe = $ebIntragroupe;

        return $this;
    }

    public function getEbRaisonsocbenef(): ?string
    {
        return $this->ebRaisonsocbenef;
    }

    public function setEbRaisonsocbenef(?string $ebRaisonsocbenef): static
    {
        $this->ebRaisonsocbenef = $ebRaisonsocbenef;

        return $this;
    }

    public function getEbAdressebenef(): ?string
    {
        return $this->ebAdressebenef;
    }

    public function setEbAdressebenef(?string $ebAdressebenef): static
    {
        $this->ebAdressebenef = $ebAdressebenef;

        return $this;
    }

    public function getEbComplementbenef(): ?string
    {
        return $this->ebComplementbenef;
    }

    public function setEbComplementbenef(?string $ebComplementbenef): static
    {
        $this->ebComplementbenef = $ebComplementbenef;

        return $this;
    }

    public function getEbCodepostalbenef(): ?string
    {
        return $this->ebCodepostalbenef;
    }

    public function setEbCodepostalbenef(?string $ebCodepostalbenef): static
    {
        $this->ebCodepostalbenef = $ebCodepostalbenef;

        return $this;
    }

    public function getEbVillebenef(): ?string
    {
        return $this->ebVillebenef;
    }

    public function setEbVillebenef(?string $ebVillebenef): static
    {
        $this->ebVillebenef = $ebVillebenef;

        return $this;
    }

    public function getEbPaysbenef(): ?string
    {
        return $this->ebPaysbenef;
    }

    public function setEbPaysbenef(?string $ebPaysbenef): static
    {
        $this->ebPaysbenef = $ebPaysbenef;

        return $this;
    }

    public function getEbSiretbenef(): ?string
    {
        return $this->ebSiretbenef;
    }

    public function setEbSiretbenef(?string $ebSiretbenef): static
    {
        $this->ebSiretbenef = $ebSiretbenef;

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

    public function getEbCoderegionbenef(): ?string
    {
        return $this->ebCoderegionbenef;
    }

    public function setEbCoderegionbenef(?string $ebCoderegionbenef): static
    {
        $this->ebCoderegionbenef = $ebCoderegionbenef;

        return $this;
    }

    public function getEbCoderegion(): ?string
    {
        return $this->ebCoderegion;
    }

    public function setEbCoderegion(?string $ebCoderegion): static
    {
        $this->ebCoderegion = $ebCoderegion;

        return $this;
    }

    public function getEbPaysagence(): ?string
    {
        return $this->ebPaysagence;
    }

    public function setEbPaysagence(?string $ebPaysagence): static
    {
        $this->ebPaysagence = $ebPaysagence;

        return $this;
    }

    public function getEbFileextrait(): ?string
    {
        return $this->ebFileextrait;
    }

    public function setEbFileextrait(?string $ebFileextrait): static
    {
        $this->ebFileextrait = $ebFileextrait;

        return $this;
    }

    public function getEbTresopublic(): ?int
    {
        return $this->ebTresopublic;
    }

    public function setEbTresopublic(?int $ebTresopublic): static
    {
        $this->ebTresopublic = $ebTresopublic;

        return $this;
    }

    public function getEbBanquedefrance(): ?int
    {
        return $this->ebBanquedefrance;
    }

    public function setEbBanquedefrance(?int $ebBanquedefrance): static
    {
        $this->ebBanquedefrance = $ebBanquedefrance;

        return $this;
    }

    public function getEbTpservicedepot(): ?string
    {
        return $this->ebTpservicedepot;
    }

    public function setEbTpservicedepot(?string $ebTpservicedepot): static
    {
        $this->ebTpservicedepot = $ebTpservicedepot;

        return $this;
    }

    public function getEbTptypeservice(): ?int
    {
        return $this->ebTptypeservice;
    }

    public function setEbTptypeservice(?int $ebTptypeservice): static
    {
        $this->ebTptypeservice = $ebTptypeservice;

        return $this;
    }

    public function getEbTpcodique(): ?string
    {
        return $this->ebTpcodique;
    }

    public function setEbTpcodique(?string $ebTpcodique): static
    {
        $this->ebTpcodique = $ebTpcodique;

        return $this;
    }

    public function getEbTpiban(): ?string
    {
        return $this->ebTpiban;
    }

    public function setEbTpiban(?string $ebTpiban): static
    {
        $this->ebTpiban = $ebTpiban;

        return $this;
    }

    public function getEbTpbic(): ?string
    {
        return $this->ebTpbic;
    }

    public function setEbTpbic(?string $ebTpbic): static
    {
        $this->ebTpbic = $ebTpbic;

        return $this;
    }

    public function getEbTpremise51(): ?int
    {
        return $this->ebTpremise51;
    }

    public function setEbTpremise51(?int $ebTpremise51): static
    {
        $this->ebTpremise51 = $ebTpremise51;

        return $this;
    }

    public function getEbTpidentifiant51(): ?string
    {
        return $this->ebTpidentifiant51;
    }

    public function setEbTpidentifiant51(?string $ebTpidentifiant51): static
    {
        $this->ebTpidentifiant51 = $ebTpidentifiant51;

        return $this;
    }

    public function getEbBdfcoderemettant(): ?string
    {
        return $this->ebBdfcoderemettant;
    }

    public function setEbBdfcoderemettant(?string $ebBdfcoderemettant): static
    {
        $this->ebBdfcoderemettant = $ebBdfcoderemettant;

        return $this;
    }
}
