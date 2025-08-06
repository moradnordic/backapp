<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FResscentreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_RESSCENTRE')]
#[ORM\UniqueConstraint(name: 'IRC_RESSOURCE', columns: ['cbRP_CodeCentre'])]
#[ORM\Index(name: 'IRC_CENTRE', columns: ['cbRP_CodeRessource'])]
#[ORM\Index(name: 'FKIA_F_RESSCENTRE_RP_CodeRessource', columns: ['RP_CodeRessource'])]
#[ORM\Index(name: 'FKIA_F_RESSCENTRE_RP_CodeCentre', columns: ['RP_CodeCentre'])]
#[ORM\Entity(repositoryClass: FResscentreRepository::class)]
class FResscentre
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "RP_CodeRessource", length: 11)]
    private ?string $rpCoderessource = null;

    #[ORM\Column(name: "cbRP_CodeRessource", type: Types::BINARY, nullable: true)]
    private $cbrpCoderessource = null;

    #[ORM\Column(name: "RP_CodeCentre", length: 11)]
    private ?string $rpCodecentre = null;

    #[ORM\Column(name: "cbRP_CodeCentre", type: Types::BINARY, nullable: true)]
    private $cbrpCodecentre = null;

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

    public function getRpCoderessource(): ?string
    {
        return $this->rpCoderessource;
    }

    public function setRpCoderessource(string $rpCoderessource): static
    {
        $this->rpCoderessource = $rpCoderessource;

        return $this;
    }

    public function getCbrpCoderessource()
    {
        return $this->cbrpCoderessource;
    }

    public function setCbrpCoderessource($cbrpCoderessource): static
    {
        $this->cbrpCoderessource = $cbrpCoderessource;

        return $this;
    }

    public function getRpCodecentre(): ?string
    {
        return $this->rpCodecentre;
    }

    public function setRpCodecentre(string $rpCodecentre): static
    {
        $this->rpCodecentre = $rpCodecentre;

        return $this;
    }

    public function getCbrpCodecentre()
    {
        return $this->cbrpCodecentre;
    }

    public function setCbrpCodecentre($cbrpCodecentre): static
    {
        $this->cbrpCodecentre = $cbrpCodecentre;

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
