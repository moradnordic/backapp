<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PRecouvrementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_RECOUVREMENT')]
#[ORM\Entity(repositoryClass: PRecouvrementRepository::class)]
class PRecouvrement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "JO_NumProv", length: 7, nullable: true)]
    private ?string $joNumprov = null;

    #[ORM\Column(name: "PI_NoProvDotation", nullable: true)]
    private ?int $piNoprovdotation = null;

    #[ORM\Column(name: "PI_NoProvReprise", nullable: true)]
    private ?int $piNoprovreprise = null;

    #[ORM\Column(name: "CG_NumPerte", length: 13, nullable: true)]
    private ?string $cgNumperte = null;

    #[ORM\Column(name: "R_Modele", length: 259, nullable: true)]
    private ?string $rModele = null;

    #[ORM\Column(name: "CG_NumDouteux", length: 13, nullable: true)]
    private ?string $cgNumdouteux = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getJoNumprov(): ?string
    {
        return $this->joNumprov;
    }

    public function setJoNumprov(?string $joNumprov): static
    {
        $this->joNumprov = $joNumprov;

        return $this;
    }

    public function getPiNoprovdotation(): ?int
    {
        return $this->piNoprovdotation;
    }

    public function setPiNoprovdotation(?int $piNoprovdotation): static
    {
        $this->piNoprovdotation = $piNoprovdotation;

        return $this;
    }

    public function getPiNoprovreprise(): ?int
    {
        return $this->piNoprovreprise;
    }

    public function setPiNoprovreprise(?int $piNoprovreprise): static
    {
        $this->piNoprovreprise = $piNoprovreprise;

        return $this;
    }

    public function getCgNumperte(): ?string
    {
        return $this->cgNumperte;
    }

    public function setCgNumperte(?string $cgNumperte): static
    {
        $this->cgNumperte = $cgNumperte;

        return $this;
    }

    public function getRModele(): ?string
    {
        return $this->rModele;
    }

    public function setRModele(?string $rModele): static
    {
        $this->rModele = $rModele;

        return $this;
    }

    public function getCgNumdouteux(): ?string
    {
        return $this->cgNumdouteux;
    }

    public function setCgNumdouteux(?string $cgNumdouteux): static
    {
        $this->cgNumdouteux = $cgNumdouteux;

        return $this;
    }
}
