<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\AaaSaDefDoDomaineRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'AAA_SA_Def_Do_Domaine')]
#[ORM\Entity(repositoryClass: AaaSaDefDoDomaineRepository::class)]
class AaaSaDefDoDomaine
{
    #[ORM\Column(name: "Code", type: Types::DECIMAL, precision: 18, scale: 0, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(name: "DefDomaine", length: 100, nullable: true, options: ["fixed" => true])]
    private ?string $defdomaine = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getDefdomaine(): ?string
    {
        return $this->defdomaine;
    }

    public function setDefdomaine(?string $defdomaine): static
    {
        $this->defdomaine = $defdomaine;

        return $this;
    }
}
