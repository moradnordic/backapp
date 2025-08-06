<?php

namespace App\Entity\Nd;

use App\Repository\Nd\CbsyslibreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbSysLibre')]
#[ORM\Entity(repositoryClass: CbsyslibreRepository::class)]
class Cbsyslibre
{
    #[ORM\Column(name: "CB_File", length: 128)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbFile = null;

    #[ORM\Column(name: "CB_Name", length: 128)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbName = null;

    #[ORM\Column(name: "CB_Pos", type: Types::SMALLINT)]
    private ?int $cbPos = null;

    #[ORM\Column(name: "CB_Type", type: Types::SMALLINT)]
    private ?int $cbType = null;

    #[ORM\Column(name: "CB_Len", type: Types::SMALLINT)]
    private ?int $cbLen = null;

    #[ORM\Column(name: "CB_Flag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbFlag = null;

    #[ORM\Column(name: "CB_Formule", length: 1024, nullable: true)]
    private ?string $cbFormule = null;

    #[ORM\Column(name: "CB_Creator", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbCreator = null;

    public function getCbFile(): ?string
    {
        return $this->cbFile;
    }

    public function setCbFile(string $cbFile): static
    {
        $this->cbFile = $cbFile;

        return $this;
    }

    public function getCbName(): ?string
    {
        return $this->cbName;
    }

    public function setCbName(string $cbName): static
    {
        $this->cbName = $cbName;

        return $this;
    }

    public function getCbPos(): ?int
    {
        return $this->cbPos;
    }

    public function setCbPos(int $cbPos): static
    {
        $this->cbPos = $cbPos;

        return $this;
    }

    public function getCbType(): ?int
    {
        return $this->cbType;
    }

    public function setCbType(int $cbType): static
    {
        $this->cbType = $cbType;

        return $this;
    }

    public function getCbLen(): ?int
    {
        return $this->cbLen;
    }

    public function setCbLen(int $cbLen): static
    {
        $this->cbLen = $cbLen;

        return $this;
    }

    public function getCbFlag(): ?int
    {
        return $this->cbFlag;
    }

    public function setCbFlag(?int $cbFlag): static
    {
        $this->cbFlag = $cbFlag;

        return $this;
    }

    public function getCbFormule(): ?string
    {
        return $this->cbFormule;
    }

    public function setCbFormule(?string $cbFormule): static
    {
        $this->cbFormule = $cbFormule;

        return $this;
    }

    public function getCbCreator(): ?string
    {
        return $this->cbCreator;
    }

    public function setCbCreator(?string $cbCreator): static
    {
        $this->cbCreator = $cbCreator;

        return $this;
    }
}
