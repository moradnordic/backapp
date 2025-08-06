<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FArtclientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTCLIENT')]
#[ORM\Index(name: 'IAC_REF', columns: ['AC_Categorie'])]
#[ORM\Index(name: 'IAC_CLI', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IAC_CLIREF', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAC_TIERSREF', columns: ['cbAC_RefClient'])]
#[ORM\Index(name: 'IAC_REFCL', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ARTCLIENT_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FArtclientRepository::class)]
class FArtclient
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AC_Categorie", type: Types::SMALLINT, nullable: true)]
    private ?int $acCategorie = null;

    #[ORM\Column(name: "AC_PrixVen", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acPrixven = null;

    #[ORM\Column(name: "AC_Coef", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acCoef = null;

    #[ORM\Column(name: "AC_PrixTTC", type: Types::SMALLINT, nullable: true)]
    private ?int $acPrixttc = null;

    #[ORM\Column(name: "AC_Arrondi", type: Types::SMALLINT, nullable: true)]
    private ?int $acArrondi = null;

    #[ORM\Column(name: "AC_QteMont", type: Types::SMALLINT, nullable: true)]
    private ?int $acQtemont = null;

    #[ORM\Column(name: "EG_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $egChamp = null;

    #[ORM\Column(name: "AC_PrixDev", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acPrixdev = null;

    #[ORM\Column(name: "AC_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $acDevise = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "AC_Remise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acRemise = null;

    #[ORM\Column(name: "AC_Calcul", type: Types::SMALLINT, nullable: true)]
    private ?int $acCalcul = null;

    #[ORM\Column(name: "AC_TypeRem", type: Types::SMALLINT, nullable: true)]
    private ?int $acTyperem = null;

    #[ORM\Column(name: "AC_RefClient", length: 19, nullable: true)]
    private ?string $acRefclient = null;

    #[ORM\Column(name: "cbAC_RefClient", type: Types::BINARY, nullable: true)]
    private $cbacRefclient = null;

    #[ORM\Column(name: "AC_CoefNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acCoefnouv = null;

    #[ORM\Column(name: "AC_PrixVenNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acPrixvennouv = null;

    #[ORM\Column(name: "AC_PrixDevNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acPrixdevnouv = null;

    #[ORM\Column(name: "AC_RemiseNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $acRemisenouv = null;

    #[ORM\Column(name: "AC_DateApplication", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $acDateapplication = null;

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

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getAcCategorie(): ?int
    {
        return $this->acCategorie;
    }

    public function setAcCategorie(?int $acCategorie): static
    {
        $this->acCategorie = $acCategorie;

        return $this;
    }

    public function getAcPrixven(): ?string
    {
        return $this->acPrixven;
    }

    public function setAcPrixven(?string $acPrixven): static
    {
        $this->acPrixven = $acPrixven;

        return $this;
    }

    public function getAcCoef(): ?string
    {
        return $this->acCoef;
    }

    public function setAcCoef(?string $acCoef): static
    {
        $this->acCoef = $acCoef;

        return $this;
    }

    public function getAcPrixttc(): ?int
    {
        return $this->acPrixttc;
    }

    public function setAcPrixttc(?int $acPrixttc): static
    {
        $this->acPrixttc = $acPrixttc;

        return $this;
    }

    public function getAcArrondi(): ?int
    {
        return $this->acArrondi;
    }

    public function setAcArrondi(?int $acArrondi): static
    {
        $this->acArrondi = $acArrondi;

        return $this;
    }

    public function getAcQtemont(): ?int
    {
        return $this->acQtemont;
    }

    public function setAcQtemont(?int $acQtemont): static
    {
        $this->acQtemont = $acQtemont;

        return $this;
    }

    public function getEgChamp(): ?int
    {
        return $this->egChamp;
    }

    public function setEgChamp(?int $egChamp): static
    {
        $this->egChamp = $egChamp;

        return $this;
    }

    public function getAcPrixdev(): ?string
    {
        return $this->acPrixdev;
    }

    public function setAcPrixdev(?string $acPrixdev): static
    {
        $this->acPrixdev = $acPrixdev;

        return $this;
    }

    public function getAcDevise(): ?int
    {
        return $this->acDevise;
    }

    public function setAcDevise(?int $acDevise): static
    {
        $this->acDevise = $acDevise;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): static
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

    public function getAcRemise(): ?string
    {
        return $this->acRemise;
    }

    public function setAcRemise(?string $acRemise): static
    {
        $this->acRemise = $acRemise;

        return $this;
    }

    public function getAcCalcul(): ?int
    {
        return $this->acCalcul;
    }

    public function setAcCalcul(?int $acCalcul): static
    {
        $this->acCalcul = $acCalcul;

        return $this;
    }

    public function getAcTyperem(): ?int
    {
        return $this->acTyperem;
    }

    public function setAcTyperem(?int $acTyperem): static
    {
        $this->acTyperem = $acTyperem;

        return $this;
    }

    public function getAcRefclient(): ?string
    {
        return $this->acRefclient;
    }

    public function setAcRefclient(?string $acRefclient): static
    {
        $this->acRefclient = $acRefclient;

        return $this;
    }

    public function getCbacRefclient()
    {
        return $this->cbacRefclient;
    }

    public function setCbacRefclient($cbacRefclient): static
    {
        $this->cbacRefclient = $cbacRefclient;

        return $this;
    }

    public function getAcCoefnouv(): ?string
    {
        return $this->acCoefnouv;
    }

    public function setAcCoefnouv(?string $acCoefnouv): static
    {
        $this->acCoefnouv = $acCoefnouv;

        return $this;
    }

    public function getAcPrixvennouv(): ?string
    {
        return $this->acPrixvennouv;
    }

    public function setAcPrixvennouv(?string $acPrixvennouv): static
    {
        $this->acPrixvennouv = $acPrixvennouv;

        return $this;
    }

    public function getAcPrixdevnouv(): ?string
    {
        return $this->acPrixdevnouv;
    }

    public function setAcPrixdevnouv(?string $acPrixdevnouv): static
    {
        $this->acPrixdevnouv = $acPrixdevnouv;

        return $this;
    }

    public function getAcRemisenouv(): ?string
    {
        return $this->acRemisenouv;
    }

    public function setAcRemisenouv(?string $acRemisenouv): static
    {
        $this->acRemisenouv = $acRemisenouv;

        return $this;
    }

    public function getAcDateapplication(): ?\DateTimeInterface
    {
        return $this->acDateapplication;
    }

    public function setAcDateapplication(?\DateTimeInterface $acDateapplication): static
    {
        $this->acDateapplication = $acDateapplication;

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
