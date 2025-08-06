<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\InventaireStaffRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'INVENTAIRE_STAFF')]
#[ORM\Entity(repositoryClass: InventaireStaffRepository::class)]
class InventaireStaff
{
    #[ORM\Column(name: "ID_INV_STAFF")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $idInvStaff = null;

    #[ORM\Column(name: "PRENOM", length: 20, options: ["fixed" => true])]
    private ?string $prenom = null;

    #[ORM\Column(name: "NOM", length: 20, options: ["fixed" => true])]
    private ?string $nom = null;

    #[ORM\Column(name: "ACTIVE")]
    private ?bool $active = null;

    #[ORM\Column(name: "Commentaires", length: 255, nullable: true, options: ["fixed" => true])]
    private ?string $commentaires = null;

    public function getIdInvStaff(): ?int
    {
        return $this->idInvStaff;
    }

    public function setIdInvStaff(int $idInvStaff): static
    {
        $this->idInvStaff = $idInvStaff;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): static
    {
        $this->commentaires = $commentaires;

        return $this;
    }
}
