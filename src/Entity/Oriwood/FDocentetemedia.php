<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FDocentetemediaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCENTETEMEDIA')]
#[ORM\Index(name: 'IDM_FICHIER', columns: ['cbDO_Piece'])]
#[ORM\Entity(repositoryClass: FDocentetemediaRepository::class)]
class FDocentetemedia
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DO_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $doType = null;

    #[ORM\Column(name: "DO_Piece", length: 9, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cbDO_Piece", type: Types::BINARY, nullable: true)]
    private $cbdoPiece = null;

    #[ORM\Column(name: "DM_Intitule", length: 69, nullable: true)]
    private ?string $dmIntitule = null;

    #[ORM\Column(name: "DM_Fichier", length: 259, nullable: true)]
    private ?string $dmFichier = null;

    #[ORM\Column(name: "DM_Transmettre", type: Types::SMALLINT, nullable: true)]
    private ?int $dmTransmettre = null;

    #[ORM\Column(name: "DM_TypeMIME", length: 255, nullable: true)]
    private ?string $dmTypemime = null;

    #[ORM\Column(name: "DM_Origine", length: 255, nullable: true)]
    private ?string $dmOrigine = null;

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

    public function getDmIntitule(): ?string
    {
        return $this->dmIntitule;
    }

    public function setDmIntitule(?string $dmIntitule): static
    {
        $this->dmIntitule = $dmIntitule;

        return $this;
    }

    public function getDmFichier(): ?string
    {
        return $this->dmFichier;
    }

    public function setDmFichier(?string $dmFichier): static
    {
        $this->dmFichier = $dmFichier;

        return $this;
    }

    public function getDmTransmettre(): ?int
    {
        return $this->dmTransmettre;
    }

    public function setDmTransmettre(?int $dmTransmettre): static
    {
        $this->dmTransmettre = $dmTransmettre;

        return $this;
    }

    public function getDmTypemime(): ?string
    {
        return $this->dmTypemime;
    }

    public function setDmTypemime(?string $dmTypemime): static
    {
        $this->dmTypemime = $dmTypemime;

        return $this;
    }

    public function getDmOrigine(): ?string
    {
        return $this->dmOrigine;
    }

    public function setDmOrigine(?string $dmOrigine): static
    {
        $this->dmOrigine = $dmOrigine;

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
