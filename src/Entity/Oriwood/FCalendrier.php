<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCalendrierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CALENDRIER')]
#[ORM\UniqueConstraint(name: 'ICAL_INTITULE', columns: ['cbCAL_Intitule'])]
#[ORM\UniqueConstraint(name: 'ICAL_NO', columns: ['CAL_No'])]
#[ORM\Entity(repositoryClass: FCalendrierRepository::class)]
class FCalendrier
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CAL_Intitule", length: 35)]
    private ?string $calIntitule = null;

    #[ORM\Column(name: "cbCAL_Intitule", type: Types::BINARY, nullable: true)]
    private $cbcalIntitule = null;

    #[ORM\Column(name: "CAL_No", nullable: true)]
    private ?int $calNo = null;

    #[ORM\Column(name: "CAL_FirstWeekDay", type: Types::SMALLINT, nullable: true)]
    private ?int $calFirstweekday = null;

    #[ORM\Column(name: "CAL_FirstWeek", type: Types::SMALLINT, nullable: true)]
    private ?int $calFirstweek = null;

    #[ORM\Column(name: "CAL_Ouvre01", type: Types::SMALLINT, nullable: true)]
    private ?int $calOuvre01 = null;

    #[ORM\Column(name: "CAL_Ouvre02", type: Types::SMALLINT, nullable: true)]
    private ?int $calOuvre02 = null;

    #[ORM\Column(name: "CAL_Ouvre03", type: Types::SMALLINT, nullable: true)]
    private ?int $calOuvre03 = null;

    #[ORM\Column(name: "CAL_Ouvre04", type: Types::SMALLINT, nullable: true)]
    private ?int $calOuvre04 = null;

    #[ORM\Column(name: "CAL_Ouvre05", type: Types::SMALLINT, nullable: true)]
    private ?int $calOuvre05 = null;

    #[ORM\Column(name: "CAL_Ouvre06", type: Types::SMALLINT, nullable: true)]
    private ?int $calOuvre06 = null;

    #[ORM\Column(name: "CAL_Ouvre07", type: Types::SMALLINT, nullable: true)]
    private ?int $calOuvre07 = null;

    #[ORM\Column(name: "CAL_Horaire0101CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0101calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0101CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0101calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0102CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0102calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0102CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0102calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0201CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0201calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0201CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0201calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0202CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0202calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0202CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0202calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0301CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0301calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0301CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0301calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0302CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0302calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0302CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0302calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0401CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0401calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0401CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0401calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0402CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0402calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0402CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0402calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0501CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0501calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0501CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0501calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0502CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0502calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0502CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0502calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0601CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0601calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0601CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0601calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0602CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0602calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0602CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0602calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0701CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0701calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0701CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0701calPlagefin = null;

    #[ORM\Column(name: "CAL_Horaire0702CAL_PlageDebut", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0702calPlagedebut = null;

    #[ORM\Column(name: "CAL_Horaire0702CAL_PlageFin", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $calHoraire0702calPlagefin = null;

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

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCalIntitule(): ?string
    {
        return $this->calIntitule;
    }

    public function setCalIntitule(string $calIntitule): static
    {
        $this->calIntitule = $calIntitule;

        return $this;
    }

    public function getCbcalIntitule()
    {
        return $this->cbcalIntitule;
    }

    public function setCbcalIntitule($cbcalIntitule): static
    {
        $this->cbcalIntitule = $cbcalIntitule;

        return $this;
    }

    public function getCalNo(): ?int
    {
        return $this->calNo;
    }

    public function setCalNo(?int $calNo): static
    {
        $this->calNo = $calNo;

        return $this;
    }

    public function getCalFirstweekday(): ?int
    {
        return $this->calFirstweekday;
    }

    public function setCalFirstweekday(?int $calFirstweekday): static
    {
        $this->calFirstweekday = $calFirstweekday;

        return $this;
    }

    public function getCalFirstweek(): ?int
    {
        return $this->calFirstweek;
    }

    public function setCalFirstweek(?int $calFirstweek): static
    {
        $this->calFirstweek = $calFirstweek;

        return $this;
    }

    public function getCalOuvre01(): ?int
    {
        return $this->calOuvre01;
    }

    public function setCalOuvre01(?int $calOuvre01): static
    {
        $this->calOuvre01 = $calOuvre01;

        return $this;
    }

    public function getCalOuvre02(): ?int
    {
        return $this->calOuvre02;
    }

    public function setCalOuvre02(?int $calOuvre02): static
    {
        $this->calOuvre02 = $calOuvre02;

        return $this;
    }

    public function getCalOuvre03(): ?int
    {
        return $this->calOuvre03;
    }

    public function setCalOuvre03(?int $calOuvre03): static
    {
        $this->calOuvre03 = $calOuvre03;

        return $this;
    }

    public function getCalOuvre04(): ?int
    {
        return $this->calOuvre04;
    }

    public function setCalOuvre04(?int $calOuvre04): static
    {
        $this->calOuvre04 = $calOuvre04;

        return $this;
    }

    public function getCalOuvre05(): ?int
    {
        return $this->calOuvre05;
    }

    public function setCalOuvre05(?int $calOuvre05): static
    {
        $this->calOuvre05 = $calOuvre05;

        return $this;
    }

    public function getCalOuvre06(): ?int
    {
        return $this->calOuvre06;
    }

    public function setCalOuvre06(?int $calOuvre06): static
    {
        $this->calOuvre06 = $calOuvre06;

        return $this;
    }

    public function getCalOuvre07(): ?int
    {
        return $this->calOuvre07;
    }

    public function setCalOuvre07(?int $calOuvre07): static
    {
        $this->calOuvre07 = $calOuvre07;

        return $this;
    }

    public function getCalHoraire0101calPlagedebut(): ?string
    {
        return $this->calHoraire0101calPlagedebut;
    }

    public function setCalHoraire0101calPlagedebut(?string $calHoraire0101calPlagedebut): static
    {
        $this->calHoraire0101calPlagedebut = $calHoraire0101calPlagedebut;

        return $this;
    }

    public function getCalHoraire0101calPlagefin(): ?string
    {
        return $this->calHoraire0101calPlagefin;
    }

    public function setCalHoraire0101calPlagefin(?string $calHoraire0101calPlagefin): static
    {
        $this->calHoraire0101calPlagefin = $calHoraire0101calPlagefin;

        return $this;
    }

    public function getCalHoraire0102calPlagedebut(): ?string
    {
        return $this->calHoraire0102calPlagedebut;
    }

    public function setCalHoraire0102calPlagedebut(?string $calHoraire0102calPlagedebut): static
    {
        $this->calHoraire0102calPlagedebut = $calHoraire0102calPlagedebut;

        return $this;
    }

    public function getCalHoraire0102calPlagefin(): ?string
    {
        return $this->calHoraire0102calPlagefin;
    }

    public function setCalHoraire0102calPlagefin(?string $calHoraire0102calPlagefin): static
    {
        $this->calHoraire0102calPlagefin = $calHoraire0102calPlagefin;

        return $this;
    }

    public function getCalHoraire0201calPlagedebut(): ?string
    {
        return $this->calHoraire0201calPlagedebut;
    }

    public function setCalHoraire0201calPlagedebut(?string $calHoraire0201calPlagedebut): static
    {
        $this->calHoraire0201calPlagedebut = $calHoraire0201calPlagedebut;

        return $this;
    }

    public function getCalHoraire0201calPlagefin(): ?string
    {
        return $this->calHoraire0201calPlagefin;
    }

    public function setCalHoraire0201calPlagefin(?string $calHoraire0201calPlagefin): static
    {
        $this->calHoraire0201calPlagefin = $calHoraire0201calPlagefin;

        return $this;
    }

    public function getCalHoraire0202calPlagedebut(): ?string
    {
        return $this->calHoraire0202calPlagedebut;
    }

    public function setCalHoraire0202calPlagedebut(?string $calHoraire0202calPlagedebut): static
    {
        $this->calHoraire0202calPlagedebut = $calHoraire0202calPlagedebut;

        return $this;
    }

    public function getCalHoraire0202calPlagefin(): ?string
    {
        return $this->calHoraire0202calPlagefin;
    }

    public function setCalHoraire0202calPlagefin(?string $calHoraire0202calPlagefin): static
    {
        $this->calHoraire0202calPlagefin = $calHoraire0202calPlagefin;

        return $this;
    }

    public function getCalHoraire0301calPlagedebut(): ?string
    {
        return $this->calHoraire0301calPlagedebut;
    }

    public function setCalHoraire0301calPlagedebut(?string $calHoraire0301calPlagedebut): static
    {
        $this->calHoraire0301calPlagedebut = $calHoraire0301calPlagedebut;

        return $this;
    }

    public function getCalHoraire0301calPlagefin(): ?string
    {
        return $this->calHoraire0301calPlagefin;
    }

    public function setCalHoraire0301calPlagefin(?string $calHoraire0301calPlagefin): static
    {
        $this->calHoraire0301calPlagefin = $calHoraire0301calPlagefin;

        return $this;
    }

    public function getCalHoraire0302calPlagedebut(): ?string
    {
        return $this->calHoraire0302calPlagedebut;
    }

    public function setCalHoraire0302calPlagedebut(?string $calHoraire0302calPlagedebut): static
    {
        $this->calHoraire0302calPlagedebut = $calHoraire0302calPlagedebut;

        return $this;
    }

    public function getCalHoraire0302calPlagefin(): ?string
    {
        return $this->calHoraire0302calPlagefin;
    }

    public function setCalHoraire0302calPlagefin(?string $calHoraire0302calPlagefin): static
    {
        $this->calHoraire0302calPlagefin = $calHoraire0302calPlagefin;

        return $this;
    }

    public function getCalHoraire0401calPlagedebut(): ?string
    {
        return $this->calHoraire0401calPlagedebut;
    }

    public function setCalHoraire0401calPlagedebut(?string $calHoraire0401calPlagedebut): static
    {
        $this->calHoraire0401calPlagedebut = $calHoraire0401calPlagedebut;

        return $this;
    }

    public function getCalHoraire0401calPlagefin(): ?string
    {
        return $this->calHoraire0401calPlagefin;
    }

    public function setCalHoraire0401calPlagefin(?string $calHoraire0401calPlagefin): static
    {
        $this->calHoraire0401calPlagefin = $calHoraire0401calPlagefin;

        return $this;
    }

    public function getCalHoraire0402calPlagedebut(): ?string
    {
        return $this->calHoraire0402calPlagedebut;
    }

    public function setCalHoraire0402calPlagedebut(?string $calHoraire0402calPlagedebut): static
    {
        $this->calHoraire0402calPlagedebut = $calHoraire0402calPlagedebut;

        return $this;
    }

    public function getCalHoraire0402calPlagefin(): ?string
    {
        return $this->calHoraire0402calPlagefin;
    }

    public function setCalHoraire0402calPlagefin(?string $calHoraire0402calPlagefin): static
    {
        $this->calHoraire0402calPlagefin = $calHoraire0402calPlagefin;

        return $this;
    }

    public function getCalHoraire0501calPlagedebut(): ?string
    {
        return $this->calHoraire0501calPlagedebut;
    }

    public function setCalHoraire0501calPlagedebut(?string $calHoraire0501calPlagedebut): static
    {
        $this->calHoraire0501calPlagedebut = $calHoraire0501calPlagedebut;

        return $this;
    }

    public function getCalHoraire0501calPlagefin(): ?string
    {
        return $this->calHoraire0501calPlagefin;
    }

    public function setCalHoraire0501calPlagefin(?string $calHoraire0501calPlagefin): static
    {
        $this->calHoraire0501calPlagefin = $calHoraire0501calPlagefin;

        return $this;
    }

    public function getCalHoraire0502calPlagedebut(): ?string
    {
        return $this->calHoraire0502calPlagedebut;
    }

    public function setCalHoraire0502calPlagedebut(?string $calHoraire0502calPlagedebut): static
    {
        $this->calHoraire0502calPlagedebut = $calHoraire0502calPlagedebut;

        return $this;
    }

    public function getCalHoraire0502calPlagefin(): ?string
    {
        return $this->calHoraire0502calPlagefin;
    }

    public function setCalHoraire0502calPlagefin(?string $calHoraire0502calPlagefin): static
    {
        $this->calHoraire0502calPlagefin = $calHoraire0502calPlagefin;

        return $this;
    }

    public function getCalHoraire0601calPlagedebut(): ?string
    {
        return $this->calHoraire0601calPlagedebut;
    }

    public function setCalHoraire0601calPlagedebut(?string $calHoraire0601calPlagedebut): static
    {
        $this->calHoraire0601calPlagedebut = $calHoraire0601calPlagedebut;

        return $this;
    }

    public function getCalHoraire0601calPlagefin(): ?string
    {
        return $this->calHoraire0601calPlagefin;
    }

    public function setCalHoraire0601calPlagefin(?string $calHoraire0601calPlagefin): static
    {
        $this->calHoraire0601calPlagefin = $calHoraire0601calPlagefin;

        return $this;
    }

    public function getCalHoraire0602calPlagedebut(): ?string
    {
        return $this->calHoraire0602calPlagedebut;
    }

    public function setCalHoraire0602calPlagedebut(?string $calHoraire0602calPlagedebut): static
    {
        $this->calHoraire0602calPlagedebut = $calHoraire0602calPlagedebut;

        return $this;
    }

    public function getCalHoraire0602calPlagefin(): ?string
    {
        return $this->calHoraire0602calPlagefin;
    }

    public function setCalHoraire0602calPlagefin(?string $calHoraire0602calPlagefin): static
    {
        $this->calHoraire0602calPlagefin = $calHoraire0602calPlagefin;

        return $this;
    }

    public function getCalHoraire0701calPlagedebut(): ?string
    {
        return $this->calHoraire0701calPlagedebut;
    }

    public function setCalHoraire0701calPlagedebut(?string $calHoraire0701calPlagedebut): static
    {
        $this->calHoraire0701calPlagedebut = $calHoraire0701calPlagedebut;

        return $this;
    }

    public function getCalHoraire0701calPlagefin(): ?string
    {
        return $this->calHoraire0701calPlagefin;
    }

    public function setCalHoraire0701calPlagefin(?string $calHoraire0701calPlagefin): static
    {
        $this->calHoraire0701calPlagefin = $calHoraire0701calPlagefin;

        return $this;
    }

    public function getCalHoraire0702calPlagedebut(): ?string
    {
        return $this->calHoraire0702calPlagedebut;
    }

    public function setCalHoraire0702calPlagedebut(?string $calHoraire0702calPlagedebut): static
    {
        $this->calHoraire0702calPlagedebut = $calHoraire0702calPlagedebut;

        return $this;
    }

    public function getCalHoraire0702calPlagefin(): ?string
    {
        return $this->calHoraire0702calPlagefin;
    }

    public function setCalHoraire0702calPlagefin(?string $calHoraire0702calPlagefin): static
    {
        $this->calHoraire0702calPlagefin = $calHoraire0702calPlagefin;

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
}
