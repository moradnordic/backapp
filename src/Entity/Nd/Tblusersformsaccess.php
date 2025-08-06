<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblusersformsaccessRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblUsersFormsAccess')]
#[ORM\Entity(repositoryClass: TblusersformsaccessRepository::class)]
class Tblusersformsaccess
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "UserId", nullable: true)]
    private ?int $userid = null;

    #[ORM\Column(name: "Forms", nullable: true)]
    private ?int $forms = null;

    #[ORM\Column(name: "CanOpen")]
    private ?bool $canopen = null;

    #[ORM\Column(name: "CanAddData")]
    private ?bool $canadddata = null;

    #[ORM\Column(name: "CanModifyData")]
    private ?bool $canmodifydata = null;

    #[ORM\Column(name: "CanDeleteData")]
    private ?bool $candeletedata = null;

    #[ORM\Column(name: "FormaDataReadOnly")]
    private ?bool $formadatareadonly = null;

    #[ORM\Column(name: "CanValidateDoc")]
    private ?bool $canvalidatedoc = null;

    #[ORM\Column(name: "CanBloqueDoc")]
    private ?bool $canbloquedoc = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(?int $userid): static
    {
        $this->userid = $userid;

        return $this;
    }

    public function getForms(): ?int
    {
        return $this->forms;
    }

    public function setForms(?int $forms): static
    {
        $this->forms = $forms;

        return $this;
    }

    public function getCanopen(): ?bool
    {
        return $this->canopen;
    }

    public function setCanopen(bool $canopen): static
    {
        $this->canopen = $canopen;

        return $this;
    }

    public function getCanadddata(): ?bool
    {
        return $this->canadddata;
    }

    public function setCanadddata(bool $canadddata): static
    {
        $this->canadddata = $canadddata;

        return $this;
    }

    public function getCanmodifydata(): ?bool
    {
        return $this->canmodifydata;
    }

    public function setCanmodifydata(bool $canmodifydata): static
    {
        $this->canmodifydata = $canmodifydata;

        return $this;
    }

    public function getCandeletedata(): ?bool
    {
        return $this->candeletedata;
    }

    public function setCandeletedata(bool $candeletedata): static
    {
        $this->candeletedata = $candeletedata;

        return $this;
    }

    public function getFormadatareadonly(): ?bool
    {
        return $this->formadatareadonly;
    }

    public function setFormadatareadonly(bool $formadatareadonly): static
    {
        $this->formadatareadonly = $formadatareadonly;

        return $this;
    }

    public function getCanvalidatedoc(): ?bool
    {
        return $this->canvalidatedoc;
    }

    public function setCanvalidatedoc(bool $canvalidatedoc): static
    {
        $this->canvalidatedoc = $canvalidatedoc;

        return $this;
    }

    public function getCanbloquedoc(): ?bool
    {
        return $this->canbloquedoc;
    }

    public function setCanbloquedoc(bool $canbloquedoc): static
    {
        $this->canbloquedoc = $canbloquedoc;

        return $this;
    }
}
