<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FFamtarifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FAMTARIF')]
#[ORM\UniqueConstraint(name: 'IFT_REF', columns: ['FT_Categorie'])]
#[ORM\Entity(repositoryClass: FFamtarifRepository::class)]
class FFamtarif
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FA_CodeFamille", length: 11)]
    private ?string $faCodefamille = null;

    #[ORM\Column(name: "cbFA_CodeFamille", type: Types::BINARY, nullable: true)]
    private $cbfaCodefamille = null;

    #[ORM\Column(name: "FT_Categorie", type: Types::SMALLINT, nullable: true)]
    private ?int $ftCategorie = null;

    #[ORM\Column(name: "FT_Coef", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ftCoef = null;

    #[ORM\Column(name: "FT_PrixTTC", type: Types::SMALLINT, nullable: true)]
    private ?int $ftPrixttc = null;

    #[ORM\Column(name: "FT_Arrondi", type: Types::SMALLINT, nullable: true)]
    private ?int $ftArrondi = null;

    #[ORM\Column(name: "FT_QteMont", type: Types::SMALLINT, nullable: true)]
    private ?int $ftQtemont = null;

    #[ORM\Column(name: "EG_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $egChamp = null;

    #[ORM\Column(name: "FT_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $ftDevise = null;

    #[ORM\Column(name: "FT_Remise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ftRemise = null;

    #[ORM\Column(name: "FT_Calcul", type: Types::SMALLINT, nullable: true)]
    private ?int $ftCalcul = null;

    #[ORM\Column(name: "FT_TypeRem", type: Types::SMALLINT, nullable: true)]
    private ?int $ftTyperem = null;

    #[ORM\Column(name: "cbProt", type: Types::SMALLINT, nullable: true)]
    private ?int $cbprot = null;

    #[ORM\Column(name: "cbCreateur", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbcreateur = 'CSQL';

    #[ORM\Column(name: "cbModification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbmodification = null;

    #[ORM\Column(name: "cbReplication", nullable: true)]
    private ?int $cbreplication = null;

    #[ORM\Column(name: "cbFlag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbflag = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getFaCodefamille(): ?string
    {
        return $this->faCodefamille;
    }

    public function setFaCodefamille(string $faCodefamille): static
    {
        $this->faCodefamille = $faCodefamille;

        return $this;
    }

    public function getCbfaCodefamille()
    {
        return $this->cbfaCodefamille;
    }

    public function setCbfaCodefamille($cbfaCodefamille): static
    {
        $this->cbfaCodefamille = $cbfaCodefamille;

        return $this;
    }

    public function getFtCategorie(): ?int
    {
        return $this->ftCategorie;
    }

    public function setFtCategorie(?int $ftCategorie): static
    {
        $this->ftCategorie = $ftCategorie;

        return $this;
    }

    public function getFtCoef(): ?string
    {
        return $this->ftCoef;
    }

    public function setFtCoef(?string $ftCoef): static
    {
        $this->ftCoef = $ftCoef;

        return $this;
    }

    public function getFtPrixttc(): ?int
    {
        return $this->ftPrixttc;
    }

    public function setFtPrixttc(?int $ftPrixttc): static
    {
        $this->ftPrixttc = $ftPrixttc;

        return $this;
    }

    public function getFtArrondi(): ?int
    {
        return $this->ftArrondi;
    }

    public function setFtArrondi(?int $ftArrondi): static
    {
        $this->ftArrondi = $ftArrondi;

        return $this;
    }

    public function getFtQtemont(): ?int
    {
        return $this->ftQtemont;
    }

    public function setFtQtemont(?int $ftQtemont): static
    {
        $this->ftQtemont = $ftQtemont;

        return $this;
    }

    public function getEgChamp(): ?int
    {
        return $this->egChamp;
    }

    public function setEgChamp(?int $egChamp): static
    {
        $this->egChamp = $egChamp;

        return $this;
    }

    public function getFtDevise(): ?int
    {
        return $this->ftDevise;
    }

    public function setFtDevise(?int $ftDevise): static
    {
        $this->ftDevise = $ftDevise;

        return $this;
    }

    public function getFtRemise(): ?string
    {
        return $this->ftRemise;
    }

    public function setFtRemise(?string $ftRemise): static
    {
        $this->ftRemise = $ftRemise;

        return $this;
    }

    public function getFtCalcul(): ?int
    {
        return $this->ftCalcul;
    }

    public function setFtCalcul(?int $ftCalcul): static
    {
        $this->ftCalcul = $ftCalcul;

        return $this;
    }

    public function getFtTyperem(): ?int
    {
        return $this->ftTyperem;
    }

    public function setFtTyperem(?int $ftTyperem): static
    {
        $this->ftTyperem = $ftTyperem;

        return $this;
    }

    public function getCbprot(): ?int
    {
        return $this->cbprot;
    }

    public function setCbprot(?int $cbprot): static
    {
        $this->cbprot = $cbprot;

        return $this;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): static
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): static
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getCbreplication(): ?int
    {
        return $this->cbreplication;
    }

    public function setCbreplication(?int $cbreplication): static
    {
        $this->cbreplication = $cbreplication;

        return $this;
    }

    public function getCbflag(): ?int
    {
        return $this->cbflag;
    }

    public function setCbflag(?int $cbflag): static
    {
        $this->cbflag = $cbflag;

        return $this;
    }
}
