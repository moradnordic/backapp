<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrApplicationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Application')]
#[ORM\Entity(repositoryClass: LrApplicationRepository::class)]
class LrApplication
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nom", length: 250, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "Credoc", nullable: true)]
    private ?int $credoc = null;

    #[ORM\Column(name: "Avoir_Fact", nullable: true)]
    private ?int $avoirFact = null;

    #[ORM\Column(name: "Facture_Ach", nullable: true)]
    private ?int $factureAch = null;

    #[ORM\Column(name: "Finan", nullable: true)]
    private ?int $finan = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCredoc(): ?int
    {
        return $this->credoc;
    }

    public function setCredoc(?int $credoc): static
    {
        $this->credoc = $credoc;

        return $this;
    }

    public function getAvoirFact(): ?int
    {
        return $this->avoirFact;
    }

    public function setAvoirFact(?int $avoirFact): static
    {
        $this->avoirFact = $avoirFact;

        return $this;
    }

    public function getFactureAch(): ?int
    {
        return $this->factureAch;
    }

    public function setFactureAch(?int $factureAch): static
    {
        $this->factureAch = $factureAch;

        return $this;
    }

    public function getFinan(): ?int
    {
        return $this->finan;
    }

    public function setFinan(?int $finan): static
    {
        $this->finan = $finan;

        return $this;
    }
}
