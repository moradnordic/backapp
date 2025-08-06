<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PLettrageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_LETTRAGE')]
#[ORM\Entity(repositoryClass: PLettrageRepository::class)]
class PLettrage
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "JO_Num", length: 7, nullable: true)]
    private ?string $joNum = null;

    #[ORM\Column(name: "PI_NoDebit", nullable: true)]
    private ?int $piNodebit = null;

    #[ORM\Column(name: "PI_NoCredit", nullable: true)]
    private ?int $piNocredit = null;

    #[ORM\Column(name: "L_MaxDebit", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lMaxdebit = null;

    #[ORM\Column(name: "L_MaxCredit", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lMaxcredit = null;

    #[ORM\Column(name: "L_Conv", type: Types::SMALLINT, nullable: true)]
    private ?int $lConv = null;

    #[ORM\Column(name: "JO_NumConv", length: 7, nullable: true)]
    private ?string $joNumconv = null;

    #[ORM\Column(name: "PI_NoDebitConv", nullable: true)]
    private ?int $piNodebitconv = null;

    #[ORM\Column(name: "PI_NoCreditConv", nullable: true)]
    private ?int $piNocreditconv = null;

    #[ORM\Column(name: "L_SeuilConv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lSeuilconv = null;

    #[ORM\Column(name: "JO_NumChange", length: 7, nullable: true)]
    private ?string $joNumchange = null;

    #[ORM\Column(name: "PI_NoDebitChange", nullable: true)]
    private ?int $piNodebitchange = null;

    #[ORM\Column(name: "PI_NoCreditChange", nullable: true)]
    private ?int $piNocreditchange = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(?string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getPiNodebit(): ?int
    {
        return $this->piNodebit;
    }

    public function setPiNodebit(?int $piNodebit): static
    {
        $this->piNodebit = $piNodebit;

        return $this;
    }

    public function getPiNocredit(): ?int
    {
        return $this->piNocredit;
    }

    public function setPiNocredit(?int $piNocredit): static
    {
        $this->piNocredit = $piNocredit;

        return $this;
    }

    public function getLMaxdebit(): ?string
    {
        return $this->lMaxdebit;
    }

    public function setLMaxdebit(?string $lMaxdebit): static
    {
        $this->lMaxdebit = $lMaxdebit;

        return $this;
    }

    public function getLMaxcredit(): ?string
    {
        return $this->lMaxcredit;
    }

    public function setLMaxcredit(?string $lMaxcredit): static
    {
        $this->lMaxcredit = $lMaxcredit;

        return $this;
    }

    public function getLConv(): ?int
    {
        return $this->lConv;
    }

    public function setLConv(?int $lConv): static
    {
        $this->lConv = $lConv;

        return $this;
    }

    public function getJoNumconv(): ?string
    {
        return $this->joNumconv;
    }

    public function setJoNumconv(?string $joNumconv): static
    {
        $this->joNumconv = $joNumconv;

        return $this;
    }

    public function getPiNodebitconv(): ?int
    {
        return $this->piNodebitconv;
    }

    public function setPiNodebitconv(?int $piNodebitconv): static
    {
        $this->piNodebitconv = $piNodebitconv;

        return $this;
    }

    public function getPiNocreditconv(): ?int
    {
        return $this->piNocreditconv;
    }

    public function setPiNocreditconv(?int $piNocreditconv): static
    {
        $this->piNocreditconv = $piNocreditconv;

        return $this;
    }

    public function getLSeuilconv(): ?string
    {
        return $this->lSeuilconv;
    }

    public function setLSeuilconv(?string $lSeuilconv): static
    {
        $this->lSeuilconv = $lSeuilconv;

        return $this;
    }

    public function getJoNumchange(): ?string
    {
        return $this->joNumchange;
    }

    public function setJoNumchange(?string $joNumchange): static
    {
        $this->joNumchange = $joNumchange;

        return $this;
    }

    public function getPiNodebitchange(): ?int
    {
        return $this->piNodebitchange;
    }

    public function setPiNodebitchange(?int $piNodebitchange): static
    {
        $this->piNodebitchange = $piNodebitchange;

        return $this;
    }

    public function getPiNocreditchange(): ?int
    {
        return $this->piNocreditchange;
    }

    public function setPiNocreditchange(?int $piNocreditchange): static
    {
        $this->piNocreditchange = $piNocreditchange;

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
