<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\AaaSaModereglementsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'AAA_SA_ModeReglements')]
#[ORM\Entity(repositoryClass: AaaSaModereglementsRepository::class)]
class AaaSaModereglements
{
    #[ORM\Column(name: "CoderEG", type: Types::DECIMAL, precision: 18, scale: 0, nullable: true)]
    private ?string $codereg = null;

    #[ORM\Column(name: "ModeReglement", length: 30, nullable: true, options: ["fixed" => true])]
    private ?string $modereglement = null;

    public function getCodereg(): ?string
    {
        return $this->codereg;
    }

    public function setCodereg(?string $codereg): static
    {
        $this->codereg = $codereg;

        return $this;
    }

    public function getModereglement(): ?string
    {
        return $this->modereglement;
    }

    public function setModereglement(?string $modereglement): static
    {
        $this->modereglement = $modereglement;

        return $this;
    }
}
