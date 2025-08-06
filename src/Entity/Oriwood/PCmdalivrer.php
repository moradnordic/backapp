<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PCmdalivrerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CMDALIVRER')]
#[ORM\Entity(repositoryClass: PCmdalivrerRepository::class)]
class PCmdalivrer
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_CmdAlivrer", type: Types::SMALLINT, nullable: true)]
    private ?int $cCmdalivrer = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCCmdalivrer(): ?int
    {
        return $this->cCmdalivrer;
    }

    public function setCCmdalivrer(?int $cCmdalivrer): static
    {
        $this->cCmdalivrer = $cCmdalivrer;

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
