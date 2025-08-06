<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrMotifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Motif')]
#[ORM\Entity(repositoryClass: LrMotifRepository::class)]
class LrMotif
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Motif_imp", length: 150, nullable: true)]
    private ?string $motifImp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotifImp(): ?string
    {
        return $this->motifImp;
    }

    public function setMotifImp(?string $motifImp): static
    {
        $this->motifImp = $motifImp;

        return $this;
    }
}
