<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\CommandeEnteteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'commande_entete')]
#[ORM\Entity(repositoryClass: CommandeEnteteRepository::class)]
class CommandeEntete
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "client", length: 50)]
    private ?string $client = null;

    #[ORM\Column(name: "date_creation", type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: "date_livraison", type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateLivraison = null;

    #[ORM\Column(name: "reference", length: 50, nullable: true)]
    private ?string $reference = null;

    #[ORM\Column(name: "entete", length: 50, nullable: true)]
    private ?string $entete = null;

    #[ORM\Column(name: "observation", length: 50, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(name: "DO_Piece", length: 60, nullable: true)]
    private ?string $doPiece = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): static
    {
        $this->dateLivraison = $dateLivraison;

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

    public function getEntete(): ?string
    {
        return $this->entete;
    }

    public function setEntete(?string $entete): static
    {
        $this->entete = $entete;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

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
