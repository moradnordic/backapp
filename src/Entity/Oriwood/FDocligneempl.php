<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FDocligneemplRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DOCLIGNEEMPL')]
#[ORM\UniqueConstraint(name: 'IDL_LIGNEEMPL', columns: ['DP_No'])]
#[ORM\Index(name: 'IDL_EMPL', columns: ['DP_No'])]
#[ORM\Index(name: 'FKIA_F_DOCLIGNEEMPL_DL_No', columns: ['DL_No'])]
#[ORM\Index(name: 'FKIA_F_DOCLIGNEEMPL_DP_No', columns: ['DP_No'])]
#[ORM\Entity(repositoryClass: FDocligneemplRepository::class)]
class FDocligneempl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DL_No")]
    private ?int $dlNo = null;

    #[ORM\Column(name: "DP_No")]
    private ?int $dpNo = null;

    #[ORM\Column(name: "DL_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlQte = null;

    #[ORM\Column(name: "DL_QteAControler", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dlQteacontroler = null;

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

    public function getDlNo(): ?int
    {
        return $this->dlNo;
    }

    public function setDlNo(int $dlNo): static
    {
        $this->dlNo = $dlNo;

        return $this;
    }

    public function getDpNo(): ?int
    {
        return $this->dpNo;
    }

    public function setDpNo(int $dpNo): static
    {
        $this->dpNo = $dpNo;

        return $this;
    }

    public function getDlQte(): ?string
    {
        return $this->dlQte;
    }

    public function setDlQte(?string $dlQte): static
    {
        $this->dlQte = $dlQte;

        return $this;
    }

    public function getDlQteacontroler(): ?string
    {
        return $this->dlQteacontroler;
    }

    public function setDlQteacontroler(?string $dlQteacontroler): static
    {
        $this->dlQteacontroler = $dlQteacontroler;

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
