<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PReglementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_REGLEMENT')]
#[ORM\Entity(repositoryClass: PReglementRepository::class)]
class PReglement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Intitule", length: 35, nullable: true)]
    private ?string $rIntitule = null;

    #[ORM\Column(name: "R_Code", length: 3, nullable: true)]
    private ?string $rCode = null;

    #[ORM\Column(name: "R_ModePaieDebit", type: Types::SMALLINT, nullable: true)]
    private ?int $rModepaiedebit = null;

    #[ORM\Column(name: "R_ModePaieCredit", type: Types::SMALLINT, nullable: true)]
    private ?int $rModepaiecredit = null;

    #[ORM\Column(name: "IB_AFBDecaissPrinc", length: 3, nullable: true)]
    private ?string $ibAfbdecaissprinc = null;

    #[ORM\Column(name: "IB_AFBEncaissPrinc", length: 3, nullable: true)]
    private ?string $ibAfbencaissprinc = null;

    #[ORM\Column(name: "EB_NoDecaiss", nullable: true)]
    private ?int $ebNodecaiss = null;

    #[ORM\Column(name: "EB_NoEncaiss", nullable: true)]
    private ?int $ebNoencaiss = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    #[ORM\Column(name: "R_EdiCode", length: 3, nullable: true)]
    private ?string $rEdicode = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRIntitule(): ?string
    {
        return $this->rIntitule;
    }

    public function setRIntitule(?string $rIntitule): static
    {
        $this->rIntitule = $rIntitule;

        return $this;
    }

    public function getRCode(): ?string
    {
        return $this->rCode;
    }

    public function setRCode(?string $rCode): static
    {
        $this->rCode = $rCode;

        return $this;
    }

    public function getRModepaiedebit(): ?int
    {
        return $this->rModepaiedebit;
    }

    public function setRModepaiedebit(?int $rModepaiedebit): static
    {
        $this->rModepaiedebit = $rModepaiedebit;

        return $this;
    }

    public function getRModepaiecredit(): ?int
    {
        return $this->rModepaiecredit;
    }

    public function setRModepaiecredit(?int $rModepaiecredit): static
    {
        $this->rModepaiecredit = $rModepaiecredit;

        return $this;
    }

    public function getIbAfbdecaissprinc(): ?string
    {
        return $this->ibAfbdecaissprinc;
    }

    public function setIbAfbdecaissprinc(?string $ibAfbdecaissprinc): static
    {
        $this->ibAfbdecaissprinc = $ibAfbdecaissprinc;

        return $this;
    }

    public function getIbAfbencaissprinc(): ?string
    {
        return $this->ibAfbencaissprinc;
    }

    public function setIbAfbencaissprinc(?string $ibAfbencaissprinc): static
    {
        $this->ibAfbencaissprinc = $ibAfbencaissprinc;

        return $this;
    }

    public function getEbNodecaiss(): ?int
    {
        return $this->ebNodecaiss;
    }

    public function setEbNodecaiss(?int $ebNodecaiss): static
    {
        $this->ebNodecaiss = $ebNodecaiss;

        return $this;
    }

    public function getEbNoencaiss(): ?int
    {
        return $this->ebNoencaiss;
    }

    public function setEbNoencaiss(?int $ebNoencaiss): static
    {
        $this->ebNoencaiss = $ebNoencaiss;

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

    public function getREdicode(): ?string
    {
        return $this->rEdicode;
    }

    public function setREdicode(?string $rEdicode): static
    {
        $this->rEdicode = $rEdicode;

        return $this;
    }
}
