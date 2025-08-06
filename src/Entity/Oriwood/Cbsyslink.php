<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\CbsyslinkRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbSysLink')]
#[ORM\Entity(repositoryClass: CbsyslinkRepository::class)]
class Cbsyslink
{
    #[ORM\Column(name: "CB_Type", length: 4, options: ["fixed" => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbType = null;

    #[ORM\Column(name: "CB_Path", length: 260)]
    private ?string $cbPath = null;

    public function getCbType(): ?string
    {
        return $this->cbType;
    }

    public function setCbType(string $cbType): static
    {
        $this->cbType = $cbType;

        return $this;
    }

    public function getCbPath(): ?string
    {
        return $this->cbPath;
    }

    public function setCbPath(string $cbPath): static
    {
        $this->cbPath = $cbPath;

        return $this;
    }
}
