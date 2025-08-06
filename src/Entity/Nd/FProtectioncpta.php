<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FProtectioncptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_PROTECTIONCPTA')]
#[ORM\UniqueConstraint(name: 'IPROTCPTA_USER', columns: ['cbCIPROT_User'])]
#[ORM\UniqueConstraint(name: 'IPROTCPTA_NO', columns: ['PROT_No'])]
#[ORM\Index(name: 'IPROTCPTA_PROFIL', columns: ['PROT_UserProfil'])]
#[ORM\Index(name: 'FKIA_F_PROTECTIONCPTA_PROT_UserProfil', columns: ['cbPROT_UserProfil'])]
#[ORM\Entity(repositoryClass: FProtectioncptaRepository::class)]
class FProtectioncpta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PROT_User", length: 35)]
    private ?string $protUser = null;

    #[ORM\Column(name: "cbCIPROT_User", type: Types::BINARY, nullable: true)]
    private $cbciprotUser = null;

    #[ORM\Column(name: "PROT_Description", length: 35, nullable: true)]
    private ?string $protDescription = null;

    #[ORM\Column(name: "PROT_Right", type: Types::SMALLINT, nullable: true)]
    private ?int $protRight = null;

    #[ORM\Column(name: "PROT_No", nullable: true)]
    private ?int $protNo = null;

    #[ORM\Column(name: "PROT_EMail", length: 69, nullable: true)]
    private ?string $protEmail = null;

    #[ORM\Column(name: "PROT_UserProfil", nullable: true)]
    private ?int $protUserprofil = null;

    #[ORM\Column(name: "cbPROT_UserProfil", nullable: true)]
    private ?int $cbprotUserprofil = null;

    #[ORM\Column(name: "PROT_Administrator", type: Types::SMALLINT, nullable: true)]
    private ?int $protAdministrator = null;

    #[ORM\Column(name: "PROT_DatePwd", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $protDatepwd = null;

    #[ORM\Column(name: "PROT_DateCreate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $protDatecreate = null;

    #[ORM\Column(name: "PROT_LastLoginDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $protLastlogindate = null;

    #[ORM\Column(name: "PROT_LastLoginTime", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $protLastlogintime = null;

    #[ORM\Column(name: "PROT_PwdStatus", type: Types::SMALLINT, nullable: true)]
    private ?int $protPwdstatus = null;

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

    #[ORM\Column(name: "PROT_Disabled", type: Types::SMALLINT, nullable: true)]
    private ?int $protDisabled = null;

    #[ORM\Column(name: "PROT_ApplicationRight", nullable: true)]
    private ?int $protApplicationright = null;

    #[ORM\Column(name: "PROT_AllowExternalAccess", type: Types::SMALLINT, nullable: true)]
    private ?int $protAllowexternalaccess = null;

    #[ORM\Column(name: "PROT_Guid", type: Types::GUID, nullable: true)]
    private ?string $protGuid = null;

    #[ORM\Column(name: "PROT_Hash", type: Types::BINARY, nullable: true)]
    private $protHash = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getProtUser(): ?string
    {
        return $this->protUser;
    }

    public function setProtUser(string $protUser): static
    {
        $this->protUser = $protUser;

        return $this;
    }

    public function getCbciprotUser()
    {
        return $this->cbciprotUser;
    }

    public function setCbciprotUser($cbciprotUser): static
    {
        $this->cbciprotUser = $cbciprotUser;

        return $this;
    }

    public function getProtDescription(): ?string
    {
        return $this->protDescription;
    }

    public function setProtDescription(?string $protDescription): static
    {
        $this->protDescription = $protDescription;

        return $this;
    }

    public function getProtRight(): ?int
    {
        return $this->protRight;
    }

    public function setProtRight(?int $protRight): static
    {
        $this->protRight = $protRight;

        return $this;
    }

    public function getProtNo(): ?int
    {
        return $this->protNo;
    }

    public function setProtNo(?int $protNo): static
    {
        $this->protNo = $protNo;

        return $this;
    }

    public function getProtEmail(): ?string
    {
        return $this->protEmail;
    }

    public function setProtEmail(?string $protEmail): static
    {
        $this->protEmail = $protEmail;

        return $this;
    }

    public function getProtUserprofil(): ?int
    {
        return $this->protUserprofil;
    }

    public function setProtUserprofil(?int $protUserprofil): static
    {
        $this->protUserprofil = $protUserprofil;

        return $this;
    }

    public function getCbprotUserprofil(): ?int
    {
        return $this->cbprotUserprofil;
    }

    public function setCbprotUserprofil(?int $cbprotUserprofil): static
    {
        $this->cbprotUserprofil = $cbprotUserprofil;

        return $this;
    }

    public function getProtAdministrator(): ?int
    {
        return $this->protAdministrator;
    }

    public function setProtAdministrator(?int $protAdministrator): static
    {
        $this->protAdministrator = $protAdministrator;

        return $this;
    }

    public function getProtDatepwd(): ?\DateTimeInterface
    {
        return $this->protDatepwd;
    }

    public function setProtDatepwd(?\DateTimeInterface $protDatepwd): static
    {
        $this->protDatepwd = $protDatepwd;

        return $this;
    }

    public function getProtDatecreate(): ?\DateTimeInterface
    {
        return $this->protDatecreate;
    }

    public function setProtDatecreate(?\DateTimeInterface $protDatecreate): static
    {
        $this->protDatecreate = $protDatecreate;

        return $this;
    }

    public function getProtLastlogindate(): ?\DateTimeInterface
    {
        return $this->protLastlogindate;
    }

    public function setProtLastlogindate(?\DateTimeInterface $protLastlogindate): static
    {
        $this->protLastlogindate = $protLastlogindate;

        return $this;
    }

    public function getProtLastlogintime(): ?string
    {
        return $this->protLastlogintime;
    }

    public function setProtLastlogintime(?string $protLastlogintime): static
    {
        $this->protLastlogintime = $protLastlogintime;

        return $this;
    }

    public function getProtPwdstatus(): ?int
    {
        return $this->protPwdstatus;
    }

    public function setProtPwdstatus(?int $protPwdstatus): static
    {
        $this->protPwdstatus = $protPwdstatus;

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

    public function getProtDisabled(): ?int
    {
        return $this->protDisabled;
    }

    public function setProtDisabled(?int $protDisabled): static
    {
        $this->protDisabled = $protDisabled;

        return $this;
    }

    public function getProtApplicationright(): ?int
    {
        return $this->protApplicationright;
    }

    public function setProtApplicationright(?int $protApplicationright): static
    {
        $this->protApplicationright = $protApplicationright;

        return $this;
    }

    public function getProtAllowexternalaccess(): ?int
    {
        return $this->protAllowexternalaccess;
    }

    public function setProtAllowexternalaccess(?int $protAllowexternalaccess): static
    {
        $this->protAllowexternalaccess = $protAllowexternalaccess;

        return $this;
    }

    public function getProtGuid(): ?string
    {
        return $this->protGuid;
    }

    public function setProtGuid(?string $protGuid): static
    {
        $this->protGuid = $protGuid;

        return $this;
    }

    public function getProtHash()
    {
        return $this->protHash;
    }

    public function setProtHash($protHash): static
    {
        $this->protHash = $protHash;

        return $this;
    }
}
