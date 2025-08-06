<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDepotRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DEPOT')]
#[ORM\UniqueConstraint(name: 'IDE_NO', columns: ['DE_No'])]
#[ORM\UniqueConstraint(name: 'IDE_INTITULE', columns: ['cbDE_Intitule'])]
#[ORM\Index(name: 'IDE_PRINCIPAL', columns: ['DE_Principal'])]
#[ORM\Index(name: 'IDE_CODE', columns: ['cbDE_Code'])]
#[ORM\Index(name: 'IDE_EXCLURE', columns: ['cbDE_Intitule'])]
#[ORM\Index(name: 'FKIA_F_DEPOT_DP_NoDefaut', columns: ['cbDP_NoDefaut'])]
#[ORM\Entity(repositoryClass: FDepotRepository::class)]
class FDepot
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "DE_Intitule", length: 35)]
    private ?string $deIntitule = null;

    #[ORM\Column(name: "cbDE_Intitule", type: Types::BINARY, nullable: true)]
    private $cbdeIntitule = null;

    #[ORM\Column(name: "DE_Adresse", length: 35, nullable: true)]
    private ?string $deAdresse = null;

    #[ORM\Column(name: "DE_Complement", length: 35, nullable: true)]
    private ?string $deComplement = null;

    #[ORM\Column(name: "DE_CodePostal", length: 9, nullable: true)]
    private ?string $deCodepostal = null;

    #[ORM\Column(name: "DE_Ville", length: 35, nullable: true)]
    private ?string $deVille = null;

    #[ORM\Column(name: "DE_Contact", length: 35, nullable: true)]
    private ?string $deContact = null;

    #[ORM\Column(name: "DE_Principal", type: Types::SMALLINT, nullable: true)]
    private ?int $dePrincipal = null;

    #[ORM\Column(name: "DE_CatCompta", type: Types::SMALLINT, nullable: true)]
    private ?int $deCatcompta = null;

    #[ORM\Column(name: "DE_Region", length: 25, nullable: true)]
    private ?string $deRegion = null;

    #[ORM\Column(name: "DE_Pays", length: 35, nullable: true)]
    private ?string $dePays = null;

    #[ORM\Column(name: "DE_EMail", length: 69, nullable: true)]
    private ?string $deEmail = null;

    #[ORM\Column(name: "DE_Code", length: 9, nullable: true)]
    private ?string $deCode = null;

    #[ORM\Column(name: "cbDE_Code", type: Types::BINARY, nullable: true)]
    private $cbdeCode = null;

    #[ORM\Column(name: "DE_Telephone", length: 21, nullable: true)]
    private ?string $deTelephone = null;

    #[ORM\Column(name: "DE_Telecopie", length: 21, nullable: true)]
    private ?string $deTelecopie = null;

    #[ORM\Column(name: "DE_Replication", nullable: true)]
    private ?int $deReplication = null;

    #[ORM\Column(name: "DP_NoDefaut", nullable: true)]
    private ?int $dpNodefaut = null;

    #[ORM\Column(name: "cbDP_NoDefaut", nullable: true)]
    private ?int $cbdpNodefaut = null;

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

    #[ORM\Column(name: "DE_Exclure", type: Types::SMALLINT, nullable: true)]
    private ?int $deExclure = null;

    #[ORM\Column(name: "DE_Souche01", type: Types::SMALLINT, nullable: true)]
    private ?int $deSouche01 = null;

    #[ORM\Column(name: "DE_Souche02", type: Types::SMALLINT, nullable: true)]
    private ?int $deSouche02 = null;

    #[ORM\Column(name: "DE_Souche03", type: Types::SMALLINT, nullable: true)]
    private ?int $deSouche03 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(?int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getDeIntitule(): ?string
    {
        return $this->deIntitule;
    }

    public function setDeIntitule(string $deIntitule): static
    {
        $this->deIntitule = $deIntitule;

        return $this;
    }

    public function getCbdeIntitule()
    {
        return $this->cbdeIntitule;
    }

    public function setCbdeIntitule($cbdeIntitule): static
    {
        $this->cbdeIntitule = $cbdeIntitule;

        return $this;
    }

    public function getDeAdresse(): ?string
    {
        return $this->deAdresse;
    }

    public function setDeAdresse(?string $deAdresse): static
    {
        $this->deAdresse = $deAdresse;

        return $this;
    }

    public function getDeComplement(): ?string
    {
        return $this->deComplement;
    }

    public function setDeComplement(?string $deComplement): static
    {
        $this->deComplement = $deComplement;

        return $this;
    }

    public function getDeCodepostal(): ?string
    {
        return $this->deCodepostal;
    }

    public function setDeCodepostal(?string $deCodepostal): static
    {
        $this->deCodepostal = $deCodepostal;

        return $this;
    }

    public function getDeVille(): ?string
    {
        return $this->deVille;
    }

    public function setDeVille(?string $deVille): static
    {
        $this->deVille = $deVille;

        return $this;
    }

    public function getDeContact(): ?string
    {
        return $this->deContact;
    }

    public function setDeContact(?string $deContact): static
    {
        $this->deContact = $deContact;

        return $this;
    }

    public function getDePrincipal(): ?int
    {
        return $this->dePrincipal;
    }

    public function setDePrincipal(?int $dePrincipal): static
    {
        $this->dePrincipal = $dePrincipal;

        return $this;
    }

    public function getDeCatcompta(): ?int
    {
        return $this->deCatcompta;
    }

    public function setDeCatcompta(?int $deCatcompta): static
    {
        $this->deCatcompta = $deCatcompta;

        return $this;
    }

    public function getDeRegion(): ?string
    {
        return $this->deRegion;
    }

    public function setDeRegion(?string $deRegion): static
    {
        $this->deRegion = $deRegion;

        return $this;
    }

    public function getDePays(): ?string
    {
        return $this->dePays;
    }

    public function setDePays(?string $dePays): static
    {
        $this->dePays = $dePays;

        return $this;
    }

    public function getDeEmail(): ?string
    {
        return $this->deEmail;
    }

    public function setDeEmail(?string $deEmail): static
    {
        $this->deEmail = $deEmail;

        return $this;
    }

    public function getDeCode(): ?string
    {
        return $this->deCode;
    }

    public function setDeCode(?string $deCode): static
    {
        $this->deCode = $deCode;

        return $this;
    }

    public function getCbdeCode()
    {
        return $this->cbdeCode;
    }

    public function setCbdeCode($cbdeCode): static
    {
        $this->cbdeCode = $cbdeCode;

        return $this;
    }

    public function getDeTelephone(): ?string
    {
        return $this->deTelephone;
    }

    public function setDeTelephone(?string $deTelephone): static
    {
        $this->deTelephone = $deTelephone;

        return $this;
    }

    public function getDeTelecopie(): ?string
    {
        return $this->deTelecopie;
    }

    public function setDeTelecopie(?string $deTelecopie): static
    {
        $this->deTelecopie = $deTelecopie;

        return $this;
    }

    public function getDeReplication(): ?int
    {
        return $this->deReplication;
    }

    public function setDeReplication(?int $deReplication): static
    {
        $this->deReplication = $deReplication;

        return $this;
    }

    public function getDpNodefaut(): ?int
    {
        return $this->dpNodefaut;
    }

    public function setDpNodefaut(?int $dpNodefaut): static
    {
        $this->dpNodefaut = $dpNodefaut;

        return $this;
    }

    public function getCbdpNodefaut(): ?int
    {
        return $this->cbdpNodefaut;
    }

    public function setCbdpNodefaut(?int $cbdpNodefaut): static
    {
        $this->cbdpNodefaut = $cbdpNodefaut;

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

    public function getDeExclure(): ?int
    {
        return $this->deExclure;
    }

    public function setDeExclure(?int $deExclure): static
    {
        $this->deExclure = $deExclure;

        return $this;
    }

    public function getDeSouche01(): ?int
    {
        return $this->deSouche01;
    }

    public function setDeSouche01(?int $deSouche01): static
    {
        $this->deSouche01 = $deSouche01;

        return $this;
    }

    public function getDeSouche02(): ?int
    {
        return $this->deSouche02;
    }

    public function setDeSouche02(?int $deSouche02): static
    {
        $this->deSouche02 = $deSouche02;

        return $this;
    }

    public function getDeSouche03(): ?int
    {
        return $this->deSouche03;
    }

    public function setDeSouche03(?int $deSouche03): static
    {
        $this->deSouche03 = $deSouche03;

        return $this;
    }
}
