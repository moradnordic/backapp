<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\StockAdjustementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'stock_adjustement')]
#[ORM\Entity(repositoryClass: StockAdjustementRepository::class)]
class StockAdjustement
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "code_article", length: 100, nullable: true)]
    private ?string $codeArticle = null;

    #[ORM\Column(name: "quantity", nullable: true)]
    private ?float $quantity = null;

    #[ORM\Column(name: "comment", length: 200, nullable: true)]
    private ?string $comment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeArticle(): ?string
    {
        return $this->codeArticle;
    }

    public function setCodeArticle(?string $codeArticle): static
    {
        $this->codeArticle = $codeArticle;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }
}
