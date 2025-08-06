<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FPaysRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PAYS')]
#[ORM\UniqueConstraint(name: 'IPA_INTITULE', columns: ['cbPA_Intitule'])]
#[ORM\UniqueConstraint(name: 'IPA_NO', columns: ['PA_No'])]
#[ORM\Entity(repositoryClass: FPaysRepository::class)]
class FPays
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PA_Intitule", length: 35, nullable: true)]
    private ?string $paIntitule = null;

    #[ORM\Column(name: "cbPA_Intitule", type: Types::BINARY, nullable: true)]
    private $cbpaIntitule = null;

    #[ORM\Column(name: "PA_Code", length: 3, nullable: true)]
    private ?string $paCode = null;

    #[ORM\Column(name: "PA_CodeEdi", length: 3, nullable: true)]
    private ?string $paCodeedi = null;

    #[ORM\Column(name: "PA_Assurance", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $paAssurance = null;

    #[ORM\Column(name: "PA_Transport", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $paTransport = null;

    #[ORM\Column(name: "PA_CodeISO2", length: 3, nullable: true)]
    private ?string $paCodeiso2 = null;

    #[ORM\Column(name: "PA_SEPA", type: Types::SMALLINT, nullable: true)]
    private ?int $paSepa = null;

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

    #[ORM\Column(name: "PA_No", nullable: true)]
    private ?int $paNo = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPaIntitule(): ?string
    {
        return $this->paIntitule;
    }

    public function setPaIntitule(?string $paIntitule): static
    {
        $this->paIntitule = $paIntitule;

        return $this;
    }

    public function getCbpaIntitule()
    {
        return $this->cbpaIntitule;
    }

    public function setCbpaIntitule($cbpaIntitule): static
    {
        $this->cbpaIntitule = $cbpaIntitule;

        return $this;
    }

    public function getPaCode(): ?string
    {
        return $this->paCode;
    }

    public function setPaCode(?string $paCode): static
    {
        $this->paCode = $paCode;

        return $this;
    }

    public function getPaCodeedi(): ?string
    {
        return $this->paCodeedi;
    }

    public function setPaCodeedi(?string $paCodeedi): static
    {
        $this->paCodeedi = $paCodeedi;

        return $this;
    }

    public function getPaAssurance(): ?string
    {
        return $this->paAssurance;
    }

    public function setPaAssurance(?string $paAssurance): static
    {
        $this->paAssurance = $paAssurance;

        return $this;
    }

    public function getPaTransport(): ?string
    {
        return $this->paTransport;
    }

    public function setPaTransport(?string $paTransport): static
    {
        $this->paTransport = $paTransport;

        return $this;
    }

    public function getPaCodeiso2(): ?string
    {
        return $this->paCodeiso2;
    }

    public function setPaCodeiso2(?string $paCodeiso2): static
    {
        $this->paCodeiso2 = $paCodeiso2;

        return $this;
    }

    public function getPaSepa(): ?int
    {
        return $this->paSepa;
    }

    public function setPaSepa(?int $paSepa): static
    {
        $this->paSepa = $paSepa;

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

    public function getPaNo(): ?int
    {
        return $this->paNo;
    }

    public function setPaNo(?int $paNo): static
    {
        $this->paNo = $paNo;

        return $this;
    }
}
