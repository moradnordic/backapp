<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FCompteamediaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTEAMEDIA')]
#[ORM\Index(name: 'IMECOMPTEA_FICHIER', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEAMEDIA_CA_Num', columns: ['CA_Num'])]
#[ORM\Entity(repositoryClass: FCompteamediaRepository::class)]
class FCompteamedia
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "ME_Commentaire", length: 69, nullable: true)]
    private ?string $meCommentaire = null;

    #[ORM\Column(name: "ME_Fichier", length: 259, nullable: true)]
    private ?string $meFichier = null;

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

    #[ORM\Column(name: "ME_TypeMIME", length: 255, nullable: true)]
    private ?string $meTypemime = null;

    #[ORM\Column(name: "ME_Origine", length: 255, nullable: true)]
    private ?string $meOrigine = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getCbcaNum()
    {
        return $this->cbcaNum;
    }

    public function setCbcaNum($cbcaNum): static
    {
        $this->cbcaNum = $cbcaNum;

        return $this;
    }

    public function getMeCommentaire(): ?string
    {
        return $this->meCommentaire;
    }

    public function setMeCommentaire(?string $meCommentaire): static
    {
        $this->meCommentaire = $meCommentaire;

        return $this;
    }

    public function getMeFichier(): ?string
    {
        return $this->meFichier;
    }

    public function setMeFichier(?string $meFichier): static
    {
        $this->meFichier = $meFichier;

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

    public function getMeTypemime(): ?string
    {
        return $this->meTypemime;
    }

    public function setMeTypemime(?string $meTypemime): static
    {
        $this->meTypemime = $meTypemime;

        return $this;
    }

    public function getMeOrigine(): ?string
    {
        return $this->meOrigine;
    }

    public function setMeOrigine(?string $meOrigine): static
    {
        $this->meOrigine = $meOrigine;

        return $this;
    }
}
