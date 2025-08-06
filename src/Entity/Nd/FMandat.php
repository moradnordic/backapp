<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FMandatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_MANDAT')]
#[ORM\UniqueConstraint(name: 'IMD_NO', columns: ['MD_No'])]
#[ORM\UniqueConstraint(name: 'IMD_REFERENCE', columns: ['cbMD_Reference'])]
#[ORM\Index(name: 'IMD_NUM', columns: ['MD_No'])]
#[ORM\Index(name: 'FKIA_F_MANDAT_BT_Num', columns: ['BT_Num'])]
#[ORM\Entity(repositoryClass: FMandatRepository::class)]
class FMandat
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "BT_Num", type: Types::SMALLINT)]
    private ?int $btNum = null;

    #[ORM\Column(name: "MD_No")]
    private ?int $mdNo = null;

    #[ORM\Column(name: "MD_Reference", length: 35, nullable: true)]
    private ?string $mdReference = null;

    #[ORM\Column(name: "cbMD_Reference", type: Types::BINARY, nullable: true)]
    private $cbmdReference = null;

    #[ORM\Column(name: "MD_Intitule", length: 35, nullable: true)]
    private ?string $mdIntitule = null;

    #[ORM\Column(name: "MD_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $mdDate = null;

    #[ORM\Column(name: "MD_TypePaiement", type: Types::SMALLINT, nullable: true)]
    private ?int $mdTypepaiement = null;

    #[ORM\Column(name: "MD_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $mdStatut = null;

    #[ORM\Column(name: "MD_Revoque", type: Types::SMALLINT, nullable: true)]
    private ?int $mdRevoque = null;

    #[ORM\Column(name: "MD_B2B", type: Types::SMALLINT, nullable: true)]
    private ?int $mdB2b = null;

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

    public function getBtNum(): ?int
    {
        return $this->btNum;
    }

    public function setBtNum(int $btNum): static
    {
        $this->btNum = $btNum;

        return $this;
    }

    public function getMdNo(): ?int
    {
        return $this->mdNo;
    }

    public function setMdNo(int $mdNo): static
    {
        $this->mdNo = $mdNo;

        return $this;
    }

    public function getMdReference(): ?string
    {
        return $this->mdReference;
    }

    public function setMdReference(?string $mdReference): static
    {
        $this->mdReference = $mdReference;

        return $this;
    }

    public function getCbmdReference()
    {
        return $this->cbmdReference;
    }

    public function setCbmdReference($cbmdReference): static
    {
        $this->cbmdReference = $cbmdReference;

        return $this;
    }

    public function getMdIntitule(): ?string
    {
        return $this->mdIntitule;
    }

    public function setMdIntitule(?string $mdIntitule): static
    {
        $this->mdIntitule = $mdIntitule;

        return $this;
    }

    public function getMdDate(): ?\DateTimeInterface
    {
        return $this->mdDate;
    }

    public function setMdDate(?\DateTimeInterface $mdDate): static
    {
        $this->mdDate = $mdDate;

        return $this;
    }

    public function getMdTypepaiement(): ?int
    {
        return $this->mdTypepaiement;
    }

    public function setMdTypepaiement(?int $mdTypepaiement): static
    {
        $this->mdTypepaiement = $mdTypepaiement;

        return $this;
    }

    public function getMdStatut(): ?int
    {
        return $this->mdStatut;
    }

    public function setMdStatut(?int $mdStatut): static
    {
        $this->mdStatut = $mdStatut;

        return $this;
    }

    public function getMdRevoque(): ?int
    {
        return $this->mdRevoque;
    }

    public function setMdRevoque(?int $mdRevoque): static
    {
        $this->mdRevoque = $mdRevoque;

        return $this;
    }

    public function getMdB2b(): ?int
    {
        return $this->mdB2b;
    }

    public function setMdB2b(?int $mdB2b): static
    {
        $this->mdB2b = $mdB2b;

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
