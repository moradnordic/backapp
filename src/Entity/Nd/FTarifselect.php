<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FTarifselectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TARIFSELECT')]
#[ORM\Index(name: 'ITS_TARIF', columns: ['cbTS_Ref'])]
#[ORM\Index(name: 'ITS_INTERES', columns: ['TF_No'])]
#[ORM\UniqueConstraint(name: 'UKA_F_TARIFSELECT_TS_Ref', columns: ['TS_Ref'])]
#[ORM\Index(name: 'FKIA_F_TARIFSELECT_TF_No', columns: ['TF_No'])]
#[ORM\Entity(repositoryClass: FTarifselectRepository::class)]
class FTarifselect
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "TF_No")]
    private ?int $tfNo = null;

    #[ORM\Column(name: "TS_Interes", type: Types::SMALLINT, nullable: true)]
    private ?int $tsInteres = null;

    #[ORM\Column(name: "TS_Ref", length: 19, nullable: true)]
    private ?string $tsRef = null;

    #[ORM\Column(name: "cbTS_Ref", type: Types::BINARY, nullable: true)]
    private $cbtsRef = null;

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

    public function getTfNo(): ?int
    {
        return $this->tfNo;
    }

    public function setTfNo(int $tfNo): static
    {
        $this->tfNo = $tfNo;

        return $this;
    }

    public function getTsInteres(): ?int
    {
        return $this->tsInteres;
    }

    public function setTsInteres(?int $tsInteres): static
    {
        $this->tsInteres = $tsInteres;

        return $this;
    }

    public function getTsRef(): ?string
    {
        return $this->tsRef;
    }

    public function setTsRef(?string $tsRef): static
    {
        $this->tsRef = $tsRef;

        return $this;
    }

    public function getCbtsRef()
    {
        return $this->cbtsRef;
    }

    public function setCbtsRef($cbtsRef): static
    {
        $this->cbtsRef = $cbtsRef;

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
