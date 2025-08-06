<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FArtcompoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTCOMPO')]
#[ORM\Index(name: 'IAT_REF', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IAT_ORDRE', columns: ['AT_Ordre'])]
#[ORM\Index(name: 'IAT_CODE', columns: ['cbRP_Code'])]
#[ORM\Index(name: 'IAT_OPERATION', columns: ['AT_Ordre'])]
#[ORM\Index(name: 'IAT_TYPERESS', columns: ['cbAT_Operation'])]
#[ORM\Index(name: 'IAT_CHEVAUCHE', columns: ['cbAT_OperationChevauche'])]
#[ORM\Index(name: 'FKIA_F_ARTCOMPO_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Index(name: 'FKIA_F_ARTCOMPO_RP_Code', columns: ['RP_Code'])]
#[ORM\Entity(repositoryClass: FArtcompoRepository::class)]
class FArtcompo
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "AT_Operation", length: 11, nullable: true)]
    private ?string $atOperation = null;

    #[ORM\Column(name: "cbAT_Operation", type: Types::BINARY, nullable: true)]
    private $cbatOperation = null;

    #[ORM\Column(name: "RP_Code", length: 11, nullable: true)]
    private ?string $rpCode = null;

    #[ORM\Column(name: "cbRP_Code", type: Types::BINARY, nullable: true)]
    private $cbrpCode = null;

    #[ORM\Column(name: "AT_Temps", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $atTemps = null;

    #[ORM\Column(name: "AT_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $atType = null;

    #[ORM\Column(name: "AT_Description", length: 255, nullable: true)]
    private ?string $atDescription = null;

    #[ORM\Column(name: "AT_Ordre", type: Types::SMALLINT, nullable: true)]
    private ?int $atOrdre = null;

    #[ORM\Column(name: "AG_No1Comp", nullable: true)]
    private ?int $agNo1comp = null;

    #[ORM\Column(name: "AG_No2Comp", nullable: true)]
    private ?int $agNo2comp = null;

    #[ORM\Column(name: "AT_TypeRessource", type: Types::SMALLINT, nullable: true)]
    private ?int $atTyperessource = null;

    #[ORM\Column(name: "AT_Chevauche", type: Types::SMALLINT, nullable: true)]
    private ?int $atChevauche = null;

    #[ORM\Column(name: "AT_Demarre", type: Types::SMALLINT, nullable: true)]
    private ?int $atDemarre = null;

    #[ORM\Column(name: "AT_OperationChevauche", length: 11, nullable: true)]
    private ?string $atOperationchevauche = null;

    #[ORM\Column(name: "cbAT_OperationChevauche", type: Types::BINARY, nullable: true)]
    private $cbatOperationchevauche = null;

    #[ORM\Column(name: "AT_ValeurChevauche", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $atValeurchevauche = null;

    #[ORM\Column(name: "AT_TypeChevauche", type: Types::SMALLINT, nullable: true)]
    private ?int $atTypechevauche = null;

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

    public function getAtOperation(): ?string
    {
        return $this->atOperation;
    }

    public function setAtOperation(?string $atOperation): static
    {
        $this->atOperation = $atOperation;

        return $this;
    }

    public function getCbatOperation()
    {
        return $this->cbatOperation;
    }

    public function setCbatOperation($cbatOperation): static
    {
        $this->cbatOperation = $cbatOperation;

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

    public function getAtTemps(): ?string
    {
        return $this->atTemps;
    }

    public function setAtTemps(?string $atTemps): static
    {
        $this->atTemps = $atTemps;

        return $this;
    }

    public function getAtType(): ?int
    {
        return $this->atType;
    }

    public function setAtType(?int $atType): static
    {
        $this->atType = $atType;

        return $this;
    }

    public function getAtDescription(): ?string
    {
        return $this->atDescription;
    }

    public function setAtDescription(?string $atDescription): static
    {
        $this->atDescription = $atDescription;

        return $this;
    }

    public function getAtOrdre(): ?int
    {
        return $this->atOrdre;
    }

    public function setAtOrdre(?int $atOrdre): static
    {
        $this->atOrdre = $atOrdre;

        return $this;
    }

    public function getAgNo1comp(): ?int
    {
        return $this->agNo1comp;
    }

    public function setAgNo1comp(?int $agNo1comp): static
    {
        $this->agNo1comp = $agNo1comp;

        return $this;
    }

    public function getAgNo2comp(): ?int
    {
        return $this->agNo2comp;
    }

    public function setAgNo2comp(?int $agNo2comp): static
    {
        $this->agNo2comp = $agNo2comp;

        return $this;
    }

    public function getAtTyperessource(): ?int
    {
        return $this->atTyperessource;
    }

    public function setAtTyperessource(?int $atTyperessource): static
    {
        $this->atTyperessource = $atTyperessource;

        return $this;
    }

    public function getAtChevauche(): ?int
    {
        return $this->atChevauche;
    }

    public function setAtChevauche(?int $atChevauche): static
    {
        $this->atChevauche = $atChevauche;

        return $this;
    }

    public function getAtDemarre(): ?int
    {
        return $this->atDemarre;
    }

    public function setAtDemarre(?int $atDemarre): static
    {
        $this->atDemarre = $atDemarre;

        return $this;
    }

    public function getAtOperationchevauche(): ?string
    {
        return $this->atOperationchevauche;
    }

    public function setAtOperationchevauche(?string $atOperationchevauche): static
    {
        $this->atOperationchevauche = $atOperationchevauche;

        return $this;
    }

    public function getCbatOperationchevauche()
    {
        return $this->cbatOperationchevauche;
    }

    public function setCbatOperationchevauche($cbatOperationchevauche): static
    {
        $this->cbatOperationchevauche = $cbatOperationchevauche;

        return $this;
    }

    public function getAtValeurchevauche(): ?string
    {
        return $this->atValeurchevauche;
    }

    public function setAtValeurchevauche(?string $atValeurchevauche): static
    {
        $this->atValeurchevauche = $atValeurchevauche;

        return $this;
    }

    public function getAtTypechevauche(): ?int
    {
        return $this->atTypechevauche;
    }

    public function setAtTypechevauche(?int $atTypechevauche): static
    {
        $this->atTypechevauche = $atTypechevauche;

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
