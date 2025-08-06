<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FExtraitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EXTRAIT')]
#[ORM\UniqueConstraint(name: 'IEX_NO', columns: ['EX_No'])]
#[ORM\UniqueConstraint(name: 'IEX_REF', columns: ['cbEX_Reference'])]
#[ORM\Index(name: 'IEX_TYPE', columns: ['cbEX_Reference'])]
#[ORM\Index(name: 'IEX_ETAT', columns: ['cbEX_Reference'])]
#[ORM\UniqueConstraint(name: 'IEX_NOUVDATE', columns: ['EX_NouvDate'])]
#[ORM\Index(name: 'IEX_INVNOUVDATE', columns: ['EX_NouvDate'])]
#[ORM\Index(name: 'FKIA_F_EXTRAIT_EB_No', columns: ['EB_No'])]
#[ORM\Entity(repositoryClass: FExtraitRepository::class)]
class FExtrait
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EX_No")]
    private ?int $exNo = null;

    #[ORM\Column(name: "EX_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $exType = null;

    #[ORM\Column(name: "EX_Reference", length: 17, nullable: true)]
    private ?string $exReference = null;

    #[ORM\Column(name: "cbEX_Reference", type: Types::BINARY, nullable: true)]
    private $cbexReference = null;

    #[ORM\Column(name: "EX_Etat", type: Types::SMALLINT, nullable: true)]
    private ?int $exEtat = null;

    #[ORM\Column(name: "EX_AncDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $exAncdate = null;

    #[ORM\Column(name: "EX_AncSolde", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $exAncsolde = null;

    #[ORM\Column(name: "EX_NouvDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $exNouvdate = null;

    #[ORM\Column(name: "EB_No")]
    private ?int $ebNo = null;

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

    public function getExNo(): ?int
    {
        return $this->exNo;
    }

    public function setExNo(int $exNo): static
    {
        $this->exNo = $exNo;

        return $this;
    }

    public function getExType(): ?int
    {
        return $this->exType;
    }

    public function setExType(?int $exType): static
    {
        $this->exType = $exType;

        return $this;
    }

    public function getExReference(): ?string
    {
        return $this->exReference;
    }

    public function setExReference(?string $exReference): static
    {
        $this->exReference = $exReference;

        return $this;
    }

    public function getCbexReference()
    {
        return $this->cbexReference;
    }

    public function setCbexReference($cbexReference): static
    {
        $this->cbexReference = $cbexReference;

        return $this;
    }

    public function getExEtat(): ?int
    {
        return $this->exEtat;
    }

    public function setExEtat(?int $exEtat): static
    {
        $this->exEtat = $exEtat;

        return $this;
    }

    public function getExAncdate(): ?\DateTimeInterface
    {
        return $this->exAncdate;
    }

    public function setExAncdate(?\DateTimeInterface $exAncdate): static
    {
        $this->exAncdate = $exAncdate;

        return $this;
    }

    public function getExAncsolde(): ?string
    {
        return $this->exAncsolde;
    }

    public function setExAncsolde(?string $exAncsolde): static
    {
        $this->exAncsolde = $exAncsolde;

        return $this;
    }

    public function getExNouvdate(): ?\DateTimeInterface
    {
        return $this->exNouvdate;
    }

    public function setExNouvdate(?\DateTimeInterface $exNouvdate): static
    {
        $this->exNouvdate = $exNouvdate;

        return $this;
    }

    public function getEbNo(): ?int
    {
        return $this->ebNo;
    }

    public function setEbNo(int $ebNo): static
    {
        $this->ebNo = $ebNo;

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
