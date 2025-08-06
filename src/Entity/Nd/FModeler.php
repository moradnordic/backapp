<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FModelerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_MODELER')]
#[ORM\UniqueConstraint(name: 'IMR_INT', columns: ['cbMR_Intitule'])]
#[ORM\UniqueConstraint(name: 'IMR_NO', columns: ['MR_No'])]
#[ORM\Entity(repositoryClass: FModelerRepository::class)]
class FModeler
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "MR_No")]
    private ?int $mrNo = null;

    #[ORM\Column(name: "MR_Intitule", length: 35, nullable: true)]
    private ?string $mrIntitule = null;

    #[ORM\Column(name: "cbMR_Intitule", type: Types::BINARY, nullable: true)]
    private $cbmrIntitule = null;

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

    public function getMrNo(): ?int
    {
        return $this->mrNo;
    }

    public function setMrNo(int $mrNo): static
    {
        $this->mrNo = $mrNo;

        return $this;
    }

    public function getMrIntitule(): ?string
    {
        return $this->mrIntitule;
    }

    public function setMrIntitule(?string $mrIntitule): static
    {
        $this->mrIntitule = $mrIntitule;

        return $this;
    }

    public function getCbmrIntitule()
    {
        return $this->cbmrIntitule;
    }

    public function setCbmrIntitule($cbmrIntitule): static
    {
        $this->cbmrIntitule = $cbmrIntitule;

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
