<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbsConnectedusersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbS_ConnectedUsers')]
#[ORM\Entity(repositoryClass: TbsConnectedusersRepository::class)]
class TbsConnectedusers
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "User", nullable: true)]
    private ?int $user = null;

    #[ORM\Column(name: "ConnectedSince", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $connectedsince = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(?int $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getConnectedsince(): ?\DateTimeInterface
    {
        return $this->connectedsince;
    }

    public function setConnectedsince(?\DateTimeInterface $connectedsince): static
    {
        $this->connectedsince = $connectedsince;

        return $this;
    }
}
