<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FAgendaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_AGENDA')]
#[ORM\Index(name: 'IAG_INTERES', columns: ['AD_Champ'])]
#[ORM\Index(name: 'IAG_DATE', columns: ['AD_Champ'])]
#[ORM\Index(name: 'IAG_CHAMP', columns: ['AG_Debut'])]
#[ORM\Index(name: 'IAG_IDATE', columns: ['AD_Champ'])]
#[ORM\Index(name: 'IAG_ICHAMP', columns: ['AG_Debut'])]
#[ORM\Index(name: 'IAG_VEILLE', columns: ['cbAG_Interes'])]
#[ORM\Index(name: 'IAG_LIGNE', columns: ['DL_No'])]
#[ORM\Index(name: 'IAG_DEPOTDATE', columns: ['cbAG_Interes'])]
#[ORM\Index(name: 'IAG_PLANNING', columns: ['PP_No'])]
#[ORM\Index(name: 'IAG_INTERESFIN', columns: ['AG_Fin'])]
#[ORM\UniqueConstraint(name: 'IAG_NOINT', columns: ['AD_No'])]
#[ORM\Index(name: 'FKIA_F_AGENDA_DL_No', columns: ['cbDL_No'])]
#[ORM\Index(name: 'FKIA_F_AGENDA_DE_No', columns: ['cbDE_No'])]
#[ORM\Index(name: 'FKIA_F_AGENDA_PP_No', columns: ['cbPP_No'])]
#[ORM\Entity(repositoryClass: FAgendaRepository::class)]
class FAgenda
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AD_Champ", type: Types::SMALLINT, nullable: true)]
    private ?int $adChamp = null;

    #[ORM\Column(name: "AD_Evenem", length: 21, nullable: true)]
    private ?string $adEvenem = null;

    #[ORM\Column(name: "AG_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $agDomaine = null;

    #[ORM\Column(name: "AG_Interes", length: 19, nullable: true)]
    private ?string $agInteres = null;

    #[ORM\Column(name: "cbAG_Interes", type: Types::BINARY, nullable: true)]
    private $cbagInteres = null;

    #[ORM\Column(name: "AG_Debut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $agDebut = null;

    #[ORM\Column(name: "AG_Fin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $agFin = null;

    #[ORM\Column(name: "AG_Veille", type: Types::SMALLINT, nullable: true)]
    private ?int $agVeille = null;

    #[ORM\Column(name: "AG_Comment", length: 69, nullable: true)]
    private ?string $agComment = null;

    #[ORM\Column(name: "AG_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $agType = null;

    #[ORM\Column(name: "AG_Confirme", type: Types::SMALLINT, nullable: true)]
    private ?int $agConfirme = null;

    #[ORM\Column(name: "AG_HeureDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $agHeuredebut = null;

    #[ORM\Column(name: "AG_HeureFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $agHeurefin = null;

    #[ORM\Column(name: "AG_Ignorer", type: Types::SMALLINT, nullable: true)]
    private ?int $agIgnorer = null;

    #[ORM\Column(name: "AG_Continue", type: Types::SMALLINT, nullable: true)]
    private ?int $agContinue = null;

    #[ORM\Column(name: "DL_No", nullable: true)]
    private ?int $dlNo = null;

    #[ORM\Column(name: "cbDL_No", nullable: true)]
    private ?int $cbdlNo = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "cbDE_No", nullable: true)]
    private ?int $cbdeNo = null;

    #[ORM\Column(name: "PP_No", nullable: true)]
    private ?int $ppNo = null;

    #[ORM\Column(name: "cbPP_No", nullable: true)]
    private ?int $cbppNo = null;

    #[ORM\Column(name: "cbProt", type: Types::SMALLINT, nullable: true)]
    private ?int $cbprot = null;

    #[ORM\Column(name: "cbCreateur", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbcreateur = 'CSQL';

    #[ORM\Column(name: "cbModification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbmodification = null;

    #[ORM\Column(name: "cbReplication", nullable: true)]
    private ?int $cbreplication = null;

    #[ORM\Column(name: "cbFlag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbflag = null;

    #[ORM\Column(name: "AD_No", nullable: true)]
    private ?int $adNo = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAdChamp(): ?int
    {
        return $this->adChamp;
    }

    public function setAdChamp(?int $adChamp): static
    {
        $this->adChamp = $adChamp;

        return $this;
    }

    public function getAdEvenem(): ?string
    {
        return $this->adEvenem;
    }

    public function setAdEvenem(?string $adEvenem): static
    {
        $this->adEvenem = $adEvenem;

        return $this;
    }

    public function getAgDomaine(): ?int
    {
        return $this->agDomaine;
    }

    public function setAgDomaine(?int $agDomaine): static
    {
        $this->agDomaine = $agDomaine;

        return $this;
    }

    public function getAgInteres(): ?string
    {
        return $this->agInteres;
    }

    public function setAgInteres(?string $agInteres): static
    {
        $this->agInteres = $agInteres;

        return $this;
    }

    public function getCbagInteres()
    {
        return $this->cbagInteres;
    }

    public function setCbagInteres($cbagInteres): static
    {
        $this->cbagInteres = $cbagInteres;

        return $this;
    }

    public function getAgDebut(): ?\DateTimeInterface
    {
        return $this->agDebut;
    }

    public function setAgDebut(?\DateTimeInterface $agDebut): static
    {
        $this->agDebut = $agDebut;

        return $this;
    }

    public function getAgFin(): ?\DateTimeInterface
    {
        return $this->agFin;
    }

    public function setAgFin(?\DateTimeInterface $agFin): static
    {
        $this->agFin = $agFin;

        return $this;
    }

    public function getAgVeille(): ?int
    {
        return $this->agVeille;
    }

    public function setAgVeille(?int $agVeille): static
    {
        $this->agVeille = $agVeille;

        return $this;
    }

    public function getAgComment(): ?string
    {
        return $this->agComment;
    }

    public function setAgComment(?string $agComment): static
    {
        $this->agComment = $agComment;

        return $this;
    }

    public function getAgType(): ?int
    {
        return $this->agType;
    }

    public function setAgType(?int $agType): static
    {
        $this->agType = $agType;

        return $this;
    }

    public function getAgConfirme(): ?int
    {
        return $this->agConfirme;
    }

    public function setAgConfirme(?int $agConfirme): static
    {
        $this->agConfirme = $agConfirme;

        return $this;
    }

    public function getAgHeuredebut(): ?string
    {
        return $this->agHeuredebut;
    }

    public function setAgHeuredebut(?string $agHeuredebut): static
    {
        $this->agHeuredebut = $agHeuredebut;

        return $this;
    }

    public function getAgHeurefin(): ?string
    {
        return $this->agHeurefin;
    }

    public function setAgHeurefin(?string $agHeurefin): static
    {
        $this->agHeurefin = $agHeurefin;

        return $this;
    }

    public function getAgIgnorer(): ?int
    {
        return $this->agIgnorer;
    }

    public function setAgIgnorer(?int $agIgnorer): static
    {
        $this->agIgnorer = $agIgnorer;

        return $this;
    }

    public function getAgContinue(): ?int
    {
        return $this->agContinue;
    }

    public function setAgContinue(?int $agContinue): static
    {
        $this->agContinue = $agContinue;

        return $this;
    }

    public function getDlNo(): ?int
    {
        return $this->dlNo;
    }

    public function setDlNo(?int $dlNo): static
    {
        $this->dlNo = $dlNo;

        return $this;
    }

    public function getCbdlNo(): ?int
    {
        return $this->cbdlNo;
    }

    public function setCbdlNo(?int $cbdlNo): static
    {
        $this->cbdlNo = $cbdlNo;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(?int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getCbdeNo(): ?int
    {
        return $this->cbdeNo;
    }

    public function setCbdeNo(?int $cbdeNo): static
    {
        $this->cbdeNo = $cbdeNo;

        return $this;
    }

    public function getPpNo(): ?int
    {
        return $this->ppNo;
    }

    public function setPpNo(?int $ppNo): static
    {
        $this->ppNo = $ppNo;

        return $this;
    }

    public function getCbppNo(): ?int
    {
        return $this->cbppNo;
    }

    public function setCbppNo(?int $cbppNo): static
    {
        $this->cbppNo = $cbppNo;

        return $this;
    }

    public function getCbprot(): ?int
    {
        return $this->cbprot;
    }

    public function setCbprot(?int $cbprot): static
    {
        $this->cbprot = $cbprot;

        return $this;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): static
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): static
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getCbreplication(): ?int
    {
        return $this->cbreplication;
    }

    public function setCbreplication(?int $cbreplication): static
    {
        $this->cbreplication = $cbreplication;

        return $this;
    }

    public function getCbflag(): ?int
    {
        return $this->cbflag;
    }

    public function setCbflag(?int $cbflag): static
    {
        $this->cbflag = $cbflag;

        return $this;
    }

    public function getAdNo(): ?int
    {
        return $this->adNo;
    }

    public function setAdNo(?int $adNo): static
    {
        $this->adNo = $adNo;

        return $this;
    }
}
