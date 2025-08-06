<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\CbregfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbRegFile')]
#[ORM\Entity(repositoryClass: CbregfileRepository::class)]
class Cbregfile
{
    #[ORM\Column(name: "cbSession", type: Types::SMALLINT)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $cbsession = null;

    #[ORM\Column(name: "cbFile", length: 128)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbfile = null;

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

    public function setCbfile(string $cbfile): static
    {
        $this->cbfile = $cbfile;

        return $this;
    }
}
