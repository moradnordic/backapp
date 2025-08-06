<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\AaaSaRgTyperegRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'AAA_SA_Rg_TypeReg')]
#[ORM\Entity(repositoryClass: AaaSaRgTyperegRepository::class)]
class AaaSaRgTypereg
{
    #[ORM\Column(name: "Code", type: Types::DECIMAL, precision: 18, scale: 0, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(name: "TypeDeReglement", length: 40, nullable: true, options: ["fixed" => true])]
    private ?string $typedereglement = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getTypedereglement(): ?string
    {
        return $this->typedereglement;
    }

    public function setTypedereglement(?string $typedereglement): static
    {
        $this->typedereglement = $typedereglement;

        return $this;
    }
}
