<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\CbreguserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbRegUser')]
#[ORM\Entity(repositoryClass: CbreguserRepository::class)]
class Cbreguser
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
