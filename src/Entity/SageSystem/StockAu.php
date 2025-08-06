<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\StockAuRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Stock_AU')]
#[ORM\Entity(repositoryClass: StockAuRepository::class)]
class StockAu
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "CodeArticle", length: 69, nullable: true)]
    private ?string $codearticle = null;

    #[ORM\Column(name: "qtite", nullable: true)]
    private ?float $qtite = null;

    #[ORM\Column(name: "Stockau", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $stockau = null;

    #[ORM\Column(name: "codeDepot", nullable: true)]
    private ?int $codedepot = null;

    #[ORM\Column(name: "prixR", nullable: true)]
    private ?float $prixr = null;

    #[ORM\Column(name: "valeurStk", nullable: true)]
    private ?float $valeurstk = null;

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

    public function getQtite(): ?float
    {
        return $this->qtite;
    }

    public function setQtite(?float $qtite): static
    {
        $this->qtite = $qtite;

        return $this;
    }

    public function getStockau(): ?\DateTimeInterface
    {
        return $this->stockau;
    }

    public function setStockau(?\DateTimeInterface $stockau): static
    {
        $this->stockau = $stockau;

        return $this;
    }

    public function getCodedepot(): ?int
    {
        return $this->codedepot;
    }

    public function setCodedepot(?int $codedepot): static
    {
        $this->codedepot = $codedepot;

        return $this;
    }

    public function getPrixr(): ?float
    {
        return $this->prixr;
    }

    public function setPrixr(?float $prixr): static
    {
        $this->prixr = $prixr;

        return $this;
    }

    public function getValeurstk(): ?float
    {
        return $this->valeurstk;
    }

    public function setValeurstk(?float $valeurstk): static
    {
        $this->valeurstk = $valeurstk;

        return $this;
    }
}
