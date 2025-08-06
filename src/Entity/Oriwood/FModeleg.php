<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FModelegRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_MODELEG')]
#[ORM\UniqueConstraint(name: 'IMG_INT', columns: ['cbMG_Intitule'])]
#[ORM\Index(name: 'IMG_TYPE', columns: ['cbMG_Intitule'])]
#[ORM\Index(name: 'IMG_RACC', columns: ['cbMG_Raccourci'])]
#[ORM\UniqueConstraint(name: 'IMG_NO', columns: ['MG_No'])]
#[ORM\Entity(repositoryClass: FModelegRepository::class)]
class FModeleg
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "MG_No")]
    private ?int $mgNo = null;

    #[ORM\Column(name: "MG_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $mgType = null;

    #[ORM\Column(name: "MG_Intitule", length: 35, nullable: true)]
    private ?string $mgIntitule = null;

    #[ORM\Column(name: "cbMG_Intitule", type: Types::BINARY, nullable: true)]
    private $cbmgIntitule = null;

    #[ORM\Column(name: "MG_Raccourci", length: 7, nullable: true)]
    private ?string $mgRaccourci = null;

    #[ORM\Column(name: "cbMG_Raccourci", type: Types::BINARY, nullable: true)]
    private $cbmgRaccourci = null;

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

    public function getMgNo(): ?int
    {
        return $this->mgNo;
    }

    public function setMgNo(int $mgNo): static
    {
        $this->mgNo = $mgNo;

        return $this;
    }

    public function getMgType(): ?int
    {
        return $this->mgType;
    }

    public function setMgType(?int $mgType): static
    {
        $this->mgType = $mgType;

        return $this;
    }

    public function getMgIntitule(): ?string
    {
        return $this->mgIntitule;
    }

    public function setMgIntitule(?string $mgIntitule): static
    {
        $this->mgIntitule = $mgIntitule;

        return $this;
    }

    public function getCbmgIntitule()
    {
        return $this->cbmgIntitule;
    }

    public function setCbmgIntitule($cbmgIntitule): static
    {
        $this->cbmgIntitule = $cbmgIntitule;

        return $this;
    }

    public function getMgRaccourci(): ?string
    {
        return $this->mgRaccourci;
    }

    public function setMgRaccourci(?string $mgRaccourci): static
    {
        $this->mgRaccourci = $mgRaccourci;

        return $this;
    }

    public function getCbmgRaccourci()
    {
        return $this->cbmgRaccourci;
    }

    public function setCbmgRaccourci($cbmgRaccourci): static
    {
        $this->cbmgRaccourci = $cbmgRaccourci;

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
