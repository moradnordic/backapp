<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FArtstockemplRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTSTOCKEMPL')]
#[ORM\UniqueConstraint(name: 'IAE_REFDEP', columns: ['DP_No'])]
#[ORM\Index(name: 'IAE_EMPLACEMENT', columns: ['DP_No'])]
#[ORM\Index(name: 'FKIA_F_ARTSTOCKEMPL_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ARTSTOCKEMPL_ARTDENO_DPNO', columns: ['DP_No'])]
#[ORM\Entity(repositoryClass: FArtstockemplRepository::class)]
class FArtstockempl
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "DP_No")]
    private ?int $dpNo = null;

    #[ORM\Column(name: "AE_QteSto", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $aeQtesto = null;

    #[ORM\Column(name: "AE_QtePrepa", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $aeQteprepa = null;

    #[ORM\Column(name: "AE_QteAControler", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $aeQteacontroler = null;

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

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getCbarRef()
    {
        return $this->cbarRef;
    }

    public function setCbarRef($cbarRef): static
    {
        $this->cbarRef = $cbarRef;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

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

    public function getAeQtesto(): ?string
    {
        return $this->aeQtesto;
    }

    public function setAeQtesto(?string $aeQtesto): static
    {
        $this->aeQtesto = $aeQtesto;

        return $this;
    }

    public function getAeQteprepa(): ?string
    {
        return $this->aeQteprepa;
    }

    public function setAeQteprepa(?string $aeQteprepa): static
    {
        $this->aeQteprepa = $aeQteprepa;

        return $this;
    }

    public function getAeQteacontroler(): ?string
    {
        return $this->aeQteacontroler;
    }

    public function setAeQteacontroler(?string $aeQteacontroler): static
    {
        $this->aeQteacontroler = $aeQteacontroler;

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
