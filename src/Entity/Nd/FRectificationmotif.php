<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FRectificationmotifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_RECTIFICATIONMOTIF')]
#[ORM\UniqueConstraint(name: 'IRM_INTITULE', columns: ['cbRM_Intitule'])]
#[ORM\Entity(repositoryClass: FRectificationmotifRepository::class)]
class FRectificationmotif
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "RM_Intitule", length: 69)]
    private ?string $rmIntitule = null;

    #[ORM\Column(name: "cbRM_Intitule", type: Types::BINARY, nullable: true)]
    private $cbrmIntitule = null;

    #[ORM\Column(name: "RM_Code", length: 3, nullable: true)]
    private ?string $rmCode = null;

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

    public function getRmIntitule(): ?string
    {
        return $this->rmIntitule;
    }

    public function setRmIntitule(string $rmIntitule): static
    {
        $this->rmIntitule = $rmIntitule;

        return $this;
    }

    public function getCbrmIntitule()
    {
        return $this->cbrmIntitule;
    }

    public function setCbrmIntitule($cbrmIntitule): static
    {
        $this->cbrmIntitule = $cbrmIntitule;

        return $this;
    }

    public function getRmCode(): ?string
    {
        return $this->rmCode;
    }

    public function setRmCode(?string $rmCode): static
    {
        $this->rmCode = $rmCode;

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
