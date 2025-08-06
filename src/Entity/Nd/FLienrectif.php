<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FLienrectifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_LIENRECTIF')]
#[ORM\Index(name: 'ILR_RECTIFIEE', columns: ['cbLR_Rectificative'])]
#[ORM\Index(name: 'ILR_RECTIFICATIVE', columns: ['cbLR_Rectifiee'])]
#[ORM\Entity(repositoryClass: FLienrectifRepository::class)]
class FLienrectif
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DO_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $doDomaine = null;

    #[ORM\Column(name: "LR_Rectifiee", length: 9, nullable: true)]
    private ?string $lrRectifiee = null;

    #[ORM\Column(name: "cbLR_Rectifiee", type: Types::BINARY, nullable: true)]
    private $cblrRectifiee = null;

    #[ORM\Column(name: "LR_Rectificative", length: 9, nullable: true)]
    private ?string $lrRectificative = null;

    #[ORM\Column(name: "cbLR_Rectificative", type: Types::BINARY, nullable: true)]
    private $cblrRectificative = null;

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

    public function getDoDomaine(): ?int
    {
        return $this->doDomaine;
    }

    public function setDoDomaine(?int $doDomaine): static
    {
        $this->doDomaine = $doDomaine;

        return $this;
    }

    public function getLrRectifiee(): ?string
    {
        return $this->lrRectifiee;
    }

    public function setLrRectifiee(?string $lrRectifiee): static
    {
        $this->lrRectifiee = $lrRectifiee;

        return $this;
    }

    public function getCblrRectifiee()
    {
        return $this->cblrRectifiee;
    }

    public function setCblrRectifiee($cblrRectifiee): static
    {
        $this->cblrRectifiee = $cblrRectifiee;

        return $this;
    }

    public function getLrRectificative(): ?string
    {
        return $this->lrRectificative;
    }

    public function setLrRectificative(?string $lrRectificative): static
    {
        $this->lrRectificative = $lrRectificative;

        return $this;
    }

    public function getCblrRectificative()
    {
        return $this->cblrRectificative;
    }

    public function setCblrRectificative($cblrRectificative): static
    {
        $this->cblrRectificative = $cblrRectificative;

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
