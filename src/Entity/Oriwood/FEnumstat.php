<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEnumstatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ENUMSTAT')]
#[ORM\UniqueConstraint(name: 'IES_INT', columns: ['cbES_Intitule'])]
#[ORM\Entity(repositoryClass: FEnumstatRepository::class)]
class FEnumstat
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Statistique", type: Types::SMALLINT, nullable: true)]
    private ?int $nStatistique = null;

    #[ORM\Column(name: "ES_Intitule", length: 21, nullable: true)]
    private ?string $esIntitule = null;

    #[ORM\Column(name: "cbES_Intitule", type: Types::BINARY, nullable: true)]
    private $cbesIntitule = null;

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

    public function getNStatistique(): ?int
    {
        return $this->nStatistique;
    }

    public function setNStatistique(?int $nStatistique): static
    {
        $this->nStatistique = $nStatistique;

        return $this;
    }

    public function getEsIntitule(): ?string
    {
        return $this->esIntitule;
    }

    public function setEsIntitule(?string $esIntitule): static
    {
        $this->esIntitule = $esIntitule;

        return $this;
    }

    public function getCbesIntitule()
    {
        return $this->cbesIntitule;
    }

    public function setCbesIntitule($cbesIntitule): static
    {
        $this->cbesIntitule = $cbesIntitule;

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
