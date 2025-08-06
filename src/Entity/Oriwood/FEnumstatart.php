<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEnumstatartRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ENUMSTATART')]
#[ORM\UniqueConstraint(name: 'ISA_ENUMERE', columns: ['cbSA_Enumere'])]
#[ORM\Entity(repositoryClass: FEnumstatartRepository::class)]
class FEnumstatart
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "SA_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $saChamp = null;

    #[ORM\Column(name: "SA_Enumere", length: 21)]
    private ?string $saEnumere = null;

    #[ORM\Column(name: "cbSA_Enumere", type: Types::BINARY, nullable: true)]
    private $cbsaEnumere = null;

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

    public function getSaChamp(): ?int
    {
        return $this->saChamp;
    }

    public function setSaChamp(?int $saChamp): static
    {
        $this->saChamp = $saChamp;

        return $this;
    }

    public function getSaEnumere(): ?string
    {
        return $this->saEnumere;
    }

    public function setSaEnumere(string $saEnumere): static
    {
        $this->saEnumere = $saEnumere;

        return $this;
    }

    public function getCbsaEnumere()
    {
        return $this->cbsaEnumere;
    }

    public function setCbsaEnumere($cbsaEnumere): static
    {
        $this->cbsaEnumere = $cbsaEnumere;

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
