<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FFamfournissRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FAMFOURNISS')]
#[ORM\UniqueConstraint(name: 'IFF_REF', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IFF_FOURNISS', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IFF_PRINCIPAL', columns: ['FF_Principal'])]
#[ORM\Entity(repositoryClass: FFamfournissRepository::class)]
class FFamfourniss
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FA_CodeFamille", length: 11)]
    private ?string $faCodefamille = null;

    #[ORM\Column(name: "cbFA_CodeFamille", type: Types::BINARY, nullable: true)]
    private $cbfaCodefamille = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "FF_Unite", type: Types::SMALLINT, nullable: true)]
    private ?int $ffUnite = null;

    #[ORM\Column(name: "FF_Conversion", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ffConversion = null;

    #[ORM\Column(name: "FF_DelaiAppro", type: Types::SMALLINT, nullable: true)]
    private ?int $ffDelaiappro = null;

    #[ORM\Column(name: "FF_Garantie", type: Types::SMALLINT, nullable: true)]
    private ?int $ffGarantie = null;

    #[ORM\Column(name: "FF_Colisage", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ffColisage = null;

    #[ORM\Column(name: "FF_QteMini", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ffQtemini = null;

    #[ORM\Column(name: "FF_QteMont", type: Types::SMALLINT, nullable: true)]
    private ?int $ffQtemont = null;

    #[ORM\Column(name: "EG_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $egChamp = null;

    #[ORM\Column(name: "FF_Principal", type: Types::SMALLINT, nullable: true)]
    private ?int $ffPrincipal = null;

    #[ORM\Column(name: "FF_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $ffDevise = null;

    #[ORM\Column(name: "FF_Remise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ffRemise = null;

    #[ORM\Column(name: "FF_ConvDiv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ffConvdiv = null;

    #[ORM\Column(name: "FF_TypeRem", type: Types::SMALLINT, nullable: true)]
    private ?int $ffTyperem = null;

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

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getFfUnite(): ?int
    {
        return $this->ffUnite;
    }

    public function setFfUnite(?int $ffUnite): static
    {
        $this->ffUnite = $ffUnite;

        return $this;
    }

    public function getFfConversion(): ?string
    {
        return $this->ffConversion;
    }

    public function setFfConversion(?string $ffConversion): static
    {
        $this->ffConversion = $ffConversion;

        return $this;
    }

    public function getFfDelaiappro(): ?int
    {
        return $this->ffDelaiappro;
    }

    public function setFfDelaiappro(?int $ffDelaiappro): static
    {
        $this->ffDelaiappro = $ffDelaiappro;

        return $this;
    }

    public function getFfGarantie(): ?int
    {
        return $this->ffGarantie;
    }

    public function setFfGarantie(?int $ffGarantie): static
    {
        $this->ffGarantie = $ffGarantie;

        return $this;
    }

    public function getFfColisage(): ?string
    {
        return $this->ffColisage;
    }

    public function setFfColisage(?string $ffColisage): static
    {
        $this->ffColisage = $ffColisage;

        return $this;
    }

    public function getFfQtemini(): ?string
    {
        return $this->ffQtemini;
    }

    public function setFfQtemini(?string $ffQtemini): static
    {
        $this->ffQtemini = $ffQtemini;

        return $this;
    }

    public function getFfQtemont(): ?int
    {
        return $this->ffQtemont;
    }

    public function setFfQtemont(?int $ffQtemont): static
    {
        $this->ffQtemont = $ffQtemont;

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

    public function getFfPrincipal(): ?int
    {
        return $this->ffPrincipal;
    }

    public function setFfPrincipal(?int $ffPrincipal): static
    {
        $this->ffPrincipal = $ffPrincipal;

        return $this;
    }

    public function getFfDevise(): ?int
    {
        return $this->ffDevise;
    }

    public function setFfDevise(?int $ffDevise): static
    {
        $this->ffDevise = $ffDevise;

        return $this;
    }

    public function getFfRemise(): ?string
    {
        return $this->ffRemise;
    }

    public function setFfRemise(?string $ffRemise): static
    {
        $this->ffRemise = $ffRemise;

        return $this;
    }

    public function getFfConvdiv(): ?string
    {
        return $this->ffConvdiv;
    }

    public function setFfConvdiv(?string $ffConvdiv): static
    {
        $this->ffConvdiv = $ffConvdiv;

        return $this;
    }

    public function getFfTyperem(): ?int
    {
        return $this->ffTyperem;
    }

    public function setFfTyperem(?int $ffTyperem): static
    {
        $this->ffTyperem = $ffTyperem;

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
