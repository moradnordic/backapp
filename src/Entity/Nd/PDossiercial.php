<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PDossiercialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_DOSSIERCIAL')]
#[ORM\Entity(repositoryClass: PDossiercialRepository::class)]
class PDossiercial
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "D_RaisonS", length: 35, nullable: true)]
    private ?string $dRaisons = null;

    #[ORM\Column(name: "D_FormatQte", length: 31, nullable: true)]
    private ?string $dFormatqte = null;

    #[ORM\Column(name: "D_FormatPrix", length: 31, nullable: true)]
    private ?string $dFormatprix = null;

    #[ORM\Column(name: "N_DeviseCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevisecompte = null;

    #[ORM\Column(name: "N_DeviseEquival", type: Types::SMALLINT, nullable: true)]
    private ?int $nDeviseequival = null;

    #[ORM\Column(name: "D_ArchivePeriod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dArchiveperiod = null;

    #[ORM\Column(name: "D_ValiditePeriod", type: Types::SMALLINT, nullable: true)]
    private ?int $dValiditeperiod = null;

    #[ORM\Column(name: "D_DerniereCloture", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dDernierecloture = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDRaisons(): ?string
    {
        return $this->dRaisons;
    }

    public function setDRaisons(?string $dRaisons): static
    {
        $this->dRaisons = $dRaisons;

        return $this;
    }

    public function getDFormatqte(): ?string
    {
        return $this->dFormatqte;
    }

    public function setDFormatqte(?string $dFormatqte): static
    {
        $this->dFormatqte = $dFormatqte;

        return $this;
    }

    public function getDFormatprix(): ?string
    {
        return $this->dFormatprix;
    }

    public function setDFormatprix(?string $dFormatprix): static
    {
        $this->dFormatprix = $dFormatprix;

        return $this;
    }

    public function getNDevisecompte(): ?int
    {
        return $this->nDevisecompte;
    }

    public function setNDevisecompte(?int $nDevisecompte): static
    {
        $this->nDevisecompte = $nDevisecompte;

        return $this;
    }

    public function getNDeviseequival(): ?int
    {
        return $this->nDeviseequival;
    }

    public function setNDeviseequival(?int $nDeviseequival): static
    {
        $this->nDeviseequival = $nDeviseequival;

        return $this;
    }

    public function getDArchiveperiod(): ?\DateTimeInterface
    {
        return $this->dArchiveperiod;
    }

    public function setDArchiveperiod(?\DateTimeInterface $dArchiveperiod): static
    {
        $this->dArchiveperiod = $dArchiveperiod;

        return $this;
    }

    public function getDValiditeperiod(): ?int
    {
        return $this->dValiditeperiod;
    }

    public function setDValiditeperiod(?int $dValiditeperiod): static
    {
        $this->dValiditeperiod = $dValiditeperiod;

        return $this;
    }

    public function getDDernierecloture(): ?\DateTimeInterface
    {
        return $this->dDernierecloture;
    }

    public function setDDernierecloture(?\DateTimeInterface $dDernierecloture): static
    {
        $this->dDernierecloture = $dDernierecloture;

        return $this;
    }
}
