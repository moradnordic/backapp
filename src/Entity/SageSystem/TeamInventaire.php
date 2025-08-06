<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\TeamInventaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'team_inventaire')]
#[ORM\Entity(repositoryClass: TeamInventaireRepository::class)]
class TeamInventaire
{
    #[ORM\Column(name: "ID_TEAM")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $idTeam = null;

    #[ORM\Column(name: "ID_Inv_Team", nullable: true)]
    private ?int $idInvTeam = null;

    #[ORM\Column(name: "ID_INV", nullable: true)]
    private ?int $idInv = null;

    public function getIdTeam(): ?int
    {
        return $this->idTeam;
    }

    public function getIdInvTeam(): ?int
    {
        return $this->idInvTeam;
    }

    public function setIdInvTeam(?int $idInvTeam): static
    {
        $this->idInvTeam = $idInvTeam;

        return $this;
    }

    public function getIdInv(): ?int
    {
        return $this->idInv;
    }

    public function setIdInv(?int $idInv): static
    {
        $this->idInv = $idInv;

        return $this;
    }
}
