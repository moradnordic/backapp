<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrBanqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Banque')]
#[ORM\Entity(repositoryClass: LrBanqueRepository::class)]
class LrBanque
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Banque", length: 250, nullable: true)]
    private ?string $banque = null;

    #[ORM\Column(name: "date_Sais", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSais = null;

    #[ORM\Column(name: "Mont_Plf", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $montPlf = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateSais(): ?\DateTimeInterface
    {
        return $this->dateSais;
    }

    public function setDateSais(?\DateTimeInterface $dateSais): static
    {
        $this->dateSais = $dateSais;

        return $this;
    }

    public function getMontPlf(): ?string
    {
        return $this->montPlf;
    }

    public function setMontPlf(?string $montPlf): static
    {
        $this->montPlf = $montPlf;

        return $this;
    }
}
