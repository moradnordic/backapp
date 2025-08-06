<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FBilletpieceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_BILLETPIECE')]
#[ORM\Index(name: 'IBI_VALEUR', columns: ['BI_Valeur'])]
#[ORM\Entity(repositoryClass: FBilletpieceRepository::class)]
class FBilletpiece
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "BI_Intitule", length: 35, nullable: true)]
    private ?string $biIntitule = null;

    #[ORM\Column(name: "BI_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $biValeur = null;

    #[ORM\Column(name: "cbProt", type: Types::SMALLINT, nullable: true)]
    private ?int $cbprot = null;

    #[ORM\Column(name: "cbCreateur", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbcreateur = 'CSQL';

    #[ORM\Column(name: "cbModification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbmodification = null;

    #[ORM\Column(name: "cbReplication", nullable: true)]
    private ?int $cbreplication = null;

    #[ORM\Column(name: "cbFlag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbflag = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getNDevise(): ?int
    {
        return $this->nDevise;
    }

    public function setNDevise(?int $nDevise): static
    {
        $this->nDevise = $nDevise;

        return $this;
    }

    public function getBiIntitule(): ?string
    {
        return $this->biIntitule;
    }

    public function setBiIntitule(?string $biIntitule): static
    {
        $this->biIntitule = $biIntitule;

        return $this;
    }

    public function getBiValeur(): ?string
    {
        return $this->biValeur;
    }

    public function setBiValeur(?string $biValeur): static
    {
        $this->biValeur = $biValeur;

        return $this;
    }

    public function getCbprot(): ?int
    {
        return $this->cbprot;
    }

    public function setCbprot(?int $cbprot): static
    {
        $this->cbprot = $cbprot;

        return $this;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): static
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): static
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getCbreplication(): ?int
    {
        return $this->cbreplication;
    }

    public function setCbreplication(?int $cbreplication): static
    {
        $this->cbreplication = $cbreplication;

        return $this;
    }

    public function getCbflag(): ?int
    {
        return $this->cbflag;
    }

    public function setCbflag(?int $cbflag): static
    {
        $this->cbflag = $cbflag;

        return $this;
    }
}
