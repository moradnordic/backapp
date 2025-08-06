<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCompterRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTER')]
#[ORM\UniqueConstraint(name: 'ICR_NUM', columns: ['cbCR_Num'])]
#[ORM\Index(name: 'ICR_CLASS', columns: ['CR_Type'])]
#[ORM\Index(name: 'ICR_TYPE', columns: ['cbCR_Num'])]
#[ORM\UniqueConstraint(name: 'UKA_F_COMPTER_CR_Num', columns: ['CR_Num'])]
#[ORM\Entity(repositoryClass: FCompterRepository::class)]
class FCompter
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CR_Num", length: 13)]
    private ?string $crNum = null;

    #[ORM\Column(name: "cbCR_Num", type: Types::BINARY, nullable: true)]
    private $cbcrNum = null;

    #[ORM\Column(name: "CR_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $crType = null;

    #[ORM\Column(name: "CR_Intitule", length: 35, nullable: true)]
    private ?string $crIntitule = null;

    #[ORM\Column(name: "CR_Classement", length: 17, nullable: true)]
    private ?string $crClassement = null;

    #[ORM\Column(name: "cbCR_Classement", type: Types::BINARY, nullable: true)]
    private $cbcrClassement = null;

    #[ORM\Column(name: "CR_Saut", type: Types::SMALLINT, nullable: true)]
    private ?int $crSaut = null;

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

    public function getCrNum(): ?string
    {
        return $this->crNum;
    }

    public function setCrNum(string $crNum): static
    {
        $this->crNum = $crNum;

        return $this;
    }

    public function getCbcrNum()
    {
        return $this->cbcrNum;
    }

    public function setCbcrNum($cbcrNum): static
    {
        $this->cbcrNum = $cbcrNum;

        return $this;
    }

    public function getCrType(): ?int
    {
        return $this->crType;
    }

    public function setCrType(?int $crType): static
    {
        $this->crType = $crType;

        return $this;
    }

    public function getCrIntitule(): ?string
    {
        return $this->crIntitule;
    }

    public function setCrIntitule(?string $crIntitule): static
    {
        $this->crIntitule = $crIntitule;

        return $this;
    }

    public function getCrClassement(): ?string
    {
        return $this->crClassement;
    }

    public function setCrClassement(?string $crClassement): static
    {
        $this->crClassement = $crClassement;

        return $this;
    }

    public function getCbcrClassement()
    {
        return $this->cbcrClassement;
    }

    public function setCbcrClassement($cbcrClassement): static
    {
        $this->cbcrClassement = $cbcrClassement;

        return $this;
    }

    public function getCrSaut(): ?int
    {
        return $this->crSaut;
    }

    public function setCrSaut(?int $crSaut): static
    {
        $this->crSaut = $crSaut;

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
