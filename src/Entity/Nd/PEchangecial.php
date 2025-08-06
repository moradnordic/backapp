<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PEchangecialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ECHANGECIAL')]
#[ORM\Entity(repositoryClass: PEchangecialRepository::class)]
class PEchangecial
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "E_TauxRemise01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eTauxremise01 = null;

    #[ORM\Column(name: "E_TauxRemise02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eTauxremise02 = null;

    #[ORM\Column(name: "E_TauxRemise03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eTauxremise03 = null;

    #[ORM\Column(name: "E_TauxRemise04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eTauxremise04 = null;

    #[ORM\Column(name: "E_TauxRemise05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $eTauxremise05 = null;

    #[ORM\Column(name: "AR_Ref01", length: 19, nullable: true)]
    private ?string $arRef01 = null;

    #[ORM\Column(name: "AR_Ref02", length: 19, nullable: true)]
    private ?string $arRef02 = null;

    #[ORM\Column(name: "AR_Ref03", length: 19, nullable: true)]
    private ?string $arRef03 = null;

    #[ORM\Column(name: "AR_Ref04", length: 19, nullable: true)]
    private ?string $arRef04 = null;

    #[ORM\Column(name: "AR_Ref05", length: 19, nullable: true)]
    private ?string $arRef05 = null;

    #[ORM\Column(name: "E_SousTrait", type: Types::SMALLINT, nullable: true)]
    private ?int $eSoustrait = null;

    #[ORM\Column(name: "E_SousTraitCommande", type: Types::SMALLINT, nullable: true)]
    private ?int $eSoustraitcommande = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getETauxremise01(): ?string
    {
        return $this->eTauxremise01;
    }

    public function setETauxremise01(?string $eTauxremise01): static
    {
        $this->eTauxremise01 = $eTauxremise01;

        return $this;
    }

    public function getETauxremise02(): ?string
    {
        return $this->eTauxremise02;
    }

    public function setETauxremise02(?string $eTauxremise02): static
    {
        $this->eTauxremise02 = $eTauxremise02;

        return $this;
    }

    public function getETauxremise03(): ?string
    {
        return $this->eTauxremise03;
    }

    public function setETauxremise03(?string $eTauxremise03): static
    {
        $this->eTauxremise03 = $eTauxremise03;

        return $this;
    }

    public function getETauxremise04(): ?string
    {
        return $this->eTauxremise04;
    }

    public function setETauxremise04(?string $eTauxremise04): static
    {
        $this->eTauxremise04 = $eTauxremise04;

        return $this;
    }

    public function getETauxremise05(): ?string
    {
        return $this->eTauxremise05;
    }

    public function setETauxremise05(?string $eTauxremise05): static
    {
        $this->eTauxremise05 = $eTauxremise05;

        return $this;
    }

    public function getArRef01(): ?string
    {
        return $this->arRef01;
    }

    public function setArRef01(?string $arRef01): static
    {
        $this->arRef01 = $arRef01;

        return $this;
    }

    public function getArRef02(): ?string
    {
        return $this->arRef02;
    }

    public function setArRef02(?string $arRef02): static
    {
        $this->arRef02 = $arRef02;

        return $this;
    }

    public function getArRef03(): ?string
    {
        return $this->arRef03;
    }

    public function setArRef03(?string $arRef03): static
    {
        $this->arRef03 = $arRef03;

        return $this;
    }

    public function getArRef04(): ?string
    {
        return $this->arRef04;
    }

    public function setArRef04(?string $arRef04): static
    {
        $this->arRef04 = $arRef04;

        return $this;
    }

    public function getArRef05(): ?string
    {
        return $this->arRef05;
    }

    public function setArRef05(?string $arRef05): static
    {
        $this->arRef05 = $arRef05;

        return $this;
    }

    public function getESoustrait(): ?int
    {
        return $this->eSoustrait;
    }

    public function setESoustrait(?int $eSoustrait): static
    {
        $this->eSoustrait = $eSoustrait;

        return $this;
    }

    public function getESoustraitcommande(): ?int
    {
        return $this->eSoustraitcommande;
    }

    public function setESoustraitcommande(?int $eSoustraitcommande): static
    {
        $this->eSoustraitcommande = $eSoustraitcommande;

        return $this;
    }
}
