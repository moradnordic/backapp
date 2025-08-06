<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FTarifqteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_TARIFQTE')]
#[ORM\Index(name: 'ITQ_CLFO', columns: ['TQ_BorneSup'])]
#[ORM\Index(name: 'FKIA_F_TARIFQTE_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FTarifqteRepository::class)]
class FTarifqte
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AR_Ref", length: 19)]
    private ?string $arRef = null;

    #[ORM\Column(name: "cbAR_Ref", type: Types::BINARY, nullable: true)]
    private $cbarRef = null;

    #[ORM\Column(name: "TQ_RefCF", length: 17, nullable: true)]
    private ?string $tqRefcf = null;

    #[ORM\Column(name: "cbTQ_RefCF", type: Types::BINARY, nullable: true)]
    private $cbtqRefcf = null;

    #[ORM\Column(name: "TQ_BorneSup", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tqBornesup = null;

    #[ORM\Column(name: "TQ_Remise01REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tqRemise01remValeur = null;

    #[ORM\Column(name: "TQ_Remise01REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $tqRemise01remType = null;

    #[ORM\Column(name: "TQ_Remise02REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tqRemise02remValeur = null;

    #[ORM\Column(name: "TQ_Remise02REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $tqRemise02remType = null;

    #[ORM\Column(name: "TQ_Remise03REM_Valeur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tqRemise03remValeur = null;

    #[ORM\Column(name: "TQ_Remise03REM_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $tqRemise03remType = null;

    #[ORM\Column(name: "TQ_PrixNet", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $tqPrixnet = null;

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

    public function getTqRefcf(): ?string
    {
        return $this->tqRefcf;
    }

    public function setTqRefcf(?string $tqRefcf): static
    {
        $this->tqRefcf = $tqRefcf;

        return $this;
    }

    public function getCbtqRefcf()
    {
        return $this->cbtqRefcf;
    }

    public function setCbtqRefcf($cbtqRefcf): static
    {
        $this->cbtqRefcf = $cbtqRefcf;

        return $this;
    }

    public function getTqBornesup(): ?string
    {
        return $this->tqBornesup;
    }

    public function setTqBornesup(?string $tqBornesup): static
    {
        $this->tqBornesup = $tqBornesup;

        return $this;
    }

    public function getTqRemise01remValeur(): ?string
    {
        return $this->tqRemise01remValeur;
    }

    public function setTqRemise01remValeur(?string $tqRemise01remValeur): static
    {
        $this->tqRemise01remValeur = $tqRemise01remValeur;

        return $this;
    }

    public function getTqRemise01remType(): ?int
    {
        return $this->tqRemise01remType;
    }

    public function setTqRemise01remType(?int $tqRemise01remType): static
    {
        $this->tqRemise01remType = $tqRemise01remType;

        return $this;
    }

    public function getTqRemise02remValeur(): ?string
    {
        return $this->tqRemise02remValeur;
    }

    public function setTqRemise02remValeur(?string $tqRemise02remValeur): static
    {
        $this->tqRemise02remValeur = $tqRemise02remValeur;

        return $this;
    }

    public function getTqRemise02remType(): ?int
    {
        return $this->tqRemise02remType;
    }

    public function setTqRemise02remType(?int $tqRemise02remType): static
    {
        $this->tqRemise02remType = $tqRemise02remType;

        return $this;
    }

    public function getTqRemise03remValeur(): ?string
    {
        return $this->tqRemise03remValeur;
    }

    public function setTqRemise03remValeur(?string $tqRemise03remValeur): static
    {
        $this->tqRemise03remValeur = $tqRemise03remValeur;

        return $this;
    }

    public function getTqRemise03remType(): ?int
    {
        return $this->tqRemise03remType;
    }

    public function setTqRemise03remType(?int $tqRemise03remType): static
    {
        $this->tqRemise03remType = $tqRemise03remType;

        return $this;
    }

    public function getTqPrixnet(): ?string
    {
        return $this->tqPrixnet;
    }

    public function setTqPrixnet(?string $tqPrixnet): static
    {
        $this->tqPrixnet = $tqPrixnet;

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
