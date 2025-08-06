<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PRegistreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_REGISTRE')]
#[ORM\Entity(repositoryClass: PRegistreRepository::class)]
class PRegistre
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "R_Registre01", type: Types::SMALLINT, nullable: true)]
    private ?int $rRegistre01 = null;

    #[ORM\Column(name: "R_Registre02", type: Types::SMALLINT, nullable: true)]
    private ?int $rRegistre02 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getRRegistre01(): ?int
    {
        return $this->rRegistre01;
    }

    public function setRRegistre01(?int $rRegistre01): static
    {
        $this->rRegistre01 = $rRegistre01;

        return $this;
    }

    public function getRRegistre02(): ?int
    {
        return $this->rRegistre02;
    }

    public function setRRegistre02(?int $rRegistre02): static
    {
        $this->rRegistre02 = $rRegistre02;

        return $this;
    }
}
