<?php

namespace App\Entity\SageSystem;

use App\Repository\SageSystem\StockEmplacementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Stock_Emplacement')]
#[ORM\Entity(repositoryClass: StockEmplacementRepository::class)]
class StockEmplacement
{
    #[ORM\Column(name: "Id")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "AR_Ref", length: 50)]
    private ?string $arRef = null;

    #[ORM\Column(name: "Qte")]
    private ?float $qte = null;

    #[ORM\Column(name: "Emplacement_Id")]
    private ?int $emplacementId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): static
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(float $qte): static
    {
        $this->qte = $qte;

        return $this;
    }

    public function getEmplacementId(): ?int
    {
        return $this->emplacementId;
    }

    public function setEmplacementId(int $emplacementId): static
    {
        $this->emplacementId = $emplacementId;

        return $this;
    }
}
