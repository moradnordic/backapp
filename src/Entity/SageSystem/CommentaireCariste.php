<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\CommentaireCaristeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'commentaire_cariste')]
#[ORM\Entity(repositoryClass: CommentaireCaristeRepository::class)]
class CommentaireCariste
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "date_commentaire", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCommentaire = null;

    #[ORM\Column(name: "client", length: 50)]
    private ?string $client = null;

    #[ORM\Column(name: "ref", length: 50)]
    private ?string $ref = null;

    #[ORM\Column(name: "design", length: 100)]
    private ?string $design = null;

    #[ORM\Column(name: "do_piece", length: 50)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "qte_demande", type: Types::DECIMAL, precision: 18, scale: 2)]
    private ?string $qteDemande = null;

    #[ORM\Column(name: "qte_trouve", type: Types::DECIMAL, precision: 18, scale: 2, nullable: true)]
    private ?string $qteTrouve = null;

    #[ORM\Column(name: "commentaire", length: 50, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(name: "cariste", length: 255, nullable: true)]
    private ?string $cariste = null;

    #[ORM\Column(name: "checked", length: 255, nullable: true)]
    private ?string $checked = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommentaire(): ?\DateTimeInterface
    {
        return $this->dateCommentaire;
    }

    public function setDateCommentaire(?\DateTimeInterface $dateCommentaire): static
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): static
    {
        $this->ref = $ref;

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

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getQteDemande(): ?string
    {
        return $this->qteDemande;
    }

    public function setQteDemande(string $qteDemande): static
    {
        $this->qteDemande = $qteDemande;

        return $this;
    }

    public function getQteTrouve(): ?string
    {
        return $this->qteTrouve;
    }

    public function setQteTrouve(?string $qteTrouve): static
    {
        $this->qteTrouve = $qteTrouve;

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

    public function getCariste(): ?string
    {
        return $this->cariste;
    }

    public function setCariste(?string $cariste): static
    {
        $this->cariste = $cariste;

        return $this;
    }

    public function getChecked(): ?string
    {
        return $this->checked;
    }

    public function setChecked(?string $checked): static
    {
        $this->checked = $checked;

        return $this;
    }
}
