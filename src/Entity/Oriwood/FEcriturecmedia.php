<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEcriturecmediaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ECRITURECMEDIA')]
#[ORM\Index(name: 'IEM_ECNO', columns: ['EC_No'])]
#[ORM\Index(name: 'FKIA_F_ECRITURECMEDIA_EC_No', columns: ['EC_No'])]
#[ORM\Entity(repositoryClass: FEcriturecmediaRepository::class)]
class FEcriturecmedia
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "EM_Fichier", length: 259, nullable: true)]
    private ?string $emFichier = null;

    #[ORM\Column(name: "EM_Commentaire", length: 69, nullable: true)]
    private ?string $emCommentaire = null;

    #[ORM\Column(name: "EM_TypeMIME", length: 255, nullable: true)]
    private ?string $emTypemime = null;

    #[ORM\Column(name: "EM_Origine", length: 255, nullable: true)]
    private ?string $emOrigine = null;

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

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getEmFichier(): ?string
    {
        return $this->emFichier;
    }

    public function setEmFichier(?string $emFichier): static
    {
        $this->emFichier = $emFichier;

        return $this;
    }

    public function getEmCommentaire(): ?string
    {
        return $this->emCommentaire;
    }

    public function setEmCommentaire(?string $emCommentaire): static
    {
        $this->emCommentaire = $emCommentaire;

        return $this;
    }

    public function getEmTypemime(): ?string
    {
        return $this->emTypemime;
    }

    public function setEmTypemime(?string $emTypemime): static
    {
        $this->emTypemime = $emTypemime;

        return $this;
    }

    public function getEmOrigine(): ?string
    {
        return $this->emOrigine;
    }

    public function setEmOrigine(?string $emOrigine): static
    {
        $this->emOrigine = $emOrigine;

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
