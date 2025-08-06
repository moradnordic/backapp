<?php

namespace App\Entity\Nd;

use App\Repository\Nd\AaaSaDefDoTypeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'AAA_SA_Def_Do_Type')]
#[ORM\Entity(repositoryClass: AaaSaDefDoTypeRepository::class)]
class AaaSaDefDoType
{
    #[ORM\Column(name: "CodeDoc", length: 10, nullable: true, options: ["fixed" => true])]
    private ?string $codedoc = null;

    #[ORM\Column(name: "DefDoc", length: 200, nullable: true, options: ["fixed" => true])]
    private ?string $defdoc = null;

    #[ORM\Column(name: "CategorieDoc", length: 200, nullable: true, options: ["fixed" => true])]
    private ?string $categoriedoc = null;

    public function getCodedoc(): ?string
    {
        return $this->codedoc;
    }

    public function setCodedoc(?string $codedoc): static
    {
        $this->codedoc = $codedoc;

        return $this;
    }

    public function getDefdoc(): ?string
    {
        return $this->defdoc;
    }

    public function setDefdoc(?string $defdoc): static
    {
        $this->defdoc = $defdoc;

        return $this;
    }

    public function getCategoriedoc(): ?string
    {
        return $this->categoriedoc;
    }

    public function setCategoriedoc(?string $categoriedoc): static
    {
        $this->categoriedoc = $categoriedoc;

        return $this;
    }
}
