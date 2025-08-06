<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FArtcomptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTCOMPTA')]
#[ORM\UniqueConstraint(name: 'IACP_REF', columns: ['ACP_Champ'])]
#[ORM\Index(name: 'FKIA_F_ARTCOMPTA_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FArtcomptaRepository::class)]
class FArtcompta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "ACP_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $acpType = null;

    #[ORM\Column(name: "ACP_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $acpChamp = null;

    #[ORM\Column(name: "ACP_ComptaCPT_CompteG", length: 13, nullable: true)]
    private ?string $acpComptacptCompteg = null;

    #[ORM\Column(name: "ACP_ComptaCPT_CompteA", length: 13, nullable: true)]
    private ?string $acpComptacptComptea = null;

    #[ORM\Column(name: "ACP_ComptaCPT_Taxe1", length: 5, nullable: true)]
    private ?string $acpComptacptTaxe1 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_Taxe2", length: 5, nullable: true)]
    private ?string $acpComptacptTaxe2 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_Taxe3", length: 5, nullable: true)]
    private ?string $acpComptacptTaxe3 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_Date1", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $acpComptacptDate1 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_Date2", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $acpComptacptDate2 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_Date3", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $acpComptacptDate3 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_TaxeAnc1", length: 5, nullable: true)]
    private ?string $acpComptacptTaxeanc1 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_TaxeAnc2", length: 5, nullable: true)]
    private ?string $acpComptacptTaxeanc2 = null;

    #[ORM\Column(name: "ACP_ComptaCPT_TaxeAnc3", length: 5, nullable: true)]
    private ?string $acpComptacptTaxeanc3 = null;

    #[ORM\Column(name: "ACP_TypeFacture", type: Types::SMALLINT, nullable: true)]
    private ?int $acpTypefacture = null;

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

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getAcpType(): ?int
    {
        return $this->acpType;
    }

    public function setAcpType(?int $acpType): static
    {
        $this->acpType = $acpType;

        return $this;
    }

    public function getAcpChamp(): ?int
    {
        return $this->acpChamp;
    }

    public function setAcpChamp(?int $acpChamp): static
    {
        $this->acpChamp = $acpChamp;

        return $this;
    }

    public function getAcpComptacptCompteg(): ?string
    {
        return $this->acpComptacptCompteg;
    }

    public function setAcpComptacptCompteg(?string $acpComptacptCompteg): static
    {
        $this->acpComptacptCompteg = $acpComptacptCompteg;

        return $this;
    }

    public function getAcpComptacptComptea(): ?string
    {
        return $this->acpComptacptComptea;
    }

    public function setAcpComptacptComptea(?string $acpComptacptComptea): static
    {
        $this->acpComptacptComptea = $acpComptacptComptea;

        return $this;
    }

    public function getAcpComptacptTaxe1(): ?string
    {
        return $this->acpComptacptTaxe1;
    }

    public function setAcpComptacptTaxe1(?string $acpComptacptTaxe1): static
    {
        $this->acpComptacptTaxe1 = $acpComptacptTaxe1;

        return $this;
    }

    public function getAcpComptacptTaxe2(): ?string
    {
        return $this->acpComptacptTaxe2;
    }

    public function setAcpComptacptTaxe2(?string $acpComptacptTaxe2): static
    {
        $this->acpComptacptTaxe2 = $acpComptacptTaxe2;

        return $this;
    }

    public function getAcpComptacptTaxe3(): ?string
    {
        return $this->acpComptacptTaxe3;
    }

    public function setAcpComptacptTaxe3(?string $acpComptacptTaxe3): static
    {
        $this->acpComptacptTaxe3 = $acpComptacptTaxe3;

        return $this;
    }

    public function getAcpComptacptDate1(): ?\DateTimeInterface
    {
        return $this->acpComptacptDate1;
    }

    public function setAcpComptacptDate1(?\DateTimeInterface $acpComptacptDate1): static
    {
        $this->acpComptacptDate1 = $acpComptacptDate1;

        return $this;
    }

    public function getAcpComptacptDate2(): ?\DateTimeInterface
    {
        return $this->acpComptacptDate2;
    }

    public function setAcpComptacptDate2(?\DateTimeInterface $acpComptacptDate2): static
    {
        $this->acpComptacptDate2 = $acpComptacptDate2;

        return $this;
    }

    public function getAcpComptacptDate3(): ?\DateTimeInterface
    {
        return $this->acpComptacptDate3;
    }

    public function setAcpComptacptDate3(?\DateTimeInterface $acpComptacptDate3): static
    {
        $this->acpComptacptDate3 = $acpComptacptDate3;

        return $this;
    }

    public function getAcpComptacptTaxeanc1(): ?string
    {
        return $this->acpComptacptTaxeanc1;
    }

    public function setAcpComptacptTaxeanc1(?string $acpComptacptTaxeanc1): static
    {
        $this->acpComptacptTaxeanc1 = $acpComptacptTaxeanc1;

        return $this;
    }

    public function getAcpComptacptTaxeanc2(): ?string
    {
        return $this->acpComptacptTaxeanc2;
    }

    public function setAcpComptacptTaxeanc2(?string $acpComptacptTaxeanc2): static
    {
        $this->acpComptacptTaxeanc2 = $acpComptacptTaxeanc2;

        return $this;
    }

    public function getAcpComptacptTaxeanc3(): ?string
    {
        return $this->acpComptacptTaxeanc3;
    }

    public function setAcpComptacptTaxeanc3(?string $acpComptacptTaxeanc3): static
    {
        $this->acpComptacptTaxeanc3 = $acpComptacptTaxeanc3;

        return $this;
    }

    public function getAcpTypefacture(): ?int
    {
        return $this->acpTypefacture;
    }

    public function setAcpTypefacture(?int $acpTypefacture): static
    {
        $this->acpTypefacture = $acpTypefacture;

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
