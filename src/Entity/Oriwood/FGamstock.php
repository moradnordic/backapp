<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FGamstockRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_GAMSTOCK')]
#[ORM\UniqueConstraint(name: 'IGS_NODEP', columns: ['AG_No2'])]
#[ORM\Index(name: 'IGS_NODEP2', columns: ['AG_No1'])]
#[ORM\Index(name: 'IGS_NOGAM', columns: ['DE_No'])]
#[ORM\Index(name: 'IGS_NOGAM2', columns: ['AG_No1'])]
#[ORM\Index(name: 'IGS_EMPLACEMENTPRINC', columns: ['DP_NoPrincipal'])]
#[ORM\Index(name: 'IGS_EMPLACEMENTCONT', columns: ['DP_NoControle'])]
#[ORM\Index(name: 'FKIA_F_GAMSTOCK_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_GAMSTOCK_DE_No', columns: ['DE_No'])]
#[ORM\Index(name: 'FKIA_F_GAMSTOCK_DP_NoPrincipal', columns: ['cbDP_NoPrincipal'])]
#[ORM\Index(name: 'FKIA_F_GAMSTOCK_DP_NoControle', columns: ['cbDP_NoControle'])]
#[ORM\Entity(repositoryClass: FGamstockRepository::class)]
class FGamstock
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "GS_MontSto", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsMontsto = null;

    #[ORM\Column(name: "GS_QteSto", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQtesto = null;

    #[ORM\Column(name: "GS_QteRes", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQteres = null;

    #[ORM\Column(name: "GS_QteCom", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQtecom = null;

    #[ORM\Column(name: "GS_QteResCM", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQterescm = null;

    #[ORM\Column(name: "GS_QteComCM", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQtecomcm = null;

    #[ORM\Column(name: "GS_QteMini", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQtemini = null;

    #[ORM\Column(name: "GS_QteMaxi", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQtemaxi = null;

    #[ORM\Column(name: "GS_QtePrepa", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQteprepa = null;

    #[ORM\Column(name: "DP_NoPrincipal", nullable: true)]
    private ?int $dpNoprincipal = null;

    #[ORM\Column(name: "cbDP_NoPrincipal", nullable: true)]
    private ?int $cbdpNoprincipal = null;

    #[ORM\Column(name: "DP_NoControle", nullable: true)]
    private ?int $dpNocontrole = null;

    #[ORM\Column(name: "cbDP_NoControle", nullable: true)]
    private ?int $cbdpNocontrole = null;

    #[ORM\Column(name: "GS_QteAControler", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $gsQteacontroler = null;

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

    public function getAgNo1(): ?int
    {
        return $this->agNo1;
    }

    public function setAgNo1(?int $agNo1): static
    {
        $this->agNo1 = $agNo1;

        return $this;
    }

    public function getAgNo2(): ?int
    {
        return $this->agNo2;
    }

    public function setAgNo2(?int $agNo2): static
    {
        $this->agNo2 = $agNo2;

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

    public function getGsMontsto(): ?string
    {
        return $this->gsMontsto;
    }

    public function setGsMontsto(?string $gsMontsto): static
    {
        $this->gsMontsto = $gsMontsto;

        return $this;
    }

    public function getGsQtesto(): ?string
    {
        return $this->gsQtesto;
    }

    public function setGsQtesto(?string $gsQtesto): static
    {
        $this->gsQtesto = $gsQtesto;

        return $this;
    }

    public function getGsQteres(): ?string
    {
        return $this->gsQteres;
    }

    public function setGsQteres(?string $gsQteres): static
    {
        $this->gsQteres = $gsQteres;

        return $this;
    }

    public function getGsQtecom(): ?string
    {
        return $this->gsQtecom;
    }

    public function setGsQtecom(?string $gsQtecom): static
    {
        $this->gsQtecom = $gsQtecom;

        return $this;
    }

    public function getGsQterescm(): ?string
    {
        return $this->gsQterescm;
    }

    public function setGsQterescm(?string $gsQterescm): static
    {
        $this->gsQterescm = $gsQterescm;

        return $this;
    }

    public function getGsQtecomcm(): ?string
    {
        return $this->gsQtecomcm;
    }

    public function setGsQtecomcm(?string $gsQtecomcm): static
    {
        $this->gsQtecomcm = $gsQtecomcm;

        return $this;
    }

    public function getGsQtemini(): ?string
    {
        return $this->gsQtemini;
    }

    public function setGsQtemini(?string $gsQtemini): static
    {
        $this->gsQtemini = $gsQtemini;

        return $this;
    }

    public function getGsQtemaxi(): ?string
    {
        return $this->gsQtemaxi;
    }

    public function setGsQtemaxi(?string $gsQtemaxi): static
    {
        $this->gsQtemaxi = $gsQtemaxi;

        return $this;
    }

    public function getGsQteprepa(): ?string
    {
        return $this->gsQteprepa;
    }

    public function setGsQteprepa(?string $gsQteprepa): static
    {
        $this->gsQteprepa = $gsQteprepa;

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

    public function getGsQteacontroler(): ?string
    {
        return $this->gsQteacontroler;
    }

    public function setGsQteacontroler(?string $gsQteacontroler): static
    {
        $this->gsQteacontroler = $gsQteacontroler;

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
