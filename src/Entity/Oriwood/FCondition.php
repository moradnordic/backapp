<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FConditionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CONDITION')]
#[ORM\UniqueConstraint(name: 'ICO_ENUMERE', columns: ['EC_Quantite'])]
#[ORM\Index(name: 'ICO_QUANTITE', columns: ['EC_Quantite'])]
#[ORM\UniqueConstraint(name: 'ICO_NO', columns: ['CO_No'])]
#[ORM\Index(name: 'ICO_REF', columns: ['cbCO_Ref'])]
#[ORM\Index(name: 'ICO_CBARRE', columns: ['cbCO_CodeBarre'])]
#[ORM\Index(name: 'ICO_PRINCIPAL', columns: ['CO_Principal'])]
#[ORM\Index(name: 'FKIA_F_CONDITION_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FConditionRepository::class)]
class FCondition
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "EC_Enumere", length: 21, nullable: true)]
    private ?string $ecEnumere = null;

    #[ORM\Column(name: "cbEC_Enumere", type: Types::BINARY, nullable: true)]
    private $cbecEnumere = null;

    #[ORM\Column(name: "EC_Quantite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ecQuantite = null;

    #[ORM\Column(name: "CO_Ref", length: 19, nullable: true)]
    private ?string $coRef = null;

    #[ORM\Column(name: "cbCO_Ref", type: Types::BINARY, nullable: true)]
    private $cbcoRef = null;

    #[ORM\Column(name: "CO_CodeBarre", length: 19, nullable: true)]
    private ?string $coCodebarre = null;

    #[ORM\Column(name: "cbCO_CodeBarre", type: Types::BINARY, nullable: true)]
    private $cbcoCodebarre = null;

    #[ORM\Column(name: "CO_Principal", type: Types::SMALLINT, nullable: true)]
    private ?int $coPrincipal = null;

    #[ORM\Column(name: "CO_EdiCode", length: 3, nullable: true)]
    private ?string $coEdicode = null;

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

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getEcEnumere(): ?string
    {
        return $this->ecEnumere;
    }

    public function setEcEnumere(?string $ecEnumere): static
    {
        $this->ecEnumere = $ecEnumere;

        return $this;
    }

    public function getCbecEnumere()
    {
        return $this->cbecEnumere;
    }

    public function setCbecEnumere($cbecEnumere): static
    {
        $this->cbecEnumere = $cbecEnumere;

        return $this;
    }

    public function getEcQuantite(): ?string
    {
        return $this->ecQuantite;
    }

    public function setEcQuantite(?string $ecQuantite): static
    {
        $this->ecQuantite = $ecQuantite;

        return $this;
    }

    public function getCoRef(): ?string
    {
        return $this->coRef;
    }

    public function setCoRef(?string $coRef): static
    {
        $this->coRef = $coRef;

        return $this;
    }

    public function getCbcoRef()
    {
        return $this->cbcoRef;
    }

    public function setCbcoRef($cbcoRef): static
    {
        $this->cbcoRef = $cbcoRef;

        return $this;
    }

    public function getCoCodebarre(): ?string
    {
        return $this->coCodebarre;
    }

    public function setCoCodebarre(?string $coCodebarre): static
    {
        $this->coCodebarre = $coCodebarre;

        return $this;
    }

    public function getCbcoCodebarre()
    {
        return $this->cbcoCodebarre;
    }

    public function setCbcoCodebarre($cbcoCodebarre): static
    {
        $this->cbcoCodebarre = $cbcoCodebarre;

        return $this;
    }

    public function getCoPrincipal(): ?int
    {
        return $this->coPrincipal;
    }

    public function setCoPrincipal(?int $coPrincipal): static
    {
        $this->coPrincipal = $coPrincipal;

        return $this;
    }

    public function getCoEdicode(): ?string
    {
        return $this->coEdicode;
    }

    public function setCoEdicode(?string $coEdicode): static
    {
        $this->coEdicode = $coEdicode;

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
