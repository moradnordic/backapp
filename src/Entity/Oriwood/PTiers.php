<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PTiersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_TIERS')]
#[ORM\Entity(repositoryClass: PTiersRepository::class)]
class PTiers
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "T_Principal", type: Types::SMALLINT, nullable: true)]
    private ?int $tPrincipal = null;

    #[ORM\Column(name: "T_Val01T_Intitule", length: 17, nullable: true)]
    private ?string $tVal01tIntitule = null;

    #[ORM\Column(name: "T_Val01T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal01tTcompte = null;

    #[ORM\Column(name: "T_Val01T_Compte", length: 13, nullable: true)]
    private ?string $tVal01tCompte = null;

    #[ORM\Column(name: "T_Val02T_Intitule", length: 17, nullable: true)]
    private ?string $tVal02tIntitule = null;

    #[ORM\Column(name: "T_Val02T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal02tTcompte = null;

    #[ORM\Column(name: "T_Val02T_Compte", length: 13, nullable: true)]
    private ?string $tVal02tCompte = null;

    #[ORM\Column(name: "T_Val03T_Intitule", length: 17, nullable: true)]
    private ?string $tVal03tIntitule = null;

    #[ORM\Column(name: "T_Val03T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal03tTcompte = null;

    #[ORM\Column(name: "T_Val03T_Compte", length: 13, nullable: true)]
    private ?string $tVal03tCompte = null;

    #[ORM\Column(name: "T_Val04T_Intitule", length: 17, nullable: true)]
    private ?string $tVal04tIntitule = null;

    #[ORM\Column(name: "T_Val04T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal04tTcompte = null;

    #[ORM\Column(name: "T_Val04T_Compte", length: 13, nullable: true)]
    private ?string $tVal04tCompte = null;

    #[ORM\Column(name: "T_Val05T_Intitule", length: 17, nullable: true)]
    private ?string $tVal05tIntitule = null;

    #[ORM\Column(name: "T_Val05T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal05tTcompte = null;

    #[ORM\Column(name: "T_Val05T_Compte", length: 13, nullable: true)]
    private ?string $tVal05tCompte = null;

    #[ORM\Column(name: "T_Val06T_Intitule", length: 17, nullable: true)]
    private ?string $tVal06tIntitule = null;

    #[ORM\Column(name: "T_Val06T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal06tTcompte = null;

    #[ORM\Column(name: "T_Val06T_Compte", length: 13, nullable: true)]
    private ?string $tVal06tCompte = null;

    #[ORM\Column(name: "T_Val07T_Intitule", length: 17, nullable: true)]
    private ?string $tVal07tIntitule = null;

    #[ORM\Column(name: "T_Val07T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal07tTcompte = null;

    #[ORM\Column(name: "T_Val07T_Compte", length: 13, nullable: true)]
    private ?string $tVal07tCompte = null;

    #[ORM\Column(name: "T_Val08T_Intitule", length: 17, nullable: true)]
    private ?string $tVal08tIntitule = null;

    #[ORM\Column(name: "T_Val08T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal08tTcompte = null;

    #[ORM\Column(name: "T_Val08T_Compte", length: 13, nullable: true)]
    private ?string $tVal08tCompte = null;

    #[ORM\Column(name: "T_Val09T_Intitule", length: 17, nullable: true)]
    private ?string $tVal09tIntitule = null;

    #[ORM\Column(name: "T_Val09T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal09tTcompte = null;

    #[ORM\Column(name: "T_Val09T_Compte", length: 13, nullable: true)]
    private ?string $tVal09tCompte = null;

    #[ORM\Column(name: "T_Val10T_Intitule", length: 17, nullable: true)]
    private ?string $tVal10tIntitule = null;

    #[ORM\Column(name: "T_Val10T_TCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $tVal10tTcompte = null;

    #[ORM\Column(name: "T_Val10T_Compte", length: 13, nullable: true)]
    private ?string $tVal10tCompte = null;

    #[ORM\Column(name: "T_Numerotation", type: Types::SMALLINT, nullable: true)]
    private ?int $tNumerotation = null;

    #[ORM\Column(name: "T_Lg", type: Types::SMALLINT, nullable: true)]
    private ?int $tLg = null;

    #[ORM\Column(name: "T_Racine", length: 17, nullable: true)]
    private ?string $tRacine = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getTPrincipal(): ?int
    {
        return $this->tPrincipal;
    }

    public function setTPrincipal(?int $tPrincipal): static
    {
        $this->tPrincipal = $tPrincipal;

        return $this;
    }

    public function getTVal01tIntitule(): ?string
    {
        return $this->tVal01tIntitule;
    }

    public function setTVal01tIntitule(?string $tVal01tIntitule): static
    {
        $this->tVal01tIntitule = $tVal01tIntitule;

        return $this;
    }

    public function getTVal01tTcompte(): ?int
    {
        return $this->tVal01tTcompte;
    }

    public function setTVal01tTcompte(?int $tVal01tTcompte): static
    {
        $this->tVal01tTcompte = $tVal01tTcompte;

        return $this;
    }

    public function getTVal01tCompte(): ?string
    {
        return $this->tVal01tCompte;
    }

    public function setTVal01tCompte(?string $tVal01tCompte): static
    {
        $this->tVal01tCompte = $tVal01tCompte;

        return $this;
    }

    public function getTVal02tIntitule(): ?string
    {
        return $this->tVal02tIntitule;
    }

    public function setTVal02tIntitule(?string $tVal02tIntitule): static
    {
        $this->tVal02tIntitule = $tVal02tIntitule;

        return $this;
    }

    public function getTVal02tTcompte(): ?int
    {
        return $this->tVal02tTcompte;
    }

    public function setTVal02tTcompte(?int $tVal02tTcompte): static
    {
        $this->tVal02tTcompte = $tVal02tTcompte;

        return $this;
    }

    public function getTVal02tCompte(): ?string
    {
        return $this->tVal02tCompte;
    }

    public function setTVal02tCompte(?string $tVal02tCompte): static
    {
        $this->tVal02tCompte = $tVal02tCompte;

        return $this;
    }

    public function getTVal03tIntitule(): ?string
    {
        return $this->tVal03tIntitule;
    }

    public function setTVal03tIntitule(?string $tVal03tIntitule): static
    {
        $this->tVal03tIntitule = $tVal03tIntitule;

        return $this;
    }

    public function getTVal03tTcompte(): ?int
    {
        return $this->tVal03tTcompte;
    }

    public function setTVal03tTcompte(?int $tVal03tTcompte): static
    {
        $this->tVal03tTcompte = $tVal03tTcompte;

        return $this;
    }

    public function getTVal03tCompte(): ?string
    {
        return $this->tVal03tCompte;
    }

    public function setTVal03tCompte(?string $tVal03tCompte): static
    {
        $this->tVal03tCompte = $tVal03tCompte;

        return $this;
    }

    public function getTVal04tIntitule(): ?string
    {
        return $this->tVal04tIntitule;
    }

    public function setTVal04tIntitule(?string $tVal04tIntitule): static
    {
        $this->tVal04tIntitule = $tVal04tIntitule;

        return $this;
    }

    public function getTVal04tTcompte(): ?int
    {
        return $this->tVal04tTcompte;
    }

    public function setTVal04tTcompte(?int $tVal04tTcompte): static
    {
        $this->tVal04tTcompte = $tVal04tTcompte;

        return $this;
    }

    public function getTVal04tCompte(): ?string
    {
        return $this->tVal04tCompte;
    }

    public function setTVal04tCompte(?string $tVal04tCompte): static
    {
        $this->tVal04tCompte = $tVal04tCompte;

        return $this;
    }

    public function getTVal05tIntitule(): ?string
    {
        return $this->tVal05tIntitule;
    }

    public function setTVal05tIntitule(?string $tVal05tIntitule): static
    {
        $this->tVal05tIntitule = $tVal05tIntitule;

        return $this;
    }

    public function getTVal05tTcompte(): ?int
    {
        return $this->tVal05tTcompte;
    }

    public function setTVal05tTcompte(?int $tVal05tTcompte): static
    {
        $this->tVal05tTcompte = $tVal05tTcompte;

        return $this;
    }

    public function getTVal05tCompte(): ?string
    {
        return $this->tVal05tCompte;
    }

    public function setTVal05tCompte(?string $tVal05tCompte): static
    {
        $this->tVal05tCompte = $tVal05tCompte;

        return $this;
    }

    public function getTVal06tIntitule(): ?string
    {
        return $this->tVal06tIntitule;
    }

    public function setTVal06tIntitule(?string $tVal06tIntitule): static
    {
        $this->tVal06tIntitule = $tVal06tIntitule;

        return $this;
    }

    public function getTVal06tTcompte(): ?int
    {
        return $this->tVal06tTcompte;
    }

    public function setTVal06tTcompte(?int $tVal06tTcompte): static
    {
        $this->tVal06tTcompte = $tVal06tTcompte;

        return $this;
    }

    public function getTVal06tCompte(): ?string
    {
        return $this->tVal06tCompte;
    }

    public function setTVal06tCompte(?string $tVal06tCompte): static
    {
        $this->tVal06tCompte = $tVal06tCompte;

        return $this;
    }

    public function getTVal07tIntitule(): ?string
    {
        return $this->tVal07tIntitule;
    }

    public function setTVal07tIntitule(?string $tVal07tIntitule): static
    {
        $this->tVal07tIntitule = $tVal07tIntitule;

        return $this;
    }

    public function getTVal07tTcompte(): ?int
    {
        return $this->tVal07tTcompte;
    }

    public function setTVal07tTcompte(?int $tVal07tTcompte): static
    {
        $this->tVal07tTcompte = $tVal07tTcompte;

        return $this;
    }

    public function getTVal07tCompte(): ?string
    {
        return $this->tVal07tCompte;
    }

    public function setTVal07tCompte(?string $tVal07tCompte): static
    {
        $this->tVal07tCompte = $tVal07tCompte;

        return $this;
    }

    public function getTVal08tIntitule(): ?string
    {
        return $this->tVal08tIntitule;
    }

    public function setTVal08tIntitule(?string $tVal08tIntitule): static
    {
        $this->tVal08tIntitule = $tVal08tIntitule;

        return $this;
    }

    public function getTVal08tTcompte(): ?int
    {
        return $this->tVal08tTcompte;
    }

    public function setTVal08tTcompte(?int $tVal08tTcompte): static
    {
        $this->tVal08tTcompte = $tVal08tTcompte;

        return $this;
    }

    public function getTVal08tCompte(): ?string
    {
        return $this->tVal08tCompte;
    }

    public function setTVal08tCompte(?string $tVal08tCompte): static
    {
        $this->tVal08tCompte = $tVal08tCompte;

        return $this;
    }

    public function getTVal09tIntitule(): ?string
    {
        return $this->tVal09tIntitule;
    }

    public function setTVal09tIntitule(?string $tVal09tIntitule): static
    {
        $this->tVal09tIntitule = $tVal09tIntitule;

        return $this;
    }

    public function getTVal09tTcompte(): ?int
    {
        return $this->tVal09tTcompte;
    }

    public function setTVal09tTcompte(?int $tVal09tTcompte): static
    {
        $this->tVal09tTcompte = $tVal09tTcompte;

        return $this;
    }

    public function getTVal09tCompte(): ?string
    {
        return $this->tVal09tCompte;
    }

    public function setTVal09tCompte(?string $tVal09tCompte): static
    {
        $this->tVal09tCompte = $tVal09tCompte;

        return $this;
    }

    public function getTVal10tIntitule(): ?string
    {
        return $this->tVal10tIntitule;
    }

    public function setTVal10tIntitule(?string $tVal10tIntitule): static
    {
        $this->tVal10tIntitule = $tVal10tIntitule;

        return $this;
    }

    public function getTVal10tTcompte(): ?int
    {
        return $this->tVal10tTcompte;
    }

    public function setTVal10tTcompte(?int $tVal10tTcompte): static
    {
        $this->tVal10tTcompte = $tVal10tTcompte;

        return $this;
    }

    public function getTVal10tCompte(): ?string
    {
        return $this->tVal10tCompte;
    }

    public function setTVal10tCompte(?string $tVal10tCompte): static
    {
        $this->tVal10tCompte = $tVal10tCompte;

        return $this;
    }

    public function getTNumerotation(): ?int
    {
        return $this->tNumerotation;
    }

    public function setTNumerotation(?int $tNumerotation): static
    {
        $this->tNumerotation = $tNumerotation;

        return $this;
    }

    public function getTLg(): ?int
    {
        return $this->tLg;
    }

    public function setTLg(?int $tLg): static
    {
        $this->tLg = $tLg;

        return $this;
    }

    public function getTRacine(): ?string
    {
        return $this->tRacine;
    }

    public function setTRacine(?string $tRacine): static
    {
        $this->tRacine = $tRacine;

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
