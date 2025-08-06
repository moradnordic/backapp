<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEfinancierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EFINANCIER')]
#[ORM\Index(name: 'IEF_FINO', columns: ['EF_No'])]
#[ORM\UniqueConstraint(name: 'IEF_NO', columns: ['EF_No'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIER_FI_No', columns: ['FI_No'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIER_CG_Num', columns: ['CG_Num'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIER_CT_Num', columns: ['CT_Num'])]
#[ORM\Index(name: 'FKIA_F_EFINANCIER_TA_Code', columns: ['TA_Code'])]
#[ORM\Entity(repositoryClass: FEfinancierRepository::class)]
class FEfinancier
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FI_No")]
    private ?int $fiNo = null;

    #[ORM\Column(name: "EF_No")]
    private ?int $efNo = null;

    #[ORM\Column(name: "EF_NoLink", nullable: true)]
    private ?int $efNolink = null;

    #[ORM\Column(name: "EF_Jour", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $efJour = null;

    #[ORM\Column(name: "EF_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $efDate = null;

    #[ORM\Column(name: "EF_Piece", length: 13, nullable: true)]
    private ?string $efPiece = null;

    #[ORM\Column(name: "EF_RefPiece", length: 17, nullable: true)]
    private ?string $efRefpiece = null;

    #[ORM\Column(name: "EF_TresoPiece", length: 17, nullable: true)]
    private ?string $efTresopiece = null;

    #[ORM\Column(name: "CG_Num", length: 13, nullable: true)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "CG_NumCont", length: 13, nullable: true)]
    private ?string $cgNumcont = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "CT_NumCont", length: 17, nullable: true)]
    private ?string $ctNumcont = null;

    #[ORM\Column(name: "TA_Code", length: 5, nullable: true)]
    private ?string $taCode = null;

    #[ORM\Column(name: "EF_Intitule", length: 35, nullable: true)]
    private ?string $efIntitule = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "EF_Echeance", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $efEcheance = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "EF_Parite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $efParite = null;

    #[ORM\Column(name: "EF_Devise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $efDevise = null;

    #[ORM\Column(name: "EF_Quantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $efQuantite = null;

    #[ORM\Column(name: "EF_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $efSens = null;

    #[ORM\Column(name: "EF_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $efMontant = null;

    #[ORM\Column(name: "EF_AFB", length: 3, nullable: true)]
    private ?string $efAfb = null;

    #[ORM\Column(name: "EF_Norme", type: Types::SMALLINT, nullable: true)]
    private ?int $efNorme = null;

    #[ORM\Column(name: "TA_Provenance", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance = null;

    #[ORM\Column(name: "EF_Reference", length: 17, nullable: true)]
    private ?string $efReference = null;

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

    public function getFiNo(): ?int
    {
        return $this->fiNo;
    }

    public function setFiNo(int $fiNo): static
    {
        $this->fiNo = $fiNo;

        return $this;
    }

    public function getEfNo(): ?int
    {
        return $this->efNo;
    }

    public function setEfNo(int $efNo): static
    {
        $this->efNo = $efNo;

        return $this;
    }

    public function getEfNolink(): ?int
    {
        return $this->efNolink;
    }

    public function setEfNolink(?int $efNolink): static
    {
        $this->efNolink = $efNolink;

        return $this;
    }

    public function getEfJour(): ?\DateTimeInterface
    {
        return $this->efJour;
    }

    public function setEfJour(?\DateTimeInterface $efJour): static
    {
        $this->efJour = $efJour;

        return $this;
    }

    public function getEfDate(): ?\DateTimeInterface
    {
        return $this->efDate;
    }

    public function setEfDate(?\DateTimeInterface $efDate): static
    {
        $this->efDate = $efDate;

        return $this;
    }

    public function getEfPiece(): ?string
    {
        return $this->efPiece;
    }

    public function setEfPiece(?string $efPiece): static
    {
        $this->efPiece = $efPiece;

        return $this;
    }

    public function getEfRefpiece(): ?string
    {
        return $this->efRefpiece;
    }

    public function setEfRefpiece(?string $efRefpiece): static
    {
        $this->efRefpiece = $efRefpiece;

        return $this;
    }

    public function getEfTresopiece(): ?string
    {
        return $this->efTresopiece;
    }

    public function setEfTresopiece(?string $efTresopiece): static
    {
        $this->efTresopiece = $efTresopiece;

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

    public function getCgNumcont(): ?string
    {
        return $this->cgNumcont;
    }

    public function setCgNumcont(?string $cgNumcont): static
    {
        $this->cgNumcont = $cgNumcont;

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

    public function getCtNumcont(): ?string
    {
        return $this->ctNumcont;
    }

    public function setCtNumcont(?string $ctNumcont): static
    {
        $this->ctNumcont = $ctNumcont;

        return $this;
    }

    public function getTaCode(): ?string
    {
        return $this->taCode;
    }

    public function setTaCode(?string $taCode): static
    {
        $this->taCode = $taCode;

        return $this;
    }

    public function getEfIntitule(): ?string
    {
        return $this->efIntitule;
    }

    public function setEfIntitule(?string $efIntitule): static
    {
        $this->efIntitule = $efIntitule;

        return $this;
    }

    public function getNReglement(): ?int
    {
        return $this->nReglement;
    }

    public function setNReglement(?int $nReglement): static
    {
        $this->nReglement = $nReglement;

        return $this;
    }

    public function getEfEcheance(): ?\DateTimeInterface
    {
        return $this->efEcheance;
    }

    public function setEfEcheance(?\DateTimeInterface $efEcheance): static
    {
        $this->efEcheance = $efEcheance;

        return $this;
    }

    public function getNDevise(): ?int
    {
        return $this->nDevise;
    }

    public function setNDevise(?int $nDevise): static
    {
        $this->nDevise = $nDevise;

        return $this;
    }

    public function getEfParite(): ?string
    {
        return $this->efParite;
    }

    public function setEfParite(?string $efParite): static
    {
        $this->efParite = $efParite;

        return $this;
    }

    public function getEfDevise(): ?string
    {
        return $this->efDevise;
    }

    public function setEfDevise(?string $efDevise): static
    {
        $this->efDevise = $efDevise;

        return $this;
    }

    public function getEfQuantite(): ?string
    {
        return $this->efQuantite;
    }

    public function setEfQuantite(?string $efQuantite): static
    {
        $this->efQuantite = $efQuantite;

        return $this;
    }

    public function getEfSens(): ?int
    {
        return $this->efSens;
    }

    public function setEfSens(?int $efSens): static
    {
        $this->efSens = $efSens;

        return $this;
    }

    public function getEfMontant(): ?string
    {
        return $this->efMontant;
    }

    public function setEfMontant(?string $efMontant): static
    {
        $this->efMontant = $efMontant;

        return $this;
    }

    public function getEfAfb(): ?string
    {
        return $this->efAfb;
    }

    public function setEfAfb(?string $efAfb): static
    {
        $this->efAfb = $efAfb;

        return $this;
    }

    public function getEfNorme(): ?int
    {
        return $this->efNorme;
    }

    public function setEfNorme(?int $efNorme): static
    {
        $this->efNorme = $efNorme;

        return $this;
    }

    public function getTaProvenance(): ?int
    {
        return $this->taProvenance;
    }

    public function setTaProvenance(?int $taProvenance): static
    {
        $this->taProvenance = $taProvenance;

        return $this;
    }

    public function getEfReference(): ?string
    {
        return $this->efReference;
    }

    public function setEfReference(?string $efReference): static
    {
        $this->efReference = $efReference;

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
