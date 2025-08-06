<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrImportationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Importation')]
#[ORM\Entity(repositoryClass: LrImportationRepository::class)]
class LrImportation
{
    #[ORM\Column(name: "LR_Import")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $lrImport = null;

    #[ORM\Column(name: "LR_Clt", length: 5000, nullable: true)]
    private ?string $lrClt = null;

    #[ORM\Column(name: "LR_Code", length: 50, nullable: true)]
    private ?string $lrCode = null;

    #[ORM\Column(name: "LR_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lrMontant = null;

    #[ORM\Column(name: "LR_Piece", length: 50, nullable: true)]
    private ?string $lrPiece = null;

    #[ORM\Column(name: "LR_Date_Ech", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lrDateEch = null;

    #[ORM\Column(name: "LR_Code_Fin", length: 50, nullable: true)]
    private ?string $lrCodeFin = null;

    #[ORM\Column(name: "LR_Ent_Enc", length: 50, nullable: true)]
    private ?string $lrEntEnc = null;

    #[ORM\Column(name: "LR_Mode_Regl", length: 50, nullable: true)]
    private ?string $lrModeRegl = null;

    #[ORM\Column(name: "LR_ICE_Clt", length: 50, nullable: true)]
    private ?string $lrIceClt = null;

    #[ORM\Column(name: "LR_Type_Clt", length: 50, nullable: true)]
    private ?string $lrTypeClt = null;

    #[ORM\Column(name: "LR_Espece", length: 50, nullable: true)]
    private ?string $lrEspece = null;

    #[ORM\Column(name: "LR_Ville", length: 50, nullable: true)]
    private ?string $lrVille = null;

    #[ORM\Column(name: "LR_Mois", length: 50, nullable: true)]
    private ?string $lrMois = null;

    #[ORM\Column(name: "LR_Date_Creat", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lrDateCreat = null;

    #[ORM\Column(name: "LR_Num_Fact", length: 50, nullable: true)]
    private ?string $lrNumFact = null;

    public function getLrImport(): ?int
    {
        return $this->lrImport;
    }

    public function getLrClt(): ?string
    {
        return $this->lrClt;
    }

    public function setLrClt(?string $lrClt): static
    {
        $this->lrClt = $lrClt;

        return $this;
    }

    public function getLrCode(): ?string
    {
        return $this->lrCode;
    }

    public function setLrCode(?string $lrCode): static
    {
        $this->lrCode = $lrCode;

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

    public function getLrPiece(): ?string
    {
        return $this->lrPiece;
    }

    public function setLrPiece(?string $lrPiece): static
    {
        $this->lrPiece = $lrPiece;

        return $this;
    }

    public function getLrDateEch(): ?\DateTimeInterface
    {
        return $this->lrDateEch;
    }

    public function setLrDateEch(?\DateTimeInterface $lrDateEch): static
    {
        $this->lrDateEch = $lrDateEch;

        return $this;
    }

    public function getLrCodeFin(): ?string
    {
        return $this->lrCodeFin;
    }

    public function setLrCodeFin(?string $lrCodeFin): static
    {
        $this->lrCodeFin = $lrCodeFin;

        return $this;
    }

    public function getLrEntEnc(): ?string
    {
        return $this->lrEntEnc;
    }

    public function setLrEntEnc(?string $lrEntEnc): static
    {
        $this->lrEntEnc = $lrEntEnc;

        return $this;
    }

    public function getLrModeRegl(): ?string
    {
        return $this->lrModeRegl;
    }

    public function setLrModeRegl(?string $lrModeRegl): static
    {
        $this->lrModeRegl = $lrModeRegl;

        return $this;
    }

    public function getLrIceClt(): ?string
    {
        return $this->lrIceClt;
    }

    public function setLrIceClt(?string $lrIceClt): static
    {
        $this->lrIceClt = $lrIceClt;

        return $this;
    }

    public function getLrTypeClt(): ?string
    {
        return $this->lrTypeClt;
    }

    public function setLrTypeClt(?string $lrTypeClt): static
    {
        $this->lrTypeClt = $lrTypeClt;

        return $this;
    }

    public function getLrEspece(): ?string
    {
        return $this->lrEspece;
    }

    public function setLrEspece(?string $lrEspece): static
    {
        $this->lrEspece = $lrEspece;

        return $this;
    }

    public function getLrVille(): ?string
    {
        return $this->lrVille;
    }

    public function setLrVille(?string $lrVille): static
    {
        $this->lrVille = $lrVille;

        return $this;
    }

    public function getLrMois(): ?string
    {
        return $this->lrMois;
    }

    public function setLrMois(?string $lrMois): static
    {
        $this->lrMois = $lrMois;

        return $this;
    }

    public function getLrDateCreat(): ?\DateTimeInterface
    {
        return $this->lrDateCreat;
    }

    public function setLrDateCreat(?\DateTimeInterface $lrDateCreat): static
    {
        $this->lrDateCreat = $lrDateCreat;

        return $this;
    }

    public function getLrNumFact(): ?string
    {
        return $this->lrNumFact;
    }

    public function setLrNumFact(?string $lrNumFact): static
    {
        $this->lrNumFact = $lrNumFact;

        return $this;
    }
}
