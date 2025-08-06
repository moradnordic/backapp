<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ArticlePaletteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'article_palette')]
#[ORM\Entity(repositoryClass: ArticlePaletteRepository::class)]
class ArticlePalette
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "id_palette", nullable: true)]
    private ?int $idPalette = null;

    #[ORM\Column(name: "AR_Ref", length: 50, nullable: true)]
    private ?string $arRef = null;

    #[ORM\Column(name: "qte", nullable: true)]
    private ?float $qte = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPalette(): ?int
    {
        return $this->idPalette;
    }

    public function setIdPalette(?int $idPalette): static
    {
        $this->idPalette = $idPalette;

        return $this;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(?string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(?float $qte): static
    {
        $this->qte = $qte;

        return $this;
    }
}
