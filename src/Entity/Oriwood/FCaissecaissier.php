<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCaissecaissierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CAISSECAISSIER')]
#[ORM\UniqueConstraint(name: 'ICC_CAISSE', columns: ['CO_No'])]
#[ORM\Index(name: 'ICC_CAISSIER', columns: ['CA_No'])]
#[ORM\Index(name: 'FKIA_F_CAISSECAISSIER_CA_No', columns: ['CA_No'])]
#[ORM\Entity(repositoryClass: FCaissecaissierRepository::class)]
class FCaissecaissier
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CA_No")]
    private ?int $caNo = null;

    #[ORM\Column(name: "CO_No")]
    private ?int $coNo = null;

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

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(int $caNo): static
    {
        $this->caNo = $caNo;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(int $coNo): static
    {
        $this->coNo = $coNo;

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
