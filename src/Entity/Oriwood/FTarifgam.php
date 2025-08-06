<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FTarifgamRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TARIFGAM')]
#[ORM\Index(name: 'ITG_CLFO', columns: ['AG_No2'])]
#[ORM\Index(name: 'ITG_TIERSREF', columns: ['cbTG_Ref'])]
#[ORM\Index(name: 'ITG_REF', columns: ['cbAR_Ref'])]
#[ORM\Index(name: 'ITG_TIERSBARRE', columns: ['cbTG_CodeBarre'])]
#[ORM\Index(name: 'ITG_CBARRE', columns: ['cbAR_Ref'])]
#[ORM\UniqueConstraint(name: 'UKA_F_TARIFGAM_TG_REFGAM', columns: ['AG_No2'])]
#[ORM\Index(name: 'FKIA_F_TARIFGAM_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FTarifgamRepository::class)]
class FTarifgam
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "TG_RefCF", length: 17, nullable: true)]
    private ?string $tgRefcf = null;

    #[ORM\Column(name: "cbTG_RefCF", type: Types::BINARY, nullable: true)]
    private $cbtgRefcf = null;

    #[ORM\Column(name: "AG_No1", nullable: true)]
    private ?int $agNo1 = null;

    #[ORM\Column(name: "AG_No2", nullable: true)]
    private ?int $agNo2 = null;

    #[ORM\Column(name: "TG_Prix", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tgPrix = null;

    #[ORM\Column(name: "TG_Ref", length: 19, nullable: true)]
    private ?string $tgRef = null;

    #[ORM\Column(name: "cbTG_Ref", type: Types::BINARY, nullable: true)]
    private $cbtgRef = null;

    #[ORM\Column(name: "TG_CodeBarre", length: 19, nullable: true)]
    private ?string $tgCodebarre = null;

    #[ORM\Column(name: "cbTG_CodeBarre", type: Types::BINARY, nullable: true)]
    private $cbtgCodebarre = null;

    #[ORM\Column(name: "TG_PrixNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tgPrixnouv = null;

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

    public function getTgRefcf(): ?string
    {
        return $this->tgRefcf;
    }

    public function setTgRefcf(?string $tgRefcf): static
    {
        $this->tgRefcf = $tgRefcf;

        return $this;
    }

    public function getCbtgRefcf()
    {
        return $this->cbtgRefcf;
    }

    public function setCbtgRefcf($cbtgRefcf): static
    {
        $this->cbtgRefcf = $cbtgRefcf;

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

    public function getTgPrix(): ?string
    {
        return $this->tgPrix;
    }

    public function setTgPrix(?string $tgPrix): static
    {
        $this->tgPrix = $tgPrix;

        return $this;
    }

    public function getTgRef(): ?string
    {
        return $this->tgRef;
    }

    public function setTgRef(?string $tgRef): static
    {
        $this->tgRef = $tgRef;

        return $this;
    }

    public function getCbtgRef()
    {
        return $this->cbtgRef;
    }

    public function setCbtgRef($cbtgRef): static
    {
        $this->cbtgRef = $cbtgRef;

        return $this;
    }

    public function getTgCodebarre(): ?string
    {
        return $this->tgCodebarre;
    }

    public function setTgCodebarre(?string $tgCodebarre): static
    {
        $this->tgCodebarre = $tgCodebarre;

        return $this;
    }

    public function getCbtgCodebarre()
    {
        return $this->cbtgCodebarre;
    }

    public function setCbtgCodebarre($cbtgCodebarre): static
    {
        $this->cbtgCodebarre = $cbtgCodebarre;

        return $this;
    }

    public function getTgPrixnouv(): ?string
    {
        return $this->tgPrixnouv;
    }

    public function setTgPrixnouv(?string $tgPrixnouv): static
    {
        $this->tgPrixnouv = $tgPrixnouv;

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
