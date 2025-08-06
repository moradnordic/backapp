<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FJournauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_JOURNAUX')]
#[ORM\UniqueConstraint(name: 'IJO_NUM', columns: ['cbJO_Num'])]
#[ORM\Index(name: 'IJO_INT', columns: ['cbJO_Intitule'])]
#[ORM\Index(name: 'IJO_TYPE', columns: ['cbJO_Num'])]
#[ORM\Index(name: 'IJO_CGNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'IJO_SOMNUM', columns: ['cbJO_Num'])]
#[ORM\Index(name: 'IJO_SOMINT', columns: ['cbJO_Intitule'])]
#[ORM\Index(name: 'IJO_SOMTYPE', columns: ['cbJO_Num'])]
#[ORM\Index(name: 'FKIA_F_JOURNAUX_CG_Num', columns: ['CG_Num'])]
#[ORM\Entity(repositoryClass: FJournauxRepository::class)]
class FJournaux
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "JO_Num", length: 7)]
    private ?string $joNum = null;

    #[ORM\Column(name: "cbJO_Num", type: Types::BINARY, nullable: true)]
    private $cbjoNum = null;

    #[ORM\Column(name: "JO_Intitule", length: 35, nullable: true)]
    private ?string $joIntitule = null;

    #[ORM\Column(name: "cbJO_Intitule", type: Types::BINARY, nullable: true)]
    private $cbjoIntitule = null;

    #[ORM\Column(name: "CG_Num", length: 13, nullable: true)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "JO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $joType = null;

    #[ORM\Column(name: "JO_NumPiece", type: Types::SMALLINT, nullable: true)]
    private ?int $joNumpiece = null;

    #[ORM\Column(name: "JO_Contrepartie", type: Types::SMALLINT, nullable: true)]
    private ?int $joContrepartie = null;

    #[ORM\Column(name: "JO_SaisAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $joSaisanal = null;

    #[ORM\Column(name: "JO_NotCalcTot", type: Types::SMALLINT, nullable: true)]
    private ?int $joNotcalctot = null;

    #[ORM\Column(name: "JO_Rappro", type: Types::SMALLINT, nullable: true)]
    private ?int $joRappro = null;

    #[ORM\Column(name: "JO_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $joSommeil = null;

    #[ORM\Column(name: "JO_IFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $joIfrs = null;

    #[ORM\Column(name: "JO_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $joReglement = null;

    #[ORM\Column(name: "JO_SuiviTreso", type: Types::SMALLINT, nullable: true)]
    private ?int $joSuivitreso = null;

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

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getCbjoNum()
    {
        return $this->cbjoNum;
    }

    public function setCbjoNum($cbjoNum): static
    {
        $this->cbjoNum = $cbjoNum;

        return $this;
    }

    public function getJoIntitule(): ?string
    {
        return $this->joIntitule;
    }

    public function setJoIntitule(?string $joIntitule): static
    {
        $this->joIntitule = $joIntitule;

        return $this;
    }

    public function getCbjoIntitule()
    {
        return $this->cbjoIntitule;
    }

    public function setCbjoIntitule($cbjoIntitule): static
    {
        $this->cbjoIntitule = $cbjoIntitule;

        return $this;
    }

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(?string $cgNum): static
    {
        $this->cgNum = $cgNum;

        return $this;
    }

    public function getCbcgNum()
    {
        return $this->cbcgNum;
    }

    public function setCbcgNum($cbcgNum): static
    {
        $this->cbcgNum = $cbcgNum;

        return $this;
    }

    public function getJoType(): ?int
    {
        return $this->joType;
    }

    public function setJoType(?int $joType): static
    {
        $this->joType = $joType;

        return $this;
    }

    public function getJoNumpiece(): ?int
    {
        return $this->joNumpiece;
    }

    public function setJoNumpiece(?int $joNumpiece): static
    {
        $this->joNumpiece = $joNumpiece;

        return $this;
    }

    public function getJoContrepartie(): ?int
    {
        return $this->joContrepartie;
    }

    public function setJoContrepartie(?int $joContrepartie): static
    {
        $this->joContrepartie = $joContrepartie;

        return $this;
    }

    public function getJoSaisanal(): ?int
    {
        return $this->joSaisanal;
    }

    public function setJoSaisanal(?int $joSaisanal): static
    {
        $this->joSaisanal = $joSaisanal;

        return $this;
    }

    public function getJoNotcalctot(): ?int
    {
        return $this->joNotcalctot;
    }

    public function setJoNotcalctot(?int $joNotcalctot): static
    {
        $this->joNotcalctot = $joNotcalctot;

        return $this;
    }

    public function getJoRappro(): ?int
    {
        return $this->joRappro;
    }

    public function setJoRappro(?int $joRappro): static
    {
        $this->joRappro = $joRappro;

        return $this;
    }

    public function getJoSommeil(): ?int
    {
        return $this->joSommeil;
    }

    public function setJoSommeil(?int $joSommeil): static
    {
        $this->joSommeil = $joSommeil;

        return $this;
    }

    public function getJoIfrs(): ?int
    {
        return $this->joIfrs;
    }

    public function setJoIfrs(?int $joIfrs): static
    {
        $this->joIfrs = $joIfrs;

        return $this;
    }

    public function getJoReglement(): ?int
    {
        return $this->joReglement;
    }

    public function setJoReglement(?int $joReglement): static
    {
        $this->joReglement = $joReglement;

        return $this;
    }

    public function getJoSuivitreso(): ?int
    {
        return $this->joSuivitreso;
    }

    public function setJoSuivitreso(?int $joSuivitreso): static
    {
        $this->joSuivitreso = $joSuivitreso;

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
