<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblmodefinancementregfrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblModeFinancementRegFrs')]
#[ORM\Entity(repositoryClass: TblmodefinancementregfrsRepository::class)]
class Tblmodefinancementregfrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "ModePaiement", length: 255, nullable: true)]
    private ?string $modepaiement = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getModepaiement(): ?string
    {
        return $this->modepaiement;
    }

    public function setModepaiement(?string $modepaiement): static
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }
}
