<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrSocieteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Societe')]
#[ORM\Entity(repositoryClass: LrSocieteRepository::class)]
class LrSociete
{
    #[ORM\Column(name: "id")]
    private ?int $id = null;

    #[ORM\Column(name: "Sociéte", length: 100, nullable: true)]
    private ?string $sociéte = null;

    #[ORM\Column(name: "EB_BQ", length: 50, nullable: true)]
    private ?string $ebBq = null;

    #[ORM\Column(name: "CGBQ", length: 5000, nullable: true)]
    private ?string $cgbq = null;

    #[ORM\Column(name: "ChemSage", length: 5000, nullable: true)]
    private ?string $chemsage = null;

    #[ORM\Column(name: "NomBasSage", length: 900, nullable: true)]
    private ?string $nombassage = null;

    #[ORM\Column(name: "Pass_Adm", length: 50, nullable: true)]
    private ?string $passAdm = null;

    #[ORM\Column(name: "Journal_OD", length: 50, nullable: true)]
    private ?string $journalOd = null;

    #[ORM\Column(name: "Journal_EFF_REC", length: 50, nullable: true)]
    private ?string $journalEffRec = null;

    #[ORM\Column(name: "Compte_EFF_REC", length: 50, nullable: true)]
    private ?string $compteEffRec = null;

    #[ORM\Column(name: "CompteClt_Imp_CHQ", length: 50, nullable: true)]
    private ?string $comptecltImpChq = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSociéte(): ?string
    {
        return $this->sociéte;
    }

    public function setSociéte(?string $sociéte): static
    {
        $this->sociéte = $sociéte;

        return $this;
    }

    public function getEbBq(): ?string
    {
        return $this->ebBq;
    }

    public function setEbBq(?string $ebBq): static
    {
        $this->ebBq = $ebBq;

        return $this;
    }

    public function getCgbq(): ?string
    {
        return $this->cgbq;
    }

    public function setCgbq(?string $cgbq): static
    {
        $this->cgbq = $cgbq;

        return $this;
    }

    public function getChemsage(): ?string
    {
        return $this->chemsage;
    }

    public function setChemsage(?string $chemsage): static
    {
        $this->chemsage = $chemsage;

        return $this;
    }

    public function getNombassage(): ?string
    {
        return $this->nombassage;
    }

    public function setNombassage(?string $nombassage): static
    {
        $this->nombassage = $nombassage;

        return $this;
    }

    public function getPassAdm(): ?string
    {
        return $this->passAdm;
    }

    public function setPassAdm(?string $passAdm): static
    {
        $this->passAdm = $passAdm;

        return $this;
    }

    public function getJournalOd(): ?string
    {
        return $this->journalOd;
    }

    public function setJournalOd(?string $journalOd): static
    {
        $this->journalOd = $journalOd;

        return $this;
    }

    public function getJournalEffRec(): ?string
    {
        return $this->journalEffRec;
    }

    public function setJournalEffRec(?string $journalEffRec): static
    {
        $this->journalEffRec = $journalEffRec;

        return $this;
    }

    public function getCompteEffRec(): ?string
    {
        return $this->compteEffRec;
    }

    public function setCompteEffRec(?string $compteEffRec): static
    {
        $this->compteEffRec = $compteEffRec;

        return $this;
    }

    public function getComptecltImpChq(): ?string
    {
        return $this->comptecltImpChq;
    }

    public function setComptecltImpChq(?string $comptecltImpChq): static
    {
        $this->comptecltImpChq = $comptecltImpChq;

        return $this;
    }
}
