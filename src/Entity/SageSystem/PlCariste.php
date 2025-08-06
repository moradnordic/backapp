<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\PlCaristeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'pl_cariste')]
#[ORM\Entity(repositoryClass: PlCaristeRepository::class)]
class PlCariste
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "do_piece", length: 255)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "cariste_id", nullable: true)]
    private ?int $caristeId = null;

    #[ORM\Column(name: "debut_ramassage", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutRamassage = null;

    #[ORM\Column(name: "fin_ramassage", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finRamassage = null;

    #[ORM\Column(name: "date_assignement", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAssignement = null;

    #[ORM\Column(name: "statut", length: 255, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(name: "client", length: 255, nullable: true)]
    private ?string $client = null;

    #[ORM\Column(name: "controle", length: 50, nullable: true)]
    private ?string $controle = null;

    #[ORM\Column(name: "debut_controle", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutControle = null;

    #[ORM\Column(name: "fin_controle", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finControle = null;

    #[ORM\Column(name: "controleur", length: 50, nullable: true)]
    private ?string $controleur = null;

    #[ORM\Column(name: "debut_pause", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutPause = null;

    #[ORM\Column(name: "fin_pause", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finPause = null;

    #[ORM\Column(name: "total_pause_duree", type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $totalPauseDuree = null;

    #[ORM\Column(name: "prod", nullable: true)]
    private ?bool $prod = null;

    #[ORM\Column(name: "debut_prod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutProd = null;

    #[ORM\Column(name: "fin_prod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finProd = null;

    #[ORM\Column(name: "nombre_pause", nullable: true)]
    private ?int $nombrePause = null;

    #[ORM\Column(name: "nombre_articles", nullable: true)]
    private ?int $nombreArticles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getCaristeId(): ?int
    {
        return $this->caristeId;
    }

    public function setCaristeId(?int $caristeId): static
    {
        $this->caristeId = $caristeId;

        return $this;
    }

    public function getDebutRamassage(): ?\DateTimeInterface
    {
        return $this->debutRamassage;
    }

    public function setDebutRamassage(?\DateTimeInterface $debutRamassage): static
    {
        $this->debutRamassage = $debutRamassage;

        return $this;
    }

    public function getFinRamassage(): ?\DateTimeInterface
    {
        return $this->finRamassage;
    }

    public function setFinRamassage(?\DateTimeInterface $finRamassage): static
    {
        $this->finRamassage = $finRamassage;

        return $this;
    }

    public function getDateAssignement(): ?\DateTimeInterface
    {
        return $this->dateAssignement;
    }

    public function setDateAssignement(?\DateTimeInterface $dateAssignement): static
    {
        $this->dateAssignement = $dateAssignement;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getControle(): ?string
    {
        return $this->controle;
    }

    public function setControle(?string $controle): static
    {
        $this->controle = $controle;

        return $this;
    }

    public function getDebutControle(): ?\DateTimeInterface
    {
        return $this->debutControle;
    }

    public function setDebutControle(?\DateTimeInterface $debutControle): static
    {
        $this->debutControle = $debutControle;

        return $this;
    }

    public function getFinControle(): ?\DateTimeInterface
    {
        return $this->finControle;
    }

    public function setFinControle(?\DateTimeInterface $finControle): static
    {
        $this->finControle = $finControle;

        return $this;
    }

    public function getControleur(): ?string
    {
        return $this->controleur;
    }

    public function setControleur(?string $controleur): static
    {
        $this->controleur = $controleur;

        return $this;
    }

    public function getDebutPause(): ?\DateTimeInterface
    {
        return $this->debutPause;
    }

    public function setDebutPause(?\DateTimeInterface $debutPause): static
    {
        $this->debutPause = $debutPause;

        return $this;
    }

    public function getFinPause(): ?\DateTimeInterface
    {
        return $this->finPause;
    }

    public function setFinPause(?\DateTimeInterface $finPause): static
    {
        $this->finPause = $finPause;

        return $this;
    }

    public function getTotalPauseDuree(): ?\DateTimeInterface
    {
        return $this->totalPauseDuree;
    }

    public function setTotalPauseDuree(?\DateTimeInterface $totalPauseDuree): static
    {
        $this->totalPauseDuree = $totalPauseDuree;

        return $this;
    }

    public function getProd(): ?bool
    {
        return $this->prod;
    }

    public function setProd(?bool $prod): static
    {
        $this->prod = $prod;

        return $this;
    }

    public function getDebutProd(): ?\DateTimeInterface
    {
        return $this->debutProd;
    }

    public function setDebutProd(?\DateTimeInterface $debutProd): static
    {
        $this->debutProd = $debutProd;

        return $this;
    }

    public function getFinProd(): ?\DateTimeInterface
    {
        return $this->finProd;
    }

    public function setFinProd(?\DateTimeInterface $finProd): static
    {
        $this->finProd = $finProd;

        return $this;
    }

    public function getNombrePause(): ?int
    {
        return $this->nombrePause;
    }

    public function setNombrePause(?int $nombrePause): static
    {
        $this->nombrePause = $nombrePause;

        return $this;
    }

    public function getNombreArticles(): ?int
    {
        return $this->nombreArticles;
    }

    public function setNombreArticles(?int $nombreArticles): static
    {
        $this->nombreArticles = $nombreArticles;

        return $this;
    }
}
