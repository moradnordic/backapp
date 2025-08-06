<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FAgendadetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_AGENDADET')]
#[ORM\UniqueConstraint(name: 'IAD_EVENEM', columns: ['cbAD_Evenem'])]
#[ORM\Entity(repositoryClass: FAgendadetRepository::class)]
class FAgendadet
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AD_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $adChamp = null;

    #[ORM\Column(name: "AD_Evenem", length: 21)]
    private ?string $adEvenem = null;

    #[ORM\Column(name: "cbAD_Evenem", type: Types::BINARY, nullable: true)]
    private $cbadEvenem = null;

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

    public function getAdChamp(): ?int
    {
        return $this->adChamp;
    }

    public function setAdChamp(?int $adChamp): static
    {
        $this->adChamp = $adChamp;

        return $this;
    }

    public function getAdEvenem(): ?string
    {
        return $this->adEvenem;
    }

    public function setAdEvenem(string $adEvenem): static
    {
        $this->adEvenem = $adEvenem;

        return $this;
    }

    public function getCbadEvenem()
    {
        return $this->cbadEvenem;
    }

    public function setCbadEvenem($cbadEvenem): static
    {
        $this->cbadEvenem = $cbadEvenem;

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
