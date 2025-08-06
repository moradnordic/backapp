<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\TeamSalarieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'team_salarie')]
#[ORM\Entity(repositoryClass: TeamSalarieRepository::class)]
class TeamSalarie
{
    #[ORM\Column(name: "ID_Salarie_ND")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $idSalarieNd = null;

    #[ORM\Column(name: "ID_TEAM")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $idTeam = null;

    public function getIdSalarieNd(): ?int
    {
        return $this->idSalarieNd;
    }

    public function setIdSalarieNd(int $idSalarieNd): static
    {
        $this->idSalarieNd = $idSalarieNd;

        return $this;
    }

    public function getIdTeam(): ?int
    {
        return $this->idTeam;
    }

    public function setIdTeam(int $idTeam): static
    {
        $this->idTeam = $idTeam;

        return $this;
    }
}
