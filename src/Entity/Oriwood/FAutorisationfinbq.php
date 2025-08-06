<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FAutorisationfinbqRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_AUTORISATIONFINBQ')]
#[ORM\UniqueConstraint(name: 'IAF_BQNO', columns: ['NF_No'])]
#[ORM\Index(name: 'IAF_NFNO', columns: ['NF_No'])]
#[ORM\Index(name: 'FKIA_F_AUTORISATIONFINBQ_BQ_No', columns: ['BQ_No'])]
#[ORM\Entity(repositoryClass: FAutorisationfinbqRepository::class)]
class FAutorisationfinbq
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "BQ_No")]
    private ?int $bqNo = null;

    #[ORM\Column(name: "NF_No")]
    private ?int $nfNo = null;

    #[ORM\Column(name: "AF_Autorisation", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $afAutorisation = null;

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

    public function getBqNo(): ?int
    {
        return $this->bqNo;
    }

    public function setBqNo(int $bqNo): static
    {
        $this->bqNo = $bqNo;

        return $this;
    }

    public function getNfNo(): ?int
    {
        return $this->nfNo;
    }

    public function setNfNo(int $nfNo): static
    {
        $this->nfNo = $nfNo;

        return $this;
    }

    public function getAfAutorisation(): ?string
    {
        return $this->afAutorisation;
    }

    public function setAfAutorisation(?string $afAutorisation): static
    {
        $this->afAutorisation = $afAutorisation;

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
