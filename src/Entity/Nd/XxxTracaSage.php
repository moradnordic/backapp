<?php

namespace App\Entity\Nd;

use App\Repository\Nd\XxxTracaSageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'xxx_traca_sage')]
#[ORM\Entity(repositoryClass: XxxTracaSageRepository::class)]
class XxxTracaSage
{
    #[ORM\Column(name: "id", type: Types::DECIMAL, precision: 18, scale: 0)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?string $id = null;

    #[ORM\Column(name: "user", length: 50, nullable: true)]
    private ?string $user = null;

    #[ORM\Column(name: "do_piece", length: 50, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "do_date_doc", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $doDateDoc = null;

    #[ORM\Column(name: "date_delete", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDelete = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): static
    {
        $this->user = $user;

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

    public function getDoDateDoc(): ?\DateTimeInterface
    {
        return $this->doDateDoc;
    }

    public function setDoDateDoc(?\DateTimeInterface $doDateDoc): static
    {
        $this->doDateDoc = $doDateDoc;

        return $this;
    }

    public function getDateDelete(): ?\DateTimeInterface
    {
        return $this->dateDelete;
    }

    public function setDateDelete(?\DateTimeInterface $dateDelete): static
    {
        $this->dateDelete = $dateDelete;

        return $this;
    }
}
