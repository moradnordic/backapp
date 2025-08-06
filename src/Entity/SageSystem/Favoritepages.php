<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\FavoritepagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'favoritepages')]
#[ORM\Entity(repositoryClass: FavoritepagesRepository::class)]
class Favoritepages
{
    #[ORM\Column(name: "ID")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ID_USER", nullable: true)]
    private ?int $idUser = null;

    #[ORM\Column(name: "ID_Page", nullable: true)]
    private ?int $idPage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdPage(): ?int
    {
        return $this->idPage;
    }

    public function setIdPage(?int $idPage): static
    {
        $this->idPage = $idPage;

        return $this;
    }
}
