<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrDevisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Devis')]
#[ORM\Entity(repositoryClass: LrDevisRepository::class)]
class LrDevis
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "LR_IntDev", length: 100, nullable: true)]
    private ?string $lrIntdev = null;

    #[ORM\Column(name: "Cours_Dev", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $coursDev = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLrIntdev(): ?string
    {
        return $this->lrIntdev;
    }

    public function setLrIntdev(?string $lrIntdev): static
    {
        $this->lrIntdev = $lrIntdev;

        return $this;
    }

    public function getCoursDev(): ?string
    {
        return $this->coursDev;
    }

    public function setCoursDev(?string $coursDev): static
    {
        $this->coursDev = $coursDev;

        return $this;
    }
}
