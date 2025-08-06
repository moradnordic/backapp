<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FDepotcontactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DEPOTCONTACT')]
#[ORM\UniqueConstraint(name: 'IDC_NOM', columns: ['cbDC_Prenom'])]
#[ORM\UniqueConstraint(name: 'IDC_NOCONT', columns: ['DC_No'])]
#[ORM\Index(name: 'FKIA_F_DEPOTCONTACT_DE_No', columns: ['DE_No'])]
#[ORM\Entity(repositoryClass: FDepotcontactRepository::class)]
class FDepotcontact
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "DC_Nom", length: 35, nullable: true)]
    private ?string $dcNom = null;

    #[ORM\Column(name: "cbDC_Nom", type: Types::BINARY, nullable: true)]
    private $cbdcNom = null;

    #[ORM\Column(name: "DC_Prenom", length: 35, nullable: true)]
    private ?string $dcPrenom = null;

    #[ORM\Column(name: "cbDC_Prenom", type: Types::BINARY, nullable: true)]
    private $cbdcPrenom = null;

    #[ORM\Column(name: "N_Service", type: Types::SMALLINT, nullable: true)]
    private ?int $nService = null;

    #[ORM\Column(name: "DC_Fonction", length: 35, nullable: true)]
    private ?string $dcFonction = null;

    #[ORM\Column(name: "DC_Telephone", length: 21, nullable: true)]
    private ?string $dcTelephone = null;

    #[ORM\Column(name: "DC_TelPortable", length: 21, nullable: true)]
    private ?string $dcTelportable = null;

    #[ORM\Column(name: "DC_Telecopie", length: 21, nullable: true)]
    private ?string $dcTelecopie = null;

    #[ORM\Column(name: "DC_EMail", length: 69, nullable: true)]
    private ?string $dcEmail = null;

    #[ORM\Column(name: "DC_Civilite", type: Types::SMALLINT, nullable: true)]
    private ?int $dcCivilite = null;

    #[ORM\Column(name: "N_Contact", type: Types::SMALLINT, nullable: true)]
    private ?int $nContact = null;

    #[ORM\Column(name: "DC_No", nullable: true)]
    private ?int $dcNo = null;

    #[ORM\Column(name: "DC_Facebook", length: 35, nullable: true)]
    private ?string $dcFacebook = null;

    #[ORM\Column(name: "DC_LinkedIn", length: 35, nullable: true)]
    private ?string $dcLinkedin = null;

    #[ORM\Column(name: "DC_Skype", length: 35, nullable: true)]
    private ?string $dcSkype = null;

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

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getDcNom(): ?string
    {
        return $this->dcNom;
    }

    public function setDcNom(?string $dcNom): static
    {
        $this->dcNom = $dcNom;

        return $this;
    }

    public function getCbdcNom()
    {
        return $this->cbdcNom;
    }

    public function setCbdcNom($cbdcNom): static
    {
        $this->cbdcNom = $cbdcNom;

        return $this;
    }

    public function getDcPrenom(): ?string
    {
        return $this->dcPrenom;
    }

    public function setDcPrenom(?string $dcPrenom): static
    {
        $this->dcPrenom = $dcPrenom;

        return $this;
    }

    public function getCbdcPrenom()
    {
        return $this->cbdcPrenom;
    }

    public function setCbdcPrenom($cbdcPrenom): static
    {
        $this->cbdcPrenom = $cbdcPrenom;

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

    public function getDcFonction(): ?string
    {
        return $this->dcFonction;
    }

    public function setDcFonction(?string $dcFonction): static
    {
        $this->dcFonction = $dcFonction;

        return $this;
    }

    public function getDcTelephone(): ?string
    {
        return $this->dcTelephone;
    }

    public function setDcTelephone(?string $dcTelephone): static
    {
        $this->dcTelephone = $dcTelephone;

        return $this;
    }

    public function getDcTelportable(): ?string
    {
        return $this->dcTelportable;
    }

    public function setDcTelportable(?string $dcTelportable): static
    {
        $this->dcTelportable = $dcTelportable;

        return $this;
    }

    public function getDcTelecopie(): ?string
    {
        return $this->dcTelecopie;
    }

    public function setDcTelecopie(?string $dcTelecopie): static
    {
        $this->dcTelecopie = $dcTelecopie;

        return $this;
    }

    public function getDcEmail(): ?string
    {
        return $this->dcEmail;
    }

    public function setDcEmail(?string $dcEmail): static
    {
        $this->dcEmail = $dcEmail;

        return $this;
    }

    public function getDcCivilite(): ?int
    {
        return $this->dcCivilite;
    }

    public function setDcCivilite(?int $dcCivilite): static
    {
        $this->dcCivilite = $dcCivilite;

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

    public function getDcNo(): ?int
    {
        return $this->dcNo;
    }

    public function setDcNo(?int $dcNo): static
    {
        $this->dcNo = $dcNo;

        return $this;
    }

    public function getDcFacebook(): ?string
    {
        return $this->dcFacebook;
    }

    public function setDcFacebook(?string $dcFacebook): static
    {
        $this->dcFacebook = $dcFacebook;

        return $this;
    }

    public function getDcLinkedin(): ?string
    {
        return $this->dcLinkedin;
    }

    public function setDcLinkedin(?string $dcLinkedin): static
    {
        $this->dcLinkedin = $dcLinkedin;

        return $this;
    }

    public function getDcSkype(): ?string
    {
        return $this->dcSkype;
    }

    public function setDcSkype(?string $dcSkype): static
    {
        $this->dcSkype = $dcSkype;

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
