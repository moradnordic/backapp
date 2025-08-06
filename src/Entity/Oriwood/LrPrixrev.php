<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\LrPrixrevRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_PRIXREV')]
#[ORM\Entity(repositoryClass: LrPrixrevRepository::class)]
class LrPrixrev
{
    #[ORM\Column(name: "id_Stk")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $idStk = null;

    #[ORM\Column(name: "Ref_Art", length: 50, nullable: true)]
    private ?string $refArt = null;

    #[ORM\Column(name: "Prix_Revient", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $prixRevient = null;

    #[ORM\Column(name: "Date_Mod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateMod = null;

    public function getIdStk(): ?int
    {
        return $this->idStk;
    }

    public function getRefArt(): ?string
    {
        return $this->refArt;
    }

    public function setRefArt(?string $refArt): static
    {
        $this->refArt = $refArt;

        return $this;
    }

    public function getPrixRevient(): ?string
    {
        return $this->prixRevient;
    }

    public function setPrixRevient(?string $prixRevient): static
    {
        $this->prixRevient = $prixRevient;

        return $this;
    }

    public function getDateMod(): ?\DateTimeInterface
    {
        return $this->dateMod;
    }

    public function setDateMod(?\DateTimeInterface $dateMod): static
    {
        $this->dateMod = $dateMod;

        return $this;
    }
}
