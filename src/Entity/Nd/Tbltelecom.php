<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TbltelecomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblTelecom')]
#[ORM\Entity(repositoryClass: TbltelecomRepository::class)]
class Tbltelecom
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Appareil", nullable: true)]
    private ?int $appareil = null;

    #[ORM\Column(name: "TypeAppareil", nullable: true)]
    private ?int $typeappareil = null;

    #[ORM\Column(name: "Operateur", nullable: true)]
    private ?int $operateur = null;

    #[ORM\Column(name: "NumContrat", length: 255, nullable: true)]
    private ?string $numcontrat = null;

    #[ORM\Column(name: "NumTel", length: 255, nullable: true)]
    private ?string $numtel = null;

    #[ORM\Column(name: "Utilisateur", nullable: true)]
    private ?int $utilisateur = null;

    #[ORM\Column(name: "Societe", nullable: true)]
    private ?int $societe = null;

    #[ORM\Column(name: "TypeConsomation", length: 255, nullable: true)]
    private ?string $typeconsomation = null;

    #[ORM\Column(name: "Mnt_TTC_Mois", nullable: true)]
    private ?int $mntTtcMois = null;

    #[ORM\Column(name: "PIN", nullable: true)]
    private ?int $pin = null;

    #[ORM\Column(name: "PUK", nullable: true)]
    private ?int $puk = null;

    #[ORM\Column(name: "Commentaire", length: 255, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(name: "SIM_CODE_ICCID", length: 255, nullable: true)]
    private ?string $simCodeIccid = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getAppareil(): ?int
    {
        return $this->appareil;
    }

    public function setAppareil(?int $appareil): static
    {
        $this->appareil = $appareil;

        return $this;
    }

    public function getTypeappareil(): ?int
    {
        return $this->typeappareil;
    }

    public function setTypeappareil(?int $typeappareil): static
    {
        $this->typeappareil = $typeappareil;

        return $this;
    }

    public function getOperateur(): ?int
    {
        return $this->operateur;
    }

    public function setOperateur(?int $operateur): static
    {
        $this->operateur = $operateur;

        return $this;
    }

    public function getNumcontrat(): ?string
    {
        return $this->numcontrat;
    }

    public function setNumcontrat(?string $numcontrat): static
    {
        $this->numcontrat = $numcontrat;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(?string $numtel): static
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getUtilisateur(): ?int
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?int $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getSociete(): ?int
    {
        return $this->societe;
    }

    public function setSociete(?int $societe): static
    {
        $this->societe = $societe;

        return $this;
    }

    public function getTypeconsomation(): ?string
    {
        return $this->typeconsomation;
    }

    public function setTypeconsomation(?string $typeconsomation): static
    {
        $this->typeconsomation = $typeconsomation;

        return $this;
    }

    public function getMntTtcMois(): ?int
    {
        return $this->mntTtcMois;
    }

    public function setMntTtcMois(?int $mntTtcMois): static
    {
        $this->mntTtcMois = $mntTtcMois;

        return $this;
    }

    public function getPin(): ?int
    {
        return $this->pin;
    }

    public function setPin(?int $pin): static
    {
        $this->pin = $pin;

        return $this;
    }

    public function getPuk(): ?int
    {
        return $this->puk;
    }

    public function setPuk(?int $puk): static
    {
        $this->puk = $puk;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getSimCodeIccid(): ?string
    {
        return $this->simCodeIccid;
    }

    public function setSimCodeIccid(?string $simCodeIccid): static
    {
        $this->simCodeIccid = $simCodeIccid;

        return $this;
    }
}
