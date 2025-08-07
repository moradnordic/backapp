<?php

namespace App\Entity\SageSystem;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SageSystem\UtilisateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'utilisateur')]
#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ApiResource]
class Utilisateur
{
    #[ORM\Column(name: "id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "nom", length: 50, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: "login", length: 50, nullable: true)]
    private ?string $login = null;

    #[ORM\Column(name: "mot_passe", length: 400, nullable: true)]
    private ?string $motPasse = null;

    #[ORM\Column(name: "profile", nullable: true)]
    private ?int $profile = null;

    #[ORM\Column(name: "email", length: 50, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: "limiter", nullable: true)]
    private ?int $limiter = null;

    #[ORM\Column(name: "montant_limit", nullable: true)]
    private ?float $montantLimit = null;

    #[ORM\Column(name: "commercialeID", nullable: true)]
    private ?int $commercialeid = null;

    #[ORM\Column(name: "clientID", length: 50, nullable: true)]
    private ?string $clientid = null;

    #[ORM\Column(name: "co_no", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "dark_theme", nullable: true)]
    private ?int $darkTheme = null;

    #[ORM\Column(name: "so_id", nullable: true)]
    private ?int $soId = null;

    #[ORM\Column(name: "is_active", type: Types::SMALLINT)]
    private ?int $isActive = 1;

    #[ORM\Column(name: "rapportadmine", nullable: true)]
    private ?bool $rapportadmine = true;

    #[ORM\Column(name: "Prenom", length: 100, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(name: "Poste", length: 150, nullable: true)]
    private ?string $poste = null;

    #[ORM\Column(name: "Permis_Conduire_A_B_C_TO_DEVELOPP", nullable: true)]
    private ?int $permisConduireABCToDevelopp = null;

    #[ORM\Column(name: "IsCommercial", nullable: true)]
    private ?bool $iscommercial = null;

    #[ORM\Column(name: "isLogistics", nullable: true)]
    private ?bool $islogistics = null;

    #[ORM\Column(name: "isFinance", nullable: true)]
    private ?bool $isfinance = null;

    #[ORM\Column(name: "isBackoffice", nullable: true)]
    private ?bool $isbackoffice = null;

    #[ORM\Column(name: "isFrontOffice", nullable: true)]
    private ?bool $isfrontoffice = null;

    #[ORM\Column(name: "basemail", length: 60, nullable: true)]
    private ?string $basemail = null;

    #[ORM\Column(name: "isPV", nullable: true, options: ["comment" => "si il a le droit de vente dans un point de vente"])]
    private ?bool $ispv = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): static
    {
        $this->login = $login;

        return $this;
    }

    public function getMotPasse(): ?string
    {
        return $this->motPasse;
    }

    public function setMotPasse(?string $motPasse): static
    {
        $this->motPasse = $motPasse;

        return $this;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function setProfile(?int $profile): static
    {
        $this->profile = $profile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getLimiter(): ?int
    {
        return $this->limiter;
    }

    public function setLimiter(?int $limiter): static
    {
        $this->limiter = $limiter;

        return $this;
    }

    public function getMontantLimit(): ?float
    {
        return $this->montantLimit;
    }

    public function setMontantLimit(?float $montantLimit): static
    {
        $this->montantLimit = $montantLimit;

        return $this;
    }

    public function getCommercialeid(): ?int
    {
        return $this->commercialeid;
    }

    public function setCommercialeid(?int $commercialeid): static
    {
        $this->commercialeid = $commercialeid;

        return $this;
    }

    public function getClientid(): ?string
    {
        return $this->clientid;
    }

    public function setClientid(?string $clientid): static
    {
        $this->clientid = $clientid;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getDarkTheme(): ?int
    {
        return $this->darkTheme;
    }

    public function setDarkTheme(?int $darkTheme): static
    {
        $this->darkTheme = $darkTheme;

        return $this;
    }

    public function getSoId(): ?int
    {
        return $this->soId;
    }

    public function setSoId(?int $soId): static
    {
        $this->soId = $soId;

        return $this;
    }

    public function getIsActive(): ?int
    {
        return $this->isActive;
    }

    public function setIsActive(int $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getRapportadmine(): ?bool
    {
        return $this->rapportadmine;
    }

    public function setRapportadmine(?bool $rapportadmine): static
    {
        $this->rapportadmine = $rapportadmine;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getPermisConduireABCToDevelopp(): ?int
    {
        return $this->permisConduireABCToDevelopp;
    }

    public function setPermisConduireABCToDevelopp(?int $permisConduireABCToDevelopp): static
    {
        $this->permisConduireABCToDevelopp = $permisConduireABCToDevelopp;

        return $this;
    }

    public function getIscommercial(): ?bool
    {
        return $this->iscommercial;
    }

    public function setIscommercial(?bool $iscommercial): static
    {
        $this->iscommercial = $iscommercial;

        return $this;
    }

    public function getIslogistics(): ?bool
    {
        return $this->islogistics;
    }

    public function setIslogistics(?bool $islogistics): static
    {
        $this->islogistics = $islogistics;

        return $this;
    }

    public function getIsfinance(): ?bool
    {
        return $this->isfinance;
    }

    public function setIsfinance(?bool $isfinance): static
    {
        $this->isfinance = $isfinance;

        return $this;
    }

    public function getIsbackoffice(): ?bool
    {
        return $this->isbackoffice;
    }

    public function setIsbackoffice(?bool $isbackoffice): static
    {
        $this->isbackoffice = $isbackoffice;

        return $this;
    }

    public function getIsfrontoffice(): ?bool
    {
        return $this->isfrontoffice;
    }

    public function setIsfrontoffice(?bool $isfrontoffice): static
    {
        $this->isfrontoffice = $isfrontoffice;

        return $this;
    }

    public function getBasemail(): ?string
    {
        return $this->basemail;
    }

    public function setBasemail(?string $basemail): static
    {
        $this->basemail = $basemail;

        return $this;
    }

    public function getIspv(): ?bool
    {
        return $this->ispv;
    }

    public function setIspv(?bool $ispv): static
    {
        $this->ispv = $ispv;

        return $this;
    }
}
