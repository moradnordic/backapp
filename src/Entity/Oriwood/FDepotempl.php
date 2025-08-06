<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FDepotemplRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DEPOTEMPL')]
#[ORM\UniqueConstraint(name: 'IDP_NO', columns: ['DP_No'])]
#[ORM\UniqueConstraint(name: 'IDP_CODE', columns: ['cbDP_Code'])]
#[ORM\Index(name: 'IDP_TYPE', columns: ['cbDP_Code'])]
#[ORM\Index(name: 'IDP_DEPOT', columns: ['DP_No'])]
#[ORM\UniqueConstraint(name: 'UKA_F_DEPOTEMPL_DENO_DPNO', columns: ['DP_No'])]
#[ORM\Index(name: 'FKIA_F_DEPOTEMPL_DE_No', columns: ['DE_No'])]
#[ORM\Entity(repositoryClass: FDepotemplRepository::class)]
class FDepotempl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "DP_No", nullable: true)]
    private ?int $dpNo = null;

    #[ORM\Column(name: "DP_Code", length: 13, nullable: true)]
    private ?string $dpCode = null;

    #[ORM\Column(name: "cbDP_Code", type: Types::BINARY, nullable: true)]
    private $cbdpCode = null;

    #[ORM\Column(name: "DP_Intitule", length: 35, nullable: true)]
    private ?string $dpIntitule = null;

    #[ORM\Column(name: "DP_Zone", type: Types::SMALLINT, nullable: true)]
    private ?int $dpZone = null;

    #[ORM\Column(name: "DP_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $dpType = null;

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

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getDpNo(): ?int
    {
        return $this->dpNo;
    }

    public function setDpNo(?int $dpNo): static
    {
        $this->dpNo = $dpNo;

        return $this;
    }

    public function getDpCode(): ?string
    {
        return $this->dpCode;
    }

    public function setDpCode(?string $dpCode): static
    {
        $this->dpCode = $dpCode;

        return $this;
    }

    public function getCbdpCode()
    {
        return $this->cbdpCode;
    }

    public function setCbdpCode($cbdpCode): static
    {
        $this->cbdpCode = $cbdpCode;

        return $this;
    }

    public function getDpIntitule(): ?string
    {
        return $this->dpIntitule;
    }

    public function setDpIntitule(?string $dpIntitule): static
    {
        $this->dpIntitule = $dpIntitule;

        return $this;
    }

    public function getDpZone(): ?int
    {
        return $this->dpZone;
    }

    public function setDpZone(?int $dpZone): static
    {
        $this->dpZone = $dpZone;

        return $this;
    }

    public function getDpType(): ?int
    {
        return $this->dpType;
    }

    public function setDpType(?int $dpType): static
    {
        $this->dpType = $dpType;

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
