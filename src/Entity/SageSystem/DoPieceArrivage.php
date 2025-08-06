<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\DoPieceArrivageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'do_piece_arrivage')]
#[ORM\Entity(repositoryClass: DoPieceArrivageRepository::class)]
class DoPieceArrivage
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "id_arrivage", nullable: true)]
    private ?int $idArrivage = null;

    #[ORM\Column(name: "do_piece", length: 50, nullable: true)]
    private ?string $doPiece = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdArrivage(): ?int
    {
        return $this->idArrivage;
    }

    public function setIdArrivage(?int $idArrivage): static
    {
        $this->idArrivage = $idArrivage;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }
}
