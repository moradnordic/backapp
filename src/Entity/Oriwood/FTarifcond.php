<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FTarifcondRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TARIFCOND')]
#[ORM\Index(name: 'ITC_CLFO', columns: ['CO_No'])]
#[ORM\UniqueConstraint(name: 'UKA_F_TARIFCOND_TC_RefCF', columns: ['CO_No'])]
#[ORM\Index(name: 'FKIA_F_TARIFCOND_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FTarifcondRepository::class)]
class FTarifcond
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "TC_RefCF", length: 17, nullable: true)]
    private ?string $tcRefcf = null;

    #[ORM\Column(name: "cbTC_RefCF", type: Types::BINARY, nullable: true)]
    private $cbtcRefcf = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "TC_Prix", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tcPrix = null;

    #[ORM\Column(name: "TC_PrixNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tcPrixnouv = null;

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

    public function getTcRefcf(): ?string
    {
        return $this->tcRefcf;
    }

    public function setTcRefcf(?string $tcRefcf): static
    {
        $this->tcRefcf = $tcRefcf;

        return $this;
    }

    public function getCbtcRefcf()
    {
        return $this->cbtcRefcf;
    }

    public function setCbtcRefcf($cbtcRefcf): static
    {
        $this->cbtcRefcf = $cbtcRefcf;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getTcPrix(): ?string
    {
        return $this->tcPrix;
    }

    public function setTcPrix(?string $tcPrix): static
    {
        $this->tcPrix = $tcPrix;

        return $this;
    }

    public function getTcPrixnouv(): ?string
    {
        return $this->tcPrixnouv;
    }

    public function setTcPrixnouv(?string $tcPrixnouv): static
    {
        $this->tcPrixnouv = $tcPrixnouv;

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
