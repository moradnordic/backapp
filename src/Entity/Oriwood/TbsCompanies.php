<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TbsCompaniesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tbS_Companies')]
#[ORM\Entity(repositoryClass: TbsCompaniesRepository::class)]
class TbsCompanies
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Name", length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(name: "FullName", length: 255, nullable: true)]
    private ?string $fullname = null;

    #[ORM\Column(name: "MainDirectoryPatch", length: 255, nullable: true)]
    private ?string $maindirectorypatch = null;

    #[ORM\Column(name: "FilesDP", length: 255, nullable: true)]
    private ?string $filesdp = null;

    #[ORM\Column(name: "OurChequesDP", length: 255, nullable: true)]
    private ?string $ourchequesdp = null;

    #[ORM\Column(name: "PayInChequesDP", length: 255, nullable: true)]
    private ?string $payinchequesdp = null;

    #[ORM\Column(name: "VersementsDP", length: 255, nullable: true)]
    private ?string $versementsdp = null;

    #[ORM\Column(name: "DataBaseName", length: 255, nullable: true)]
    private ?string $databasename = null;

    #[ORM\Column(name: "DatabAseDirectoryPath", length: 255, nullable: true)]
    private ?string $databasedirectorypath = null;

    #[ORM\Column(name: "AchatsDP", length: 255, nullable: true)]
    private ?string $achatsdp = null;

    #[ORM\Column(name: "CaisseDP", length: 255, nullable: true)]
    private ?string $caissedp = null;

    #[ORM\Column(name: "BackColor", length: 255, nullable: true)]
    private ?string $backcolor = null;

    #[ORM\Column(name: "Active")]
    private ?bool $active = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(?string $fullname): static
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getMaindirectorypatch(): ?string
    {
        return $this->maindirectorypatch;
    }

    public function setMaindirectorypatch(?string $maindirectorypatch): static
    {
        $this->maindirectorypatch = $maindirectorypatch;

        return $this;
    }

    public function getFilesdp(): ?string
    {
        return $this->filesdp;
    }

    public function setFilesdp(?string $filesdp): static
    {
        $this->filesdp = $filesdp;

        return $this;
    }

    public function getOurchequesdp(): ?string
    {
        return $this->ourchequesdp;
    }

    public function setOurchequesdp(?string $ourchequesdp): static
    {
        $this->ourchequesdp = $ourchequesdp;

        return $this;
    }

    public function getPayinchequesdp(): ?string
    {
        return $this->payinchequesdp;
    }

    public function setPayinchequesdp(?string $payinchequesdp): static
    {
        $this->payinchequesdp = $payinchequesdp;

        return $this;
    }

    public function getVersementsdp(): ?string
    {
        return $this->versementsdp;
    }

    public function setVersementsdp(?string $versementsdp): static
    {
        $this->versementsdp = $versementsdp;

        return $this;
    }

    public function getDatabasename(): ?string
    {
        return $this->databasename;
    }

    public function setDatabasename(?string $databasename): static
    {
        $this->databasename = $databasename;

        return $this;
    }

    public function getDatabasedirectorypath(): ?string
    {
        return $this->databasedirectorypath;
    }

    public function setDatabasedirectorypath(?string $databasedirectorypath): static
    {
        $this->databasedirectorypath = $databasedirectorypath;

        return $this;
    }

    public function getAchatsdp(): ?string
    {
        return $this->achatsdp;
    }

    public function setAchatsdp(?string $achatsdp): static
    {
        $this->achatsdp = $achatsdp;

        return $this;
    }

    public function getCaissedp(): ?string
    {
        return $this->caissedp;
    }

    public function setCaissedp(?string $caissedp): static
    {
        $this->caissedp = $caissedp;

        return $this;
    }

    public function getBackcolor(): ?string
    {
        return $this->backcolor;
    }

    public function setBackcolor(?string $backcolor): static
    {
        $this->backcolor = $backcolor;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }
}
