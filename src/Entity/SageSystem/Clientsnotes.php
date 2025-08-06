<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ClientsnotesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'clientsNotes')]
#[ORM\Entity(repositoryClass: ClientsnotesRepository::class)]
class Clientsnotes
{
    #[ORM\Column(name: "ID")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ID_Client", length: 50)]
    private ?string $idClient = null;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?string
    {
        return $this->idClient;
    }

    public function setIdClient(string $idClient): static
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
}
