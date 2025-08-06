<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FContactdRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CONTACTD')]
#[ORM\UniqueConstraint(name: 'ICD_NOM', columns: ['cbCD_Prenom'])]
#[ORM\UniqueConstraint(name: 'ICD_NO', columns: ['CD_No'])]
#[ORM\Entity(repositoryClass: FContactdRepository::class)]
class FContactd
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CD_Nom", length: 35, nullable: true)]
    private ?string $cdNom = null;

    #[ORM\Column(name: "cbCD_Nom", type: Types::BINARY, nullable: true)]
    private $cbcdNom = null;

    #[ORM\Column(name: "CD_Prenom", length: 35, nullable: true)]
    private ?string $cdPrenom = null;

    #[ORM\Column(name: "cbCD_Prenom", type: Types::BINARY, nullable: true)]
    private $cbcdPrenom = null;

    #[ORM\Column(name: "N_Service", type: Types::SMALLINT, nullable: true)]
    private ?int $nService = null;

    #[ORM\Column(name: "CD_Fonction", length: 35, nullable: true)]
    private ?string $cdFonction = null;

    #[ORM\Column(name: "CD_Telephone", length: 21, nullable: true)]
    private ?string $cdTelephone = null;

    #[ORM\Column(name: "CD_TelPortable", length: 21, nullable: true)]
    private ?string $cdTelportable = null;

    #[ORM\Column(name: "CD_Telecopie", length: 21, nullable: true)]
    private ?string $cdTelecopie = null;

    #[ORM\Column(name: "CD_EMail", length: 69, nullable: true)]
    private ?string $cdEmail = null;

    #[ORM\Column(name: "CD_Civilite", type: Types::SMALLINT, nullable: true)]
    private ?int $cdCivilite = null;

    #[ORM\Column(name: "N_Contact", type: Types::SMALLINT, nullable: true)]
    private ?int $nContact = null;

    #[ORM\Column(name: "CD_Adresse", length: 35, nullable: true)]
    private ?string $cdAdresse = null;

    #[ORM\Column(name: "CD_Complement", length: 35, nullable: true)]
    private ?string $cdComplement = null;

    #[ORM\Column(name: "CD_CodePostal", length: 9, nullable: true)]
    private ?string $cdCodepostal = null;

    #[ORM\Column(name: "CD_Ville", length: 35, nullable: true)]
    private ?string $cdVille = null;

    #[ORM\Column(name: "CD_No", nullable: true)]
    private ?int $cdNo = null;

    #[ORM\Column(name: "CD_CodeRegion", length: 25, nullable: true)]
    private ?string $cdCoderegion = null;

    #[ORM\Column(name: "CD_Pays", length: 35, nullable: true)]
    private ?string $cdPays = null;

    #[ORM\Column(name: "CD_Facebook", length: 35, nullable: true)]
    private ?string $cdFacebook = null;

    #[ORM\Column(name: "CD_LinkedIn", length: 35, nullable: true)]
    private ?string $cdLinkedin = null;

    #[ORM\Column(name: "CD_Skype", length: 35, nullable: true)]
    private ?string $cdSkype = null;

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

    public function getCdNom(): ?string
    {
        return $this->cdNom;
    }

    public function setCdNom(?string $cdNom): static
    {
        $this->cdNom = $cdNom;

        return $this;
    }

    public function getCbcdNom()
    {
        return $this->cbcdNom;
    }

    public function setCbcdNom($cbcdNom): static
    {
        $this->cbcdNom = $cbcdNom;

        return $this;
    }

    public function getCdPrenom(): ?string
    {
        return $this->cdPrenom;
    }

    public function setCdPrenom(?string $cdPrenom): static
    {
        $this->cdPrenom = $cdPrenom;

        return $this;
    }

    public function getCbcdPrenom()
    {
        return $this->cbcdPrenom;
    }

    public function setCbcdPrenom($cbcdPrenom): static
    {
        $this->cbcdPrenom = $cbcdPrenom;

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

    public function getCdFonction(): ?string
    {
        return $this->cdFonction;
    }

    public function setCdFonction(?string $cdFonction): static
    {
        $this->cdFonction = $cdFonction;

        return $this;
    }

    public function getCdTelephone(): ?string
    {
        return $this->cdTelephone;
    }

    public function setCdTelephone(?string $cdTelephone): static
    {
        $this->cdTelephone = $cdTelephone;

        return $this;
    }

    public function getCdTelportable(): ?string
    {
        return $this->cdTelportable;
    }

    public function setCdTelportable(?string $cdTelportable): static
    {
        $this->cdTelportable = $cdTelportable;

        return $this;
    }

    public function getCdTelecopie(): ?string
    {
        return $this->cdTelecopie;
    }

    public function setCdTelecopie(?string $cdTelecopie): static
    {
        $this->cdTelecopie = $cdTelecopie;

        return $this;
    }

    public function getCdEmail(): ?string
    {
        return $this->cdEmail;
    }

    public function setCdEmail(?string $cdEmail): static
    {
        $this->cdEmail = $cdEmail;

        return $this;
    }

    public function getCdCivilite(): ?int
    {
        return $this->cdCivilite;
    }

    public function setCdCivilite(?int $cdCivilite): static
    {
        $this->cdCivilite = $cdCivilite;

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

    public function getCdAdresse(): ?string
    {
        return $this->cdAdresse;
    }

    public function setCdAdresse(?string $cdAdresse): static
    {
        $this->cdAdresse = $cdAdresse;

        return $this;
    }

    public function getCdComplement(): ?string
    {
        return $this->cdComplement;
    }

    public function setCdComplement(?string $cdComplement): static
    {
        $this->cdComplement = $cdComplement;

        return $this;
    }

    public function getCdCodepostal(): ?string
    {
        return $this->cdCodepostal;
    }

    public function setCdCodepostal(?string $cdCodepostal): static
    {
        $this->cdCodepostal = $cdCodepostal;

        return $this;
    }

    public function getCdVille(): ?string
    {
        return $this->cdVille;
    }

    public function setCdVille(?string $cdVille): static
    {
        $this->cdVille = $cdVille;

        return $this;
    }

    public function getCdNo(): ?int
    {
        return $this->cdNo;
    }

    public function setCdNo(?int $cdNo): static
    {
        $this->cdNo = $cdNo;

        return $this;
    }

    public function getCdCoderegion(): ?string
    {
        return $this->cdCoderegion;
    }

    public function setCdCoderegion(?string $cdCoderegion): static
    {
        $this->cdCoderegion = $cdCoderegion;

        return $this;
    }

    public function getCdPays(): ?string
    {
        return $this->cdPays;
    }

    public function setCdPays(?string $cdPays): static
    {
        $this->cdPays = $cdPays;

        return $this;
    }

    public function getCdFacebook(): ?string
    {
        return $this->cdFacebook;
    }

    public function setCdFacebook(?string $cdFacebook): static
    {
        $this->cdFacebook = $cdFacebook;

        return $this;
    }

    public function getCdLinkedin(): ?string
    {
        return $this->cdLinkedin;
    }

    public function setCdLinkedin(?string $cdLinkedin): static
    {
        $this->cdLinkedin = $cdLinkedin;

        return $this;
    }

    public function getCdSkype(): ?string
    {
        return $this->cdSkype;
    }

    public function setCdSkype(?string $cdSkype): static
    {
        $this->cdSkype = $cdSkype;

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
