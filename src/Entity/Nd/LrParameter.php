<?php

namespace App\Entity\Nd;

use App\Repository\Nd\LrParameterRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'LR_Parameter')]
#[ORM\Entity(repositoryClass: LrParameterRepository::class)]
class LrParameter
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Mode_Reg", length: 150, nullable: true)]
    private ?string $modeReg = null;

    #[ORM\Column(name: "Compte_Reg", length: 150, nullable: true)]
    private ?string $compteReg = null;

    #[ORM\Column(name: "Code_Jour", length: 150, nullable: true)]
    private ?string $codeJour = null;

    #[ORM\Column(name: "Compte_Avan", length: 150, nullable: true)]
    private ?string $compteAvan = null;

    #[ORM\Column(name: "Code_Journ_OD", length: 150, nullable: true)]
    private ?string $codeJournOd = null;

    #[ORM\Column(name: "Compte_Ecart_Plus", length: 150, nullable: true)]
    private ?string $compteEcartPlus = null;

    #[ORM\Column(name: "Compte_Ecart_Moins", length: 150, nullable: true)]
    private ?string $compteEcartMoins = null;

    #[ORM\Column(name: "Transmission", type: Types::SMALLINT, nullable: true)]
    private ?int $transmission = null;

    #[ORM\Column(name: "Comptabilisation", type: Types::SMALLINT, nullable: true)]
    private ?int $comptabilisation = null;

    #[ORM\Column(name: "Financement", length: 150, nullable: true)]
    private ?string $financement = null;

    #[ORM\Column(name: "intérêts", length: 150, nullable: true)]
    private ?string $intérêts = null;

    #[ORM\Column(name: "Ecart_Change_Plus", length: 150, nullable: true)]
    private ?string $ecartChangePlus = null;

    #[ORM\Column(name: "Ecart_Change_Moins", length: 150, nullable: true)]
    private ?string $ecartChangeMoins = null;

    #[ORM\Column(name: "CompteTV20", length: 50, nullable: true)]
    private ?string $comptetv20 = null;

    #[ORM\Column(name: "CompteTV14", length: 50, nullable: true)]
    private ?string $comptetv14 = null;

    #[ORM\Column(name: "CompteTV7", length: 50, nullable: true)]
    private ?string $comptetv7 = null;

    #[ORM\Column(name: "CompteTV10", length: 50, nullable: true)]
    private ?string $comptetv10 = null;

    #[ORM\Column(name: "Journ_OD", length: 50, nullable: true)]
    private ?string $journOd = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModeReg(): ?string
    {
        return $this->modeReg;
    }

    public function setModeReg(?string $modeReg): static
    {
        $this->modeReg = $modeReg;

        return $this;
    }

    public function getCompteReg(): ?string
    {
        return $this->compteReg;
    }

    public function setCompteReg(?string $compteReg): static
    {
        $this->compteReg = $compteReg;

        return $this;
    }

    public function getCodeJour(): ?string
    {
        return $this->codeJour;
    }

    public function setCodeJour(?string $codeJour): static
    {
        $this->codeJour = $codeJour;

        return $this;
    }

    public function getCompteAvan(): ?string
    {
        return $this->compteAvan;
    }

    public function setCompteAvan(?string $compteAvan): static
    {
        $this->compteAvan = $compteAvan;

        return $this;
    }

    public function getCodeJournOd(): ?string
    {
        return $this->codeJournOd;
    }

    public function setCodeJournOd(?string $codeJournOd): static
    {
        $this->codeJournOd = $codeJournOd;

        return $this;
    }

    public function getCompteEcartPlus(): ?string
    {
        return $this->compteEcartPlus;
    }

    public function setCompteEcartPlus(?string $compteEcartPlus): static
    {
        $this->compteEcartPlus = $compteEcartPlus;

        return $this;
    }

    public function getCompteEcartMoins(): ?string
    {
        return $this->compteEcartMoins;
    }

    public function setCompteEcartMoins(?string $compteEcartMoins): static
    {
        $this->compteEcartMoins = $compteEcartMoins;

        return $this;
    }

    public function getTransmission(): ?int
    {
        return $this->transmission;
    }

    public function setTransmission(?int $transmission): static
    {
        $this->transmission = $transmission;

        return $this;
    }

    public function getComptabilisation(): ?int
    {
        return $this->comptabilisation;
    }

    public function setComptabilisation(?int $comptabilisation): static
    {
        $this->comptabilisation = $comptabilisation;

        return $this;
    }

    public function getFinancement(): ?string
    {
        return $this->financement;
    }

    public function setFinancement(?string $financement): static
    {
        $this->financement = $financement;

        return $this;
    }

    public function getIntérêts(): ?string
    {
        return $this->intérêts;
    }

    public function setIntérêts(?string $intérêts): static
    {
        $this->intérêts = $intérêts;

        return $this;
    }

    public function getEcartChangePlus(): ?string
    {
        return $this->ecartChangePlus;
    }

    public function setEcartChangePlus(?string $ecartChangePlus): static
    {
        $this->ecartChangePlus = $ecartChangePlus;

        return $this;
    }

    public function getEcartChangeMoins(): ?string
    {
        return $this->ecartChangeMoins;
    }

    public function setEcartChangeMoins(?string $ecartChangeMoins): static
    {
        $this->ecartChangeMoins = $ecartChangeMoins;

        return $this;
    }

    public function getComptetv20(): ?string
    {
        return $this->comptetv20;
    }

    public function setComptetv20(?string $comptetv20): static
    {
        $this->comptetv20 = $comptetv20;

        return $this;
    }

    public function getComptetv14(): ?string
    {
        return $this->comptetv14;
    }

    public function setComptetv14(?string $comptetv14): static
    {
        $this->comptetv14 = $comptetv14;

        return $this;
    }

    public function getComptetv7(): ?string
    {
        return $this->comptetv7;
    }

    public function setComptetv7(?string $comptetv7): static
    {
        $this->comptetv7 = $comptetv7;

        return $this;
    }

    public function getComptetv10(): ?string
    {
        return $this->comptetv10;
    }

    public function setComptetv10(?string $comptetv10): static
    {
        $this->comptetv10 = $comptetv10;

        return $this;
    }

    public function getJournOd(): ?string
    {
        return $this->journOd;
    }

    public function setJournOd(?string $journOd): static
    {
        $this->journOd = $journOd;

        return $this;
    }
}
