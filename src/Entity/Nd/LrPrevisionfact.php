<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrPrevisionfactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_PrevisionFact')]
#[ORM\Entity(repositoryClass: LrPrevisionfactRepository::class)]
class LrPrevisionfact
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "LR_DateEch", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lrDateech = null;

    #[ORM\Column(name: "LR_Montant", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $lrMontant = null;

    #[ORM\Column(name: "LR_Devise", length: 100, nullable: true)]
    private ?string $lrDevise = null;

    #[ORM\Column(name: "LR_Cours", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $lrCours = null;

    #[ORM\Column(name: "LR_CTNum", length: 50, nullable: true)]
    private ?string $lrCtnum = null;

    #[ORM\Column(name: "LR_CTinti", length: 500, nullable: true)]
    private ?string $lrCtinti = null;

    #[ORM\Column(name: "TotMnt", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $totmnt = null;

    #[ORM\Column(name: "FactRegl", nullable: true)]
    private ?int $factregl = null;

    #[ORM\Column(name: "LR_DateSaise", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lrDatesaise = null;

    #[ORM\Column(name: "LR_NUMCRED", length: 50, nullable: true)]
    private ?string $lrNumcred = null;

    #[ORM\Column(name: "LR_BANQUEPREV", length: 50, nullable: true)]
    private ?string $lrBanqueprev = null;

    #[ORM\Column(name: "UserModif", length: 500, nullable: true)]
    private ?string $usermodif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLrDateech(): ?\DateTimeInterface
    {
        return $this->lrDateech;
    }

    public function setLrDateech(?\DateTimeInterface $lrDateech): static
    {
        $this->lrDateech = $lrDateech;

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

    public function getFactregl(): ?int
    {
        return $this->factregl;
    }

    public function setFactregl(?int $factregl): static
    {
        $this->factregl = $factregl;

        return $this;
    }

    public function getLrDatesaise(): ?\DateTimeInterface
    {
        return $this->lrDatesaise;
    }

    public function setLrDatesaise(?\DateTimeInterface $lrDatesaise): static
    {
        $this->lrDatesaise = $lrDatesaise;

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

    public function getLrBanqueprev(): ?string
    {
        return $this->lrBanqueprev;
    }

    public function setLrBanqueprev(?string $lrBanqueprev): static
    {
        $this->lrBanqueprev = $lrBanqueprev;

        return $this;
    }

    public function getUsermodif(): ?string
    {
        return $this->usermodif;
    }

    public function setUsermodif(?string $usermodif): static
    {
        $this->usermodif = $usermodif;

        return $this;
    }
}
