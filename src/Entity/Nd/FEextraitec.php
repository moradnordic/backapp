<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEextraitecRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EEXTRAITEC')]
#[ORM\UniqueConstraint(name: 'IEE_EXNO', columns: ['EC_No'])]
#[ORM\Index(name: 'IEE_ECNO', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_EEXTRAITEC_EC_No', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_EEXTRAITEC_EE_Ligne', columns: ['EE_Ligne'])]
#[ORM\Entity(repositoryClass: FEextraitecRepository::class)]
class FEextraitec
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EX_No")]
    private ?int $exNo = null;

    #[ORM\Column(name: "EE_Ligne", type: Types::SMALLINT)]
    private ?int $eeLigne = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

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

    public function getEeLigne(): ?int
    {
        return $this->eeLigne;
    }

    public function setEeLigne(int $eeLigne): static
    {
        $this->eeLigne = $eeLigne;

        return $this;
    }

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

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
