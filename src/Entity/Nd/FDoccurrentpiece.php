<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDoccurrentpieceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCCURRENTPIECE')]
#[ORM\UniqueConstraint(name: 'IDC_DOCUMENT', columns: ['DC_Souche'])]
#[ORM\Entity(repositoryClass: FDoccurrentpieceRepository::class)]
class FDoccurrentpiece
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DC_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $dcDomaine = null;

    #[ORM\Column(name: "DC_IdCol", type: Types::SMALLINT, nullable: true)]
    private ?int $dcIdcol = null;

    #[ORM\Column(name: "DC_Souche", type: Types::SMALLINT, nullable: true)]
    private ?int $dcSouche = null;

    #[ORM\Column(name: "DC_Piece", length: 9, nullable: true)]
    private ?string $dcPiece = null;

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

    public function getDcDomaine(): ?int
    {
        return $this->dcDomaine;
    }

    public function setDcDomaine(?int $dcDomaine): static
    {
        $this->dcDomaine = $dcDomaine;

        return $this;
    }

    public function getDcIdcol(): ?int
    {
        return $this->dcIdcol;
    }

    public function setDcIdcol(?int $dcIdcol): static
    {
        $this->dcIdcol = $dcIdcol;

        return $this;
    }

    public function getDcSouche(): ?int
    {
        return $this->dcSouche;
    }

    public function setDcSouche(?int $dcSouche): static
    {
        $this->dcSouche = $dcSouche;

        return $this;
    }

    public function getDcPiece(): ?string
    {
        return $this->dcPiece;
    }

    public function setDcPiece(?string $dcPiece): static
    {
        $this->dcPiece = $dcPiece;

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
