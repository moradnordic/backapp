<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FFamtarifqteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FAMTARIFQTE')]
#[ORM\Index(name: 'IFQ_CLFO', columns: ['FQ_BorneSup'])]
#[ORM\Entity(repositoryClass: FFamtarifqteRepository::class)]
class FFamtarifqte
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FA_CodeFamille", length: 11)]
    private ?string $faCodefamille = null;

    #[ORM\Column(name: "cbFA_CodeFamille", type: Types::BINARY, nullable: true)]
    private $cbfaCodefamille = null;

    #[ORM\Column(name: "FQ_RefCF", length: 17, nullable: true)]
    private ?string $fqRefcf = null;

    #[ORM\Column(name: "cbFQ_RefCF", type: Types::BINARY, nullable: true)]
    private $cbfqRefcf = null;

    #[ORM\Column(name: "FQ_BorneSup", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fqBornesup = null;

    #[ORM\Column(name: "FQ_Remise01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fqRemise01remValeur = null;

    #[ORM\Column(name: "FQ_Remise01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $fqRemise01remType = null;

    #[ORM\Column(name: "FQ_Remise02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fqRemise02remValeur = null;

    #[ORM\Column(name: "FQ_Remise02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $fqRemise02remType = null;

    #[ORM\Column(name: "FQ_Remise03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fqRemise03remValeur = null;

    #[ORM\Column(name: "FQ_Remise03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $fqRemise03remType = null;

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

    public function getFqRefcf(): ?string
    {
        return $this->fqRefcf;
    }

    public function setFqRefcf(?string $fqRefcf): static
    {
        $this->fqRefcf = $fqRefcf;

        return $this;
    }

    public function getCbfqRefcf()
    {
        return $this->cbfqRefcf;
    }

    public function setCbfqRefcf($cbfqRefcf): static
    {
        $this->cbfqRefcf = $cbfqRefcf;

        return $this;
    }

    public function getFqBornesup(): ?string
    {
        return $this->fqBornesup;
    }

    public function setFqBornesup(?string $fqBornesup): static
    {
        $this->fqBornesup = $fqBornesup;

        return $this;
    }

    public function getFqRemise01remValeur(): ?string
    {
        return $this->fqRemise01remValeur;
    }

    public function setFqRemise01remValeur(?string $fqRemise01remValeur): static
    {
        $this->fqRemise01remValeur = $fqRemise01remValeur;

        return $this;
    }

    public function getFqRemise01remType(): ?int
    {
        return $this->fqRemise01remType;
    }

    public function setFqRemise01remType(?int $fqRemise01remType): static
    {
        $this->fqRemise01remType = $fqRemise01remType;

        return $this;
    }

    public function getFqRemise02remValeur(): ?string
    {
        return $this->fqRemise02remValeur;
    }

    public function setFqRemise02remValeur(?string $fqRemise02remValeur): static
    {
        $this->fqRemise02remValeur = $fqRemise02remValeur;

        return $this;
    }

    public function getFqRemise02remType(): ?int
    {
        return $this->fqRemise02remType;
    }

    public function setFqRemise02remType(?int $fqRemise02remType): static
    {
        $this->fqRemise02remType = $fqRemise02remType;

        return $this;
    }

    public function getFqRemise03remValeur(): ?string
    {
        return $this->fqRemise03remValeur;
    }

    public function setFqRemise03remValeur(?string $fqRemise03remValeur): static
    {
        $this->fqRemise03remValeur = $fqRemise03remValeur;

        return $this;
    }

    public function getFqRemise03remType(): ?int
    {
        return $this->fqRemise03remType;
    }

    public function setFqRemise03remType(?int $fqRemise03remType): static
    {
        $this->fqRemise03remType = $fqRemise03remType;

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
