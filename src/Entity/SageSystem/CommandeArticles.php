<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\CommandeArticlesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'commande_articles')]
#[ORM\Entity(repositoryClass: CommandeArticlesRepository::class)]
class CommandeArticles
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "reference", length: 50)]
    private ?string $reference = null;

    #[ORM\Column(name: "design", length: 100)]
    private ?string $design = null;

    #[ORM\Column(name: "id_commande", nullable: true)]
    private ?int $idCommande = null;

    #[ORM\Column(name: "qte")]
    private ?float $qte = null;

    #[ORM\Column(name: "PU")]
    private ?float $pu = null;

    #[ORM\Column(name: "UV", length: 50, nullable: true)]
    private ?string $uv = null;

    #[ORM\Column(name: "montant", nullable: true)]
    private ?float $montant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDesign(): ?string
    {
        return $this->design;
    }

    public function setDesign(string $design): static
    {
        $this->design = $design;

        return $this;
    }

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function setIdCommande(?int $idCommande): static
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(float $qte): static
    {
        $this->qte = $qte;

        return $this;
    }

    public function getPu(): ?float
    {
        return $this->pu;
    }

    public function setPu(float $pu): static
    {
        $this->pu = $pu;

        return $this;
    }

    public function getUv(): ?string
    {
        return $this->uv;
    }

    public function setUv(?string $uv): static
    {
        $this->uv = $uv;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }
}
