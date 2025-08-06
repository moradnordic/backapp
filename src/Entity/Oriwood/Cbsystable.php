<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\CbsystableRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbSysTable')]
#[ORM\UniqueConstraint(name: 'UK_CBSYSTABLE', columns: ['CB_LocalGUID'])]
#[ORM\Entity(repositoryClass: CbsystableRepository::class)]
class Cbsystable
{
    #[ORM\Column(name: "CB_Type", length: 4, options: ["fixed" => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbType = null;

    #[ORM\Column(name: "CB_CBaseVersion")]
    private ?int $cbCbaseversion = null;

    #[ORM\Column(name: "CB_DescVersion", nullable: true)]
    private ?int $cbDescversion = null;

    #[ORM\Column(name: "CB_Creator", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbCreator = null;

    #[ORM\Column(name: "CB_Mono", nullable: true)]
    private ?int $cbMono = null;

    #[ORM\Column(name: "CB_Version", nullable: true)]
    private ?int $cbVersion = null;

    #[ORM\Column(name: "CB_TrigVersion", nullable: true)]
    private ?int $cbTrigversion = null;

    #[ORM\Column(name: "CB_Replication", nullable: true)]
    private ?int $cbReplication = null;

    #[ORM\Column(name: "CB_LocalGUID", type: Types::GUID, nullable: true)]
    private ?string $cbLocalguid = 'newid';

    public function getCbType(): ?string
    {
        return $this->cbType;
    }

    public function setCbType(string $cbType): static
    {
        $this->cbType = $cbType;

        return $this;
    }

    public function getCbCbaseversion(): ?int
    {
        return $this->cbCbaseversion;
    }

    public function setCbCbaseversion(int $cbCbaseversion): static
    {
        $this->cbCbaseversion = $cbCbaseversion;

        return $this;
    }

    public function getCbDescversion(): ?int
    {
        return $this->cbDescversion;
    }

    public function setCbDescversion(?int $cbDescversion): static
    {
        $this->cbDescversion = $cbDescversion;

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

    public function getCbMono(): ?int
    {
        return $this->cbMono;
    }

    public function setCbMono(?int $cbMono): static
    {
        $this->cbMono = $cbMono;

        return $this;
    }

    public function getCbVersion(): ?int
    {
        return $this->cbVersion;
    }

    public function setCbVersion(?int $cbVersion): static
    {
        $this->cbVersion = $cbVersion;

        return $this;
    }

    public function getCbTrigversion(): ?int
    {
        return $this->cbTrigversion;
    }

    public function setCbTrigversion(?int $cbTrigversion): static
    {
        $this->cbTrigversion = $cbTrigversion;

        return $this;
    }

    public function getCbReplication(): ?int
    {
        return $this->cbReplication;
    }

    public function setCbReplication(?int $cbReplication): static
    {
        $this->cbReplication = $cbReplication;

        return $this;
    }

    public function getCbLocalguid(): ?string
    {
        return $this->cbLocalguid;
    }

    public function setCbLocalguid(?string $cbLocalguid): static
    {
        $this->cbLocalguid = $cbLocalguid;

        return $this;
    }
}
