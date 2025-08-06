<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrAppFactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_APP_FACT')]
#[ORM\Entity(repositoryClass: LrAppFactRepository::class)]
class LrAppFact
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nom", length: 250, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "Créer_Facture", length: 250, nullable: true)]
    private ?string $créerFacture = null;

    #[ORM\Column(name: "LR_Banque", length: 250, nullable: true)]
    private ?string $lrBanque = null;

    #[ORM\Column(name: "LR_CG_NUM", length: 3000, nullable: true)]
    private ?string $lrCgNum = null;

    #[ORM\Column(name: "Prix_revient", length: 250, nullable: true)]
    private ?string $prixRevient = null;

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

    public function getCréerFacture(): ?string
    {
        return $this->créerFacture;
    }

    public function setCréerFacture(?string $créerFacture): static
    {
        $this->créerFacture = $créerFacture;

        return $this;
    }

    public function getLrBanque(): ?string
    {
        return $this->lrBanque;
    }

    public function setLrBanque(?string $lrBanque): static
    {
        $this->lrBanque = $lrBanque;

        return $this;
    }

    public function getLrCgNum(): ?string
    {
        return $this->lrCgNum;
    }

    public function setLrCgNum(?string $lrCgNum): static
    {
        $this->lrCgNum = $lrCgNum;

        return $this;
    }

    public function getPrixRevient(): ?string
    {
        return $this->prixRevient;
    }

    public function setPrixRevient(?string $prixRevient): static
    {
        $this->prixRevient = $prixRevient;

        return $this;
    }
}
