<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\InventaireCommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'inventaire_comment')]
#[ORM\Entity(repositoryClass: InventaireCommentRepository::class)]
class InventaireComment
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ID_Inv")]
    private ?int $idInv = null;

    #[ORM\Column(name: "comment", length: 50, nullable: true)]
    private ?string $comment = null;

    #[ORM\Column(name: "ID_Article", length: 50, nullable: true)]
    private ?string $idArticle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInv(): ?int
    {
        return $this->idInv;
    }

    public function setIdInv(int $idInv): static
    {
        $this->idInv = $idInv;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getIdArticle(): ?string
    {
        return $this->idArticle;
    }

    public function setIdArticle(?string $idArticle): static
    {
        $this->idArticle = $idArticle;

        return $this;
    }
}
