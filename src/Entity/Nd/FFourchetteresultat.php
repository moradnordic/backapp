<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FFourchetteresultatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FOURCHETTERESULTAT')]
#[ORM\UniqueConstraint(name: 'IFR_CGNUM', columns: ['cbCG_NumDe'])]
#[ORM\Entity(repositoryClass: FFourchetteresultatRepository::class)]
class FFourchetteresultat
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Resultat", type: Types::SMALLINT, nullable: true)]
    private ?int $nResultat = null;

    #[ORM\Column(name: "CG_NumDe", length: 13, nullable: true)]
    private ?string $cgNumde = null;

    #[ORM\Column(name: "cbCG_NumDe", type: Types::BINARY, nullable: true)]
    private $cbcgNumde = null;

    #[ORM\Column(name: "CG_NumA", length: 13, nullable: true)]
    private ?string $cgNuma = null;

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

    public function getNResultat(): ?int
    {
        return $this->nResultat;
    }

    public function setNResultat(?int $nResultat): static
    {
        $this->nResultat = $nResultat;

        return $this;
    }

    public function getCgNumde(): ?string
    {
        return $this->cgNumde;
    }

    public function setCgNumde(?string $cgNumde): static
    {
        $this->cgNumde = $cgNumde;

        return $this;
    }

    public function getCbcgNumde()
    {
        return $this->cbcgNumde;
    }

    public function setCbcgNumde($cbcgNumde): static
    {
        $this->cbcgNumde = $cbcgNumde;

        return $this;
    }

    public function getCgNuma(): ?string
    {
        return $this->cgNuma;
    }

    public function setCgNuma(?string $cgNuma): static
    {
        $this->cgNuma = $cgNuma;

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
