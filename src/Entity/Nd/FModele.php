<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FModeleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_MODELE')]
#[ORM\UniqueConstraint(name: 'IMO_NO', columns: ['MO_No'])]
#[ORM\UniqueConstraint(name: 'IMO_INTITULE', columns: ['cbMO_Intitule'])]
#[ORM\Entity(repositoryClass: FModeleRepository::class)]
class FModele
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "MO_No", nullable: true)]
    private ?int $moNo = null;

    #[ORM\Column(name: "MO_Intitule", length: 35, nullable: true)]
    private ?string $moIntitule = null;

    #[ORM\Column(name: "cbMO_Intitule", type: Types::BINARY, nullable: true)]
    private $cbmoIntitule = null;

    #[ORM\Column(name: "MO_Calcul", length: -1, nullable: true)]
    private ?string $moCalcul = null;

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

    public function getMoNo(): ?int
    {
        return $this->moNo;
    }

    public function setMoNo(?int $moNo): static
    {
        $this->moNo = $moNo;

        return $this;
    }

    public function getMoIntitule(): ?string
    {
        return $this->moIntitule;
    }

    public function setMoIntitule(?string $moIntitule): static
    {
        $this->moIntitule = $moIntitule;

        return $this;
    }

    public function getCbmoIntitule()
    {
        return $this->cbmoIntitule;
    }

    public function setCbmoIntitule($cbmoIntitule): static
    {
        $this->cbmoIntitule = $cbmoIntitule;

        return $this;
    }

    public function getMoCalcul(): ?string
    {
        return $this->moCalcul;
    }

    public function setMoCalcul(?string $moCalcul): static
    {
        $this->moCalcul = $moCalcul;

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
