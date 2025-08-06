<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FBanqueafbRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_BANQUEAFB')]
#[ORM\UniqueConstraint(name: 'IBA_BQNO', columns: ['IB_Sens'])]
#[ORM\Index(name: 'IBA_AFB', columns: ['IB_Sens'])]
#[ORM\Index(name: 'FKIA_F_BANQUEAFB_BQ_No', columns: ['BQ_No'])]
#[ORM\Index(name: 'FKIA_F_BANQUEAFB_IB_AFB', columns: ['IB_Sens'])]
#[ORM\Entity(repositoryClass: FBanqueafbRepository::class)]
class FBanqueafb
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "BQ_No")]
    private ?int $bqNo = null;

    #[ORM\Column(name: "IB_AFB", length: 3)]
    private ?string $ibAfb = null;

    #[ORM\Column(name: "cbIB_AFB", type: Types::BINARY, nullable: true)]
    private $cbibAfb = null;

    #[ORM\Column(name: "IB_Sens", type: Types::SMALLINT)]
    private ?int $ibSens = null;

    #[ORM\Column(name: "BA_NbJoursValeur", type: Types::SMALLINT, nullable: true)]
    private ?int $baNbjoursvaleur = null;

    #[ORM\Column(name: "BA_JourType", type: Types::SMALLINT, nullable: true)]
    private ?int $baJourtype = null;

    #[ORM\Column(name: "BA_EchReport", type: Types::SMALLINT, nullable: true)]
    private ?int $baEchreport = null;

    #[ORM\Column(name: "BA_ExoCommission", type: Types::SMALLINT, nullable: true)]
    private ?int $baExocommission = null;

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

    public function getBqNo(): ?int
    {
        return $this->bqNo;
    }

    public function setBqNo(int $bqNo): static
    {
        $this->bqNo = $bqNo;

        return $this;
    }

    public function getIbAfb(): ?string
    {
        return $this->ibAfb;
    }

    public function setIbAfb(string $ibAfb): static
    {
        $this->ibAfb = $ibAfb;

        return $this;
    }

    public function getCbibAfb()
    {
        return $this->cbibAfb;
    }

    public function setCbibAfb($cbibAfb): static
    {
        $this->cbibAfb = $cbibAfb;

        return $this;
    }

    public function getIbSens(): ?int
    {
        return $this->ibSens;
    }

    public function setIbSens(int $ibSens): static
    {
        $this->ibSens = $ibSens;

        return $this;
    }

    public function getBaNbjoursvaleur(): ?int
    {
        return $this->baNbjoursvaleur;
    }

    public function setBaNbjoursvaleur(?int $baNbjoursvaleur): static
    {
        $this->baNbjoursvaleur = $baNbjoursvaleur;

        return $this;
    }

    public function getBaJourtype(): ?int
    {
        return $this->baJourtype;
    }

    public function setBaJourtype(?int $baJourtype): static
    {
        $this->baJourtype = $baJourtype;

        return $this;
    }

    public function getBaEchreport(): ?int
    {
        return $this->baEchreport;
    }

    public function setBaEchreport(?int $baEchreport): static
    {
        $this->baEchreport = $baEchreport;

        return $this;
    }

    public function getBaExocommission(): ?int
    {
        return $this->baExocommission;
    }

    public function setBaExocommission(?int $baExocommission): static
    {
        $this->baExocommission = $baExocommission;

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
