<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltarifCodesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTarif_Codes')]
#[ORM\Entity(repositoryClass: TbltarifCodesRepository::class)]
class TbltarifCodes
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "FamilleProd", nullable: true)]
    private ?int $familleprod = null;

    #[ORM\Column(name: "Def1Text", length: 255, nullable: true)]
    private ?string $def1text = null;

    #[ORM\Column(name: "Def1Valeur", length: 255, nullable: true)]
    private ?string $def1valeur = null;

    #[ORM\Column(name: "Def2Text", length: 255, nullable: true)]
    private ?string $def2text = null;

    #[ORM\Column(name: "Def2Valeur", length: 255, nullable: true)]
    private ?string $def2valeur = null;

    #[ORM\Column(name: "def3Text", length: 255, nullable: true)]
    private ?string $def3text = null;

    #[ORM\Column(name: "Def3Valeur", length: 255, nullable: true)]
    private ?string $def3valeur = null;

    #[ORM\Column(name: "Def4Text", length: 255, nullable: true)]
    private ?string $def4text = null;

    #[ORM\Column(name: "Def4Valeur", length: 255, nullable: true)]
    private ?string $def4valeur = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getFamilleprod(): ?int
    {
        return $this->familleprod;
    }

    public function setFamilleprod(?int $familleprod): static
    {
        $this->familleprod = $familleprod;

        return $this;
    }

    public function getDef1text(): ?string
    {
        return $this->def1text;
    }

    public function setDef1text(?string $def1text): static
    {
        $this->def1text = $def1text;

        return $this;
    }

    public function getDef1valeur(): ?string
    {
        return $this->def1valeur;
    }

    public function setDef1valeur(?string $def1valeur): static
    {
        $this->def1valeur = $def1valeur;

        return $this;
    }

    public function getDef2text(): ?string
    {
        return $this->def2text;
    }

    public function setDef2text(?string $def2text): static
    {
        $this->def2text = $def2text;

        return $this;
    }

    public function getDef2valeur(): ?string
    {
        return $this->def2valeur;
    }

    public function setDef2valeur(?string $def2valeur): static
    {
        $this->def2valeur = $def2valeur;

        return $this;
    }

    public function getDef3text(): ?string
    {
        return $this->def3text;
    }

    public function setDef3text(?string $def3text): static
    {
        $this->def3text = $def3text;

        return $this;
    }

    public function getDef3valeur(): ?string
    {
        return $this->def3valeur;
    }

    public function setDef3valeur(?string $def3valeur): static
    {
        $this->def3valeur = $def3valeur;

        return $this;
    }

    public function getDef4text(): ?string
    {
        return $this->def4text;
    }

    public function setDef4text(?string $def4text): static
    {
        $this->def4text = $def4text;

        return $this;
    }

    public function getDef4valeur(): ?string
    {
        return $this->def4valeur;
    }

    public function setDef4valeur(?string $def4valeur): static
    {
        $this->def4valeur = $def4valeur;

        return $this;
    }
}
