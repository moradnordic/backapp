<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PUniteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_UNITE')]
#[ORM\Entity(repositoryClass: PUniteRepository::class)]
class PUnite
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "U_Intitule", length: 21, nullable: true)]
    private ?string $uIntitule = null;

    #[ORM\Column(name: "U_Correspondance", type: Types::SMALLINT, nullable: true)]
    private ?int $uCorrespondance = null;

    #[ORM\Column(name: "U_NbUnite", type: Types::SMALLINT, nullable: true)]
    private ?int $uNbunite = null;

    #[ORM\Column(name: "U_UniteTemps", type: Types::SMALLINT, nullable: true)]
    private ?int $uUnitetemps = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    #[ORM\Column(name: "U_EdiCode", length: 3, nullable: true)]
    private ?string $uEdicode = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getUIntitule(): ?string
    {
        return $this->uIntitule;
    }

    public function setUIntitule(?string $uIntitule): static
    {
        $this->uIntitule = $uIntitule;

        return $this;
    }

    public function getUCorrespondance(): ?int
    {
        return $this->uCorrespondance;
    }

    public function setUCorrespondance(?int $uCorrespondance): static
    {
        $this->uCorrespondance = $uCorrespondance;

        return $this;
    }

    public function getUNbunite(): ?int
    {
        return $this->uNbunite;
    }

    public function setUNbunite(?int $uNbunite): static
    {
        $this->uNbunite = $uNbunite;

        return $this;
    }

    public function getUUnitetemps(): ?int
    {
        return $this->uUnitetemps;
    }

    public function setUUnitetemps(?int $uUnitetemps): static
    {
        $this->uUnitetemps = $uUnitetemps;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }

    public function getUEdicode(): ?string
    {
        return $this->uEdicode;
    }

    public function setUEdicode(?string $uEdicode): static
    {
        $this->uEdicode = $uEdicode;

        return $this;
    }
}
