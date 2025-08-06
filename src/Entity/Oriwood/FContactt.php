<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FContacttRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CONTACTT')]
#[ORM\UniqueConstraint(name: 'ICT_NOM', columns: ['cbCT_Prenom'])]
#[ORM\UniqueConstraint(name: 'ICT_NO', columns: ['CT_No'])]
#[ORM\Index(name: 'FKIA_F_CONTACTT_CT_Num', columns: ['CT_Num'])]
#[ORM\Entity(repositoryClass: FContacttRepository::class)]
class FContactt
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "CT_Nom", length: 35, nullable: true)]
    private ?string $ctNom = null;

    #[ORM\Column(name: "cbCT_Nom", type: Types::BINARY, nullable: true)]
    private $cbctNom = null;

    #[ORM\Column(name: "CT_Prenom", length: 35, nullable: true)]
    private ?string $ctPrenom = null;

    #[ORM\Column(name: "cbCT_Prenom", type: Types::BINARY, nullable: true)]
    private $cbctPrenom = null;

    #[ORM\Column(name: "N_Service", type: Types::SMALLINT, nullable: true)]
    private ?int $nService = null;

    #[ORM\Column(name: "CT_Fonction", length: 35, nullable: true)]
    private ?string $ctFonction = null;

    #[ORM\Column(name: "CT_Telephone", length: 21, nullable: true)]
    private ?string $ctTelephone = null;

    #[ORM\Column(name: "CT_TelPortable", length: 21, nullable: true)]
    private ?string $ctTelportable = null;

    #[ORM\Column(name: "CT_Telecopie", length: 21, nullable: true)]
    private ?string $ctTelecopie = null;

    #[ORM\Column(name: "CT_EMail", length: 69, nullable: true)]
    private ?string $ctEmail = null;

    #[ORM\Column(name: "CT_Civilite", type: Types::SMALLINT, nullable: true)]
    private ?int $ctCivilite = null;

    #[ORM\Column(name: "N_Contact", type: Types::SMALLINT, nullable: true)]
    private ?int $nContact = null;

    #[ORM\Column(name: "CT_No", nullable: true)]
    private ?int $ctNo = null;

    #[ORM\Column(name: "CT_Facebook", length: 35, nullable: true)]
    private ?string $ctFacebook = null;

    #[ORM\Column(name: "CT_LinkedIn", length: 35, nullable: true)]
    private ?string $ctLinkedin = null;

    #[ORM\Column(name: "CT_Skype", length: 35, nullable: true)]
    private ?string $ctSkype = null;

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

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getCtNom(): ?string
    {
        return $this->ctNom;
    }

    public function setCtNom(?string $ctNom): static
    {
        $this->ctNom = $ctNom;

        return $this;
    }

    public function getCbctNom()
    {
        return $this->cbctNom;
    }

    public function setCbctNom($cbctNom): static
    {
        $this->cbctNom = $cbctNom;

        return $this;
    }

    public function getCtPrenom(): ?string
    {
        return $this->ctPrenom;
    }

    public function setCtPrenom(?string $ctPrenom): static
    {
        $this->ctPrenom = $ctPrenom;

        return $this;
    }

    public function getCbctPrenom()
    {
        return $this->cbctPrenom;
    }

    public function setCbctPrenom($cbctPrenom): static
    {
        $this->cbctPrenom = $cbctPrenom;

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

    public function getCtFonction(): ?string
    {
        return $this->ctFonction;
    }

    public function setCtFonction(?string $ctFonction): static
    {
        $this->ctFonction = $ctFonction;

        return $this;
    }

    public function getCtTelephone(): ?string
    {
        return $this->ctTelephone;
    }

    public function setCtTelephone(?string $ctTelephone): static
    {
        $this->ctTelephone = $ctTelephone;

        return $this;
    }

    public function getCtTelportable(): ?string
    {
        return $this->ctTelportable;
    }

    public function setCtTelportable(?string $ctTelportable): static
    {
        $this->ctTelportable = $ctTelportable;

        return $this;
    }

    public function getCtTelecopie(): ?string
    {
        return $this->ctTelecopie;
    }

    public function setCtTelecopie(?string $ctTelecopie): static
    {
        $this->ctTelecopie = $ctTelecopie;

        return $this;
    }

    public function getCtEmail(): ?string
    {
        return $this->ctEmail;
    }

    public function setCtEmail(?string $ctEmail): static
    {
        $this->ctEmail = $ctEmail;

        return $this;
    }

    public function getCtCivilite(): ?int
    {
        return $this->ctCivilite;
    }

    public function setCtCivilite(?int $ctCivilite): static
    {
        $this->ctCivilite = $ctCivilite;

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

    public function getCtNo(): ?int
    {
        return $this->ctNo;
    }

    public function setCtNo(?int $ctNo): static
    {
        $this->ctNo = $ctNo;

        return $this;
    }

    public function getCtFacebook(): ?string
    {
        return $this->ctFacebook;
    }

    public function setCtFacebook(?string $ctFacebook): static
    {
        $this->ctFacebook = $ctFacebook;

        return $this;
    }

    public function getCtLinkedin(): ?string
    {
        return $this->ctLinkedin;
    }

    public function setCtLinkedin(?string $ctLinkedin): static
    {
        $this->ctLinkedin = $ctLinkedin;

        return $this;
    }

    public function getCtSkype(): ?string
    {
        return $this->ctSkype;
    }

    public function setCtSkype(?string $ctSkype): static
    {
        $this->ctSkype = $ctSkype;

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
