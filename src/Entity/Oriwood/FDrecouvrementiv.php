<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FDrecouvrementivRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DRECOUVREMENTIV')]
#[ORM\Index(name: 'IIV_DRNUMDATE', columns: ['IV_Heure'])]
#[ORM\Index(name: 'IIV_DRNUMSTATUT', columns: ['IV_Statut'])]
#[ORM\Index(name: 'IIV_ESNO', columns: ['ES_No'])]
#[ORM\Index(name: 'IIV_CONTACT', columns: ['IV_NoContact'])]
#[ORM\Index(name: 'FKIA_F_DRECOUVREMENTIV_DR_Num', columns: ['DR_Num'])]
#[ORM\Index(name: 'FKIA_F_DRECOUVREMENTIV_ES_No', columns: ['cbES_No'])]
#[ORM\Entity(repositoryClass: FDrecouvrementivRepository::class)]
class FDrecouvrementiv
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DR_Num", length: 13)]
    private ?string $drNum = null;

    #[ORM\Column(name: "cbDR_Num", type: Types::BINARY, nullable: true)]
    private $cbdrNum = null;

    #[ORM\Column(name: "IV_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $ivStatut = null;

    #[ORM\Column(name: "IV_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ivDate = null;

    #[ORM\Column(name: "IV_Heure", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $ivHeure = null;

    #[ORM\Column(name: "ES_No", nullable: true)]
    private ?int $esNo = null;

    #[ORM\Column(name: "cbES_No", nullable: true)]
    private ?int $cbesNo = null;

    #[ORM\Column(name: "IV_User", length: 35, nullable: true)]
    private ?string $ivUser = null;

    #[ORM\Column(name: "IV_NoContactType", type: Types::SMALLINT, nullable: true)]
    private ?int $ivNocontacttype = null;

    #[ORM\Column(name: "IV_NoContact", nullable: true)]
    private ?int $ivNocontact = null;

    #[ORM\Column(name: "IV_Raison", length: 69, nullable: true)]
    private ?string $ivRaison = null;

    #[ORM\Column(name: "IV_EnvoiType", type: Types::SMALLINT, nullable: true)]
    private ?int $ivEnvoitype = null;

    #[ORM\Column(name: "IV_Modele", length: 259, nullable: true)]
    private ?string $ivModele = null;

    #[ORM\Column(name: "IV_Document", length: 259, nullable: true)]
    private ?string $ivDocument = null;

    #[ORM\Column(name: "IV_CalculPenalite", type: Types::SMALLINT, nullable: true)]
    private ?int $ivCalculpenalite = null;

    #[ORM\Column(name: "IV_Penalite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ivPenalite = null;

    #[ORM\Column(name: "IV_FraiImpaye", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ivFraiimpaye = null;

    #[ORM\Column(name: "IV_Comptabilisation", type: Types::SMALLINT, nullable: true)]
    private ?int $ivComptabilisation = null;

    #[ORM\Column(name: "IV_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $ivType = null;

    #[ORM\Column(name: "IV_DatePromesse", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ivDatepromesse = null;

    #[ORM\Column(name: "IV_DateAlerte", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ivDatealerte = null;

    #[ORM\Column(name: "N_Risque", type: Types::SMALLINT, nullable: true)]
    private ?int $nRisque = null;

    #[ORM\Column(name: "IV_PerteProbable", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ivPerteprobable = null;

    #[ORM\Column(name: "IV_DRStatut", type: Types::SMALLINT, nullable: true)]
    private ?int $ivDrstatut = null;

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

    public function getDrNum(): ?string
    {
        return $this->drNum;
    }

    public function setDrNum(string $drNum): static
    {
        $this->drNum = $drNum;

        return $this;
    }

    public function getCbdrNum()
    {
        return $this->cbdrNum;
    }

    public function setCbdrNum($cbdrNum): static
    {
        $this->cbdrNum = $cbdrNum;

        return $this;
    }

    public function getIvStatut(): ?int
    {
        return $this->ivStatut;
    }

    public function setIvStatut(?int $ivStatut): static
    {
        $this->ivStatut = $ivStatut;

        return $this;
    }

    public function getIvDate(): ?\DateTimeInterface
    {
        return $this->ivDate;
    }

    public function setIvDate(?\DateTimeInterface $ivDate): static
    {
        $this->ivDate = $ivDate;

        return $this;
    }

    public function getIvHeure(): ?string
    {
        return $this->ivHeure;
    }

    public function setIvHeure(?string $ivHeure): static
    {
        $this->ivHeure = $ivHeure;

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

    public function getCbesNo(): ?int
    {
        return $this->cbesNo;
    }

    public function setCbesNo(?int $cbesNo): static
    {
        $this->cbesNo = $cbesNo;

        return $this;
    }

    public function getIvUser(): ?string
    {
        return $this->ivUser;
    }

    public function setIvUser(?string $ivUser): static
    {
        $this->ivUser = $ivUser;

        return $this;
    }

    public function getIvNocontacttype(): ?int
    {
        return $this->ivNocontacttype;
    }

    public function setIvNocontacttype(?int $ivNocontacttype): static
    {
        $this->ivNocontacttype = $ivNocontacttype;

        return $this;
    }

    public function getIvNocontact(): ?int
    {
        return $this->ivNocontact;
    }

    public function setIvNocontact(?int $ivNocontact): static
    {
        $this->ivNocontact = $ivNocontact;

        return $this;
    }

    public function getIvRaison(): ?string
    {
        return $this->ivRaison;
    }

    public function setIvRaison(?string $ivRaison): static
    {
        $this->ivRaison = $ivRaison;

        return $this;
    }

    public function getIvEnvoitype(): ?int
    {
        return $this->ivEnvoitype;
    }

    public function setIvEnvoitype(?int $ivEnvoitype): static
    {
        $this->ivEnvoitype = $ivEnvoitype;

        return $this;
    }

    public function getIvModele(): ?string
    {
        return $this->ivModele;
    }

    public function setIvModele(?string $ivModele): static
    {
        $this->ivModele = $ivModele;

        return $this;
    }

    public function getIvDocument(): ?string
    {
        return $this->ivDocument;
    }

    public function setIvDocument(?string $ivDocument): static
    {
        $this->ivDocument = $ivDocument;

        return $this;
    }

    public function getIvCalculpenalite(): ?int
    {
        return $this->ivCalculpenalite;
    }

    public function setIvCalculpenalite(?int $ivCalculpenalite): static
    {
        $this->ivCalculpenalite = $ivCalculpenalite;

        return $this;
    }

    public function getIvPenalite(): ?string
    {
        return $this->ivPenalite;
    }

    public function setIvPenalite(?string $ivPenalite): static
    {
        $this->ivPenalite = $ivPenalite;

        return $this;
    }

    public function getIvFraiimpaye(): ?string
    {
        return $this->ivFraiimpaye;
    }

    public function setIvFraiimpaye(?string $ivFraiimpaye): static
    {
        $this->ivFraiimpaye = $ivFraiimpaye;

        return $this;
    }

    public function getIvComptabilisation(): ?int
    {
        return $this->ivComptabilisation;
    }

    public function setIvComptabilisation(?int $ivComptabilisation): static
    {
        $this->ivComptabilisation = $ivComptabilisation;

        return $this;
    }

    public function getIvType(): ?int
    {
        return $this->ivType;
    }

    public function setIvType(?int $ivType): static
    {
        $this->ivType = $ivType;

        return $this;
    }

    public function getIvDatepromesse(): ?\DateTimeInterface
    {
        return $this->ivDatepromesse;
    }

    public function setIvDatepromesse(?\DateTimeInterface $ivDatepromesse): static
    {
        $this->ivDatepromesse = $ivDatepromesse;

        return $this;
    }

    public function getIvDatealerte(): ?\DateTimeInterface
    {
        return $this->ivDatealerte;
    }

    public function setIvDatealerte(?\DateTimeInterface $ivDatealerte): static
    {
        $this->ivDatealerte = $ivDatealerte;

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

    public function getIvPerteprobable(): ?string
    {
        return $this->ivPerteprobable;
    }

    public function setIvPerteprobable(?string $ivPerteprobable): static
    {
        $this->ivPerteprobable = $ivPerteprobable;

        return $this;
    }

    public function getIvDrstatut(): ?int
    {
        return $this->ivDrstatut;
    }

    public function setIvDrstatut(?int $ivDrstatut): static
    {
        $this->ivDrstatut = $ivDrstatut;

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
