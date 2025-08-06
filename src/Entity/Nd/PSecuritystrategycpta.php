<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PSecuritystrategycptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_SECURITYSTRATEGYCPTA')]
#[ORM\Entity(repositoryClass: PSecuritystrategycptaRepository::class)]
class PSecuritystrategycpta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "SECUR_PwdMini", type: Types::SMALLINT, nullable: true)]
    private ?int $securPwdmini = null;

    #[ORM\Column(name: "SECUR_PwdRenouv", type: Types::SMALLINT, nullable: true)]
    private ?int $securPwdrenouv = null;

    #[ORM\Column(name: "SECUR_PwdComplex", type: Types::SMALLINT, nullable: true)]
    private ?int $securPwdcomplex = null;

    #[ORM\Column(name: "SECUR_PwdChain", type: Types::SMALLINT, nullable: true)]
    private ?int $securPwdchain = null;

    #[ORM\Column(name: "SECUR_PwdRequired", type: Types::SMALLINT, nullable: true)]
    private ?int $securPwdrequired = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getSecurPwdmini(): ?int
    {
        return $this->securPwdmini;
    }

    public function setSecurPwdmini(?int $securPwdmini): static
    {
        $this->securPwdmini = $securPwdmini;

        return $this;
    }

    public function getSecurPwdrenouv(): ?int
    {
        return $this->securPwdrenouv;
    }

    public function setSecurPwdrenouv(?int $securPwdrenouv): static
    {
        $this->securPwdrenouv = $securPwdrenouv;

        return $this;
    }

    public function getSecurPwdcomplex(): ?int
    {
        return $this->securPwdcomplex;
    }

    public function setSecurPwdcomplex(?int $securPwdcomplex): static
    {
        $this->securPwdcomplex = $securPwdcomplex;

        return $this;
    }

    public function getSecurPwdchain(): ?int
    {
        return $this->securPwdchain;
    }

    public function setSecurPwdchain(?int $securPwdchain): static
    {
        $this->securPwdchain = $securPwdchain;

        return $this;
    }

    public function getSecurPwdrequired(): ?int
    {
        return $this->securPwdrequired;
    }

    public function setSecurPwdrequired(?int $securPwdrequired): static
    {
        $this->securPwdrequired = $securPwdrequired;

        return $this;
    }
}
