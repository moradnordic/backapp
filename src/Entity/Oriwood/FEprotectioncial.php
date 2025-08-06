<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEprotectioncialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EPROTECTIONCIAL')]
#[ORM\UniqueConstraint(name: 'IEPROTCIAL_CMD', columns: ['EPROT_Cmd'])]
#[ORM\Index(name: 'FKIA_F_EPROTECTIONCIAL_PROT_No', columns: ['PROT_No'])]
#[ORM\Entity(repositoryClass: FEprotectioncialRepository::class)]
class FEprotectioncial
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PROT_No")]
    private ?int $protNo = null;

    #[ORM\Column(name: "EPROT_Cmd", nullable: true)]
    private ?int $eprotCmd = null;

    #[ORM\Column(name: "EPROT_Right", type: Types::SMALLINT, nullable: true)]
    private ?int $eprotRight = null;

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

    public function getProtNo(): ?int
    {
        return $this->protNo;
    }

    public function setProtNo(int $protNo): static
    {
        $this->protNo = $protNo;

        return $this;
    }

    public function getEprotCmd(): ?int
    {
        return $this->eprotCmd;
    }

    public function setEprotCmd(?int $eprotCmd): static
    {
        $this->eprotCmd = $eprotCmd;

        return $this;
    }

    public function getEprotRight(): ?int
    {
        return $this->eprotRight;
    }

    public function setEprotRight(?int $eprotRight): static
    {
        $this->eprotRight = $eprotRight;

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
