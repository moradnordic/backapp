<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEcritureaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ECRITUREA')]
#[ORM\UniqueConstraint(name: 'IEA_LIGNE', columns: ['EA_Ligne'])]
#[ORM\Index(name: 'IEA_CANUM', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'FKIA_F_ECRITUREA_EC_No', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_ECRITUREA_CA_Num', columns: ['CA_Num'])]
#[ORM\Entity(repositoryClass: FEcritureaRepository::class)]
class FEcriturea
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "EA_Ligne", type: Types::SMALLINT, nullable: true)]
    private ?int $eaLigne = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "EA_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eaMontant = null;

    #[ORM\Column(name: "EA_Quantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eaQuantite = null;

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

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getEaLigne(): ?int
    {
        return $this->eaLigne;
    }

    public function setEaLigne(?int $eaLigne): static
    {
        $this->eaLigne = $eaLigne;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getCbcaNum()
    {
        return $this->cbcaNum;
    }

    public function setCbcaNum($cbcaNum): static
    {
        $this->cbcaNum = $cbcaNum;

        return $this;
    }

    public function getEaMontant(): ?string
    {
        return $this->eaMontant;
    }

    public function setEaMontant(?string $eaMontant): static
    {
        $this->eaMontant = $eaMontant;

        return $this;
    }

    public function getEaQuantite(): ?string
    {
        return $this->eaQuantite;
    }

    public function setEaQuantite(?string $eaQuantite): static
    {
        $this->eaQuantite = $eaQuantite;

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
