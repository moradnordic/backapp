<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\NotesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Notes')]
#[ORM\Entity(repositoryClass: NotesRepository::class)]
class Notes
{
    #[ORM\Column(name: "ID")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ID_Client", nullable: true)]
    private ?int $idClient = null;

    #[ORM\Column(name: "DateNote", type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datenote = null;

    #[ORM\Column(name: "ID_Writer")]
    private ?int $idWriter = null;

    #[ORM\Column(name: "ID_Visit", nullable: true)]
    private ?int $idVisit = null;

    #[ORM\Column(name: "CT_Intitule", length: 255, nullable: true)]
    private ?string $ctIntitule = null;

    #[ORM\Column(name: "idrapport", nullable: true)]
    private ?int $idrapport = null;

    #[ORM\Column(name: "company", nullable: true)]
    private ?int $company = null;

    #[ORM\Column(name: "encourClient", nullable: true)]
    private ?int $encourclient = null;

    #[ORM\Column(name: "delaiMoyenImpaye", nullable: true)]
    private ?int $delaimoyenimpaye = null;

    #[ORM\Column(name: "idCommercial", nullable: true)]
    private ?int $idcommercial = null;

    #[ORM\Column(name: "idRepondant", nullable: true)]
    private ?int $idrepondant = null;

    #[ORM\Column(name: "dateReponce", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereponce = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): static
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getDatenote(): ?\DateTimeInterface
    {
        return $this->datenote;
    }

    public function setDatenote(\DateTimeInterface $datenote): static
    {
        $this->datenote = $datenote;

        return $this;
    }

    public function getIdWriter(): ?int
    {
        return $this->idWriter;
    }

    public function setIdWriter(int $idWriter): static
    {
        $this->idWriter = $idWriter;

        return $this;
    }

    public function getIdVisit(): ?int
    {
        return $this->idVisit;
    }

    public function setIdVisit(?int $idVisit): static
    {
        $this->idVisit = $idVisit;

        return $this;
    }

    public function getCtIntitule(): ?string
    {
        return $this->ctIntitule;
    }

    public function setCtIntitule(?string $ctIntitule): static
    {
        $this->ctIntitule = $ctIntitule;

        return $this;
    }

    public function getIdrapport(): ?int
    {
        return $this->idrapport;
    }

    public function setIdrapport(?int $idrapport): static
    {
        $this->idrapport = $idrapport;

        return $this;
    }

    public function getCompany(): ?int
    {
        return $this->company;
    }

    public function setCompany(?int $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getEncourclient(): ?int
    {
        return $this->encourclient;
    }

    public function setEncourclient(?int $encourclient): static
    {
        $this->encourclient = $encourclient;

        return $this;
    }

    public function getDelaimoyenimpaye(): ?int
    {
        return $this->delaimoyenimpaye;
    }

    public function setDelaimoyenimpaye(?int $delaimoyenimpaye): static
    {
        $this->delaimoyenimpaye = $delaimoyenimpaye;

        return $this;
    }

    public function getIdcommercial(): ?int
    {
        return $this->idcommercial;
    }

    public function setIdcommercial(?int $idcommercial): static
    {
        $this->idcommercial = $idcommercial;

        return $this;
    }

    public function getIdrepondant(): ?int
    {
        return $this->idrepondant;
    }

    public function setIdrepondant(?int $idrepondant): static
    {
        $this->idrepondant = $idrepondant;

        return $this;
    }

    public function getDatereponce(): ?\DateTimeInterface
    {
        return $this->datereponce;
    }

    public function setDatereponce(?\DateTimeInterface $datereponce): static
    {
        $this->datereponce = $datereponce;

        return $this;
    }
}
