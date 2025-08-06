<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FContactaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CONTACTA')]
#[ORM\UniqueConstraint(name: 'ICA_NOM', columns: ['cbCA_Prenom'])]
#[ORM\UniqueConstraint(name: 'ICA_NO', columns: ['CA_No'])]
#[ORM\Index(name: 'FKIA_F_CONTACTA_CA_Num', columns: ['CA_Num'])]
#[ORM\Entity(repositoryClass: FContactaRepository::class)]
class FContacta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "CA_Nom", length: 35, nullable: true)]
    private ?string $caNom = null;

    #[ORM\Column(name: "cbCA_Nom", type: Types::BINARY, nullable: true)]
    private $cbcaNom = null;

    #[ORM\Column(name: "CA_Prenom", length: 35, nullable: true)]
    private ?string $caPrenom = null;

    #[ORM\Column(name: "cbCA_Prenom", type: Types::BINARY, nullable: true)]
    private $cbcaPrenom = null;

    #[ORM\Column(name: "N_Service", type: Types::SMALLINT, nullable: true)]
    private ?int $nService = null;

    #[ORM\Column(name: "CA_Fonction", length: 35, nullable: true)]
    private ?string $caFonction = null;

    #[ORM\Column(name: "CA_Telephone", length: 21, nullable: true)]
    private ?string $caTelephone = null;

    #[ORM\Column(name: "CA_TelPortable", length: 21, nullable: true)]
    private ?string $caTelportable = null;

    #[ORM\Column(name: "CA_Telecopie", length: 21, nullable: true)]
    private ?string $caTelecopie = null;

    #[ORM\Column(name: "CA_EMail", length: 69, nullable: true)]
    private ?string $caEmail = null;

    #[ORM\Column(name: "CA_Civilite", type: Types::SMALLINT, nullable: true)]
    private ?int $caCivilite = null;

    #[ORM\Column(name: "N_Contact", type: Types::SMALLINT, nullable: true)]
    private ?int $nContact = null;

    #[ORM\Column(name: "CA_No", nullable: true)]
    private ?int $caNo = null;

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

    #[ORM\Column(name: "CA_Facebook", length: 35, nullable: true)]
    private ?string $caFacebook = null;

    #[ORM\Column(name: "CA_LinkedIn", length: 35, nullable: true)]
    private ?string $caLinkedin = null;

    #[ORM\Column(name: "CA_Skype", length: 35, nullable: true)]
    private ?string $caSkype = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(string $caNum): static
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

    public function getCaNom(): ?string
    {
        return $this->caNom;
    }

    public function setCaNom(?string $caNom): static
    {
        $this->caNom = $caNom;

        return $this;
    }

    public function getCbcaNom()
    {
        return $this->cbcaNom;
    }

    public function setCbcaNom($cbcaNom): static
    {
        $this->cbcaNom = $cbcaNom;

        return $this;
    }

    public function getCaPrenom(): ?string
    {
        return $this->caPrenom;
    }

    public function setCaPrenom(?string $caPrenom): static
    {
        $this->caPrenom = $caPrenom;

        return $this;
    }

    public function getCbcaPrenom()
    {
        return $this->cbcaPrenom;
    }

    public function setCbcaPrenom($cbcaPrenom): static
    {
        $this->cbcaPrenom = $cbcaPrenom;

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

    public function getCaFonction(): ?string
    {
        return $this->caFonction;
    }

    public function setCaFonction(?string $caFonction): static
    {
        $this->caFonction = $caFonction;

        return $this;
    }

    public function getCaTelephone(): ?string
    {
        return $this->caTelephone;
    }

    public function setCaTelephone(?string $caTelephone): static
    {
        $this->caTelephone = $caTelephone;

        return $this;
    }

    public function getCaTelportable(): ?string
    {
        return $this->caTelportable;
    }

    public function setCaTelportable(?string $caTelportable): static
    {
        $this->caTelportable = $caTelportable;

        return $this;
    }

    public function getCaTelecopie(): ?string
    {
        return $this->caTelecopie;
    }

    public function setCaTelecopie(?string $caTelecopie): static
    {
        $this->caTelecopie = $caTelecopie;

        return $this;
    }

    public function getCaEmail(): ?string
    {
        return $this->caEmail;
    }

    public function setCaEmail(?string $caEmail): static
    {
        $this->caEmail = $caEmail;

        return $this;
    }

    public function getCaCivilite(): ?int
    {
        return $this->caCivilite;
    }

    public function setCaCivilite(?int $caCivilite): static
    {
        $this->caCivilite = $caCivilite;

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

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(?int $caNo): static
    {
        $this->caNo = $caNo;

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

    public function getCaFacebook(): ?string
    {
        return $this->caFacebook;
    }

    public function setCaFacebook(?string $caFacebook): static
    {
        $this->caFacebook = $caFacebook;

        return $this;
    }

    public function getCaLinkedin(): ?string
    {
        return $this->caLinkedin;
    }

    public function setCaLinkedin(?string $caLinkedin): static
    {
        $this->caLinkedin = $caLinkedin;

        return $this;
    }

    public function getCaSkype(): ?string
    {
        return $this->caSkype;
    }

    public function setCaSkype(?string $caSkype): static
    {
        $this->caSkype = $caSkype;

        return $this;
    }
}
