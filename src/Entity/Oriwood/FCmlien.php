<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCmlienRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CMLIEN')]
#[ORM\Index(name: 'ICM_NOOUT', columns: ['DL_NoIn'])]
#[ORM\Index(name: 'ICM_NOIN', columns: ['DL_NoOut'])]
#[ORM\Entity(repositoryClass: FCmlienRepository::class)]
class FCmlien
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DL_NoOut", nullable: true)]
    private ?int $dlNoout = null;

    #[ORM\Column(name: "DL_NoIn", nullable: true)]
    private ?int $dlNoin = null;

    #[ORM\Column(name: "CM_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cmQte = null;

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

    public function getDlNoout(): ?int
    {
        return $this->dlNoout;
    }

    public function setDlNoout(?int $dlNoout): static
    {
        $this->dlNoout = $dlNoout;

        return $this;
    }

    public function getDlNoin(): ?int
    {
        return $this->dlNoin;
    }

    public function setDlNoin(?int $dlNoin): static
    {
        $this->dlNoin = $dlNoin;

        return $this;
    }

    public function getCmQte(): ?string
    {
        return $this->cmQte;
    }

    public function setCmQte(?string $cmQte): static
    {
        $this->cmQte = $cmQte;

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
