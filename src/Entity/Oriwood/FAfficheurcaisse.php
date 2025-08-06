<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FAfficheurcaisseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_AFFICHEURCAISSE')]
#[ORM\Index(name: 'IAC_ACTION', columns: ['AC_NumOrdre'])]
#[ORM\Index(name: 'IAC_ORDRE', columns: ['AC_NumOrdre'])]
#[ORM\Index(name: 'FKIA_F_AFFICHEURCAISSE_CA_No', columns: ['CA_No'])]
#[ORM\Entity(repositoryClass: FAfficheurcaisseRepository::class)]
class FAfficheurcaisse
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CA_No")]
    private ?int $caNo = null;

    #[ORM\Column(name: "AC_Action", type: Types::SMALLINT, nullable: true)]
    private ?int $acAction = null;

    #[ORM\Column(name: "AC_Cadrage", type: Types::SMALLINT, nullable: true)]
    private ?int $acCadrage = null;

    #[ORM\Column(name: "AC_Texte", length: 69, nullable: true)]
    private ?string $acTexte = null;

    #[ORM\Column(name: "AC_NumOrdre", type: Types::SMALLINT, nullable: true)]
    private ?int $acNumordre = null;

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

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(int $caNo): static
    {
        $this->caNo = $caNo;

        return $this;
    }

    public function getAcAction(): ?int
    {
        return $this->acAction;
    }

    public function setAcAction(?int $acAction): static
    {
        $this->acAction = $acAction;

        return $this;
    }

    public function getAcCadrage(): ?int
    {
        return $this->acCadrage;
    }

    public function setAcCadrage(?int $acCadrage): static
    {
        $this->acCadrage = $acCadrage;

        return $this;
    }

    public function getAcTexte(): ?string
    {
        return $this->acTexte;
    }

    public function setAcTexte(?string $acTexte): static
    {
        $this->acTexte = $acTexte;

        return $this;
    }

    public function getAcNumordre(): ?int
    {
        return $this->acNumordre;
    }

    public function setAcNumordre(?int $acNumordre): static
    {
        $this->acNumordre = $acNumordre;

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
