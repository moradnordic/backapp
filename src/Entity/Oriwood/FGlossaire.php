<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FGlossaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_GLOSSAIRE')]
#[ORM\Index(name: 'IGL_INTITULE', columns: ['GL_Domaine'])]
#[ORM\Index(name: 'IGL_DOMAINE', columns: ['cbGL_Intitule'])]
#[ORM\UniqueConstraint(name: 'IGL_NO', columns: ['GL_No'])]
#[ORM\Index(name: 'IGL_RACC', columns: ['cbGL_Raccourci'])]
#[ORM\Entity(repositoryClass: FGlossaireRepository::class)]
class FGlossaire
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "GL_No", nullable: true)]
    private ?int $glNo = null;

    #[ORM\Column(name: "GL_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $glDomaine = null;

    #[ORM\Column(name: "GL_Intitule", length: 35, nullable: true)]
    private ?string $glIntitule = null;

    #[ORM\Column(name: "cbGL_Intitule", type: Types::BINARY, nullable: true)]
    private $cbglIntitule = null;

    #[ORM\Column(name: "GL_Raccourci", length: 7, nullable: true)]
    private ?string $glRaccourci = null;

    #[ORM\Column(name: "cbGL_Raccourci", type: Types::BINARY, nullable: true)]
    private $cbglRaccourci = null;

    #[ORM\Column(name: "GL_PeriodeDeb", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $glPeriodedeb = null;

    #[ORM\Column(name: "GL_PeriodeFin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $glPeriodefin = null;

    #[ORM\Column(name: "GL_Text", length: -1, nullable: true)]
    private ?string $glText = null;

    #[ORM\Column(name: "GL_TextLangue1", length: -1, nullable: true)]
    private ?string $glTextlangue1 = null;

    #[ORM\Column(name: "GL_TextLangue2", length: -1, nullable: true)]
    private ?string $glTextlangue2 = null;

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

    public function getGlNo(): ?int
    {
        return $this->glNo;
    }

    public function setGlNo(?int $glNo): static
    {
        $this->glNo = $glNo;

        return $this;
    }

    public function getGlDomaine(): ?int
    {
        return $this->glDomaine;
    }

    public function setGlDomaine(?int $glDomaine): static
    {
        $this->glDomaine = $glDomaine;

        return $this;
    }

    public function getGlIntitule(): ?string
    {
        return $this->glIntitule;
    }

    public function setGlIntitule(?string $glIntitule): static
    {
        $this->glIntitule = $glIntitule;

        return $this;
    }

    public function getCbglIntitule()
    {
        return $this->cbglIntitule;
    }

    public function setCbglIntitule($cbglIntitule): static
    {
        $this->cbglIntitule = $cbglIntitule;

        return $this;
    }

    public function getGlRaccourci(): ?string
    {
        return $this->glRaccourci;
    }

    public function setGlRaccourci(?string $glRaccourci): static
    {
        $this->glRaccourci = $glRaccourci;

        return $this;
    }

    public function getCbglRaccourci()
    {
        return $this->cbglRaccourci;
    }

    public function setCbglRaccourci($cbglRaccourci): static
    {
        $this->cbglRaccourci = $cbglRaccourci;

        return $this;
    }

    public function getGlPeriodedeb(): ?\DateTimeInterface
    {
        return $this->glPeriodedeb;
    }

    public function setGlPeriodedeb(?\DateTimeInterface $glPeriodedeb): static
    {
        $this->glPeriodedeb = $glPeriodedeb;

        return $this;
    }

    public function getGlPeriodefin(): ?\DateTimeInterface
    {
        return $this->glPeriodefin;
    }

    public function setGlPeriodefin(?\DateTimeInterface $glPeriodefin): static
    {
        $this->glPeriodefin = $glPeriodefin;

        return $this;
    }

    public function getGlText(): ?string
    {
        return $this->glText;
    }

    public function setGlText(?string $glText): static
    {
        $this->glText = $glText;

        return $this;
    }

    public function getGlTextlangue1(): ?string
    {
        return $this->glTextlangue1;
    }

    public function setGlTextlangue1(?string $glTextlangue1): static
    {
        $this->glTextlangue1 = $glTextlangue1;

        return $this;
    }

    public function getGlTextlangue2(): ?string
    {
        return $this->glTextlangue2;
    }

    public function setGlTextlangue2(?string $glTextlangue2): static
    {
        $this->glTextlangue2 = $glTextlangue2;

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
