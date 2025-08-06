<?php

namespace App\Entity\Nd;

use App\Repository\Nd\CbregmessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbRegMessage')]
#[ORM\Entity(repositoryClass: CbregmessageRepository::class)]
class Cbregmessage
{
    #[ORM\Column(name: "cbSession", type: Types::SMALLINT)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $cbsession = null;

    public function getCbsession(): ?int
    {
        return $this->cbsession;
    }

    public function setCbsession(int $cbsession): static
    {
        $this->cbsession = $cbsession;

        return $this;
    }
}
