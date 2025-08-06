<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FClavierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CLAVIER')]
#[ORM\Index(name: 'ICL_FONCTION', columns: ['CO_No'])]
#[ORM\Index(name: 'ICL_ARTICLE', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'ICL_VENDEUR', columns: ['CO_No'])]
#[ORM\Index(name: 'ICL_RACC', columns: ['CL_Flag'])]
#[ORM\Index(name: 'ICL_FONCAFFIC', columns: ['CO_No'])]
#[ORM\Index(name: 'FKIA_F_CLAVIER_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FClavierRepository::class)]
class FClavier
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Clavier", type: Types::SMALLINT, nullable: true)]
    private ?int $nClavier = null;

    #[ORM\Column(name: "CL_Fonction", type: Types::SMALLINT, nullable: true)]
    private ?int $clFonction = null;

    #[ORM\Column(name: "CL_Interesse", type: Types::SMALLINT, nullable: true)]
    private ?int $clInteresse = null;

    #[ORM\Column(name: "AR_Ref", length: 19, nullable: true)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "CL_Raccourci", type: Types::SMALLINT, nullable: true)]
    private ?int $clRaccourci = null;

    #[ORM\Column(name: "CL_Flag", type: Types::SMALLINT, nullable: true)]
    private ?int $clFlag = null;

    #[ORM\Column(name: "CL_Affiche", type: Types::SMALLINT, nullable: true)]
    private ?int $clAffiche = null;

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

    public function getNClavier(): ?int
    {
        return $this->nClavier;
    }

    public function setNClavier(?int $nClavier): static
    {
        $this->nClavier = $nClavier;

        return $this;
    }

    public function getClFonction(): ?int
    {
        return $this->clFonction;
    }

    public function setClFonction(?int $clFonction): static
    {
        $this->clFonction = $clFonction;

        return $this;
    }

    public function getClInteresse(): ?int
    {
        return $this->clInteresse;
    }

    public function setClInteresse(?int $clInteresse): static
    {
        $this->clInteresse = $clInteresse;

        return $this;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(?string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getCbcoNo(): ?int
    {
        return $this->cbcoNo;
    }

    public function setCbcoNo(?int $cbcoNo): static
    {
        $this->cbcoNo = $cbcoNo;

        return $this;
    }

    public function getClRaccourci(): ?int
    {
        return $this->clRaccourci;
    }

    public function setClRaccourci(?int $clRaccourci): static
    {
        $this->clRaccourci = $clRaccourci;

        return $this;
    }

    public function getClFlag(): ?int
    {
        return $this->clFlag;
    }

    public function setClFlag(?int $clFlag): static
    {
        $this->clFlag = $clFlag;

        return $this;
    }

    public function getClAffiche(): ?int
    {
        return $this->clAffiche;
    }

    public function setClAffiche(?int $clAffiche): static
    {
        $this->clAffiche = $clAffiche;

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
