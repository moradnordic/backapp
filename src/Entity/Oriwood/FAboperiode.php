<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FAboperiodeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ABOPERIODE')]
#[ORM\Index(name: 'IAP_DEBUT', columns: ['PE_Generation'])]
#[ORM\Index(name: 'IAP_ETAT', columns: ['PE_Generation'])]
#[ORM\Index(name: 'FKIA_F_ABOPERIODE_AB_No', columns: ['AB_No'])]
#[ORM\Entity(repositoryClass: FAboperiodeRepository::class)]
class FAboperiode
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AB_No")]
    private ?int $abNo = null;

    #[ORM\Column(name: "PE_Debut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $peDebut = null;

    #[ORM\Column(name: "PE_Fin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $peFin = null;

    #[ORM\Column(name: "PE_Generation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $peGeneration = null;

    #[ORM\Column(name: "PE_Livraison", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $peLivraison = null;

    #[ORM\Column(name: "PE_Etat", type: Types::SMALLINT, nullable: true)]
    private ?int $peEtat = null;

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

    public function getAbNo(): ?int
    {
        return $this->abNo;
    }

    public function setAbNo(int $abNo): static
    {
        $this->abNo = $abNo;

        return $this;
    }

    public function getPeDebut(): ?\DateTimeInterface
    {
        return $this->peDebut;
    }

    public function setPeDebut(?\DateTimeInterface $peDebut): static
    {
        $this->peDebut = $peDebut;

        return $this;
    }

    public function getPeFin(): ?\DateTimeInterface
    {
        return $this->peFin;
    }

    public function setPeFin(?\DateTimeInterface $peFin): static
    {
        $this->peFin = $peFin;

        return $this;
    }

    public function getPeGeneration(): ?\DateTimeInterface
    {
        return $this->peGeneration;
    }

    public function setPeGeneration(?\DateTimeInterface $peGeneration): static
    {
        $this->peGeneration = $peGeneration;

        return $this;
    }

    public function getPeLivraison(): ?\DateTimeInterface
    {
        return $this->peLivraison;
    }

    public function setPeLivraison(?\DateTimeInterface $peLivraison): static
    {
        $this->peLivraison = $peLivraison;

        return $this;
    }

    public function getPeEtat(): ?int
    {
        return $this->peEtat;
    }

    public function setPeEtat(?int $peEtat): static
    {
        $this->peEtat = $peEtat;

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
