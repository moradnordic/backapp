<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\AaaSaCodearticlesageCodearticlentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'AAA_SA_CodeArticleSage_CodeArticleNT')]
#[ORM\Entity(repositoryClass: AaaSaCodearticlesageCodearticlentRepository::class)]
class AaaSaCodearticlesageCodearticlent
{
    #[ORM\Column(name: "CodeA_Sage", length: 10, nullable: true, options: ["fixed" => true])]
    private ?string $codeaSage = null;

    #[ORM\Column(name: "CodeA_NT", length: 10, nullable: true, options: ["fixed" => true])]
    private ?string $codeaNt = null;

    #[ORM\Column(name: "CodeA_A1", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA1 = null;

    #[ORM\Column(name: "CodeA_A2", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA2 = null;

    #[ORM\Column(name: "CodeA_A3", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA3 = null;

    #[ORM\Column(name: "CodeA_A4", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA4 = null;

    #[ORM\Column(name: "CodeA_A5", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA5 = null;

    #[ORM\Column(name: "CodeA_A6", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA6 = null;

    #[ORM\Column(name: "CodeA_A7", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA7 = null;

    #[ORM\Column(name: "CodeA_A8", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA8 = null;

    #[ORM\Column(name: "CodeA_A9", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA9 = null;

    #[ORM\Column(name: "CodeA_A10", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $codeaA10 = null;

    #[ORM\Column(name: "CdeA_Def1", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef1 = null;

    #[ORM\Column(name: "CdeA_Def2", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef2 = null;

    #[ORM\Column(name: "CdeA_Def3", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef3 = null;

    #[ORM\Column(name: "CdeA_Def4", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef4 = null;

    #[ORM\Column(name: "CdeA_Def5", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef5 = null;

    #[ORM\Column(name: "CdeA_Def6", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef6 = null;

    #[ORM\Column(name: "CdeA_Def7", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef7 = null;

    #[ORM\Column(name: "CdeA_Def8", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef8 = null;

    #[ORM\Column(name: "CdeA_Def9", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef9 = null;

    #[ORM\Column(name: "CdeA_Def10", length: 50, nullable: true, options: ["fixed" => true])]
    private ?string $cdeaDef10 = null;

    #[ORM\Column(name: "CodeArticleFrs", length: 10, nullable: true, options: ["fixed" => true])]
    private ?string $codearticlefrs = null;

    public function getCodeaSage(): ?string
    {
        return $this->codeaSage;
    }

    public function setCodeaSage(?string $codeaSage): static
    {
        $this->codeaSage = $codeaSage;

        return $this;
    }

    public function getCodeaNt(): ?string
    {
        return $this->codeaNt;
    }

    public function setCodeaNt(?string $codeaNt): static
    {
        $this->codeaNt = $codeaNt;

        return $this;
    }

    public function getCodeaA1(): ?string
    {
        return $this->codeaA1;
    }

    public function setCodeaA1(?string $codeaA1): static
    {
        $this->codeaA1 = $codeaA1;

        return $this;
    }

    public function getCodeaA2(): ?string
    {
        return $this->codeaA2;
    }

    public function setCodeaA2(?string $codeaA2): static
    {
        $this->codeaA2 = $codeaA2;

        return $this;
    }

    public function getCodeaA3(): ?string
    {
        return $this->codeaA3;
    }

    public function setCodeaA3(?string $codeaA3): static
    {
        $this->codeaA3 = $codeaA3;

        return $this;
    }

    public function getCodeaA4(): ?string
    {
        return $this->codeaA4;
    }

    public function setCodeaA4(?string $codeaA4): static
    {
        $this->codeaA4 = $codeaA4;

        return $this;
    }

    public function getCodeaA5(): ?string
    {
        return $this->codeaA5;
    }

    public function setCodeaA5(?string $codeaA5): static
    {
        $this->codeaA5 = $codeaA5;

        return $this;
    }

    public function getCodeaA6(): ?string
    {
        return $this->codeaA6;
    }

    public function setCodeaA6(?string $codeaA6): static
    {
        $this->codeaA6 = $codeaA6;

        return $this;
    }

    public function getCodeaA7(): ?string
    {
        return $this->codeaA7;
    }

    public function setCodeaA7(?string $codeaA7): static
    {
        $this->codeaA7 = $codeaA7;

        return $this;
    }

    public function getCodeaA8(): ?string
    {
        return $this->codeaA8;
    }

    public function setCodeaA8(?string $codeaA8): static
    {
        $this->codeaA8 = $codeaA8;

        return $this;
    }

    public function getCodeaA9(): ?string
    {
        return $this->codeaA9;
    }

    public function setCodeaA9(?string $codeaA9): static
    {
        $this->codeaA9 = $codeaA9;

        return $this;
    }

    public function getCodeaA10(): ?string
    {
        return $this->codeaA10;
    }

    public function setCodeaA10(?string $codeaA10): static
    {
        $this->codeaA10 = $codeaA10;

        return $this;
    }

    public function getCdeaDef1(): ?string
    {
        return $this->cdeaDef1;
    }

    public function setCdeaDef1(?string $cdeaDef1): static
    {
        $this->cdeaDef1 = $cdeaDef1;

        return $this;
    }

    public function getCdeaDef2(): ?string
    {
        return $this->cdeaDef2;
    }

    public function setCdeaDef2(?string $cdeaDef2): static
    {
        $this->cdeaDef2 = $cdeaDef2;

        return $this;
    }

    public function getCdeaDef3(): ?string
    {
        return $this->cdeaDef3;
    }

    public function setCdeaDef3(?string $cdeaDef3): static
    {
        $this->cdeaDef3 = $cdeaDef3;

        return $this;
    }

    public function getCdeaDef4(): ?string
    {
        return $this->cdeaDef4;
    }

    public function setCdeaDef4(?string $cdeaDef4): static
    {
        $this->cdeaDef4 = $cdeaDef4;

        return $this;
    }

    public function getCdeaDef5(): ?string
    {
        return $this->cdeaDef5;
    }

    public function setCdeaDef5(?string $cdeaDef5): static
    {
        $this->cdeaDef5 = $cdeaDef5;

        return $this;
    }

    public function getCdeaDef6(): ?string
    {
        return $this->cdeaDef6;
    }

    public function setCdeaDef6(?string $cdeaDef6): static
    {
        $this->cdeaDef6 = $cdeaDef6;

        return $this;
    }

    public function getCdeaDef7(): ?string
    {
        return $this->cdeaDef7;
    }

    public function setCdeaDef7(?string $cdeaDef7): static
    {
        $this->cdeaDef7 = $cdeaDef7;

        return $this;
    }

    public function getCdeaDef8(): ?string
    {
        return $this->cdeaDef8;
    }

    public function setCdeaDef8(?string $cdeaDef8): static
    {
        $this->cdeaDef8 = $cdeaDef8;

        return $this;
    }

    public function getCdeaDef9(): ?string
    {
        return $this->cdeaDef9;
    }

    public function setCdeaDef9(?string $cdeaDef9): static
    {
        $this->cdeaDef9 = $cdeaDef9;

        return $this;
    }

    public function getCdeaDef10(): ?string
    {
        return $this->cdeaDef10;
    }

    public function setCdeaDef10(?string $cdeaDef10): static
    {
        $this->cdeaDef10 = $cdeaDef10;

        return $this;
    }

    public function getCodearticlefrs(): ?string
    {
        return $this->codearticlefrs;
    }

    public function setCodearticlefrs(?string $codearticlefrs): static
    {
        $this->codearticlefrs = $codearticlefrs;

        return $this;
    }
}
