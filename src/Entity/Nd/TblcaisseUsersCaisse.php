<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblcaisseUsersCaisseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCaisse_Users_Caisse')]
#[ORM\Entity(repositoryClass: TblcaisseUsersCaisseRepository::class)]
class TblcaisseUsersCaisse
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TableCaisse", nullable: true)]
    private ?int $tablecaisse = null;

    #[ORM\Column(name: "User", nullable: true)]
    private ?int $user = null;

    #[ORM\Column(name: "Ajouter")]
    private ?bool $ajouter = null;

    #[ORM\Column(name: "Modifier")]
    private ?bool $modifier = null;

    #[ORM\Column(name: "Supprimer")]
    private ?bool $supprimer = null;

    #[ORM\Column(name: "Voir")]
    private ?bool $voir = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTablecaisse(): ?int
    {
        return $this->tablecaisse;
    }

    public function setTablecaisse(?int $tablecaisse): static
    {
        $this->tablecaisse = $tablecaisse;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(?int $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getAjouter(): ?bool
    {
        return $this->ajouter;
    }

    public function setAjouter(bool $ajouter): static
    {
        $this->ajouter = $ajouter;

        return $this;
    }

    public function getModifier(): ?bool
    {
        return $this->modifier;
    }

    public function setModifier(bool $modifier): static
    {
        $this->modifier = $modifier;

        return $this;
    }

    public function getSupprimer(): ?bool
    {
        return $this->supprimer;
    }

    public function setSupprimer(bool $supprimer): static
    {
        $this->supprimer = $supprimer;

        return $this;
    }

    public function getVoir(): ?bool
    {
        return $this->voir;
    }

    public function setVoir(bool $voir): static
    {
        $this->voir = $voir;

        return $this;
    }
}
