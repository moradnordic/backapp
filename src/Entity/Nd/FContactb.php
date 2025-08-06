<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FContactbRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CONTACTB')]
#[ORM\UniqueConstraint(name: 'ICB_NOM', columns: ['cbCB_Prenom'])]
#[ORM\UniqueConstraint(name: 'ICB_NO', columns: ['CB_No'])]
#[ORM\Index(name: 'FKIA_F_CONTACTB_BQ_No', columns: ['BQ_No'])]
#[ORM\Entity(repositoryClass: FContactbRepository::class)]
class FContactb
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "BQ_No")]
    private ?int $bqNo = null;

    #[ORM\Column(name: "CB_Nom", length: 35, nullable: true)]
    private ?string $cbNom = null;

    #[ORM\Column(name: "cbCB_Nom", type: Types::BINARY, nullable: true)]
    private $cbcbNom = null;

    #[ORM\Column(name: "CB_Prenom", length: 35, nullable: true)]
    private ?string $cbPrenom = null;

    #[ORM\Column(name: "cbCB_Prenom", type: Types::BINARY, nullable: true)]
    private $cbcbPrenom = null;

    #[ORM\Column(name: "N_Service", type: Types::SMALLINT, nullable: true)]
    private ?int $nService = null;

    #[ORM\Column(name: "CB_Fonction", length: 35, nullable: true)]
    private ?string $cbFonction = null;

    #[ORM\Column(name: "CB_Telephone", length: 21, nullable: true)]
    private ?string $cbTelephone = null;

    #[ORM\Column(name: "CB_TelPortable", length: 21, nullable: true)]
    private ?string $cbTelportable = null;

    #[ORM\Column(name: "CB_Telecopie", length: 21, nullable: true)]
    private ?string $cbTelecopie = null;

    #[ORM\Column(name: "CB_EMail", length: 69, nullable: true)]
    private ?string $cbEmail = null;

    #[ORM\Column(name: "CB_Civilite", type: Types::SMALLINT, nullable: true)]
    private ?int $cbCivilite = null;

    #[ORM\Column(name: "N_Contact", type: Types::SMALLINT, nullable: true)]
    private ?int $nContact = null;

    #[ORM\Column(name: "CB_No", nullable: true)]
    private ?int $cbNo = null;

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

    #[ORM\Column(name: "CB_Facebook", length: 35, nullable: true)]
    private ?string $cbFacebook = null;

    #[ORM\Column(name: "CB_LinkedIn", length: 35, nullable: true)]
    private ?string $cbLinkedin = null;

    #[ORM\Column(name: "CB_Skype", length: 35, nullable: true)]
    private ?string $cbSkype = null;

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

    public function getCbNom(): ?string
    {
        return $this->cbNom;
    }

    public function setCbNom(?string $cbNom): static
    {
        $this->cbNom = $cbNom;

        return $this;
    }

    public function getCbcbNom()
    {
        return $this->cbcbNom;
    }

    public function setCbcbNom($cbcbNom): static
    {
        $this->cbcbNom = $cbcbNom;

        return $this;
    }

    public function getCbPrenom(): ?string
    {
        return $this->cbPrenom;
    }

    public function setCbPrenom(?string $cbPrenom): static
    {
        $this->cbPrenom = $cbPrenom;

        return $this;
    }

    public function getCbcbPrenom()
    {
        return $this->cbcbPrenom;
    }

    public function setCbcbPrenom($cbcbPrenom): static
    {
        $this->cbcbPrenom = $cbcbPrenom;

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

    public function getCbFonction(): ?string
    {
        return $this->cbFonction;
    }

    public function setCbFonction(?string $cbFonction): static
    {
        $this->cbFonction = $cbFonction;

        return $this;
    }

    public function getCbTelephone(): ?string
    {
        return $this->cbTelephone;
    }

    public function setCbTelephone(?string $cbTelephone): static
    {
        $this->cbTelephone = $cbTelephone;

        return $this;
    }

    public function getCbTelportable(): ?string
    {
        return $this->cbTelportable;
    }

    public function setCbTelportable(?string $cbTelportable): static
    {
        $this->cbTelportable = $cbTelportable;

        return $this;
    }

    public function getCbTelecopie(): ?string
    {
        return $this->cbTelecopie;
    }

    public function setCbTelecopie(?string $cbTelecopie): static
    {
        $this->cbTelecopie = $cbTelecopie;

        return $this;
    }

    public function getCbEmail(): ?string
    {
        return $this->cbEmail;
    }

    public function setCbEmail(?string $cbEmail): static
    {
        $this->cbEmail = $cbEmail;

        return $this;
    }

    public function getCbCivilite(): ?int
    {
        return $this->cbCivilite;
    }

    public function setCbCivilite(?int $cbCivilite): static
    {
        $this->cbCivilite = $cbCivilite;

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

    public function getCbNo(): ?int
    {
        return $this->cbNo;
    }

    public function setCbNo(?int $cbNo): static
    {
        $this->cbNo = $cbNo;

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

    public function getCbFacebook(): ?string
    {
        return $this->cbFacebook;
    }

    public function setCbFacebook(?string $cbFacebook): static
    {
        $this->cbFacebook = $cbFacebook;

        return $this;
    }

    public function getCbLinkedin(): ?string
    {
        return $this->cbLinkedin;
    }

    public function setCbLinkedin(?string $cbLinkedin): static
    {
        $this->cbLinkedin = $cbLinkedin;

        return $this;
    }

    public function getCbSkype(): ?string
    {
        return $this->cbSkype;
    }

    public function setCbSkype(?string $cbSkype): static
    {
        $this->cbSkype = $cbSkype;

        return $this;
    }
}
