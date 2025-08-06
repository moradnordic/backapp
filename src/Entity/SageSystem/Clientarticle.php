<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ClientarticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'clientarticle')]
#[ORM\Entity(repositoryClass: ClientarticleRepository::class)]
class Clientarticle
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "articleId", length: 69)]
    private ?string $articleid = null;

    #[ORM\Column(name: "clientId", length: 69)]
    private ?string $clientid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleid(): ?string
    {
        return $this->articleid;
    }

    public function setArticleid(string $articleid): static
    {
        $this->articleid = $articleid;

        return $this;
    }

    public function getClientid(): ?string
    {
        return $this->clientid;
    }

    public function setClientid(string $clientid): static
    {
        $this->clientid = $clientid;

        return $this;
    }
}
