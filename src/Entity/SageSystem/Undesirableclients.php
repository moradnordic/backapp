<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\UndesirableclientsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'undesirableClients')]
#[ORM\UniqueConstraint(name: 'UQ__undesira__B5AE4EC93ABCA7AC', columns: ['ID_Client'])]
#[ORM\Entity(repositoryClass: UndesirableclientsRepository::class)]
class Undesirableclients
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "ID_Client", length: 50)]
    private ?string $idClient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?string
    {
        return $this->idClient;
    }

    public function setIdClient(string $idClient): static
    {
        $this->idClient = $idClient;

        return $this;
    }
}
