<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEnumanalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ENUMANAL')]
#[ORM\UniqueConstraint(name: 'IEA_NUM', columns: ['cbEA_Num'])]
#[ORM\Entity(repositoryClass: FEnumanalRepository::class)]
class FEnumanal
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "EA_Rupture", type: Types::SMALLINT, nullable: true)]
    private ?int $eaRupture = null;

    #[ORM\Column(name: "EA_Num", length: 13, nullable: true)]
    private ?string $eaNum = null;

    #[ORM\Column(name: "cbEA_Num", type: Types::BINARY, nullable: true)]
    private $cbeaNum = null;

    #[ORM\Column(name: "EA_Intitule", length: 21, nullable: true)]
    private ?string $eaIntitule = null;

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

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(?int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getEaRupture(): ?int
    {
        return $this->eaRupture;
    }

    public function setEaRupture(?int $eaRupture): static
    {
        $this->eaRupture = $eaRupture;

        return $this;
    }

    public function getEaNum(): ?string
    {
        return $this->eaNum;
    }

    public function setEaNum(?string $eaNum): static
    {
        $this->eaNum = $eaNum;

        return $this;
    }

    public function getCbeaNum()
    {
        return $this->cbeaNum;
    }

    public function setCbeaNum($cbeaNum): static
    {
        $this->cbeaNum = $cbeaNum;

        return $this;
    }

    public function getEaIntitule(): ?string
    {
        return $this->eaIntitule;
    }

    public function setEaIntitule(?string $eaIntitule): static
    {
        $this->eaIntitule = $eaIntitule;

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
