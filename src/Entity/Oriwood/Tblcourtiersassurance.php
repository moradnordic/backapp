<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblcourtiersassuranceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCourtiersAssurance')]
#[ORM\Entity(repositoryClass: TblcourtiersassuranceRepository::class)]
class Tblcourtiersassurance
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "CourtierAssurance", length: 255, nullable: true)]
    private ?string $courtierassurance = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getCourtierassurance(): ?string
    {
        return $this->courtierassurance;
    }

    public function setCourtierassurance(?string $courtierassurance): static
    {
        $this->courtierassurance = $courtierassurance;

        return $this;
    }
}
