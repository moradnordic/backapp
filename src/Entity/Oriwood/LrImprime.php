<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrImprimeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Imprime')]
#[ORM\Entity(repositoryClass: LrImprimeRepository::class)]
class LrImprime
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Banque_Abreg", length: 50, nullable: true)]
    private ?string $banqueAbreg = null;

    #[ORM\Column(name: "Banque", length: 50, nullable: true)]
    private ?string $banque = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBanqueAbreg(): ?string
    {
        return $this->banqueAbreg;
    }

    public function setBanqueAbreg(?string $banqueAbreg): static
    {
        $this->banqueAbreg = $banqueAbreg;

        return $this;
    }

    public function getBanque(): ?string
    {
        return $this->banque;
    }

    public function setBanque(?string $banque): static
    {
        $this->banque = $banque;

        return $this;
    }
}
