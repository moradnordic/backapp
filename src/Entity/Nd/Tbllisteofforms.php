<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbllisteofformsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblListeOfForms')]
#[ORM\Entity(repositoryClass: TbllisteofformsRepository::class)]
class Tbllisteofforms
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "NomDuFormulaire", length: 255, nullable: true)]
    private ?string $nomduformulaire = null;

    #[ORM\Column(name: "Domaine", length: 255, nullable: true)]
    private ?string $domaine = null;

    #[ORM\Column(name: "Description", length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: "ManageData")]
    private ?bool $managedata = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNomduformulaire(): ?string
    {
        return $this->nomduformulaire;
    }

    public function setNomduformulaire(?string $nomduformulaire): static
    {
        $this->nomduformulaire = $nomduformulaire;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(?string $domaine): static
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getManagedata(): ?bool
    {
        return $this->managedata;
    }

    public function setManagedata(bool $managedata): static
    {
        $this->managedata = $managedata;

        return $this;
    }
}
