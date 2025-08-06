<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrStockeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Stocke')]
#[ORM\Entity(repositoryClass: LrStockeRepository::class)]
class LrStocke
{
    #[ORM\Column(name: "id_Stk")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $idStk = null;

    #[ORM\Column(name: "Ref_Art", length: 50, nullable: true)]
    private ?string $refArt = null;

    #[ORM\Column(name: "Design_Art", length: 500, nullable: true)]
    private ?string $designArt = null;

    #[ORM\Column(name: "QteStk", nullable: true)]
    private ?float $qtestk = null;

    #[ORM\Column(name: "Dat_Mod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datMod = null;

    #[ORM\Column(name: "Fam_Art", length: 69, nullable: true)]
    private ?string $famArt = null;

    #[ORM\Column(name: "Larg", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $larg = null;

    #[ORM\Column(name: "Haut", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $haut = null;

    #[ORM\Column(name: "Qte_Feuill", nullable: true)]
    private ?float $qteFeuill = null;

    #[ORM\Column(name: "QteStkAnc", nullable: true)]
    private ?float $qtestkanc = null;

    #[ORM\Column(name: "ID_Feuil", nullable: true)]
    private ?int $idFeuil = null;

    #[ORM\Column(name: "Prix_Rev", nullable: true)]
    private ?float $prixRev = null;

    public function getIdStk(): ?int
    {
        return $this->idStk;
    }

    public function getRefArt(): ?string
    {
        return $this->refArt;
    }

    public function setRefArt(?string $refArt): static
    {
        $this->refArt = $refArt;

        return $this;
    }

    public function getDesignArt(): ?string
    {
        return $this->designArt;
    }

    public function setDesignArt(?string $designArt): static
    {
        $this->designArt = $designArt;

        return $this;
    }

    public function getQtestk(): ?float
    {
        return $this->qtestk;
    }

    public function setQtestk(?float $qtestk): static
    {
        $this->qtestk = $qtestk;

        return $this;
    }

    public function getDatMod(): ?\DateTimeInterface
    {
        return $this->datMod;
    }

    public function setDatMod(?\DateTimeInterface $datMod): static
    {
        $this->datMod = $datMod;

        return $this;
    }

    public function getFamArt(): ?string
    {
        return $this->famArt;
    }

    public function setFamArt(?string $famArt): static
    {
        $this->famArt = $famArt;

        return $this;
    }

    public function getLarg(): ?string
    {
        return $this->larg;
    }

    public function setLarg(?string $larg): static
    {
        $this->larg = $larg;

        return $this;
    }

    public function getHaut(): ?string
    {
        return $this->haut;
    }

    public function setHaut(?string $haut): static
    {
        $this->haut = $haut;

        return $this;
    }

    public function getQteFeuill(): ?float
    {
        return $this->qteFeuill;
    }

    public function setQteFeuill(?float $qteFeuill): static
    {
        $this->qteFeuill = $qteFeuill;

        return $this;
    }

    public function getQtestkanc(): ?float
    {
        return $this->qtestkanc;
    }

    public function setQtestkanc(?float $qtestkanc): static
    {
        $this->qtestkanc = $qtestkanc;

        return $this;
    }

    public function getIdFeuil(): ?int
    {
        return $this->idFeuil;
    }

    public function setIdFeuil(?int $idFeuil): static
    {
        $this->idFeuil = $idFeuil;

        return $this;
    }

    public function getPrixRev(): ?float
    {
        return $this->prixRev;
    }

    public function setPrixRev(?float $prixRev): static
    {
        $this->prixRev = $prixRev;

        return $this;
    }
}
