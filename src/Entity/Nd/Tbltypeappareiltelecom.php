<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltypeappareiltelecomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeAppareilTelecom')]
#[ORM\Entity(repositoryClass: TbltypeappareiltelecomRepository::class)]
class Tbltypeappareiltelecom
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeAppareilTelecom", length: 255, nullable: true)]
    private ?string $typeappareiltelecom = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypeappareiltelecom(): ?string
    {
        return $this->typeappareiltelecom;
    }

    public function setTypeappareiltelecom(?string $typeappareiltelecom): static
    {
        $this->typeappareiltelecom = $typeappareiltelecom;

        return $this;
    }
}
