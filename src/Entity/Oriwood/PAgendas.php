<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PAgendasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_AGENDAS')]
#[ORM\Entity(repositoryClass: PAgendasRepository::class)]
class PAgendas
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "A_Intitule", length: 35, nullable: true)]
    private ?string $aIntitule = null;

    #[ORM\Column(name: "A_Fichier", type: Types::SMALLINT, nullable: true)]
    private ?int $aFichier = null;

    #[ORM\Column(name: "A_Indisponible", type: Types::SMALLINT, nullable: true)]
    private ?int $aIndisponible = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAIntitule(): ?string
    {
        return $this->aIntitule;
    }

    public function setAIntitule(?string $aIntitule): static
    {
        $this->aIntitule = $aIntitule;

        return $this;
    }

    public function getAFichier(): ?int
    {
        return $this->aFichier;
    }

    public function setAFichier(?int $aFichier): static
    {
        $this->aFichier = $aFichier;

        return $this;
    }

    public function getAIndisponible(): ?int
    {
        return $this->aIndisponible;
    }

    public function setAIndisponible(?int $aIndisponible): static
    {
        $this->aIndisponible = $aIndisponible;

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
