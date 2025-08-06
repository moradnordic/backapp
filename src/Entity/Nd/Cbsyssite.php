<?php

namespace App\Entity\Nd;

use App\Repository\Nd\CbsyssiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbSysSite')]
#[ORM\Entity(repositoryClass: CbsyssiteRepository::class)]
class Cbsyssite
{
    #[ORM\Column(name: "CB_SiteGUID", type: Types::GUID)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbSiteguid = null;

    #[ORM\Column(name: "CB_Name", length: 255, nullable: true)]
    private ?string $cbName = null;

    public function getCbSiteguid(): ?string
    {
        return $this->cbSiteguid;
    }

    public function setCbSiteguid(string $cbSiteguid): static
    {
        $this->cbSiteguid = $cbSiteguid;

        return $this;
    }

    public function getCbName(): ?string
    {
        return $this->cbName;
    }

    public function setCbName(?string $cbName): static
    {
        $this->cbName = $cbName;

        return $this;
    }
}
