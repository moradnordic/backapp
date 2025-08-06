<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FAboenteteinfosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ABOENTETEINFOS')]
#[ORM\Index(name: 'IAI_INTITULE', columns: ['cbAI_Intitule'])]
#[ORM\UniqueConstraint(name: 'IAI_CODE', columns: ['cbAI_Code'])]
#[ORM\Index(name: 'FKIA_F_ABOENTETEINFOS_AB_No', columns: ['AB_No'])]
#[ORM\Entity(repositoryClass: FAboenteteinfosRepository::class)]
class FAboenteteinfos
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AB_No")]
    private ?int $abNo = null;

    #[ORM\Column(name: "AI_Code", length: 13)]
    private ?string $aiCode = null;

    #[ORM\Column(name: "cbAI_Code", type: Types::BINARY, nullable: true)]
    private $cbaiCode = null;

    #[ORM\Column(name: "AI_Intitule", length: 35)]
    private ?string $aiIntitule = null;

    #[ORM\Column(name: "cbAI_Intitule", type: Types::BINARY, nullable: true)]
    private $cbaiIntitule = null;

    #[ORM\Column(name: "AI_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $aiType = null;

    #[ORM\Column(name: "AI_Valeur", length: 101, nullable: true)]
    private ?string $aiValeur = null;

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

    public function getAbNo(): ?int
    {
        return $this->abNo;
    }

    public function setAbNo(int $abNo): static
    {
        $this->abNo = $abNo;

        return $this;
    }

    public function getAiCode(): ?string
    {
        return $this->aiCode;
    }

    public function setAiCode(string $aiCode): static
    {
        $this->aiCode = $aiCode;

        return $this;
    }

    public function getCbaiCode()
    {
        return $this->cbaiCode;
    }

    public function setCbaiCode($cbaiCode): static
    {
        $this->cbaiCode = $cbaiCode;

        return $this;
    }

    public function getAiIntitule(): ?string
    {
        return $this->aiIntitule;
    }

    public function setAiIntitule(string $aiIntitule): static
    {
        $this->aiIntitule = $aiIntitule;

        return $this;
    }

    public function getCbaiIntitule()
    {
        return $this->cbaiIntitule;
    }

    public function setCbaiIntitule($cbaiIntitule): static
    {
        $this->cbaiIntitule = $cbaiIntitule;

        return $this;
    }

    public function getAiType(): ?int
    {
        return $this->aiType;
    }

    public function setAiType(?int $aiType): static
    {
        $this->aiType = $aiType;

        return $this;
    }

    public function getAiValeur(): ?string
    {
        return $this->aiValeur;
    }

    public function setAiValeur(?string $aiValeur): static
    {
        $this->aiValeur = $aiValeur;

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
