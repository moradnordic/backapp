<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FFamclientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_FAMCLIENT')]
#[ORM\UniqueConstraint(name: 'IFC_FAMCLI', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IFC_CLIFAM', columns: ['cbFA_CodeFamille'])]
#[ORM\Entity(repositoryClass: FFamclientRepository::class)]
class FFamclient
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FA_CodeFamille", length: 11)]
    private ?string $faCodefamille = null;

    #[ORM\Column(name: "cbFA_CodeFamille", type: Types::BINARY, nullable: true)]
    private $cbfaCodefamille = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "FC_Remise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fcRemise = null;

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

    public function getFaCodefamille(): ?string
    {
        return $this->faCodefamille;
    }

    public function setFaCodefamille(string $faCodefamille): static
    {
        $this->faCodefamille = $faCodefamille;

        return $this;
    }

    public function getCbfaCodefamille()
    {
        return $this->cbfaCodefamille;
    }

    public function setCbfaCodefamille($cbfaCodefamille): static
    {
        $this->cbfaCodefamille = $cbfaCodefamille;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getFcRemise(): ?string
    {
        return $this->fcRemise;
    }

    public function setFcRemise(?string $fcRemise): static
    {
        $this->fcRemise = $fcRemise;

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
