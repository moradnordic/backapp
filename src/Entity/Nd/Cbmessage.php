<?php

namespace App\Entity\Nd;

use App\Repository\Nd\CbmessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbMessage')]
#[ORM\Entity(repositoryClass: CbmessageRepository::class)]
class Cbmessage
{
    #[ORM\Column(name: "cbModif")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmodif = null;

    #[ORM\Column(name: "cbSession", type: Types::SMALLINT, nullable: true)]
    private ?int $cbsession = null;

    #[ORM\Column(name: "cbUser", type: Types::SMALLINT, nullable: true)]
    private ?int $cbuser = null;

    #[ORM\Column(name: "cbMessage", length: 255, nullable: true)]
    private ?string $cbmessage = null;

    public function getCbmodif(): ?int
    {
        return $this->cbmodif;
    }

    public function getCbsession(): ?int
    {
        return $this->cbsession;
    }

    public function setCbsession(?int $cbsession): static
    {
        $this->cbsession = $cbsession;

        return $this;
    }

    public function getCbuser(): ?int
    {
        return $this->cbuser;
    }

    public function setCbuser(?int $cbuser): static
    {
        $this->cbuser = $cbuser;

        return $this;
    }

    public function getCbmessage(): ?string
    {
        return $this->cbmessage;
    }

    public function setCbmessage(?string $cbmessage): static
    {
        $this->cbmessage = $cbmessage;

        return $this;
    }
}
