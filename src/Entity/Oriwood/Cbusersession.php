<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\CbusersessionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbUserSession')]
#[ORM\Entity(repositoryClass: CbusersessionRepository::class)]
class Cbusersession
{
    #[ORM\Column(name: "cbSession", type: Types::SMALLINT)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $cbsession = null;

    #[ORM\Column(name: "CB_Type", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbType = null;

    #[ORM\Column(name: "CB_Creator", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbCreator = null;

    #[ORM\Column(name: "cbLicence", type: Types::SMALLINT, nullable: true)]
    private ?int $cblicence = null;

    #[ORM\Column(name: "cbLockBase", type: Types::SMALLINT, nullable: true)]
    private ?int $cblockbase = null;

    #[ORM\Column(name: "cbOldMode", type: Types::SMALLINT, nullable: true)]
    private ?int $cboldmode = null;

    #[ORM\Column(name: "cbWorkstation", type: Types::BINARY, nullable: true)]
    private $cbworkstation = null;

    #[ORM\Column(name: "cbExtCreator", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbextcreator = null;

    #[ORM\Column(name: "cbUserName", length: 128, nullable: true)]
    private ?string $cbusername = null;

    #[ORM\Column(name: "cbCurrentSynchroType", type: Types::SMALLINT, nullable: true)]
    private ?int $cbcurrentsynchrotype = null;

    public function getCbsession(): ?int
    {
        return $this->cbsession;
    }

    public function setCbsession(int $cbsession): static
    {
        $this->cbsession = $cbsession;

        return $this;
    }

    public function getCbType(): ?string
    {
        return $this->cbType;
    }

    public function setCbType(?string $cbType): static
    {
        $this->cbType = $cbType;

        return $this;
    }

    public function getCbCreator(): ?string
    {
        return $this->cbCreator;
    }

    public function setCbCreator(?string $cbCreator): static
    {
        $this->cbCreator = $cbCreator;

        return $this;
    }

    public function getCblicence(): ?int
    {
        return $this->cblicence;
    }

    public function setCblicence(?int $cblicence): static
    {
        $this->cblicence = $cblicence;

        return $this;
    }

    public function getCblockbase(): ?int
    {
        return $this->cblockbase;
    }

    public function setCblockbase(?int $cblockbase): static
    {
        $this->cblockbase = $cblockbase;

        return $this;
    }

    public function getCboldmode(): ?int
    {
        return $this->cboldmode;
    }

    public function setCboldmode(?int $cboldmode): static
    {
        $this->cboldmode = $cboldmode;

        return $this;
    }

    public function getCbworkstation()
    {
        return $this->cbworkstation;
    }

    public function setCbworkstation($cbworkstation): static
    {
        $this->cbworkstation = $cbworkstation;

        return $this;
    }

    public function getCbextcreator(): ?string
    {
        return $this->cbextcreator;
    }

    public function setCbextcreator(?string $cbextcreator): static
    {
        $this->cbextcreator = $cbextcreator;

        return $this;
    }

    public function getCbusername(): ?string
    {
        return $this->cbusername;
    }

    public function setCbusername(?string $cbusername): static
    {
        $this->cbusername = $cbusername;

        return $this;
    }

    public function getCbcurrentsynchrotype(): ?int
    {
        return $this->cbcurrentsynchrotype;
    }

    public function setCbcurrentsynchrotype(?int $cbcurrentsynchrotype): static
    {
        $this->cbcurrentsynchrotype = $cbcurrentsynchrotype;

        return $this;
    }
}
