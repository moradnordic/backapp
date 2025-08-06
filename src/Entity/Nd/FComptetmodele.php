<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FComptetmodeleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTETMODELE')]
#[ORM\Index(name: 'ICM_CREATOR', columns: ['CM_Type'])]
#[ORM\Index(name: 'FKIA_F_COMPTETMODELE_CT_Num', columns: ['CT_Num'])]
#[ORM\Entity(repositoryClass: FComptetmodeleRepository::class)]
class FComptetmodele
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "CM_Creator", nullable: true)]
    private ?int $cmCreator = null;

    #[ORM\Column(name: "CM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $cmType = null;

    #[ORM\Column(name: "CM_Modele", length: 259, nullable: true)]
    private ?string $cmModele = null;

    #[ORM\Column(name: "CM_NbExemplaire", type: Types::SMALLINT, nullable: true)]
    private ?int $cmNbexemplaire = null;

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

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getCmCreator(): ?int
    {
        return $this->cmCreator;
    }

    public function setCmCreator(?int $cmCreator): static
    {
        $this->cmCreator = $cmCreator;

        return $this;
    }

    public function getCmType(): ?int
    {
        return $this->cmType;
    }

    public function setCmType(?int $cmType): static
    {
        $this->cmType = $cmType;

        return $this;
    }

    public function getCmModele(): ?string
    {
        return $this->cmModele;
    }

    public function setCmModele(?string $cmModele): static
    {
        $this->cmModele = $cmModele;

        return $this;
    }

    public function getCmNbexemplaire(): ?int
    {
        return $this->cmNbexemplaire;
    }

    public function setCmNbexemplaire(?int $cmNbexemplaire): static
    {
        $this->cmNbexemplaire = $cmNbexemplaire;

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
