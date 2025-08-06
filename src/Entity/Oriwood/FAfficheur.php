<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FAfficheurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_AFFICHEUR')]
#[ORM\Index(name: 'IAF_ACTION', columns: ['AF_NumOrdre'])]
#[ORM\Index(name: 'IAF_ORDRE', columns: ['AF_NumOrdre'])]
#[ORM\Entity(repositoryClass: FAfficheurRepository::class)]
class FAfficheur
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AF_Action", type: Types::SMALLINT, nullable: true)]
    private ?int $afAction = null;

    #[ORM\Column(name: "AF_Cadrage", type: Types::SMALLINT, nullable: true)]
    private ?int $afCadrage = null;

    #[ORM\Column(name: "AF_Texte", length: 69, nullable: true)]
    private ?string $afTexte = null;

    #[ORM\Column(name: "AF_NumOrdre", type: Types::SMALLINT, nullable: true)]
    private ?int $afNumordre = null;

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

    public function getAfAction(): ?int
    {
        return $this->afAction;
    }

    public function setAfAction(?int $afAction): static
    {
        $this->afAction = $afAction;

        return $this;
    }

    public function getAfCadrage(): ?int
    {
        return $this->afCadrage;
    }

    public function setAfCadrage(?int $afCadrage): static
    {
        $this->afCadrage = $afCadrage;

        return $this;
    }

    public function getAfTexte(): ?string
    {
        return $this->afTexte;
    }

    public function setAfTexte(?string $afTexte): static
    {
        $this->afTexte = $afTexte;

        return $this;
    }

    public function getAfNumordre(): ?int
    {
        return $this->afNumordre;
    }

    public function setAfNumordre(?int $afNumordre): static
    {
        $this->afNumordre = $afNumordre;

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
