<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrEntrestkRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_EntreStk')]
#[ORM\Entity(repositoryClass: LrEntrestkRepository::class)]
class LrEntrestk
{
    #[ORM\Column(name: "Mouv_Ent")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $mouvEnt = null;

    #[ORM\Column(name: "Ref_Art", length: 50, nullable: true)]
    private ?string $refArt = null;

    #[ORM\Column(name: "QteEnt", nullable: true)]
    private ?float $qteent = null;

    #[ORM\Column(name: "Design", length: 200, nullable: true)]
    private ?string $design = null;

    #[ORM\Column(name: "Do_Piece", length: 100, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "DatEnt", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datent = null;

    public function getMouvEnt(): ?int
    {
        return $this->mouvEnt;
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

    public function getQteent(): ?float
    {
        return $this->qteent;
    }

    public function setQteent(?float $qteent): static
    {
        $this->qteent = $qteent;

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

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getDatent(): ?\DateTimeInterface
    {
        return $this->datent;
    }

    public function setDatent(?\DateTimeInterface $datent): static
    {
        $this->datent = $datent;

        return $this;
    }
}
