<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEcalendrierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ECALENDRIER')]
#[ORM\UniqueConstraint(name: 'IECAL_DATE', columns: ['ECAL_Date'])]
#[ORM\Index(name: 'FKIA_F_ECALENDRIER_CAL_No', columns: ['CAL_No'])]
#[ORM\Entity(repositoryClass: FEcalendrierRepository::class)]
class FEcalendrier
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CAL_No", nullable: true)]
    private ?int $calNo = null;

    #[ORM\Column(name: "ECAL_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ecalDate = null;

    #[ORM\Column(name: "ECAL_Motif", length: 35, nullable: true)]
    private ?string $ecalMotif = null;

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

    public function getCalNo(): ?int
    {
        return $this->calNo;
    }

    public function setCalNo(?int $calNo): static
    {
        $this->calNo = $calNo;

        return $this;
    }

    public function getEcalDate(): ?\DateTimeInterface
    {
        return $this->ecalDate;
    }

    public function setEcalDate(?\DateTimeInterface $ecalDate): static
    {
        $this->ecalDate = $ecalDate;

        return $this;
    }

    public function getEcalMotif(): ?string
    {
        return $this->ecalMotif;
    }

    public function setEcalMotif(?string $ecalMotif): static
    {
        $this->ecalMotif = $ecalMotif;

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
