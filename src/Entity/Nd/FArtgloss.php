<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FArtglossRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTGLOSS')]
#[ORM\UniqueConstraint(name: 'IAGL_REF', columns: ['GL_No'])]
#[ORM\Index(name: 'IAGL_NO', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'IAGL_NUM', columns: ['AGL_Num'])]
#[ORM\Index(name: 'FKIA_F_ARTGLOSS_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ARTGLOSS_GL_No', columns: ['GL_No'])]
#[ORM\Entity(repositoryClass: FArtglossRepository::class)]
class FArtgloss
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "GL_No")]
    private ?int $glNo = null;

    #[ORM\Column(name: "AGL_Num", type: Types::SMALLINT, nullable: true)]
    private ?int $aglNum = null;

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

    public function getGlNo(): ?int
    {
        return $this->glNo;
    }

    public function setGlNo(int $glNo): static
    {
        $this->glNo = $glNo;

        return $this;
    }

    public function getAglNum(): ?int
    {
        return $this->aglNum;
    }

    public function setAglNum(?int $aglNum): static
    {
        $this->aglNum = $aglNum;

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
