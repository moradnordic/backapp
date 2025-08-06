<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\AaaAzReferenceLotRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'AAA_AZ_Reference_Lot')]
#[ORM\Entity(repositoryClass: AaaAzReferenceLotRepository::class)]
class AaaAzReferenceLot
{
    #[ORM\Column(name: "def_sage", length: 50, nullable: true)]
    private ?string $defSage = null;

    #[ORM\Column(name: "desg_frs", length: 50, nullable: true)]
    private ?string $desgFrs = null;

    #[ORM\Column(name: "frs_code", length: 50, nullable: true)]
    private ?string $frsCode = null;

    #[ORM\Column(name: "ref_article", length: 50, nullable: true)]
    private ?string $refArticle = null;

    public function getDefSage(): ?string
    {
        return $this->defSage;
    }

    public function setDefSage(?string $defSage): static
    {
        $this->defSage = $defSage;

        return $this;
    }

    public function getDesgFrs(): ?string
    {
        return $this->desgFrs;
    }

    public function setDesgFrs(?string $desgFrs): static
    {
        $this->desgFrs = $desgFrs;

        return $this;
    }

    public function getFrsCode(): ?string
    {
        return $this->frsCode;
    }

    public function setFrsCode(?string $frsCode): static
    {
        $this->frsCode = $frsCode;

        return $this;
    }

    public function getRefArticle(): ?string
    {
        return $this->refArticle;
    }

    public function setRefArticle(?string $refArticle): static
    {
        $this->refArticle = $refArticle;

        return $this;
    }
}
