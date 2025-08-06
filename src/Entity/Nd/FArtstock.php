<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FArtstockRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTSTOCK')]
#[ORM\UniqueConstraint(name: 'IAS_REF', columns: ['DE_No'])]
#[ORM\Index(name: 'IAS_NO', columns: ['DE_No'])]
#[ORM\Index(name: 'IAS_PRINCIPAL', columns: ['AS_Principal'])]
#[ORM\Index(name: 'IAS_EMPLACEMENTPRINC', columns: ['DP_NoPrincipal'])]
#[ORM\Index(name: 'IAS_EMPLACEMENTCONT', columns: ['DP_NoControle'])]
#[ORM\Index(name: 'FKIA_F_ARTSTOCK_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ARTSTOCK_DE_No', columns: ['DE_No'])]
#[ORM\Index(name: 'FKIA_F_ARTSTOCK_DP_NoPrincipal', columns: ['cbDP_NoPrincipal'])]
#[ORM\Index(name: 'FKIA_F_ARTSTOCK_DP_NoControle', columns: ['cbDP_NoControle'])]
#[ORM\Entity(repositoryClass: FArtstockRepository::class)]
class FArtstock
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "AS_QteMini", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQtemini = null;

    #[ORM\Column(name: "AS_QteMaxi", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQtemaxi = null;

    #[ORM\Column(name: "AS_MontSto", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asMontsto = null;

    #[ORM\Column(name: "AS_QteSto", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQtesto = null;

    #[ORM\Column(name: "AS_QteRes", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQteres = null;

    #[ORM\Column(name: "AS_QteCom", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQtecom = null;

    #[ORM\Column(name: "AS_Principal", type: Types::SMALLINT, nullable: true)]
    private ?int $asPrincipal = null;

    #[ORM\Column(name: "AS_QteResCM", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQterescm = null;

    #[ORM\Column(name: "AS_QteComCM", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQtecomcm = null;

    #[ORM\Column(name: "AS_QtePrepa", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQteprepa = null;

    #[ORM\Column(name: "DP_NoPrincipal", nullable: true)]
    private ?int $dpNoprincipal = null;

    #[ORM\Column(name: "cbDP_NoPrincipal", nullable: true)]
    private ?int $cbdpNoprincipal = null;

    #[ORM\Column(name: "DP_NoControle", nullable: true)]
    private ?int $dpNocontrole = null;

    #[ORM\Column(name: "cbDP_NoControle", nullable: true)]
    private ?int $cbdpNocontrole = null;

    #[ORM\Column(name: "AS_QteAControler", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $asQteacontroler = null;

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

    #[ORM\Column(name: "AS_Mouvemente", type: Types::SMALLINT, nullable: true)]
    private ?int $asMouvemente = null;

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

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getAsQtemini(): ?string
    {
        return $this->asQtemini;
    }

    public function setAsQtemini(?string $asQtemini): static
    {
        $this->asQtemini = $asQtemini;

        return $this;
    }

    public function getAsQtemaxi(): ?string
    {
        return $this->asQtemaxi;
    }

    public function setAsQtemaxi(?string $asQtemaxi): static
    {
        $this->asQtemaxi = $asQtemaxi;

        return $this;
    }

    public function getAsMontsto(): ?string
    {
        return $this->asMontsto;
    }

    public function setAsMontsto(?string $asMontsto): static
    {
        $this->asMontsto = $asMontsto;

        return $this;
    }

    public function getAsQtesto(): ?string
    {
        return $this->asQtesto;
    }

    public function setAsQtesto(?string $asQtesto): static
    {
        $this->asQtesto = $asQtesto;

        return $this;
    }

    public function getAsQteres(): ?string
    {
        return $this->asQteres;
    }

    public function setAsQteres(?string $asQteres): static
    {
        $this->asQteres = $asQteres;

        return $this;
    }

    public function getAsQtecom(): ?string
    {
        return $this->asQtecom;
    }

    public function setAsQtecom(?string $asQtecom): static
    {
        $this->asQtecom = $asQtecom;

        return $this;
    }

    public function getAsPrincipal(): ?int
    {
        return $this->asPrincipal;
    }

    public function setAsPrincipal(?int $asPrincipal): static
    {
        $this->asPrincipal = $asPrincipal;

        return $this;
    }

    public function getAsQterescm(): ?string
    {
        return $this->asQterescm;
    }

    public function setAsQterescm(?string $asQterescm): static
    {
        $this->asQterescm = $asQterescm;

        return $this;
    }

    public function getAsQtecomcm(): ?string
    {
        return $this->asQtecomcm;
    }

    public function setAsQtecomcm(?string $asQtecomcm): static
    {
        $this->asQtecomcm = $asQtecomcm;

        return $this;
    }

    public function getAsQteprepa(): ?string
    {
        return $this->asQteprepa;
    }

    public function setAsQteprepa(?string $asQteprepa): static
    {
        $this->asQteprepa = $asQteprepa;

        return $this;
    }

    public function getDpNoprincipal(): ?int
    {
        return $this->dpNoprincipal;
    }

    public function setDpNoprincipal(?int $dpNoprincipal): static
    {
        $this->dpNoprincipal = $dpNoprincipal;

        return $this;
    }

    public function getCbdpNoprincipal(): ?int
    {
        return $this->cbdpNoprincipal;
    }

    public function setCbdpNoprincipal(?int $cbdpNoprincipal): static
    {
        $this->cbdpNoprincipal = $cbdpNoprincipal;

        return $this;
    }

    public function getDpNocontrole(): ?int
    {
        return $this->dpNocontrole;
    }

    public function setDpNocontrole(?int $dpNocontrole): static
    {
        $this->dpNocontrole = $dpNocontrole;

        return $this;
    }

    public function getCbdpNocontrole(): ?int
    {
        return $this->cbdpNocontrole;
    }

    public function setCbdpNocontrole(?int $cbdpNocontrole): static
    {
        $this->cbdpNocontrole = $cbdpNocontrole;

        return $this;
    }

    public function getAsQteacontroler(): ?string
    {
        return $this->asQteacontroler;
    }

    public function setAsQteacontroler(?string $asQteacontroler): static
    {
        $this->asQteacontroler = $asQteacontroler;

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

    public function getAsMouvemente(): ?int
    {
        return $this->asMouvemente;
    }

    public function setAsMouvemente(?int $asMouvemente): static
    {
        $this->asMouvemente = $asMouvemente;

        return $this;
    }
}
