<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FNomenclatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_NOMENCLAT')]
#[ORM\UniqueConstraint(name: 'INO_REF', columns: ['cbNO_Operation'])]
#[ORM\Index(name: 'INO_REFDET', columns: ['AG_No2'])]
#[ORM\Index(name: 'INO_REFDET2', columns: ['AG_No2'])]
#[ORM\Index(name: 'INO_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'INO_ORDRE', columns: ['NO_Ordre'])]
#[ORM\Index(name: 'INO_OPERATION', columns: ['NO_Ordre'])]
#[ORM\Index(name: 'FKIA_F_NOMENCLAT_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_NOMENCLAT_NO_RefDet', columns: ['NO_RefDet'])]
#[ORM\Index(name: 'FKIA_F_NOMENCLAT_DE_No', columns: ['cbDE_No'])]
#[ORM\Entity(repositoryClass: FNomenclatRepository::class)]
class FNomenclat
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "NO_RefDet", length: 19)]
    private ?string $noRefdet = null;

    #[ORM\Column(name: "cbNO_RefDet", type: Types::BINARY, nullable: true)]
    private $cbnoRefdet = null;

    #[ORM\Column(name: "NO_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $noQte = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

    #[ORM\Column(name: "NO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $noType = null;

    #[ORM\Column(name: "NO_Repartition", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $noRepartition = null;

    #[ORM\Column(name: "NO_Operation", length: 11, nullable: true)]
    private ?string $noOperation = null;

    #[ORM\Column(name: "cbNO_Operation", type: Types::BINARY, nullable: true)]
    private $cbnoOperation = null;

    #[ORM\Column(name: "NO_Commentaire", length: 69, nullable: true)]
    private ?string $noCommentaire = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "NO_Ordre", type: Types::SMALLINT, nullable: true)]
    private ?int $noOrdre = null;

    #[ORM\Column(name: "AG_No1Comp", nullable: true)]
    private ?int $agNo1comp = null;

    #[ORM\Column(name: "AG_No2Comp", nullable: true)]
    private ?int $agNo2comp = null;

    #[ORM\Column(name: "NO_SousTraitance", type: Types::SMALLINT, nullable: true)]
    private ?int $noSoustraitance = null;

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

    public function getNoRefdet(): ?string
    {
        return $this->noRefdet;
    }

    public function setNoRefdet(string $noRefdet): static
    {
        $this->noRefdet = $noRefdet;

        return $this;
    }

    public function getCbnoRefdet()
    {
        return $this->cbnoRefdet;
    }

    public function setCbnoRefdet($cbnoRefdet): static
    {
        $this->cbnoRefdet = $cbnoRefdet;

        return $this;
    }

    public function getNoQte(): ?string
    {
        return $this->noQte;
    }

    public function setNoQte(?string $noQte): static
    {
        $this->noQte = $noQte;

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

    public function getNoType(): ?int
    {
        return $this->noType;
    }

    public function setNoType(?int $noType): static
    {
        $this->noType = $noType;

        return $this;
    }

    public function getNoRepartition(): ?string
    {
        return $this->noRepartition;
    }

    public function setNoRepartition(?string $noRepartition): static
    {
        $this->noRepartition = $noRepartition;

        return $this;
    }

    public function getNoOperation(): ?string
    {
        return $this->noOperation;
    }

    public function setNoOperation(?string $noOperation): static
    {
        $this->noOperation = $noOperation;

        return $this;
    }

    public function getCbnoOperation()
    {
        return $this->cbnoOperation;
    }

    public function setCbnoOperation($cbnoOperation): static
    {
        $this->cbnoOperation = $cbnoOperation;

        return $this;
    }

    public function getNoCommentaire(): ?string
    {
        return $this->noCommentaire;
    }

    public function setNoCommentaire(?string $noCommentaire): static
    {
        $this->noCommentaire = $noCommentaire;

        return $this;
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

    public function getCbdeNo(): ?int
    {
        return $this->cbdeNo;
    }

    public function setCbdeNo(?int $cbdeNo): static
    {
        $this->cbdeNo = $cbdeNo;

        return $this;
    }

    public function getNoOrdre(): ?int
    {
        return $this->noOrdre;
    }

    public function setNoOrdre(?int $noOrdre): static
    {
        $this->noOrdre = $noOrdre;

        return $this;
    }

    public function getAgNo1comp(): ?int
    {
        return $this->agNo1comp;
    }

    public function setAgNo1comp(?int $agNo1comp): static
    {
        $this->agNo1comp = $agNo1comp;

        return $this;
    }

    public function getAgNo2comp(): ?int
    {
        return $this->agNo2comp;
    }

    public function setAgNo2comp(?int $agNo2comp): static
    {
        $this->agNo2comp = $agNo2comp;

        return $this;
    }

    public function getNoSoustraitance(): ?int
    {
        return $this->noSoustraitance;
    }

    public function setNoSoustraitance(?int $noSoustraitance): static
    {
        $this->noSoustraitance = $noSoustraitance;

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
