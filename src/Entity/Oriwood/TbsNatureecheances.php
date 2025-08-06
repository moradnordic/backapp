<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbsNatureecheancesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbs_NatureEcheances')]
#[ORM\Entity(repositoryClass: TbsNatureecheancesRepository::class)]
class TbsNatureecheances
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "NatureEcheances", length: 255, nullable: true)]
    private ?string $natureecheances = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNatureecheances(): ?string
    {
        return $this->natureecheances;
    }

    public function setNatureecheances(?string $natureecheances): static
    {
        $this->natureecheances = $natureecheances;

        return $this;
    }
}
