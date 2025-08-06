<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbltypemodepaiementlocauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTypeModePaiementLocaux')]
#[ORM\Entity(repositoryClass: TbltypemodepaiementlocauxRepository::class)]
class Tbltypemodepaiementlocaux
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Mode", length: 255, nullable: true)]
    private ?string $mode = null;

    #[ORM\Column(name: "Banque")]
    private ?bool $banque = null;

    #[ORM\Column(name: "Risque")]
    private ?bool $risque = null;

    #[ORM\Column(name: "AffectCommercial")]
    private ?bool $affectcommercial = null;

    #[ORM\Column(name: "NumPiece")]
    private ?bool $numpiece = null;

    #[ORM\Column(name: "Escompte")]
    private ?bool $escompte = null;

    #[ORM\Column(name: "AffecteClient")]
    private ?bool $affecteclient = null;

    #[ORM\Column(name: "AutreAgenceBanque")]
    private ?bool $autreagencebanque = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): static
    {
        $this->mode = $mode;

        return $this;
    }

    public function getBanque(): ?bool
    {
        return $this->banque;
    }

    public function setBanque(bool $banque): static
    {
        $this->banque = $banque;

        return $this;
    }

    public function getRisque(): ?bool
    {
        return $this->risque;
    }

    public function setRisque(bool $risque): static
    {
        $this->risque = $risque;

        return $this;
    }

    public function getAffectcommercial(): ?bool
    {
        return $this->affectcommercial;
    }

    public function setAffectcommercial(bool $affectcommercial): static
    {
        $this->affectcommercial = $affectcommercial;

        return $this;
    }

    public function getNumpiece(): ?bool
    {
        return $this->numpiece;
    }

    public function setNumpiece(bool $numpiece): static
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    public function getEscompte(): ?bool
    {
        return $this->escompte;
    }

    public function setEscompte(bool $escompte): static
    {
        $this->escompte = $escompte;

        return $this;
    }

    public function getAffecteclient(): ?bool
    {
        return $this->affecteclient;
    }

    public function setAffecteclient(bool $affecteclient): static
    {
        $this->affecteclient = $affecteclient;

        return $this;
    }

    public function getAutreagencebanque(): ?bool
    {
        return $this->autreagencebanque;
    }

    public function setAutreagencebanque(bool $autreagencebanque): static
    {
        $this->autreagencebanque = $autreagencebanque;

        return $this;
    }
}
