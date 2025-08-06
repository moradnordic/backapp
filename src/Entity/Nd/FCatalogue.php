<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FCatalogueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CATALOGUE')]
#[ORM\UniqueConstraint(name: 'ICL_NO', columns: ['CL_No'])]
#[ORM\UniqueConstraint(name: 'ICL_PARENTINTIT', columns: ['cbCL_Intitule'])]
#[ORM\Index(name: 'ICL_PARENTNO', columns: ['CL_No'])]
#[ORM\Index(name: 'ICL_NIVEAU', columns: ['cbCL_Intitule'])]
#[ORM\Index(name: 'FKIA_F_CATALOGUE_CL_NoParent', columns: ['cbCL_NoParent'])]
#[ORM\Entity(repositoryClass: FCatalogueRepository::class)]
class FCatalogue
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CL_No", nullable: true)]
    private ?int $clNo = null;

    #[ORM\Column(name: "CL_Intitule", length: 35)]
    private ?string $clIntitule = null;

    #[ORM\Column(name: "cbCL_Intitule", type: Types::BINARY, nullable: true)]
    private $cbclIntitule = null;

    #[ORM\Column(name: "CL_Code", length: 3, nullable: true)]
    private ?string $clCode = null;

    #[ORM\Column(name: "CL_Stock", type: Types::SMALLINT, nullable: true)]
    private ?int $clStock = null;

    #[ORM\Column(name: "CL_NoParent", nullable: true)]
    private ?int $clNoparent = null;

    #[ORM\Column(name: "cbCL_NoParent", nullable: true)]
    private ?int $cbclNoparent = null;

    #[ORM\Column(name: "CL_Niveau", type: Types::SMALLINT, nullable: true)]
    private ?int $clNiveau = null;

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

    public function getClNo(): ?int
    {
        return $this->clNo;
    }

    public function setClNo(?int $clNo): static
    {
        $this->clNo = $clNo;

        return $this;
    }

    public function getClIntitule(): ?string
    {
        return $this->clIntitule;
    }

    public function setClIntitule(string $clIntitule): static
    {
        $this->clIntitule = $clIntitule;

        return $this;
    }

    public function getCbclIntitule()
    {
        return $this->cbclIntitule;
    }

    public function setCbclIntitule($cbclIntitule): static
    {
        $this->cbclIntitule = $cbclIntitule;

        return $this;
    }

    public function getClCode(): ?string
    {
        return $this->clCode;
    }

    public function setClCode(?string $clCode): static
    {
        $this->clCode = $clCode;

        return $this;
    }

    public function getClStock(): ?int
    {
        return $this->clStock;
    }

    public function setClStock(?int $clStock): static
    {
        $this->clStock = $clStock;

        return $this;
    }

    public function getClNoparent(): ?int
    {
        return $this->clNoparent;
    }

    public function setClNoparent(?int $clNoparent): static
    {
        $this->clNoparent = $clNoparent;

        return $this;
    }

    public function getCbclNoparent(): ?int
    {
        return $this->cbclNoparent;
    }

    public function setCbclNoparent(?int $cbclNoparent): static
    {
        $this->cbclNoparent = $cbclNoparent;

        return $this;
    }

    public function getClNiveau(): ?int
    {
        return $this->clNiveau;
    }

    public function setClNiveau(?int $clNiveau): static
    {
        $this->clNiveau = $clNiveau;

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
