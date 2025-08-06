<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FLivraisonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_LIVRAISON')]
#[ORM\Index(name: 'ILI_INT', columns: ['cbLI_Intitule'])]
#[ORM\Index(name: 'ILI_PRINCIPAL', columns: ['cbCT_Num'])]
#[ORM\UniqueConstraint(name: 'ILI_NO', columns: ['LI_No'])]
#[ORM\Index(name: 'FKIA_F_LIVRAISON_CT_Num', columns: ['CT_Num'])]
#[ORM\Entity(repositoryClass: FLivraisonRepository::class)]
class FLivraison
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "LI_No")]
    private ?int $liNo = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "LI_Intitule", length: 35, nullable: true)]
    private ?string $liIntitule = null;

    #[ORM\Column(name: "cbLI_Intitule", type: Types::BINARY, nullable: true)]
    private $cbliIntitule = null;

    #[ORM\Column(name: "LI_Adresse", length: 35, nullable: true)]
    private ?string $liAdresse = null;

    #[ORM\Column(name: "LI_Complement", length: 35, nullable: true)]
    private ?string $liComplement = null;

    #[ORM\Column(name: "LI_CodePostal", length: 9, nullable: true)]
    private ?string $liCodepostal = null;

    #[ORM\Column(name: "LI_Ville", length: 35, nullable: true)]
    private ?string $liVille = null;

    #[ORM\Column(name: "LI_CodeRegion", length: 25, nullable: true)]
    private ?string $liCoderegion = null;

    #[ORM\Column(name: "LI_Pays", length: 35, nullable: true)]
    private ?string $liPays = null;

    #[ORM\Column(name: "LI_Contact", length: 35, nullable: true)]
    private ?string $liContact = null;

    #[ORM\Column(name: "N_Expedition", type: Types::SMALLINT, nullable: true)]
    private ?int $nExpedition = null;

    #[ORM\Column(name: "N_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $nCondition = null;

    #[ORM\Column(name: "LI_Principal", type: Types::SMALLINT, nullable: true)]
    private ?int $liPrincipal = null;

    #[ORM\Column(name: "LI_Telephone", length: 21, nullable: true)]
    private ?string $liTelephone = null;

    #[ORM\Column(name: "LI_Telecopie", length: 21, nullable: true)]
    private ?string $liTelecopie = null;

    #[ORM\Column(name: "LI_EMail", length: 69, nullable: true)]
    private ?string $liEmail = null;

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

    public function getLiNo(): ?int
    {
        return $this->liNo;
    }

    public function setLiNo(int $liNo): static
    {
        $this->liNo = $liNo;

        return $this;
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

    public function getLiIntitule(): ?string
    {
        return $this->liIntitule;
    }

    public function setLiIntitule(?string $liIntitule): static
    {
        $this->liIntitule = $liIntitule;

        return $this;
    }

    public function getCbliIntitule()
    {
        return $this->cbliIntitule;
    }

    public function setCbliIntitule($cbliIntitule): static
    {
        $this->cbliIntitule = $cbliIntitule;

        return $this;
    }

    public function getLiAdresse(): ?string
    {
        return $this->liAdresse;
    }

    public function setLiAdresse(?string $liAdresse): static
    {
        $this->liAdresse = $liAdresse;

        return $this;
    }

    public function getLiComplement(): ?string
    {
        return $this->liComplement;
    }

    public function setLiComplement(?string $liComplement): static
    {
        $this->liComplement = $liComplement;

        return $this;
    }

    public function getLiCodepostal(): ?string
    {
        return $this->liCodepostal;
    }

    public function setLiCodepostal(?string $liCodepostal): static
    {
        $this->liCodepostal = $liCodepostal;

        return $this;
    }

    public function getLiVille(): ?string
    {
        return $this->liVille;
    }

    public function setLiVille(?string $liVille): static
    {
        $this->liVille = $liVille;

        return $this;
    }

    public function getLiCoderegion(): ?string
    {
        return $this->liCoderegion;
    }

    public function setLiCoderegion(?string $liCoderegion): static
    {
        $this->liCoderegion = $liCoderegion;

        return $this;
    }

    public function getLiPays(): ?string
    {
        return $this->liPays;
    }

    public function setLiPays(?string $liPays): static
    {
        $this->liPays = $liPays;

        return $this;
    }

    public function getLiContact(): ?string
    {
        return $this->liContact;
    }

    public function setLiContact(?string $liContact): static
    {
        $this->liContact = $liContact;

        return $this;
    }

    public function getNExpedition(): ?int
    {
        return $this->nExpedition;
    }

    public function setNExpedition(?int $nExpedition): static
    {
        $this->nExpedition = $nExpedition;

        return $this;
    }

    public function getNCondition(): ?int
    {
        return $this->nCondition;
    }

    public function setNCondition(?int $nCondition): static
    {
        $this->nCondition = $nCondition;

        return $this;
    }

    public function getLiPrincipal(): ?int
    {
        return $this->liPrincipal;
    }

    public function setLiPrincipal(?int $liPrincipal): static
    {
        $this->liPrincipal = $liPrincipal;

        return $this;
    }

    public function getLiTelephone(): ?string
    {
        return $this->liTelephone;
    }

    public function setLiTelephone(?string $liTelephone): static
    {
        $this->liTelephone = $liTelephone;

        return $this;
    }

    public function getLiTelecopie(): ?string
    {
        return $this->liTelecopie;
    }

    public function setLiTelecopie(?string $liTelecopie): static
    {
        $this->liTelecopie = $liTelecopie;

        return $this;
    }

    public function getLiEmail(): ?string
    {
        return $this->liEmail;
    }

    public function setLiEmail(?string $liEmail): static
    {
        $this->liEmail = $liEmail;

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
