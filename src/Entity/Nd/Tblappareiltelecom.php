<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblappareiltelecomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblAppareilTelecom')]
#[ORM\Entity(repositoryClass: TblappareiltelecomRepository::class)]
class Tblappareiltelecom
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeAppareil", nullable: true)]
    private ?int $typeappareil = null;

    #[ORM\Column(name: "IMEI", length: 255, nullable: true)]
    private ?string $imei = null;

    #[ORM\Column(name: "DateAchat", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateachat = null;

    #[ORM\Column(name: "Utilisatuer", nullable: true)]
    private ?int $utilisatuer = null;

    #[ORM\Column(name: "Champ1", length: 255, nullable: true)]
    private ?string $champ1 = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypeappareil(): ?int
    {
        return $this->typeappareil;
    }

    public function setTypeappareil(?int $typeappareil): static
    {
        $this->typeappareil = $typeappareil;

        return $this;
    }

    public function getImei(): ?string
    {
        return $this->imei;
    }

    public function setImei(?string $imei): static
    {
        $this->imei = $imei;

        return $this;
    }

    public function getDateachat(): ?\DateTimeInterface
    {
        return $this->dateachat;
    }

    public function setDateachat(?\DateTimeInterface $dateachat): static
    {
        $this->dateachat = $dateachat;

        return $this;
    }

    public function getUtilisatuer(): ?int
    {
        return $this->utilisatuer;
    }

    public function setUtilisatuer(?int $utilisatuer): static
    {
        $this->utilisatuer = $utilisatuer;

        return $this;
    }

    public function getChamp1(): ?string
    {
        return $this->champ1;
    }

    public function setChamp1(?string $champ1): static
    {
        $this->champ1 = $champ1;

        return $this;
    }
}
