<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FEtableauRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ETABLEAU')]
#[ORM\UniqueConstraint(name: 'IET_LIGNE', columns: ['ET_Ligne'])]
#[ORM\Entity(repositoryClass: FEtableauRepository::class)]
class FEtableau
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CY_Num", length: 11, nullable: true)]
    private ?string $cyNum = null;

    #[ORM\Column(name: "cbCY_Num", type: Types::BINARY, nullable: true)]
    private $cbcyNum = null;

    #[ORM\Column(name: "TB_Num", length: 11, nullable: true)]
    private ?string $tbNum = null;

    #[ORM\Column(name: "cbTB_Num", type: Types::BINARY, nullable: true)]
    private $cbtbNum = null;

    #[ORM\Column(name: "ET_Exercice", type: Types::SMALLINT, nullable: true)]
    private ?int $etExercice = null;

    #[ORM\Column(name: "ET_Ligne", type: Types::SMALLINT, nullable: true)]
    private ?int $etLigne = null;

    #[ORM\Column(name: "ET_Colonne01ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne01etMontant = null;

    #[ORM\Column(name: "ET_Colonne01ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne01etTexte = null;

    #[ORM\Column(name: "ET_Colonne01ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne01etDate = null;

    #[ORM\Column(name: "ET_Colonne02ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne02etMontant = null;

    #[ORM\Column(name: "ET_Colonne02ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne02etTexte = null;

    #[ORM\Column(name: "ET_Colonne02ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne02etDate = null;

    #[ORM\Column(name: "ET_Colonne03ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne03etMontant = null;

    #[ORM\Column(name: "ET_Colonne03ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne03etTexte = null;

    #[ORM\Column(name: "ET_Colonne03ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne03etDate = null;

    #[ORM\Column(name: "ET_Colonne04ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne04etMontant = null;

    #[ORM\Column(name: "ET_Colonne04ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne04etTexte = null;

    #[ORM\Column(name: "ET_Colonne04ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne04etDate = null;

    #[ORM\Column(name: "ET_Colonne05ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne05etMontant = null;

    #[ORM\Column(name: "ET_Colonne05ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne05etTexte = null;

    #[ORM\Column(name: "ET_Colonne05ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne05etDate = null;

    #[ORM\Column(name: "ET_Colonne06ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne06etMontant = null;

    #[ORM\Column(name: "ET_Colonne06ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne06etTexte = null;

    #[ORM\Column(name: "ET_Colonne06ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne06etDate = null;

    #[ORM\Column(name: "ET_Colonne07ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne07etMontant = null;

    #[ORM\Column(name: "ET_Colonne07ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne07etTexte = null;

    #[ORM\Column(name: "ET_Colonne07ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne07etDate = null;

    #[ORM\Column(name: "ET_Colonne08ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne08etMontant = null;

    #[ORM\Column(name: "ET_Colonne08ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne08etTexte = null;

    #[ORM\Column(name: "ET_Colonne08ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne08etDate = null;

    #[ORM\Column(name: "ET_Colonne09ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne09etMontant = null;

    #[ORM\Column(name: "ET_Colonne09ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne09etTexte = null;

    #[ORM\Column(name: "ET_Colonne09ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne09etDate = null;

    #[ORM\Column(name: "ET_Colonne10ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne10etMontant = null;

    #[ORM\Column(name: "ET_Colonne10ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne10etTexte = null;

    #[ORM\Column(name: "ET_Colonne10ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne10etDate = null;

    #[ORM\Column(name: "ET_Colonne11ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne11etMontant = null;

    #[ORM\Column(name: "ET_Colonne11ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne11etTexte = null;

    #[ORM\Column(name: "ET_Colonne11ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne11etDate = null;

    #[ORM\Column(name: "ET_Colonne12ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne12etMontant = null;

    #[ORM\Column(name: "ET_Colonne12ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne12etTexte = null;

    #[ORM\Column(name: "ET_Colonne12ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne12etDate = null;

    #[ORM\Column(name: "ET_Colonne13ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne13etMontant = null;

    #[ORM\Column(name: "ET_Colonne13ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne13etTexte = null;

    #[ORM\Column(name: "ET_Colonne13ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne13etDate = null;

    #[ORM\Column(name: "ET_Colonne14ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne14etMontant = null;

    #[ORM\Column(name: "ET_Colonne14ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne14etTexte = null;

    #[ORM\Column(name: "ET_Colonne14ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne14etDate = null;

    #[ORM\Column(name: "ET_Colonne15ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne15etMontant = null;

    #[ORM\Column(name: "ET_Colonne15ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne15etTexte = null;

    #[ORM\Column(name: "ET_Colonne15ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne15etDate = null;

    #[ORM\Column(name: "ET_Colonne16ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne16etMontant = null;

    #[ORM\Column(name: "ET_Colonne16ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne16etTexte = null;

    #[ORM\Column(name: "ET_Colonne16ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne16etDate = null;

    #[ORM\Column(name: "ET_Colonne17ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne17etMontant = null;

    #[ORM\Column(name: "ET_Colonne17ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne17etTexte = null;

    #[ORM\Column(name: "ET_Colonne17ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne17etDate = null;

    #[ORM\Column(name: "ET_Colonne18ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne18etMontant = null;

    #[ORM\Column(name: "ET_Colonne18ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne18etTexte = null;

    #[ORM\Column(name: "ET_Colonne18ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne18etDate = null;

    #[ORM\Column(name: "ET_Colonne19ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne19etMontant = null;

    #[ORM\Column(name: "ET_Colonne19ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne19etTexte = null;

    #[ORM\Column(name: "ET_Colonne19ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne19etDate = null;

    #[ORM\Column(name: "ET_Colonne20ET_Montant", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $etColonne20etMontant = null;

    #[ORM\Column(name: "ET_Colonne20ET_Texte", length: 69, nullable: true)]
    private ?string $etColonne20etTexte = null;

    #[ORM\Column(name: "ET_Colonne20ET_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $etColonne20etDate = null;

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

    public function getCyNum(): ?string
    {
        return $this->cyNum;
    }

    public function setCyNum(?string $cyNum): static
    {
        $this->cyNum = $cyNum;

        return $this;
    }

    public function getCbcyNum()
    {
        return $this->cbcyNum;
    }

    public function setCbcyNum($cbcyNum): static
    {
        $this->cbcyNum = $cbcyNum;

        return $this;
    }

    public function getTbNum(): ?string
    {
        return $this->tbNum;
    }

    public function setTbNum(?string $tbNum): static
    {
        $this->tbNum = $tbNum;

        return $this;
    }

    public function getCbtbNum()
    {
        return $this->cbtbNum;
    }

    public function setCbtbNum($cbtbNum): static
    {
        $this->cbtbNum = $cbtbNum;

        return $this;
    }

    public function getEtExercice(): ?int
    {
        return $this->etExercice;
    }

    public function setEtExercice(?int $etExercice): static
    {
        $this->etExercice = $etExercice;

        return $this;
    }

    public function getEtLigne(): ?int
    {
        return $this->etLigne;
    }

    public function setEtLigne(?int $etLigne): static
    {
        $this->etLigne = $etLigne;

        return $this;
    }

    public function getEtColonne01etMontant(): ?string
    {
        return $this->etColonne01etMontant;
    }

    public function setEtColonne01etMontant(?string $etColonne01etMontant): static
    {
        $this->etColonne01etMontant = $etColonne01etMontant;

        return $this;
    }

    public function getEtColonne01etTexte(): ?string
    {
        return $this->etColonne01etTexte;
    }

    public function setEtColonne01etTexte(?string $etColonne01etTexte): static
    {
        $this->etColonne01etTexte = $etColonne01etTexte;

        return $this;
    }

    public function getEtColonne01etDate(): ?\DateTimeInterface
    {
        return $this->etColonne01etDate;
    }

    public function setEtColonne01etDate(?\DateTimeInterface $etColonne01etDate): static
    {
        $this->etColonne01etDate = $etColonne01etDate;

        return $this;
    }

    public function getEtColonne02etMontant(): ?string
    {
        return $this->etColonne02etMontant;
    }

    public function setEtColonne02etMontant(?string $etColonne02etMontant): static
    {
        $this->etColonne02etMontant = $etColonne02etMontant;

        return $this;
    }

    public function getEtColonne02etTexte(): ?string
    {
        return $this->etColonne02etTexte;
    }

    public function setEtColonne02etTexte(?string $etColonne02etTexte): static
    {
        $this->etColonne02etTexte = $etColonne02etTexte;

        return $this;
    }

    public function getEtColonne02etDate(): ?\DateTimeInterface
    {
        return $this->etColonne02etDate;
    }

    public function setEtColonne02etDate(?\DateTimeInterface $etColonne02etDate): static
    {
        $this->etColonne02etDate = $etColonne02etDate;

        return $this;
    }

    public function getEtColonne03etMontant(): ?string
    {
        return $this->etColonne03etMontant;
    }

    public function setEtColonne03etMontant(?string $etColonne03etMontant): static
    {
        $this->etColonne03etMontant = $etColonne03etMontant;

        return $this;
    }

    public function getEtColonne03etTexte(): ?string
    {
        return $this->etColonne03etTexte;
    }

    public function setEtColonne03etTexte(?string $etColonne03etTexte): static
    {
        $this->etColonne03etTexte = $etColonne03etTexte;

        return $this;
    }

    public function getEtColonne03etDate(): ?\DateTimeInterface
    {
        return $this->etColonne03etDate;
    }

    public function setEtColonne03etDate(?\DateTimeInterface $etColonne03etDate): static
    {
        $this->etColonne03etDate = $etColonne03etDate;

        return $this;
    }

    public function getEtColonne04etMontant(): ?string
    {
        return $this->etColonne04etMontant;
    }

    public function setEtColonne04etMontant(?string $etColonne04etMontant): static
    {
        $this->etColonne04etMontant = $etColonne04etMontant;

        return $this;
    }

    public function getEtColonne04etTexte(): ?string
    {
        return $this->etColonne04etTexte;
    }

    public function setEtColonne04etTexte(?string $etColonne04etTexte): static
    {
        $this->etColonne04etTexte = $etColonne04etTexte;

        return $this;
    }

    public function getEtColonne04etDate(): ?\DateTimeInterface
    {
        return $this->etColonne04etDate;
    }

    public function setEtColonne04etDate(?\DateTimeInterface $etColonne04etDate): static
    {
        $this->etColonne04etDate = $etColonne04etDate;

        return $this;
    }

    public function getEtColonne05etMontant(): ?string
    {
        return $this->etColonne05etMontant;
    }

    public function setEtColonne05etMontant(?string $etColonne05etMontant): static
    {
        $this->etColonne05etMontant = $etColonne05etMontant;

        return $this;
    }

    public function getEtColonne05etTexte(): ?string
    {
        return $this->etColonne05etTexte;
    }

    public function setEtColonne05etTexte(?string $etColonne05etTexte): static
    {
        $this->etColonne05etTexte = $etColonne05etTexte;

        return $this;
    }

    public function getEtColonne05etDate(): ?\DateTimeInterface
    {
        return $this->etColonne05etDate;
    }

    public function setEtColonne05etDate(?\DateTimeInterface $etColonne05etDate): static
    {
        $this->etColonne05etDate = $etColonne05etDate;

        return $this;
    }

    public function getEtColonne06etMontant(): ?string
    {
        return $this->etColonne06etMontant;
    }

    public function setEtColonne06etMontant(?string $etColonne06etMontant): static
    {
        $this->etColonne06etMontant = $etColonne06etMontant;

        return $this;
    }

    public function getEtColonne06etTexte(): ?string
    {
        return $this->etColonne06etTexte;
    }

    public function setEtColonne06etTexte(?string $etColonne06etTexte): static
    {
        $this->etColonne06etTexte = $etColonne06etTexte;

        return $this;
    }

    public function getEtColonne06etDate(): ?\DateTimeInterface
    {
        return $this->etColonne06etDate;
    }

    public function setEtColonne06etDate(?\DateTimeInterface $etColonne06etDate): static
    {
        $this->etColonne06etDate = $etColonne06etDate;

        return $this;
    }

    public function getEtColonne07etMontant(): ?string
    {
        return $this->etColonne07etMontant;
    }

    public function setEtColonne07etMontant(?string $etColonne07etMontant): static
    {
        $this->etColonne07etMontant = $etColonne07etMontant;

        return $this;
    }

    public function getEtColonne07etTexte(): ?string
    {
        return $this->etColonne07etTexte;
    }

    public function setEtColonne07etTexte(?string $etColonne07etTexte): static
    {
        $this->etColonne07etTexte = $etColonne07etTexte;

        return $this;
    }

    public function getEtColonne07etDate(): ?\DateTimeInterface
    {
        return $this->etColonne07etDate;
    }

    public function setEtColonne07etDate(?\DateTimeInterface $etColonne07etDate): static
    {
        $this->etColonne07etDate = $etColonne07etDate;

        return $this;
    }

    public function getEtColonne08etMontant(): ?string
    {
        return $this->etColonne08etMontant;
    }

    public function setEtColonne08etMontant(?string $etColonne08etMontant): static
    {
        $this->etColonne08etMontant = $etColonne08etMontant;

        return $this;
    }

    public function getEtColonne08etTexte(): ?string
    {
        return $this->etColonne08etTexte;
    }

    public function setEtColonne08etTexte(?string $etColonne08etTexte): static
    {
        $this->etColonne08etTexte = $etColonne08etTexte;

        return $this;
    }

    public function getEtColonne08etDate(): ?\DateTimeInterface
    {
        return $this->etColonne08etDate;
    }

    public function setEtColonne08etDate(?\DateTimeInterface $etColonne08etDate): static
    {
        $this->etColonne08etDate = $etColonne08etDate;

        return $this;
    }

    public function getEtColonne09etMontant(): ?string
    {
        return $this->etColonne09etMontant;
    }

    public function setEtColonne09etMontant(?string $etColonne09etMontant): static
    {
        $this->etColonne09etMontant = $etColonne09etMontant;

        return $this;
    }

    public function getEtColonne09etTexte(): ?string
    {
        return $this->etColonne09etTexte;
    }

    public function setEtColonne09etTexte(?string $etColonne09etTexte): static
    {
        $this->etColonne09etTexte = $etColonne09etTexte;

        return $this;
    }

    public function getEtColonne09etDate(): ?\DateTimeInterface
    {
        return $this->etColonne09etDate;
    }

    public function setEtColonne09etDate(?\DateTimeInterface $etColonne09etDate): static
    {
        $this->etColonne09etDate = $etColonne09etDate;

        return $this;
    }

    public function getEtColonne10etMontant(): ?string
    {
        return $this->etColonne10etMontant;
    }

    public function setEtColonne10etMontant(?string $etColonne10etMontant): static
    {
        $this->etColonne10etMontant = $etColonne10etMontant;

        return $this;
    }

    public function getEtColonne10etTexte(): ?string
    {
        return $this->etColonne10etTexte;
    }

    public function setEtColonne10etTexte(?string $etColonne10etTexte): static
    {
        $this->etColonne10etTexte = $etColonne10etTexte;

        return $this;
    }

    public function getEtColonne10etDate(): ?\DateTimeInterface
    {
        return $this->etColonne10etDate;
    }

    public function setEtColonne10etDate(?\DateTimeInterface $etColonne10etDate): static
    {
        $this->etColonne10etDate = $etColonne10etDate;

        return $this;
    }

    public function getEtColonne11etMontant(): ?string
    {
        return $this->etColonne11etMontant;
    }

    public function setEtColonne11etMontant(?string $etColonne11etMontant): static
    {
        $this->etColonne11etMontant = $etColonne11etMontant;

        return $this;
    }

    public function getEtColonne11etTexte(): ?string
    {
        return $this->etColonne11etTexte;
    }

    public function setEtColonne11etTexte(?string $etColonne11etTexte): static
    {
        $this->etColonne11etTexte = $etColonne11etTexte;

        return $this;
    }

    public function getEtColonne11etDate(): ?\DateTimeInterface
    {
        return $this->etColonne11etDate;
    }

    public function setEtColonne11etDate(?\DateTimeInterface $etColonne11etDate): static
    {
        $this->etColonne11etDate = $etColonne11etDate;

        return $this;
    }

    public function getEtColonne12etMontant(): ?string
    {
        return $this->etColonne12etMontant;
    }

    public function setEtColonne12etMontant(?string $etColonne12etMontant): static
    {
        $this->etColonne12etMontant = $etColonne12etMontant;

        return $this;
    }

    public function getEtColonne12etTexte(): ?string
    {
        return $this->etColonne12etTexte;
    }

    public function setEtColonne12etTexte(?string $etColonne12etTexte): static
    {
        $this->etColonne12etTexte = $etColonne12etTexte;

        return $this;
    }

    public function getEtColonne12etDate(): ?\DateTimeInterface
    {
        return $this->etColonne12etDate;
    }

    public function setEtColonne12etDate(?\DateTimeInterface $etColonne12etDate): static
    {
        $this->etColonne12etDate = $etColonne12etDate;

        return $this;
    }

    public function getEtColonne13etMontant(): ?string
    {
        return $this->etColonne13etMontant;
    }

    public function setEtColonne13etMontant(?string $etColonne13etMontant): static
    {
        $this->etColonne13etMontant = $etColonne13etMontant;

        return $this;
    }

    public function getEtColonne13etTexte(): ?string
    {
        return $this->etColonne13etTexte;
    }

    public function setEtColonne13etTexte(?string $etColonne13etTexte): static
    {
        $this->etColonne13etTexte = $etColonne13etTexte;

        return $this;
    }

    public function getEtColonne13etDate(): ?\DateTimeInterface
    {
        return $this->etColonne13etDate;
    }

    public function setEtColonne13etDate(?\DateTimeInterface $etColonne13etDate): static
    {
        $this->etColonne13etDate = $etColonne13etDate;

        return $this;
    }

    public function getEtColonne14etMontant(): ?string
    {
        return $this->etColonne14etMontant;
    }

    public function setEtColonne14etMontant(?string $etColonne14etMontant): static
    {
        $this->etColonne14etMontant = $etColonne14etMontant;

        return $this;
    }

    public function getEtColonne14etTexte(): ?string
    {
        return $this->etColonne14etTexte;
    }

    public function setEtColonne14etTexte(?string $etColonne14etTexte): static
    {
        $this->etColonne14etTexte = $etColonne14etTexte;

        return $this;
    }

    public function getEtColonne14etDate(): ?\DateTimeInterface
    {
        return $this->etColonne14etDate;
    }

    public function setEtColonne14etDate(?\DateTimeInterface $etColonne14etDate): static
    {
        $this->etColonne14etDate = $etColonne14etDate;

        return $this;
    }

    public function getEtColonne15etMontant(): ?string
    {
        return $this->etColonne15etMontant;
    }

    public function setEtColonne15etMontant(?string $etColonne15etMontant): static
    {
        $this->etColonne15etMontant = $etColonne15etMontant;

        return $this;
    }

    public function getEtColonne15etTexte(): ?string
    {
        return $this->etColonne15etTexte;
    }

    public function setEtColonne15etTexte(?string $etColonne15etTexte): static
    {
        $this->etColonne15etTexte = $etColonne15etTexte;

        return $this;
    }

    public function getEtColonne15etDate(): ?\DateTimeInterface
    {
        return $this->etColonne15etDate;
    }

    public function setEtColonne15etDate(?\DateTimeInterface $etColonne15etDate): static
    {
        $this->etColonne15etDate = $etColonne15etDate;

        return $this;
    }

    public function getEtColonne16etMontant(): ?string
    {
        return $this->etColonne16etMontant;
    }

    public function setEtColonne16etMontant(?string $etColonne16etMontant): static
    {
        $this->etColonne16etMontant = $etColonne16etMontant;

        return $this;
    }

    public function getEtColonne16etTexte(): ?string
    {
        return $this->etColonne16etTexte;
    }

    public function setEtColonne16etTexte(?string $etColonne16etTexte): static
    {
        $this->etColonne16etTexte = $etColonne16etTexte;

        return $this;
    }

    public function getEtColonne16etDate(): ?\DateTimeInterface
    {
        return $this->etColonne16etDate;
    }

    public function setEtColonne16etDate(?\DateTimeInterface $etColonne16etDate): static
    {
        $this->etColonne16etDate = $etColonne16etDate;

        return $this;
    }

    public function getEtColonne17etMontant(): ?string
    {
        return $this->etColonne17etMontant;
    }

    public function setEtColonne17etMontant(?string $etColonne17etMontant): static
    {
        $this->etColonne17etMontant = $etColonne17etMontant;

        return $this;
    }

    public function getEtColonne17etTexte(): ?string
    {
        return $this->etColonne17etTexte;
    }

    public function setEtColonne17etTexte(?string $etColonne17etTexte): static
    {
        $this->etColonne17etTexte = $etColonne17etTexte;

        return $this;
    }

    public function getEtColonne17etDate(): ?\DateTimeInterface
    {
        return $this->etColonne17etDate;
    }

    public function setEtColonne17etDate(?\DateTimeInterface $etColonne17etDate): static
    {
        $this->etColonne17etDate = $etColonne17etDate;

        return $this;
    }

    public function getEtColonne18etMontant(): ?string
    {
        return $this->etColonne18etMontant;
    }

    public function setEtColonne18etMontant(?string $etColonne18etMontant): static
    {
        $this->etColonne18etMontant = $etColonne18etMontant;

        return $this;
    }

    public function getEtColonne18etTexte(): ?string
    {
        return $this->etColonne18etTexte;
    }

    public function setEtColonne18etTexte(?string $etColonne18etTexte): static
    {
        $this->etColonne18etTexte = $etColonne18etTexte;

        return $this;
    }

    public function getEtColonne18etDate(): ?\DateTimeInterface
    {
        return $this->etColonne18etDate;
    }

    public function setEtColonne18etDate(?\DateTimeInterface $etColonne18etDate): static
    {
        $this->etColonne18etDate = $etColonne18etDate;

        return $this;
    }

    public function getEtColonne19etMontant(): ?string
    {
        return $this->etColonne19etMontant;
    }

    public function setEtColonne19etMontant(?string $etColonne19etMontant): static
    {
        $this->etColonne19etMontant = $etColonne19etMontant;

        return $this;
    }

    public function getEtColonne19etTexte(): ?string
    {
        return $this->etColonne19etTexte;
    }

    public function setEtColonne19etTexte(?string $etColonne19etTexte): static
    {
        $this->etColonne19etTexte = $etColonne19etTexte;

        return $this;
    }

    public function getEtColonne19etDate(): ?\DateTimeInterface
    {
        return $this->etColonne19etDate;
    }

    public function setEtColonne19etDate(?\DateTimeInterface $etColonne19etDate): static
    {
        $this->etColonne19etDate = $etColonne19etDate;

        return $this;
    }

    public function getEtColonne20etMontant(): ?string
    {
        return $this->etColonne20etMontant;
    }

    public function setEtColonne20etMontant(?string $etColonne20etMontant): static
    {
        $this->etColonne20etMontant = $etColonne20etMontant;

        return $this;
    }

    public function getEtColonne20etTexte(): ?string
    {
        return $this->etColonne20etTexte;
    }

    public function setEtColonne20etTexte(?string $etColonne20etTexte): static
    {
        $this->etColonne20etTexte = $etColonne20etTexte;

        return $this;
    }

    public function getEtColonne20etDate(): ?\DateTimeInterface
    {
        return $this->etColonne20etDate;
    }

    public function setEtColonne20etDate(?\DateTimeInterface $etColonne20etDate): static
    {
        $this->etColonne20etDate = $etColonne20etDate;

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
