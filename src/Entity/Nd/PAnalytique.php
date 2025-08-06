<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PAnalytiqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ANALYTIQUE')]
#[ORM\Entity(repositoryClass: PAnalytiqueRepository::class)]
class PAnalytique
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "A_Intitule", length: 35, nullable: true)]
    private ?string $aIntitule = null;

    #[ORM\Column(name: "A_Rupture01A_Nom", length: 21, nullable: true)]
    private ?string $aRupture01aNom = null;

    #[ORM\Column(name: "A_Rupture01A_Lg", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture01aLg = null;

    #[ORM\Column(name: "A_Rupture01A_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture01aType = null;

    #[ORM\Column(name: "A_Rupture02A_Nom", length: 21, nullable: true)]
    private ?string $aRupture02aNom = null;

    #[ORM\Column(name: "A_Rupture02A_Lg", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture02aLg = null;

    #[ORM\Column(name: "A_Rupture02A_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture02aType = null;

    #[ORM\Column(name: "A_Rupture03A_Nom", length: 21, nullable: true)]
    private ?string $aRupture03aNom = null;

    #[ORM\Column(name: "A_Rupture03A_Lg", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture03aLg = null;

    #[ORM\Column(name: "A_Rupture03A_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture03aType = null;

    #[ORM\Column(name: "A_Rupture04A_Nom", length: 21, nullable: true)]
    private ?string $aRupture04aNom = null;

    #[ORM\Column(name: "A_Rupture04A_Lg", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture04aLg = null;

    #[ORM\Column(name: "A_Rupture04A_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture04aType = null;

    #[ORM\Column(name: "A_Rupture05A_Nom", length: 21, nullable: true)]
    private ?string $aRupture05aNom = null;

    #[ORM\Column(name: "A_Rupture05A_Lg", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture05aLg = null;

    #[ORM\Column(name: "A_Rupture05A_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture05aType = null;

    #[ORM\Column(name: "A_Rupture06A_Nom", length: 21, nullable: true)]
    private ?string $aRupture06aNom = null;

    #[ORM\Column(name: "A_Rupture06A_Lg", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture06aLg = null;

    #[ORM\Column(name: "A_Rupture06A_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $aRupture06aType = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "A_Colonne", type: Types::SMALLINT, nullable: true)]
    private ?int $aColonne = null;

    #[ORM\Column(name: "A_Imputation", type: Types::SMALLINT, nullable: true)]
    private ?int $aImputation = null;

    #[ORM\Column(name: "A_Obligatoire", type: Types::SMALLINT, nullable: true)]
    private ?int $aObligatoire = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAIntitule(): ?string
    {
        return $this->aIntitule;
    }

    public function setAIntitule(?string $aIntitule): static
    {
        $this->aIntitule = $aIntitule;

        return $this;
    }

    public function getARupture01aNom(): ?string
    {
        return $this->aRupture01aNom;
    }

    public function setARupture01aNom(?string $aRupture01aNom): static
    {
        $this->aRupture01aNom = $aRupture01aNom;

        return $this;
    }

    public function getARupture01aLg(): ?int
    {
        return $this->aRupture01aLg;
    }

    public function setARupture01aLg(?int $aRupture01aLg): static
    {
        $this->aRupture01aLg = $aRupture01aLg;

        return $this;
    }

    public function getARupture01aType(): ?int
    {
        return $this->aRupture01aType;
    }

    public function setARupture01aType(?int $aRupture01aType): static
    {
        $this->aRupture01aType = $aRupture01aType;

        return $this;
    }

    public function getARupture02aNom(): ?string
    {
        return $this->aRupture02aNom;
    }

    public function setARupture02aNom(?string $aRupture02aNom): static
    {
        $this->aRupture02aNom = $aRupture02aNom;

        return $this;
    }

    public function getARupture02aLg(): ?int
    {
        return $this->aRupture02aLg;
    }

    public function setARupture02aLg(?int $aRupture02aLg): static
    {
        $this->aRupture02aLg = $aRupture02aLg;

        return $this;
    }

    public function getARupture02aType(): ?int
    {
        return $this->aRupture02aType;
    }

    public function setARupture02aType(?int $aRupture02aType): static
    {
        $this->aRupture02aType = $aRupture02aType;

        return $this;
    }

    public function getARupture03aNom(): ?string
    {
        return $this->aRupture03aNom;
    }

    public function setARupture03aNom(?string $aRupture03aNom): static
    {
        $this->aRupture03aNom = $aRupture03aNom;

        return $this;
    }

    public function getARupture03aLg(): ?int
    {
        return $this->aRupture03aLg;
    }

    public function setARupture03aLg(?int $aRupture03aLg): static
    {
        $this->aRupture03aLg = $aRupture03aLg;

        return $this;
    }

    public function getARupture03aType(): ?int
    {
        return $this->aRupture03aType;
    }

    public function setARupture03aType(?int $aRupture03aType): static
    {
        $this->aRupture03aType = $aRupture03aType;

        return $this;
    }

    public function getARupture04aNom(): ?string
    {
        return $this->aRupture04aNom;
    }

    public function setARupture04aNom(?string $aRupture04aNom): static
    {
        $this->aRupture04aNom = $aRupture04aNom;

        return $this;
    }

    public function getARupture04aLg(): ?int
    {
        return $this->aRupture04aLg;
    }

    public function setARupture04aLg(?int $aRupture04aLg): static
    {
        $this->aRupture04aLg = $aRupture04aLg;

        return $this;
    }

    public function getARupture04aType(): ?int
    {
        return $this->aRupture04aType;
    }

    public function setARupture04aType(?int $aRupture04aType): static
    {
        $this->aRupture04aType = $aRupture04aType;

        return $this;
    }

    public function getARupture05aNom(): ?string
    {
        return $this->aRupture05aNom;
    }

    public function setARupture05aNom(?string $aRupture05aNom): static
    {
        $this->aRupture05aNom = $aRupture05aNom;

        return $this;
    }

    public function getARupture05aLg(): ?int
    {
        return $this->aRupture05aLg;
    }

    public function setARupture05aLg(?int $aRupture05aLg): static
    {
        $this->aRupture05aLg = $aRupture05aLg;

        return $this;
    }

    public function getARupture05aType(): ?int
    {
        return $this->aRupture05aType;
    }

    public function setARupture05aType(?int $aRupture05aType): static
    {
        $this->aRupture05aType = $aRupture05aType;

        return $this;
    }

    public function getARupture06aNom(): ?string
    {
        return $this->aRupture06aNom;
    }

    public function setARupture06aNom(?string $aRupture06aNom): static
    {
        $this->aRupture06aNom = $aRupture06aNom;

        return $this;
    }

    public function getARupture06aLg(): ?int
    {
        return $this->aRupture06aLg;
    }

    public function setARupture06aLg(?int $aRupture06aLg): static
    {
        $this->aRupture06aLg = $aRupture06aLg;

        return $this;
    }

    public function getARupture06aType(): ?int
    {
        return $this->aRupture06aType;
    }

    public function setARupture06aType(?int $aRupture06aType): static
    {
        $this->aRupture06aType = $aRupture06aType;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(?string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getAColonne(): ?int
    {
        return $this->aColonne;
    }

    public function setAColonne(?int $aColonne): static
    {
        $this->aColonne = $aColonne;

        return $this;
    }

    public function getAImputation(): ?int
    {
        return $this->aImputation;
    }

    public function setAImputation(?int $aImputation): static
    {
        $this->aImputation = $aImputation;

        return $this;
    }

    public function getAObligatoire(): ?int
    {
        return $this->aObligatoire;
    }

    public function setAObligatoire(?int $aObligatoire): static
    {
        $this->aObligatoire = $aObligatoire;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
