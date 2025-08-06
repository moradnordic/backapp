<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblchargesachatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblChargesAchat')]
#[ORM\Entity(repositoryClass: TblchargesachatRepository::class)]
class Tblchargesachat
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeCharge", nullable: true)]
    private ?int $typecharge = null;

    #[ORM\Column(name: "GAC_N°", nullable: true)]
    private ?int $gacN° = null;

    #[ORM\Column(name: "MontantTTC", nullable: true)]
    private ?float $montantttc = null;

    #[ORM\Column(name: "MontantHT", nullable: true)]
    private ?float $montantht = null;

    #[ORM\Column(name: "MontantTVA", nullable: true)]
    private ?float $montanttva = null;

    #[ORM\Column(name: "Comments_charges", length: 255, nullable: true)]
    private ?string $commentsCharges = null;

    #[ORM\Column(name: "DateFacture", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefacture = null;

    #[ORM\Column(name: "NumFacture", length: 255, nullable: true)]
    private ?string $numfacture = null;

    #[ORM\Column(name: "Prestataire", length: 255, nullable: true)]
    private ?string $prestataire = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypecharge(): ?int
    {
        return $this->typecharge;
    }

    public function setTypecharge(?int $typecharge): static
    {
        $this->typecharge = $typecharge;

        return $this;
    }

    public function getGacN°(): ?int
    {
        return $this->gacN°;
    }

    public function setGacN°(?int $gacN°): static
    {
        $this->gacN° = $gacN°;

        return $this;
    }

    public function getMontantttc(): ?float
    {
        return $this->montantttc;
    }

    public function setMontantttc(?float $montantttc): static
    {
        $this->montantttc = $montantttc;

        return $this;
    }

    public function getMontantht(): ?float
    {
        return $this->montantht;
    }

    public function setMontantht(?float $montantht): static
    {
        $this->montantht = $montantht;

        return $this;
    }

    public function getMontanttva(): ?float
    {
        return $this->montanttva;
    }

    public function setMontanttva(?float $montanttva): static
    {
        $this->montanttva = $montanttva;

        return $this;
    }

    public function getCommentsCharges(): ?string
    {
        return $this->commentsCharges;
    }

    public function setCommentsCharges(?string $commentsCharges): static
    {
        $this->commentsCharges = $commentsCharges;

        return $this;
    }

    public function getDatefacture(): ?\DateTimeInterface
    {
        return $this->datefacture;
    }

    public function setDatefacture(?\DateTimeInterface $datefacture): static
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    public function getNumfacture(): ?string
    {
        return $this->numfacture;
    }

    public function setNumfacture(?string $numfacture): static
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    public function getPrestataire(): ?string
    {
        return $this->prestataire;
    }

    public function setPrestataire(?string $prestataire): static
    {
        $this->prestataire = $prestataire;

        return $this;
    }
}
