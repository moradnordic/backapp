<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbsSettingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbS_Settings')]
#[ORM\Entity(repositoryClass: TbsSettingsRepository::class)]
class TbsSettings
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TheApplication", length: 255, nullable: true)]
    private ?string $theapplication = null;

    #[ORM\Column(name: "ApplicationPath", length: 255, nullable: true)]
    private ?string $applicationpath = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTheapplication(): ?string
    {
        return $this->theapplication;
    }

    public function setTheapplication(?string $theapplication): static
    {
        $this->theapplication = $theapplication;

        return $this;
    }

    public function getApplicationpath(): ?string
    {
        return $this->applicationpath;
    }

    public function setApplicationpath(?string $applicationpath): static
    {
        $this->applicationpath = $applicationpath;

        return $this;
    }
}
