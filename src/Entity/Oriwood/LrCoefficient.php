<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrCoefficientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_COEFFICIENT')]
#[ORM\Entity(repositoryClass: LrCoefficientRepository::class)]
class LrCoefficient
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "LR_Coeff", type: Types::DECIMAL, precision: 18, scale: 4, nullable: true)]
    private ?string $lrCoeff = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLrCoeff(): ?string
    {
        return $this->lrCoeff;
    }

    public function setLrCoeff(?string $lrCoeff): static
    {
        $this->lrCoeff = $lrCoeff;

        return $this;
    }
}
