<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FFamcomptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FAMCOMPTA')]
#[ORM\UniqueConstraint(name: 'IFCP_CODE', columns: ['FCP_Champ'])]
#[ORM\Entity(repositoryClass: FFamcomptaRepository::class)]
class FFamcompta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FA_CodeFamille", length: 11)]
    private ?string $faCodefamille = null;

    #[ORM\Column(name: "cbFA_CodeFamille", type: Types::BINARY, nullable: true)]
    private $cbfaCodefamille = null;

    #[ORM\Column(name: "FCP_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $fcpType = null;

    #[ORM\Column(name: "FCP_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $fcpChamp = null;

    #[ORM\Column(name: "FCP_ComptaCPT_CompteG", length: 13, nullable: true)]
    private ?string $fcpComptacptCompteg = null;

    #[ORM\Column(name: "FCP_ComptaCPT_CompteA", length: 13, nullable: true)]
    private ?string $fcpComptacptComptea = null;

    #[ORM\Column(name: "FCP_ComptaCPT_Taxe1", length: 5, nullable: true)]
    private ?string $fcpComptacptTaxe1 = null;

    #[ORM\Column(name: "FCP_ComptaCPT_Taxe2", length: 5, nullable: true)]
    private ?string $fcpComptacptTaxe2 = null;

    #[ORM\Column(name: "FCP_ComptaCPT_Taxe3", length: 5, nullable: true)]
    private ?string $fcpComptacptTaxe3 = null;

    #[ORM\Column(name: "FCP_TypeFacture", type: Types::SMALLINT, nullable: true)]
    private ?int $fcpTypefacture = null;

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

    #[ORM\Column(name: "FCP_ComptaCPT_Date1", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fcpComptacptDate1 = null;

    #[ORM\Column(name: "FCP_ComptaCPT_Date2", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fcpComptacptDate2 = null;

    #[ORM\Column(name: "FCP_ComptaCPT_Date3", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fcpComptacptDate3 = null;

    #[ORM\Column(name: "FCP_ComptaCPT_TaxeAnc1", length: 5, nullable: true)]
    private ?string $fcpComptacptTaxeanc1 = null;

    #[ORM\Column(name: "FCP_ComptaCPT_TaxeAnc2", length: 5, nullable: true)]
    private ?string $fcpComptacptTaxeanc2 = null;

    #[ORM\Column(name: "FCP_ComptaCPT_TaxeAnc3", length: 5, nullable: true)]
    private ?string $fcpComptacptTaxeanc3 = null;

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

    public function getFcpType(): ?int
    {
        return $this->fcpType;
    }

    public function setFcpType(?int $fcpType): static
    {
        $this->fcpType = $fcpType;

        return $this;
    }

    public function getFcpChamp(): ?int
    {
        return $this->fcpChamp;
    }

    public function setFcpChamp(?int $fcpChamp): static
    {
        $this->fcpChamp = $fcpChamp;

        return $this;
    }

    public function getFcpComptacptCompteg(): ?string
    {
        return $this->fcpComptacptCompteg;
    }

    public function setFcpComptacptCompteg(?string $fcpComptacptCompteg): static
    {
        $this->fcpComptacptCompteg = $fcpComptacptCompteg;

        return $this;
    }

    public function getFcpComptacptComptea(): ?string
    {
        return $this->fcpComptacptComptea;
    }

    public function setFcpComptacptComptea(?string $fcpComptacptComptea): static
    {
        $this->fcpComptacptComptea = $fcpComptacptComptea;

        return $this;
    }

    public function getFcpComptacptTaxe1(): ?string
    {
        return $this->fcpComptacptTaxe1;
    }

    public function setFcpComptacptTaxe1(?string $fcpComptacptTaxe1): static
    {
        $this->fcpComptacptTaxe1 = $fcpComptacptTaxe1;

        return $this;
    }

    public function getFcpComptacptTaxe2(): ?string
    {
        return $this->fcpComptacptTaxe2;
    }

    public function setFcpComptacptTaxe2(?string $fcpComptacptTaxe2): static
    {
        $this->fcpComptacptTaxe2 = $fcpComptacptTaxe2;

        return $this;
    }

    public function getFcpComptacptTaxe3(): ?string
    {
        return $this->fcpComptacptTaxe3;
    }

    public function setFcpComptacptTaxe3(?string $fcpComptacptTaxe3): static
    {
        $this->fcpComptacptTaxe3 = $fcpComptacptTaxe3;

        return $this;
    }

    public function getFcpTypefacture(): ?int
    {
        return $this->fcpTypefacture;
    }

    public function setFcpTypefacture(?int $fcpTypefacture): static
    {
        $this->fcpTypefacture = $fcpTypefacture;

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

    public function getFcpComptacptDate1(): ?\DateTimeInterface
    {
        return $this->fcpComptacptDate1;
    }

    public function setFcpComptacptDate1(?\DateTimeInterface $fcpComptacptDate1): static
    {
        $this->fcpComptacptDate1 = $fcpComptacptDate1;

        return $this;
    }

    public function getFcpComptacptDate2(): ?\DateTimeInterface
    {
        return $this->fcpComptacptDate2;
    }

    public function setFcpComptacptDate2(?\DateTimeInterface $fcpComptacptDate2): static
    {
        $this->fcpComptacptDate2 = $fcpComptacptDate2;

        return $this;
    }

    public function getFcpComptacptDate3(): ?\DateTimeInterface
    {
        return $this->fcpComptacptDate3;
    }

    public function setFcpComptacptDate3(?\DateTimeInterface $fcpComptacptDate3): static
    {
        $this->fcpComptacptDate3 = $fcpComptacptDate3;

        return $this;
    }

    public function getFcpComptacptTaxeanc1(): ?string
    {
        return $this->fcpComptacptTaxeanc1;
    }

    public function setFcpComptacptTaxeanc1(?string $fcpComptacptTaxeanc1): static
    {
        $this->fcpComptacptTaxeanc1 = $fcpComptacptTaxeanc1;

        return $this;
    }

    public function getFcpComptacptTaxeanc2(): ?string
    {
        return $this->fcpComptacptTaxeanc2;
    }

    public function setFcpComptacptTaxeanc2(?string $fcpComptacptTaxeanc2): static
    {
        $this->fcpComptacptTaxeanc2 = $fcpComptacptTaxeanc2;

        return $this;
    }

    public function getFcpComptacptTaxeanc3(): ?string
    {
        return $this->fcpComptacptTaxeanc3;
    }

    public function setFcpComptacptTaxeanc3(?string $fcpComptacptTaxeanc3): static
    {
        $this->fcpComptacptTaxeanc3 = $fcpComptacptTaxeanc3;

        return $this;
    }
}
