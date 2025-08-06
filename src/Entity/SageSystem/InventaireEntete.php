<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\InventaireEnteteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'inventaire_entete')]
#[ORM\Entity(repositoryClass: InventaireEnteteRepository::class)]
class InventaireEntete
{
    #[ORM\Column(name: "ID_Inv")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $idInv = null;

    #[ORM\Column(name: "Date_Creation", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: "IS_Valid", nullable: true)]
    private ?int $isValid = null;

    #[ORM\Column(name: "ID_DEPOT")]
    private ?int $idDepot = null;

    #[ORM\Column(name: "commentaire", length: 50, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(name: "Date_Inv", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateInv = null;

    #[ORM\Column(name: "Soc", length: 50, nullable: true)]
    private ?string $soc = null;

    public function getIdInv(): ?int
    {
        return $this->idInv;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getIsValid(): ?int
    {
        return $this->isValid;
    }

    public function setIsValid(?int $isValid): static
    {
        $this->isValid = $isValid;

        return $this;
    }

    public function getIdDepot(): ?int
    {
        return $this->idDepot;
    }

    public function setIdDepot(int $idDepot): static
    {
        $this->idDepot = $idDepot;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDateInv(): ?\DateTimeInterface
    {
        return $this->dateInv;
    }

    public function setDateInv(?\DateTimeInterface $dateInv): static
    {
        $this->dateInv = $dateInv;

        return $this;
    }

    public function getSoc(): ?string
    {
        return $this->soc;
    }

    public function setSoc(?string $soc): static
    {
        $this->soc = $soc;

        return $this;
    }
}
