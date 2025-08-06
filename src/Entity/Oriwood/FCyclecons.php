<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCycleconsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CYCLECONS')]
#[ORM\Index(name: 'ICC_CONUM', columns: ['cbCO_Num'])]
#[ORM\Entity(repositoryClass: FCycleconsRepository::class)]
class FCyclecons
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CY_Num", length: 11, nullable: true)]
    private ?string $cyNum = null;

    #[ORM\Column(name: "cbCY_Num", type: Types::BINARY, nullable: true)]
    private $cbcyNum = null;

    #[ORM\Column(name: "CC_Exercice", type: Types::SMALLINT, nullable: true)]
    private ?int $ccExercice = null;

    #[ORM\Column(name: "CO_Num", length: 11, nullable: true)]
    private ?string $coNum = null;

    #[ORM\Column(name: "cbCO_Num", type: Types::BINARY, nullable: true)]
    private $cbcoNum = null;

    #[ORM\Column(name: "CC_Reviseur", length: 35, nullable: true)]
    private ?string $ccReviseur = null;

    #[ORM\Column(name: "CC_DateRevis", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ccDaterevis = null;

    #[ORM\Column(name: "CC_Controleur", length: 35, nullable: true)]
    private ?string $ccControleur = null;

    #[ORM\Column(name: "CC_DateControl", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ccDatecontrol = null;

    #[ORM\Column(name: "CC_Commentaire", length: 69, nullable: true)]
    private ?string $ccCommentaire = null;

    #[ORM\Column(name: "CC_Annexe", type: Types::SMALLINT, nullable: true)]
    private ?int $ccAnnexe = null;

    #[ORM\Column(name: "CC_Reponse", type: Types::SMALLINT, nullable: true)]
    private ?int $ccReponse = null;

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

    public function getCyNum(): ?string
    {
        return $this->cyNum;
    }

    public function setCyNum(?string $cyNum): static
    {
        $this->cyNum = $cyNum;

        return $this;
    }

    public function getCbcyNum()
    {
        return $this->cbcyNum;
    }

    public function setCbcyNum($cbcyNum): static
    {
        $this->cbcyNum = $cbcyNum;

        return $this;
    }

    public function getCcExercice(): ?int
    {
        return $this->ccExercice;
    }

    public function setCcExercice(?int $ccExercice): static
    {
        $this->ccExercice = $ccExercice;

        return $this;
    }

    public function getCoNum(): ?string
    {
        return $this->coNum;
    }

    public function setCoNum(?string $coNum): static
    {
        $this->coNum = $coNum;

        return $this;
    }

    public function getCbcoNum()
    {
        return $this->cbcoNum;
    }

    public function setCbcoNum($cbcoNum): static
    {
        $this->cbcoNum = $cbcoNum;

        return $this;
    }

    public function getCcReviseur(): ?string
    {
        return $this->ccReviseur;
    }

    public function setCcReviseur(?string $ccReviseur): static
    {
        $this->ccReviseur = $ccReviseur;

        return $this;
    }

    public function getCcDaterevis(): ?\DateTimeInterface
    {
        return $this->ccDaterevis;
    }

    public function setCcDaterevis(?\DateTimeInterface $ccDaterevis): static
    {
        $this->ccDaterevis = $ccDaterevis;

        return $this;
    }

    public function getCcControleur(): ?string
    {
        return $this->ccControleur;
    }

    public function setCcControleur(?string $ccControleur): static
    {
        $this->ccControleur = $ccControleur;

        return $this;
    }

    public function getCcDatecontrol(): ?\DateTimeInterface
    {
        return $this->ccDatecontrol;
    }

    public function setCcDatecontrol(?\DateTimeInterface $ccDatecontrol): static
    {
        $this->ccDatecontrol = $ccDatecontrol;

        return $this;
    }

    public function getCcCommentaire(): ?string
    {
        return $this->ccCommentaire;
    }

    public function setCcCommentaire(?string $ccCommentaire): static
    {
        $this->ccCommentaire = $ccCommentaire;

        return $this;
    }

    public function getCcAnnexe(): ?int
    {
        return $this->ccAnnexe;
    }

    public function setCcAnnexe(?int $ccAnnexe): static
    {
        $this->ccAnnexe = $ccAnnexe;

        return $this;
    }

    public function getCcReponse(): ?int
    {
        return $this->ccReponse;
    }

    public function setCcReponse(?int $ccReponse): static
    {
        $this->ccReponse = $ccReponse;

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
