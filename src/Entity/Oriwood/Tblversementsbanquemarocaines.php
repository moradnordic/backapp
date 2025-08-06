<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblversementsbanquemarocainesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblVersementsBanqueMarocaines')]
#[ORM\Entity(repositoryClass: TblversementsbanquemarocainesRepository::class)]
class Tblversementsbanquemarocaines
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "AdminsOnly")]
    private ?bool $adminsonly = null;

    #[ORM\Column(name: "DateVersement", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateversement = null;

    #[ORM\Column(name: "VersementPar", nullable: true)]
    private ?int $versementpar = null;

    #[ORM\Column(name: "CheminScanVersement", length: 255, nullable: true)]
    private ?string $cheminscanversement = null;

    #[ORM\Column(name: "VersChezBanque", nullable: true)]
    private ?int $verschezbanque = null;

    #[ORM\Column(name: "VersChezAgenceBanque", nullable: true)]
    private ?int $verschezagencebanque = null;

    #[ORM\Column(name: "ReferenceBanque", length: 255, nullable: true)]
    private ?string $referencebanque = null;

    #[ORM\Column(name: "TypeVersements", nullable: true)]
    private ?int $typeversements = null;

    #[ORM\Column(name: "TypeReglementAVerser", nullable: true)]
    private ?int $typereglementaverser = null;

    #[ORM\Column(name: "Locked")]
    private ?bool $locked = null;

    #[ORM\Column(name: "Valide")]
    private ?bool $valide = null;

    #[ORM\Column(name: "SiVersementEspeceNumPiece", nullable: true)]
    private ?int $siversementespecenumpiece = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getAdminsonly(): ?bool
    {
        return $this->adminsonly;
    }

    public function setAdminsonly(bool $adminsonly): static
    {
        $this->adminsonly = $adminsonly;

        return $this;
    }

    public function getDateversement(): ?\DateTimeInterface
    {
        return $this->dateversement;
    }

    public function setDateversement(?\DateTimeInterface $dateversement): static
    {
        $this->dateversement = $dateversement;

        return $this;
    }

    public function getVersementpar(): ?int
    {
        return $this->versementpar;
    }

    public function setVersementpar(?int $versementpar): static
    {
        $this->versementpar = $versementpar;

        return $this;
    }

    public function getCheminscanversement(): ?string
    {
        return $this->cheminscanversement;
    }

    public function setCheminscanversement(?string $cheminscanversement): static
    {
        $this->cheminscanversement = $cheminscanversement;

        return $this;
    }

    public function getVerschezbanque(): ?int
    {
        return $this->verschezbanque;
    }

    public function setVerschezbanque(?int $verschezbanque): static
    {
        $this->verschezbanque = $verschezbanque;

        return $this;
    }

    public function getVerschezagencebanque(): ?int
    {
        return $this->verschezagencebanque;
    }

    public function setVerschezagencebanque(?int $verschezagencebanque): static
    {
        $this->verschezagencebanque = $verschezagencebanque;

        return $this;
    }

    public function getReferencebanque(): ?string
    {
        return $this->referencebanque;
    }

    public function setReferencebanque(?string $referencebanque): static
    {
        $this->referencebanque = $referencebanque;

        return $this;
    }

    public function getTypeversements(): ?int
    {
        return $this->typeversements;
    }

    public function setTypeversements(?int $typeversements): static
    {
        $this->typeversements = $typeversements;

        return $this;
    }

    public function getTypereglementaverser(): ?int
    {
        return $this->typereglementaverser;
    }

    public function setTypereglementaverser(?int $typereglementaverser): static
    {
        $this->typereglementaverser = $typereglementaverser;

        return $this;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): static
    {
        $this->locked = $locked;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getSiversementespecenumpiece(): ?int
    {
        return $this->siversementespecenumpiece;
    }

    public function setSiversementespecenumpiece(?int $siversementespecenumpiece): static
    {
        $this->siversementespecenumpiece = $siversementespecenumpiece;

        return $this;
    }
}
