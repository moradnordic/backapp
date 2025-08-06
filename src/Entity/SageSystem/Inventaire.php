<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\InventaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'inventaire')]
#[ORM\Entity(repositoryClass: InventaireRepository::class)]
class Inventaire
{
    #[ORM\Column(name: "ID_Inv_Team")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $idInvTeam = null;

    #[ORM\Column(name: "ID_ARTICLE", length: 50, nullable: true)]
    private ?string $idArticle = null;

    #[ORM\Column(name: "Rangee", length: 2, nullable: true)]
    private ?string $rangee = null;

    #[ORM\Column(name: "Etage", length: 2, nullable: true)]
    private ?string $etage = null;

    #[ORM\Column(name: "Cote", length: 2, nullable: true)]
    private ?string $cote = null;

    #[ORM\Column(name: "Direction", length: 2, nullable: true)]
    private ?string $direction = null;

    #[ORM\Column(name: "ID_TEAM")]
    private ?int $idTeam = null;

    #[ORM\Column(name: "ID_Inv")]
    private ?int $idInv = null;

    #[ORM\Column(name: "Quantite", nullable: true)]
    private ?float $quantite = null;

    public function getIdInvTeam(): ?int
    {
        return $this->idInvTeam;
    }

    public function getIdArticle(): ?string
    {
        return $this->idArticle;
    }

    public function setIdArticle(?string $idArticle): static
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    public function getRangee(): ?string
    {
        return $this->rangee;
    }

    public function setRangee(?string $rangee): static
    {
        $this->rangee = $rangee;

        return $this;
    }

    public function getEtage(): ?string
    {
        return $this->etage;
    }

    public function setEtage(?string $etage): static
    {
        $this->etage = $etage;

        return $this;
    }

    public function getCote(): ?string
    {
        return $this->cote;
    }

    public function setCote(?string $cote): static
    {
        $this->cote = $cote;

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): static
    {
        $this->direction = $direction;

        return $this;
    }

    public function getIdTeam(): ?int
    {
        return $this->idTeam;
    }

    public function setIdTeam(int $idTeam): static
    {
        $this->idTeam = $idTeam;

        return $this;
    }

    public function getIdInv(): ?int
    {
        return $this->idInv;
    }

    public function setIdInv(int $idInv): static
    {
        $this->idInv = $idInv;

        return $this;
    }

    public function getQuantite(): ?float
    {
        return $this->quantite;
    }

    public function setQuantite(?float $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }
}
