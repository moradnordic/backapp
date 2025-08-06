<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FProjethistoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PROJETHISTO')]
#[ORM\Index(name: 'IPH_DATE', columns: ['PH_Type'])]
#[ORM\Index(name: 'IPH_LIGNE', columns: ['PP_No'])]
#[ORM\Index(name: 'IPH_TYPE', columns: ['PH_Type'])]
#[ORM\Index(name: 'IPH_COMPOSE', columns: ['PH_Type'])]
#[ORM\Index(name: 'IPH_OPERATION', columns: ['PH_Type'])]
#[ORM\Index(name: 'IPH_DEPOT', columns: ['AG_No2Composant'])]
#[ORM\Index(name: 'FKIA_F_PROJETHISTO_PF_Num', columns: ['PF_Num'])]
#[ORM\Index(name: 'FKIA_F_PROJETHISTO_PP_No', columns: ['PP_No'])]
#[ORM\Index(name: 'FKIA_F_PROJETHISTO_AR_RefCompose', columns: ['AR_RefCompose'])]
#[ORM\Index(name: 'FKIA_F_PROJETHISTO_AR_RefComposant', columns: ['AR_RefComposant'])]
#[ORM\Entity(repositoryClass: FProjethistoRepository::class)]
class FProjethisto
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PF_Num", length: 9)]
    private ?string $pfNum = null;

    #[ORM\Column(name: "cbPF_Num", type: Types::BINARY, nullable: true)]
    private $cbpfNum = null;

    #[ORM\Column(name: "PH_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $phDate = null;

    #[ORM\Column(name: "PP_No")]
    private ?int $ppNo = null;

    #[ORM\Column(name: "PH_QteRealisee", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $phQterealisee = null;

    #[ORM\Column(name: "PH_TempsRealise", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $phTempsrealise = null;

    #[ORM\Column(name: "DO_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $doDomaine = null;

    #[ORM\Column(name: "DO_Piece", length: 9, nullable: true)]
    private ?string $doPiece = null;

    #[ORM\Column(name: "PH_Intitule", length: 69, nullable: true)]
    private ?string $phIntitule = null;

    #[ORM\Column(name: "PH_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $phType = null;

    #[ORM\Column(name: "AR_RefCompose", length: 19)]
    private ?string $arRefcompose = null;

    #[ORM\Column(name: "cbAR_RefCompose", type: Types::BINARY, nullable: true)]
    private $cbarRefcompose = null;

    #[ORM\Column(name: "AG_No1Compose", nullable: true)]
    private ?int $agNo1compose = null;

    #[ORM\Column(name: "AG_No2Compose", nullable: true)]
    private ?int $agNo2compose = null;

    #[ORM\Column(name: "PP_Operation", length: 11, nullable: true)]
    private ?string $ppOperation = null;

    #[ORM\Column(name: "cbPP_Operation", type: Types::BINARY, nullable: true)]
    private $cbppOperation = null;

    #[ORM\Column(name: "AR_RefComposant", length: 19, nullable: true)]
    private ?string $arRefcomposant = null;

    #[ORM\Column(name: "cbAR_RefComposant", type: Types::BINARY, nullable: true)]
    private $cbarRefcomposant = null;

    #[ORM\Column(name: "AG_No1Composant", nullable: true)]
    private ?int $agNo1composant = null;

    #[ORM\Column(name: "AG_No2Composant", nullable: true)]
    private ?int $agNo2composant = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "PH_QteReservee", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $phQtereservee = null;

    #[ORM\Column(name: "PF_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $pfType = null;

    #[ORM\Column(name: "PH_CoutRealise", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $phCoutrealise = null;

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

    public function getPfNum(): ?string
    {
        return $this->pfNum;
    }

    public function setPfNum(string $pfNum): static
    {
        $this->pfNum = $pfNum;

        return $this;
    }

    public function getCbpfNum()
    {
        return $this->cbpfNum;
    }

    public function setCbpfNum($cbpfNum): static
    {
        $this->cbpfNum = $cbpfNum;

        return $this;
    }

    public function getPhDate(): ?\DateTimeInterface
    {
        return $this->phDate;
    }

    public function setPhDate(?\DateTimeInterface $phDate): static
    {
        $this->phDate = $phDate;

        return $this;
    }

    public function getPpNo(): ?int
    {
        return $this->ppNo;
    }

    public function setPpNo(int $ppNo): static
    {
        $this->ppNo = $ppNo;

        return $this;
    }

    public function getPhQterealisee(): ?string
    {
        return $this->phQterealisee;
    }

    public function setPhQterealisee(?string $phQterealisee): static
    {
        $this->phQterealisee = $phQterealisee;

        return $this;
    }

    public function getPhTempsrealise(): ?string
    {
        return $this->phTempsrealise;
    }

    public function setPhTempsrealise(?string $phTempsrealise): static
    {
        $this->phTempsrealise = $phTempsrealise;

        return $this;
    }

    public function getDoDomaine(): ?int
    {
        return $this->doDomaine;
    }

    public function setDoDomaine(?int $doDomaine): static
    {
        $this->doDomaine = $doDomaine;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): static
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getPhIntitule(): ?string
    {
        return $this->phIntitule;
    }

    public function setPhIntitule(?string $phIntitule): static
    {
        $this->phIntitule = $phIntitule;

        return $this;
    }

    public function getPhType(): ?int
    {
        return $this->phType;
    }

    public function setPhType(?int $phType): static
    {
        $this->phType = $phType;

        return $this;
    }

    public function getArRefcompose(): ?string
    {
        return $this->arRefcompose;
    }

    public function setArRefcompose(string $arRefcompose): static
    {
        $this->arRefcompose = $arRefcompose;

        return $this;
    }

    public function getCbarRefcompose()
    {
        return $this->cbarRefcompose;
    }

    public function setCbarRefcompose($cbarRefcompose): static
    {
        $this->cbarRefcompose = $cbarRefcompose;

        return $this;
    }

    public function getAgNo1compose(): ?int
    {
        return $this->agNo1compose;
    }

    public function setAgNo1compose(?int $agNo1compose): static
    {
        $this->agNo1compose = $agNo1compose;

        return $this;
    }

    public function getAgNo2compose(): ?int
    {
        return $this->agNo2compose;
    }

    public function setAgNo2compose(?int $agNo2compose): static
    {
        $this->agNo2compose = $agNo2compose;

        return $this;
    }

    public function getPpOperation(): ?string
    {
        return $this->ppOperation;
    }

    public function setPpOperation(?string $ppOperation): static
    {
        $this->ppOperation = $ppOperation;

        return $this;
    }

    public function getCbppOperation()
    {
        return $this->cbppOperation;
    }

    public function setCbppOperation($cbppOperation): static
    {
        $this->cbppOperation = $cbppOperation;

        return $this;
    }

    public function getArRefcomposant(): ?string
    {
        return $this->arRefcomposant;
    }

    public function setArRefcomposant(?string $arRefcomposant): static
    {
        $this->arRefcomposant = $arRefcomposant;

        return $this;
    }

    public function getCbarRefcomposant()
    {
        return $this->cbarRefcomposant;
    }

    public function setCbarRefcomposant($cbarRefcomposant): static
    {
        $this->cbarRefcomposant = $cbarRefcomposant;

        return $this;
    }

    public function getAgNo1composant(): ?int
    {
        return $this->agNo1composant;
    }

    public function setAgNo1composant(?int $agNo1composant): static
    {
        $this->agNo1composant = $agNo1composant;

        return $this;
    }

    public function getAgNo2composant(): ?int
    {
        return $this->agNo2composant;
    }

    public function setAgNo2composant(?int $agNo2composant): static
    {
        $this->agNo2composant = $agNo2composant;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(?int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getCbdeNo(): ?int
    {
        return $this->cbdeNo;
    }

    public function setCbdeNo(?int $cbdeNo): static
    {
        $this->cbdeNo = $cbdeNo;

        return $this;
    }

    public function getPhQtereservee(): ?string
    {
        return $this->phQtereservee;
    }

    public function setPhQtereservee(?string $phQtereservee): static
    {
        $this->phQtereservee = $phQtereservee;

        return $this;
    }

    public function getPfType(): ?int
    {
        return $this->pfType;
    }

    public function setPfType(?int $pfType): static
    {
        $this->pfType = $pfType;

        return $this;
    }

    public function getPhCoutrealise(): ?string
    {
        return $this->phCoutrealise;
    }

    public function setPhCoutrealise(?string $phCoutrealise): static
    {
        $this->phCoutrealise = $phCoutrealise;

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
