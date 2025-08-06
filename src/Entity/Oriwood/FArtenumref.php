<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FArtenumrefRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ARTENUMREF')]
#[ORM\Index(name: 'IAE_GAMME1', columns: ['AG_No2'])]
#[ORM\Index(name: 'IAE_GAMME2', columns: ['AG_No1'])]
#[ORM\Index(name: 'IAE_REF', columns: ['cbAE_Ref'])]
#[ORM\Index(name: 'IAE_CBARRE', columns: ['cbAE_CodeBarre'])]
#[ORM\Index(name: 'IAE_EDICODE', columns: ['cbAE_EdiCode'])]
#[ORM\UniqueConstraint(name: 'UKA_F_ARTENUMREF_AE_REFGAM', columns: ['AG_No2'])]
#[ORM\Index(name: 'FKIA_F_ARTENUMREF_AR_Ref', columns: ['AR_Ref'])]
#[ORM\Entity(repositoryClass: FArtenumrefRepository::class)]
class FArtenumref
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

    #[ORM\Column(name: "AE_Ref", length: 19, nullable: true)]
    private ?string $aeRef = null;

    #[ORM\Column(name: "cbAE_Ref", type: Types::BINARY, nullable: true)]
    private $cbaeRef = null;

    #[ORM\Column(name: "AE_PrixAch", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $aePrixach = null;

    #[ORM\Column(name: "AE_CodeBarre", length: 19, nullable: true)]
    private ?string $aeCodebarre = null;

    #[ORM\Column(name: "cbAE_CodeBarre", type: Types::BINARY, nullable: true)]
    private $cbaeCodebarre = null;

    #[ORM\Column(name: "AE_PrixAchNouv", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $aePrixachnouv = null;

    #[ORM\Column(name: "AE_EdiCode", length: 45, nullable: true)]
    private ?string $aeEdicode = null;

    #[ORM\Column(name: "cbAE_EdiCode", type: Types::BINARY, nullable: true)]
    private $cbaeEdicode = null;

    #[ORM\Column(name: "AE_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $aeSommeil = null;

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

    public function getAeRef(): ?string
    {
        return $this->aeRef;
    }

    public function setAeRef(?string $aeRef): static
    {
        $this->aeRef = $aeRef;

        return $this;
    }

    public function getCbaeRef()
    {
        return $this->cbaeRef;
    }

    public function setCbaeRef($cbaeRef): static
    {
        $this->cbaeRef = $cbaeRef;

        return $this;
    }

    public function getAePrixach(): ?string
    {
        return $this->aePrixach;
    }

    public function setAePrixach(?string $aePrixach): static
    {
        $this->aePrixach = $aePrixach;

        return $this;
    }

    public function getAeCodebarre(): ?string
    {
        return $this->aeCodebarre;
    }

    public function setAeCodebarre(?string $aeCodebarre): static
    {
        $this->aeCodebarre = $aeCodebarre;

        return $this;
    }

    public function getCbaeCodebarre()
    {
        return $this->cbaeCodebarre;
    }

    public function setCbaeCodebarre($cbaeCodebarre): static
    {
        $this->cbaeCodebarre = $cbaeCodebarre;

        return $this;
    }

    public function getAePrixachnouv(): ?string
    {
        return $this->aePrixachnouv;
    }

    public function setAePrixachnouv(?string $aePrixachnouv): static
    {
        $this->aePrixachnouv = $aePrixachnouv;

        return $this;
    }

    public function getAeEdicode(): ?string
    {
        return $this->aeEdicode;
    }

    public function setAeEdicode(?string $aeEdicode): static
    {
        $this->aeEdicode = $aeEdicode;

        return $this;
    }

    public function getCbaeEdicode()
    {
        return $this->cbaeEdicode;
    }

    public function setCbaeEdicode($cbaeEdicode): static
    {
        $this->cbaeEdicode = $cbaeEdicode;

        return $this;
    }

    public function getAeSommeil(): ?int
    {
        return $this->aeSommeil;
    }

    public function setAeSommeil(?int $aeSommeil): static
    {
        $this->aeSommeil = $aeSommeil;

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
