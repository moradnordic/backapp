<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TabBanqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Tab_Banque')]
#[ORM\Entity(repositoryClass: TabBanqueRepository::class)]
class TabBanque
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "abrgbanque", length: 35, nullable: true)]
    private ?string $abrgbanque = null;

    #[ORM\Column(name: "banque", length: 50, nullable: true)]
    private ?string $banque = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAbrgbanque(): ?string
    {
        return $this->abrgbanque;
    }

    public function setAbrgbanque(?string $abrgbanque): static
    {
        $this->abrgbanque = $abrgbanque;

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
