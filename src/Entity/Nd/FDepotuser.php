<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FDepotuserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_DEPOTUSER')]
#[ORM\Index(name: 'IDU_DEPOT', columns: ['PROT_No'])]
#[ORM\UniqueConstraint(name: 'IDU_USER', columns: ['PROT_No'])]
#[ORM\Index(name: 'FKIA_F_DEPOTUSER_PROT_No', columns: ['cbPROT_No'])]
#[ORM\Entity(repositoryClass: FDepotuserRepository::class)]
class FDepotuser
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "PROT_No", nullable: true)]
    private ?int $protNo = null;

    #[ORM\Column(name: "cbPROT_No", nullable: true)]
    private ?int $cbprotNo = null;

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

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(?int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getProtNo(): ?int
    {
        return $this->protNo;
    }

    public function setProtNo(?int $protNo): static
    {
        $this->protNo = $protNo;

        return $this;
    }

    public function getCbprotNo(): ?int
    {
        return $this->cbprotNo;
    }

    public function setCbprotNo(?int $cbprotNo): static
    {
        $this->cbprotNo = $cbprotNo;

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
