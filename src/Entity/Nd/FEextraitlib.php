<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEextraitlibRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EEXTRAITLIB')]
#[ORM\UniqueConstraint(name: 'IEL_EXNO', columns: ['EL_Ligne'])]
#[ORM\Index(name: 'FKIA_F_EEXTRAITLIB_EE_Ligne', columns: ['EE_Ligne'])]
#[ORM\Entity(repositoryClass: FEextraitlibRepository::class)]
class FEextraitlib
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EX_No")]
    private ?int $exNo = null;

    #[ORM\Column(name: "EE_Ligne", type: Types::SMALLINT)]
    private ?int $eeLigne = null;

    #[ORM\Column(name: "EL_Ligne", type: Types::SMALLINT, nullable: true)]
    private ?int $elLigne = null;

    #[ORM\Column(name: "EL_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $elType = null;

    #[ORM\Column(name: "EL_Intitule", length: 83, nullable: true)]
    private ?string $elIntitule = null;

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

    public function getElLigne(): ?int
    {
        return $this->elLigne;
    }

    public function setElLigne(?int $elLigne): static
    {
        $this->elLigne = $elLigne;

        return $this;
    }

    public function getElType(): ?int
    {
        return $this->elType;
    }

    public function setElType(?int $elType): static
    {
        $this->elType = $elType;

        return $this;
    }

    public function getElIntitule(): ?string
    {
        return $this->elIntitule;
    }

    public function setElIntitule(?string $elIntitule): static
    {
        $this->elIntitule = $elIntitule;

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
