<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbltarifDetailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTarif_Detail')]
#[ORM\Entity(repositoryClass: TbltarifDetailRepository::class)]
class TbltarifDetail
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TarifEntete", nullable: true)]
    private ?int $tarifentete = null;

    #[ORM\Column(name: "CodeTarif", nullable: true)]
    private ?int $codetarif = null;

    #[ORM\Column(name: "Revendeur", nullable: true)]
    private ?float $revendeur = null;

    #[ORM\Column(name: "Industriel", nullable: true)]
    private ?float $industriel = null;

    #[ORM\Column(name: "Importateur", nullable: true)]
    private ?float $importateur = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTarifentete(): ?int
    {
        return $this->tarifentete;
    }

    public function setTarifentete(?int $tarifentete): static
    {
        $this->tarifentete = $tarifentete;

        return $this;
    }

    public function getCodetarif(): ?int
    {
        return $this->codetarif;
    }

    public function setCodetarif(?int $codetarif): static
    {
        $this->codetarif = $codetarif;

        return $this;
    }

    public function getRevendeur(): ?float
    {
        return $this->revendeur;
    }

    public function setRevendeur(?float $revendeur): static
    {
        $this->revendeur = $revendeur;

        return $this;
    }

    public function getIndustriel(): ?float
    {
        return $this->industriel;
    }

    public function setIndustriel(?float $industriel): static
    {
        $this->industriel = $industriel;

        return $this;
    }

    public function getImportateur(): ?float
    {
        return $this->importateur;
    }

    public function setImportateur(?float $importateur): static
    {
        $this->importateur = $importateur;

        return $this;
    }
}
