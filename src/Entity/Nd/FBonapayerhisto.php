<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FBonapayerhistoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_BONAPAYERHISTO')]
#[ORM\Index(name: 'IBP_ECNO', columns: ['BP_Type'])]
#[ORM\Index(name: 'IBP_CONO', columns: ['CO_No'])]
#[ORM\Index(name: 'FKIA_F_BONAPAYERHISTO_EC_No', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_BONAPAYERHISTO_CO_No', columns: ['cbCO_No'])]
#[ORM\Entity(repositoryClass: FBonapayerhistoRepository::class)]
class FBonapayerhisto
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "BP_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $bpType = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "BP_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $bpDate = null;

    #[ORM\Column(name: "BP_Commentaire", length: 255, nullable: true)]
    private ?string $bpCommentaire = null;

    #[ORM\Column(name: "BP_Application", type: Types::SMALLINT, nullable: true)]
    private ?int $bpApplication = null;

    #[ORM\Column(name: "BP_Retour", type: Types::SMALLINT, nullable: true)]
    private ?int $bpRetour = null;

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

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getBpType(): ?int
    {
        return $this->bpType;
    }

    public function setBpType(?int $bpType): static
    {
        $this->bpType = $bpType;

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

    public function getCbcoNo(): ?int
    {
        return $this->cbcoNo;
    }

    public function setCbcoNo(?int $cbcoNo): static
    {
        $this->cbcoNo = $cbcoNo;

        return $this;
    }

    public function getBpDate(): ?\DateTimeInterface
    {
        return $this->bpDate;
    }

    public function setBpDate(?\DateTimeInterface $bpDate): static
    {
        $this->bpDate = $bpDate;

        return $this;
    }

    public function getBpCommentaire(): ?string
    {
        return $this->bpCommentaire;
    }

    public function setBpCommentaire(?string $bpCommentaire): static
    {
        $this->bpCommentaire = $bpCommentaire;

        return $this;
    }

    public function getBpApplication(): ?int
    {
        return $this->bpApplication;
    }

    public function setBpApplication(?int $bpApplication): static
    {
        $this->bpApplication = $bpApplication;

        return $this;
    }

    public function getBpRetour(): ?int
    {
        return $this->bpRetour;
    }

    public function setBpRetour(?int $bpRetour): static
    {
        $this->bpRetour = $bpRetour;

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
