<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FCollaborateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COLLABORATEUR')]
#[ORM\UniqueConstraint(name: 'ICO_NOM', columns: ['cbCO_Prenom'])]
#[ORM\Index(name: 'ICO_FONCTION', columns: ['cbCO_Prenom'])]
#[ORM\UniqueConstraint(name: 'ICO_CONO', columns: ['CO_No'])]
#[ORM\Index(name: 'ICO_VENDEUR', columns: ['cbCO_Prenom'])]
#[ORM\Index(name: 'ICO_CAISSIER', columns: ['cbCO_Prenom'])]
#[ORM\Index(name: 'ICO_ACHETEUR', columns: ['cbCO_Prenom'])]
#[ORM\Index(name: 'ICO_UTILISATEUR', columns: ['PROT_No'])]
#[ORM\Index(name: 'ICO_RECEPTIONNAIRE', columns: ['cbCO_Prenom'])]
#[ORM\Index(name: 'ICO_CHARGERECOUVR', columns: ['cbCO_Prenom'])]
#[ORM\Index(name: 'ICO_MATRICULE', columns: ['cbCO_Matricule'])]
#[ORM\Index(name: 'ICO_FINANCIER', columns: ['cbCO_Prenom'])]
#[ORM\Index(name: 'FKIA_F_COLLABORATEUR_PROT_No', columns: ['cbPROT_No'])]
#[ORM\Entity(repositoryClass: FCollaborateurRepository::class)]
class FCollaborateur
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "CO_Nom", length: 35, nullable: true)]
    private ?string $coNom = null;

    #[ORM\Column(name: "cbCO_Nom", type: Types::BINARY, nullable: true)]
    private $cbcoNom = null;

    #[ORM\Column(name: "CO_Prenom", length: 35, nullable: true)]
    private ?string $coPrenom = null;

    #[ORM\Column(name: "cbCO_Prenom", type: Types::BINARY, nullable: true)]
    private $cbcoPrenom = null;

    #[ORM\Column(name: "CO_Fonction", length: 35, nullable: true)]
    private ?string $coFonction = null;

    #[ORM\Column(name: "cbCO_Fonction", type: Types::BINARY, nullable: true)]
    private $cbcoFonction = null;

    #[ORM\Column(name: "CO_Adresse", length: 35, nullable: true)]
    private ?string $coAdresse = null;

    #[ORM\Column(name: "CO_Complement", length: 35, nullable: true)]
    private ?string $coComplement = null;

    #[ORM\Column(name: "CO_CodePostal", length: 9, nullable: true)]
    private ?string $coCodepostal = null;

    #[ORM\Column(name: "CO_Ville", length: 35, nullable: true)]
    private ?string $coVille = null;

    #[ORM\Column(name: "CO_CodeRegion", length: 25, nullable: true)]
    private ?string $coCoderegion = null;

    #[ORM\Column(name: "CO_Pays", length: 35, nullable: true)]
    private ?string $coPays = null;

    #[ORM\Column(name: "CO_Service", length: 35, nullable: true)]
    private ?string $coService = null;

    #[ORM\Column(name: "CO_Vendeur", type: Types::SMALLINT, nullable: true)]
    private ?int $coVendeur = null;

    #[ORM\Column(name: "CO_Caissier", type: Types::SMALLINT, nullable: true)]
    private ?int $coCaissier = null;

    #[ORM\Column(name: "CO_DateCreation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $coDatecreation = null;

    #[ORM\Column(name: "CO_Acheteur", type: Types::SMALLINT, nullable: true)]
    private ?int $coAcheteur = null;

    #[ORM\Column(name: "CO_Telephone", length: 21, nullable: true)]
    private ?string $coTelephone = null;

    #[ORM\Column(name: "CO_Telecopie", length: 21, nullable: true)]
    private ?string $coTelecopie = null;

    #[ORM\Column(name: "CO_EMail", length: 69, nullable: true)]
    private ?string $coEmail = null;

    #[ORM\Column(name: "CO_Receptionnaire", type: Types::SMALLINT, nullable: true)]
    private ?int $coReceptionnaire = null;

    #[ORM\Column(name: "PROT_No", nullable: true)]
    private ?int $protNo = null;

    #[ORM\Column(name: "cbPROT_No", nullable: true)]
    private ?int $cbprotNo = null;

    #[ORM\Column(name: "CO_TelPortable", length: 21, nullable: true)]
    private ?string $coTelportable = null;

    #[ORM\Column(name: "CO_ChargeRecouvr", type: Types::SMALLINT, nullable: true)]
    private ?int $coChargerecouvr = null;

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

    #[ORM\Column(name: "CO_Matricule", length: 11, nullable: true)]
    private ?string $coMatricule = null;

    #[ORM\Column(name: "cbCO_Matricule", type: Types::BINARY, nullable: true)]
    private $cbcoMatricule = null;

    #[ORM\Column(name: "CO_Financier", type: Types::SMALLINT, nullable: true)]
    private ?int $coFinancier = null;

    #[ORM\Column(name: "CO_Transmission", type: Types::SMALLINT, nullable: true)]
    private ?int $coTransmission = null;

    #[ORM\Column(name: "CO_Facebook", length: 35, nullable: true)]
    private ?string $coFacebook = null;

    #[ORM\Column(name: "CO_LinkedIn", length: 35, nullable: true)]
    private ?string $coLinkedin = null;

    #[ORM\Column(name: "CO_Skype", length: 35, nullable: true)]
    private ?string $coSkype = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
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

    public function getCoNom(): ?string
    {
        return $this->coNom;
    }

    public function setCoNom(?string $coNom): static
    {
        $this->coNom = $coNom;

        return $this;
    }

    public function getCbcoNom()
    {
        return $this->cbcoNom;
    }

    public function setCbcoNom($cbcoNom): static
    {
        $this->cbcoNom = $cbcoNom;

        return $this;
    }

    public function getCoPrenom(): ?string
    {
        return $this->coPrenom;
    }

    public function setCoPrenom(?string $coPrenom): static
    {
        $this->coPrenom = $coPrenom;

        return $this;
    }

    public function getCbcoPrenom()
    {
        return $this->cbcoPrenom;
    }

    public function setCbcoPrenom($cbcoPrenom): static
    {
        $this->cbcoPrenom = $cbcoPrenom;

        return $this;
    }

    public function getCoFonction(): ?string
    {
        return $this->coFonction;
    }

    public function setCoFonction(?string $coFonction): static
    {
        $this->coFonction = $coFonction;

        return $this;
    }

    public function getCbcoFonction()
    {
        return $this->cbcoFonction;
    }

    public function setCbcoFonction($cbcoFonction): static
    {
        $this->cbcoFonction = $cbcoFonction;

        return $this;
    }

    public function getCoAdresse(): ?string
    {
        return $this->coAdresse;
    }

    public function setCoAdresse(?string $coAdresse): static
    {
        $this->coAdresse = $coAdresse;

        return $this;
    }

    public function getCoComplement(): ?string
    {
        return $this->coComplement;
    }

    public function setCoComplement(?string $coComplement): static
    {
        $this->coComplement = $coComplement;

        return $this;
    }

    public function getCoCodepostal(): ?string
    {
        return $this->coCodepostal;
    }

    public function setCoCodepostal(?string $coCodepostal): static
    {
        $this->coCodepostal = $coCodepostal;

        return $this;
    }

    public function getCoVille(): ?string
    {
        return $this->coVille;
    }

    public function setCoVille(?string $coVille): static
    {
        $this->coVille = $coVille;

        return $this;
    }

    public function getCoCoderegion(): ?string
    {
        return $this->coCoderegion;
    }

    public function setCoCoderegion(?string $coCoderegion): static
    {
        $this->coCoderegion = $coCoderegion;

        return $this;
    }

    public function getCoPays(): ?string
    {
        return $this->coPays;
    }

    public function setCoPays(?string $coPays): static
    {
        $this->coPays = $coPays;

        return $this;
    }

    public function getCoService(): ?string
    {
        return $this->coService;
    }

    public function setCoService(?string $coService): static
    {
        $this->coService = $coService;

        return $this;
    }

    public function getCoVendeur(): ?int
    {
        return $this->coVendeur;
    }

    public function setCoVendeur(?int $coVendeur): static
    {
        $this->coVendeur = $coVendeur;

        return $this;
    }

    public function getCoCaissier(): ?int
    {
        return $this->coCaissier;
    }

    public function setCoCaissier(?int $coCaissier): static
    {
        $this->coCaissier = $coCaissier;

        return $this;
    }

    public function getCoDatecreation(): ?\DateTimeInterface
    {
        return $this->coDatecreation;
    }

    public function setCoDatecreation(?\DateTimeInterface $coDatecreation): static
    {
        $this->coDatecreation = $coDatecreation;

        return $this;
    }

    public function getCoAcheteur(): ?int
    {
        return $this->coAcheteur;
    }

    public function setCoAcheteur(?int $coAcheteur): static
    {
        $this->coAcheteur = $coAcheteur;

        return $this;
    }

    public function getCoTelephone(): ?string
    {
        return $this->coTelephone;
    }

    public function setCoTelephone(?string $coTelephone): static
    {
        $this->coTelephone = $coTelephone;

        return $this;
    }

    public function getCoTelecopie(): ?string
    {
        return $this->coTelecopie;
    }

    public function setCoTelecopie(?string $coTelecopie): static
    {
        $this->coTelecopie = $coTelecopie;

        return $this;
    }

    public function getCoEmail(): ?string
    {
        return $this->coEmail;
    }

    public function setCoEmail(?string $coEmail): static
    {
        $this->coEmail = $coEmail;

        return $this;
    }

    public function getCoReceptionnaire(): ?int
    {
        return $this->coReceptionnaire;
    }

    public function setCoReceptionnaire(?int $coReceptionnaire): static
    {
        $this->coReceptionnaire = $coReceptionnaire;

        return $this;
    }

    public function getProtNo(): ?int
    {
        return $this->protNo;
    }

    public function setProtNo(?int $protNo): static
    {
        $this->protNo = $protNo;

        return $this;
    }

    public function getCbprotNo(): ?int
    {
        return $this->cbprotNo;
    }

    public function setCbprotNo(?int $cbprotNo): static
    {
        $this->cbprotNo = $cbprotNo;

        return $this;
    }

    public function getCoTelportable(): ?string
    {
        return $this->coTelportable;
    }

    public function setCoTelportable(?string $coTelportable): static
    {
        $this->coTelportable = $coTelportable;

        return $this;
    }

    public function getCoChargerecouvr(): ?int
    {
        return $this->coChargerecouvr;
    }

    public function setCoChargerecouvr(?int $coChargerecouvr): static
    {
        $this->coChargerecouvr = $coChargerecouvr;

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

    public function getCoMatricule(): ?string
    {
        return $this->coMatricule;
    }

    public function setCoMatricule(?string $coMatricule): static
    {
        $this->coMatricule = $coMatricule;

        return $this;
    }

    public function getCbcoMatricule()
    {
        return $this->cbcoMatricule;
    }

    public function setCbcoMatricule($cbcoMatricule): static
    {
        $this->cbcoMatricule = $cbcoMatricule;

        return $this;
    }

    public function getCoFinancier(): ?int
    {
        return $this->coFinancier;
    }

    public function setCoFinancier(?int $coFinancier): static
    {
        $this->coFinancier = $coFinancier;

        return $this;
    }

    public function getCoTransmission(): ?int
    {
        return $this->coTransmission;
    }

    public function setCoTransmission(?int $coTransmission): static
    {
        $this->coTransmission = $coTransmission;

        return $this;
    }

    public function getCoFacebook(): ?string
    {
        return $this->coFacebook;
    }

    public function setCoFacebook(?string $coFacebook): static
    {
        $this->coFacebook = $coFacebook;

        return $this;
    }

    public function getCoLinkedin(): ?string
    {
        return $this->coLinkedin;
    }

    public function setCoLinkedin(?string $coLinkedin): static
    {
        $this->coLinkedin = $coLinkedin;

        return $this;
    }

    public function getCoSkype(): ?string
    {
        return $this->coSkype;
    }

    public function setCoSkype(?string $coSkype): static
    {
        $this->coSkype = $coSkype;

        return $this;
    }
}
