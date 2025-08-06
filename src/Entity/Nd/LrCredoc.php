<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrCredocRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_CREDOC')]
#[ORM\Entity(repositoryClass: LrCredocRepository::class)]
class LrCredoc
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "LR_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lrDate = null;

    #[ORM\Column(name: "LR_LC", length: 500, nullable: true)]
    private ?string $lrLc = null;

    #[ORM\Column(name: "LR_ENG", nullable: true)]
    private ?int $lrEng = null;

    #[ORM\Column(name: "LR_Montant", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $lrMontant = null;

    #[ORM\Column(name: "LR_Devise", length: 100, nullable: true)]
    private ?string $lrDevise = null;

    #[ORM\Column(name: "LR_Cours", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $lrCours = null;

    #[ORM\Column(name: "LR_MARGE", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $lrMarge = null;

    #[ORM\Column(name: "LR_Banque", length: 500, nullable: true)]
    private ?string $lrBanque = null;

    #[ORM\Column(name: "LR_NUMCRED", length: 500, nullable: true)]
    private ?string $lrNumcred = null;

    #[ORM\Column(name: "LR_CTNum", length: 50, nullable: true)]
    private ?string $lrCtnum = null;

    #[ORM\Column(name: "LR_CTinti", length: 500, nullable: true)]
    private ?string $lrCtinti = null;

    #[ORM\Column(name: "TotMnt", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $totmnt = null;

    #[ORM\Column(name: "SoldeCred", nullable: true)]
    private ?int $soldecred = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLrDate(): ?\DateTimeInterface
    {
        return $this->lrDate;
    }

    public function setLrDate(?\DateTimeInterface $lrDate): static
    {
        $this->lrDate = $lrDate;

        return $this;
    }

    public function getLrLc(): ?string
    {
        return $this->lrLc;
    }

    public function setLrLc(?string $lrLc): static
    {
        $this->lrLc = $lrLc;

        return $this;
    }

    public function getLrEng(): ?int
    {
        return $this->lrEng;
    }

    public function setLrEng(?int $lrEng): static
    {
        $this->lrEng = $lrEng;

        return $this;
    }

    public function getLrMontant(): ?string
    {
        return $this->lrMontant;
    }

    public function setLrMontant(?string $lrMontant): static
    {
        $this->lrMontant = $lrMontant;

        return $this;
    }

    public function getLrDevise(): ?string
    {
        return $this->lrDevise;
    }

    public function setLrDevise(?string $lrDevise): static
    {
        $this->lrDevise = $lrDevise;

        return $this;
    }

    public function getLrCours(): ?string
    {
        return $this->lrCours;
    }

    public function setLrCours(?string $lrCours): static
    {
        $this->lrCours = $lrCours;

        return $this;
    }

    public function getLrMarge(): ?string
    {
        return $this->lrMarge;
    }

    public function setLrMarge(?string $lrMarge): static
    {
        $this->lrMarge = $lrMarge;

        return $this;
    }

    public function getLrBanque(): ?string
    {
        return $this->lrBanque;
    }

    public function setLrBanque(?string $lrBanque): static
    {
        $this->lrBanque = $lrBanque;

        return $this;
    }

    public function getLrNumcred(): ?string
    {
        return $this->lrNumcred;
    }

    public function setLrNumcred(?string $lrNumcred): static
    {
        $this->lrNumcred = $lrNumcred;

        return $this;
    }

    public function getLrCtnum(): ?string
    {
        return $this->lrCtnum;
    }

    public function setLrCtnum(?string $lrCtnum): static
    {
        $this->lrCtnum = $lrCtnum;

        return $this;
    }

    public function getLrCtinti(): ?string
    {
        return $this->lrCtinti;
    }

    public function setLrCtinti(?string $lrCtinti): static
    {
        $this->lrCtinti = $lrCtinti;

        return $this;
    }

    public function getTotmnt(): ?string
    {
        return $this->totmnt;
    }

    public function setTotmnt(?string $totmnt): static
    {
        $this->totmnt = $totmnt;

        return $this;
    }

    public function getSoldecred(): ?int
    {
        return $this->soldecred;
    }

    public function setSoldecred(?int $soldecred): static
    {
        $this->soldecred = $soldecred;

        return $this;
    }
}
