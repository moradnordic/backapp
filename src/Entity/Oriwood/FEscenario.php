<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEscenarioRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ESCENARIO')]
#[ORM\UniqueConstraint(name: 'IES_NO', columns: ['ES_No'])]
#[ORM\UniqueConstraint(name: 'IES_LIGNE', columns: ['ES_Ligne'])]
#[ORM\Index(name: 'FKIA_F_ESCENARIO_SC_No', columns: ['SC_No'])]
#[ORM\Entity(repositoryClass: FEscenarioRepository::class)]
class FEscenario
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "SC_No", nullable: true)]
    private ?int $scNo = null;

    #[ORM\Column(name: "ES_Ligne", type: Types::SMALLINT, nullable: true)]
    private ?int $esLigne = null;

    #[ORM\Column(name: "ES_No", nullable: true)]
    private ?int $esNo = null;

    #[ORM\Column(name: "ES_Intitule", length: 69, nullable: true)]
    private ?string $esIntitule = null;

    #[ORM\Column(name: "ES_Delai", type: Types::SMALLINT, nullable: true)]
    private ?int $esDelai = null;

    #[ORM\Column(name: "N_Risque", type: Types::SMALLINT, nullable: true)]
    private ?int $nRisque = null;

    #[ORM\Column(name: "ES_PerteProbable", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $esPerteprobable = null;

    #[ORM\Column(name: "ES_CalculPenalite", type: Types::SMALLINT, nullable: true)]
    private ?int $esCalculpenalite = null;

    #[ORM\Column(name: "ES_FraiImpaye", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $esFraiimpaye = null;

    #[ORM\Column(name: "ES_EnvoiType", type: Types::SMALLINT, nullable: true)]
    private ?int $esEnvoitype = null;

    #[ORM\Column(name: "ES_Document", length: 259, nullable: true)]
    private ?string $esDocument = null;

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

    public function getScNo(): ?int
    {
        return $this->scNo;
    }

    public function setScNo(?int $scNo): static
    {
        $this->scNo = $scNo;

        return $this;
    }

    public function getEsLigne(): ?int
    {
        return $this->esLigne;
    }

    public function setEsLigne(?int $esLigne): static
    {
        $this->esLigne = $esLigne;

        return $this;
    }

    public function getEsNo(): ?int
    {
        return $this->esNo;
    }

    public function setEsNo(?int $esNo): static
    {
        $this->esNo = $esNo;

        return $this;
    }

    public function getEsIntitule(): ?string
    {
        return $this->esIntitule;
    }

    public function setEsIntitule(?string $esIntitule): static
    {
        $this->esIntitule = $esIntitule;

        return $this;
    }

    public function getEsDelai(): ?int
    {
        return $this->esDelai;
    }

    public function setEsDelai(?int $esDelai): static
    {
        $this->esDelai = $esDelai;

        return $this;
    }

    public function getNRisque(): ?int
    {
        return $this->nRisque;
    }

    public function setNRisque(?int $nRisque): static
    {
        $this->nRisque = $nRisque;

        return $this;
    }

    public function getEsPerteprobable(): ?string
    {
        return $this->esPerteprobable;
    }

    public function setEsPerteprobable(?string $esPerteprobable): static
    {
        $this->esPerteprobable = $esPerteprobable;

        return $this;
    }

    public function getEsCalculpenalite(): ?int
    {
        return $this->esCalculpenalite;
    }

    public function setEsCalculpenalite(?int $esCalculpenalite): static
    {
        $this->esCalculpenalite = $esCalculpenalite;

        return $this;
    }

    public function getEsFraiimpaye(): ?string
    {
        return $this->esFraiimpaye;
    }

    public function setEsFraiimpaye(?string $esFraiimpaye): static
    {
        $this->esFraiimpaye = $esFraiimpaye;

        return $this;
    }

    public function getEsEnvoitype(): ?int
    {
        return $this->esEnvoitype;
    }

    public function setEsEnvoitype(?int $esEnvoitype): static
    {
        $this->esEnvoitype = $esEnvoitype;

        return $this;
    }

    public function getEsDocument(): ?string
    {
        return $this->esDocument;
    }

    public function setEsDocument(?string $esDocument): static
    {
        $this->esDocument = $esDocument;

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
