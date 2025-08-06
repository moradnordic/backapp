<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FLotserieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_LOTSERIE')]
#[ORM\Index(name: 'ILS_SERIE', columns: ['LS_LotEpuise'])]
#[ORM\Index(name: 'ILS_STOCK', columns: ['cbLS_NoSerie'])]
#[ORM\Index(name: 'ILS_DATE', columns: ['cbLS_NoSerie'])]
#[ORM\Index(name: 'ILS_NOIN', columns: ['DL_NoOut'])]
#[ORM\Index(name: 'ILS_NOOUT', columns: ['DL_NoOut'])]
#[ORM\Index(name: 'ILS_STOCK2', columns: ['cbLS_NoSerie'])]
#[ORM\Index(name: 'ILS_MVTSTOCK', columns: ['cbLS_NoSerie'])]
#[ORM\Index(name: 'FKIA_F_LOTSERIE_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_LOTSERIE_DE_No', columns: ['DE_No'])]
#[ORM\Entity(repositoryClass: FLotserieRepository::class)]
class FLotserie
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "LS_NoSerie", length: 31, nullable: true)]
    private ?string $lsNoserie = null;

    #[ORM\Column(name: "cbLS_NoSerie", type: Types::BINARY, nullable: true)]
    private $cblsNoserie = null;

    #[ORM\Column(name: "LS_Peremption", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lsPeremption = null;

    #[ORM\Column(name: "LS_Fabrication", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lsFabrication = null;

    #[ORM\Column(name: "LS_Qte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lsQte = null;

    #[ORM\Column(name: "LS_QteRestant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lsQterestant = null;

    #[ORM\Column(name: "LS_QteRes", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $lsQteres = null;

    #[ORM\Column(name: "LS_LotEpuise", type: Types::SMALLINT, nullable: true)]
    private ?int $lsLotepuise = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "DL_NoIn", nullable: true)]
    private ?int $dlNoin = null;

    #[ORM\Column(name: "DL_NoOut", nullable: true)]
    private ?int $dlNoout = null;

    #[ORM\Column(name: "LS_MvtStock", type: Types::SMALLINT, nullable: true)]
    private ?int $lsMvtstock = null;

    #[ORM\Column(name: "LS_Complement", length: 31, nullable: true)]
    private ?string $lsComplement = null;

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

    #[ORM\Column(name: "CAT1", length: 69, nullable: true)]
    private ?string $cat1 = null;

    #[ORM\Column(name: "CAT2", length: 69, nullable: true)]
    private ?string $cat2 = null;

    #[ORM\Column(name: "CAT3", length: 69, nullable: true)]
    private ?string $cat3 = null;

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

    public function getLsNoserie(): ?string
    {
        return $this->lsNoserie;
    }

    public function setLsNoserie(?string $lsNoserie): static
    {
        $this->lsNoserie = $lsNoserie;

        return $this;
    }

    public function getCblsNoserie()
    {
        return $this->cblsNoserie;
    }

    public function setCblsNoserie($cblsNoserie): static
    {
        $this->cblsNoserie = $cblsNoserie;

        return $this;
    }

    public function getLsPeremption(): ?\DateTimeInterface
    {
        return $this->lsPeremption;
    }

    public function setLsPeremption(?\DateTimeInterface $lsPeremption): static
    {
        $this->lsPeremption = $lsPeremption;

        return $this;
    }

    public function getLsFabrication(): ?\DateTimeInterface
    {
        return $this->lsFabrication;
    }

    public function setLsFabrication(?\DateTimeInterface $lsFabrication): static
    {
        $this->lsFabrication = $lsFabrication;

        return $this;
    }

    public function getLsQte(): ?string
    {
        return $this->lsQte;
    }

    public function setLsQte(?string $lsQte): static
    {
        $this->lsQte = $lsQte;

        return $this;
    }

    public function getLsQterestant(): ?string
    {
        return $this->lsQterestant;
    }

    public function setLsQterestant(?string $lsQterestant): static
    {
        $this->lsQterestant = $lsQterestant;

        return $this;
    }

    public function getLsQteres(): ?string
    {
        return $this->lsQteres;
    }

    public function setLsQteres(?string $lsQteres): static
    {
        $this->lsQteres = $lsQteres;

        return $this;
    }

    public function getLsLotepuise(): ?int
    {
        return $this->lsLotepuise;
    }

    public function setLsLotepuise(?int $lsLotepuise): static
    {
        $this->lsLotepuise = $lsLotepuise;

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

    public function getLsMvtstock(): ?int
    {
        return $this->lsMvtstock;
    }

    public function setLsMvtstock(?int $lsMvtstock): static
    {
        $this->lsMvtstock = $lsMvtstock;

        return $this;
    }

    public function getLsComplement(): ?string
    {
        return $this->lsComplement;
    }

    public function setLsComplement(?string $lsComplement): static
    {
        $this->lsComplement = $lsComplement;

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

    public function getCat1(): ?string
    {
        return $this->cat1;
    }

    public function setCat1(?string $cat1): static
    {
        $this->cat1 = $cat1;

        return $this;
    }

    public function getCat2(): ?string
    {
        return $this->cat2;
    }

    public function setCat2(?string $cat2): static
    {
        $this->cat2 = $cat2;

        return $this;
    }

    public function getCat3(): ?string
    {
        return $this->cat3;
    }

    public function setCat3(?string $cat3): static
    {
        $this->cat3 = $cat3;

        return $this;
    }
}
