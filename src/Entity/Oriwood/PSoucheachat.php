<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PSoucheachatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_SOUCHEACHAT')]
#[ORM\Entity(repositoryClass: PSoucheachatRepository::class)]
class PSoucheachat
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "S_Intitule", length: 35, nullable: true)]
    private ?string $sIntitule = null;

    #[ORM\Column(name: "S_Valide", type: Types::SMALLINT, nullable: true)]
    private ?int $sValide = null;

    #[ORM\Column(name: "JO_Num", length: 7, nullable: true)]
    private ?string $joNum = null;

    #[ORM\Column(name: "JO_NumSituation", length: 7, nullable: true)]
    private ?string $joNumsituation = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getSIntitule(): ?string
    {
        return $this->sIntitule;
    }

    public function setSIntitule(?string $sIntitule): static
    {
        $this->sIntitule = $sIntitule;

        return $this;
    }

    public function getSValide(): ?int
    {
        return $this->sValide;
    }

    public function setSValide(?int $sValide): static
    {
        $this->sValide = $sValide;

        return $this;
    }

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(?string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getJoNumsituation(): ?string
    {
        return $this->joNumsituation;
    }

    public function setJoNumsituation(?string $joNumsituation): static
    {
        $this->joNumsituation = $joNumsituation;

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
}
