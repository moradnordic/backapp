<?php

namespace App\Entity\Nd;

use App\Repository\Nd\NosbanquesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'NosBanques')]
#[ORM\Entity(repositoryClass: NosbanquesRepository::class)]
class Nosbanques
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Nom", length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "Abrev", length: 255, nullable: true)]
    private ?string $abrev = null;

    #[ORM\Column(name: "EscompteEffets")]
    private ?bool $escompteeffets = null;

    #[ORM\Column(name: "PlafondEscompte", nullable: true)]
    private ?float $plafondescompte = null;

    #[ORM\Column(name: "TauxEscompte", nullable: true)]
    private ?float $tauxescompte = null;

    #[ORM\Column(name: "Agence", length: 255, nullable: true)]
    private ?string $agence = null;

    #[ORM\Column(name: "Adresse", length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: "CodePostale", length: 255, nullable: true)]
    private ?string $codepostale = null;

    #[ORM\Column(name: "Ville", length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(name: "Pays", length: 255, nullable: true)]
    private ?string $pays = null;

    #[ORM\Column(name: "Swift", length: 255, nullable: true)]
    private ?string $swift = null;

    #[ORM\Column(name: "RIB", length: 255, nullable: true)]
    private ?string $rib = null;

    #[ORM\Column(name: "IBAN", length: 255, nullable: true)]
    private ?string $iban = null;

    #[ORM\Column(name: "EtatOrdreVirementEtranger", length: 255, nullable: true)]
    private ?string $etatordrevirementetranger = null;

    #[ORM\Column(name: "FC", nullable: true)]
    private ?float $fc = null;

    #[ORM\Column(name: "RefinDev", nullable: true)]
    private ?float $refindev = null;

    #[ORM\Column(name: "RefinMad", nullable: true)]
    private ?float $refinmad = null;

    #[ORM\Column(name: "OC", nullable: true)]
    private ?float $oc = null;

    #[ORM\Column(name: "TXFC", nullable: true)]
    private ?float $txfc = null;

    #[ORM\Column(name: "TXRefDev", nullable: true)]
    private ?float $txrefdev = null;

    #[ORM\Column(name: "TXOC", nullable: true)]
    private ?float $txoc = null;

    #[ORM\Column(name: "TXRefMAD", nullable: true)]
    private ?float $txrefmad = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAbrev(): ?string
    {
        return $this->abrev;
    }

    public function setAbrev(?string $abrev): static
    {
        $this->abrev = $abrev;

        return $this;
    }

    public function getEscompteeffets(): ?bool
    {
        return $this->escompteeffets;
    }

    public function setEscompteeffets(bool $escompteeffets): static
    {
        $this->escompteeffets = $escompteeffets;

        return $this;
    }

    public function getPlafondescompte(): ?float
    {
        return $this->plafondescompte;
    }

    public function setPlafondescompte(?float $plafondescompte): static
    {
        $this->plafondescompte = $plafondescompte;

        return $this;
    }

    public function getTauxescompte(): ?float
    {
        return $this->tauxescompte;
    }

    public function setTauxescompte(?float $tauxescompte): static
    {
        $this->tauxescompte = $tauxescompte;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(?string $agence): static
    {
        $this->agence = $agence;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostale(): ?string
    {
        return $this->codepostale;
    }

    public function setCodepostale(?string $codepostale): static
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getSwift(): ?string
    {
        return $this->swift;
    }

    public function setSwift(?string $swift): static
    {
        $this->swift = $swift;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): static
    {
        $this->rib = $rib;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): static
    {
        $this->iban = $iban;

        return $this;
    }

    public function getEtatordrevirementetranger(): ?string
    {
        return $this->etatordrevirementetranger;
    }

    public function setEtatordrevirementetranger(?string $etatordrevirementetranger): static
    {
        $this->etatordrevirementetranger = $etatordrevirementetranger;

        return $this;
    }

    public function getFc(): ?float
    {
        return $this->fc;
    }

    public function setFc(?float $fc): static
    {
        $this->fc = $fc;

        return $this;
    }

    public function getRefindev(): ?float
    {
        return $this->refindev;
    }

    public function setRefindev(?float $refindev): static
    {
        $this->refindev = $refindev;

        return $this;
    }

    public function getRefinmad(): ?float
    {
        return $this->refinmad;
    }

    public function setRefinmad(?float $refinmad): static
    {
        $this->refinmad = $refinmad;

        return $this;
    }

    public function getOc(): ?float
    {
        return $this->oc;
    }

    public function setOc(?float $oc): static
    {
        $this->oc = $oc;

        return $this;
    }

    public function getTxfc(): ?float
    {
        return $this->txfc;
    }

    public function setTxfc(?float $txfc): static
    {
        $this->txfc = $txfc;

        return $this;
    }

    public function getTxrefdev(): ?float
    {
        return $this->txrefdev;
    }

    public function setTxrefdev(?float $txrefdev): static
    {
        $this->txrefdev = $txrefdev;

        return $this;
    }

    public function getTxoc(): ?float
    {
        return $this->txoc;
    }

    public function setTxoc(?float $txoc): static
    {
        $this->txoc = $txoc;

        return $this;
    }

    public function getTxrefmad(): ?float
    {
        return $this->txrefmad;
    }

    public function setTxrefmad(?float $txrefmad): static
    {
        $this->txrefmad = $txrefmad;

        return $this;
    }
}
