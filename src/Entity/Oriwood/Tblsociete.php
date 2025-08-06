<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblsocieteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblSociete')]
#[ORM\Entity(repositoryClass: TblsocieteRepository::class)]
class Tblsociete
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Nom", length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "RC", length: 255, nullable: true)]
    private ?string $rc = null;

    #[ORM\Column(name: "TVA", length: 255, nullable: true)]
    private ?string $tva = null;

    #[ORM\Column(name: "ICE", length: 255, nullable: true)]
    private ?string $ice = null;

    #[ORM\Column(name: "Patente", length: 255, nullable: true)]
    private ?string $patente = null;

    #[ORM\Column(name: "Adresse", length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: "Ville", length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(name: "Pays", length: 255, nullable: true)]
    private ?string $pays = null;

    #[ORM\Column(name: "CodePostal", length: 255, nullable: true)]
    private ?string $codepostal = null;

    #[ORM\Column(name: "FormLegale", length: 255, nullable: true)]
    private ?string $formlegale = null;

    #[ORM\Column(name: "LoyerLocaux", nullable: true)]
    private ?float $loyerlocaux = null;

    #[ORM\Column(name: "EmailDirGen", length: 255, nullable: true)]
    private ?string $emaildirgen = null;

    #[ORM\Column(name: "EmailDirFin", length: 255, nullable: true)]
    private ?string $emaildirfin = null;

    #[ORM\Column(name: "EmailDirCommerciale", length: 255, nullable: true)]
    private ?string $emaildircommerciale = null;

    #[ORM\Column(name: "EmailFrontOffice", length: 255, nullable: true)]
    private ?string $emailfrontoffice = null;

    #[ORM\Column(name: "EmailBackOffice", length: 255, nullable: true)]
    private ?string $emailbackoffice = null;

    #[ORM\Column(name: "EmailLogistique", length: 255, nullable: true)]
    private ?string $emaillogistique = null;

    #[ORM\Column(name: "EmailMoyensGeneraux", length: 255, nullable: true)]
    private ?string $emailmoyensgeneraux = null;

    #[ORM\Column(name: "EmailsRH", length: 255, nullable: true)]
    private ?string $emailsrh = null;

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

    public function getRc(): ?string
    {
        return $this->rc;
    }

    public function setRc(?string $rc): static
    {
        $this->rc = $rc;

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(?string $tva): static
    {
        $this->tva = $tva;

        return $this;
    }

    public function getIce(): ?string
    {
        return $this->ice;
    }

    public function setIce(?string $ice): static
    {
        $this->ice = $ice;

        return $this;
    }

    public function getPatente(): ?string
    {
        return $this->patente;
    }

    public function setPatente(?string $patente): static
    {
        $this->patente = $patente;

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

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(?string $codepostal): static
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getFormlegale(): ?string
    {
        return $this->formlegale;
    }

    public function setFormlegale(?string $formlegale): static
    {
        $this->formlegale = $formlegale;

        return $this;
    }

    public function getLoyerlocaux(): ?float
    {
        return $this->loyerlocaux;
    }

    public function setLoyerlocaux(?float $loyerlocaux): static
    {
        $this->loyerlocaux = $loyerlocaux;

        return $this;
    }

    public function getEmaildirgen(): ?string
    {
        return $this->emaildirgen;
    }

    public function setEmaildirgen(?string $emaildirgen): static
    {
        $this->emaildirgen = $emaildirgen;

        return $this;
    }

    public function getEmaildirfin(): ?string
    {
        return $this->emaildirfin;
    }

    public function setEmaildirfin(?string $emaildirfin): static
    {
        $this->emaildirfin = $emaildirfin;

        return $this;
    }

    public function getEmaildircommerciale(): ?string
    {
        return $this->emaildircommerciale;
    }

    public function setEmaildircommerciale(?string $emaildircommerciale): static
    {
        $this->emaildircommerciale = $emaildircommerciale;

        return $this;
    }

    public function getEmailfrontoffice(): ?string
    {
        return $this->emailfrontoffice;
    }

    public function setEmailfrontoffice(?string $emailfrontoffice): static
    {
        $this->emailfrontoffice = $emailfrontoffice;

        return $this;
    }

    public function getEmailbackoffice(): ?string
    {
        return $this->emailbackoffice;
    }

    public function setEmailbackoffice(?string $emailbackoffice): static
    {
        $this->emailbackoffice = $emailbackoffice;

        return $this;
    }

    public function getEmaillogistique(): ?string
    {
        return $this->emaillogistique;
    }

    public function setEmaillogistique(?string $emaillogistique): static
    {
        $this->emaillogistique = $emaillogistique;

        return $this;
    }

    public function getEmailmoyensgeneraux(): ?string
    {
        return $this->emailmoyensgeneraux;
    }

    public function setEmailmoyensgeneraux(?string $emailmoyensgeneraux): static
    {
        $this->emailmoyensgeneraux = $emailmoyensgeneraux;

        return $this;
    }

    public function getEmailsrh(): ?string
    {
        return $this->emailsrh;
    }

    public function setEmailsrh(?string $emailsrh): static
    {
        $this->emailsrh = $emailsrh;

        return $this;
    }
}
