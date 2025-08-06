<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblfrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblFrs')]
#[ORM\Entity(repositoryClass: TblfrsRepository::class)]
class Tblfrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "TypeFrs", nullable: true)]
    private ?int $typefrs = null;

    #[ORM\Column(name: "CodeFrsSage", length: 255, nullable: true)]
    private ?string $codefrssage = null;

    #[ORM\Column(name: "NomFrs", length: 255, nullable: true)]
    private ?string $nomfrs = null;

    #[ORM\Column(name: "FrsFullName", length: 255, nullable: true)]
    private ?string $frsfullname = null;

    #[ORM\Column(name: "AdresseFrs", length: 255, nullable: true)]
    private ?string $adressefrs = null;

    #[ORM\Column(name: "VilleFrs", length: 255, nullable: true)]
    private ?string $villefrs = null;

    #[ORM\Column(name: "PaysFrs", length: 255, nullable: true)]
    private ?string $paysfrs = null;

    #[ORM\Column(name: "CodePostalFrs", length: 255, nullable: true)]
    private ?string $codepostalfrs = null;

    #[ORM\Column(name: "ManagersFrs", nullable: true)]
    private ?int $managersfrs = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getTypefrs(): ?int
    {
        return $this->typefrs;
    }

    public function setTypefrs(?int $typefrs): static
    {
        $this->typefrs = $typefrs;

        return $this;
    }

    public function getCodefrssage(): ?string
    {
        return $this->codefrssage;
    }

    public function setCodefrssage(?string $codefrssage): static
    {
        $this->codefrssage = $codefrssage;

        return $this;
    }

    public function getNomfrs(): ?string
    {
        return $this->nomfrs;
    }

    public function setNomfrs(?string $nomfrs): static
    {
        $this->nomfrs = $nomfrs;

        return $this;
    }

    public function getFrsfullname(): ?string
    {
        return $this->frsfullname;
    }

    public function setFrsfullname(?string $frsfullname): static
    {
        $this->frsfullname = $frsfullname;

        return $this;
    }

    public function getAdressefrs(): ?string
    {
        return $this->adressefrs;
    }

    public function setAdressefrs(?string $adressefrs): static
    {
        $this->adressefrs = $adressefrs;

        return $this;
    }

    public function getVillefrs(): ?string
    {
        return $this->villefrs;
    }

    public function setVillefrs(?string $villefrs): static
    {
        $this->villefrs = $villefrs;

        return $this;
    }

    public function getPaysfrs(): ?string
    {
        return $this->paysfrs;
    }

    public function setPaysfrs(?string $paysfrs): static
    {
        $this->paysfrs = $paysfrs;

        return $this;
    }

    public function getCodepostalfrs(): ?string
    {
        return $this->codepostalfrs;
    }

    public function setCodepostalfrs(?string $codepostalfrs): static
    {
        $this->codepostalfrs = $codepostalfrs;

        return $this;
    }

    public function getManagersfrs(): ?int
    {
        return $this->managersfrs;
    }

    public function setManagersfrs(?int $managersfrs): static
    {
        $this->managersfrs = $managersfrs;

        return $this;
    }
}
