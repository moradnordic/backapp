<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCommplanifieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMMPLANIFIE')]
#[ORM\UniqueConstraint(name: 'ICP_NO', columns: ['CP_No'])]
#[ORM\Index(name: 'ICP_TYPE', columns: ['cbCP_Intitule'])]
#[ORM\Index(name: 'ICP_INTITULE', columns: ['CP_Type'])]
#[ORM\Index(name: 'ICP_FREQUENCE', columns: ['cbCP_Intitule'])]
#[ORM\Entity(repositoryClass: FCommplanifieRepository::class)]
class FCommplanifie
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CP_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $cpType = null;

    #[ORM\Column(name: "CP_Moyen", type: Types::SMALLINT, nullable: true)]
    private ?int $cpMoyen = null;

    #[ORM\Column(name: "CP_Intitule", length: 35, nullable: true)]
    private ?string $cpIntitule = null;

    #[ORM\Column(name: "cbCP_Intitule", type: Types::BINARY, nullable: true)]
    private $cbcpIntitule = null;

    #[ORM\Column(name: "CP_Frequence", type: Types::SMALLINT, nullable: true)]
    private ?int $cpFrequence = null;

    #[ORM\Column(name: "CP_Jour", type: Types::SMALLINT, nullable: true)]
    private ?int $cpJour = null;

    #[ORM\Column(name: "CP_Heure", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $cpHeure = null;

    #[ORM\Column(name: "CP_Demarrage", type: Types::SMALLINT, nullable: true)]
    private ?int $cpDemarrage = null;

    #[ORM\Column(name: "DE_IntituleDe", length: 35, nullable: true)]
    private ?string $deIntitulede = null;

    #[ORM\Column(name: "DE_IntituleA", length: 35, nullable: true)]
    private ?string $deIntitulea = null;

    #[ORM\Column(name: "CP_ValideArt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpValideart = null;

    #[ORM\Column(name: "CP_ValideCli", type: Types::SMALLINT, nullable: true)]
    private ?int $cpValidecli = null;

    #[ORM\Column(name: "CP_ValideInven", type: Types::SMALLINT, nullable: true)]
    private ?int $cpValideinven = null;

    #[ORM\Column(name: "CP_ValideRglt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpValiderglt = null;

    #[ORM\Column(name: "CP_TypeArt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpTypeart = null;

    #[ORM\Column(name: "FA_CodeFamilleDe", length: 11, nullable: true)]
    private ?string $faCodefamillede = null;

    #[ORM\Column(name: "FA_CodeFamilleA", length: 11, nullable: true)]
    private ?string $faCodefamillea = null;

    #[ORM\Column(name: "AR_RefDe", length: 19, nullable: true)]
    private ?string $arRefde = null;

    #[ORM\Column(name: "AR_RefA", length: 19, nullable: true)]
    private ?string $arRefa = null;

    #[ORM\Column(name: "AR_DateCreationDe", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arDatecreationde = null;

    #[ORM\Column(name: "AR_DateCreationA", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arDatecreationa = null;

    #[ORM\Column(name: "AR_DateModifDe", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arDatemodifde = null;

    #[ORM\Column(name: "AR_DateModifA", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arDatemodifa = null;

    #[ORM\Column(name: "CP_Transmission", type: Types::SMALLINT, nullable: true)]
    private ?int $cpTransmission = null;

    #[ORM\Column(name: "CT_NumDe", length: 17, nullable: true)]
    private ?string $ctNumde = null;

    #[ORM\Column(name: "CT_NumA", length: 17, nullable: true)]
    private ?string $ctNuma = null;

    #[ORM\Column(name: "CT_DateCreateDe", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctDatecreatede = null;

    #[ORM\Column(name: "CT_DateCreateA", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctDatecreatea = null;

    #[ORM\Column(name: "CP_DateInven", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cpDateinven = null;

    #[ORM\Column(name: "CP_TypeInven", type: Types::SMALLINT, nullable: true)]
    private ?int $cpTypeinven = null;

    #[ORM\Column(name: "CP_ReajusteInven", type: Types::SMALLINT, nullable: true)]
    private ?int $cpReajusteinven = null;

    #[ORM\Column(name: "CP_ArtRecept", type: Types::SMALLINT, nullable: true)]
    private ?int $cpArtrecept = null;

    #[ORM\Column(name: "CP_CliRecept", type: Types::SMALLINT, nullable: true)]
    private ?int $cpClirecept = null;

    #[ORM\Column(name: "CP_ReajusteRecept", type: Types::SMALLINT, nullable: true)]
    private ?int $cpReajusterecept = null;

    #[ORM\Column(name: "CP_SuppRecept", type: Types::SMALLINT, nullable: true)]
    private ?int $cpSupprecept = null;

    #[ORM\Column(name: "CP_TypeRglt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpTyperglt = null;

    #[ORM\Column(name: "CP_EtatRglt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpEtatrglt = null;

    #[ORM\Column(name: "CP_DateRgltDe", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cpDatergltde = null;

    #[ORM\Column(name: "CP_DateRgltA", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cpDaterglta = null;

    #[ORM\Column(name: "CP_TransBCRglt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpTransbcrglt = null;

    #[ORM\Column(name: "CP_SuppBCRglt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpSuppbcrglt = null;

    #[ORM\Column(name: "CP_CptaRglt", type: Types::SMALLINT, nullable: true)]
    private ?int $cpCptarglt = null;

    #[ORM\Column(name: "CP_No", nullable: true)]
    private ?int $cpNo = null;

    #[ORM\Column(name: "CP_Origine", type: Types::SMALLINT, nullable: true)]
    private ?int $cpOrigine = null;

    #[ORM\Column(name: "CP_EtatStockInven", type: Types::SMALLINT, nullable: true)]
    private ?int $cpEtatstockinven = null;

    #[ORM\Column(name: "CP_TypeTransmissionInven", type: Types::SMALLINT, nullable: true)]
    private ?int $cpTypetransmissioninven = null;

    #[ORM\Column(name: "CP_DetEmplacementInven", type: Types::SMALLINT, nullable: true)]
    private ?int $cpDetemplacementinven = null;

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

    public function getCpType(): ?int
    {
        return $this->cpType;
    }

    public function setCpType(?int $cpType): static
    {
        $this->cpType = $cpType;

        return $this;
    }

    public function getCpMoyen(): ?int
    {
        return $this->cpMoyen;
    }

    public function setCpMoyen(?int $cpMoyen): static
    {
        $this->cpMoyen = $cpMoyen;

        return $this;
    }

    public function getCpIntitule(): ?string
    {
        return $this->cpIntitule;
    }

    public function setCpIntitule(?string $cpIntitule): static
    {
        $this->cpIntitule = $cpIntitule;

        return $this;
    }

    public function getCbcpIntitule()
    {
        return $this->cbcpIntitule;
    }

    public function setCbcpIntitule($cbcpIntitule): static
    {
        $this->cbcpIntitule = $cbcpIntitule;

        return $this;
    }

    public function getCpFrequence(): ?int
    {
        return $this->cpFrequence;
    }

    public function setCpFrequence(?int $cpFrequence): static
    {
        $this->cpFrequence = $cpFrequence;

        return $this;
    }

    public function getCpJour(): ?int
    {
        return $this->cpJour;
    }

    public function setCpJour(?int $cpJour): static
    {
        $this->cpJour = $cpJour;

        return $this;
    }

    public function getCpHeure(): ?string
    {
        return $this->cpHeure;
    }

    public function setCpHeure(?string $cpHeure): static
    {
        $this->cpHeure = $cpHeure;

        return $this;
    }

    public function getCpDemarrage(): ?int
    {
        return $this->cpDemarrage;
    }

    public function setCpDemarrage(?int $cpDemarrage): static
    {
        $this->cpDemarrage = $cpDemarrage;

        return $this;
    }

    public function getDeIntitulede(): ?string
    {
        return $this->deIntitulede;
    }

    public function setDeIntitulede(?string $deIntitulede): static
    {
        $this->deIntitulede = $deIntitulede;

        return $this;
    }

    public function getDeIntitulea(): ?string
    {
        return $this->deIntitulea;
    }

    public function setDeIntitulea(?string $deIntitulea): static
    {
        $this->deIntitulea = $deIntitulea;

        return $this;
    }

    public function getCpValideart(): ?int
    {
        return $this->cpValideart;
    }

    public function setCpValideart(?int $cpValideart): static
    {
        $this->cpValideart = $cpValideart;

        return $this;
    }

    public function getCpValidecli(): ?int
    {
        return $this->cpValidecli;
    }

    public function setCpValidecli(?int $cpValidecli): static
    {
        $this->cpValidecli = $cpValidecli;

        return $this;
    }

    public function getCpValideinven(): ?int
    {
        return $this->cpValideinven;
    }

    public function setCpValideinven(?int $cpValideinven): static
    {
        $this->cpValideinven = $cpValideinven;

        return $this;
    }

    public function getCpValiderglt(): ?int
    {
        return $this->cpValiderglt;
    }

    public function setCpValiderglt(?int $cpValiderglt): static
    {
        $this->cpValiderglt = $cpValiderglt;

        return $this;
    }

    public function getCpTypeart(): ?int
    {
        return $this->cpTypeart;
    }

    public function setCpTypeart(?int $cpTypeart): static
    {
        $this->cpTypeart = $cpTypeart;

        return $this;
    }

    public function getFaCodefamillede(): ?string
    {
        return $this->faCodefamillede;
    }

    public function setFaCodefamillede(?string $faCodefamillede): static
    {
        $this->faCodefamillede = $faCodefamillede;

        return $this;
    }

    public function getFaCodefamillea(): ?string
    {
        return $this->faCodefamillea;
    }

    public function setFaCodefamillea(?string $faCodefamillea): static
    {
        $this->faCodefamillea = $faCodefamillea;

        return $this;
    }

    public function getArRefde(): ?string
    {
        return $this->arRefde;
    }

    public function setArRefde(?string $arRefde): static
    {
        $this->arRefde = $arRefde;

        return $this;
    }

    public function getArRefa(): ?string
    {
        return $this->arRefa;
    }

    public function setArRefa(?string $arRefa): static
    {
        $this->arRefa = $arRefa;

        return $this;
    }

    public function getArDatecreationde(): ?\DateTimeInterface
    {
        return $this->arDatecreationde;
    }

    public function setArDatecreationde(?\DateTimeInterface $arDatecreationde): static
    {
        $this->arDatecreationde = $arDatecreationde;

        return $this;
    }

    public function getArDatecreationa(): ?\DateTimeInterface
    {
        return $this->arDatecreationa;
    }

    public function setArDatecreationa(?\DateTimeInterface $arDatecreationa): static
    {
        $this->arDatecreationa = $arDatecreationa;

        return $this;
    }

    public function getArDatemodifde(): ?\DateTimeInterface
    {
        return $this->arDatemodifde;
    }

    public function setArDatemodifde(?\DateTimeInterface $arDatemodifde): static
    {
        $this->arDatemodifde = $arDatemodifde;

        return $this;
    }

    public function getArDatemodifa(): ?\DateTimeInterface
    {
        return $this->arDatemodifa;
    }

    public function setArDatemodifa(?\DateTimeInterface $arDatemodifa): static
    {
        $this->arDatemodifa = $arDatemodifa;

        return $this;
    }

    public function getCpTransmission(): ?int
    {
        return $this->cpTransmission;
    }

    public function setCpTransmission(?int $cpTransmission): static
    {
        $this->cpTransmission = $cpTransmission;

        return $this;
    }

    public function getCtNumde(): ?string
    {
        return $this->ctNumde;
    }

    public function setCtNumde(?string $ctNumde): static
    {
        $this->ctNumde = $ctNumde;

        return $this;
    }

    public function getCtNuma(): ?string
    {
        return $this->ctNuma;
    }

    public function setCtNuma(?string $ctNuma): static
    {
        $this->ctNuma = $ctNuma;

        return $this;
    }

    public function getCtDatecreatede(): ?\DateTimeInterface
    {
        return $this->ctDatecreatede;
    }

    public function setCtDatecreatede(?\DateTimeInterface $ctDatecreatede): static
    {
        $this->ctDatecreatede = $ctDatecreatede;

        return $this;
    }

    public function getCtDatecreatea(): ?\DateTimeInterface
    {
        return $this->ctDatecreatea;
    }

    public function setCtDatecreatea(?\DateTimeInterface $ctDatecreatea): static
    {
        $this->ctDatecreatea = $ctDatecreatea;

        return $this;
    }

    public function getCpDateinven(): ?\DateTimeInterface
    {
        return $this->cpDateinven;
    }

    public function setCpDateinven(?\DateTimeInterface $cpDateinven): static
    {
        $this->cpDateinven = $cpDateinven;

        return $this;
    }

    public function getCpTypeinven(): ?int
    {
        return $this->cpTypeinven;
    }

    public function setCpTypeinven(?int $cpTypeinven): static
    {
        $this->cpTypeinven = $cpTypeinven;

        return $this;
    }

    public function getCpReajusteinven(): ?int
    {
        return $this->cpReajusteinven;
    }

    public function setCpReajusteinven(?int $cpReajusteinven): static
    {
        $this->cpReajusteinven = $cpReajusteinven;

        return $this;
    }

    public function getCpArtrecept(): ?int
    {
        return $this->cpArtrecept;
    }

    public function setCpArtrecept(?int $cpArtrecept): static
    {
        $this->cpArtrecept = $cpArtrecept;

        return $this;
    }

    public function getCpClirecept(): ?int
    {
        return $this->cpClirecept;
    }

    public function setCpClirecept(?int $cpClirecept): static
    {
        $this->cpClirecept = $cpClirecept;

        return $this;
    }

    public function getCpReajusterecept(): ?int
    {
        return $this->cpReajusterecept;
    }

    public function setCpReajusterecept(?int $cpReajusterecept): static
    {
        $this->cpReajusterecept = $cpReajusterecept;

        return $this;
    }

    public function getCpSupprecept(): ?int
    {
        return $this->cpSupprecept;
    }

    public function setCpSupprecept(?int $cpSupprecept): static
    {
        $this->cpSupprecept = $cpSupprecept;

        return $this;
    }

    public function getCpTyperglt(): ?int
    {
        return $this->cpTyperglt;
    }

    public function setCpTyperglt(?int $cpTyperglt): static
    {
        $this->cpTyperglt = $cpTyperglt;

        return $this;
    }

    public function getCpEtatrglt(): ?int
    {
        return $this->cpEtatrglt;
    }

    public function setCpEtatrglt(?int $cpEtatrglt): static
    {
        $this->cpEtatrglt = $cpEtatrglt;

        return $this;
    }

    public function getCpDatergltde(): ?\DateTimeInterface
    {
        return $this->cpDatergltde;
    }

    public function setCpDatergltde(?\DateTimeInterface $cpDatergltde): static
    {
        $this->cpDatergltde = $cpDatergltde;

        return $this;
    }

    public function getCpDaterglta(): ?\DateTimeInterface
    {
        return $this->cpDaterglta;
    }

    public function setCpDaterglta(?\DateTimeInterface $cpDaterglta): static
    {
        $this->cpDaterglta = $cpDaterglta;

        return $this;
    }

    public function getCpTransbcrglt(): ?int
    {
        return $this->cpTransbcrglt;
    }

    public function setCpTransbcrglt(?int $cpTransbcrglt): static
    {
        $this->cpTransbcrglt = $cpTransbcrglt;

        return $this;
    }

    public function getCpSuppbcrglt(): ?int
    {
        return $this->cpSuppbcrglt;
    }

    public function setCpSuppbcrglt(?int $cpSuppbcrglt): static
    {
        $this->cpSuppbcrglt = $cpSuppbcrglt;

        return $this;
    }

    public function getCpCptarglt(): ?int
    {
        return $this->cpCptarglt;
    }

    public function setCpCptarglt(?int $cpCptarglt): static
    {
        $this->cpCptarglt = $cpCptarglt;

        return $this;
    }

    public function getCpNo(): ?int
    {
        return $this->cpNo;
    }

    public function setCpNo(?int $cpNo): static
    {
        $this->cpNo = $cpNo;

        return $this;
    }

    public function getCpOrigine(): ?int
    {
        return $this->cpOrigine;
    }

    public function setCpOrigine(?int $cpOrigine): static
    {
        $this->cpOrigine = $cpOrigine;

        return $this;
    }

    public function getCpEtatstockinven(): ?int
    {
        return $this->cpEtatstockinven;
    }

    public function setCpEtatstockinven(?int $cpEtatstockinven): static
    {
        $this->cpEtatstockinven = $cpEtatstockinven;

        return $this;
    }

    public function getCpTypetransmissioninven(): ?int
    {
        return $this->cpTypetransmissioninven;
    }

    public function setCpTypetransmissioninven(?int $cpTypetransmissioninven): static
    {
        $this->cpTypetransmissioninven = $cpTypetransmissioninven;

        return $this;
    }

    public function getCpDetemplacementinven(): ?int
    {
        return $this->cpDetemplacementinven;
    }

    public function setCpDetemplacementinven(?int $cpDetemplacementinven): static
    {
        $this->cpDetemplacementinven = $cpDetemplacementinven;

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
