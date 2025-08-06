<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FRegrevisionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_REGREVISION')]
#[ORM\UniqueConstraint(name: 'IRR_ECNO', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_REGREVISION_EC_No', columns: ['EC_No'])]
#[ORM\Entity(repositoryClass: FRegrevisionRepository::class)]
class FRegrevision
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "RR_Debut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rrDebut = null;

    #[ORM\Column(name: "RR_Fin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rrFin = null;

    #[ORM\Column(name: "RR_Reviseur", length: 35, nullable: true)]
    private ?string $rrReviseur = null;

    #[ORM\Column(name: "RR_Commentaire", length: 69, nullable: true)]
    private ?string $rrCommentaire = null;

    #[ORM\Column(name: "RR_Controleur", length: 35, nullable: true)]
    private ?string $rrControleur = null;

    #[ORM\Column(name: "RR_DateRev", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rrDaterev = null;

    #[ORM\Column(name: "RR_DateCont", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rrDatecont = null;

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

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getRrDebut(): ?\DateTimeInterface
    {
        return $this->rrDebut;
    }

    public function setRrDebut(?\DateTimeInterface $rrDebut): static
    {
        $this->rrDebut = $rrDebut;

        return $this;
    }

    public function getRrFin(): ?\DateTimeInterface
    {
        return $this->rrFin;
    }

    public function setRrFin(?\DateTimeInterface $rrFin): static
    {
        $this->rrFin = $rrFin;

        return $this;
    }

    public function getRrReviseur(): ?string
    {
        return $this->rrReviseur;
    }

    public function setRrReviseur(?string $rrReviseur): static
    {
        $this->rrReviseur = $rrReviseur;

        return $this;
    }

    public function getRrCommentaire(): ?string
    {
        return $this->rrCommentaire;
    }

    public function setRrCommentaire(?string $rrCommentaire): static
    {
        $this->rrCommentaire = $rrCommentaire;

        return $this;
    }

    public function getRrControleur(): ?string
    {
        return $this->rrControleur;
    }

    public function setRrControleur(?string $rrControleur): static
    {
        $this->rrControleur = $rrControleur;

        return $this;
    }

    public function getRrDaterev(): ?\DateTimeInterface
    {
        return $this->rrDaterev;
    }

    public function setRrDaterev(?\DateTimeInterface $rrDaterev): static
    {
        $this->rrDaterev = $rrDaterev;

        return $this;
    }

    public function getRrDatecont(): ?\DateTimeInterface
    {
        return $this->rrDatecont;
    }

    public function setRrDatecont(?\DateTimeInterface $rrDatecont): static
    {
        $this->rrDatecont = $rrDatecont;

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
