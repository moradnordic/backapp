<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FContactrRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CONTACTR')]
#[ORM\UniqueConstraint(name: 'ICR_NOM', columns: ['cbCR_Prenom'])]
#[ORM\UniqueConstraint(name: 'ICR_NO', columns: ['CR_No'])]
#[ORM\Index(name: 'FKIA_F_CONTACTR_DR_Num', columns: ['DR_Num'])]
#[ORM\Entity(repositoryClass: FContactrRepository::class)]
class FContactr
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DR_Num", length: 13)]
    private ?string $drNum = null;

    #[ORM\Column(name: "cbDR_Num", type: Types::BINARY, nullable: true)]
    private $cbdrNum = null;

    #[ORM\Column(name: "CR_Nom", length: 35, nullable: true)]
    private ?string $crNom = null;

    #[ORM\Column(name: "cbCR_Nom", type: Types::BINARY, nullable: true)]
    private $cbcrNom = null;

    #[ORM\Column(name: "CR_Prenom", length: 35, nullable: true)]
    private ?string $crPrenom = null;

    #[ORM\Column(name: "cbCR_Prenom", type: Types::BINARY, nullable: true)]
    private $cbcrPrenom = null;

    #[ORM\Column(name: "N_Service", type: Types::SMALLINT, nullable: true)]
    private ?int $nService = null;

    #[ORM\Column(name: "CR_Fonction", length: 35, nullable: true)]
    private ?string $crFonction = null;

    #[ORM\Column(name: "CR_Telephone", length: 21, nullable: true)]
    private ?string $crTelephone = null;

    #[ORM\Column(name: "CR_TelPortable", length: 21, nullable: true)]
    private ?string $crTelportable = null;

    #[ORM\Column(name: "CR_Telecopie", length: 21, nullable: true)]
    private ?string $crTelecopie = null;

    #[ORM\Column(name: "CR_EMail", length: 69, nullable: true)]
    private ?string $crEmail = null;

    #[ORM\Column(name: "CR_Civilite", type: Types::SMALLINT, nullable: true)]
    private ?int $crCivilite = null;

    #[ORM\Column(name: "N_Contact", type: Types::SMALLINT, nullable: true)]
    private ?int $nContact = null;

    #[ORM\Column(name: "CR_Adresse", length: 35, nullable: true)]
    private ?string $crAdresse = null;

    #[ORM\Column(name: "CR_Complement", length: 35, nullable: true)]
    private ?string $crComplement = null;

    #[ORM\Column(name: "CR_CodePostal", length: 9, nullable: true)]
    private ?string $crCodepostal = null;

    #[ORM\Column(name: "CR_Ville", length: 35, nullable: true)]
    private ?string $crVille = null;

    #[ORM\Column(name: "CR_No", nullable: true)]
    private ?int $crNo = null;

    #[ORM\Column(name: "CR_CodeRegion", length: 25, nullable: true)]
    private ?string $crCoderegion = null;

    #[ORM\Column(name: "CR_Pays", length: 35, nullable: true)]
    private ?string $crPays = null;

    #[ORM\Column(name: "CR_Facebook", length: 35, nullable: true)]
    private ?string $crFacebook = null;

    #[ORM\Column(name: "CR_LinkedIn", length: 35, nullable: true)]
    private ?string $crLinkedin = null;

    #[ORM\Column(name: "CR_Skype", length: 35, nullable: true)]
    private ?string $crSkype = null;

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

    public function getDrNum(): ?string
    {
        return $this->drNum;
    }

    public function setDrNum(string $drNum): static
    {
        $this->drNum = $drNum;

        return $this;
    }

    public function getCbdrNum()
    {
        return $this->cbdrNum;
    }

    public function setCbdrNum($cbdrNum): static
    {
        $this->cbdrNum = $cbdrNum;

        return $this;
    }

    public function getCrNom(): ?string
    {
        return $this->crNom;
    }

    public function setCrNom(?string $crNom): static
    {
        $this->crNom = $crNom;

        return $this;
    }

    public function getCbcrNom()
    {
        return $this->cbcrNom;
    }

    public function setCbcrNom($cbcrNom): static
    {
        $this->cbcrNom = $cbcrNom;

        return $this;
    }

    public function getCrPrenom(): ?string
    {
        return $this->crPrenom;
    }

    public function setCrPrenom(?string $crPrenom): static
    {
        $this->crPrenom = $crPrenom;

        return $this;
    }

    public function getCbcrPrenom()
    {
        return $this->cbcrPrenom;
    }

    public function setCbcrPrenom($cbcrPrenom): static
    {
        $this->cbcrPrenom = $cbcrPrenom;

        return $this;
    }

    public function getNService(): ?int
    {
        return $this->nService;
    }

    public function setNService(?int $nService): static
    {
        $this->nService = $nService;

        return $this;
    }

    public function getCrFonction(): ?string
    {
        return $this->crFonction;
    }

    public function setCrFonction(?string $crFonction): static
    {
        $this->crFonction = $crFonction;

        return $this;
    }

    public function getCrTelephone(): ?string
    {
        return $this->crTelephone;
    }

    public function setCrTelephone(?string $crTelephone): static
    {
        $this->crTelephone = $crTelephone;

        return $this;
    }

    public function getCrTelportable(): ?string
    {
        return $this->crTelportable;
    }

    public function setCrTelportable(?string $crTelportable): static
    {
        $this->crTelportable = $crTelportable;

        return $this;
    }

    public function getCrTelecopie(): ?string
    {
        return $this->crTelecopie;
    }

    public function setCrTelecopie(?string $crTelecopie): static
    {
        $this->crTelecopie = $crTelecopie;

        return $this;
    }

    public function getCrEmail(): ?string
    {
        return $this->crEmail;
    }

    public function setCrEmail(?string $crEmail): static
    {
        $this->crEmail = $crEmail;

        return $this;
    }

    public function getCrCivilite(): ?int
    {
        return $this->crCivilite;
    }

    public function setCrCivilite(?int $crCivilite): static
    {
        $this->crCivilite = $crCivilite;

        return $this;
    }

    public function getNContact(): ?int
    {
        return $this->nContact;
    }

    public function setNContact(?int $nContact): static
    {
        $this->nContact = $nContact;

        return $this;
    }

    public function getCrAdresse(): ?string
    {
        return $this->crAdresse;
    }

    public function setCrAdresse(?string $crAdresse): static
    {
        $this->crAdresse = $crAdresse;

        return $this;
    }

    public function getCrComplement(): ?string
    {
        return $this->crComplement;
    }

    public function setCrComplement(?string $crComplement): static
    {
        $this->crComplement = $crComplement;

        return $this;
    }

    public function getCrCodepostal(): ?string
    {
        return $this->crCodepostal;
    }

    public function setCrCodepostal(?string $crCodepostal): static
    {
        $this->crCodepostal = $crCodepostal;

        return $this;
    }

    public function getCrVille(): ?string
    {
        return $this->crVille;
    }

    public function setCrVille(?string $crVille): static
    {
        $this->crVille = $crVille;

        return $this;
    }

    public function getCrNo(): ?int
    {
        return $this->crNo;
    }

    public function setCrNo(?int $crNo): static
    {
        $this->crNo = $crNo;

        return $this;
    }

    public function getCrCoderegion(): ?string
    {
        return $this->crCoderegion;
    }

    public function setCrCoderegion(?string $crCoderegion): static
    {
        $this->crCoderegion = $crCoderegion;

        return $this;
    }

    public function getCrPays(): ?string
    {
        return $this->crPays;
    }

    public function setCrPays(?string $crPays): static
    {
        $this->crPays = $crPays;

        return $this;
    }

    public function getCrFacebook(): ?string
    {
        return $this->crFacebook;
    }

    public function setCrFacebook(?string $crFacebook): static
    {
        $this->crFacebook = $crFacebook;

        return $this;
    }

    public function getCrLinkedin(): ?string
    {
        return $this->crLinkedin;
    }

    public function setCrLinkedin(?string $crLinkedin): static
    {
        $this->crLinkedin = $crLinkedin;

        return $this;
    }

    public function getCrSkype(): ?string
    {
        return $this->crSkype;
    }

    public function setCrSkype(?string $crSkype): static
    {
        $this->crSkype = $crSkype;

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
