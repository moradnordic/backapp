<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEmodeleaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EMODELEA')]
#[ORM\UniqueConstraint(name: 'IEA_DATE', columns: ['EA_Date'])]
#[ORM\Index(name: 'FKIA_F_EMODELEA_MA_No', columns: ['MA_No'])]
#[ORM\Entity(repositoryClass: FEmodeleaRepository::class)]
class FEmodelea
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "MA_No")]
    private ?int $maNo = null;

    #[ORM\Column(name: "EA_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eaDate = null;

    #[ORM\Column(name: "EA_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eaMontant = null;

    #[ORM\Column(name: "EA_Generation", type: Types::SMALLINT, nullable: true)]
    private ?int $eaGeneration = null;

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

    public function getMaNo(): ?int
    {
        return $this->maNo;
    }

    public function setMaNo(int $maNo): static
    {
        $this->maNo = $maNo;

        return $this;
    }

    public function getEaDate(): ?\DateTimeInterface
    {
        return $this->eaDate;
    }

    public function setEaDate(?\DateTimeInterface $eaDate): static
    {
        $this->eaDate = $eaDate;

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

    public function getEaGeneration(): ?int
    {
        return $this->eaGeneration;
    }

    public function setEaGeneration(?int $eaGeneration): static
    {
        $this->eaGeneration = $eaGeneration;

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
