<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FLotfifoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_LOTFIFO')]
#[ORM\Index(name: 'ILF_STOCK', columns: ['DL_NoIn'])]
#[ORM\Index(name: 'ILF_NOIN', columns: ['DL_NoOut'])]
#[ORM\Index(name: 'ILF_NOOUT', columns: ['DL_NoOut'])]
#[ORM\Index(name: 'FKIA_F_LOTFIFO_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_LOTFIFO_DE_No', columns: ['DE_No'])]
#[ORM\Entity(repositoryClass: FLotfifoRepository::class)]
class FLotfifo
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

    #[ORM\Column(name: "LF_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lfQte = null;

    #[ORM\Column(name: "LF_QteRestant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lfQterestant = null;

    #[ORM\Column(name: "LF_LotEpuise", type: Types::SMALLINT, nullable: true)]
    private ?int $lfLotepuise = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "DL_NoIn", nullable: true)]
    private ?int $dlNoin = null;

    #[ORM\Column(name: "DL_NoOut", nullable: true)]
    private ?int $dlNoout = null;

    #[ORM\Column(name: "LF_MvtStock", type: Types::SMALLINT, nullable: true)]
    private ?int $lfMvtstock = null;

    #[ORM\Column(name: "LF_DateBL", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lfDatebl = null;

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

    public function getAgNo1(): ?int
    {
        return $this->agNo1;
    }

    public function setAgNo1(?int $agNo1): static
    {
        $this->agNo1 = $agNo1;

        return $this;
    }

    public function getAgNo2(): ?int
    {
        return $this->agNo2;
    }

    public function setAgNo2(?int $agNo2): static
    {
        $this->agNo2 = $agNo2;

        return $this;
    }

    public function getLfQte(): ?string
    {
        return $this->lfQte;
    }

    public function setLfQte(?string $lfQte): static
    {
        $this->lfQte = $lfQte;

        return $this;
    }

    public function getLfQterestant(): ?string
    {
        return $this->lfQterestant;
    }

    public function setLfQterestant(?string $lfQterestant): static
    {
        $this->lfQterestant = $lfQterestant;

        return $this;
    }

    public function getLfLotepuise(): ?int
    {
        return $this->lfLotepuise;
    }

    public function setLfLotepuise(?int $lfLotepuise): static
    {
        $this->lfLotepuise = $lfLotepuise;

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

    public function getDlNoin(): ?int
    {
        return $this->dlNoin;
    }

    public function setDlNoin(?int $dlNoin): static
    {
        $this->dlNoin = $dlNoin;

        return $this;
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

    public function getLfMvtstock(): ?int
    {
        return $this->lfMvtstock;
    }

    public function setLfMvtstock(?int $lfMvtstock): static
    {
        $this->lfMvtstock = $lfMvtstock;

        return $this;
    }

    public function getLfDatebl(): ?\DateTimeInterface
    {
        return $this->lfDatebl;
    }

    public function setLfDatebl(?\DateTimeInterface $lfDatebl): static
    {
        $this->lfDatebl = $lfDatebl;

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
