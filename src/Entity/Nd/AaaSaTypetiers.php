<?php

namespace App\Entity\Nd;

use App\Repository\Nd\AaaSaTypetiersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'AAA_SA_TypeTiers')]
#[ORM\Entity(repositoryClass: AaaSaTypetiersRepository::class)]
class AaaSaTypetiers
{
    #[ORM\Column(name: "Code", type: Types::DECIMAL, precision: 18, scale: 0, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(name: "Tiers", length: 40, nullable: true, options: ["fixed" => true])]
    private ?string $tiers = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getTiers(): ?string
    {
        return $this->tiers;
    }

    public function setTiers(?string $tiers): static
    {
        $this->tiers = $tiers;

        return $this;
    }
}
