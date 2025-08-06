<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEcriturecregulRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ECRITURECREGUL')]
#[ORM\Index(name: 'IEREGUL_ECNO', columns: ['EC_NoRegul'])]
#[ORM\UniqueConstraint(name: 'IEREGUL_ECNOREGUL', columns: ['EC_NoRegul'])]
#[ORM\Index(name: 'FKIA_F_ECRITURECREGUL_EC_No', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_ECRITURECREGUL_EC_NoRegul', columns: ['EC_NoRegul'])]
#[ORM\Entity(repositoryClass: FEcriturecregulRepository::class)]
class FEcriturecregul
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "ER_DateRegul", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $erDateregul = null;

    #[ORM\Column(name: "EC_NoRegul")]
    private ?int $ecNoregul = null;

    #[ORM\Column(name: "ER_StatusRegul", type: Types::SMALLINT, nullable: true)]
    private ?int $erStatusregul = null;

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

    public function getErDateregul(): ?\DateTimeInterface
    {
        return $this->erDateregul;
    }

    public function setErDateregul(?\DateTimeInterface $erDateregul): static
    {
        $this->erDateregul = $erDateregul;

        return $this;
    }

    public function getEcNoregul(): ?int
    {
        return $this->ecNoregul;
    }

    public function setEcNoregul(int $ecNoregul): static
    {
        $this->ecNoregul = $ecNoregul;

        return $this;
    }

    public function getErStatusregul(): ?int
    {
        return $this->erStatusregul;
    }

    public function setErStatusregul(?int $erStatusregul): static
    {
        $this->erStatusregul = $erStatusregul;

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
