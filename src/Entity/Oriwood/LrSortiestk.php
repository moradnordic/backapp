<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrSortiestkRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_SortieStk')]
#[ORM\Entity(repositoryClass: LrSortiestkRepository::class)]
class LrSortiestk
{
    #[ORM\Column(name: "Mouv_Srt")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $mouvSrt = null;

    #[ORM\Column(name: "Ref_Art", length: 50, nullable: true)]
    private ?string $refArt = null;

    #[ORM\Column(name: "QteSort", nullable: true)]
    private ?float $qtesort = null;

    #[ORM\Column(name: "Design", length: 200, nullable: true)]
    private ?string $design = null;

    #[ORM\Column(name: "DatSort", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datsort = null;

    #[ORM\Column(name: "Num_Fact", length: 100, nullable: true)]
    private ?string $numFact = null;

    #[ORM\Column(name: "id_StkDV", nullable: true)]
    private ?int $idStkdv = null;

    public function getMouvSrt(): ?int
    {
        return $this->mouvSrt;
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

    public function getQtesort(): ?float
    {
        return $this->qtesort;
    }

    public function setQtesort(?float $qtesort): static
    {
        $this->qtesort = $qtesort;

        return $this;
    }

    public function getDesign(): ?string
    {
        return $this->design;
    }

    public function setDesign(?string $design): static
    {
        $this->design = $design;

        return $this;
    }

    public function getDatsort(): ?\DateTimeInterface
    {
        return $this->datsort;
    }

    public function setDatsort(?\DateTimeInterface $datsort): static
    {
        $this->datsort = $datsort;

        return $this;
    }

    public function getNumFact(): ?string
    {
        return $this->numFact;
    }

    public function setNumFact(?string $numFact): static
    {
        $this->numFact = $numFact;

        return $this;
    }

    public function getIdStkdv(): ?int
    {
        return $this->idStkdv;
    }

    public function setIdStkdv(?int $idStkdv): static
    {
        $this->idStkdv = $idStkdv;

        return $this;
    }
}
