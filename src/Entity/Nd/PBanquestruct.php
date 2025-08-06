<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PBanquestructRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_BANQUESTRUCT')]
#[ORM\Entity(repositoryClass: PBanquestructRepository::class)]
class PBanquestruct
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "B_Edi", type: Types::SMALLINT, nullable: true)]
    private ?int $bEdi = null;

    #[ORM\Column(name: "B_LBanque", type: Types::SMALLINT, nullable: true)]
    private ?int $bLbanque = null;

    #[ORM\Column(name: "B_TBanque", type: Types::SMALLINT, nullable: true)]
    private ?int $bTbanque = null;

    #[ORM\Column(name: "B_LGuichet", type: Types::SMALLINT, nullable: true)]
    private ?int $bLguichet = null;

    #[ORM\Column(name: "B_TGuichet", type: Types::SMALLINT, nullable: true)]
    private ?int $bTguichet = null;

    #[ORM\Column(name: "B_LCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $bLcompte = null;

    #[ORM\Column(name: "B_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $bTcompte = null;

    #[ORM\Column(name: "B_LCle", type: Types::SMALLINT, nullable: true)]
    private ?int $bLcle = null;

    #[ORM\Column(name: "B_TCle", type: Types::SMALLINT, nullable: true)]
    private ?int $bTcle = null;

    #[ORM\Column(name: "B_Controle", type: Types::SMALLINT, nullable: true)]
    private ?int $bControle = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getBEdi(): ?int
    {
        return $this->bEdi;
    }

    public function setBEdi(?int $bEdi): static
    {
        $this->bEdi = $bEdi;

        return $this;
    }

    public function getBLbanque(): ?int
    {
        return $this->bLbanque;
    }

    public function setBLbanque(?int $bLbanque): static
    {
        $this->bLbanque = $bLbanque;

        return $this;
    }

    public function getBTbanque(): ?int
    {
        return $this->bTbanque;
    }

    public function setBTbanque(?int $bTbanque): static
    {
        $this->bTbanque = $bTbanque;

        return $this;
    }

    public function getBLguichet(): ?int
    {
        return $this->bLguichet;
    }

    public function setBLguichet(?int $bLguichet): static
    {
        $this->bLguichet = $bLguichet;

        return $this;
    }

    public function getBTguichet(): ?int
    {
        return $this->bTguichet;
    }

    public function setBTguichet(?int $bTguichet): static
    {
        $this->bTguichet = $bTguichet;

        return $this;
    }

    public function getBLcompte(): ?int
    {
        return $this->bLcompte;
    }

    public function setBLcompte(?int $bLcompte): static
    {
        $this->bLcompte = $bLcompte;

        return $this;
    }

    public function getBTcompte(): ?int
    {
        return $this->bTcompte;
    }

    public function setBTcompte(?int $bTcompte): static
    {
        $this->bTcompte = $bTcompte;

        return $this;
    }

    public function getBLcle(): ?int
    {
        return $this->bLcle;
    }

    public function setBLcle(?int $bLcle): static
    {
        $this->bLcle = $bLcle;

        return $this;
    }

    public function getBTcle(): ?int
    {
        return $this->bTcle;
    }

    public function setBTcle(?int $bTcle): static
    {
        $this->bTcle = $bTcle;

        return $this;
    }

    public function getBControle(): ?int
    {
        return $this->bControle;
    }

    public function setBControle(?int $bControle): static
    {
        $this->bControle = $bControle;

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
