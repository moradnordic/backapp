<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FReglechRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_REGLECH')]
#[ORM\Index(name: 'IRC_ENTETE', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'IRC_DRNO', columns: ['RG_No'])]
#[ORM\Index(name: 'IRC_RGNO', columns: ['DR_No'])]
#[ORM\Index(name: 'IRC_ENTETETYPE', columns: ['cbDO_Piece'])]
#[ORM\Index(name: 'FKIA_F_REGLECH_RG_No', columns: ['RG_No'])]
#[ORM\Index(name: 'FKIA_F_REGLECH_DR_No', columns: ['DR_No'])]
#[ORM\Entity(repositoryClass: FReglechRepository::class)]
class FReglech
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "RG_No")]
    private ?int $rgNo = null;

    #[ORM\Column(name: "DR_No")]
    private ?int $drNo = null;

    #[ORM\Column(name: "DO_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $doDomaine = null;

    #[ORM\Column(name: "DO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $doType = null;

    #[ORM\Column(name: "DO_Piece", length: 9, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cbDO_Piece", type: Types::BINARY, nullable: true)]
    private $cbdoPiece = null;

    #[ORM\Column(name: "RC_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rcMontant = null;

    #[ORM\Column(name: "RG_TypeReg", type: Types::SMALLINT, nullable: true)]
    private ?int $rgTypereg = null;

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

    public function getRgNo(): ?int
    {
        return $this->rgNo;
    }

    public function setRgNo(int $rgNo): static
    {
        $this->rgNo = $rgNo;

        return $this;
    }

    public function getDrNo(): ?int
    {
        return $this->drNo;
    }

    public function setDrNo(int $drNo): static
    {
        $this->drNo = $drNo;

        return $this;
    }

    public function getDoDomaine(): ?int
    {
        return $this->doDomaine;
    }

    public function setDoDomaine(?int $doDomaine): static
    {
        $this->doDomaine = $doDomaine;

        return $this;
    }

    public function getDoType(): ?int
    {
        return $this->doType;
    }

    public function setDoType(?int $doType): static
    {
        $this->doType = $doType;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getCbdoPiece()
    {
        return $this->cbdoPiece;
    }

    public function setCbdoPiece($cbdoPiece): static
    {
        $this->cbdoPiece = $cbdoPiece;

        return $this;
    }

    public function getRcMontant(): ?string
    {
        return $this->rcMontant;
    }

    public function setRcMontant(?string $rcMontant): static
    {
        $this->rcMontant = $rcMontant;

        return $this;
    }

    public function getRgTypereg(): ?int
    {
        return $this->rgTypereg;
    }

    public function setRgTypereg(?int $rgTypereg): static
    {
        $this->rgTypereg = $rgTypereg;

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
