<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\InventaireValidRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'inventaire_valid')]
#[ORM\Entity(repositoryClass: InventaireValidRepository::class)]
class InventaireValid
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "codeArticle", length: 200, nullable: true)]
    private ?string $codearticle = null;

    #[ORM\Column(name: "quantite", nullable: true)]
    private ?float $quantite = null;

    #[ORM\Column(name: "dateInv", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateinv = null;

    #[ORM\Column(name: "id_inv", nullable: true)]
    private ?int $idInv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodearticle(): ?string
    {
        return $this->codearticle;
    }

    public function setCodearticle(?string $codearticle): static
    {
        $this->codearticle = $codearticle;

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

    public function getDateinv(): ?\DateTimeInterface
    {
        return $this->dateinv;
    }

    public function setDateinv(?\DateTimeInterface $dateinv): static
    {
        $this->dateinv = $dateinv;

        return $this;
    }

    public function getIdInv(): ?int
    {
        return $this->idInv;
    }

    public function setIdInv(?int $idInv): static
    {
        $this->idInv = $idInv;

        return $this;
    }
}
