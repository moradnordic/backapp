<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\VentepvlingeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ventePVLinge')]
#[ORM\Entity(repositoryClass: VentepvlingeRepository::class)]
class Ventepvlinge
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "AR_REF", length: 60)]
    private ?string $arRef = null;

    #[ORM\Column(name: "design", length: 120)]
    private ?string $design = null;

    #[ORM\Column(name: "PUTTC", nullable: true)]
    private ?float $puttc = null;

    #[ORM\Column(name: "Qte", nullable: true)]
    private ?float $qte = null;

    #[ORM\Column(name: "UniteVente", length: 60, nullable: true)]
    private ?string $unitevente = null;

    #[ORM\Column(name: "RefFacture", nullable: true)]
    private ?int $reffacture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getDesign(): ?string
    {
        return $this->design;
    }

    public function setDesign(string $design): static
    {
        $this->design = $design;

        return $this;
    }

    public function getPuttc(): ?float
    {
        return $this->puttc;
    }

    public function setPuttc(?float $puttc): static
    {
        $this->puttc = $puttc;

        return $this;
    }

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(?float $qte): static
    {
        $this->qte = $qte;

        return $this;
    }

    public function getUnitevente(): ?string
    {
        return $this->unitevente;
    }

    public function setUnitevente(?string $unitevente): static
    {
        $this->unitevente = $unitevente;

        return $this;
    }

    public function getReffacture(): ?int
    {
        return $this->reffacture;
    }

    public function setReffacture(?int $reffacture): static
    {
        $this->reffacture = $reffacture;

        return $this;
    }
}
