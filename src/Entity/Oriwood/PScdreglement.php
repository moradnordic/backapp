<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PScdreglementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_SCDREGLEMENT')]
#[ORM\Entity(repositoryClass: PScdreglementRepository::class)]
class PScdreglement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "SCD_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $scdType = null;

    #[ORM\Column(name: "JO_NumCli", length: 7, nullable: true)]
    private ?string $joNumcli = null;

    #[ORM\Column(name: "JO_NumFour", length: 7, nullable: true)]
    private ?string $joNumfour = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getScdType(): ?int
    {
        return $this->scdType;
    }

    public function setScdType(?int $scdType): static
    {
        $this->scdType = $scdType;

        return $this;
    }

    public function getJoNumcli(): ?string
    {
        return $this->joNumcli;
    }

    public function setJoNumcli(?string $joNumcli): static
    {
        $this->joNumcli = $joNumcli;

        return $this;
    }

    public function getJoNumfour(): ?string
    {
        return $this->joNumfour;
    }

    public function setJoNumfour(?string $joNumfour): static
    {
        $this->joNumfour = $joNumfour;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
