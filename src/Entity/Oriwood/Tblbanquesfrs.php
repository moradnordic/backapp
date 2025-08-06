<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblbanquesfrsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblBanquesFrs')]
#[ORM\Entity(repositoryClass: TblbanquesfrsRepository::class)]
class Tblbanquesfrs
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Frs", nullable: true)]
    private ?int $frs = null;

    #[ORM\Column(name: "NomCompleBqeFrs", length: 255, nullable: true)]
    private ?string $nomcomplebqefrs = null;

    #[ORM\Column(name: "AdresseBanqueFrs", length: 255, nullable: true)]
    private ?string $adressebanquefrs = null;

    #[ORM\Column(name: "VillesBqueFrs", length: 255, nullable: true)]
    private ?string $villesbquefrs = null;

    #[ORM\Column(name: "PaysBanqueFrs", length: 255, nullable: true)]
    private ?string $paysbanquefrs = null;

    #[ORM\Column(name: "CodePostalBanqueFrs", length: 255, nullable: true)]
    private ?string $codepostalbanquefrs = null;

    #[ORM\Column(name: "IBAN_BqueFrs", length: 255, nullable: true)]
    private ?string $ibanBquefrs = null;

    #[ORM\Column(name: "Swift_BanqueFrs", length: 255, nullable: true)]
    private ?string $swiftBanquefrs = null;

    #[ORM\Column(name: "BanqueBranche", length: 255, nullable: true)]
    private ?string $banquebranche = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getFrs(): ?int
    {
        return $this->frs;
    }

    public function setFrs(?int $frs): static
    {
        $this->frs = $frs;

        return $this;
    }

    public function getNomcomplebqefrs(): ?string
    {
        return $this->nomcomplebqefrs;
    }

    public function setNomcomplebqefrs(?string $nomcomplebqefrs): static
    {
        $this->nomcomplebqefrs = $nomcomplebqefrs;

        return $this;
    }

    public function getAdressebanquefrs(): ?string
    {
        return $this->adressebanquefrs;
    }

    public function setAdressebanquefrs(?string $adressebanquefrs): static
    {
        $this->adressebanquefrs = $adressebanquefrs;

        return $this;
    }

    public function getVillesbquefrs(): ?string
    {
        return $this->villesbquefrs;
    }

    public function setVillesbquefrs(?string $villesbquefrs): static
    {
        $this->villesbquefrs = $villesbquefrs;

        return $this;
    }

    public function getPaysbanquefrs(): ?string
    {
        return $this->paysbanquefrs;
    }

    public function setPaysbanquefrs(?string $paysbanquefrs): static
    {
        $this->paysbanquefrs = $paysbanquefrs;

        return $this;
    }

    public function getCodepostalbanquefrs(): ?string
    {
        return $this->codepostalbanquefrs;
    }

    public function setCodepostalbanquefrs(?string $codepostalbanquefrs): static
    {
        $this->codepostalbanquefrs = $codepostalbanquefrs;

        return $this;
    }

    public function getIbanBquefrs(): ?string
    {
        return $this->ibanBquefrs;
    }

    public function setIbanBquefrs(?string $ibanBquefrs): static
    {
        $this->ibanBquefrs = $ibanBquefrs;

        return $this;
    }

    public function getSwiftBanquefrs(): ?string
    {
        return $this->swiftBanquefrs;
    }

    public function setSwiftBanquefrs(?string $swiftBanquefrs): static
    {
        $this->swiftBanquefrs = $swiftBanquefrs;

        return $this;
    }

    public function getBanquebranche(): ?string
    {
        return $this->banquebranche;
    }

    public function setBanquebranche(?string $banquebranche): static
    {
        $this->banquebranche = $banquebranche;

        return $this;
    }
}
