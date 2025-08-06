<?php

namespace App\Entity\Nd;

use App\Repository\Nd\CbsysabonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbSysAbonnement')]
#[ORM\Entity(repositoryClass: CbsysabonnementRepository::class)]
class Cbsysabonnement
{
    #[ORM\Column(name: "CB_SiteGUID", type: Types::GUID)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbSiteguid = null;

    #[ORM\Column(name: "CB_IdArticle", type: Types::SMALLINT)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $cbIdarticle = null;

    #[ORM\Column(name: "CB_LastReplication")]
    private ?int $cbLastreplication = null;

    public function getCbSiteguid(): ?string
    {
        return $this->cbSiteguid;
    }

    public function setCbSiteguid(string $cbSiteguid): static
    {
        $this->cbSiteguid = $cbSiteguid;

        return $this;
    }

    public function getCbIdarticle(): ?int
    {
        return $this->cbIdarticle;
    }

    public function setCbIdarticle(int $cbIdarticle): static
    {
        $this->cbIdarticle = $cbIdarticle;

        return $this;
    }

    public function getCbLastreplication(): ?int
    {
        return $this->cbLastreplication;
    }

    public function setCbLastreplication(int $cbLastreplication): static
    {
        $this->cbLastreplication = $cbLastreplication;

        return $this;
    }
}
