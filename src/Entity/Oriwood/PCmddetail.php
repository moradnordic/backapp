<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PCmddetailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CMDDETAIL')]
#[ORM\Entity(repositoryClass: PCmddetailRepository::class)]
class PCmddetail
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_CmdDetail", type: Types::SMALLINT, nullable: true)]
    private ?int $cCmddetail = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCCmddetail(): ?int
    {
        return $this->cCmddetail;
    }

    public function setCCmddetail(?int $cCmddetail): static
    {
        $this->cCmddetail = $cCmddetail;

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
