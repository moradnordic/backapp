<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\RapportvisiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'rapportVisite')]
#[ORM\Entity(repositoryClass: RapportvisiteRepository::class)]
class Rapportvisite
{
    #[ORM\Column(name: "id", type: Types::BIGINT)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?string $id = null;

    #[ORM\Column(name: "titre", length: 50, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(name: "dateVisite", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datevisite = null;

    #[ORM\Column(name: "dateDu", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datedu = null;

    #[ORM\Column(name: "dateAu", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateau = null;

    #[ORM\Column(name: "commerciale", length: 50, nullable: true)]
    private ?string $commerciale = null;

    #[ORM\Column(name: "client", length: 50, nullable: true)]
    private ?string $client = null;

    #[ORM\Column(name: "dateSaisie", type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datesaisie = null;

    #[ORM\Column(name: "dateModif", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datemodif = null;

    #[ORM\Column(name: "idUser", type: Types::BIGINT, nullable: true)]
    private ?string $iduser = null;

    #[ORM\Column(name: "idModif", type: Types::BIGINT, nullable: true)]
    private ?string $idmodif = null;

    #[ORM\Column(name: "type", length: 1, nullable: true)]
    private ?string $type = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDatevisite(): ?\DateTimeInterface
    {
        return $this->datevisite;
    }

    public function setDatevisite(?\DateTimeInterface $datevisite): static
    {
        $this->datevisite = $datevisite;

        return $this;
    }

    public function getDatedu(): ?\DateTimeInterface
    {
        return $this->datedu;
    }

    public function setDatedu(?\DateTimeInterface $datedu): static
    {
        $this->datedu = $datedu;

        return $this;
    }

    public function getDateau(): ?\DateTimeInterface
    {
        return $this->dateau;
    }

    public function setDateau(?\DateTimeInterface $dateau): static
    {
        $this->dateau = $dateau;

        return $this;
    }

    public function getCommerciale(): ?string
    {
        return $this->commerciale;
    }

    public function setCommerciale(?string $commerciale): static
    {
        $this->commerciale = $commerciale;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getDatesaisie(): ?\DateTimeInterface
    {
        return $this->datesaisie;
    }

    public function setDatesaisie(\DateTimeInterface $datesaisie): static
    {
        $this->datesaisie = $datesaisie;

        return $this;
    }

    public function getDatemodif(): ?\DateTimeInterface
    {
        return $this->datemodif;
    }

    public function setDatemodif(?\DateTimeInterface $datemodif): static
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    public function getIduser(): ?string
    {
        return $this->iduser;
    }

    public function setIduser(?string $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdmodif(): ?string
    {
        return $this->idmodif;
    }

    public function setIdmodif(?string $idmodif): static
    {
        $this->idmodif = $idmodif;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
