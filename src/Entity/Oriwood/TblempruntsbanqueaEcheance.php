<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblempruntsbanqueaEcheanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblEmpruntsBanqueA_Echeance')]
#[ORM\Entity(repositoryClass: TblempruntsbanqueaEcheanceRepository::class)]
class TblempruntsbanqueaEcheance
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "GAC_N", nullable: true)]
    private ?int $gacN = null;

    #[ORM\Column(name: "RegNum", nullable: true)]
    private ?int $regnum = null;

    #[ORM\Column(name: "MontantPayer", nullable: true)]
    private ?float $montantpayer = null;

    #[ORM\Column(name: "DateValeurEmpreunt", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datevaleurempreunt = null;

    #[ORM\Column(name: "DateSouscript", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datesouscript = null;

    #[ORM\Column(name: "NombreJours", nullable: true)]
    private ?int $nombrejours = null;

    #[ORM\Column(name: "DateRemb", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateremb = null;

    #[ORM\Column(name: "Taux", nullable: true)]
    private ?float $taux = null;

    #[ORM\Column(name: "CoutEmprunt", nullable: true)]
    private ?float $coutemprunt = null;

    #[ORM\Column(name: "MontantDu_a_Echeance", nullable: true)]
    private ?float $montantduAEcheance = null;

    #[ORM\Column(name: "TypeEmprunt", nullable: true)]
    private ?int $typeemprunt = null;

    #[ORM\Column(name: "Devise", nullable: true)]
    private ?int $devise = null;

    #[ORM\Column(name: "ChezBanque", nullable: true)]
    private ?int $chezbanque = null;

    #[ORM\Column(name: "Valide")]
    private ?bool $valide = null;

    #[ORM\Column(name: "CheminDocsEmprunts", length: 255, nullable: true)]
    private ?string $chemindocsemprunts = null;

    #[ORM\Column(name: "remboursser")]
    private ?bool $remboursser = null;

    #[ORM\Column(name: "Remboursserle", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $remboursserle = null;

    #[ORM\Column(name: "DateValeur", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datevaleur = null;

    #[ORM\Column(name: "MontantDH", nullable: true)]
    private ?float $montantdh = null;

    #[ORM\Column(name: "Reconduit")]
    private ?bool $reconduit = null;

    #[ORM\Column(name: "SiReconduit_N°_Emprunt", nullable: true)]
    private ?int $sireconduitN°Emprunt = null;

    #[ORM\Column(name: "ReferenceBanque", length: 255, nullable: true)]
    private ?string $referencebanque = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getGacN(): ?int
    {
        return $this->gacN;
    }

    public function setGacN(?int $gacN): static
    {
        $this->gacN = $gacN;

        return $this;
    }

    public function getRegnum(): ?int
    {
        return $this->regnum;
    }

    public function setRegnum(?int $regnum): static
    {
        $this->regnum = $regnum;

        return $this;
    }

    public function getMontantpayer(): ?float
    {
        return $this->montantpayer;
    }

    public function setMontantpayer(?float $montantpayer): static
    {
        $this->montantpayer = $montantpayer;

        return $this;
    }

    public function getDatevaleurempreunt(): ?\DateTimeInterface
    {
        return $this->datevaleurempreunt;
    }

    public function setDatevaleurempreunt(?\DateTimeInterface $datevaleurempreunt): static
    {
        $this->datevaleurempreunt = $datevaleurempreunt;

        return $this;
    }

    public function getDatesouscript(): ?\DateTimeInterface
    {
        return $this->datesouscript;
    }

    public function setDatesouscript(?\DateTimeInterface $datesouscript): static
    {
        $this->datesouscript = $datesouscript;

        return $this;
    }

    public function getNombrejours(): ?int
    {
        return $this->nombrejours;
    }

    public function setNombrejours(?int $nombrejours): static
    {
        $this->nombrejours = $nombrejours;

        return $this;
    }

    public function getDateremb(): ?\DateTimeInterface
    {
        return $this->dateremb;
    }

    public function setDateremb(?\DateTimeInterface $dateremb): static
    {
        $this->dateremb = $dateremb;

        return $this;
    }

    public function getTaux(): ?float
    {
        return $this->taux;
    }

    public function setTaux(?float $taux): static
    {
        $this->taux = $taux;

        return $this;
    }

    public function getCoutemprunt(): ?float
    {
        return $this->coutemprunt;
    }

    public function setCoutemprunt(?float $coutemprunt): static
    {
        $this->coutemprunt = $coutemprunt;

        return $this;
    }

    public function getMontantduAEcheance(): ?float
    {
        return $this->montantduAEcheance;
    }

    public function setMontantduAEcheance(?float $montantduAEcheance): static
    {
        $this->montantduAEcheance = $montantduAEcheance;

        return $this;
    }

    public function getTypeemprunt(): ?int
    {
        return $this->typeemprunt;
    }

    public function setTypeemprunt(?int $typeemprunt): static
    {
        $this->typeemprunt = $typeemprunt;

        return $this;
    }

    public function getDevise(): ?int
    {
        return $this->devise;
    }

    public function setDevise(?int $devise): static
    {
        $this->devise = $devise;

        return $this;
    }

    public function getChezbanque(): ?int
    {
        return $this->chezbanque;
    }

    public function setChezbanque(?int $chezbanque): static
    {
        $this->chezbanque = $chezbanque;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getChemindocsemprunts(): ?string
    {
        return $this->chemindocsemprunts;
    }

    public function setChemindocsemprunts(?string $chemindocsemprunts): static
    {
        $this->chemindocsemprunts = $chemindocsemprunts;

        return $this;
    }

    public function getRemboursser(): ?bool
    {
        return $this->remboursser;
    }

    public function setRemboursser(bool $remboursser): static
    {
        $this->remboursser = $remboursser;

        return $this;
    }

    public function getRemboursserle(): ?\DateTimeInterface
    {
        return $this->remboursserle;
    }

    public function setRemboursserle(?\DateTimeInterface $remboursserle): static
    {
        $this->remboursserle = $remboursserle;

        return $this;
    }

    public function getDatevaleur(): ?\DateTimeInterface
    {
        return $this->datevaleur;
    }

    public function setDatevaleur(?\DateTimeInterface $datevaleur): static
    {
        $this->datevaleur = $datevaleur;

        return $this;
    }

    public function getMontantdh(): ?float
    {
        return $this->montantdh;
    }

    public function setMontantdh(?float $montantdh): static
    {
        $this->montantdh = $montantdh;

        return $this;
    }

    public function getReconduit(): ?bool
    {
        return $this->reconduit;
    }

    public function setReconduit(bool $reconduit): static
    {
        $this->reconduit = $reconduit;

        return $this;
    }

    public function getSireconduitN°Emprunt(): ?int
    {
        return $this->sireconduitN°Emprunt;
    }

    public function setSireconduitN°Emprunt(?int $sireconduitN°Emprunt): static
    {
        $this->sireconduitN°Emprunt = $sireconduitN°Emprunt;

        return $this;
    }

    public function getReferencebanque(): ?string
    {
        return $this->referencebanque;
    }

    public function setReferencebanque(?string $referencebanque): static
    {
        $this->referencebanque = $referencebanque;

        return $this;
    }
}
