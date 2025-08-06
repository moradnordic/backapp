<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ArrivageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'arrivage')]
#[ORM\Entity(repositoryClass: ArrivageRepository::class)]
class Arrivage
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "date_arrivage", type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateArrivage = null;

    #[ORM\Column(name: "do_piece", length: 50, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "commentaire", length: 100, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(name: "status", length: 50, nullable: true)]
    private ?string $status = null;

    #[ORM\Column(name: "cree_par", length: 50, nullable: true)]
    private ?string $creePar = null;

    #[ORM\Column(name: "reference", length: 50, nullable: true)]
    private ?string $reference = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArrivage(): ?\DateTimeInterface
    {
        return $this->dateArrivage;
    }

    public function setDateArrivage(\DateTimeInterface $dateArrivage): static
    {
        $this->dateArrivage = $dateArrivage;

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

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getCreePar(): ?string
    {
        return $this->creePar;
    }

    public function setCreePar(?string $creePar): static
    {
        $this->creePar = $creePar;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }
}
