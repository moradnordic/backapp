<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FScenarioRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_SCENARIO')]
#[ORM\UniqueConstraint(name: 'ISC_NO', columns: ['SC_No'])]
#[ORM\UniqueConstraint(name: 'ISC_INTITULE', columns: ['cbSC_Intitule'])]
#[ORM\Entity(repositoryClass: FScenarioRepository::class)]
class FScenario
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "SC_No", nullable: true)]
    private ?int $scNo = null;

    #[ORM\Column(name: "SC_Intitule", length: 35, nullable: true)]
    private ?string $scIntitule = null;

    #[ORM\Column(name: "cbSC_Intitule", type: Types::BINARY, nullable: true)]
    private $cbscIntitule = null;

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

    public function getScNo(): ?int
    {
        return $this->scNo;
    }

    public function setScNo(?int $scNo): static
    {
        $this->scNo = $scNo;

        return $this;
    }

    public function getScIntitule(): ?string
    {
        return $this->scIntitule;
    }

    public function setScIntitule(?string $scIntitule): static
    {
        $this->scIntitule = $scIntitule;

        return $this;
    }

    public function getCbscIntitule()
    {
        return $this->cbscIntitule;
    }

    public function setCbscIntitule($cbscIntitule): static
    {
        $this->cbscIntitule = $cbscIntitule;

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
