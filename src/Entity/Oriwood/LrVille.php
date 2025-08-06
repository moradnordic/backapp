<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrVilleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Ville')]
#[ORM\Entity(repositoryClass: LrVilleRepository::class)]
class LrVille
{
    #[ORM\Column(name: "Ville_No")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $villeNo = null;

    #[ORM\Column(name: "Nom_Ville", length: 300, nullable: true)]
    private ?string $nomVille = null;

    public function getVilleNo(): ?int
    {
        return $this->villeNo;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(?string $nomVille): static
    {
        $this->nomVille = $nomVille;

        return $this;
    }
}
