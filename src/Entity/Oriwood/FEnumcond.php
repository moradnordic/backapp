<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEnumcondRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ENUMCOND')]
#[ORM\Index(name: 'IEC_BORNE', columns: ['EC_Quantite'])]
#[ORM\UniqueConstraint(name: 'IEC_ENUMERE', columns: ['EC_Quantite'])]
#[ORM\Entity(repositoryClass: FEnumcondRepository::class)]
class FEnumcond
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EC_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $ecChamp = null;

    #[ORM\Column(name: "EC_Enumere", length: 21, nullable: true)]
    private ?string $ecEnumere = null;

    #[ORM\Column(name: "cbEC_Enumere", type: Types::BINARY, nullable: true)]
    private $cbecEnumere = null;

    #[ORM\Column(name: "EC_Quantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ecQuantite = null;

    #[ORM\Column(name: "EC_EdiCode", length: 3, nullable: true)]
    private ?string $ecEdicode = null;

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

    public function getEcChamp(): ?int
    {
        return $this->ecChamp;
    }

    public function setEcChamp(?int $ecChamp): static
    {
        $this->ecChamp = $ecChamp;

        return $this;
    }

    public function getEcEnumere(): ?string
    {
        return $this->ecEnumere;
    }

    public function setEcEnumere(?string $ecEnumere): static
    {
        $this->ecEnumere = $ecEnumere;

        return $this;
    }

    public function getCbecEnumere()
    {
        return $this->cbecEnumere;
    }

    public function setCbecEnumere($cbecEnumere): static
    {
        $this->cbecEnumere = $cbecEnumere;

        return $this;
    }

    public function getEcQuantite(): ?string
    {
        return $this->ecQuantite;
    }

    public function setEcQuantite(?string $ecQuantite): static
    {
        $this->ecQuantite = $ecQuantite;

        return $this;
    }

    public function getEcEdicode(): ?string
    {
        return $this->ecEdicode;
    }

    public function setEcEdicode(?string $ecEdicode): static
    {
        $this->ecEdicode = $ecEdicode;

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
