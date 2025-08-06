<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrFinancementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Financement')]
#[ORM\Entity(repositoryClass: LrFinancementRepository::class)]
class LrFinancement
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "FIN_REFPIECE", length: 7000, nullable: true)]
    private ?string $finRefpiece = null;

    #[ORM\Column(name: "FIN_PIECE", length: 150, nullable: true)]
    private ?string $finPiece = null;

    #[ORM\Column(name: "CT_NUM", length: 150, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "FIN_ECH_Montant", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $finEchMontant = null;

    #[ORM\Column(name: "FIN_ECH_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $finEchSens = null;

    #[ORM\Column(name: "FIN_ECH_DernCompte", length: 150, nullable: true)]
    private ?string $finEchDerncompte = null;

    #[ORM\Column(name: "FIN_Date_Saisie", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finDateSaisie = null;

    #[ORM\Column(name: "FIN_LR_EC_PIECE", length: 150, nullable: true)]
    private ?string $finLrEcPiece = null;

    #[ORM\Column(name: "FIN_ANNEEEXER", length: 150, nullable: true)]
    private ?string $finAnneeexer = null;

    #[ORM\Column(name: "FIN_cocher", nullable: true)]
    private ?int $finCocher = null;

    #[ORM\Column(name: "FIN_TYPE", length: 100, nullable: true)]
    private ?string $finType = null;

    #[ORM\Column(name: "FIN_Interet", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $finInteret = null;

    #[ORM\Column(name: "FIN_ECH_DAT", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finEchDat = null;

    #[ORM\Column(name: "FIN_Banque", length: 50, nullable: true)]
    private ?string $finBanque = null;

    #[ORM\Column(name: "CGNUMFR", length: 50, nullable: true)]
    private ?string $cgnumfr = null;

    #[ORM\Column(name: "date_Saisie", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSaisie = null;

    #[ORM\Column(name: "Fin_MntDEv", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $finMntdev = null;

    #[ORM\Column(name: "Fin_IntDev", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $finIntdev = null;

    #[ORM\Column(name: "Fin_Parite", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $finParite = null;

    #[ORM\Column(name: "Fin_Devise", length: 50, nullable: true)]
    private ?string $finDevise = null;

    #[ORM\Column(name: "FIN_Dossier", length: 50, nullable: true)]
    private ?string $finDossier = null;

    #[ORM\Column(name: "FIN_Reference", length: 50, nullable: true)]
    private ?string $finReference = null;

    #[ORM\Column(name: "Compta", nullable: true)]
    private ?int $compta = null;

    #[ORM\Column(name: "FIN_PIECE_INT", length: 50, nullable: true)]
    private ?string $finPieceInt = null;

    #[ORM\Column(name: "FIN_LCRED", length: 50, nullable: true)]
    private ?string $finLcred = null;

    #[ORM\Column(name: "DUREE_FINANC", type: Types::DECIMAL, precision: 18, scale: 4, nullable: true)]
    private ?string $dureeFinanc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFinRefpiece(): ?string
    {
        return $this->finRefpiece;
    }

    public function setFinRefpiece(?string $finRefpiece): static
    {
        $this->finRefpiece = $finRefpiece;

        return $this;
    }

    public function getFinPiece(): ?string
    {
        return $this->finPiece;
    }

    public function setFinPiece(?string $finPiece): static
    {
        $this->finPiece = $finPiece;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getFinEchMontant(): ?string
    {
        return $this->finEchMontant;
    }

    public function setFinEchMontant(?string $finEchMontant): static
    {
        $this->finEchMontant = $finEchMontant;

        return $this;
    }

    public function getFinEchSens(): ?int
    {
        return $this->finEchSens;
    }

    public function setFinEchSens(?int $finEchSens): static
    {
        $this->finEchSens = $finEchSens;

        return $this;
    }

    public function getFinEchDerncompte(): ?string
    {
        return $this->finEchDerncompte;
    }

    public function setFinEchDerncompte(?string $finEchDerncompte): static
    {
        $this->finEchDerncompte = $finEchDerncompte;

        return $this;
    }

    public function getFinDateSaisie(): ?\DateTimeInterface
    {
        return $this->finDateSaisie;
    }

    public function setFinDateSaisie(?\DateTimeInterface $finDateSaisie): static
    {
        $this->finDateSaisie = $finDateSaisie;

        return $this;
    }

    public function getFinLrEcPiece(): ?string
    {
        return $this->finLrEcPiece;
    }

    public function setFinLrEcPiece(?string $finLrEcPiece): static
    {
        $this->finLrEcPiece = $finLrEcPiece;

        return $this;
    }

    public function getFinAnneeexer(): ?string
    {
        return $this->finAnneeexer;
    }

    public function setFinAnneeexer(?string $finAnneeexer): static
    {
        $this->finAnneeexer = $finAnneeexer;

        return $this;
    }

    public function getFinCocher(): ?int
    {
        return $this->finCocher;
    }

    public function setFinCocher(?int $finCocher): static
    {
        $this->finCocher = $finCocher;

        return $this;
    }

    public function getFinType(): ?string
    {
        return $this->finType;
    }

    public function setFinType(?string $finType): static
    {
        $this->finType = $finType;

        return $this;
    }

    public function getFinInteret(): ?string
    {
        return $this->finInteret;
    }

    public function setFinInteret(?string $finInteret): static
    {
        $this->finInteret = $finInteret;

        return $this;
    }

    public function getFinEchDat(): ?\DateTimeInterface
    {
        return $this->finEchDat;
    }

    public function setFinEchDat(?\DateTimeInterface $finEchDat): static
    {
        $this->finEchDat = $finEchDat;

        return $this;
    }

    public function getFinBanque(): ?string
    {
        return $this->finBanque;
    }

    public function setFinBanque(?string $finBanque): static
    {
        $this->finBanque = $finBanque;

        return $this;
    }

    public function getCgnumfr(): ?string
    {
        return $this->cgnumfr;
    }

    public function setCgnumfr(?string $cgnumfr): static
    {
        $this->cgnumfr = $cgnumfr;

        return $this;
    }

    public function getDateSaisie(): ?\DateTimeInterface
    {
        return $this->dateSaisie;
    }

    public function setDateSaisie(?\DateTimeInterface $dateSaisie): static
    {
        $this->dateSaisie = $dateSaisie;

        return $this;
    }

    public function getFinMntdev(): ?string
    {
        return $this->finMntdev;
    }

    public function setFinMntdev(?string $finMntdev): static
    {
        $this->finMntdev = $finMntdev;

        return $this;
    }

    public function getFinIntdev(): ?string
    {
        return $this->finIntdev;
    }

    public function setFinIntdev(?string $finIntdev): static
    {
        $this->finIntdev = $finIntdev;

        return $this;
    }

    public function getFinParite(): ?string
    {
        return $this->finParite;
    }

    public function setFinParite(?string $finParite): static
    {
        $this->finParite = $finParite;

        return $this;
    }

    public function getFinDevise(): ?string
    {
        return $this->finDevise;
    }

    public function setFinDevise(?string $finDevise): static
    {
        $this->finDevise = $finDevise;

        return $this;
    }

    public function getFinDossier(): ?string
    {
        return $this->finDossier;
    }

    public function setFinDossier(?string $finDossier): static
    {
        $this->finDossier = $finDossier;

        return $this;
    }

    public function getFinReference(): ?string
    {
        return $this->finReference;
    }

    public function setFinReference(?string $finReference): static
    {
        $this->finReference = $finReference;

        return $this;
    }

    public function getCompta(): ?int
    {
        return $this->compta;
    }

    public function setCompta(?int $compta): static
    {
        $this->compta = $compta;

        return $this;
    }

    public function getFinPieceInt(): ?string
    {
        return $this->finPieceInt;
    }

    public function setFinPieceInt(?string $finPieceInt): static
    {
        $this->finPieceInt = $finPieceInt;

        return $this;
    }

    public function getFinLcred(): ?string
    {
        return $this->finLcred;
    }

    public function setFinLcred(?string $finLcred): static
    {
        $this->finLcred = $finLcred;

        return $this;
    }

    public function getDureeFinanc(): ?string
    {
        return $this->dureeFinanc;
    }

    public function setDureeFinanc(?string $dureeFinanc): static
    {
        $this->dureeFinanc = $dureeFinanc;

        return $this;
    }
}
