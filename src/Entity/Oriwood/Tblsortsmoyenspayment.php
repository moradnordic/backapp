<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\TblsortsmoyenspaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblSortsMoyensPayment')]
#[ORM\Entity(repositoryClass: TblsortsmoyenspaymentRepository::class)]
class Tblsortsmoyenspayment
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Sorts", length: 255, nullable: true)]
    private ?string $sorts = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getSorts(): ?string
    {
        return $this->sorts;
    }

    public function setSorts(?string $sorts): static
    {
        $this->sorts = $sorts;

        return $this;
    }
}
