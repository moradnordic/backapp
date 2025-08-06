<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEextraitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EEXTRAIT')]
#[ORM\UniqueConstraint(name: 'IEE_LIGNE', columns: ['EE_Ligne'])]
#[ORM\Index(name: 'IEE_DATEOP', columns: ['EE_DateOp'])]
#[ORM\Index(name: 'IEE_DATEVAL', columns: ['EE_DateVal'])]
#[ORM\Index(name: 'IEE_ETAT', columns: ['EE_DateOp'])]
#[ORM\Index(name: 'IEE_LETTRE', columns: ['cbEE_Lettre'])]
#[ORM\Index(name: 'IEE_POINTAGE', columns: ['cbEE_Pointage'])]
#[ORM\Index(name: 'IEE_DATEOPERATION', columns: ['EE_Ligne'])]
#[ORM\Index(name: 'IEE_DATEVALEUR', columns: ['EE_Ligne'])]
#[ORM\Index(name: 'FKIA_F_EEXTRAIT_EX_No', columns: ['EX_No'])]
#[ORM\Entity(repositoryClass: FEextraitRepository::class)]
class FEextrait
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EX_No")]
    private ?int $exNo = null;

    #[ORM\Column(name: "EE_Ligne", type: Types::SMALLINT)]
    private ?int $eeLigne = null;

    #[ORM\Column(name: "EE_DateOp", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eeDateop = null;

    #[ORM\Column(name: "EE_DateVal", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eeDateval = null;

    #[ORM\Column(name: "EE_Intitule", length: 31, nullable: true)]
    private ?string $eeIntitule = null;

    #[ORM\Column(name: "EE_Piece", length: 7, nullable: true)]
    private ?string $eePiece = null;

    #[ORM\Column(name: "EE_Etat", type: Types::SMALLINT, nullable: true)]
    private ?int $eeEtat = null;

    #[ORM\Column(name: "EE_Indispo", type: Types::SMALLINT, nullable: true)]
    private ?int $eeIndispo = null;

    #[ORM\Column(name: "EE_Exo", type: Types::SMALLINT, nullable: true)]
    private ?int $eeExo = null;

    #[ORM\Column(name: "EE_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eeMontant = null;

    #[ORM\Column(name: "EE_Ref", length: 17, nullable: true)]
    private ?string $eeRef = null;

    #[ORM\Column(name: "EE_CodeInterne", length: 5, nullable: true)]
    private ?string $eeCodeinterne = null;

    #[ORM\Column(name: "IB_AFB", length: 3, nullable: true)]
    private ?string $ibAfb = null;

    #[ORM\Column(name: "N_Rejet", type: Types::SMALLINT, nullable: true)]
    private ?int $nRejet = null;

    #[ORM\Column(name: "EE_Lettre", length: 9, nullable: true)]
    private ?string $eeLettre = null;

    #[ORM\Column(name: "cbEE_Lettre", type: Types::BINARY, nullable: true)]
    private $cbeeLettre = null;

    #[ORM\Column(name: "EE_MontantCpta", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eeMontantcpta = null;

    #[ORM\Column(name: "EE_Point", type: Types::SMALLINT, nullable: true)]
    private ?int $eePoint = null;

    #[ORM\Column(name: "EE_Pointage", length: 3, nullable: true)]
    private ?string $eePointage = null;

    #[ORM\Column(name: "cbEE_Pointage", type: Types::BINARY, nullable: true)]
    private $cbeePointage = null;

    #[ORM\Column(name: "EE_DatePoint", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eeDatepoint = null;

    #[ORM\Column(name: "EE_NatureTreso", nullable: true)]
    private ?int $eeNaturetreso = null;

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

    public function getExNo(): ?int
    {
        return $this->exNo;
    }

    public function setExNo(int $exNo): static
    {
        $this->exNo = $exNo;

        return $this;
    }

    public function getEeLigne(): ?int
    {
        return $this->eeLigne;
    }

    public function setEeLigne(int $eeLigne): static
    {
        $this->eeLigne = $eeLigne;

        return $this;
    }

    public function getEeDateop(): ?\DateTimeInterface
    {
        return $this->eeDateop;
    }

    public function setEeDateop(?\DateTimeInterface $eeDateop): static
    {
        $this->eeDateop = $eeDateop;

        return $this;
    }

    public function getEeDateval(): ?\DateTimeInterface
    {
        return $this->eeDateval;
    }

    public function setEeDateval(?\DateTimeInterface $eeDateval): static
    {
        $this->eeDateval = $eeDateval;

        return $this;
    }

    public function getEeIntitule(): ?string
    {
        return $this->eeIntitule;
    }

    public function setEeIntitule(?string $eeIntitule): static
    {
        $this->eeIntitule = $eeIntitule;

        return $this;
    }

    public function getEePiece(): ?string
    {
        return $this->eePiece;
    }

    public function setEePiece(?string $eePiece): static
    {
        $this->eePiece = $eePiece;

        return $this;
    }

    public function getEeEtat(): ?int
    {
        return $this->eeEtat;
    }

    public function setEeEtat(?int $eeEtat): static
    {
        $this->eeEtat = $eeEtat;

        return $this;
    }

    public function getEeIndispo(): ?int
    {
        return $this->eeIndispo;
    }

    public function setEeIndispo(?int $eeIndispo): static
    {
        $this->eeIndispo = $eeIndispo;

        return $this;
    }

    public function getEeExo(): ?int
    {
        return $this->eeExo;
    }

    public function setEeExo(?int $eeExo): static
    {
        $this->eeExo = $eeExo;

        return $this;
    }

    public function getEeMontant(): ?string
    {
        return $this->eeMontant;
    }

    public function setEeMontant(?string $eeMontant): static
    {
        $this->eeMontant = $eeMontant;

        return $this;
    }

    public function getEeRef(): ?string
    {
        return $this->eeRef;
    }

    public function setEeRef(?string $eeRef): static
    {
        $this->eeRef = $eeRef;

        return $this;
    }

    public function getEeCodeinterne(): ?string
    {
        return $this->eeCodeinterne;
    }

    public function setEeCodeinterne(?string $eeCodeinterne): static
    {
        $this->eeCodeinterne = $eeCodeinterne;

        return $this;
    }

    public function getIbAfb(): ?string
    {
        return $this->ibAfb;
    }

    public function setIbAfb(?string $ibAfb): static
    {
        $this->ibAfb = $ibAfb;

        return $this;
    }

    public function getNRejet(): ?int
    {
        return $this->nRejet;
    }

    public function setNRejet(?int $nRejet): static
    {
        $this->nRejet = $nRejet;

        return $this;
    }

    public function getEeLettre(): ?string
    {
        return $this->eeLettre;
    }

    public function setEeLettre(?string $eeLettre): static
    {
        $this->eeLettre = $eeLettre;

        return $this;
    }

    public function getCbeeLettre()
    {
        return $this->cbeeLettre;
    }

    public function setCbeeLettre($cbeeLettre): static
    {
        $this->cbeeLettre = $cbeeLettre;

        return $this;
    }

    public function getEeMontantcpta(): ?string
    {
        return $this->eeMontantcpta;
    }

    public function setEeMontantcpta(?string $eeMontantcpta): static
    {
        $this->eeMontantcpta = $eeMontantcpta;

        return $this;
    }

    public function getEePoint(): ?int
    {
        return $this->eePoint;
    }

    public function setEePoint(?int $eePoint): static
    {
        $this->eePoint = $eePoint;

        return $this;
    }

    public function getEePointage(): ?string
    {
        return $this->eePointage;
    }

    public function setEePointage(?string $eePointage): static
    {
        $this->eePointage = $eePointage;

        return $this;
    }

    public function getCbeePointage()
    {
        return $this->cbeePointage;
    }

    public function setCbeePointage($cbeePointage): static
    {
        $this->cbeePointage = $cbeePointage;

        return $this;
    }

    public function getEeDatepoint(): ?\DateTimeInterface
    {
        return $this->eeDatepoint;
    }

    public function setEeDatepoint(?\DateTimeInterface $eeDatepoint): static
    {
        $this->eeDatepoint = $eeDatepoint;

        return $this;
    }

    public function getEeNaturetreso(): ?int
    {
        return $this->eeNaturetreso;
    }

    public function setEeNaturetreso(?int $eeNaturetreso): static
    {
        $this->eeNaturetreso = $eeNaturetreso;

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
