<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PNatureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_NATURE')]
#[ORM\Entity(repositoryClass: PNatureRepository::class)]
class PNature
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Nature01N_Debut", length: 13, nullable: true)]
    private ?string $nNature01nDebut = null;

    #[ORM\Column(name: "N_Nature01N_Fin", length: 13, nullable: true)]
    private ?string $nNature01nFin = null;

    #[ORM\Column(name: "N_Nature01CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgRegroup = null;

    #[ORM\Column(name: "N_Nature01CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgAnalytique = null;

    #[ORM\Column(name: "N_Nature01CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgEcheance = null;

    #[ORM\Column(name: "N_Nature01CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgQuantite = null;

    #[ORM\Column(name: "N_Nature01CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgDevise = null;

    #[ORM\Column(name: "N_Nature01N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01nDevise = null;

    #[ORM\Column(name: "N_Nature01CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgLettrage = null;

    #[ORM\Column(name: "N_Nature01CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgTiers = null;

    #[ORM\Column(name: "N_Nature01CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgReport = null;

    #[ORM\Column(name: "N_Nature01CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature01cgReportanal = null;

    #[ORM\Column(name: "N_Nature02N_Debut", length: 13, nullable: true)]
    private ?string $nNature02nDebut = null;

    #[ORM\Column(name: "N_Nature02N_Fin", length: 13, nullable: true)]
    private ?string $nNature02nFin = null;

    #[ORM\Column(name: "N_Nature02CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgRegroup = null;

    #[ORM\Column(name: "N_Nature02CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgAnalytique = null;

    #[ORM\Column(name: "N_Nature02CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgEcheance = null;

    #[ORM\Column(name: "N_Nature02CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgQuantite = null;

    #[ORM\Column(name: "N_Nature02CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgDevise = null;

    #[ORM\Column(name: "N_Nature02N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02nDevise = null;

    #[ORM\Column(name: "N_Nature02CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgLettrage = null;

    #[ORM\Column(name: "N_Nature02CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgTiers = null;

    #[ORM\Column(name: "N_Nature02CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgReport = null;

    #[ORM\Column(name: "N_Nature02CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature02cgReportanal = null;

    #[ORM\Column(name: "N_Nature03N_Debut", length: 13, nullable: true)]
    private ?string $nNature03nDebut = null;

    #[ORM\Column(name: "N_Nature03N_Fin", length: 13, nullable: true)]
    private ?string $nNature03nFin = null;

    #[ORM\Column(name: "N_Nature03CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgRegroup = null;

    #[ORM\Column(name: "N_Nature03CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgAnalytique = null;

    #[ORM\Column(name: "N_Nature03CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgEcheance = null;

    #[ORM\Column(name: "N_Nature03CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgQuantite = null;

    #[ORM\Column(name: "N_Nature03CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgDevise = null;

    #[ORM\Column(name: "N_Nature03N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03nDevise = null;

    #[ORM\Column(name: "N_Nature03CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgLettrage = null;

    #[ORM\Column(name: "N_Nature03CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgTiers = null;

    #[ORM\Column(name: "N_Nature03CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgReport = null;

    #[ORM\Column(name: "N_Nature03CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature03cgReportanal = null;

    #[ORM\Column(name: "N_Nature04N_Debut", length: 13, nullable: true)]
    private ?string $nNature04nDebut = null;

    #[ORM\Column(name: "N_Nature04N_Fin", length: 13, nullable: true)]
    private ?string $nNature04nFin = null;

    #[ORM\Column(name: "N_Nature04CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgRegroup = null;

    #[ORM\Column(name: "N_Nature04CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgAnalytique = null;

    #[ORM\Column(name: "N_Nature04CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgEcheance = null;

    #[ORM\Column(name: "N_Nature04CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgQuantite = null;

    #[ORM\Column(name: "N_Nature04CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgDevise = null;

    #[ORM\Column(name: "N_Nature04N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04nDevise = null;

    #[ORM\Column(name: "N_Nature04CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgLettrage = null;

    #[ORM\Column(name: "N_Nature04CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgTiers = null;

    #[ORM\Column(name: "N_Nature04CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgReport = null;

    #[ORM\Column(name: "N_Nature04CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature04cgReportanal = null;

    #[ORM\Column(name: "N_Nature05N_Debut", length: 13, nullable: true)]
    private ?string $nNature05nDebut = null;

    #[ORM\Column(name: "N_Nature05N_Fin", length: 13, nullable: true)]
    private ?string $nNature05nFin = null;

    #[ORM\Column(name: "N_Nature05CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgRegroup = null;

    #[ORM\Column(name: "N_Nature05CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgAnalytique = null;

    #[ORM\Column(name: "N_Nature05CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgEcheance = null;

    #[ORM\Column(name: "N_Nature05CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgQuantite = null;

    #[ORM\Column(name: "N_Nature05CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgDevise = null;

    #[ORM\Column(name: "N_Nature05N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05nDevise = null;

    #[ORM\Column(name: "N_Nature05CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgLettrage = null;

    #[ORM\Column(name: "N_Nature05CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgTiers = null;

    #[ORM\Column(name: "N_Nature05CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgReport = null;

    #[ORM\Column(name: "N_Nature05CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature05cgReportanal = null;

    #[ORM\Column(name: "N_Nature06N_Debut", length: 13, nullable: true)]
    private ?string $nNature06nDebut = null;

    #[ORM\Column(name: "N_Nature06N_Fin", length: 13, nullable: true)]
    private ?string $nNature06nFin = null;

    #[ORM\Column(name: "N_Nature06CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgRegroup = null;

    #[ORM\Column(name: "N_Nature06CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgAnalytique = null;

    #[ORM\Column(name: "N_Nature06CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgEcheance = null;

    #[ORM\Column(name: "N_Nature06CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgQuantite = null;

    #[ORM\Column(name: "N_Nature06CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgDevise = null;

    #[ORM\Column(name: "N_Nature06N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06nDevise = null;

    #[ORM\Column(name: "N_Nature06CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgLettrage = null;

    #[ORM\Column(name: "N_Nature06CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgTiers = null;

    #[ORM\Column(name: "N_Nature06CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgReport = null;

    #[ORM\Column(name: "N_Nature06CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature06cgReportanal = null;

    #[ORM\Column(name: "N_Nature07N_Debut", length: 13, nullable: true)]
    private ?string $nNature07nDebut = null;

    #[ORM\Column(name: "N_Nature07N_Fin", length: 13, nullable: true)]
    private ?string $nNature07nFin = null;

    #[ORM\Column(name: "N_Nature07CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgRegroup = null;

    #[ORM\Column(name: "N_Nature07CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgAnalytique = null;

    #[ORM\Column(name: "N_Nature07CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgEcheance = null;

    #[ORM\Column(name: "N_Nature07CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgQuantite = null;

    #[ORM\Column(name: "N_Nature07CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgDevise = null;

    #[ORM\Column(name: "N_Nature07N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07nDevise = null;

    #[ORM\Column(name: "N_Nature07CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgLettrage = null;

    #[ORM\Column(name: "N_Nature07CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgTiers = null;

    #[ORM\Column(name: "N_Nature07CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgReport = null;

    #[ORM\Column(name: "N_Nature07CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature07cgReportanal = null;

    #[ORM\Column(name: "N_Nature08N_Debut", length: 13, nullable: true)]
    private ?string $nNature08nDebut = null;

    #[ORM\Column(name: "N_Nature08N_Fin", length: 13, nullable: true)]
    private ?string $nNature08nFin = null;

    #[ORM\Column(name: "N_Nature08CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgRegroup = null;

    #[ORM\Column(name: "N_Nature08CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgAnalytique = null;

    #[ORM\Column(name: "N_Nature08CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgEcheance = null;

    #[ORM\Column(name: "N_Nature08CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgQuantite = null;

    #[ORM\Column(name: "N_Nature08CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgDevise = null;

    #[ORM\Column(name: "N_Nature08N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08nDevise = null;

    #[ORM\Column(name: "N_Nature08CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgLettrage = null;

    #[ORM\Column(name: "N_Nature08CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgTiers = null;

    #[ORM\Column(name: "N_Nature08CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgReport = null;

    #[ORM\Column(name: "N_Nature08CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature08cgReportanal = null;

    #[ORM\Column(name: "N_Nature09N_Debut", length: 13, nullable: true)]
    private ?string $nNature09nDebut = null;

    #[ORM\Column(name: "N_Nature09N_Fin", length: 13, nullable: true)]
    private ?string $nNature09nFin = null;

    #[ORM\Column(name: "N_Nature09CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgRegroup = null;

    #[ORM\Column(name: "N_Nature09CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgAnalytique = null;

    #[ORM\Column(name: "N_Nature09CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgEcheance = null;

    #[ORM\Column(name: "N_Nature09CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgQuantite = null;

    #[ORM\Column(name: "N_Nature09CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgDevise = null;

    #[ORM\Column(name: "N_Nature09N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09nDevise = null;

    #[ORM\Column(name: "N_Nature09CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgLettrage = null;

    #[ORM\Column(name: "N_Nature09CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgTiers = null;

    #[ORM\Column(name: "N_Nature09CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgReport = null;

    #[ORM\Column(name: "N_Nature09CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature09cgReportanal = null;

    #[ORM\Column(name: "N_Nature10N_Debut", length: 13, nullable: true)]
    private ?string $nNature10nDebut = null;

    #[ORM\Column(name: "N_Nature10N_Fin", length: 13, nullable: true)]
    private ?string $nNature10nFin = null;

    #[ORM\Column(name: "N_Nature10CG_Regroup", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgRegroup = null;

    #[ORM\Column(name: "N_Nature10CG_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgAnalytique = null;

    #[ORM\Column(name: "N_Nature10CG_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgEcheance = null;

    #[ORM\Column(name: "N_Nature10CG_Quantite", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgQuantite = null;

    #[ORM\Column(name: "N_Nature10CG_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgDevise = null;

    #[ORM\Column(name: "N_Nature10N_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10nDevise = null;

    #[ORM\Column(name: "N_Nature10CG_Lettrage", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgLettrage = null;

    #[ORM\Column(name: "N_Nature10CG_Tiers", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgTiers = null;

    #[ORM\Column(name: "N_Nature10CG_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgReport = null;

    #[ORM\Column(name: "N_Nature10CG_ReportAnal", type: Types::SMALLINT, nullable: true)]
    private ?int $nNature10cgReportanal = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getNNature01nDebut(): ?string
    {
        return $this->nNature01nDebut;
    }

    public function setNNature01nDebut(?string $nNature01nDebut): static
    {
        $this->nNature01nDebut = $nNature01nDebut;

        return $this;
    }

    public function getNNature01nFin(): ?string
    {
        return $this->nNature01nFin;
    }

    public function setNNature01nFin(?string $nNature01nFin): static
    {
        $this->nNature01nFin = $nNature01nFin;

        return $this;
    }

    public function getNNature01cgRegroup(): ?int
    {
        return $this->nNature01cgRegroup;
    }

    public function setNNature01cgRegroup(?int $nNature01cgRegroup): static
    {
        $this->nNature01cgRegroup = $nNature01cgRegroup;

        return $this;
    }

    public function getNNature01cgAnalytique(): ?int
    {
        return $this->nNature01cgAnalytique;
    }

    public function setNNature01cgAnalytique(?int $nNature01cgAnalytique): static
    {
        $this->nNature01cgAnalytique = $nNature01cgAnalytique;

        return $this;
    }

    public function getNNature01cgEcheance(): ?int
    {
        return $this->nNature01cgEcheance;
    }

    public function setNNature01cgEcheance(?int $nNature01cgEcheance): static
    {
        $this->nNature01cgEcheance = $nNature01cgEcheance;

        return $this;
    }

    public function getNNature01cgQuantite(): ?int
    {
        return $this->nNature01cgQuantite;
    }

    public function setNNature01cgQuantite(?int $nNature01cgQuantite): static
    {
        $this->nNature01cgQuantite = $nNature01cgQuantite;

        return $this;
    }

    public function getNNature01cgDevise(): ?int
    {
        return $this->nNature01cgDevise;
    }

    public function setNNature01cgDevise(?int $nNature01cgDevise): static
    {
        $this->nNature01cgDevise = $nNature01cgDevise;

        return $this;
    }

    public function getNNature01nDevise(): ?int
    {
        return $this->nNature01nDevise;
    }

    public function setNNature01nDevise(?int $nNature01nDevise): static
    {
        $this->nNature01nDevise = $nNature01nDevise;

        return $this;
    }

    public function getNNature01cgLettrage(): ?int
    {
        return $this->nNature01cgLettrage;
    }

    public function setNNature01cgLettrage(?int $nNature01cgLettrage): static
    {
        $this->nNature01cgLettrage = $nNature01cgLettrage;

        return $this;
    }

    public function getNNature01cgTiers(): ?int
    {
        return $this->nNature01cgTiers;
    }

    public function setNNature01cgTiers(?int $nNature01cgTiers): static
    {
        $this->nNature01cgTiers = $nNature01cgTiers;

        return $this;
    }

    public function getNNature01cgReport(): ?int
    {
        return $this->nNature01cgReport;
    }

    public function setNNature01cgReport(?int $nNature01cgReport): static
    {
        $this->nNature01cgReport = $nNature01cgReport;

        return $this;
    }

    public function getNNature01cgReportanal(): ?int
    {
        return $this->nNature01cgReportanal;
    }

    public function setNNature01cgReportanal(?int $nNature01cgReportanal): static
    {
        $this->nNature01cgReportanal = $nNature01cgReportanal;

        return $this;
    }

    public function getNNature02nDebut(): ?string
    {
        return $this->nNature02nDebut;
    }

    public function setNNature02nDebut(?string $nNature02nDebut): static
    {
        $this->nNature02nDebut = $nNature02nDebut;

        return $this;
    }

    public function getNNature02nFin(): ?string
    {
        return $this->nNature02nFin;
    }

    public function setNNature02nFin(?string $nNature02nFin): static
    {
        $this->nNature02nFin = $nNature02nFin;

        return $this;
    }

    public function getNNature02cgRegroup(): ?int
    {
        return $this->nNature02cgRegroup;
    }

    public function setNNature02cgRegroup(?int $nNature02cgRegroup): static
    {
        $this->nNature02cgRegroup = $nNature02cgRegroup;

        return $this;
    }

    public function getNNature02cgAnalytique(): ?int
    {
        return $this->nNature02cgAnalytique;
    }

    public function setNNature02cgAnalytique(?int $nNature02cgAnalytique): static
    {
        $this->nNature02cgAnalytique = $nNature02cgAnalytique;

        return $this;
    }

    public function getNNature02cgEcheance(): ?int
    {
        return $this->nNature02cgEcheance;
    }

    public function setNNature02cgEcheance(?int $nNature02cgEcheance): static
    {
        $this->nNature02cgEcheance = $nNature02cgEcheance;

        return $this;
    }

    public function getNNature02cgQuantite(): ?int
    {
        return $this->nNature02cgQuantite;
    }

    public function setNNature02cgQuantite(?int $nNature02cgQuantite): static
    {
        $this->nNature02cgQuantite = $nNature02cgQuantite;

        return $this;
    }

    public function getNNature02cgDevise(): ?int
    {
        return $this->nNature02cgDevise;
    }

    public function setNNature02cgDevise(?int $nNature02cgDevise): static
    {
        $this->nNature02cgDevise = $nNature02cgDevise;

        return $this;
    }

    public function getNNature02nDevise(): ?int
    {
        return $this->nNature02nDevise;
    }

    public function setNNature02nDevise(?int $nNature02nDevise): static
    {
        $this->nNature02nDevise = $nNature02nDevise;

        return $this;
    }

    public function getNNature02cgLettrage(): ?int
    {
        return $this->nNature02cgLettrage;
    }

    public function setNNature02cgLettrage(?int $nNature02cgLettrage): static
    {
        $this->nNature02cgLettrage = $nNature02cgLettrage;

        return $this;
    }

    public function getNNature02cgTiers(): ?int
    {
        return $this->nNature02cgTiers;
    }

    public function setNNature02cgTiers(?int $nNature02cgTiers): static
    {
        $this->nNature02cgTiers = $nNature02cgTiers;

        return $this;
    }

    public function getNNature02cgReport(): ?int
    {
        return $this->nNature02cgReport;
    }

    public function setNNature02cgReport(?int $nNature02cgReport): static
    {
        $this->nNature02cgReport = $nNature02cgReport;

        return $this;
    }

    public function getNNature02cgReportanal(): ?int
    {
        return $this->nNature02cgReportanal;
    }

    public function setNNature02cgReportanal(?int $nNature02cgReportanal): static
    {
        $this->nNature02cgReportanal = $nNature02cgReportanal;

        return $this;
    }

    public function getNNature03nDebut(): ?string
    {
        return $this->nNature03nDebut;
    }

    public function setNNature03nDebut(?string $nNature03nDebut): static
    {
        $this->nNature03nDebut = $nNature03nDebut;

        return $this;
    }

    public function getNNature03nFin(): ?string
    {
        return $this->nNature03nFin;
    }

    public function setNNature03nFin(?string $nNature03nFin): static
    {
        $this->nNature03nFin = $nNature03nFin;

        return $this;
    }

    public function getNNature03cgRegroup(): ?int
    {
        return $this->nNature03cgRegroup;
    }

    public function setNNature03cgRegroup(?int $nNature03cgRegroup): static
    {
        $this->nNature03cgRegroup = $nNature03cgRegroup;

        return $this;
    }

    public function getNNature03cgAnalytique(): ?int
    {
        return $this->nNature03cgAnalytique;
    }

    public function setNNature03cgAnalytique(?int $nNature03cgAnalytique): static
    {
        $this->nNature03cgAnalytique = $nNature03cgAnalytique;

        return $this;
    }

    public function getNNature03cgEcheance(): ?int
    {
        return $this->nNature03cgEcheance;
    }

    public function setNNature03cgEcheance(?int $nNature03cgEcheance): static
    {
        $this->nNature03cgEcheance = $nNature03cgEcheance;

        return $this;
    }

    public function getNNature03cgQuantite(): ?int
    {
        return $this->nNature03cgQuantite;
    }

    public function setNNature03cgQuantite(?int $nNature03cgQuantite): static
    {
        $this->nNature03cgQuantite = $nNature03cgQuantite;

        return $this;
    }

    public function getNNature03cgDevise(): ?int
    {
        return $this->nNature03cgDevise;
    }

    public function setNNature03cgDevise(?int $nNature03cgDevise): static
    {
        $this->nNature03cgDevise = $nNature03cgDevise;

        return $this;
    }

    public function getNNature03nDevise(): ?int
    {
        return $this->nNature03nDevise;
    }

    public function setNNature03nDevise(?int $nNature03nDevise): static
    {
        $this->nNature03nDevise = $nNature03nDevise;

        return $this;
    }

    public function getNNature03cgLettrage(): ?int
    {
        return $this->nNature03cgLettrage;
    }

    public function setNNature03cgLettrage(?int $nNature03cgLettrage): static
    {
        $this->nNature03cgLettrage = $nNature03cgLettrage;

        return $this;
    }

    public function getNNature03cgTiers(): ?int
    {
        return $this->nNature03cgTiers;
    }

    public function setNNature03cgTiers(?int $nNature03cgTiers): static
    {
        $this->nNature03cgTiers = $nNature03cgTiers;

        return $this;
    }

    public function getNNature03cgReport(): ?int
    {
        return $this->nNature03cgReport;
    }

    public function setNNature03cgReport(?int $nNature03cgReport): static
    {
        $this->nNature03cgReport = $nNature03cgReport;

        return $this;
    }

    public function getNNature03cgReportanal(): ?int
    {
        return $this->nNature03cgReportanal;
    }

    public function setNNature03cgReportanal(?int $nNature03cgReportanal): static
    {
        $this->nNature03cgReportanal = $nNature03cgReportanal;

        return $this;
    }

    public function getNNature04nDebut(): ?string
    {
        return $this->nNature04nDebut;
    }

    public function setNNature04nDebut(?string $nNature04nDebut): static
    {
        $this->nNature04nDebut = $nNature04nDebut;

        return $this;
    }

    public function getNNature04nFin(): ?string
    {
        return $this->nNature04nFin;
    }

    public function setNNature04nFin(?string $nNature04nFin): static
    {
        $this->nNature04nFin = $nNature04nFin;

        return $this;
    }

    public function getNNature04cgRegroup(): ?int
    {
        return $this->nNature04cgRegroup;
    }

    public function setNNature04cgRegroup(?int $nNature04cgRegroup): static
    {
        $this->nNature04cgRegroup = $nNature04cgRegroup;

        return $this;
    }

    public function getNNature04cgAnalytique(): ?int
    {
        return $this->nNature04cgAnalytique;
    }

    public function setNNature04cgAnalytique(?int $nNature04cgAnalytique): static
    {
        $this->nNature04cgAnalytique = $nNature04cgAnalytique;

        return $this;
    }

    public function getNNature04cgEcheance(): ?int
    {
        return $this->nNature04cgEcheance;
    }

    public function setNNature04cgEcheance(?int $nNature04cgEcheance): static
    {
        $this->nNature04cgEcheance = $nNature04cgEcheance;

        return $this;
    }

    public function getNNature04cgQuantite(): ?int
    {
        return $this->nNature04cgQuantite;
    }

    public function setNNature04cgQuantite(?int $nNature04cgQuantite): static
    {
        $this->nNature04cgQuantite = $nNature04cgQuantite;

        return $this;
    }

    public function getNNature04cgDevise(): ?int
    {
        return $this->nNature04cgDevise;
    }

    public function setNNature04cgDevise(?int $nNature04cgDevise): static
    {
        $this->nNature04cgDevise = $nNature04cgDevise;

        return $this;
    }

    public function getNNature04nDevise(): ?int
    {
        return $this->nNature04nDevise;
    }

    public function setNNature04nDevise(?int $nNature04nDevise): static
    {
        $this->nNature04nDevise = $nNature04nDevise;

        return $this;
    }

    public function getNNature04cgLettrage(): ?int
    {
        return $this->nNature04cgLettrage;
    }

    public function setNNature04cgLettrage(?int $nNature04cgLettrage): static
    {
        $this->nNature04cgLettrage = $nNature04cgLettrage;

        return $this;
    }

    public function getNNature04cgTiers(): ?int
    {
        return $this->nNature04cgTiers;
    }

    public function setNNature04cgTiers(?int $nNature04cgTiers): static
    {
        $this->nNature04cgTiers = $nNature04cgTiers;

        return $this;
    }

    public function getNNature04cgReport(): ?int
    {
        return $this->nNature04cgReport;
    }

    public function setNNature04cgReport(?int $nNature04cgReport): static
    {
        $this->nNature04cgReport = $nNature04cgReport;

        return $this;
    }

    public function getNNature04cgReportanal(): ?int
    {
        return $this->nNature04cgReportanal;
    }

    public function setNNature04cgReportanal(?int $nNature04cgReportanal): static
    {
        $this->nNature04cgReportanal = $nNature04cgReportanal;

        return $this;
    }

    public function getNNature05nDebut(): ?string
    {
        return $this->nNature05nDebut;
    }

    public function setNNature05nDebut(?string $nNature05nDebut): static
    {
        $this->nNature05nDebut = $nNature05nDebut;

        return $this;
    }

    public function getNNature05nFin(): ?string
    {
        return $this->nNature05nFin;
    }

    public function setNNature05nFin(?string $nNature05nFin): static
    {
        $this->nNature05nFin = $nNature05nFin;

        return $this;
    }

    public function getNNature05cgRegroup(): ?int
    {
        return $this->nNature05cgRegroup;
    }

    public function setNNature05cgRegroup(?int $nNature05cgRegroup): static
    {
        $this->nNature05cgRegroup = $nNature05cgRegroup;

        return $this;
    }

    public function getNNature05cgAnalytique(): ?int
    {
        return $this->nNature05cgAnalytique;
    }

    public function setNNature05cgAnalytique(?int $nNature05cgAnalytique): static
    {
        $this->nNature05cgAnalytique = $nNature05cgAnalytique;

        return $this;
    }

    public function getNNature05cgEcheance(): ?int
    {
        return $this->nNature05cgEcheance;
    }

    public function setNNature05cgEcheance(?int $nNature05cgEcheance): static
    {
        $this->nNature05cgEcheance = $nNature05cgEcheance;

        return $this;
    }

    public function getNNature05cgQuantite(): ?int
    {
        return $this->nNature05cgQuantite;
    }

    public function setNNature05cgQuantite(?int $nNature05cgQuantite): static
    {
        $this->nNature05cgQuantite = $nNature05cgQuantite;

        return $this;
    }

    public function getNNature05cgDevise(): ?int
    {
        return $this->nNature05cgDevise;
    }

    public function setNNature05cgDevise(?int $nNature05cgDevise): static
    {
        $this->nNature05cgDevise = $nNature05cgDevise;

        return $this;
    }

    public function getNNature05nDevise(): ?int
    {
        return $this->nNature05nDevise;
    }

    public function setNNature05nDevise(?int $nNature05nDevise): static
    {
        $this->nNature05nDevise = $nNature05nDevise;

        return $this;
    }

    public function getNNature05cgLettrage(): ?int
    {
        return $this->nNature05cgLettrage;
    }

    public function setNNature05cgLettrage(?int $nNature05cgLettrage): static
    {
        $this->nNature05cgLettrage = $nNature05cgLettrage;

        return $this;
    }

    public function getNNature05cgTiers(): ?int
    {
        return $this->nNature05cgTiers;
    }

    public function setNNature05cgTiers(?int $nNature05cgTiers): static
    {
        $this->nNature05cgTiers = $nNature05cgTiers;

        return $this;
    }

    public function getNNature05cgReport(): ?int
    {
        return $this->nNature05cgReport;
    }

    public function setNNature05cgReport(?int $nNature05cgReport): static
    {
        $this->nNature05cgReport = $nNature05cgReport;

        return $this;
    }

    public function getNNature05cgReportanal(): ?int
    {
        return $this->nNature05cgReportanal;
    }

    public function setNNature05cgReportanal(?int $nNature05cgReportanal): static
    {
        $this->nNature05cgReportanal = $nNature05cgReportanal;

        return $this;
    }

    public function getNNature06nDebut(): ?string
    {
        return $this->nNature06nDebut;
    }

    public function setNNature06nDebut(?string $nNature06nDebut): static
    {
        $this->nNature06nDebut = $nNature06nDebut;

        return $this;
    }

    public function getNNature06nFin(): ?string
    {
        return $this->nNature06nFin;
    }

    public function setNNature06nFin(?string $nNature06nFin): static
    {
        $this->nNature06nFin = $nNature06nFin;

        return $this;
    }

    public function getNNature06cgRegroup(): ?int
    {
        return $this->nNature06cgRegroup;
    }

    public function setNNature06cgRegroup(?int $nNature06cgRegroup): static
    {
        $this->nNature06cgRegroup = $nNature06cgRegroup;

        return $this;
    }

    public function getNNature06cgAnalytique(): ?int
    {
        return $this->nNature06cgAnalytique;
    }

    public function setNNature06cgAnalytique(?int $nNature06cgAnalytique): static
    {
        $this->nNature06cgAnalytique = $nNature06cgAnalytique;

        return $this;
    }

    public function getNNature06cgEcheance(): ?int
    {
        return $this->nNature06cgEcheance;
    }

    public function setNNature06cgEcheance(?int $nNature06cgEcheance): static
    {
        $this->nNature06cgEcheance = $nNature06cgEcheance;

        return $this;
    }

    public function getNNature06cgQuantite(): ?int
    {
        return $this->nNature06cgQuantite;
    }

    public function setNNature06cgQuantite(?int $nNature06cgQuantite): static
    {
        $this->nNature06cgQuantite = $nNature06cgQuantite;

        return $this;
    }

    public function getNNature06cgDevise(): ?int
    {
        return $this->nNature06cgDevise;
    }

    public function setNNature06cgDevise(?int $nNature06cgDevise): static
    {
        $this->nNature06cgDevise = $nNature06cgDevise;

        return $this;
    }

    public function getNNature06nDevise(): ?int
    {
        return $this->nNature06nDevise;
    }

    public function setNNature06nDevise(?int $nNature06nDevise): static
    {
        $this->nNature06nDevise = $nNature06nDevise;

        return $this;
    }

    public function getNNature06cgLettrage(): ?int
    {
        return $this->nNature06cgLettrage;
    }

    public function setNNature06cgLettrage(?int $nNature06cgLettrage): static
    {
        $this->nNature06cgLettrage = $nNature06cgLettrage;

        return $this;
    }

    public function getNNature06cgTiers(): ?int
    {
        return $this->nNature06cgTiers;
    }

    public function setNNature06cgTiers(?int $nNature06cgTiers): static
    {
        $this->nNature06cgTiers = $nNature06cgTiers;

        return $this;
    }

    public function getNNature06cgReport(): ?int
    {
        return $this->nNature06cgReport;
    }

    public function setNNature06cgReport(?int $nNature06cgReport): static
    {
        $this->nNature06cgReport = $nNature06cgReport;

        return $this;
    }

    public function getNNature06cgReportanal(): ?int
    {
        return $this->nNature06cgReportanal;
    }

    public function setNNature06cgReportanal(?int $nNature06cgReportanal): static
    {
        $this->nNature06cgReportanal = $nNature06cgReportanal;

        return $this;
    }

    public function getNNature07nDebut(): ?string
    {
        return $this->nNature07nDebut;
    }

    public function setNNature07nDebut(?string $nNature07nDebut): static
    {
        $this->nNature07nDebut = $nNature07nDebut;

        return $this;
    }

    public function getNNature07nFin(): ?string
    {
        return $this->nNature07nFin;
    }

    public function setNNature07nFin(?string $nNature07nFin): static
    {
        $this->nNature07nFin = $nNature07nFin;

        return $this;
    }

    public function getNNature07cgRegroup(): ?int
    {
        return $this->nNature07cgRegroup;
    }

    public function setNNature07cgRegroup(?int $nNature07cgRegroup): static
    {
        $this->nNature07cgRegroup = $nNature07cgRegroup;

        return $this;
    }

    public function getNNature07cgAnalytique(): ?int
    {
        return $this->nNature07cgAnalytique;
    }

    public function setNNature07cgAnalytique(?int $nNature07cgAnalytique): static
    {
        $this->nNature07cgAnalytique = $nNature07cgAnalytique;

        return $this;
    }

    public function getNNature07cgEcheance(): ?int
    {
        return $this->nNature07cgEcheance;
    }

    public function setNNature07cgEcheance(?int $nNature07cgEcheance): static
    {
        $this->nNature07cgEcheance = $nNature07cgEcheance;

        return $this;
    }

    public function getNNature07cgQuantite(): ?int
    {
        return $this->nNature07cgQuantite;
    }

    public function setNNature07cgQuantite(?int $nNature07cgQuantite): static
    {
        $this->nNature07cgQuantite = $nNature07cgQuantite;

        return $this;
    }

    public function getNNature07cgDevise(): ?int
    {
        return $this->nNature07cgDevise;
    }

    public function setNNature07cgDevise(?int $nNature07cgDevise): static
    {
        $this->nNature07cgDevise = $nNature07cgDevise;

        return $this;
    }

    public function getNNature07nDevise(): ?int
    {
        return $this->nNature07nDevise;
    }

    public function setNNature07nDevise(?int $nNature07nDevise): static
    {
        $this->nNature07nDevise = $nNature07nDevise;

        return $this;
    }

    public function getNNature07cgLettrage(): ?int
    {
        return $this->nNature07cgLettrage;
    }

    public function setNNature07cgLettrage(?int $nNature07cgLettrage): static
    {
        $this->nNature07cgLettrage = $nNature07cgLettrage;

        return $this;
    }

    public function getNNature07cgTiers(): ?int
    {
        return $this->nNature07cgTiers;
    }

    public function setNNature07cgTiers(?int $nNature07cgTiers): static
    {
        $this->nNature07cgTiers = $nNature07cgTiers;

        return $this;
    }

    public function getNNature07cgReport(): ?int
    {
        return $this->nNature07cgReport;
    }

    public function setNNature07cgReport(?int $nNature07cgReport): static
    {
        $this->nNature07cgReport = $nNature07cgReport;

        return $this;
    }

    public function getNNature07cgReportanal(): ?int
    {
        return $this->nNature07cgReportanal;
    }

    public function setNNature07cgReportanal(?int $nNature07cgReportanal): static
    {
        $this->nNature07cgReportanal = $nNature07cgReportanal;

        return $this;
    }

    public function getNNature08nDebut(): ?string
    {
        return $this->nNature08nDebut;
    }

    public function setNNature08nDebut(?string $nNature08nDebut): static
    {
        $this->nNature08nDebut = $nNature08nDebut;

        return $this;
    }

    public function getNNature08nFin(): ?string
    {
        return $this->nNature08nFin;
    }

    public function setNNature08nFin(?string $nNature08nFin): static
    {
        $this->nNature08nFin = $nNature08nFin;

        return $this;
    }

    public function getNNature08cgRegroup(): ?int
    {
        return $this->nNature08cgRegroup;
    }

    public function setNNature08cgRegroup(?int $nNature08cgRegroup): static
    {
        $this->nNature08cgRegroup = $nNature08cgRegroup;

        return $this;
    }

    public function getNNature08cgAnalytique(): ?int
    {
        return $this->nNature08cgAnalytique;
    }

    public function setNNature08cgAnalytique(?int $nNature08cgAnalytique): static
    {
        $this->nNature08cgAnalytique = $nNature08cgAnalytique;

        return $this;
    }

    public function getNNature08cgEcheance(): ?int
    {
        return $this->nNature08cgEcheance;
    }

    public function setNNature08cgEcheance(?int $nNature08cgEcheance): static
    {
        $this->nNature08cgEcheance = $nNature08cgEcheance;

        return $this;
    }

    public function getNNature08cgQuantite(): ?int
    {
        return $this->nNature08cgQuantite;
    }

    public function setNNature08cgQuantite(?int $nNature08cgQuantite): static
    {
        $this->nNature08cgQuantite = $nNature08cgQuantite;

        return $this;
    }

    public function getNNature08cgDevise(): ?int
    {
        return $this->nNature08cgDevise;
    }

    public function setNNature08cgDevise(?int $nNature08cgDevise): static
    {
        $this->nNature08cgDevise = $nNature08cgDevise;

        return $this;
    }

    public function getNNature08nDevise(): ?int
    {
        return $this->nNature08nDevise;
    }

    public function setNNature08nDevise(?int $nNature08nDevise): static
    {
        $this->nNature08nDevise = $nNature08nDevise;

        return $this;
    }

    public function getNNature08cgLettrage(): ?int
    {
        return $this->nNature08cgLettrage;
    }

    public function setNNature08cgLettrage(?int $nNature08cgLettrage): static
    {
        $this->nNature08cgLettrage = $nNature08cgLettrage;

        return $this;
    }

    public function getNNature08cgTiers(): ?int
    {
        return $this->nNature08cgTiers;
    }

    public function setNNature08cgTiers(?int $nNature08cgTiers): static
    {
        $this->nNature08cgTiers = $nNature08cgTiers;

        return $this;
    }

    public function getNNature08cgReport(): ?int
    {
        return $this->nNature08cgReport;
    }

    public function setNNature08cgReport(?int $nNature08cgReport): static
    {
        $this->nNature08cgReport = $nNature08cgReport;

        return $this;
    }

    public function getNNature08cgReportanal(): ?int
    {
        return $this->nNature08cgReportanal;
    }

    public function setNNature08cgReportanal(?int $nNature08cgReportanal): static
    {
        $this->nNature08cgReportanal = $nNature08cgReportanal;

        return $this;
    }

    public function getNNature09nDebut(): ?string
    {
        return $this->nNature09nDebut;
    }

    public function setNNature09nDebut(?string $nNature09nDebut): static
    {
        $this->nNature09nDebut = $nNature09nDebut;

        return $this;
    }

    public function getNNature09nFin(): ?string
    {
        return $this->nNature09nFin;
    }

    public function setNNature09nFin(?string $nNature09nFin): static
    {
        $this->nNature09nFin = $nNature09nFin;

        return $this;
    }

    public function getNNature09cgRegroup(): ?int
    {
        return $this->nNature09cgRegroup;
    }

    public function setNNature09cgRegroup(?int $nNature09cgRegroup): static
    {
        $this->nNature09cgRegroup = $nNature09cgRegroup;

        return $this;
    }

    public function getNNature09cgAnalytique(): ?int
    {
        return $this->nNature09cgAnalytique;
    }

    public function setNNature09cgAnalytique(?int $nNature09cgAnalytique): static
    {
        $this->nNature09cgAnalytique = $nNature09cgAnalytique;

        return $this;
    }

    public function getNNature09cgEcheance(): ?int
    {
        return $this->nNature09cgEcheance;
    }

    public function setNNature09cgEcheance(?int $nNature09cgEcheance): static
    {
        $this->nNature09cgEcheance = $nNature09cgEcheance;

        return $this;
    }

    public function getNNature09cgQuantite(): ?int
    {
        return $this->nNature09cgQuantite;
    }

    public function setNNature09cgQuantite(?int $nNature09cgQuantite): static
    {
        $this->nNature09cgQuantite = $nNature09cgQuantite;

        return $this;
    }

    public function getNNature09cgDevise(): ?int
    {
        return $this->nNature09cgDevise;
    }

    public function setNNature09cgDevise(?int $nNature09cgDevise): static
    {
        $this->nNature09cgDevise = $nNature09cgDevise;

        return $this;
    }

    public function getNNature09nDevise(): ?int
    {
        return $this->nNature09nDevise;
    }

    public function setNNature09nDevise(?int $nNature09nDevise): static
    {
        $this->nNature09nDevise = $nNature09nDevise;

        return $this;
    }

    public function getNNature09cgLettrage(): ?int
    {
        return $this->nNature09cgLettrage;
    }

    public function setNNature09cgLettrage(?int $nNature09cgLettrage): static
    {
        $this->nNature09cgLettrage = $nNature09cgLettrage;

        return $this;
    }

    public function getNNature09cgTiers(): ?int
    {
        return $this->nNature09cgTiers;
    }

    public function setNNature09cgTiers(?int $nNature09cgTiers): static
    {
        $this->nNature09cgTiers = $nNature09cgTiers;

        return $this;
    }

    public function getNNature09cgReport(): ?int
    {
        return $this->nNature09cgReport;
    }

    public function setNNature09cgReport(?int $nNature09cgReport): static
    {
        $this->nNature09cgReport = $nNature09cgReport;

        return $this;
    }

    public function getNNature09cgReportanal(): ?int
    {
        return $this->nNature09cgReportanal;
    }

    public function setNNature09cgReportanal(?int $nNature09cgReportanal): static
    {
        $this->nNature09cgReportanal = $nNature09cgReportanal;

        return $this;
    }

    public function getNNature10nDebut(): ?string
    {
        return $this->nNature10nDebut;
    }

    public function setNNature10nDebut(?string $nNature10nDebut): static
    {
        $this->nNature10nDebut = $nNature10nDebut;

        return $this;
    }

    public function getNNature10nFin(): ?string
    {
        return $this->nNature10nFin;
    }

    public function setNNature10nFin(?string $nNature10nFin): static
    {
        $this->nNature10nFin = $nNature10nFin;

        return $this;
    }

    public function getNNature10cgRegroup(): ?int
    {
        return $this->nNature10cgRegroup;
    }

    public function setNNature10cgRegroup(?int $nNature10cgRegroup): static
    {
        $this->nNature10cgRegroup = $nNature10cgRegroup;

        return $this;
    }

    public function getNNature10cgAnalytique(): ?int
    {
        return $this->nNature10cgAnalytique;
    }

    public function setNNature10cgAnalytique(?int $nNature10cgAnalytique): static
    {
        $this->nNature10cgAnalytique = $nNature10cgAnalytique;

        return $this;
    }

    public function getNNature10cgEcheance(): ?int
    {
        return $this->nNature10cgEcheance;
    }

    public function setNNature10cgEcheance(?int $nNature10cgEcheance): static
    {
        $this->nNature10cgEcheance = $nNature10cgEcheance;

        return $this;
    }

    public function getNNature10cgQuantite(): ?int
    {
        return $this->nNature10cgQuantite;
    }

    public function setNNature10cgQuantite(?int $nNature10cgQuantite): static
    {
        $this->nNature10cgQuantite = $nNature10cgQuantite;

        return $this;
    }

    public function getNNature10cgDevise(): ?int
    {
        return $this->nNature10cgDevise;
    }

    public function setNNature10cgDevise(?int $nNature10cgDevise): static
    {
        $this->nNature10cgDevise = $nNature10cgDevise;

        return $this;
    }

    public function getNNature10nDevise(): ?int
    {
        return $this->nNature10nDevise;
    }

    public function setNNature10nDevise(?int $nNature10nDevise): static
    {
        $this->nNature10nDevise = $nNature10nDevise;

        return $this;
    }

    public function getNNature10cgLettrage(): ?int
    {
        return $this->nNature10cgLettrage;
    }

    public function setNNature10cgLettrage(?int $nNature10cgLettrage): static
    {
        $this->nNature10cgLettrage = $nNature10cgLettrage;

        return $this;
    }

    public function getNNature10cgTiers(): ?int
    {
        return $this->nNature10cgTiers;
    }

    public function setNNature10cgTiers(?int $nNature10cgTiers): static
    {
        $this->nNature10cgTiers = $nNature10cgTiers;

        return $this;
    }

    public function getNNature10cgReport(): ?int
    {
        return $this->nNature10cgReport;
    }

    public function setNNature10cgReport(?int $nNature10cgReport): static
    {
        $this->nNature10cgReport = $nNature10cgReport;

        return $this;
    }

    public function getNNature10cgReportanal(): ?int
    {
        return $this->nNature10cgReportanal;
    }

    public function setNNature10cgReportanal(?int $nNature10cgReportanal): static
    {
        $this->nNature10cgReportanal = $nNature10cgReportanal;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
