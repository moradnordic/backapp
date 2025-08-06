<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FBanquetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_BANQUET')]
#[ORM\UniqueConstraint(name: 'IBT_NUM', columns: ['BT_Num'])]
#[ORM\Index(name: 'IBT_INT', columns: ['cbBT_Intitule'])]
#[ORM\UniqueConstraint(name: 'UKA_F_BANQUET_IBT_NUM', columns: ['BT_Num'])]
#[ORM\Index(name: 'FKIA_F_BANQUET_CT_Num', columns: ['CT_Num'])]
#[ORM\Index(name: 'FKIA_F_BANQUET_MD_No', columns: ['cbMD_No'])]
#[ORM\Entity(repositoryClass: FBanquetRepository::class)]
class FBanquet
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "BT_Num", type: Types::SMALLINT)]
    private ?int $btNum = null;

    #[ORM\Column(name: "BT_Intitule", length: 35, nullable: true)]
    private ?string $btIntitule = null;

    #[ORM\Column(name: "cbBT_Intitule", type: Types::BINARY, nullable: true)]
    private $cbbtIntitule = null;

    #[ORM\Column(name: "BT_Banque", length: 15, nullable: true)]
    private ?string $btBanque = null;

    #[ORM\Column(name: "BT_Guichet", length: 17, nullable: true)]
    private ?string $btGuichet = null;

    #[ORM\Column(name: "BT_Compte", length: 35, nullable: true)]
    private ?string $btCompte = null;

    #[ORM\Column(name: "BT_Cle", length: 3, nullable: true)]
    private ?string $btCle = null;

    #[ORM\Column(name: "BT_Commentaire", length: 69, nullable: true)]
    private ?string $btCommentaire = null;

    #[ORM\Column(name: "BT_Struct", type: Types::SMALLINT, nullable: true)]
    private ?int $btStruct = null;

    #[ORM\Column(name: "N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevise = null;

    #[ORM\Column(name: "BT_Adresse", length: 35, nullable: true)]
    private ?string $btAdresse = null;

    #[ORM\Column(name: "BT_Complement", length: 35, nullable: true)]
    private ?string $btComplement = null;

    #[ORM\Column(name: "BT_CodePostal", length: 9, nullable: true)]
    private ?string $btCodepostal = null;

    #[ORM\Column(name: "BT_Ville", length: 35, nullable: true)]
    private ?string $btVille = null;

    #[ORM\Column(name: "BT_Pays", length: 35, nullable: true)]
    private ?string $btPays = null;

    #[ORM\Column(name: "BT_BIC", length: 11, nullable: true)]
    private ?string $btBic = null;

    #[ORM\Column(name: "BT_IBAN", length: 35, nullable: true)]
    private ?string $btIban = null;

    #[ORM\Column(name: "BT_CalculIBAN", type: Types::SMALLINT, nullable: true)]
    private ?int $btCalculiban = null;

    #[ORM\Column(name: "BT_NomAgence", length: 35, nullable: true)]
    private ?string $btNomagence = null;

    #[ORM\Column(name: "BT_CodeRegion", length: 25, nullable: true)]
    private ?string $btCoderegion = null;

    #[ORM\Column(name: "BT_PaysAgence", length: 35, nullable: true)]
    private ?string $btPaysagence = null;

    #[ORM\Column(name: "MD_No", nullable: true)]
    private ?int $mdNo = null;

    #[ORM\Column(name: "cbMD_No", nullable: true)]
    private ?int $cbmdNo = null;

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

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getBtNum(): ?int
    {
        return $this->btNum;
    }

    public function setBtNum(int $btNum): static
    {
        $this->btNum = $btNum;

        return $this;
    }

    public function getBtIntitule(): ?string
    {
        return $this->btIntitule;
    }

    public function setBtIntitule(?string $btIntitule): static
    {
        $this->btIntitule = $btIntitule;

        return $this;
    }

    public function getCbbtIntitule()
    {
        return $this->cbbtIntitule;
    }

    public function setCbbtIntitule($cbbtIntitule): static
    {
        $this->cbbtIntitule = $cbbtIntitule;

        return $this;
    }

    public function getBtBanque(): ?string
    {
        return $this->btBanque;
    }

    public function setBtBanque(?string $btBanque): static
    {
        $this->btBanque = $btBanque;

        return $this;
    }

    public function getBtGuichet(): ?string
    {
        return $this->btGuichet;
    }

    public function setBtGuichet(?string $btGuichet): static
    {
        $this->btGuichet = $btGuichet;

        return $this;
    }

    public function getBtCompte(): ?string
    {
        return $this->btCompte;
    }

    public function setBtCompte(?string $btCompte): static
    {
        $this->btCompte = $btCompte;

        return $this;
    }

    public function getBtCle(): ?string
    {
        return $this->btCle;
    }

    public function setBtCle(?string $btCle): static
    {
        $this->btCle = $btCle;

        return $this;
    }

    public function getBtCommentaire(): ?string
    {
        return $this->btCommentaire;
    }

    public function setBtCommentaire(?string $btCommentaire): static
    {
        $this->btCommentaire = $btCommentaire;

        return $this;
    }

    public function getBtStruct(): ?int
    {
        return $this->btStruct;
    }

    public function setBtStruct(?int $btStruct): static
    {
        $this->btStruct = $btStruct;

        return $this;
    }

    public function getNDevise(): ?int
    {
        return $this->nDevise;
    }

    public function setNDevise(?int $nDevise): static
    {
        $this->nDevise = $nDevise;

        return $this;
    }

    public function getBtAdresse(): ?string
    {
        return $this->btAdresse;
    }

    public function setBtAdresse(?string $btAdresse): static
    {
        $this->btAdresse = $btAdresse;

        return $this;
    }

    public function getBtComplement(): ?string
    {
        return $this->btComplement;
    }

    public function setBtComplement(?string $btComplement): static
    {
        $this->btComplement = $btComplement;

        return $this;
    }

    public function getBtCodepostal(): ?string
    {
        return $this->btCodepostal;
    }

    public function setBtCodepostal(?string $btCodepostal): static
    {
        $this->btCodepostal = $btCodepostal;

        return $this;
    }

    public function getBtVille(): ?string
    {
        return $this->btVille;
    }

    public function setBtVille(?string $btVille): static
    {
        $this->btVille = $btVille;

        return $this;
    }

    public function getBtPays(): ?string
    {
        return $this->btPays;
    }

    public function setBtPays(?string $btPays): static
    {
        $this->btPays = $btPays;

        return $this;
    }

    public function getBtBic(): ?string
    {
        return $this->btBic;
    }

    public function setBtBic(?string $btBic): static
    {
        $this->btBic = $btBic;

        return $this;
    }

    public function getBtIban(): ?string
    {
        return $this->btIban;
    }

    public function setBtIban(?string $btIban): static
    {
        $this->btIban = $btIban;

        return $this;
    }

    public function getBtCalculiban(): ?int
    {
        return $this->btCalculiban;
    }

    public function setBtCalculiban(?int $btCalculiban): static
    {
        $this->btCalculiban = $btCalculiban;

        return $this;
    }

    public function getBtNomagence(): ?string
    {
        return $this->btNomagence;
    }

    public function setBtNomagence(?string $btNomagence): static
    {
        $this->btNomagence = $btNomagence;

        return $this;
    }

    public function getBtCoderegion(): ?string
    {
        return $this->btCoderegion;
    }

    public function setBtCoderegion(?string $btCoderegion): static
    {
        $this->btCoderegion = $btCoderegion;

        return $this;
    }

    public function getBtPaysagence(): ?string
    {
        return $this->btPaysagence;
    }

    public function setBtPaysagence(?string $btPaysagence): static
    {
        $this->btPaysagence = $btPaysagence;

        return $this;
    }

    public function getMdNo(): ?int
    {
        return $this->mdNo;
    }

    public function setMdNo(?int $mdNo): static
    {
        $this->mdNo = $mdNo;

        return $this;
    }

    public function getCbmdNo(): ?int
    {
        return $this->cbmdNo;
    }

    public function setCbmdNo(?int $cbmdNo): static
    {
        $this->cbmdNo = $cbmdNo;

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
