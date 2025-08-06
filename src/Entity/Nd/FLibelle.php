<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FLibelleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_LIBELLE')]
#[ORM\UniqueConstraint(name: 'ILB_RACC', columns: ['cbLB_Raccourci'])]
#[ORM\Index(name: 'ILB_INT', columns: ['cbLB_Intitule'])]
#[ORM\Entity(repositoryClass: FLibelleRepository::class)]
class FLibelle
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "LB_Intitule", length: 35, nullable: true)]
    private ?string $lbIntitule = null;

    #[ORM\Column(name: "cbLB_Intitule", type: Types::BINARY, nullable: true)]
    private $cblbIntitule = null;

    #[ORM\Column(name: "LB_Raccourci", length: 7, nullable: true)]
    private ?string $lbRaccourci = null;

    #[ORM\Column(name: "cbLB_Raccourci", type: Types::BINARY, nullable: true)]
    private $cblbRaccourci = null;

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

    public function getLbIntitule(): ?string
    {
        return $this->lbIntitule;
    }

    public function setLbIntitule(?string $lbIntitule): static
    {
        $this->lbIntitule = $lbIntitule;

        return $this;
    }

    public function getCblbIntitule()
    {
        return $this->cblbIntitule;
    }

    public function setCblbIntitule($cblbIntitule): static
    {
        $this->cblbIntitule = $cblbIntitule;

        return $this;
    }

    public function getLbRaccourci(): ?string
    {
        return $this->lbRaccourci;
    }

    public function setLbRaccourci(?string $lbRaccourci): static
    {
        $this->lbRaccourci = $lbRaccourci;

        return $this;
    }

    public function getCblbRaccourci()
    {
        return $this->cblbRaccourci;
    }

    public function setCblbRaccourci($cblbRaccourci): static
    {
        $this->cblbRaccourci = $cblbRaccourci;

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
