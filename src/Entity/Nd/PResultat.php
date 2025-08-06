<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PResultatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_RESULTAT')]
#[ORM\Entity(repositoryClass: PResultatRepository::class)]
class PResultat
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Genere", type: Types::SMALLINT, nullable: true)]
    private ?int $rGenere = null;

    #[ORM\Column(name: "CG_NumResultat", length: 13, nullable: true)]
    private ?string $cgNumresultat = null;

    #[ORM\Column(name: "CG_NumImposition", length: 13, nullable: true)]
    private ?string $cgNumimposition = null;

    #[ORM\Column(name: "CG_NumContrepartie", length: 13, nullable: true)]
    private ?string $cgNumcontrepartie = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRGenere(): ?int
    {
        return $this->rGenere;
    }

    public function setRGenere(?int $rGenere): static
    {
        $this->rGenere = $rGenere;

        return $this;
    }

    public function getCgNumresultat(): ?string
    {
        return $this->cgNumresultat;
    }

    public function setCgNumresultat(?string $cgNumresultat): static
    {
        $this->cgNumresultat = $cgNumresultat;

        return $this;
    }

    public function getCgNumimposition(): ?string
    {
        return $this->cgNumimposition;
    }

    public function setCgNumimposition(?string $cgNumimposition): static
    {
        $this->cgNumimposition = $cgNumimposition;

        return $this;
    }

    public function getCgNumcontrepartie(): ?string
    {
        return $this->cgNumcontrepartie;
    }

    public function setCgNumcontrepartie(?string $cgNumcontrepartie): static
    {
        $this->cgNumcontrepartie = $cgNumcontrepartie;

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
