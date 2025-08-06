<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FArtfournissRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTFOURNISS')]
#[ORM\UniqueConstraint(name: 'IAF_REF', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IAF_REFFO', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAF_FOURNISS', columns: ['cbAF_RefFourniss'])]
#[ORM\Index(name: 'IAF_PRINCIPAL', columns: ['AF_Principal'])]
#[ORM\Index(name: 'IAF_TIERSBARRE', columns: ['cbAF_CodeBarre'])]
#[ORM\Index(name: 'IAF_CBARRE', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ARTFOURNISS_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FArtfournissRepository::class)]
class FArtfourniss
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "AF_RefFourniss", length: 19, nullable: true)]
    private ?string $afReffourniss = null;

    #[ORM\Column(name: "cbAF_RefFourniss", type: Types::BINARY, nullable: true)]
    private $cbafReffourniss = null;

    #[ORM\Column(name: "AF_PrixAch", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afPrixach = null;

    #[ORM\Column(name: "AF_Unite", type: Types::SMALLINT, nullable: true)]
    private ?int $afUnite = null;

    #[ORM\Column(name: "AF_Conversion", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afConversion = null;

    #[ORM\Column(name: "AF_DelaiAppro", type: Types::SMALLINT, nullable: true)]
    private ?int $afDelaiappro = null;

    #[ORM\Column(name: "AF_Garantie", type: Types::SMALLINT, nullable: true)]
    private ?int $afGarantie = null;

    #[ORM\Column(name: "AF_Colisage", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afColisage = null;

    #[ORM\Column(name: "AF_QteMini", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afQtemini = null;

    #[ORM\Column(name: "AF_QteMont", type: Types::SMALLINT, nullable: true)]
    private ?int $afQtemont = null;

    #[ORM\Column(name: "EG_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $egChamp = null;

    #[ORM\Column(name: "AF_Principal", type: Types::SMALLINT, nullable: true)]
    private ?int $afPrincipal = null;

    #[ORM\Column(name: "AF_PrixDev", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afPrixdev = null;

    #[ORM\Column(name: "AF_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $afDevise = null;

    #[ORM\Column(name: "AF_Remise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afRemise = null;

    #[ORM\Column(name: "AF_ConvDiv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afConvdiv = null;

    #[ORM\Column(name: "AF_TypeRem", type: Types::SMALLINT, nullable: true)]
    private ?int $afTyperem = null;

    #[ORM\Column(name: "AF_CodeBarre", length: 19, nullable: true)]
    private ?string $afCodebarre = null;

    #[ORM\Column(name: "cbAF_CodeBarre", type: Types::BINARY, nullable: true)]
    private $cbafCodebarre = null;

    #[ORM\Column(name: "AF_PrixAchNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afPrixachnouv = null;

    #[ORM\Column(name: "AF_PrixDevNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afPrixdevnouv = null;

    #[ORM\Column(name: "AF_RemiseNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afRemisenouv = null;

    #[ORM\Column(name: "AF_DateApplication", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $afDateapplication = null;

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

    public function getAfReffourniss(): ?string
    {
        return $this->afReffourniss;
    }

    public function setAfReffourniss(?string $afReffourniss): static
    {
        $this->afReffourniss = $afReffourniss;

        return $this;
    }

    public function getCbafReffourniss()
    {
        return $this->cbafReffourniss;
    }

    public function setCbafReffourniss($cbafReffourniss): static
    {
        $this->cbafReffourniss = $cbafReffourniss;

        return $this;
    }

    public function getAfPrixach(): ?string
    {
        return $this->afPrixach;
    }

    public function setAfPrixach(?string $afPrixach): static
    {
        $this->afPrixach = $afPrixach;

        return $this;
    }

    public function getAfUnite(): ?int
    {
        return $this->afUnite;
    }

    public function setAfUnite(?int $afUnite): static
    {
        $this->afUnite = $afUnite;

        return $this;
    }

    public function getAfConversion(): ?string
    {
        return $this->afConversion;
    }

    public function setAfConversion(?string $afConversion): static
    {
        $this->afConversion = $afConversion;

        return $this;
    }

    public function getAfDelaiappro(): ?int
    {
        return $this->afDelaiappro;
    }

    public function setAfDelaiappro(?int $afDelaiappro): static
    {
        $this->afDelaiappro = $afDelaiappro;

        return $this;
    }

    public function getAfGarantie(): ?int
    {
        return $this->afGarantie;
    }

    public function setAfGarantie(?int $afGarantie): static
    {
        $this->afGarantie = $afGarantie;

        return $this;
    }

    public function getAfColisage(): ?string
    {
        return $this->afColisage;
    }

    public function setAfColisage(?string $afColisage): static
    {
        $this->afColisage = $afColisage;

        return $this;
    }

    public function getAfQtemini(): ?string
    {
        return $this->afQtemini;
    }

    public function setAfQtemini(?string $afQtemini): static
    {
        $this->afQtemini = $afQtemini;

        return $this;
    }

    public function getAfQtemont(): ?int
    {
        return $this->afQtemont;
    }

    public function setAfQtemont(?int $afQtemont): static
    {
        $this->afQtemont = $afQtemont;

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

    public function getAfPrincipal(): ?int
    {
        return $this->afPrincipal;
    }

    public function setAfPrincipal(?int $afPrincipal): static
    {
        $this->afPrincipal = $afPrincipal;

        return $this;
    }

    public function getAfPrixdev(): ?string
    {
        return $this->afPrixdev;
    }

    public function setAfPrixdev(?string $afPrixdev): static
    {
        $this->afPrixdev = $afPrixdev;

        return $this;
    }

    public function getAfDevise(): ?int
    {
        return $this->afDevise;
    }

    public function setAfDevise(?int $afDevise): static
    {
        $this->afDevise = $afDevise;

        return $this;
    }

    public function getAfRemise(): ?string
    {
        return $this->afRemise;
    }

    public function setAfRemise(?string $afRemise): static
    {
        $this->afRemise = $afRemise;

        return $this;
    }

    public function getAfConvdiv(): ?string
    {
        return $this->afConvdiv;
    }

    public function setAfConvdiv(?string $afConvdiv): static
    {
        $this->afConvdiv = $afConvdiv;

        return $this;
    }

    public function getAfTyperem(): ?int
    {
        return $this->afTyperem;
    }

    public function setAfTyperem(?int $afTyperem): static
    {
        $this->afTyperem = $afTyperem;

        return $this;
    }

    public function getAfCodebarre(): ?string
    {
        return $this->afCodebarre;
    }

    public function setAfCodebarre(?string $afCodebarre): static
    {
        $this->afCodebarre = $afCodebarre;

        return $this;
    }

    public function getCbafCodebarre()
    {
        return $this->cbafCodebarre;
    }

    public function setCbafCodebarre($cbafCodebarre): static
    {
        $this->cbafCodebarre = $cbafCodebarre;

        return $this;
    }

    public function getAfPrixachnouv(): ?string
    {
        return $this->afPrixachnouv;
    }

    public function setAfPrixachnouv(?string $afPrixachnouv): static
    {
        $this->afPrixachnouv = $afPrixachnouv;

        return $this;
    }

    public function getAfPrixdevnouv(): ?string
    {
        return $this->afPrixdevnouv;
    }

    public function setAfPrixdevnouv(?string $afPrixdevnouv): static
    {
        $this->afPrixdevnouv = $afPrixdevnouv;

        return $this;
    }

    public function getAfRemisenouv(): ?string
    {
        return $this->afRemisenouv;
    }

    public function setAfRemisenouv(?string $afRemisenouv): static
    {
        $this->afRemisenouv = $afRemisenouv;

        return $this;
    }

    public function getAfDateapplication(): ?\DateTimeInterface
    {
        return $this->afDateapplication;
    }

    public function setAfDateapplication(?\DateTimeInterface $afDateapplication): static
    {
        $this->afDateapplication = $afDateapplication;

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
