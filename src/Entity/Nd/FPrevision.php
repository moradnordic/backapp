<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FPrevisionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PREVISION')]
#[ORM\UniqueConstraint(name: 'IPV_DEPOTDATE', columns: ['PV_Date'])]
#[ORM\Index(name: 'IPV_DATEART', columns: ['PV_Date'])]
#[ORM\Index(name: 'IPV_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'IPV_DATE', columns: ['PV_Date'])]
#[ORM\Index(name: 'FKIA_F_PREVISION_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_PREVISION_DE_No', columns: ['DE_No'])]
#[ORM\Entity(repositoryClass: FPrevisionRepository::class)]
class FPrevision
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AG_No1Comp", nullable: true)]
    private ?int $agNo1comp = null;

    #[ORM\Column(name: "AG_No2Comp", nullable: true)]
    private ?int $agNo2comp = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "PV_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $pvQte = null;

    #[ORM\Column(name: "PV_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pvDate = null;

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

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getAgNo1comp(): ?int
    {
        return $this->agNo1comp;
    }

    public function setAgNo1comp(?int $agNo1comp): static
    {
        $this->agNo1comp = $agNo1comp;

        return $this;
    }

    public function getAgNo2comp(): ?int
    {
        return $this->agNo2comp;
    }

    public function setAgNo2comp(?int $agNo2comp): static
    {
        $this->agNo2comp = $agNo2comp;

        return $this;
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

    public function getPvQte(): ?string
    {
        return $this->pvQte;
    }

    public function setPvQte(?string $pvQte): static
    {
        $this->pvQte = $pvQte;

        return $this;
    }

    public function getPvDate(): ?\DateTimeInterface
    {
        return $this->pvDate;
    }

    public function setPvDate(?\DateTimeInterface $pvDate): static
    {
        $this->pvDate = $pvDate;

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
