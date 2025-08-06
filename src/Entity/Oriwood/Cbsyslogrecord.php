<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\CbsyslogrecordRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'cbSysLogRecord')]
#[ORM\Entity(repositoryClass: CbsyslogrecordRepository::class)]
class Cbsyslogrecord
{
    #[ORM\Column(name: "CB_Operation", type: Types::SMALLINT)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $cbOperation = null;

    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "cbFile", length: 128)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $cbfile = null;

    #[ORM\Column(name: "CB_DateOperation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbDateoperation = null;

    #[ORM\Column(name: "CB_Creator", length: 4, options: ["fixed" => true])]
    private ?string $cbCreator = null;

    #[ORM\Column(name: "CB_SiteOrigine", type: Types::GUID, nullable: true)]
    private ?string $cbSiteorigine = null;

    #[ORM\Column(name: "CB_Replication")]
    private ?int $cbReplication = null;

    #[ORM\Column(name: "CB_Identifiant", type: Types::BINARY)]
    private $cbIdentifiant = null;

    #[ORM\Column(name: "cbLogMarq")]
    private ?int $cblogmarq = null;

    public function getCbOperation(): ?int
    {
        return $this->cbOperation;
    }

    public function setCbOperation(int $cbOperation): static
    {
        $this->cbOperation = $cbOperation;

        return $this;
    }

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function setCbmarq(int $cbmarq): static
    {
        $this->cbmarq = $cbmarq;

        return $this;
    }

    public function getCbfile(): ?string
    {
        return $this->cbfile;
    }

    public function setCbfile(string $cbfile): static
    {
        $this->cbfile = $cbfile;

        return $this;
    }

    public function getCbDateoperation(): ?\DateTimeInterface
    {
        return $this->cbDateoperation;
    }

    public function setCbDateoperation(?\DateTimeInterface $cbDateoperation): static
    {
        $this->cbDateoperation = $cbDateoperation;

        return $this;
    }

    public function getCbCreator(): ?string
    {
        return $this->cbCreator;
    }

    public function setCbCreator(string $cbCreator): static
    {
        $this->cbCreator = $cbCreator;

        return $this;
    }

    public function getCbSiteorigine(): ?string
    {
        return $this->cbSiteorigine;
    }

    public function setCbSiteorigine(?string $cbSiteorigine): static
    {
        $this->cbSiteorigine = $cbSiteorigine;

        return $this;
    }

    public function getCbReplication(): ?int
    {
        return $this->cbReplication;
    }

    public function setCbReplication(int $cbReplication): static
    {
        $this->cbReplication = $cbReplication;

        return $this;
    }

    public function getCbIdentifiant()
    {
        return $this->cbIdentifiant;
    }

    public function setCbIdentifiant($cbIdentifiant): static
    {
        $this->cbIdentifiant = $cbIdentifiant;

        return $this;
    }

    public function getCblogmarq(): ?int
    {
        return $this->cblogmarq;
    }

    public function setCblogmarq(int $cblogmarq): static
    {
        $this->cblogmarq = $cblogmarq;

        return $this;
    }
}
