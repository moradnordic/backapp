<?php

namespace App\Entity\Nd;

use App\Repository\Nd\CbnotificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbNotification')]
#[ORM\Entity(repositoryClass: CbnotificationRepository::class)]
class Cbnotification
{
    #[ORM\Column(name: "cbModif")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmodif = null;

    #[ORM\Column(name: "cbSession", type: Types::SMALLINT)]
    private ?int $cbsession = null;

    #[ORM\Column(name: "cbFile", length: 128, nullable: true)]
    private ?string $cbfile = null;

    #[ORM\Column(name: "cbType", type: Types::SMALLINT)]
    private ?int $cbtype = null;

    #[ORM\Column(name: "cbUser", type: Types::SMALLINT)]
    private ?int $cbuser = null;

    #[ORM\Column(name: "cbIndMod", type: Types::BINARY, nullable: true)]
    private $cbindmod = null;

    #[ORM\Column(name: "cbMarq", nullable: true)]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "cbParam", type: Types::SMALLINT, nullable: true)]
    private ?int $cbparam = null;

    public function getCbmodif(): ?int
    {
        return $this->cbmodif;
    }

    public function getCbsession(): ?int
    {
        return $this->cbsession;
    }

    public function setCbsession(int $cbsession): static
    {
        $this->cbsession = $cbsession;

        return $this;
    }

    public function getCbfile(): ?string
    {
        return $this->cbfile;
    }

    public function setCbfile(?string $cbfile): static
    {
        $this->cbfile = $cbfile;

        return $this;
    }

    public function getCbtype(): ?int
    {
        return $this->cbtype;
    }

    public function setCbtype(int $cbtype): static
    {
        $this->cbtype = $cbtype;

        return $this;
    }

    public function getCbuser(): ?int
    {
        return $this->cbuser;
    }

    public function setCbuser(int $cbuser): static
    {
        $this->cbuser = $cbuser;

        return $this;
    }

    public function getCbindmod()
    {
        return $this->cbindmod;
    }

    public function setCbindmod($cbindmod): static
    {
        $this->cbindmod = $cbindmod;

        return $this;
    }

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function setCbmarq(?int $cbmarq): static
    {
        $this->cbmarq = $cbmarq;

        return $this;
    }

    public function getCbparam(): ?int
    {
        return $this->cbparam;
    }

    public function setCbparam(?int $cbparam): static
    {
        $this->cbparam = $cbparam;

        return $this;
    }
}
