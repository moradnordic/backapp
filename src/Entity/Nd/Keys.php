<?php

namespace App\Entity\Nd;

use App\Repository\Nd\KeysRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'keys')]
#[ORM\Entity(repositoryClass: KeysRepository::class)]
class Keys
{
    #[ORM\Column(name: "version", type: Types::SMALLINT)]
    private ?int $version = null;

    #[ORM\Column(name: "CB_Type", length: 4, options: ["fixed" => true])]
    private ?string $cbType = null;

    #[ORM\Column(name: "sKey", type: Types::BINARY)]
    private $skey = null;

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(int $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getCbType(): ?string
    {
        return $this->cbType;
    }

    public function setCbType(string $cbType): static
    {
        $this->cbType = $cbType;

        return $this;
    }

    public function getSkey()
    {
        return $this->skey;
    }

    public function setSkey($skey): static
    {
        $this->skey = $skey;

        return $this;
    }
}
