<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PExpeditionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_EXPEDITION')]
#[ORM\Entity(repositoryClass: PExpeditionRepository::class)]
class PExpedition
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "E_Intitule", length: 35, nullable: true)]
    private ?string $eIntitule = null;

    #[ORM\Column(name: "E_Mode", length: 3, nullable: true)]
    private ?string $eMode = null;

    #[ORM\Column(name: "AR_Ref", length: 19, nullable: true)]
    private ?string $arRef = null;

    #[ORM\Column(name: "E_TypeFrais", type: Types::SMALLINT, nullable: true)]
    private ?int $eTypefrais = null;

    #[ORM\Column(name: "E_ValFrais", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eValfrais = null;

    #[ORM\Column(name: "E_TypeLigneFrais", type: Types::SMALLINT, nullable: true)]
    private ?int $eTypelignefrais = null;

    #[ORM\Column(name: "E_TypeFranco", type: Types::SMALLINT, nullable: true)]
    private ?int $eTypefranco = null;

    #[ORM\Column(name: "E_ValFranco", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eValfranco = null;

    #[ORM\Column(name: "E_TypeLigneFranco", type: Types::SMALLINT, nullable: true)]
    private ?int $eTypelignefranco = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getEIntitule(): ?string
    {
        return $this->eIntitule;
    }

    public function setEIntitule(?string $eIntitule): static
    {
        $this->eIntitule = $eIntitule;

        return $this;
    }

    public function getEMode(): ?string
    {
        return $this->eMode;
    }

    public function setEMode(?string $eMode): static
    {
        $this->eMode = $eMode;

        return $this;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(?string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getETypefrais(): ?int
    {
        return $this->eTypefrais;
    }

    public function setETypefrais(?int $eTypefrais): static
    {
        $this->eTypefrais = $eTypefrais;

        return $this;
    }

    public function getEValfrais(): ?string
    {
        return $this->eValfrais;
    }

    public function setEValfrais(?string $eValfrais): static
    {
        $this->eValfrais = $eValfrais;

        return $this;
    }

    public function getETypelignefrais(): ?int
    {
        return $this->eTypelignefrais;
    }

    public function setETypelignefrais(?int $eTypelignefrais): static
    {
        $this->eTypelignefrais = $eTypelignefrais;

        return $this;
    }

    public function getETypefranco(): ?int
    {
        return $this->eTypefranco;
    }

    public function setETypefranco(?int $eTypefranco): static
    {
        $this->eTypefranco = $eTypefranco;

        return $this;
    }

    public function getEValfranco(): ?string
    {
        return $this->eValfranco;
    }

    public function setEValfranco(?string $eValfranco): static
    {
        $this->eValfranco = $eValfranco;

        return $this;
    }

    public function getETypelignefranco(): ?int
    {
        return $this->eTypelignefranco;
    }

    public function setETypelignefranco(?int $eTypelignefranco): static
    {
        $this->eTypelignefranco = $eTypelignefranco;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
