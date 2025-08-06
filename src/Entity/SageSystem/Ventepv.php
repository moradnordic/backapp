<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\VentepvRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ventePV')]
#[ORM\Entity(repositoryClass: VentepvRepository::class)]
class Ventepv
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "client", length: 100, nullable: true)]
    private ?string $client = null;

    #[ORM\Column(name: "date", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(name: "point_de_vente_id", nullable: true)]
    private ?int $pointDeVenteId = null;

    #[ORM\Column(name: "ICE", length: 100, nullable: true)]
    private ?string $ice = null;

    #[ORM\Column(name: "societe", length: 100, nullable: true)]
    private ?string $societe = null;

    #[ORM\Column(name: "type_paimenet", length: 100, nullable: true)]
    private ?string $typePaimenet = null;

    #[ORM\Column(name: "facture", nullable: true)]
    private ?bool $facture = null;

    #[ORM\Column(name: "payee_ON", nullable: true)]
    private ?bool $payeeOn = null;

    #[ORM\Column(name: "reverse_ON", nullable: true)]
    private ?bool $reverseOn = null;

    #[ORM\Column(name: "RefReversement", nullable: true)]
    private ?int $refreversement = null;

    #[ORM\Column(name: "emailClient", length: 100, nullable: true)]
    private ?string $emailclient = null;

    #[ORM\Column(name: "RefPaimemt", length: 60, nullable: true, options: ["comment" => "detail de type de paiment cheque ou reference paiment TPE"])]
    private ?string $refpaimemt = null;

    #[ORM\Column(name: "annuler_ON", nullable: true, options: ["comment" => "si la facture et annuler "])]
    private ?bool $annulerOn = null;

    #[ORM\Column(name: "annulerPar", nullable: true, options: ["comment" => "lutilisateur qui a annuler la facture "])]
    private ?int $annulerpar = null;

    #[ORM\Column(name: "createdBy", nullable: true)]
    private ?int $createdby = null;

    #[ORM\Column(name: "refBon", length: 60, nullable: true)]
    private ?string $refbon = null;

    #[ORM\Column(name: "telephone", length: 50, nullable: true)]
    private ?string $telephone = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getPointDeVenteId(): ?int
    {
        return $this->pointDeVenteId;
    }

    public function setPointDeVenteId(?int $pointDeVenteId): static
    {
        $this->pointDeVenteId = $pointDeVenteId;

        return $this;
    }

    public function getIce(): ?string
    {
        return $this->ice;
    }

    public function setIce(?string $ice): static
    {
        $this->ice = $ice;

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(?string $societe): static
    {
        $this->societe = $societe;

        return $this;
    }

    public function getTypePaimenet(): ?string
    {
        return $this->typePaimenet;
    }

    public function setTypePaimenet(?string $typePaimenet): static
    {
        $this->typePaimenet = $typePaimenet;

        return $this;
    }

    public function getFacture(): ?bool
    {
        return $this->facture;
    }

    public function setFacture(?bool $facture): static
    {
        $this->facture = $facture;

        return $this;
    }

    public function getPayeeOn(): ?bool
    {
        return $this->payeeOn;
    }

    public function setPayeeOn(?bool $payeeOn): static
    {
        $this->payeeOn = $payeeOn;

        return $this;
    }

    public function getReverseOn(): ?bool
    {
        return $this->reverseOn;
    }

    public function setReverseOn(?bool $reverseOn): static
    {
        $this->reverseOn = $reverseOn;

        return $this;
    }

    public function getRefreversement(): ?int
    {
        return $this->refreversement;
    }

    public function setRefreversement(?int $refreversement): static
    {
        $this->refreversement = $refreversement;

        return $this;
    }

    public function getEmailclient(): ?string
    {
        return $this->emailclient;
    }

    public function setEmailclient(?string $emailclient): static
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    public function getRefpaimemt(): ?string
    {
        return $this->refpaimemt;
    }

    public function setRefpaimemt(?string $refpaimemt): static
    {
        $this->refpaimemt = $refpaimemt;

        return $this;
    }

    public function getAnnulerOn(): ?bool
    {
        return $this->annulerOn;
    }

    public function setAnnulerOn(?bool $annulerOn): static
    {
        $this->annulerOn = $annulerOn;

        return $this;
    }

    public function getAnnulerpar(): ?int
    {
        return $this->annulerpar;
    }

    public function setAnnulerpar(?int $annulerpar): static
    {
        $this->annulerpar = $annulerpar;

        return $this;
    }

    public function getCreatedby(): ?int
    {
        return $this->createdby;
    }

    public function setCreatedby(?int $createdby): static
    {
        $this->createdby = $createdby;

        return $this;
    }

    public function getRefbon(): ?string
    {
        return $this->refbon;
    }

    public function setRefbon(?string $refbon): static
    {
        $this->refbon = $refbon;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }
}
