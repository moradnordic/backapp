<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblreglementfrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblReglementFrs')]
#[ORM\Entity(repositoryClass: TblreglementfrsRepository::class)]
class Tblreglementfrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Facture", nullable: true)]
    private ?int $facture = null;

    #[ORM\Column(name: "DateReglement", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereglement = null;

    #[ORM\Column(name: "ScanOrdreDeVirement", length: 255, nullable: true)]
    private ?string $scanordredevirement = null;

    #[ORM\Column(name: "ScanSwift", length: 255, nullable: true)]
    private ?string $scanswift = null;

    #[ORM\Column(name: "TextSwift", length: 255, nullable: true)]
    private ?string $textswift = null;

    #[ORM\Column(name: "MontantReglementEcheance", nullable: true)]
    private ?float $montantreglementecheance = null;

    #[ORM\Column(name: "DateValeur", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datevaleur = null;

    #[ORM\Column(name: "Frs", nullable: true)]
    private ?int $frs = null;

    #[ORM\Column(name: "TypeOperation", nullable: true)]
    private ?int $typeoperation = null;

    #[ORM\Column(name: "Confirmed")]
    private ?bool $confirmed = null;

    #[ORM\Column(name: "Dev", nullable: true)]
    private ?int $dev = null;

    #[ORM\Column(name: "ModeDePaiement", nullable: true)]
    private ?int $modedepaiement = null;

    #[ORM\Column(name: "ModeFinancementRegFrs", nullable: true)]
    private ?int $modefinancementregfrs = null;

    #[ORM\Column(name: "TypeEmprunt", nullable: true)]
    private ?int $typeemprunt = null;

    #[ORM\Column(name: "NrEmprunt", nullable: true)]
    private ?int $nremprunt = null;

    #[ORM\Column(name: "DeposeOuiNon")]
    private ?bool $deposeouinon = null;

    #[ORM\Column(name: "Online_Papier", length: 1, nullable: true)]
    private ?string $onlinePapier = null;

    #[ORM\Column(name: "Cours", nullable: true)]
    private ?float $cours = null;

    #[ORM\Column(name: "MontantMAD", nullable: true)]
    private ?float $montantmad = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getFacture(): ?int
    {
        return $this->facture;
    }

    public function setFacture(?int $facture): static
    {
        $this->facture = $facture;

        return $this;
    }

    public function getDatereglement(): ?\DateTimeInterface
    {
        return $this->datereglement;
    }

    public function setDatereglement(?\DateTimeInterface $datereglement): static
    {
        $this->datereglement = $datereglement;

        return $this;
    }

    public function getScanordredevirement(): ?string
    {
        return $this->scanordredevirement;
    }

    public function setScanordredevirement(?string $scanordredevirement): static
    {
        $this->scanordredevirement = $scanordredevirement;

        return $this;
    }

    public function getScanswift(): ?string
    {
        return $this->scanswift;
    }

    public function setScanswift(?string $scanswift): static
    {
        $this->scanswift = $scanswift;

        return $this;
    }

    public function getTextswift(): ?string
    {
        return $this->textswift;
    }

    public function setTextswift(?string $textswift): static
    {
        $this->textswift = $textswift;

        return $this;
    }

    public function getMontantreglementecheance(): ?float
    {
        return $this->montantreglementecheance;
    }

    public function setMontantreglementecheance(?float $montantreglementecheance): static
    {
        $this->montantreglementecheance = $montantreglementecheance;

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

    public function getFrs(): ?int
    {
        return $this->frs;
    }

    public function setFrs(?int $frs): static
    {
        $this->frs = $frs;

        return $this;
    }

    public function getTypeoperation(): ?int
    {
        return $this->typeoperation;
    }

    public function setTypeoperation(?int $typeoperation): static
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): static
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getDev(): ?int
    {
        return $this->dev;
    }

    public function setDev(?int $dev): static
    {
        $this->dev = $dev;

        return $this;
    }

    public function getModedepaiement(): ?int
    {
        return $this->modedepaiement;
    }

    public function setModedepaiement(?int $modedepaiement): static
    {
        $this->modedepaiement = $modedepaiement;

        return $this;
    }

    public function getModefinancementregfrs(): ?int
    {
        return $this->modefinancementregfrs;
    }

    public function setModefinancementregfrs(?int $modefinancementregfrs): static
    {
        $this->modefinancementregfrs = $modefinancementregfrs;

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

    public function getNremprunt(): ?int
    {
        return $this->nremprunt;
    }

    public function setNremprunt(?int $nremprunt): static
    {
        $this->nremprunt = $nremprunt;

        return $this;
    }

    public function getDeposeouinon(): ?bool
    {
        return $this->deposeouinon;
    }

    public function setDeposeouinon(bool $deposeouinon): static
    {
        $this->deposeouinon = $deposeouinon;

        return $this;
    }

    public function getOnlinePapier(): ?string
    {
        return $this->onlinePapier;
    }

    public function setOnlinePapier(?string $onlinePapier): static
    {
        $this->onlinePapier = $onlinePapier;

        return $this;
    }

    public function getCours(): ?float
    {
        return $this->cours;
    }

    public function setCours(?float $cours): static
    {
        $this->cours = $cours;

        return $this;
    }

    public function getMontantmad(): ?float
    {
        return $this->montantmad;
    }

    public function setMontantmad(?float $montantmad): static
    {
        $this->montantmad = $montantmad;

        return $this;
    }
}
