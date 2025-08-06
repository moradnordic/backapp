<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbsTypechargesachatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbS_TypeChargesAchat')]
#[ORM\Entity(repositoryClass: TbsTypechargesachatRepository::class)]
class TbsTypechargesachat
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeChargesAchat", length: 255, nullable: true)]
    private ?string $typechargesachat = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypechargesachat(): ?string
    {
        return $this->typechargesachat;
    }

    public function setTypechargesachat(?string $typechargesachat): static
    {
        $this->typechargesachat = $typechargesachat;

        return $this;
    }
}
