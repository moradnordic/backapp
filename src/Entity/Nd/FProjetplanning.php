<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FProjetplanningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PROJETPLANNING')]
#[ORM\Index(name: 'IPP_PROJET', columns: ['PP_Type'])]
#[ORM\Index(name: 'IPP_COMPOSANT', columns: ['cbPF_Num'])]
#[ORM\Index(name: 'IPP_COMPOSE', columns: ['cbAR_RefCompose'])]
#[ORM\Index(name: 'IPP_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'IPP_RESSOURCE', columns: ['cbRP_Code'])]
#[ORM\UniqueConstraint(name: 'IPP_LIGNE', columns: ['PP_No'])]
#[ORM\Index(name: 'IPP_PROJETTOUT', columns: ['PP_Type'])]
#[ORM\Index(name: 'IPP_PROJCOMPOSE', columns: ['AG_No2Compose'])]
#[ORM\Index(name: 'IPP_PROJCOMPOSANT', columns: ['AG_No2Composant'])]
#[ORM\Index(name: 'IPP_PROJRESSOURCE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'FKIA_F_PROJETPLANNING_PF_Num', columns: ['PF_Num'])]
#[ORM\Index(name: 'FKIA_F_PROJETPLANNING_AR_RefCompose', columns: ['AR_RefCompose'])]
#[ORM\Index(name: 'FKIA_F_PROJETPLANNING_AR_RefComposant', columns: ['AR_RefComposant'])]
#[ORM\Index(name: 'FKIA_F_PROJETPLANNING_RP_Code', columns: ['RP_Code'])]
#[ORM\Index(name: 'FKIA_F_PROJETPLANNING_DE_No', columns: ['cbDE_No'])]
#[ORM\Entity(repositoryClass: FProjetplanningRepository::class)]
class FProjetplanning
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PF_Num", length: 9)]
    private ?string $pfNum = null;

    #[ORM\Column(name: "cbPF_Num", type: Types::BINARY, nullable: true)]
    private $cbpfNum = null;

    #[ORM\Column(name: "PP_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $ppType = null;

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

    #[ORM\Column(name: "RP_Code", length: 11, nullable: true)]
    private ?string $rpCode = null;

    #[ORM\Column(name: "cbRP_Code", type: Types::BINARY, nullable: true)]
    private $cbrpCode = null;

    #[ORM\Column(name: "PP_Intitule", length: 69, nullable: true)]
    private ?string $ppIntitule = null;

    #[ORM\Column(name: "PP_Quantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ppQuantite = null;

    #[ORM\Column(name: "PP_Temps", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $ppTemps = null;

    #[ORM\Column(name: "PP_QteAffectee", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ppQteaffectee = null;

    #[ORM\Column(name: "PP_TempsAffecte", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $ppTempsaffecte = null;

    #[ORM\Column(name: "PP_PUHT", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ppPuht = null;

    #[ORM\Column(name: "PP_DateDebut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ppDatedebut = null;

    #[ORM\Column(name: "PP_DateFin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ppDatefin = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "PP_No", nullable: true)]
    private ?int $ppNo = null;

    #[ORM\Column(name: "PP_Ajout", type: Types::SMALLINT, nullable: true)]
    private ?int $ppAjout = null;

    #[ORM\Column(name: "PP_Ordre", type: Types::SMALLINT, nullable: true)]
    private ?int $ppOrdre = null;

    #[ORM\Column(name: "PP_SousTraitance", type: Types::SMALLINT, nullable: true)]
    private ?int $ppSoustraitance = null;

    #[ORM\Column(name: "PP_Chevauche", type: Types::SMALLINT, nullable: true)]
    private ?int $ppChevauche = null;

    #[ORM\Column(name: "PP_Demarre", type: Types::SMALLINT, nullable: true)]
    private ?int $ppDemarre = null;

    #[ORM\Column(name: "PP_OperationChevauche", length: 11, nullable: true)]
    private ?string $ppOperationchevauche = null;

    #[ORM\Column(name: "PP_ValeurChevauche", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ppValeurchevauche = null;

    #[ORM\Column(name: "PP_TypeChevauche", type: Types::SMALLINT, nullable: true)]
    private ?int $ppTypechevauche = null;

    #[ORM\Column(name: "PP_TypeNomencl", type: Types::SMALLINT, nullable: true)]
    private ?int $ppTypenomencl = null;

    #[ORM\Column(name: "PP_QteRealisee", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ppQterealisee = null;

    #[ORM\Column(name: "PP_TempsRealise", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $ppTempsrealise = null;

    #[ORM\Column(name: "PP_HeureDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $ppHeuredebut = null;

    #[ORM\Column(name: "PP_HeureFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $ppHeurefin = null;

    #[ORM\Column(name: "PP_QteReservee", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ppQtereservee = null;

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

    #[ORM\Column(name: "PF_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $pfType = null;

    #[ORM\Column(name: "PP_NoOrigine", nullable: true)]
    private ?int $ppNoorigine = null;

    #[ORM\Column(name: "PP_CoutStd", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ppCoutstd = null;

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

    public function getPpType(): ?int
    {
        return $this->ppType;
    }

    public function setPpType(?int $ppType): static
    {
        $this->ppType = $ppType;

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

    public function getRpCode(): ?string
    {
        return $this->rpCode;
    }

    public function setRpCode(?string $rpCode): static
    {
        $this->rpCode = $rpCode;

        return $this;
    }

    public function getCbrpCode()
    {
        return $this->cbrpCode;
    }

    public function setCbrpCode($cbrpCode): static
    {
        $this->cbrpCode = $cbrpCode;

        return $this;
    }

    public function getPpIntitule(): ?string
    {
        return $this->ppIntitule;
    }

    public function setPpIntitule(?string $ppIntitule): static
    {
        $this->ppIntitule = $ppIntitule;

        return $this;
    }

    public function getPpQuantite(): ?string
    {
        return $this->ppQuantite;
    }

    public function setPpQuantite(?string $ppQuantite): static
    {
        $this->ppQuantite = $ppQuantite;

        return $this;
    }

    public function getPpTemps(): ?string
    {
        return $this->ppTemps;
    }

    public function setPpTemps(?string $ppTemps): static
    {
        $this->ppTemps = $ppTemps;

        return $this;
    }

    public function getPpQteaffectee(): ?string
    {
        return $this->ppQteaffectee;
    }

    public function setPpQteaffectee(?string $ppQteaffectee): static
    {
        $this->ppQteaffectee = $ppQteaffectee;

        return $this;
    }

    public function getPpTempsaffecte(): ?string
    {
        return $this->ppTempsaffecte;
    }

    public function setPpTempsaffecte(?string $ppTempsaffecte): static
    {
        $this->ppTempsaffecte = $ppTempsaffecte;

        return $this;
    }

    public function getPpPuht(): ?string
    {
        return $this->ppPuht;
    }

    public function setPpPuht(?string $ppPuht): static
    {
        $this->ppPuht = $ppPuht;

        return $this;
    }

    public function getPpDatedebut(): ?\DateTimeInterface
    {
        return $this->ppDatedebut;
    }

    public function setPpDatedebut(?\DateTimeInterface $ppDatedebut): static
    {
        $this->ppDatedebut = $ppDatedebut;

        return $this;
    }

    public function getPpDatefin(): ?\DateTimeInterface
    {
        return $this->ppDatefin;
    }

    public function setPpDatefin(?\DateTimeInterface $ppDatefin): static
    {
        $this->ppDatefin = $ppDatefin;

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

    public function getPpNo(): ?int
    {
        return $this->ppNo;
    }

    public function setPpNo(?int $ppNo): static
    {
        $this->ppNo = $ppNo;

        return $this;
    }

    public function getPpAjout(): ?int
    {
        return $this->ppAjout;
    }

    public function setPpAjout(?int $ppAjout): static
    {
        $this->ppAjout = $ppAjout;

        return $this;
    }

    public function getPpOrdre(): ?int
    {
        return $this->ppOrdre;
    }

    public function setPpOrdre(?int $ppOrdre): static
    {
        $this->ppOrdre = $ppOrdre;

        return $this;
    }

    public function getPpSoustraitance(): ?int
    {
        return $this->ppSoustraitance;
    }

    public function setPpSoustraitance(?int $ppSoustraitance): static
    {
        $this->ppSoustraitance = $ppSoustraitance;

        return $this;
    }

    public function getPpChevauche(): ?int
    {
        return $this->ppChevauche;
    }

    public function setPpChevauche(?int $ppChevauche): static
    {
        $this->ppChevauche = $ppChevauche;

        return $this;
    }

    public function getPpDemarre(): ?int
    {
        return $this->ppDemarre;
    }

    public function setPpDemarre(?int $ppDemarre): static
    {
        $this->ppDemarre = $ppDemarre;

        return $this;
    }

    public function getPpOperationchevauche(): ?string
    {
        return $this->ppOperationchevauche;
    }

    public function setPpOperationchevauche(?string $ppOperationchevauche): static
    {
        $this->ppOperationchevauche = $ppOperationchevauche;

        return $this;
    }

    public function getPpValeurchevauche(): ?string
    {
        return $this->ppValeurchevauche;
    }

    public function setPpValeurchevauche(?string $ppValeurchevauche): static
    {
        $this->ppValeurchevauche = $ppValeurchevauche;

        return $this;
    }

    public function getPpTypechevauche(): ?int
    {
        return $this->ppTypechevauche;
    }

    public function setPpTypechevauche(?int $ppTypechevauche): static
    {
        $this->ppTypechevauche = $ppTypechevauche;

        return $this;
    }

    public function getPpTypenomencl(): ?int
    {
        return $this->ppTypenomencl;
    }

    public function setPpTypenomencl(?int $ppTypenomencl): static
    {
        $this->ppTypenomencl = $ppTypenomencl;

        return $this;
    }

    public function getPpQterealisee(): ?string
    {
        return $this->ppQterealisee;
    }

    public function setPpQterealisee(?string $ppQterealisee): static
    {
        $this->ppQterealisee = $ppQterealisee;

        return $this;
    }

    public function getPpTempsrealise(): ?string
    {
        return $this->ppTempsrealise;
    }

    public function setPpTempsrealise(?string $ppTempsrealise): static
    {
        $this->ppTempsrealise = $ppTempsrealise;

        return $this;
    }

    public function getPpHeuredebut(): ?string
    {
        return $this->ppHeuredebut;
    }

    public function setPpHeuredebut(?string $ppHeuredebut): static
    {
        $this->ppHeuredebut = $ppHeuredebut;

        return $this;
    }

    public function getPpHeurefin(): ?string
    {
        return $this->ppHeurefin;
    }

    public function setPpHeurefin(?string $ppHeurefin): static
    {
        $this->ppHeurefin = $ppHeurefin;

        return $this;
    }

    public function getPpQtereservee(): ?string
    {
        return $this->ppQtereservee;
    }

    public function setPpQtereservee(?string $ppQtereservee): static
    {
        $this->ppQtereservee = $ppQtereservee;

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

    public function getPfType(): ?int
    {
        return $this->pfType;
    }

    public function setPfType(?int $pfType): static
    {
        $this->pfType = $pfType;

        return $this;
    }

    public function getPpNoorigine(): ?int
    {
        return $this->ppNoorigine;
    }

    public function setPpNoorigine(?int $ppNoorigine): static
    {
        $this->ppNoorigine = $ppNoorigine;

        return $this;
    }

    public function getPpCoutstd(): ?string
    {
        return $this->ppCoutstd;
    }

    public function setPpCoutstd(?string $ppCoutstd): static
    {
        $this->ppCoutstd = $ppCoutstd;

        return $this;
    }
}
