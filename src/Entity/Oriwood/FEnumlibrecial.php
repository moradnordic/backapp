<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEnumlibrecialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ENUMLIBRECIAL')]
#[ORM\UniqueConstraint(name: 'IELCIAL_INT', columns: ['cbEL_Intitule'])]
#[ORM\Entity(repositoryClass: FEnumlibrecialRepository::class)]
class FEnumlibrecial
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Info", type: Types::SMALLINT, nullable: true)]
    private ?int $nInfo = null;

    #[ORM\Column(name: "N_File", type: Types::SMALLINT, nullable: true)]
    private ?int $nFile = null;

    #[ORM\Column(name: "EL_Intitule", length: 21, nullable: true)]
    private ?string $elIntitule = null;

    #[ORM\Column(name: "cbEL_Intitule", type: Types::BINARY, nullable: true)]
    private $cbelIntitule = null;

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

    public function getNInfo(): ?int
    {
        return $this->nInfo;
    }

    public function setNInfo(?int $nInfo): static
    {
        $this->nInfo = $nInfo;

        return $this;
    }

    public function getNFile(): ?int
    {
        return $this->nFile;
    }

    public function setNFile(?int $nFile): static
    {
        $this->nFile = $nFile;

        return $this;
    }

    public function getElIntitule(): ?string
    {
        return $this->elIntitule;
    }

    public function setElIntitule(?string $elIntitule): static
    {
        $this->elIntitule = $elIntitule;

        return $this;
    }

    public function getCbelIntitule()
    {
        return $this->cbelIntitule;
    }

    public function setCbelIntitule($cbelIntitule): static
    {
        $this->cbelIntitule = $cbelIntitule;

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
