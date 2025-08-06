<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FAuditcialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_AUDITCIAL')]
#[ORM\Index(name: 'IHashOrder_F_AUDITCIAL', columns: ['cbHashOrder'])]
#[ORM\UniqueConstraint(name: 'IADTCIAL_NO', columns: ['ADT_No'])]
#[ORM\Index(name: 'IADTCIAL_DATE', columns: ['ADT_Time'])]
#[ORM\Index(name: 'IADTCIAL_TYPEDATE', columns: ['ADT_Time'])]
#[ORM\Entity(repositoryClass: FAuditcialRepository::class)]
class FAuditcial
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "ADT_No", nullable: true)]
    private ?int $adtNo = null;

    #[ORM\Column(name: "ADT_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $adtDate = null;

    #[ORM\Column(name: "ADT_Time", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $adtTime = null;

    #[ORM\Column(name: "ADT_User", length: 35, nullable: true)]
    private ?string $adtUser = null;

    #[ORM\Column(name: "ADT_Description", length: 255, nullable: true)]
    private ?string $adtDescription = null;

    #[ORM\Column(name: "ADT_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $adtType = null;

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

    #[ORM\Column(name: "cbHash", type: Types::BINARY, nullable: true)]
    private $cbhash = null;

    #[ORM\Column(name: "cbHashVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $cbhashversion = 1;

    #[ORM\Column(name: "cbHashDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbhashdate = null;

    #[ORM\Column(name: "cbHashOrder", nullable: true)]
    private ?int $cbhashorder = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAdtNo(): ?int
    {
        return $this->adtNo;
    }

    public function setAdtNo(?int $adtNo): static
    {
        $this->adtNo = $adtNo;

        return $this;
    }

    public function getAdtDate(): ?\DateTimeInterface
    {
        return $this->adtDate;
    }

    public function setAdtDate(?\DateTimeInterface $adtDate): static
    {
        $this->adtDate = $adtDate;

        return $this;
    }

    public function getAdtTime(): ?string
    {
        return $this->adtTime;
    }

    public function setAdtTime(?string $adtTime): static
    {
        $this->adtTime = $adtTime;

        return $this;
    }

    public function getAdtUser(): ?string
    {
        return $this->adtUser;
    }

    public function setAdtUser(?string $adtUser): static
    {
        $this->adtUser = $adtUser;

        return $this;
    }

    public function getAdtDescription(): ?string
    {
        return $this->adtDescription;
    }

    public function setAdtDescription(?string $adtDescription): static
    {
        $this->adtDescription = $adtDescription;

        return $this;
    }

    public function getAdtType(): ?int
    {
        return $this->adtType;
    }

    public function setAdtType(?int $adtType): static
    {
        $this->adtType = $adtType;

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

    public function getCbhash()
    {
        return $this->cbhash;
    }

    public function setCbhash($cbhash): static
    {
        $this->cbhash = $cbhash;

        return $this;
    }

    public function getCbhashversion(): ?int
    {
        return $this->cbhashversion;
    }

    public function setCbhashversion(?int $cbhashversion): static
    {
        $this->cbhashversion = $cbhashversion;

        return $this;
    }

    public function getCbhashdate(): ?\DateTimeInterface
    {
        return $this->cbhashdate;
    }

    public function setCbhashdate(?\DateTimeInterface $cbhashdate): static
    {
        $this->cbhashdate = $cbhashdate;

        return $this;
    }

    public function getCbhashorder(): ?int
    {
        return $this->cbhashorder;
    }

    public function setCbhashorder(?int $cbhashorder): static
    {
        $this->cbhashorder = $cbhashorder;

        return $this;
    }
}
