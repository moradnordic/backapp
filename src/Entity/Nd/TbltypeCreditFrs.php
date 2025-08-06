<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltypeCreditFrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblType_Credit_Frs')]
#[ORM\Entity(repositoryClass: TbltypeCreditFrsRepository::class)]
class TbltypeCreditFrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeCreditFrs", length: 255, nullable: true)]
    private ?string $typecreditfrs = null;

    #[ORM\Column(name: "TypeCreditFrsLange2", length: 255, nullable: true)]
    private ?string $typecreditfrslange2 = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypecreditfrs(): ?string
    {
        return $this->typecreditfrs;
    }

    public function setTypecreditfrs(?string $typecreditfrs): static
    {
        $this->typecreditfrs = $typecreditfrs;

        return $this;
    }

    public function getTypecreditfrslange2(): ?string
    {
        return $this->typecreditfrslange2;
    }

    public function setTypecreditfrslange2(?string $typecreditfrslange2): static
    {
        $this->typecreditfrslange2 = $typecreditfrslange2;

        return $this;
    }
}
