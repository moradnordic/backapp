<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\ProspectclientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'prospectClient')]
#[ORM\Entity(repositoryClass: ProspectclientRepository::class)]
class Prospectclient
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "clientName", length: 50, nullable: true)]
    private ?string $clientname = null;

    #[ORM\Column(name: "comId", nullable: true)]
    private ?int $comid = null;

    #[ORM\Column(name: "numeroTelephone", length: 50, nullable: true)]
    private ?string $numerotelephone = null;

    #[ORM\Column(name: "ville", length: 10, nullable: true, options: ["fixed" => true])]
    private ?string $ville = null;

    #[ORM\Column(name: "dateCreate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datecreate = null;

    #[ORM\Column(name: "localisation", length: 50, nullable: true)]
    private ?string $localisation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientname(): ?string
    {
        return $this->clientname;
    }

    public function setClientname(?string $clientname): static
    {
        $this->clientname = $clientname;

        return $this;
    }

    public function getComid(): ?int
    {
        return $this->comid;
    }

    public function setComid(?int $comid): static
    {
        $this->comid = $comid;

        return $this;
    }

    public function getNumerotelephone(): ?string
    {
        return $this->numerotelephone;
    }

    public function setNumerotelephone(?string $numerotelephone): static
    {
        $this->numerotelephone = $numerotelephone;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDatecreate(): ?\DateTimeInterface
    {
        return $this->datecreate;
    }

    public function setDatecreate(?\DateTimeInterface $datecreate): static
    {
        $this->datecreate = $datecreate;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }
}
